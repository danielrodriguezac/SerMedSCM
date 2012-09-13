<?php
class Controller_Users extends Controller_Template
{
    public function before()
    {
        parent::before(); // Without this line, templating won't work!
        $this->template->title = 'Usuarios';
        $this->template->topnavbar = '2';
        $this->template->userinfo = '3';
        $this->template->sidenavbar = '4';
    }

    /**
     * Make after() compatible with Controller_Template by adding $response as a parameter
     */
    public function after($response)
    {
        $response = parent::after($response); // not needed if you create your own response object

        // do stuff $title $topnavbar $userinfo $sidenavbar $maincontent   <----------------------------

        return $response; // make sure after() returns the response object
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
                Response::redirect('success_page');
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