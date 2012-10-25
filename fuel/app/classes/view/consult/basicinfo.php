<?php
class View_Consult_Basicinfo extends ViewModel
{
    public function view()
    {
        $idpaciente = Session::get('idpaciente', null);
        $employees = Model_Empleado::find()->where('id', $idpaciente);
        $userqueryresult = $employees->get_one();
        $this->ci = number_format($userqueryresult->ci , 0, ',', '.');
        switch($userqueryresult->nacionalidad)
        {
            case 0:
                $this->nacionalidad = 'Venezolano/a';
                break;
            case 1:
                $this->nacionalidad = 'Extranjero/a';
                break;
            default:
                $this->nacionalidad = 'Error';
                break;
        }
        $this->nombres = $userqueryresult->nombres;
        $this->apellidos = $userqueryresult->apellidos;
        switch($userqueryresult->genero)
        {
            case 0:
                $this->genero = 'Femenino';
                break;
            case 1:
                $this->genero = 'Masculino';
                break;
            default :
                $this->genero = 'Error';
                break;
        }
        $this->estado_civil = $userqueryresult->estado_civil;
        switch($userqueryresult->estado_civil)
        {
            case 0:
                $this->estado_civil = 'Soltero/a';
                break;
            case 1:
                $this->estado_civil = 'Casado/a';
                break;
            case 2:
                $this->estado_civil = 'Divorciado/a';
                break;
            case 3:
                $this->estado_civil = 'Viudo/a';
                break;
            default:
                $this->estado_civil = 'Error';
                break;
        }
//        $this->fecha_nacimiento = $userqueryresult->fecha_nacimiento;
        $dateclass = Date::forge($userqueryresult->fecha_nacimiento);
        $this->fecha_nacimiento = $dateclass->format('ve');
        $this->edad = $dateclass->time_ago($userqueryresult->fecha_nacimiento, time(), 'year');
//        print_r(Date::time());
//        echo Date::time_ago($userqueryresult->fecha_nacimiento, time(), 'year');
        
        $dateclass = Date::forge($userqueryresult->created_at);
        $this->fecha_registro = $dateclass->format('ve');
        $this->tiempo_en_empresa = $dateclass->time_ago($userqueryresult->created_at, time(), 'year');
        
        $userqueryresult->estado_contratacion;
        switch ($userqueryresult->estado_contratacion) {
            case 0:
                $this->edctagclass = '';
                $this->estado_contratacion = 'Pre-Empleo';
                break;
            case 1:
                $this->edctagclass = ' label-success';
                $this->estado_contratacion = 'Activo';
                break;
            case 2:
                $this->edctagclass = ' label-warning';
                $this->estado_contratacion = 'Vacaciones';
                break;
            case 3:
                $this->edctagclass = ' label-important';
                $this->estado_contratacion = 'Egresado';
                break;
            case 4:
                $this->edctagclass = ' label-success';
                $this->estado_contratacion = 'Contratista';
                break;
            default:
                $this->edctagclass = ' label-important';
                $this->estado_contratacion = 'Error';
                break;
        }
        $this->lugar_nacimiento = $userqueryresult->lugar_nacimiento;
        $this->direccion = $userqueryresult->direccion;
        // Asset::img('retrato.png', array('class' => 'img-polaroid'))
    }
    
}