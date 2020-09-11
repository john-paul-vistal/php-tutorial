<?php   
$file = 'sample.txt';

if(file_exists($file)){
    // //read system file
    // echo readfile($file).'<br>';

    // //copy system file
    // copy($file,'qoute.txt');

    // //absolute path
    // echo realpath($file).'<br>';

    // //rename file
    // //rename($file,'sample.txt');

    //file size
    // echo filesize($file);


    //ANOTHER WAY OF READING FILE IN COMPUTER
    //opening a file for reading
    //r is for reading
    //r+ read write
    //a+ place the cursor to the end also means the thing you update is placed is the last line.
    $handle = fopen($file,'a+');

    //read the file
    //first parameter the file opened and the second one is the number of bytes.
    //echo fread($handle,filesize($file));

    //read single line
    // echo fgets($handle);

    //read singel character
    // echo fgetc($handle);

    //writing a file
    // fwrite($handle,"\nTwo heads is better than one but two null is useless than a 0");
    fclose($handle);
    //Deleting file
    //unlink('qoute.txt');

}else{
    echo "file doesnt exist";
}
?>