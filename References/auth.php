<?php
// Create the default instance(s)
Auth::forge();

// Create the SimpleAuth instance
Auth::forge('simpleauth');

// or specify multiple driver settings
Auth::forge(array('driver' => 'simpleauth', 'id' => 'customid'));

// Logout the default driver
Auth::instance()->logout();

// Login the SimpleAuth driver
Auth::instance('simpleauth')->login(Input::post('username'), Input::post('password'));

// Remove the default driver
Auth::unload();

// Remove the SimpleAuth driver
Auth::unload('simpleauth');

if ( ! Auth::check())
{
    Response::redirect('login');
}

// specific driver
Auth::check('simpleauth');

// Multiple drivers
Auth::check(array('simpleauth', 'twitter'));

// check if the simpleauth driver is verified
$driver = Auth::verified('simpleauth');

// hash a users password
$password = Auth::instance()->hash_password($password);

The get_user_id method returns an array structure containing the drivers id value, and the id of the currently logged-in user.
The get_groups method returns the user groups assigned to the currently logged-in user.
The get_email method returns the email address assigned to the currently logged-in user.
The get_screen_name method returns the screen- or display name of the currently logged-in user.

// check if user is allowed to comment
if ( ! Auth::instance('simplegroup')->has_access('comments.create'), null)
{
    Response::redirect('no_admin');
}

// check if user can also update & delete comments
Auth::instance('simplegroup')->has_access('comments.[update,delete]', null);

// call statically (will use the default group driver instance)
Auth::has_access('comments.[update,delete]');

// The same with an array instead of a string
Auth::instance('simplegroup')->has_access(array('comments', array('update', 'delete')), null);

if ( ! Auth::member(100))
{
    Response::redirect('no_admin');
}

// specific driver
Auth::member(1, 'simplegroup');

// Multiple drivers
Auth::check(0, array('simplegroup', 'genericgroup'));

// get the display name of the admin group
Auth::instance('simplegroup')->get_name('admin');

// check if user is allowed to comment
if ( ! Auth::instance('simpleacl')->has_access('comments.create'), array('simplegroup', 1))
{
    Response::redirect('no_admin');
}