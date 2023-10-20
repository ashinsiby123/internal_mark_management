<html>
	<head>
	<title>Internal mark management</title>
<style>
*{
	margin: 0;
	padding: 0;
	font-family: 'Poppins', sans-serif;
}
.banner-text{
	text-align: center;
	color: black;
	padding-top: 200px;
}
.banner-text h1{
	font-size: 90px;
	font-family: 'san-serif';
}
.banner-btn{
	margin: 70px auto 0;
	font-size: 20px;
	font-weight: 300; 
}
.banner-btn a{
	width: 150px;
	text-decoration: none;
	display: inline-block;
	margin: 0 10px;
	padding: 12px 0;
	color:black;
	border: 0.5px solid black;
	position: relative;
	z-index: 1;
	transition: color 0.5s;
}
.banner-btn a span{
	width: 0;
	height: 100%;
	position: absolute;
	top: 0;
	left:0;
	background: cyan;
	z-index: -1;
	transition: 0.5s;
}
.banner-btn a:hover span{
	width: 100%;
}
.banner-btn a:hover{
	color:black;
}
</style>
</head>
<body bgcolor= "dffffe">
<section>
	<div class="banner-text">
		<h1>Internal Mark Management</h1>
			<div class="banner-btn">
				<a href="screen2.php"><span></span>Admin</a>
				<a href="studentlogin.php"><span></span>User</a>
			</div>
		</div>
	</section>
</body>
</html>