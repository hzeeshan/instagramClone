@component('mail::message')
Welcome From InstagramClone Team

Enjoy using IntagramClone.

@component('mail::button', ['url' => '#'])
Verify your Account
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
