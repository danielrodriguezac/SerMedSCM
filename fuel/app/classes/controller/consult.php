<?php
class Controller_Consult extends Controller_Template
{
    public function before()
    {
        parent::before();
        if(!Auth::check())
        {
            Response::redirect('users/login');
        }
        $this->template->title = 'Consulta';
        $this->template->motmod = 'Registro de consultas y examenes medicos.';
        $this->template->topnavbar = ViewModel::forge('topnavbar');
        $this->template->userinfo = ViewModel::forge('userinfo');
        $this->template->sidenavbar = ViewModel::forge('sidenavbar');
    }
    
    public function after($response)
    {
        $response = parent::after($response);
        return $response;
    }

    public function action_index()
    {
        $this->template->title = 'Registro de consultas';
//         $this->template->maincontent = 'Bienvenido, Usuario';
        $consult_form = Fieldset::forge('consult', array('form_attributes' => array('class' => 'form-horizontal')));
        $form = $consult_form->form();

        $form->add('ci', 'Cédula de paciente', array('type' => 'text', 'class' => '', 'placeholder' => 'ej. 5866966', 'class' => 'search-query', 'autofocus' => 'autofocus'),  array(array('required')));
        $form->add('submit', '', array('value' => 'Buscar', 'type' => 'submit', 'class' => 'btn btn-primary'));
        if (Input::post())
        {
            $employees = Model_Employees::find()->where('ci', Input::post('ci'));
            if($employees->count() == 1)
            {
                $datos = $employees->get_one();
                Session::set('idpaciente', $datos->id);
//                $this->template->maincontent = Session::get('idpaciente');
                Response::redirect('consult/stage2');
            }else
            {
                $alertdiv = ViewModel::forge('alertdiv', 'error');
                $alertdiv->set('alerttitle', 'Error');
                $alertdiv->set('alertmessage', 'Empleado no registrado en el Sistema. Clic <a href="' . Uri::create('personal/register'). '"> Aqui</a> para registrar uno nuevo');
                $this->template->set('maincontent', $alertdiv . $consult_form, FALSE);
            }
        }else
        {
            $this->template->set('maincontent', $consult_form, FALSE);
        }
    }
    public function action_stage2()
    {
        if(Session::get('idpaciente', FALSE) != FALSE)
        {
            $idpaciente = Session::get('idpaciente', FALSE);
            
            $employees = Model_Employees::find()->where('id', $idpaciente);
            $data = $employees->get_one();
            
            $basicinfo =ViewModel::Forge('consult/basicinfo');
            $basicinfo->set('userqueryresult', $data);
            
            $stage2view = View::Forge('consult/stage2');
            $stage2view->set('basicinfo', $basicinfo);
            $this->template->maincontent = $stage2view;
//            $data->nombres . $data->apellidos;
            
            $stage2_form = Fieldset::forge('consult', array('form_attributes' => array('class' => 'form-horizontal')));
            $form = $stage2_form->form();

            $form->add('departamento', 'Departamento', array('type' => 'text', 'class' => '', 'placeholder' => ''),  array(array('required')));
            $form->add('motivo_consulta', 'Motivo de la consulta', array('type' => 'textarea', 'class' => '', 'placeholder' => ''),  array(array('required')));
            $form->add('consulta_especial', '¿Es una consulta especial?', array('type' => 'radio', 'class' => '', 'placeholder' => '', ),  array(array('required')));
            $form->add('submit', '', array('value' => 'Buscar', 'type' => 'submit', 'class' => 'btn btn-primary'));
//            $form     = View::Forge('stage2');
//            $fieldset = Fieldset::forge()->add_model('Model_Employee');
//            $form     = $fieldset->form();
//            $form->add('submit', '', array('type' => 'submit', 'value' => 'Add', 'class' => 'btn medium primary'));
//            if($fieldset->validation()->run() == true)
//            {
//                
//            }
            //$this->template->set('maincontent', $form, FALSE);
        }else
        {
            Response::redirect('consult/');
        }
    }
    public function action_tests()
    {
        $this->template->title = 'Pagina de Examenes';
        $this->template->maincontent = 'Bienvenido, Usuario';
    }
}
//`ci`, `nacionalidad`, `nombres`, `apellidos`, `estado_civil`, `fecha_nacimiento`, `lugar_nacimiento`, `direccion`, `estado_contratacion`, `fecha_registro`, `id_usuarc