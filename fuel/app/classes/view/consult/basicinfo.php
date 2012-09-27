<?php
class View_Consult_Basicinfo extends ViewModel
{
    public function view()
    {
        $userqueryresult = $this->get('userqueryresult');
        $this->ci = $userqueryresult->ci;
        $this->nacionalidad = $userqueryresult->nacionalidad;
        $this->nombres = $userqueryresult->nombres;
        $this->apellidos = $userqueryresult->apellidos;
        $this->estado_civil = $userqueryresult->estado_civil;
        $this->fecha_nacimiento = $userqueryresult->fecha_nacimiento;
        $this->fecha_registro = $userqueryresult->fecha_registro;
    }
    
}