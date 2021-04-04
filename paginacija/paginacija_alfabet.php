<html>  
<head>  
<title> Pagination </title>  
</head>  
<body>  
  
<?php  
  
    //database connection  
    $conn = mysqli_connect('localhost', 'root', '');  
    if (! $conn) {  
die("Connection failed" . mysqli_connect_error());  
    }  
    else {  
mysqli_select_db($conn, 'pagination');  
    }  
  
    //define total number of results you want per page  
    $results_per_page = 5;  
  
    //find the total number of results stored in the database  
    $query = "select * from alphabet";  
    $result = mysqli_query($conn, $query);  
    $number_of_result = mysqli_num_rows($result);  
  
    //determine the total number of pages available  
    $number_of_page = ceil ($number_of_result / $results_per_page);  
  
    //determine which page number visitor is currently on  
    if (!isset ($_GET['page']) ) {  
        $page = 1;  
    } else {  
        $page = $_GET['page'];  
    }  
  
    //determine the sql LIMIT starting number for the results on the displaying page  
    $page_first_result = ($page-1) * $results_per_page;  
  
    //retrieve the selected results from database   
    $query = "SELECT *FROM alphabet LIMIT " . $page_first_result . ',' . $results_per_page;  
    $result = mysqli_query($conn, $query);  
      
    //display the retrieved result on the webpage  
    while ($row = mysqli_fetch_array($result)) {  
        echo $row['id'] . ' ' . $row['alphabet'] . '</br>';  
    }  
  
  
    //display the link of the pages in URL  
    for($page = 1; $page<= $number_of_page; $page++) {  
        echo '<a href = "paginacija_alfabet.php?page=' . $page . '">' . $page . ' </a>';  
    }  
  
?>  
</body>  
</html> 