<?php

Object::add_extension('Member', 'GoogleIdentifier');

Authenticator::register_authenticator('GoogleAuthenticator');

if(class_exists('MemberProfilePage')) {
	MemberProfilePage::$default_editable_member_fields['GoogleButton']  = true;
}
