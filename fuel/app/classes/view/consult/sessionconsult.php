<?php
class View_Consult_Sessionconsult extends ViewModel
{
    public function view()
    {
        print_r(Session::get());
        //extract(Session::get());
        
        $sessionarray = Session::get();
        foreach($sessionarray as $key => $value){
            switch($key){
                case 'idpaciente':
                    $array_valores[$key] = array('class' => ' span2', 'spantext' => 'Id del Paciente', 'value' => $value);
                    break;
                case 'departamento':
                    $array_valores[$key] = array('class' => ' span2', 'spantext' => 'Id del departamento', 'value' => $value);
                    break;
                case 'motivo_consulta':
                    $array_valores[$key] = array('class' => ' span3', 'spantext' => 'Motivo de la consulta', 'value' => $value);
                    break;
                case 'tipo_consulta':
                    $array_valores[$key] = array('class' => ' span2', 'spantext' => 'Tipo de consulta', 'value' => $value);
                    break;
                case 'examenes':
                    $array_valores[$key] = array('class' => ' span2', 'spantext' => '¿Pidio registrar examenes?', 'value' => $value);
                    break;
                case 'consulta_especial':
                    $array_valores[$key] = array('class' => ' span2', 'spantext' => '¿Es consulta especial?', 'value' => $value);
                    break;
                case 'ce_tipo':
                    $array_valores[$key] = array('class' => ' span2', 'spantext' => '¿De que tipo?', 'value' => $value);
                    break;
                case 'ce_limitacion':
                    $array_valores[$key] = array('class' => ' span2', 'spantext' => '¿Presenta limitacion?', 'value' => $value);
                    break;
                case 'ce_descripcion':
                    $array_valores[$key] = array('class' => ' span3', 'spantext' => 'Descripcion', 'value' => $value);
                    break;
                default:
                    break;
            }
            
        }
        $this->sessionvars = $array_valores;
    }
    
}

//    [idpaciente] => 2
//    [departamento] => 2
//    [motivo_consulta] => adsdasd
//    [tipo_consulta] => 2
//    [examenes] => 1
//    [consulta_especial] => 1
//    [ce_tipo] => 0
//    [ce_limitacion] => 1
//    [ce_descripcion] => asdasdsa