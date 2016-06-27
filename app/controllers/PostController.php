<?php

class PostController extends PageController {

public function __construct($dbc){

	parent::__construct();

	$this->dbc = $dbc;

	$this->getPostData();

}

public function buildHTML() {

	echo $this->plates->render('post');

}

private function getPostData() {

//filter the id 
	$postID = $this->dbc->real_escape_string($_GET['postid']);

	//get info about this post 
	$sql = "SELECT title, description, image, created_at, updated_at 
			FROM posts 
			WHERE id = $postID"; 

	die($sql);
	
}

}