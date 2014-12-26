<?php
$id = $_POST['id'];
$Training_Title = $_POST['Training_Title'];
$Training_Description= $_POST['Training_Description'];
$Degree_name = $_POST['Institude*'];
$Address= $_POST['Address'];
$Training_Year= $_POST['Training_Year'];
$Duration(in_days)= $_POST['Duration(in days)'];
$Start_Date= $_POST['Start_Date'];
$End_Date= $_POST['End_Date'];
$Course_Title= $_POST['Course_Title'];


$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "crud01");
$query = INSERT INTO `crud01`.`Training_Title` (`Training_Title`, `Training_Description`, `Institude*`, `Address`, `Training_Year`, `Duration(in days)`, `Start_Date`, `End_Date`, `Course_Title`)
VALUES (NULL, '".$Training_Title."', '".$Training_Description."', '".$Institude*."', '".$Address."', '".$Training_Year."', '".$Duration(in days)."', '".$Start_Date."', '".$End_Date."','".$Course_Title."');";


mysqli_query($link, $query);
?>
