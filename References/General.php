<?php
As I can see you are not setting auto_encode correctly.

Try this and see if it's what you are looking for.
public function action_view($id = null)
{
    $view = View::forge('post/view');
    is_null($id) and Response::redirect('Post');

    $post = Model_Post::find($id);
    $view->set('post', $post, false); //Here the auto_encode is set to false

    $this->template->title = "Post";
    $this->template->content = $view;
}
There are abunch of ways to do this:
protected $this->auto_encode = false;

That property in the controller will stop ALL assigned values from being encoded.

Otherwise, use this:
$this->template->set('title', "Post", false);
$this->template->set('content', $view, false);

That'll stop the specific value being encoded.
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
RapiBurrito: you can render individual fields of a fieldset using: echo $fieldset->field('fieldname')->build();