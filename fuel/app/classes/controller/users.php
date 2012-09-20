<?php
class Controller_Users extends Controller_Template
{
    public function before()
    {
        parent::before();
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
        Response::redirect('users/login');
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
        $validation = $login_form->validation();
        $form = $login_form->form();

        $form->add('username', 'ID', array('type' => 'text', 'class' => '', 'placeholder' => 'ó Email'),  array(array('required')));
        $form->add('password', 'Contraseña', array('type' => 'password', 'class' => '', 'placeholder' => 'Contraseña'),  array(array('required')));
        $form->add('submit', '', array('value' => 'Iniciar Sesión', 'type' => 'submit', 'class' => 'btn btn-primary'));

        if ($validation->run())
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
                $login_form->repopulate();
                $this->template->set('maincontent', $alertdiv . $login_form, FALSE);
            }
        }else{
            $login_form->repopulate();
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