<?php
class View_Sidenavbar extends ViewModel
{
	public function view()
	{
            $urisegments = Uri::segments();
            $actualmodule = $urisegments[0];
            $actualcommand = $urisegments[1];
            $auth = Auth::instance();
            switch($actualmodule)
            {
                case 'users':
                    $commanlist = array('' => 'Usuarios', 'login' => 'Iniciar Sesión', 'create' => 'Crear Usuario', 'edit' => 'Editar Usuario', 'delete' => 'Eliminar Usuario', 'logout' => 'Salir');
                break;
                case 'consult':
                    $commanlist = array('', 'test');
                break;
                case 'personal':
                    $commanlist = array('', 'history');
                break;
                case 'statistics':
                    $commanlist = array('');
                break;
                case 'inpsasel':
                    $commanlist = array('');
                break;
                default:
                    
                break;
            }
        }
}