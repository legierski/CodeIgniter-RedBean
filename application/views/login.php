Log in:<br><br>

<?
echo form_open('sessions/authenticate');
echo form_input('login', '', 'placeholder="Login"').'<br>';
echo form_password('password', '', 'placeholder="Password"').'<br>';
echo form_submit('submit', 'Log in');
echo form_close();
?>

<br>
<a href="/signup">Sign up</a>