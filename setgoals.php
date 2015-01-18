<?php

//code for connecting to mysql server
$servername = "localhost";
$username = "root";
$password = "tDulVhXDuH";
// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
mysqli_select_db($conn,"3goals");

//this function takes a varible and feild and puts var into the mysql feild
function putsql($var, $field)
{
    $sql = "INSERT INTO goals ($field)
    VALUES ('".$var."')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

//code to decide what gets put into the sql database
if (isset($_POST['goal1submit']))
  {
  // Execute this code if the submit button is pressed.
    putsql($_POST['goal1form'], 'goal1');
    putsql($_POST['goal1infoform'], 'goal1info');
  }

if (isset($_POST['goal2submit']))
  {
  // Execute this code if the submit button is pressed.
    $goal2 = $_POST['goal2form'];
    $goal2info = $_POST['goal2infoform'];
  }

if (isset($_POST['goal3submit']))
  {
  // Execute this code if the submit button is pressed.
    $goal3 = $_POST['goal3form'];
    $goal3info = $_POST['goal3infoform'];
  }

    include 'refresh.php';
?>
