<?php //writeToFile

	if(file_exists("testfile.txt")) echo "File already exists.";
	$fh = fopen("testfile.txt", 'w') or die("Can't create file.");

	$text = "Test text.\n";
	fwrite($fh, $text) or die("Error!");
	fclose($fh);
	echo "File was created.";
	
	$fh = fopen("testfile.txt", 'r') or die("File not found.");
	$line = fgets($fh);
	fclose($fh);
	echo $line;
?>
