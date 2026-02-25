<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BasketOrder extends Model
{
    protected $table = 'basketOrders';
    protected $fillable = [
        'addressId',
        'invoiceAddressId',
        'email',
        'name',
        'lastName',
        'phoneNumber',
        'orderDate',
        'shipmentMethod',
        'trackAndTrace',
        'molliePaymentId',
        'mollieOrderId',
        'shippingCostCents',
        'discountCents',
        'actiecode',
        'paymentFee',
        'paymentMethod',
        'status',
        'invoiceId',
        'invoiceSent',
    ];

    protected $casts = [
        'orderDate' => 'datetime',
        'invoiceSent' => 'boolean',
        'shippingcostCents' => 'integer',
        'discountCents' => 'integer',
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
                'unitPriceCents' => $this->paymentFee,
                'vatRate' => null
            ]);
        }
        return $orderlines;
    }
}
