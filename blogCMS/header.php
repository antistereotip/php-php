<?php
include 'includes/config.php';
include 'includes/db.php';
$query = "SELECT * FROM categories";
$categories = $db->query($query);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.82.0">
    <title>Carousel Template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">

    

    <!-- Bootstrap core CSS -->
<link href="bootstrap-5/assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="bootstrap-5/carousel/carousel.css" rel="stylesheet">
  </head>
  <body>
    
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Antistereotip U PRIPREMI</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
		  <?php if(isset($_GET['category'])) { ?>
            <a class="nav-link" aria-current="page" href="index.php">Sve kategorije</a>
		  <?php } else { ?>
		  <a class="nav-link active" aria-current="page" href="index.php">Sve kategorije</a>
		  </li>
		  <?php } ?>
			<?php if($categories->num_rows > 0) { 
				while ($row = $categories->fetch_assoc()){
					if (isset($_GET['category']) && $row['id'] == $_GET['category']) { ?>
			
          <li class="nav-item">
            <a class="nav-link active" href="index.php?category=<?php echo $row['id']; ?>"><?php echo $row['text']; ?></a>
          </li>
					<?php } else 
						echo "<li class='nav-item active'><a class='nav-link' href='index.php?category=$row[id]'>$row[text]</a></li>"; ?> 
			<?php }}  ?>
          
        </ul>
        <form class="d-flex" action="search.php" method="GET">
          <input class="form-control me-2" type="search" aria-label="Search" placeholder="Pretraži ključne reči" name="keys" value="<?php echo isset($_GET['keys']) ? $_GET['keys'] : ''; ?>">
          <button class="btn btn-outline-success" type="submit">Pretraži</button>
        </form>
      </div>
    </div>
  </nav>
</header>
  

