<?php 
    //insert.php
    $connect = mysqli_connect("localhost", "Rohan", "", "phage");

    if(isset($_POST["formPhage"]) && isset($_POST["formEnzyme"]))
    {   
        $varPhage = $_POST["formPhage"];

        $query = "SELECT `basepair` FROM `basepair` WHERE Phage = '$varPhage'";
        $result = mysqli_query($connect,$query) or die(mysqli_error($connect));
        $row = mysqli_fetch_array($result);

        echo json_encode($row);
    }

?>
