<!--php code to add to the database-->

<?php
	header('Content-Type: text/html; charset = utf-8');
	set_time_limit(0);

	$link = mysqli_connect("localhost","Rohan","","phage");
	
	if (mysqli_connect_error())
	{
		die("There was an error connecting to the database.");
	}
	
	$enzymeFolder = iconv("windows-1254","UTF-8","cutPointsFolder");
	$enzymeFiles = scandir($enzymeFolder);
	$enzyme = str_replace(".txt","",$enzymeFiles);

	$phageFolder = "Rhodococus";
	$phageFiles = scandir($phageFolder);
	$phage = str_replace(".fasta","",$phageFiles);
	
	for($i = 2; $i<sizeof($enzymeFiles); $i++)
	{

		for ($j = 2; $j<sizeof($phageFiles); $j++)
		{	
			$myFile = fopen("cutPointsFolder/".$enzymeFiles[$i],"r") or die ("Unable to open file!");

			while(!feof($myFile))
			{
				$line = fgets($myFile);
				$lines = substr($line,0,strlen($phage[$j]));

				if(strcmp($phage[$j],$lines)==0)
				{
					$flag = true;

					while ($flag == true)
					{
						$h = fgets($myFile);
						if(strcmp(substr($h,0,6),"Number") != 0)
						{

							$query = "INSERT INTO `cuts`(`Phage`,`Enzyme`,`cutPoints`)VALUES('$phage[$j]','$enzyme[$i]',$h)";
							$result = mysqli_query($link,$query);
							
							if(!$result)
							{
								echo "Error writing to the database".$phage[$j]."and".$enzyme[$i];
							}
							
						}
						else
						{
							$flag = false;

						}
					}
				}

			}
			fclose($myFile);
		}
	}
	
?>