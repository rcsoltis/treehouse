<?php 
$display_name = 'Cary Soltis';
?>
<!DOCTYPE html>
<html>
  <head>
  	<meta charset=utf-8>
  	<title>PHP Practice Basics by <?php echo $display_name;?></title>
  	<link href="css/style.css" rel="stylesheet" />
  </head>
  
  <body>
    <div id="wrap">
        <section class="sidebar text-center">
          <div class="avatar">
            <img src="img/img.jpeg" alt="Alt For Image">
          </div>
          <h1><?php echo $display_name;?></h1>
          <p>Contact:<br />
          <a href="mailto:">EMAIL</a></p>
          <hr />
          <ul class="social">
            <li><a href=""><span class="icon twitter"></span></a></li>
          </ul>
          <hr />
          <p>Today: <?php 
              date_default_timezone_set('America/Los_Angeles'); 
              echo date(' M d Y ') ; 
              ?></p>
        </section> 
        <section class="main">
          <h1>PHP Practice Page</h1>
    
          <h2>Unit Conversion</h2>
            <?php include 'inc/units.php'; ?>
          <hr />
    
          <h2>Daily Exercise</h2>
            <?php include 'inc/exercise.php'; ?>
            
          <h2>Weekly To-Do List</h2>
            <?php include 'inc/switch.php'; ?>
        
          <h2>Multi-Dimensional Array</h2>
            <?php include 'inc/associative_arrays.php'; ?>
            
         <h2>Loops</h2>
            <?php include 'inc/loops.php'; ?><br><br>
            <h3>Topics that I want to improve:</h3>
            <?php include 'inc/for_each_loop.php'; ?>
        
        </section>
    </div>
    <section class="footer text-center">
      &copy; <?php 
        date_default_timezone_set('America/Los_Angeles'); 
        echo date('Y');
        echo " " . $display_name . ". ";
        echo " Last modified: " . date ("F d Y H:i:s.", getlastmod());
        ?>
    </section>
  </body>
</html>