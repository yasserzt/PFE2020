@include('header.header')
@component('mail::message')
<!-- # Introduction -->
Welcome  {{$username}} <br>
Thank you for the trust hope you enjoy the experience in our website .<br>

Your Login informations :<br>
<span class="has-text-weight-semibold">Username : {{$username}}</span> <br>
<span class="has-text-weight-semibold">E-mail   : {{$email}}</span> <br>
<span class="has-text-weight-semibold">Password : {{$password}}</span> <br><br>

<span class="has-text-weight-semibold">Note:</span> you can login by username or email.<br>
<span class="has-text-weight-semibold">Note: </span>Please don't share your  informations to anyone else.</span><br>

<p class="has-text-centered"><a href="{{url('login')}}" class="button bg-four is-large">Login</a></p>


Thanks,
<span class="has-text-weight-semibold">{{ config('app.name') }}</span>
@endcomponent
@include('scripts.script')
