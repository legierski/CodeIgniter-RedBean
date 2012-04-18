<?

// connect RedBeanPHP to database
function rb() {
	require_once(APPPATH.'libraries/rb.php');
	$CI = &get_instance();

	$host = $CI->config->item('redbean_host');
	$db_name = $CI->config->item('redbean_db_name');
	$user = $CI->config->item('redbean_user');
	$password = $CI->config->item('redbean_password');

    R::setup('mysql:host='.$host.';dbname='.$db_name, $user, $password);
}

// check if user is logged in
function logged_in() {
    $CI = &get_instance();
    return $CI->session->userdata('logged_in');
}

// get logged user's id
function user_id() {
	$CI = &get_instance();
    if(logged_in()) {
        return $CI->session->userdata('user_id');
    }
}

// get logged user
function user() {
	return R::findOne('myapp_user', 'id = ?', array(user_id()));
}

