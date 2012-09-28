<?php
class View_Consult_Basicinfo extends ViewModel
{
    public function view()
    {
        $userqueryresult = $this->get('userqueryresult');
        $this->ci = number_format($userqueryresult->ci , 0, ',', '.');
        switch($userqueryresult->nacionalidad)
        {
            case 'v':
            case 'V':
                $this->nacionalidad = 'Venezolano/a';
            break;
            case 'e':
            case 'E':
                $this->nacionalidad = 'Extranjero/a';
            break;
        }
        $this->nombres = $userqueryresult->nombres;
        $this->apellidos = $userqueryresult->apellidos;
        switch($userqueryresult->genero)
        {
            case 'm':
            case 'M':
                $this->genero = 'Masculino';
            break;
            case 'f':
            case 'F':
                $this->genero = 'Femenino';
            break;
        }
        $this->estado_civil = $userqueryresult->estado_civil;
        switch($userqueryresult->estado_civil)
        {
            case 's':
            case 'S':
                $this->estado_civil = 'Soltero/a';
            break;
            case 'c':
            case 'C':
                $this->estado_civil = 'Casado/a';
            break;
            case 'd':
            case 'D':
                $this->estado_civil = 'Divorciado/a';
            break;
            case 'v':
            case 'V':
                $this->estado_civil = 'Viudo/a';
            break;
        }
        $this->fecha_nacimiento = $userqueryresult->fecha_nacimiento;
//        print_r(Date::forge(1294176140));
//        print_r(Date::time());
        echo Date::time_ago($userqueryresult->fecha_nacimiento, time(), 'year');

        $this->fecha_registro = $userqueryresult->fecha_registro;
        $this->direccion = $userqueryresult->direccion;
    }
    
}