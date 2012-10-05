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
                $alertdiv->set('alertmessage', 'Empleado no registrado en el Sistema. Dirijase a Personal para registrar uno nuevo.');
                $this->template->set('maincontent', $alertdiv . $consult_form, false);
            }
        }else
        {
            $this->template->set('maincontent', $consult_form, false);
        }
    }
    public function action_stage2()
    {
        if(Session::get('idpaciente', false) != false)
        {
            $idpaciente = Session::get('idpaciente', false);
            
            $validation = Validation::forge('stage2validation');
            $validation->add('departamento', 'Departamento')->add_rule('required');
            $validation->add('motivo_consulta', 'Motivo de la Consulta')->add_rule('required');
            $validation->add('tipo_consulta', 'Tipo de Consulta')->add_rule('required');
            $validation->add('consulta_especial', '¿Es una consulta especial?')->add_rule('required');
            $validation->add('ce_tipo', '¿Que tipo de consulta especial?');
            $validation->add('ce_limitacion', '¿Existen limitaciones?');
            $validation->add('ce_descripcion', 'Describa brevemente la limitacion');
            $validation->add('examenes', '¿Trajo examenes para registrar?')->add_rule('required');
            
            $employees = Model_Employees::find()->where('id', $idpaciente);
            $data = $employees->get_one();

            
            $stage2view = View::Forge('consult/stage2');
            
            if($validation->run())
            {
                $dataset = $validation->validated();
                Session::set('departamento', $dataset['departamento']);
                Session::set('motivo_consulta', $dataset['motivo_consulta']);
                Session::set('tipo_consulta', $dataset['tipo_consulta']);
                Session::set('consulta_especial', $dataset['consulta_especial']);
                if($dataset['consulta_especial'])
                {
                    Session::set('ce_tipo', $dataset['ce_tipo']);
                    Session::set('ce_limitacion', $dataset['ce_limitacion']);
                    if($dataset['ce_limitacion'])
                    {
                        Session::set('ce_descripcion', $dataset['ce_descripcion']);
                    }
                }
                Session::set('examenes', $dataset['examenes']);
                if($dataset['examenes'])
                {
                    Response::redirect('consult/tests');
                }
                else
                {
                    Response::redirect('consult/stage3');
                }
            }
            else
            {
                $stage2view->set('errors', $validation->error());
            }
            
            $basicinfo =ViewModel::Forge('consult/basicinfo');
            $basicinfo->set('userqueryresult', $data);
            
            $stage2view->set('basicinfo', $basicinfo);
            $this->template->maincontent = $stage2view;
            

        }
        else
        {
            Response::redirect('consult/');
        }
    }
    public function action_tests()
    {
        $this->template->title = 'Pagina de Examenes';
//        echo 'departamento'.Session::get('departamento');
//        echo 'motivo'.Session::get('motivo_consulta');
//        echo 'tipo'.Session::get('tipo_consulta');
//        echo 'boolconsultaespecial'.Session::get('consulta_especial');
//        if(Session::get('consulta_especial'))
//        {
//            echo 'cetipo'.Session::get('ce_tipo');
//            echo 'boolcelimitacion'.Session::get('ce_limitacion');
//            if(Session::get('ce_limitacion'))
//            {
//                echo 'cedescripcion'.Session::get('ce_descripcion');
//            }
//        }
//        echo Session::get('examenes');
        
        print_r(Session::get());
        extract(Session::get());
        if(!isset($examenes) or ($examenes == 0))
        {
            Response::redirect('consult/stage2');
        }
        $validation = Validation::forge('testsvalidation');
        $validation->add('tipo', 'Tipo de exámen')->add_rule('required');
        $validation->add('resultados', 'Resultados del exámen')->add_rule('required');
        $validation->add('observaciones', 'Observaciones')->add_rule('required');
        $validation->add('fecha', 'Fecha en que se realizó el exámen')->add_rule('required');
        $validation->add('mas_examenes', '¿Reportar otro exámen?')->add_rule('required');
        if($validation->run())
        {
            $dataset = $validation->validated();
            $array_examen_actual = array(
                                        'tipo'          => $dataset['tipo'],
                                        'resultados'    => $dataset['resultados'],
                                        'observaciones' => $dataset['observaciones'],
                                        'fecha'         => $dataset['fecha'],
            );
            if(!isset($array_examenes))
            {
               Session::set('array_examenes' , array(0 => $array_examen_actual)); 
            }
            else
            {
                $array_examenes[] = $array_examen_actual;
                 Session::set('array_examenes' , $array_examenes);  
            }
            if(!$mas_examenes)
            {
                Response::redirect('consult/stage3');
            }
        }
        else 
        {
            $testsview->set('errors', $validation->error());
        }
        $employees = Model_Employees::find()->where('id', $idpaciente);
        $data = $employees->get_one();
        
        $basicinfo =ViewModel::Forge('consult/basicinfo');
        $basicinfo->set('userqueryresult', $data);

        $testsview = View::Forge('consult/tests');
        $testsview->set('basicinfo', $basicinfo);
        
        $dateclass = Date::time();
        $testsview->fecha_hoy = $dateclass->format('ve');
//        print_r(Date::create_from_string($testsview->fecha_hoy , "ve"));
        $this->template->maincontent = $testsview;

    }
}