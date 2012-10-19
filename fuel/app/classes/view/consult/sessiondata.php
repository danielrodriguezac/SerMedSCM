<?php
class View_Consult_Sessiondata extends ViewModel
{
    public function view()
    {
//        print_r(Session::get());
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
                    $array_valores[$key] = array('class' => ' span3', 'spantext' => 'Descripcion de la limitacion', 'value' => $value);
                    break;
                case 'diagnostico':
                    $array_valores[$key] = array('class' => ' span3', 'spantext' => 'Diagnostico', 'value' => $value);
                    break;
                case 'sistema':
                    $array_valores[$key] = array('class' => ' span3', 'spantext' => 'Sistema', 'value' => $value);
                    break;
                case 'enfermedad_ocupacional':
                    $array_valores[$key] = array('class' => ' span3', 'spantext' => '¿Sufre de una enfermedad ocupacional?', 'value' => $value);
                    break;
                case 'accidente_trabajo':
                    $array_valores[$key] = array('class' => ' span3', 'spantext' => '¿Es consecuencia de un accidente laboral?', 'value' => $value);
                    break;
                case 'at_tipo':
                    $array_valores[$key] = array('class' => ' span3', 'spantext' => 'Tipo de accidente', 'value' => $value);
                    break;
                case 'at_descripcion':
                    $array_valores[$key] = array('class' => ' span3', 'spantext' => 'Descripcion del accidente', 'value' => $value);
                    break;
                case 'evolucion':
                    $array_valores[$key] = array('class' => ' span3', 'spantext' => 'Evolucion', 'value' => $value);
                    break;
                case '':
                    $array_valores[$key] = array('class' => ' span3', 'spantext' => '', 'value' => $value);
                    break;
                default:
                    break;
            }
            
        }
        $this->sessionvars = $array_valores;
        $array_examenes = Session::get('array_examenes', false);
        if($array_examenes != false and !empty($array_examenes))
        {
            $array_examenes = Session::get('array_examenes');
            foreach ($array_examenes as $examen => $datos)
            {
                if(strlen($datos['tipo']) > 10)
                {
                    $array_examenes[$examen]['tiposhort'] = substr($datos['tipo'], 0, 9).'...';
                }
                if(strlen($datos['resultados']) > 10)
                {
                    $array_examenes[$examen]['resultadosshort'] = substr($datos['resultados'], 0, 9).'...';
                }
                if(strlen($datos['observaciones']) > 10)
                {
                    $array_examenes[$examen]['observacionesshort'] = substr($datos['observaciones'], 0, 9).'...';
                }
                $array_examenes[$examen]['fecha'] = htmlentities(Date::forge($datos['fecha'])->format('ve')); //@WINFIX: Windows locale limitations mess with the characters returned by strftime, have to pass it through entities to fix it, set to "ve" temporarilly
            }
            $this->sessiontests = $array_examenes;
        }
    }
    
}

//    [username] => Admin
//    [login_hash] => ff45f65ac9439ab746a820bee37f72a529c21819
//    [idpaciente] => 2
//    [departamento] => 1
//    [motivo_consulta] => asskj sdnfk jsndfk sdkfj sndkf 
//    [tipo_consulta] => 1
//    [examenes] => 1
//    [consulta_especial] => 1
//    [ce_tipo] => 1
//    [ce_limitacion] => 1
//    [ce_descripcion] => aljskdn kasnd jkasnfjkndkjf n
//    [array_examenes] => Array
//        (
//            [0] => Array
//                (
//                    [tipo] => Asistologia computarizada
//                    [resultados] => ASistologia: 14.87
//                    [observaciones] => Bajo nivel hormonodeficiente
//                    [fecha] => 1348849800
//                )
//
//            [1] => Array
//                (
//                    [tipo] => asdhb asdhb ashdb 
//                    [resultados] => hb ashbd jahbsd jahsbd j
//                    [observaciones] => bjhd ajsd jahsbd jasbd 
//                    [fecha] => 1349454600
//                )
//
//        )
//
//    [diagnostico] => 0
//    [sistema] => 1
//    [enfermedad_ocupacional] => 1
//    [accidente_trabajo] => 1
//    [at_tipo] => at/st
//    [at_descripcion] => aksdnka dkjna ksjdn kjasnd n asd
//    [evolucion] => asdb jabsdj basjd asjd