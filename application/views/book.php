<?php $this->load->helper('url'); ?>
<html>
<head>
   <meta http-equiv="content-type" content="text/html; charset=utf-8">

   <title>Book</title>
   
</head>

<body>
<form action="<?php echo site_url('book/'); ?>" method="post" accept-charset="utf-8">
      <p><label for="ID:">ID:</label><input type="text" name="id" value="" id="id"></P>
      <p><textarea name="comment" rows="8" cols="40"></textarea></p>
      <p><input type="submit" name="some_name" value="留言"></p>
   </form>

   <hr>
   
   <?php foreach( $posts as $post): ?>

   <?php echo $post['id']; ?> said: <?php echo $post['comment']; ?>

   <hr>

   <?php endforeach; ?>

</body>
</html>
