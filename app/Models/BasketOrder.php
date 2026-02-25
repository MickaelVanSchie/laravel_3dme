<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BasketOrder extends Model
{
    //
    protected $fillable = [
        'id',
        'address_id',
        'invoice_address_id',
        'email',
        'name',
        'last_name',
        'phone_number',
        'order_date', 'shipment_method',
        'track_and_trace',
        'mollie_payment_id',
        'mollie_order_id',
        'shippingCostCents',
        'discountCents',
        'actiecode',
        'paymentFee',
        'payment_method',
        'status',
        'invoice_id',
        'invoice_sent',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function mollieOrderLine(): array
    {
        $orderlines = [];
        if ($this->discountCents) {
            $orderlines[] = new MollieOrderLine([
                'lineType' => 'discount',
                'lineName' => "kortingscode {$this->actiecode}",
                'quantity' => 1,
                'unitPriceCents' => -$this->discountCents,
                'vatRate' => null
            ]);
        }
        if ($this->shippingCostCents) {
            $orderlines[] = new MollieOrderLine([
                'lineType' => 'shipping',
                'lineName' => 'Verzendkosten',
                'quantity' => 1,
                'unitPriceCents' => $this->shippingCostCents,
                'vatRate' => null
            ]);
        }
        if ($this->paymentFee) {
            $orderlines[] = new MollieOrderLine([
                'lineType' => 'fee',
                'lineName' => 'Betaalingskosten',
                'quantity' => 1,
                'unitPriceCents' => $this->payment_fee,
                'vatRate' => null
            ]);
        }
        return $orderlines;
    }
}
