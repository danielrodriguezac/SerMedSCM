<?php
class View_Consult_Sessiontests extends ViewModel
{
    public function view()
    {
        $array_examenes = Session::get('array_examenes');
        foreach ($array_examenes as $examen => $datos) {
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