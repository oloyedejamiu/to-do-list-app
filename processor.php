<?php 
require_once 'config/init.php';

if (isset($_POST['todosubmitbtn'])) {
	$name = trim($_POST['todosubmitbtn']);

	if(!empty($name)){
		$addedQuery = $db->prepare("
			INSERT into item (name, user, done, created) 
			VALUES (:name, :user, 0, NOW())

			");
		$addedQuery -> execute([
			'name' => $name,
			'user' => $_SESSION['user_id']
			]);

	}
}

header('Location: index.php');



?>