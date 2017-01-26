We've received a request to reset the password for this email address (link expires in 1 hour ).<br>

<a href="{{ $link = url('password/reset', $token).'?email='.urlencode($user->getEmailForPasswordReset()) }}"> <b>{{ $link }}</b> </a>
