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
}
