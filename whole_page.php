<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Page</title>
	<style type="text/css">
		body{
			width: 100%;
			padding: 0;
			margin: 0;
			height: 100%;
		}
		h2 {
			margin: 0px;
			text-align: center;
			padding: 10px;
		}
		h4 {
			margin: 0px;
		}
		footer {
			margin:  0px;
		}
		section {
			padding: 10px;
		}
		.header-wrapper header {
			display: block;
			height: 50px;
			background: lightgray;
		}
		.body-wrapper{
			display: inline-flex;
			width: 100%;
			height: 900px;
		}
		.body-wrapper aside{
			width: 20%;
			background: lightblue;
		}
		.body-wrapper section {
			width: 80%;
			background: whitesmoke;
		}
		.footer-wrapper {
			background: lightgray;
		}
	</style>
</head>
<body>
	<!-- Open Header Wrapper -->
	<div class="header-wrapper">
		<header>
			<h2>Heading</h2>
		</header>
	</div>
	<!-- Close Header Wrapper -->

	<!-- Open Top / Main Container -->
	<div class="body-wrapper">
		<!-- Open Menu Bar -->
		<aside>
			<h3>Navbar - Menu Bar</h3>
			<ul>
				<li><a href="?pages=home">Home</a></li>
				<li><a href="?pages=page1">Page 1</a></li>
				<li><a href="?pages=section1">Section 1</a></li>
			</ul>
		</aside>
		<!-- Close Menu Bar -->

		<!-- Open Section / Main Page -->
		<section>
			<h4>Here is default page!</h4>
			<p>This is paragraph 1</p>
		</section>
		<!-- Close Section / Main Page -->

	</div>
	<!-- Close Top / Main Container -->

	<!-- Open Footer Wrapper -->
	<div class="footer-wrapper">
		<footer>
			<h2>Footer</h2>
		</footer>
	</div>
	<!-- Close Footer Wrapper -->
</body>
</html>
