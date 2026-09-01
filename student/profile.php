<html>

<?php

$studentInfo = array(
    
    "Student ID" => "25218181", 
    "Full Name" => "Jim Louise P. Branzuela",
    "Year Level" => "3rd year", 
    "Section" => "3C", 
    "Email" => "jimlouisebranzuela@gmail.com", 
    "Status" => "Alive"

);



?>

<table border="1">
    <?php foreach ($studentInfo as $info => $data) { ?>
        <tr>
            <td><?php echo $info; ?></td>
            <td><?php echo $data; ?></td>
        </tr>
    <?php } ?>
</table>


</html>
