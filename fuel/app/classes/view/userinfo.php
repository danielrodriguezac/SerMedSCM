<?php
class View_Userinfo extends ViewModel
{
	public function view()
	{
            $auth = Auth::instance();
            $this->isauth = $auth->check();
            if($this->isauth)
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
                $this->usernameurl = Uri::create('users');
                $this->username = $username;
                $this->logouturl = Uri::create('users/logout');
                $this->abouturl = Uri::create('about');
            }else
            {
                $this->username = 'Inicie sesión!';
                $this->usernameurl = Uri::create('users/login');
            }
        }
}
// @TODO: only internal URIs and names nedd to be resolved