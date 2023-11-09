
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>patsuhub</title>
	<style>
		body {
			background-color: #FF6701;
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
		}
		.tests {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			min-height: 100vh;
			background-color: #1F1717;
		}
		.tests {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			min-height: 100vh;
			background-color: #1F1717;
		}
		
		a {
			text-decoration: none;
			color: #006CFF;
			font-size: 2rem;
		}
		#title{
  color : #FF6701;
  
}
	</style>
</head>
<body>
	
<a href="index.php" class="btn"><input type="submit" value="logout hub"></a>
<center>
	

</center>
<div class = "test">
<center><h1 id="title">Patsuhub Admin</a></h1></center>
<div class = "tests">
	
	<a href="view.php">Upload hub</a><br><br><br><br>
	<?php if (isset($_GET['error'])) {  ?>
		<p><?=$_GET['error']?></p>
	<?php } ?>
	 <form action="upload.php"
	       method="post"
	       enctype="multipart/form-data">

	 	<input type="file"
	 	       name="my_video">

	 	<input type="submit"
	 	       name="submit" 
	 	       value="Upload"><br><br><br>
				
	 </form>
	 <div class = "testss">
	 <center><a href="vieww.php" class="btn"><input type="submit" value="view"></a></center>
	</div>
	</div>
	</div>
</body>
</html>