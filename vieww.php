<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>View</title>
	<style>
		body {
			background-color: #FF6701;
		}
		#title{
  color : #FF6701;
  
}
		.test {
			border-style: inset;
  border-width: medium;
  position: relative;
  height: auto;
  width: auto;
  bottom: 0px;
  padding:  30px  ;
  font-size: 17px;
  line-height: 1.3;
  background-color: #1F1717;
  margin-left: auto; 
  margin-right: auto;
  margin-bottom: 200px;
		    display: flex;
			justify-content: center;
			align-items: center;
			flex-wrap: wrap;
			min-height: 100vh;
			background-color: #1F1717;
		}
		video {
			width: 310px;
			height: 200px;
		}
		a {
			text-decoration: none;
			color: #006CFF;
			font-size: 1.5rem;
		}
	</style>
</head>
<body>
<a href="home.php" class="btn"><input type="submit" value="back"></a>
<center>
	

</center>

	
<div class = "test">
	<div class="alb">
	<center><h1 id="title">Patsuhub Admin View</a></h1></center><br><br><br><br><br><br>
		<?php 
		 include "conn.php";
		 $sql = "SELECT * FROM videos ORDER BY id DESC";
		 $res = mysqli_query($conn, $sql);

		 if (mysqli_num_rows($res) > 0) {
		 	while ($video = mysqli_fetch_assoc($res)) { 
		 ?>
		 		
	        <video src="uploads/<?=$video['video_url']?>" 
	        	   controls>
	        	
	        </video>

	    <?php 
		
	     }
		 }else {
		 	echo "<h1>Empty</h1>";
		 }
		 ?>
	</div>
</body>
</html>

