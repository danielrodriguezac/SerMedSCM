<?php
class View_Userinfo extends ViewModel
{
	public function view()
	{
            $auth = Auth::instance();
            if($auth->check())
            {
//                $session = Session::instance(); the way of the instance
//                $username = $session->get('username', 'Error');
//                if($actualsegment == 'users')
//                {
//                    $logouturl = 'logout';
//                }else
//                {
//                    $logouturl = '/users/logout';
//                }
                $username = Session::get('username', 'Error');
                $this->username = $username;
                $this->logouturl = Uri::create('users/logout');;
            }else
            {
                $this->username = 'Inicie Sesión!';
                $this->logouturl = '#';
            }
        }
}
// @TODO: needs a lot more work but this will do for the time beign