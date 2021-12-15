<?php
	session_start();
	require('connection.php');
	//If your session isn't valid, it returns you to the login screen for protection
	// if( empty($_SESSION['admin_id']) ){
	//    header("location:access-denied.php");
	// }
	//retrive positions from the tbpositions table
	$result= $mysqli->query("SELECT * FROM positions")
	or die("There are no records to display ... \n" . mysql_error()); 
	if (mysqli_num_rows($result)<1){
	    $result = null;
	}
	?>
	<?php
	// inserting sql query
	if (isset($_POST['submit']))
	{

	$newPosition = addslashes( $_POST['position'] ); //prevents types of SQL injection

	$sql = $mysqli->query( "INSERT INTO positions(position) VALUES ('$newPosition')" )
	        or die("Could not insert position at the moment". mysql_error() );

	// redirect back to positions
	   header("Location: add_position.php");
	}
?>
<?php
	// deleting sql query
	// check if the 'id' variable is set in URL
	 if (isset($_GET['id']))
	 {
	 // get id value
	 $id = $_GET['id'];
	 echo $id;
	 // delete the entry
	 $result = mysqli_query("DELETE FROM positions WHERE id='$id'")
	 or die("The position does not exist ... \n"); 
	 
	 // redirect back to positions
	 header("Location: add_position.php");
	 }
	 else
	 // do nothing
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title> NSU Election</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/nsu.png"/>
<!--==============================
		}=================================================================-->
	<link rel="stylesheet" type="text/css" href="login-assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login-assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login-assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login-assets/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="login-assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login-assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login-assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="login-assets/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/sumy_bg.jpg');">
			<div class="wrap-login100 p-t-10 p-b-30">
				<form method='POST' class="login100-form validate-form">
                <tr>
                    <h3 style="margin-bottom: 30px;margin-top: 0px;">ADD ELECTION POSITION</h3>
	                <td bgcolor="#808080"><input class="input100" type="text" name="position" placeholder="Enter Position.." required/></td>
	                 
	            </tr>

					<div class="container-login100-form-btn p-t-10">
						<button name='submit' class="login100-form-btn">
							Add
						</button>
					</div>

				</form>
                
                <br/> 
                <br/> 
                <table >
                <h3 style="margin-bottom: 30px;margin-top: 0px;">AVAILABLE POSITIONS</h3>
                <tr style="border:1px;">
		        <th> ID</th> &nbsp; &nbsp;
		        <th>Position Name</th>
		        </tr>

                <?php
			//loop through all table rows
			while ($row=mysqli_fetch_array($result)){
			echo "<tr>";
			echo "<td>" . $row['id']."&nbsp;". "&nbsp;"."</td>";
			echo "<td>" . $row['position']."</td>";
			echo "</tr>";
			}
			mysqli_free_result($result);
			mysqli_close($link);
		?>

	</table>
			</div>
		</div>
	</div>
	


	
<!--===============================================================================================-->	
	<script src="login-assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="login-assets/vendor/bootstrap/js/popper.js"></script>
	<script src="login-assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="login-assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="login-assets/js/main.js"></script>

</body>
</html>