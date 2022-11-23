@component('mail::message')
    # Transaction Has Been Confirmed

    Hi {{ $checkout->User->name }}

    Your Transaction has Been Confirmed, now you can enjoy the class of {{ $checkout->Camp->title }} Camp.

    @component('mail::button', ['url' => route('user.dashboard')])
        My Dashboard
    @endcomponent

    Thanks,
    {{ config('app.name') }}
@endcomponent
