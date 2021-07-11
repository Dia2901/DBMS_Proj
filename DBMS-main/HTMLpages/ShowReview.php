 <?php 
session_start();
	
	$my_gr_no = $_SESSION['my_gr_no'];
	include('../config/connectDB.php');
	$availablerecord = true;
	$counter=0;
     $sql1 = "select b.name from book b where b.gr_no='$my_gr_no'";
	$result = mysqli_query($conn, $sql1);
	$infos = mysqli_fetch_assoc($result);
	$bookname =$infos['name'];
	mysqli_free_result($result);

    $sql="select review from record where gr_no='$my_gr_no' and review is not null";
     $result = mysqli_query($conn, $sql);

			
			if(mysqli_num_rows($result) > 0)
			{
				$reviewinfo = mysqli_fetch_all($result);
			}
			else
			{
				$availablerecord = false;
			}
			mysqli_free_result($result);

  ?>


 <!doctype html>
<html>
	<head>
		<meta charset="utf-8" />
	
		<title>Show review</title>
		<link rel="stylesheet"  href="../CSS/styles.css">
	</head>
	<body>
		<nav id="main-navigation">
                <ul>
                	<li><a href = "Myprofile.php" >My profile</a> </li>
                    <li><a href = "BookSearchPage.php" > Back</a></li>

                </ul>
                </nav>  
	
		
		<h3 style = "text-transform: capitalize;"> <center><?php echo $bookname; ?></center></h3>


      <?php 
     
					
					if($availablerecord):
						foreach( $reviewinfo as $review):
				?>
					<?php echo "Review ".++$counter.")" ?>
					<br>	
				<?php

						echo "<td>". $review[0]."</td>";

						
				?>
				<br>
				<br>
				<p style = "margin-left: 20px" >
				   
				<?php
						endforeach;
						else:
							{
                               echo "  nothing to show!";  
							}
						
						 endif;

                 ?>
             </p>


</body>
</html>