@component('mail::message') # Hello, {{$user->name}}
<br> Thank you for registering for my Blog. @component('mail::button', ['url' => 'http://127.0.0.1:8000/']) Start Browsing
@endcomponent Thanks,
<br> Admin @endcomponent