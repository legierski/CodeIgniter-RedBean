Sign up:<br><br>
<?
echo form_open('signup/submit');
echo form_input('login', '', 'placeholder="Login"').'<br>';
echo form_password('password', '', 'placeholder="Password"').'<br>';
echo form_submit('submit', 'Sign up');
echo form_close();