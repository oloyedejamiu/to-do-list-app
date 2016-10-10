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
		<ul class="list-items"> 
			<li> 
				<span class="item"> Eat Rice</span> 
				<a href="#" class="markdone"> Mark this item done</a>
			</li>
			<li> 
				<span class="item done">Take Bath 
				</span>
			</li>
		</ul>
		<form action="add.php" method="post" class="additems">
		<input type="text"  class="todoaddform" placeholder="Type a new item here",  autocomplete="off", required>
		<input type="submit" name="todosubmitbtn" value="Add My To Do" class="submit">
		</form>
	</div>
</body>
</html>