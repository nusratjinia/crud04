<?php
$link = mysqli_connect("localhost","root","lict@2","crud01");
$query = "select * from Training_Title;";
$result = mysqli_query($link, $query);
?>
<table border="2" width="80%">
    <tr><td>id</td>
        <td>Training_Title</td>
        <td>Training_Description</td>
        <td>Institude*</td>
        <td>Address</td>
        <td>Training_Year</td>
        <td>Duration(in days)</td>
        <td>Start_Date</td>
        <td>End_Date</td>
        <td>Course_Title</td>
        <td>Action</td>
    </tr>
    <?php
    foreach($result as $row){
        ?>
        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['Training_Title']?></td>
            <td><?php echo $row['Training_Description']?></td>
            <td><?php echo $row['Institude*']?></td>
            <td><?php echo $row['Address']?></td>
            <td><?php echo $row['Training_Year']?></td>
            <td><?php echo $row['Duration(in days)']?></td>
            <td><?php echo $row['Start_Date']?></td>
            <td><?php echo $row['End_Date']?></td>
            <td><?php echo $row['Course_Title']?></td>

<!--            <td>--><?php //echo $row['Result']?><!--</td>-->
<!--            <td>--><?php //echo $row['Achievement']?><!--</td>-->
<!--            <td>--><?php //echo $row['Complition Status']?><!--</td>-->
            <td> <a href="view.php?id=<?php echo $row['id']?>">View/Show</a> |
                <a href="delete.php?id=<?php echo $row['id']?>">Delete</a> |
                <a href="edit.php?id=<?php echo $row['id']?>">edit</a> |
            </td>
        </tr>
    <?php
    }
    ?>
</table>
