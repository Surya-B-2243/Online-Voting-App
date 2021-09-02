<!DOCTYPE html>
<html>
<head>
	<title>Voting page</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
	
	<h1 style="text-align: center; font-family: 'Do Hyeon'; color:red; margin-top: 2%; font-size: 50px;color: #ffffff;">Online Voting</h1>
		
  <form action="" method="POST">
    <div class="container">
    	<div class="box1">
    		<div class="hea_box1">Avengers</div>
    		<div class="image">
    			<img src="Marvel.jpg" alt="Error">
    		</div>
    		<button class="btn" name="vote" value="M">VOTE</button>
    	</div>
    	<div class="box2">
    		<div class="hea_box2">Justice league</div>
    		<div class="image">
    			<img src="dc.jpg" alt="Error">
            </div>
            <button class="btn" name="vote" value="D">VOTE</button>
        </div>
    </div>
  </form>
</body>
</html>

<?php
 $connection = mysqli_connect("localhost","root","");
 $db = mysqli_select_db($connection,"votedb");

 if(isset($_POST['vote']))
 {
 	
 	$vote = $_POST['vote'];

 	$query = "INSERT INTO `voterlist` (`vote`) VALUES ('$vote')" ;
 	$query_run = mysqli_query($connection,$query);
 	if($query_run)
 	{
 		echo '<script type ="text/javascript"> alert("Vote Added")  </script>';
 		header('location: success.php');
 	}
 	else
 	{
 		echo '<script type ="text/javascript"> alert("Vote failed!") </script>';
 		
 	}

 }
?>