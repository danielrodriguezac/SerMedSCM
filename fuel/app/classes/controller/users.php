<?php
class Controller_Users extends Controller_Template
{
    public function before()
    {
        parent::before();
//        $indexredirect = Uri::segment(1);
//        if(!isset($indexredirect))
//        {
//            Response::redirect('users/login');
//        }
        $this->template->title = 'Usuarios';
        $this->template->motmod = 'Creación, edición y permisología de los usuarios que acceden al sistema.';
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
        if(!Auth::check())
        {
            Response::redirect('users/login');
        }else
        {
            $this->template->title = 'Pagina de Inicio';
            $this->template->maincontent = 'Bienvenido, Usuario';
        }
//        $actualmodule = Uri::segment(0, '');
//        $actualcommand = Uri::segment(1, '');
//        $this->template->title = $actualmodule;;
//            $this->template->maincontent = $actualcommand;
//        Response::redirect('users/login');
    }
    public function action_create()
    {
        $auth = Auth::instance();
        $auth->create_user('Admin', 'admin', 'danielrodriguezac@gmail.com', 100, array('my_profile_field' => 'Hola'));
    }
    public function action_login()
    {
        $this->template->title .= ' - Login';
        $login_form = Fieldset::forge('login', array('form_attributes' => array('class' => 'form-horizontal')));
        $form = $login_form->form();

        $form->add('username', 'ID', array('type' => 'text', 'class' => '', 'placeholder' => 'ó Email'),  array(array('required')));
        $form->add('password', 'Contraseña', array('type' => 'password', 'class' => '', 'placeholder' => 'Contraseña'),  array(array('required')));
        $form->add('submit', '', array('value' => 'Iniciar Sesión', 'type' => 'submit', 'class' => 'btn btn-primary'));

        if (Input::post())
        {
            $auth = Auth::instance();
            if ($auth->login())
            {
                Response::redirect('users');
            }
            else
            {
                $alertdiv = ViewModel::forge('alertdiv', 'error');
                $alertdiv->set('alerttitle', 'Error');
                $alertdiv->set('alertmessage', 'Combinación de ID/Contraseña incorrecta');
                $this->template->set('maincontent', $alertdiv . $login_form, FALSE);
            }
        }else{
            $this->template->set('maincontent', $login_form, FALSE);
        }
    }
    public function action_logout()
    {
        $auth = Auth::instance();
        if($auth->logout()){
            Response::redirect('users/login');
        }  else {
            $this->template->title = 'Error';
            $this->template->maincontent = 'Something went terribly wrong';
        }
    }
}