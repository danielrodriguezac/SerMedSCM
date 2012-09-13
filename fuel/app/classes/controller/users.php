<?php
class Controller_Users extends Controller_Template
{
    /**
     * Your before method
     */
    public function before()
    {
        parent::before(); // Without this line, templating won't work!

        // do stuff
    }

    /**
     * Make after() compatible with Controller_Template by adding $response as a parameter
     */
    public function after($response)
    {
        $response = parent::after($response); // not needed if you create your own response object

        // do stuff

        return $response; // make sure after() returns the response object
    }

    public function action_index()
    {
        $users = '545';
        $data = array('title' => 'Pitorino', 'content' => $users);
        $this->template->title = 'Example Page';
        $this->template->content = View::forge('template', $data);
    }
    public function action_create()
    {
        $auth = Auth::instance();
        $auth->create_user('Admin', 'admin', 'danielrodriguezac@gmail.com', 100, array('my_profile_field' => 'Hola'));
    }
    public function action_login()
    {
        $data = array();
        $data['username']    = 'username';
        $data['login_error'] = 'woopie';
        // If so, you pressed the submit button. let's go over the steps
        if (Input::post())
        {
            // first of all, let's get a auth object
            $auth = Auth::instance();

            // check the credentials. This assumes that you have the previous table created and
            // you have used the table definition and configuration as mentioned above.
            if ($auth->login())
            {
                // credentials ok, go right in
                Response::redirect('success_page');
            }
            else
            {
                // Oops, no soup for you. try to login again. Set some values to
                // repopulate the username field and give some error text back to the view
                $data['username']    = Input::post('username');
                $data['login_error'] = 'Wrong username/password combo. Try again';
                $this->template->title = 'La cagaste brootherr';
                $this->template->content = View::forge('users/login',$data);
            }
        }else{
        // Show the login form
        $this->template->title = 'Example Page';
        $this->template->content = View::forge('users/login',$data);
        }
    }
    public function action_logout()
    {
        $auth = Auth::instance();
        if($auth->logout()){
            $this->template->title = 'Example Page';
            $this->template->content = 'si';
        }  else {
            $this->template->title = 'Example Page';
            $this->template->content = 'no';
        }
    }
}