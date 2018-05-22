<!--php code to write cut points o a file named check.txt-->

<?php
	header('Content-Type: text/html; charset = utf-8');

	$link = mysqli_connect("localhost","Rohan","","phage");
	
	if (mysqli_connect_error())
	{
		die("There was an error connecting to the database.");
	}
	
	$folder = iconv("windows-1254","UTF-8","cutPointsFolder");

	$files = scandir($folder);
	
	$writeIn = fopen("check.txt","w");

	for ($i = 2; $i<sizeof($files);$i++)
	{
		fwrite($writeIn, $files[$i]."\r\n--------------------------------------------------------\r\n\r\n");
		$myFile = fopen("cutPointsFolder/".$files[$i],"r") or die ("Unable to open file!");

		while (!feof($myFile))
		{
			fwrite($writeIn, fgets($myFile)); 
		}

		fclose($myFile);
	}
	fclose($writeIn);
?>
	

