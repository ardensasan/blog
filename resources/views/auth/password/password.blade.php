Click Here to reset your password: <br>
<a href="{{$link = url('reset-password', $token).'?email='.urlencode($user->getEmailForPasswordReset())}}">
{{$link}}
</a>
