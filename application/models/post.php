<?php
/**
 * 
 **/
class Post extends CI_Model
{
   
   function __construct( )
   {
      parent::__construct();
   }

   public function getPosts()
   {
      $this->load->database();

      $query = $this->db->get('post');
      return $query->result_array();
   }

   public function newPost($id, $comment)
   {
      $this->load->database();
      $data = array(
         'id' => $id,
         'comment' => $comment
      );
      $this->db->insert('post', $data);
   }
}
