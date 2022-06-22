<?php

namespace App\Mail;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Setting;
use Carbon\Carbon;

class OrderSent extends Mailable
{
    use Queueable, SerializesModels;

    public $email, $url;
    public $order;

    public $facebook;
    public $twitter;
    public $youtube;
    public $instagram;
    public $color;
    public $logo;
    public $notes;
    public $msg_order;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email, $url, $order_id, $notes= null)
    {
        $this->email = $email;
        $this->url = $url;
        $this->order = Order::find($order_id);

        $this->notes = $notes;
        $this->color = '#f3f3f3'; //#1B1B1B


        $this->logo = route('images', ['size' => 120, 'type' => 'logo']);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $user_name = auth()->user()->first_name;

        $this->facebook = Setting::where('title','facebook')->first()->value;
        $this->twitter = Setting::where('title','twitter')->first()->value;
        $this->youtube = Setting::where('title','youtube')->first()->value;
        $this->instagram = Setting::where('title','instagram')->first()->value;

        $this->msg_order = Setting::where('title','email_order')->first()->value;

        $this->msg_order = str_replace("%PO%", "<a href='{$this->url}'>{$this->order->purchase_order_code}</a>", $this->msg_order);
        $this->msg_order = str_replace("%USER%", "{$user_name}", $this->msg_order);
        $this->msg_order = str_replace("%DATE%", Carbon::parse($this->order->created_at)->format("m/d/Y"), $this->msg_order);
        $this->msg_order = str_replace("%DATETIME%", Carbon::parse($this->order->created_at)->format("m/d/Y H:i:s"), $this->msg_order);
        $this->msg_order = str_replace("%DATEHUMANS%", Carbon::parse($this->order->created_at)->diffForHumans(), $this->msg_order);


        $logo = "<img style='margin-left: 8px;margin-right:8px;' src='". route('images', ['size' => 20, 'type' => 'logo']) ."' width='20' />";

        $this->msg_order = str_replace("%LOGO%", $logo, $this->msg_order);

        $phone = Setting::where('title','email_phone')->first()->value;
        $address = Setting::where('title','email_address')->first()->value;

        return $this->from($this->email)
        ->subject(config('app.name')." PO#".$this->order->purchase_order_code." - ".$this->order->formattedTotal())
        ->markdown('emails.orders.order-detail', [
            'url' => $this->url,
            'order' => $this->order ,
            'phone' => $phone,
            'address' => $address
        ]);
    }
}
