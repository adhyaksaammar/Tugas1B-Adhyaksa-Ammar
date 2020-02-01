<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

		<!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Sigmar+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Bitter&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Bitter&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Bree+Serif|Lobster|Patua+One&display=swap" rel="stylesheet">

		<style>
			body{
				background-image: url("/img/back.jpg");
			}/*
			.container{
				background-color: #ffffff;
			}*/
			.nav-link{
				font-family: 'Bree Serif', serif;
                font-size: 20px;
			}
			.judul-table{
				font-family: 'Lobster', cursive;
                font-size: 50px;
			}
			.judul-table-detail{
				font-family: 'Lobster', cursive;
                font-size: 50px;
                text-align: center;
			}
			table{
				font-family: 'Bitter', serif;
				margin-top: 15px;
			}
			th{
				text-align: center;
			}
			form{
				font-family: 'Bitter', serif;
			}
			.aksi{
				text-align: center;
			}
			.col-6{
				font-family: 'Bitter', serif;
			}
		</style>

	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #bbbbbb;">
		  <nav class="navbar navbar-light" style="margin-left: 20px;">
			  <a class="navbar-brand" href="/">
			    <img src="/img/house3.png" width="40" height="40" alt="">
			  </a>
			</nav>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" >
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="/">Home<span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item active">
		        <a class="nav-link" href="/siswa">Data Admin</a>
		      </li>
		      
		    </ul>
		    <form class="form-inline my-2 my-lg-0" method="GET" action="/siswa" style="margin-right: 40px;">
		      <input name="cari" class="form-control mr-sm-2" type="search" placeholder="Pencarian" aria-label="Search">
		      <button class="btn btn-outline-dark my-2 my-sm-0" type="submit" >Cari</button>
		    </form>
		  </div>
		</nav>
		
		<div class="container" style="margin-top: 30px;">
			@yield('content')
		</div>

		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>
</html>