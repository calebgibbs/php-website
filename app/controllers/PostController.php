<?php

class PostController extends PageController {

public function __construct($dbc){

	parent::__construct();

	$this->dbc = $dbc;

	$this->getPostData();

}

public function buildHTML() {

	echo $this->plates->render('post', $this->data);

}

private function getPostData() {

//filter the id 
	$postID = $this->dbc->real_escape_string($_GET['postid']);

	//get info about this post 
	$sql = "SELECT title, description, image, created_at, updated_at 
			FROM posts 
			WHERE id = $postID"; 

	//run the sql 
	$result = $this->dbc->query($sql);

	//if the query failed 
	if( !$result || $result->num_rows == 0 ) {  
		//redirect ot 404 page 
		header('Location: index.php?page=404');
	}else{ 
		//yay! 
		$this->data['post'] = $result->fetch_assoc();
	}
	
}

}