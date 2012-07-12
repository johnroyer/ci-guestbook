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

      if( $this->input->post('id') != false ){
         $id = $this->input->post('id', true);
         $comment = $this->input->post('comment', true);
      }

      $list = $this->post->getPosts();
      $data['posts'] = $list;

      $this->load->view('book', $data);
   }
}
