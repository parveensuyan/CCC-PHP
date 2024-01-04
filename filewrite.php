<?php
$filename = "tmp.txt";

$file = fopen( $filename, "w+" );
// file open : w mode
// delete previous data and also create a file if doesn't exist
if( $file == false ) {
echo ( "Error in opening new file" ); 
 exit();
}
fwrite( $file, "This is a simple test\n" );
// fwrite :  write a content inside the txt file
fclose( $file );
// close file close
?>
<html>
<head>
<title>Writing a file using PHP</title>
</head>
<body>
<?php
$filename = "tmp.txt";
$file = fopen( $filename, "r" );
if( $file == false ) {
echo ( "Error in opening file" );
exit();
}
$filesize = filesize( $filename );
$filetext = fread( $file, $filesize );
fclose( $file );
echo ( "File size : $filesize bytes" );
echo ( "$filetext" );
echo("file name: $filename");
?>
</body>
</html>
