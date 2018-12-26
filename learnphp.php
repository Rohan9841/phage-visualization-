<!-- <?php
    $name = "Rohan";
    echo "<p>$name</p>";
    $string1 = "1st part";
    $string2 = "se";

    echo $string1." ".$string2;
?>

<?php
   $myArray = array("Rohan","Name","My");

   $another[0] = "yoncess";

   echo $another[0];

   $another[] = "alti";

   echo "<br>".$another[1];

   echo sizeof($another);
?>

<?php
    $age = 25;

    if($age > 18)
    {
        echo("You may proceed");
    }
    else
    {
        echo("You little boy");
    }
?>
//for loop
<?php
    for($i = 2; $i<=30; $i += 2)
    {
        echo $i."<br>";
    }
?>

<?php
    $family = ["rohan","roshii","Nitu","Nabindra"];

    foreach ($family as $key)
    {
        echo $key." "."Maharjan"."<br><br>";
    }

    
?>

<?php
foreach ($family as $key => $value)
    {
        $family[$key] = $value."Maharjan";
        echo($value."<br>");
    }
    ?>
    
//while loop
    <?php
        $i = 1;

        while ($i <= 10)
        {
            echo($i * 5);
            echo("<br>");
            $i++;
        }
    ?>

<?php
        $phage = ["Alatin","Ascii","Dinger","Alpacadoss","Dinger"];

        $i = 0;

        while($i < sizeof($phage))
        {
            echo($phage[$i]);
            echo("<br>");
            $i++;
        }
    ?>

//GET VARIABLE
    <?php
        $check = true;
        
            $num = $_GET["num"];
            for($i = 2; $i< $num; $i++)
            {
                if($num % $i == 0)
                {
                    $check = false;

                }
            }
            if($num == 1)
            {
                echo "The number is Prime";
            }

            else if($check)
            {
                echo "The number is Prime";
            }
            else
            {
                echo "The number is no prime";
            }
            
        
       
    ?>
 
 <p>What's your name?</p>

 <form>
        <input type = "number" name = "num">
        <input type = "submit" value = "Go">
 </form>
    
    //POST 
    <p>Enter your name</p>
    <form method = "post">
        <input type = "text" name = "name">
        <input type = "submit" value = "submit">  
    </form>

    <?php

        $check = false;

        $names = ["Rohan","Shirish","Sunesh","Anala"];

        $userName = $_POST["name"];

        foreach($names as $arrayName)
        {
            if(strcasecmp($arrayName,$userName) == 0)
            {
                $check = true;
            }
        }
        
        if($check)
        {
            echo("Hello ".$userName);
        }
        else
        {
            echo("I don't know you ".$userName);
        }
    ?>
    --> 

    



