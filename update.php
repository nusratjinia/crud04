<?php
$id = $_POST['id'];
$Training_Title = $_POST['Training_Title'];
$Training_Description= $_POST['Training_Description'];
$Degree_name = $_POST['Institude*'];
$Address= $_POST['Address'];
$Training_Year= $_POST['Training_Year'];
$Duration(in_days)= $_POST['Duration(in_days)'];
$Start_Date= $_POST['Start_Date'];
$End_Date= $_POST['End_Date'];
$Course_Title= $_POST['Course_Title'];
//$Result= $_POST['Result'];
//$Achievement= $_POST['Achievement'];
//$Complition_Status= $_POST['Complition Status'];
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "crud01");
$query = "UPDATE `crud01`.`Training_Title` SET `Training_Title` = '".$Training_Title."',
`Training_Description` = '".$Training_Description ."',Institude*` = '".$Institude*."',Address` = '".$Address."',
Training_Year` = '".$Training_Year."',Duration(in_days)` = '".$Duration(in_days)."',Start_Date` = '".$Start_Date."',End_Date` = '".End_Date."', Course_Title` = '".$Course_Title."',WHERE `Training_Title`.`id` = $id;";
mysqli_query($link, $query);
header('location:list.php');
?>
