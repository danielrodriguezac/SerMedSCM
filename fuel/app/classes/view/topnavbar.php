<?php
class View_Topnavbar extends ViewModel
{
	public function view()
	{
            $actualmodule = Uri::segment(1, 'users');
            $auth = Auth::instance();
            $modulesarray = array();

            $module = 'users';
            $temparray['liclass'] = '';
            $temparray['iclass'] = 'icon-home';
            $temparray['showname'] = '';
            if($actualmodule == $module)
            {
                $temparray['liclass'] = ' active';
            }
            $modulesarray[$module] = $temparray;
            
            if ($auth->check())
            {
                if($auth->has_access('consult.listmodule'))
                {
                    $module = 'consult';
                    $temparray['liclass'] = '';
                    $temparray['iclass'] = 'icon-pencil';
                    $temparray['showname'] = 'Consulta';
                    if($actualmodule == $module)
                    {
                        $temparray['liclass'] = ' active';
                    }
                    $modulesarray[$module] = $temparray;
                }
                if($auth->has_access('personal.listmodule'))
                {
                    $module = 'personal';
                    $temparray['liclass'] = '';
                    $temparray['iclass'] = 'icon-user';
                    $temparray['showname'] = 'Personal';
                    if($actualmodule == $module)
                    {
                        $temparray['liclass'] = ' active';
                    }
                    $modulesarray[$module] = $temparray;
                }
                if($auth->has_access('statistics.listmodule'))
                {
                    $module = 'statistics';
                    $temparray['liclass'] = '';
                    $temparray['iclass'] = 'icon-signal';
                    $temparray['showname'] = 'Estadisticas';
                    if($actualmodule == $module)
                    {
                        $temparray['liclass'] = ' active';
                    }
                    $modulesarray[$module] = $temparray;
                }
                if($auth->has_access('phonebook.listmodule'))
                {
                    $module = 'phonebook';
                    $temparray['liclass'] = '';
                    $temparray['iclass'] = 'icon-book';
                    $temparray['showname'] = 'Directorio';
                    if($actualmodule == $module)
                    {
                        $temparray['liclass'] = ' active';
                    }
                    $modulesarray[$module] = $temparray;
                }
            }
            $this->modulesarray = $modulesarray;
	}
}
//@TODO optimize this, can be done with an array and a foreach