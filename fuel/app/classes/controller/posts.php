<?php
use Fuel\Core\Controller_Template;
use Fuel\Core\Response;

class Controller_Posts extends Controller_Template
{
  public function action_index()
  {
    $posts = Model_Posts::find('all');
    $data = array('posts' => $posts);
    $this->template->title = "soy el index";
    $this->template->content = View::forge('posts/index', $data,false);
  }

  public function action_view($id)
  {
    $post = Model_Posts::find('first',array(
      'where' => array('id' => $id),
    ));

    $data = array('post' => $post);
    $this->template->title = $post->title;
    $this->template->content = View::forge('posts/view', $data,false);
  }

  public function action_about(){
    $data = array();
    $this->template->title = "soy el about";
    $this->template->content = View::forge('posts/about', $data);
  }

  public function action_add()
  {
    if(Input::post('send')){
      $post = new Model_Posts();
      $post->title = Input::post('title');
      $post->body = Input::post('body');
      $post->tags = Input::post('tags');
      $post->category = Input::post('category');
      $post->created_at = date('Y-m-d H:i:s');
      $post->save();

      Response::redirect('/');
    }

    $data = array();
    $this->template->title = "soy el create";
    $this->template->content = View::forge('posts/add', $data);
  }

}

?>






