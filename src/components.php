<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--google fonts-->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
		<!--component styles-->
		<link rel="stylesheet" href="styles/components.css">
		<!--font awesomem-->
		<script src="https://kit.fontawesome.com/36fdbb8e6c.js" crossorigin="anonymous"></script>
		<title>Website components</title>
	</head>
	<body>
		<!-- Extra styles for this page, do not copy-->
		<style>
			.container {
				margin: 20px;
			}
		</style>

		<?php require("./views/header.php") ?>

		<div class="container">
			<button>Active Button</button>
			<button class="disabled" disabled>Disabled button</button>
			<br><br>
			<input type="search" placeholder="Search...">
			<br><br>
			<input type="text" class="active" value="Value">
			<input type="text" class="disabled" value="Value" disabled>
			<br><br>
			<select>
				<option>Option 1</option>
				<option>Option 2</option>
				<option>Option 3</option>
			</select>
			<br><br>
			<input type="checkbox" checked> Checkbox 1
			<input type="checkbox"> Checkbox 2
			<br>
			<input type="radio" checked> Radio 1
			<input type="radio"> Radio 2
			<br>
			<h1>Primary heading</h1>
			<h2>Secondary heading</h2>
			<h3>Tertiary heading</h3>
			<p>Paragraph text: Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus repellat quisquam fugiat ratione sed id, quod libero perferendis mollitia pariatur iure! Alias unde temporibus illo quibusdam eligendi nesciunt molestias esse.	</p>
			<textarea cols="50" rows="5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, iure. Nemo commodi sunt laudantium, distinctio accusamus provident omnis amet voluptatibus incidunt, pariatur, recusandae obcaecati eum est exercitationem. Quis, laboriosam illo!</textarea>
		</div>

        <?php require("./views/footer.php") ?>

	</body>
</html>