<?php
class View_Consult_Sessiontests extends ViewModel
{
    public function view()
    {
        $array_examenes = Session::get('array_examenes');
        foreach ($array_examenes as $examen => $datos) {
            if(strlen($datos['tipo']) > 20)
            {
                $array_examenes[$examen]['tiposhort'] = substr($datos['tipo'], 0, 19).'...';
            }
            if(strlen($datos['resultados']) > 20)
            {
                $array_examenes[$examen]['resultadosshort'] = substr($datos['resultados'], 0, 19).'...';
            }
            if(strlen($datos['observaciones']) > 20)
            {
                $array_examenes[$examen]['observacionesshort'] = substr($datos['observaciones'], 0, 19).'...';
            }
            $array_examenes[$examen]['fecha'] = htmlentities(Date::forge($datos['fecha'])->format('ve_full')); //@WINFIX: Windows locale limitations mess with the characters returned by strftime, have to pass it through entities to fix it
        }
        $this->sessiontests = $array_examenes;
    }
    
}