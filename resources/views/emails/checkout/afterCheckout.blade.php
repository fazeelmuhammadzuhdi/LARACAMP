@component('mail::message')
    # Register Camp : {{ $checkout->Camp->title }}

    Hi {{ $checkout->User->name }}
    Thank you For Register on {{ $checkout->Camp->title }}, Please See The Payment Instruction By Click The Button
    Below.

    @component('mail::button', ['url' => route('dashboard')])
        My Dashboard
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
