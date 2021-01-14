<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <?php include 'source.php'; ?>
    <title>Seach Movie</title>
</head>
<body>
<?php include "navbar.php";?>

 <div class="container mt-5">
	<h2 class="text-center">Bootstrap movie cards</h2>
	<div class="row justify-content-center">

		
		</div>
			 <div class="row">
				<div class="card movie_card">
		  <img src="https://www.joblo.com/assets/images/joblo/posters/2019/02/Dyow9RgX4AElAGN.jpg" class="card-img-top" alt="...">
		  <div class="card-body">
		    <h5 class="card-title">Toy Story 4</h5>
		   		<span class="movie_info">2019</span>
		   		<span class="movie_info float-right"><i class="fas fa-star"></i> 9 / 10</span>
		   		<br><a href="" class="btn btn-sm btn-danger float-right">Details</a><br>
		  </div>
		</div>

				<div class="card movie_card">
		  <img src="https://www.joblo.com/assets/images/joblo/posters/2019/02/captin-marvel-poster-international.jpg" class="card-img-top" alt="...">
		  <div class="card-body">
		    <h5 class="card-title">Captain Marvel</h5>
		   		<span class="movie_info">2019</span>
		   		<span class="movie_info float-right"><i class="fas fa-star"></i> 9 / 10</span>
		   		<br><a href="" class="btn btn-sm btn-danger float-right">Details</a><br>
		  </div>
		</div>

				<div class="card movie_card">
		  <img src="https://www.joblo.com/assets/images/joblo/posters/2019/01/Spider-Man-Far-From-Home-poster-1.jpg" class="card-img-top" alt="...">
		  <div class="card-body">
		    <h5 class="card-title">Spider-Man: Far From Home</h5>
		   		<span class="movie_info">2019</span>
		   		<span class="movie_info float-right"><i class="fas fa-star"></i> 9 / 10</span>
		   		<br><a href="" class="btn btn-sm btn-danger float-right">Details</a><br>
		  </div>
		</div>

				<div class="card movie_card " >
		  <img src="https://www.joblo.com/assets/images/joblo/posters/2019/01/Alita-character-poster-1.jpg" class="card-img-top" alt="...">
		  <div class="card-body">
		    <h5 class="card-title">Alita: Battle Angel</h5>
		   		<span class="movie_info">2019</span>
		   		<span class="movie_info float-right"><i class="fas fa-star"></i> 9 / 10</span>
		   		<br><a href="" class="btn btn-sm btn-danger float-right">Details</a><br>
		  </div>
		</div>

				<div class="card movie_card">
		  <img src="https://www.joblo.com/assets/images/joblo/posters/2018/11/Spider-Verse-poster-1.jpg" class="card-img-top" alt="...">
		  <div class="card-body">
		    <h5 class="card-title">Spider-Man: Into the Spider-Verse</h5>
		   		<span class="movie_info">2019</span>
		   		<span class="movie_info float-right"><i class="fas fa-star"></i> 9 / 10</span>
		   		<br><a href="" class="btn btn-sm btn-danger float-right">Details</a><br>
		  </div>
		</div>

		

	</div>
</div>
</body>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

	<script>
		$(function () {
  		$('[data-toggle="tooltip"]').tooltip()
	})
	</script>
</body>
</html>