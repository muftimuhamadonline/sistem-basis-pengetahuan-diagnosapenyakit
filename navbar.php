	<nav class="navbar navbar-expand-lg"  style="background-color: orange;">
		<a class="navbar-brand  text-white" href="index.php">Forward Chaining</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarText">
			<ul class="navbar-nav mr-auto ">
				<li class="nav-item active">
					<a class="nav-link  text-white" href="#">Home <span class="sr-only">(current)</span></a>
				</li>
				<?php if (!isset($_SESSION['pasien'])): ?>
					<li class="nav-item">
						<a class="nav-link  text-white" href="login.php">Login</a>
					</li>
					<li class="nav-item">
						<a class="nav-link  text-white" href="daftar.php">Daftar</a>
					</li>
				<?php else: ?>
					<li class="nav-item">
						<a class="nav-link  text-white" href="profile.php">Akun</a>
					</li>
				<?php endif ?>
				
				
			</ul>
		</div>
	</nav>

