
<?php
require_once 'exercises/Log.php';
class Auth
{
	 public static function attempt($username, $password, $hashpass) 
	 {	
	 	if($username=='guest' && password_verify($password, $hashpass)) {
			$_SESSION["LOGGED_IN_USER"]=$username;
			header('location:authorized.php');
			echo $hashpass;
			die();
		} elseif ($username!=''){
	
		$failedlogin=true;
		
		}	
	}

	public static function check()
	{
		if(isset($_REQUEST[$key])) 
		{

		return true;
		} else {
		return false;
		}

	}


	public static function user()
	{
		if (Input::has($key))
		{
        return ($_REQUEST[$key]);
    	}
    	return null;

	}


	public static function logout()
	{
		session_start();
		$_SESSION = array();

	    // If it's desired to kill the session, also delete the session cookie.
	    // Note: This will destroy the session, and not just the session data!
	    if (ini_get("session.use_cookies")) {
	        $params = session_get_cookie_params();
	        setcookie(session_name(), '', time() - 42000,
	            $params["path"], $params["domain"],
	            $params["secure"], $params["httponly"]
	        );
	    }

	    // Finally, destroy the session.
	    session_destroy();
		header("Location: login.php");
		die();
	}
}