<?php
require_once 'config/init.php';

$itemsQuery = $db->prepare("
	select id, name, done
	from item
	where user = :user
	");
$itemsQuery -> execute([
		'user' => $_SESSION['user_id']
	]);

$items = $itemsQuery -> rowCount() ? $itemsQuery : [];

?>

<!DOCTYPE html>
<html>
<head>
	<title>To Do</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
	
	<div class="list"> 
		<h1 class="headingh1"> My To Do List </h1>
			<?php if(!empty($items)): ?>
			<ul class="list-items"> 
			<?php //print_r($_SESSION['user_id']);
				//print_r($items); ?>
			
			<?php foreach ($items as $item):?>
				<li> 
					<span class="item <?php echo $item['done'] ? ' done' : ' ' ?>"> <?php echo $item['name'];?></span> 
			<?php if(!$item['done']):?>
					<a href="markdone.php?as=done&item=<?php echo $item['id'];?>" class="markdone"> Mark this item done</a>
			<?php endif;?>
			</li>			
			<?php endforeach;?> 
			</ul>

			<?php else: ?>
		<p> You have not added anything here </p>
			<?php endif; ?>

		<form action="processor.php" method="post" class="additems">
		<input type="text" name="todosubmitbtn" class="todoaddform" placeholder="Type a new item here",  autocomplete="off", required>
		<input type="submit" class="submit" value="Add a To Do!">
		</form>
	</div>
</body>
</html>