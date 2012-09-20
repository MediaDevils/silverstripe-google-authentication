<?php

class GoogleAuthenticator extends Authenticator {
	public static function get_name() {
		return 'Google';
	}
	
	public static function get_login_form(Controller $controller) {
		return new GoogleLoginForm(
			$controller,
			'LoginForm'
		);
	}
	
	public static function authenticate($RAW_data, Form $form = null) {
		return singleton('GoogleCallback')->loginUser();
	}
}
