<?php require_once("auth.php"); ?>

<header>

	<script>
		function toggleOptions(event) {
			let target = event.target
			if (target.classList.contains("fa-caret-down")) {
				// open options
				document.getElementById("profile-options").style.display = "block"
				target.classList.remove("fa-caret-down")
				target.classList.add("fa-caret-up")
			} else {
				// close options
				document.getElementById("profile-options").style.display = "none"
				target.classList.remove("fa-caret-up")
				target.classList.add("fa-caret-down")
			}
		}
	</script>

	<div id="header-logo">
		<img src="../images/logo.jpeg" alt="logo" width="110px" height="110px">
	</div>
	<nav id="header-nav">
		<ul>
			<li><a class="navbar-link" href="homepage.php">HOME</a></li>
			<li><a class="navbar-link" href="faq.php">FAQ</a></li>
			<li><a class="navbar-link" href="customer-support.php">SUPPORT</a></li>
		</ul>
	</nav>
	<div id="header-actions">
		<a href="<?php echo ( $loggedin ? './user-dashboard.php' : './login.php' ) ?>">
			<button class="special">
				BOOK NOW
			</button>
		</a>
	</div>
	<div id="header-notifications">
		<input type="search" placeholder="Search">
		<i class="fa-solid fa-bell" style="color: white; margin-left: 15px;"></i>
	</div>
	<div id="header-user-profile">
		<?php
			if ($loggedin) {
				echo "$username <i class='fa-solid fa-caret-down' onclick='toggleOptions(event)'
						style='cursor: pointer; position: fixed; right: 16px; top: 5px'>
					</i><br>
					<img src='../images/user-solid.svg' class='profile-image'>
					<div id='profile-options' style='background-color: #839790;	border-radius: 5px;	box-shadow: 0px 4px 6px 0px rgba(0,0,0,.25); padding: 15px;'>
						<ul>
							<li>
								<a href='";

				switch ($role) {
					case "user":
						echo "user-profile.php";
						break;
					case "support_agent":
						echo "support-agent-profile.php";
						break;
					case "trip_provider":
						echo "trip-provider-profile.php";
						break;
					case "system_admin":
						echo "";
						break;					
				}

				echo "'>Profile</a></li><li><a href='";

				switch ($role) {
					case "user":
						echo "user-dashboard.php";
						break;
					case "support_agent":
						echo "support-agent-dashboard.php";
						break;
					case "trip_provider":
						echo "trip-provider-dashboard.php";
						break;
					case "system_admin":
						echo "admin-dashboard.php";
						break;					
				}
				
				echo "'>Dashboard</a></li>
						</ul>
					</div>
					<a href='logout.php'><button class='special'>Logout</button></a>
				";
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