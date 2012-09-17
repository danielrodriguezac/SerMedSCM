<?php
class Controller_Users extends Controller_Template
{
    public function before()
    {
        parent::before();
        $this->template->title = 'Usuarios';
        $this->template->motmod = 'Creación, edición y permisología de los usuarios que acceden al sistema';
        $this->template->topnavbar = ViewModel::forge('topnavbar');
        $this->template->userinfo = ViewModel::forge('userinfo');
        $this->template->sidenavbar = ViewModel::forge('sidenavbar');
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
        $this->template->title .= ' - Login';
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
            Response::redirect('users/login');
        }  else {
            $this->template->title = 'Example Page';
            $this->template->maincontent = 'no';
        }
    }
}