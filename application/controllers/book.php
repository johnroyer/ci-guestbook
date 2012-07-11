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

      $list = $this->post->getPosts();

      $this->load->view('book');
   }
}
