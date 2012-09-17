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
            $actualsegment = $urisegments[0];
            $auth = Auth::instance();
            $all_li = '';
            $tag_array_1 = array();
            $tag_array_2 = array('href' => Uri::create('users'));
            $tag_array_3 = array('class' => 'icon-home');
            
            if($actualsegment == 'users')
            {
                $tag_array_1['class'] = 'active';
            }
            $all_li .= html_tag('li', $tag_array_1, html_tag('a', $tag_array_2, html_tag('i', $tag_array_3, '').'  Usuarios'));
            
            if ($auth->check())
            {
                if($auth->has_access('consult.listmodule'))
                {
                    $tag_array_1 = array();
                    $tag_array_2 = array('href' => Uri::create('consult'));
                    $tag_array_3 = array('class' => 'icon-pencil');

                    if($actualsegment == 'consult')
                    {
                        $tag_array_1['class'] = 'active';
                    }
                    $all_li .= "\n" . html_tag('li', $tag_array_1, html_tag('a', $tag_array_2, html_tag('i', $tag_array_3, '').'  Consulta'));
                }
                if($auth->has_access('personal.listmodule'))
                {
                    $tag_array_1 = array();
                    $tag_array_2 = array('href' => Uri::create('personal'));
                    $tag_array_3 = array('class' => 'icon-user');

                    if($actualsegment == 'personal')
                    {
                        $tag_array_1['class'] = 'active';
                    }
                    $all_li .= "\n" . html_tag('li', $tag_array_1, html_tag('a', $tag_array_2, html_tag('i', $tag_array_3, '').'  Personal'));
                }
                if($auth->has_access('statistics.listmodule'))
                {
                    $tag_array_1 = array();
                    $tag_array_2 = array('href' => Uri::create('statistics'));
                    $tag_array_3 = array('class' => 'icon-signal');

                    if($actualsegment == 'statistics')
                    {
                        $tag_array_1['class'] = 'active';
                    }
                    $all_li .= "\n" . html_tag('li', $tag_array_1, html_tag('a', $tag_array_2, html_tag('i', $tag_array_3, '').'  Estadisticas'));
                }
                if($auth->has_access('inpsasel.listmodule'))
                {
                    $tag_array_1 = array();
                    $tag_array_2 = array('href' => Uri::create('inpsasel'));
                    $tag_array_3 = array('class' => 'icon-upload');

                    if($actualsegment == 'inpsasel')
                    {
                        $tag_array_1['class'] = 'active';
                    }
                    $all_li .= "\n" . html_tag('li', $tag_array_1, html_tag('a', $tag_array_2, html_tag('i', $tag_array_3, '').'  INPSASEL'));
                }
            }
            $this->set('libar', $all_li, FALSE);
	}
}