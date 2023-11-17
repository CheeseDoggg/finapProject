<?php
session_start();
include 'connection.php';
if (!isset($_SESSION['uType']) || $_SESSION['uType'] !== 'Admin') {
	// User is not authenticated or is not a passenger user, redirect to login page
	header('Location: login.php');
	exit();
}
$query = "SELECT * FROM information";
    $result = mysqli_query($conn, $query);
    
    if (mysqli_num_rows($result) > 0) {
      
        $row = mysqli_fetch_assoc($result);
        $gps = $row['gps'];
     
        
    } else {
    
        die("Error: Not found.");
    }

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $gpsloc = $_POST['gps'];

    $sql = "SELECT * FROM information";
    $results = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($results) > 0) {
      
        $row = mysqli_fetch_assoc($results);
        $email = $row['email'];
        $contact = $row['contact'];
        $address = $row['address'];
        $gps = $row['gps'];
        $mission = $row['mission'];
        $vision = $row['vision'];
        
    } else {
    
        die("Error: Not found.");
    }
    $sql2 = "UPDATE information SET gps = '$gpsloc'";
  
        // Execute the SQL statement
        if (mysqli_query($conn, $sql2)) {
          echo "Location Changed Succesfully.";

        } else {
          echo "Error: " . mysqli_error($conn);
        }
      header('Location: admin.php');
}
?>
<style>
	a {
		color: #f56e00;
		text-decoration: none;
	}

	a:hover {
		color: #f56e00;
		text-decoration: none;
	}

	.container {
		width: 400px;
		margin: 0 auto;
		margin-top: 100px;
		padding: 20px;
		background-color: #ffffff;
		border: 1px solid #ccc;
		border-radius: 4px;
		box-shadow: 0px 0px 8px #cccccc;
	}

	label {
		display: block;
		margin-bottom: 10px;
		font-weight: bold;
	}

	input[type="text"],
	input[type="number"],
	textarea {
		width: 100%;
		padding: 8px;
		border: 1px solid #ccc;
		border-radius: 4px;
		box-sizing: border-box;
		margin-bottom: 20px;
	}

	input[type="file"] {
		margin-bottom: 20px;
	}

	input[type="submit"] {
		background-color: #f56e00;
		color: #ffffff;
		border: none;
		border-radius: 4px;
		padding: 10px 20px;
		cursor: pointer;
        margin-left: 170px;
	}

	.cancel-button {
		background-color: #f56e00;
		color: #ffffff;
		border: none;
		border-radius: 4px;
		padding: 10px 20px;
		text-align: center;
        margin-left: 170px;
		margin-top: 20px;
		cursor: pointer;
     
	}

	.back-button:hover {
		background-color: #d64e00;
	}

	.center {
		text-align: center;
	}

</style>





</style>
<div class="container">
<form enctype="multipart/form-data" method="POST" class="login-form">
  <label for="gps">GPS Location:</label>
  <input type="text" name="gps" value="<?php echo $gps; ?>">
  <input type="submit" value="Save">
</form>
<a href="admin.php" class="cancel-button" style=" width: 100%;
  height: 25px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #f8f8f8;
  font-size: 16px;
  resize: none;">Cancel</a>
</div>