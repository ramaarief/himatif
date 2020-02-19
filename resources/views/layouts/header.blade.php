	
<!-- Header -->
	<header id="header" class="alt">
		<h4><a href="index.php">Himatif</a> by R A P</h4>
		<nav id="nav">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="/proker">Proker</a></li>
				<li>
					<a href="#" class="icon solid fa-angle-down" class="button">{{auth()->user()->name}} &nbsp;<img src="{{asset('images/member6.png')}}" width="25px"></a>
					<ul>
						<li><a href="#">Generic</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="/logout">Log Out</a></li>
					</ul>
				</li>
			</ul>
		</nav>
	</header>
