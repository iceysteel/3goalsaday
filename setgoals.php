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
function putsql($goal, $goalinfo, $table, $conn)
{
    $sql = "INSERT INTO ".$table." (".$table."text, ".$table."infotext)
    VALUES ('".$goal."','".$goalinfo."')";
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
    putsql($_POST['goal1form'], $_POST['goal1infoform'], 'goal1', $conn);
  }

if (isset($_POST['goal2submit']))
  {
  // Execute this code if the submit button is pressed.
    putsql($_POST['goal2form'], $_POST['goal2infoform'], 'goal2', $conn);
  }

if (isset($_POST['goal3submit']))
  {
  // Execute this code if the submit button is pressed.
    putsql($_POST['goal3form'], $_POST['goal3infoform'], 'goal3', $conn);
  }

    include 'refresh.php';
?>
