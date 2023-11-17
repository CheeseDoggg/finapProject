<?php 
include "connection.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the edited values from the form
    $editedAddress = $_POST['address'];
    $editedContact = $_POST['contact'];
    $editedEmail = $_POST['email'];

    // Update the values in the database
    $sql = "UPDATE information SET address = '$editedAddress', contact = '$editedContact', email = '$editedEmail'";
    $result = mysqli_query($conn, $sql);
    
}header('Location: admin.php');

?>