<?php

if (isset($_POST['goal1submit']))
  {
  // Execute this code if the submit button is pressed.
    $goal1 = $_POST['goal1form'];
    $goal1info = $_POST['goal1infoform'];
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
