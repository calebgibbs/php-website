<?php 

  $this->layout('master', [
    'title'=>'Post Page',
    'desc'=>'view an individual post'
  ]);

?>

<body>

<h1><?= $post['title'] ?></h1>