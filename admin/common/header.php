<nav class="navbar navbar-expand navbar-
light navbar-bg">
<a class="sidebar-toggle d-flex">
	<i class="hamburger align-self-center"></i>
</a>

<form class="d-none d-sm-inline-block">
	<div class="input-group input-group-navbar">
		<input type="text" class="form-control" placeholder="Search…" aria-label="Search">
		<button class="btn" type="button">
			<i class="align-middle" data-feather="search"></i>
		</button>
	</div>
</form>

<div class="navbar-collapse collapse">
	<ul class="navbar-nav navbar-align">
		<li class="nav-item dropdown">
			<a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-toggle="dropdown">
			</a>
		</li>
		<li class="nav-item dropdown">
			<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-toggle="dropdown">
				<i class="align-middle" data-feather="settings"></i>
			</a>

			<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="index.php" data-toggle="dropdown">
				<b>Child Adoption</b> <span class="text-dark"><?php ?></span>
			</a>
			<div class="dropdown-menu dropdown-menu-right">
				
				<a class="dropdown-item" href="chnage_password.php"><i class="align-middle mr-1" data-feather="pie-chart"></i> Change Password</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="logout.php">Log out</a>
			</div>
		</li>
	</ul>
</div>
</nav>