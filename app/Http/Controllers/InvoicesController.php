<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use LaravelDaily\Invoices\Invoice;
use LaravelDaily\Invoices\Classes\Buyer;
use LaravelDaily\Invoices\Classes\InvoiceItem;

class InvoicesController extends Controller
{
    public function __invoke(Order $order)
    {

        if ($order->user_id != auth()->id() && auth()->user()->hasAnyRole(['super', 'manager'])) {
            $user = $order->user;
        } elseif ($order->user_id == auth()->id()) {
            $user = auth()->user();
        } else {
            abort(403);
        }

        $customer = new Buyer([
            'name'          => $user->first_name . ' ' . $user->last_name,
            'address' =>    $order->address . ' ' . $order->city->title . ', ' . $order->city->state->title . ' ' . $order->zipcode,
            'custom_fields' => [
                'email' => $user->email,
            ],
        ]);

        $items = [];

        foreach (OrderItem::where('order_id', $order->id)->get() as $orderItem) {
            $items[] = (new InvoiceItem())->title($orderItem->item->product->title . ': ' . $orderItem->item->internal_number)->pricePerUnit($orderItem->sale_price / 100)->quantity($orderItem->quantity);
        }

        $invoice = Invoice::make()
            ->series('EVANS')
            ->setCustomData($order->purchase_order_code)
            ->name('Order')
            ->buyer($customer)
            ->notes('This is not an invoice. Do not pay.')
            ->addItems($items)
            ->dateFormat('m/d/Y')
            ->logo(asset('assets/media/logos/logo.png'));

        return $invoice->stream();
    }
}
