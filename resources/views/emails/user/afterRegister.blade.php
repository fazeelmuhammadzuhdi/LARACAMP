@component('mail::message')
    # Welcome

    Hi {{ $user->name }}
    <br>
    Welcom to Laracamp, Your Account has Been Created Successfully. Now you can choose your best Match Camp!

    @component('mail::button', ['url' => route('login')])
        LOGIN HERE
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
