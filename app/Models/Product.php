<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(ProductCategory::class);
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function image()
    {
        return $this->images()->first()->url;
    }

    public function stockText()
    {
        if ($this->stock == -1) {
            return "Productie op aanvraag";
        } else if ($this->stock == 0) {
            return "Niet op voorraad"
        } else {
            return "${this->stock} producten op voorraad"
        }
    }

    public function shippingCostCents(string $countryCode = null)
    {
        if (!in_array($countryCode, ["NL", "BE", "DE"])) {
            $countryCode = "default";
        }
        return ShippingRate::where('countryCode', $countryCode)
            ->where('shippingType', $this->shipment_type)
            ->first()
            ->price_cents;
    }

    public function variantsArray(): array
    {
        // Todo: Implement this properly. Let's return a empty array for now.
        return [new variant("Test", "text", [])];
//        try {
//            return json_decode($this->variants);
//        } catch(Exception $e) {
//            return [];
//        }
    }
}


class variant
{
    public string $name;
    public function __construct(string $name, string $type, array $values, int $max_characters = 10)
    {
        $this->name = $name;
        $this->type= $type;
        $this->values = $values; // list of strings
        $this->max_characters = $max_characters;
    }
}
