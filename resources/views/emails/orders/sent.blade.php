@component('mail::message')
# Hello

{{ auth()->user()->formattedName() }} has just sent you an order.

@component('mail::button', ['url' => $url])
View Order
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
