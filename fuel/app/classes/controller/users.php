<?php
class Controller_Users extends Controller_Template
{
    public function before()
    {
        parent::before();
        $this->template->title = 'Usuarios';
        $this->template->topnavbar = ViewModel::forge('topnavbar');
        $this->template->userinfo = ViewModel::forge('userinfo');
        $this->template->sidenavbar = '4';
    }
    
    public function after($response)
    {
        $response = parent::after($response); // not needed if you create your own response object

        // $topnavbar $userinfo $sidenavbar $maincontent   <----------------------------

        return $response;
    }

    public function action_index()
    {
        Response::redirect('users/login');
    }
    public function action_create()
    {
        $auth = Auth::instance();
        $auth->create_user('Admin', 'admin', 'danielrodriguezac@gmail.com', 100, array('my_profile_field' => 'Hola'));
    }
    public function action_login()
    {
        $data = array();
        if (Input::post())
        {
            $auth = Auth::instance();
            if ($auth->login())
            {
                Response::redirect('users');
            }
            else
            {
                $this->template->maincontent = View::forge('users/loginform',$data);
            }
        }else{
        // Show the login form
        $this->template->maincontent = View::forge('users/loginform',$data);
        }
    }
    public function action_logout()
    {
        $auth = Auth::instance();
        if($auth->logout()){
            $this->template->title = 'Example Page';
            $this->template->maincontent = 'si';
        }  else {
            $this->template->title = 'Example Page';
            $this->template->maincontent = 'no';
        }
    }
}