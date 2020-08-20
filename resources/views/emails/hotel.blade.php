@component('mail::message')

Welcome {{$username}} <br>
Thank you for the trust hope you enjoy the experience in our website .<br><br>

Your Login informations :<br><br>

<span class="has-text-weight-semibold">Username : </span>{{$username}}<br>
<span class="has-text-weight-semibold">E-mail   : </span>{{$email}}<br>
<span class="has-text-weight-semibold">Password : </span>{{$password}}<br><br>

<span class="has-text-warning">Note: you can login by username or email.</span><br>
<span class="has-text-danger">Note: Please don't share
   these informations to anyone else.</span><br>
@component('mail::button', ['url' => '127.0.0.1:8000/login'])
Login
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
