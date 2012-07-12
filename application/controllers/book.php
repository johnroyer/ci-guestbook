<?php
/**
 * 
 **/
class Book extends CI_Controller
{
   
   function __construct( )
   {
      parent::__construct();
   }

   public function index()
   {
      $this->load->model('post');

      if( isset( $_POST['id'] ) ){
      }

      $list = $this->post->getPosts();
      $data['posts'] = $list;

      $this->load->view('book', $data);
   }
}
