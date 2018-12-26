<?php 
    //insert.php
    $connect = mysqli_connect("localhost", "Rohan", "", "phage");
    $data = array();

    if(isset($_POST["formPhage"]) && isset($_POST["formEnzyme"]))
    {
        $varEnzyme = $_POST["formEnzyme"]; 
        $varPhage = $_POST["formPhage"];
    
        foreach($varEnzyme as $value)
        {
            $data[$value] = array();

            $query = "SELECT `cutPoints` FROM `cuts` WHERE Enzyme = '$value' and Phage = '$varPhage'";
            $result = mysqli_query($connect,$query) or die(mysqli_error($connect));
            $a = array();
            while ($row = mysqli_fetch_array($result))
            {
                //pushing cutpoints everytime we find one
                array_push($a,$row[0]);
            
            }
            
            $data[$value] = $a;
            
        }

        echo json_encode($data);
    
}
?>
