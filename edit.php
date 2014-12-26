<?php
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "crud01");
$query = "select * from Training_Title WHERE id = $id";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
?>
<form action="update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id'];?>" />
    <label>Training_Title:</label>
    <input type="text" name="Training_Title" value="<?php echo $row['Training_Title'];?>" />

    <label>Training_Description:</label>
    <input type="text" name="Training_Description" value="<?php echo $row['Training_Description'];?>" />

    <label>Institude*:</label>
    <input type="text" name="Institude*" value="<?php echo $row['Institude*'];?>" />

    <label>Address:</label>
    <input type="text" name="Address" value="<?php echo $row['Address'];?>" />

    <label>Training_Year:</label>
    <input type="text" name="Training_Year" value="<?php echo $row['Training_Year'];?>" />

    <label>Duration(in_days):</label>
    <input type="text" name="Duration(in_days)" value="<?php echo $row['Duration(in_days)'];?>" /

    <label>Start_Date:</label>
    <input type="text" name="Start_Date" value="<?php echo $row['Start_Date'];?>" />

    <label>End_Date:</label>
    <input type="text" name="End_Date" value="<?php echo $row['End_Date'];?>" />

    <label>Course_Title:</label>
    <input type="text" name="Course_Title" value="<?php echo $row['Course_Title'];?>" /

<!--    <label>Year:</label>-->
<!--    <input type="text" name="Year" value="--><?php //echo $row['Year'];?><!--" />-->
<!--    -->
<!--    <label>Achievement:</label>-->
<!--    <input type="text" name="Achievement" value="--><?php //echo $row['Achievement'];?><!--" /-->
<!--    -->
<!--    <label>Complition Status:</label>-->
<!--    <input type="text" name="Complition Status" value="--><?php //echo $row['Complition Status'];?><!--"-->
       <input type="submit" name="update" value="update">
</form>
