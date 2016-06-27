<?php 

	$this->layout('master', [
		'title'=>'Your account',
		'desc'=>'Change your password, review comments, add new content
				on your very own account page'
	]);

?>

<body>

<h1>Account</h1>

<form action="index.php?page=account" method="post" enctype="multipart/form-data"> <!-- enctype makes sure files are sent with the form - other wise they are sent seperately -->
	
	<h2>Create new post</h2>
	<div>
		<label for="title">Title: </label>
		<input type="text" name="title" id="title">
		
		<?= isset($titleMessage) ? $titleMessage : '' ?>
	
	</div>
	<div>
		<label for="desc">Description: </label>
		<textarea name="desc" id="desc" cols="30" rows="10"></textarea>
		<?= isset($descMessage) ? $descMessage : '' ?>
	</div>
	<div>
		<label for="image">Image:</label>
		<input type="file" name="image[]" id="image" multiple><!-- multiple allows you to add multiple files. doesnt need a number -->
		<?= isset($fileMessage) ? $fileMessage : '' ?>
	</div>

	<input type="submit" name="new-post">
	<?= isset($postMessage) ? $postMessage : '' ?>

</form>







