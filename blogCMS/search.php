<?php
include 'header.php';

// get the search terms from the url
$keys = isset($_GET['keys']) ? $_GET['keys'] : '';

// create the base variables for building the search query
$search_string = "SELECT * FROM posts WHERE ";
$display_words = "";
					
// format each of search keywords into the db query to be run
$keywords = explode(' ', $keys);			
foreach ($keywords as $word){
	$search_string .= "keywords LIKE '%".$word."%' OR ";
	$display_words .= $word.' ';
}
$search_string = substr($search_string, 0, strlen($search_string)-4);
$display_words = substr($display_words, 0, strlen($display_words)-1);


// run the query in the db and search through each of the records returned
$query = mysqli_query($db, $search_string);
$result_count = mysqli_num_rows($query);



?>
      <main>




  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">
	

	


    <!-- START THE FEATURETTES -->

    <!-- <hr class="featurette-divider"> -->
	<?php	

	if ($result_count > 0){

	
	echo '<br><br><div class="row">';
	
	echo number_format($result_count).' rezultata pronađen/a<br />';
	echo 'Tražili ste ključne reči: "'.$display_words.'"<hr />';
	
	while ($row = mysqli_fetch_assoc($query)){ ?>
	<div class="row featurette">
      <div class="col-md-12">
        <h2 class="featurette-heading"><?php echo $row['title']; ?></h2>
        <p class="lead"><?php $body = $row['body']; echo substr($body, 0, 200).'...'; ?></p>
		<p class="lead">Keywords: <?php $body = $row['keywords']; echo $body; ?></p>
		<a href="single.php?post=<?php echo $row['id']; ?>" class="btn btn-primary">Detaljnije</a>
      </div>
      
    </div>
	<?php
	}
	
	// end the display of the table
	echo '</div>';
}
else
	echo 'There were no results for your search. Try searching for something else.'; ?>
    

    <hr class="featurette-divider">

    

   

    <!-- /END THE FEATURETTES -->
	
	
	
	  
	


  </div><!-- /.container -->







<?php

include 'footer.php';
?>