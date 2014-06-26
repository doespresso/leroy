<h1>Login</h1>

<!-- check for login error flash var -->
@if (Session::has('flash_error'))
<div id="flash_error">{{ Session::get('flash_error') }}</div>
@endif

{{ Form::open(['login', 'POST'])}}

<!-- username field -->
<p>
    {{ Form::label('email', 'Email') }}<br/>
    {{ Form::text('email', Input::old('email')) }}
</p>

<!-- password field -->
<p>
    {{ Form::label('password', 'Password') }}<br/>
    {{ Form::password('password') }}
</p>

<!-- submit button -->
<p>{{ Form::submit('Login') }}</p>

{{ Form::close() }}