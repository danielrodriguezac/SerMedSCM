<?php
class View_Topnavbar extends ViewModel
{
	/**
	 * Prepare the view data, keeping this in here helps clean up
	 * the controller.
	 * 
	 * @return void
	 */
	public function view()
	{
            $urisegments = Uri::segments();
            $actualmodule = $urisegments[0];
            $auth = Auth::instance();
            $modulesarray = array();
//            $tag_array_1 = array();
//            $tag_array_2 = array('href' => Uri::create('users'));
//            $tag_array_3 = array('class' => 'icon-home');
            $module = 'users';
            $temparray['liclass'] = '';
            $temparray['href'] = Uri::create($module);
            $temparray['iclass'] = 'icon-home';
            $temparray['showname'] = 'Usuarios';
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
                    $temparray['href'] = Uri::create($module);
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
                    $temparray['href'] = Uri::create($module);
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
                    $temparray['href'] = Uri::create($module);
                    $temparray['iclass'] = 'icon-signal';
                    $temparray['showname'] = 'Estadisticas';
                    if($actualmodule == $module)
                    {
                        $temparray['liclass'] = ' active';
                    }
                    $modulesarray[$module] = $temparray;
                }
                if($auth->has_access('inpsasel.listmodule'))
                {
                    $module = 'inpsasel';
                    $temparray['liclass'] = '';
                    $temparray['href'] = Uri::create($module);
                    $temparray['iclass'] = 'icon-upload';
                    $temparray['showname'] = 'INPSASEL';
                    if($actualmodule == $module)
                    {
                        $temparray['liclass'] = ' active';
                    }
                    $modulesarray[$module] = $temparray;
                }
            }
            $all_li = var_dump($modulesarray);
            $this->set('libar', $all_li, FALSE);
	}
}