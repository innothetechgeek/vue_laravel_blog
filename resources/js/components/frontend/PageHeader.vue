<template>
   <!-- header -->
	<header class="header-default">
		<nav class="navbar navbar-expand-lg">
			<div class="container-xl">
				<!-- site logo -->
				<a class="navbar-brand" href="index.html"><img src="/images/logo.svg" alt="logo" /></a> 

				<div class="collapse navbar-collapse">
					<!-- menus -->
					<ul class="navbar-nav mr-auto">
						<li class="nav-item dropdown active">
							<a class="nav-link dropdown-toggle" href="index.html">Home</a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="index.html">Magazine</a></li>
								<li><a class="dropdown-item" href="personal.html">Personal</a></li>
								<li><a class="dropdown-item" href="personal-alt.html">Personal Alt</a></li>
								<li><a class="dropdown-item" href="minimal.html">Minimal</a></li>
								<li><a class="dropdown-item" href="classic.html">Classic</a></li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="category.html">Lifestyle</a>
						</li>						
						<li class="nav-item dropdown">
							<router-link class="nav-link" to="/register" >Register</router-link>
						</li>
						<li class="nav-item">
							<router-link class="nav-link" to="/login" >Login</router-link>
						</li>
					</ul>
				</div>

				<!-- header right section -->
				<div class="header-right">
					<!-- social icons -->
					<ul class="social-icons list-unstyled list-inline mb-0">
						<li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fab fa-medium"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
					</ul>
					<!-- header buttons -->
					<div class="header-buttons">
						<button class="search icon-button">
							<i class="icon-magnifier"></i>
						</button>
						<button class="burger-menu icon-button">
							<span class="burger-icon"></span>
						</button>
					</div>
				</div>
			</div>
		</nav>
	</header>
</template>