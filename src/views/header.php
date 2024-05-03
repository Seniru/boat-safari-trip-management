<?php require_once("auth.php"); ?>

<header>
	<div id="header-logo">
		<img src="../images/logo.jpeg" alt="logo" width="110px" height="110px">
	</div>
	<nav id="header-nav">
		<ul>
			<li><a class="navbar-link" href="/">HOME</a></li>
			<li><a class="navbar-link" href="/">FAQ</a></li>
			<li><a class="navbar-link" href="/">MORE v</a></li>
		</ul>
	</nav>
	<div id="header-actions">
		<button class="special">BOOK NOW</button>
	</div>
	<div id="header-notifications">
		<input type="search" placeholder="Search">
		<i class="fa-solid fa-bell" style="color: white; margin-left: 15px;"></i>
	</div>
	<div id="header-user-profile">
		<?php
			if ($loggedin) {
				echo "$username v <br>
				<img src='../images/user-solid.svg' class='profile-image'>
				<a href='logout.php'><button class='special'>Logout</button></a>";
			} else {
				echo "
					<br>
					<a href='login.php'><button class='special'>Login</button></a>
					<a href='signup.php'><button class='special'>Sign up</button></a>
				";
			}
 		?>
	</div>
</header>