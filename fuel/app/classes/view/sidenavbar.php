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
                        foreach ($commandlist as $command => $propertiesarray)
                        {
                            if($auth->has_access($actualmodule . '.' . $command))
                            {
                                $temparray = array(
                                                'liclass' => ($command == $actualcommand) ? ' active' : '',
                                                'iclass' => $propertiesarray['iclass'],
                                                'showname' => $propertiesarray['showname'],
                                            );
                            }
                            $commandarray[$command] = $temparray;
                        }
                    }else
                    {
                        $commandarray['login'] = array('liclass' => ' active', 'showname' => 'Iniciar Sesión',  'iclass' => 'icon-home');  
                    }
                break;
                case 'consult':
                    $commandlist = array('', 'test');
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
            $this->commandarray = $commandarray;
        }
}