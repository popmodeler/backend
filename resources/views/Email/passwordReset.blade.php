@component('mail::message')
# Reset Password
To reset your password click on the button

@component('mail::button', ['url' => 'http://localhost:8000/reset/'.$token])
Reset Password
@endcomponent

Thanks,<br>
PoP Modeler
@endcomponent