<html>
<head>
<title>Reading a file using PHP</title>
</head>
<body>
<?php 
// if you want to run this file Please make sure you tmp.txt
// file in your htdocs
$filename = "tmp.txt";
if(file_exists($filename) == false){
echo ( "File Not Found!" ); 
exit();
}
$file = fopen( $filename, "r" ); 
// open the file with reading mode
if( $file == false ) {
echo ( "Error in opening file" ); 
 exit();
} 
$filesize = filesize( $filename );
//filesize :  size of the file
$filetext = fread( $file, $filesize ); 
// fread  :  reading the file content
fclose( $file );
echo ( "File size : $filesize bytes" ); 
echo ( "<pre>$filetext</pre>" ); ?>
</body>
</html>
