<?php
include 'header.php';

if(isset($_GET['post'])) {
	$id = mysqli_real_escape_string($db, $_GET['post']);
	$query = "SELECT * FROM posts WHERE id='$id'";
} 

$posts = $db->query($query);
?>


<main>

<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#FF7F50"/></svg>

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Znanje</h1>
            <p>Nije znanje znanje znati, već je znanje znanje dati. J.J.Zmaj.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Prijavi se</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#90EE90"/></svg>

        <div class="container">
          <div class="carousel-caption">
            <h1>Znanje je moć</h1>
            <p>Nauči da programiraš uz interaktivne radionice.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Prijavi se</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption text-end">
            <h1>Mi brinemo</h1>
            <p>Mi ćemo se pobrinuti da usvojiš konkretna znanja.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Prijavi se</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">
	

	


    <!-- START THE FEATURETTES -->

    <!-- <hr class="featurette-divider"> -->
		<?php if ($posts->num_rows > 0) {
		while ($row = $posts->fetch_assoc()) {
		?>
    <div class="row featurette">
      <div class="col-md-12">
        <h2 class="featurette-heading"><?php echo $row['title']; ?></h2>
        <p class="lead"><?php $body = $row['body']; echo $body; ?></p>
		
      </div>
      
    </div>

    <hr class="featurette-divider">

    
	<?php }} ?>
   

    <!-- /END THE FEATURETTES -->
	
	
	


  </div><!-- /.container -->


<?php

include 'footer.php';
?>