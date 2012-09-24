<?php
class View_Sidenavbar extends ViewModel
{
	public function view()
	{
            $actualmodule = Uri::segment(1, 'users');
            $actualcommand = Uri::segment(2, '');
            $auth = Auth::instance();
            switch($actualmodule)
            {
                case 'users':
                    $commandlist = array(
                                        '' => array('showname' => 'Usuarios', 'iclass' => 'icon-home'),
                                        'create' => array('showname' => 'Crear usuario', 'iclass' => 'icon-plus'),
                                        'edit' => array('showname' => 'Editar usuario', 'iclass' => 'icon-edit'),
                                        'delete' => array('showname' => 'Eliminar usuario', 'iclass' => 'icon-trash'),
                                        'logout' => array('showname' => 'Salir', 'iclass' => 'icon-off'),
                                    );
                    if($auth->check())
                    {
                        foreach($commandlist as $command => $propertiesarray)
                        {
                            if($auth->has_access($actualmodule . '.' . $command))
                            {
                                $temparray = array(
                                                'liclass' => ($command == $actualcommand) ? ' active' : '',
                                                'iclass' => $propertiesarray['iclass'],
                                                'url' => Uri::create($actualmodule . '/' . $command),
                                                'showname' => $propertiesarray['showname'],
                                            );
                                $commandarray[$command] = $temparray;
                            }
                        }
                    }else
                    {
                        $commandarray['login'] = array(
                                                    'liclass' => ' active',
                                                    'iclass' => 'icon-home',
                                                    'url' => Uri::create('users/logout'),
                                                    'showname' => 'Iniciar sesión',
                                                );  
                    }
                break;
                case 'consult':
                    $commandlist = array(
                                        '' => array('showname' => 'Consulta', 'iclass' => 'icon-pencil'),
                                        'tests' => array('showname' => 'Registrar exámenes', 'iclass' => 'icon-plus'),
                                    );
                    foreach($commandlist as $command => $propertiesarray)
                    {
                        if($auth->has_access($actualmodule . '.' . $command))
                        {
                            $temparray = array(
                                            'liclass' => ($command == $actualcommand) ? ' active' : '',
                                            'iclass' => $propertiesarray['iclass'],
                                            'url' => Uri::create($actualmodule . '/' . $command),
                                            'showname' => $propertiesarray['showname'],
                                        );
                            $commandarray[$command] = $temparray;
                        }
                    }
                break;
                case 'personal':
                    $commandlist = array('', 'history');
                break;
                case 'statistics':
                    $commandlist = array('');
                break;
                case 'inpsasel':
                    $commandlist = array('');
                break;
                default:
                break;
            }
            if(!empty($commandarray))
            {
                $this->commandarray = $commandarray;
            }
            else
            {
                $this->commandarray = array(
                                            'logout' => array(
                                                            'liclass' => '',
                                                            'iclass' => 'icon-remove',
                                                            'url' => Uri::create('users/logout'),
                                                            'showname' => 'Permisos insuficientes',
                                                        ),
                                    );
            }
        }
}