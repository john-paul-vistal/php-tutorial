<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triangle</title>
</head>
<body>

<?php
echo"<pre>";
for($x = 0; $x < 13; $x++){
    $output = '';
    for($y = 0; $y < 13 - $x; $y++){
        $output .= '&nbsp&nbsp';
    }
    for($z = 0; $z <= $x; $z++){
        $output .= '&nbsp*&nbsp&nbsp';
    }
    echo $output;
    echo "<br>";
}
for($x = 12; $x > 0; $x--){
    $output = '';
    for($y = 12; $y > 12 - $x; $y--){
        $output .= '&nbsp&nbsp*&nbsp';
    }
    for($z = 12; $z >= $x; $z--){
        $output = '&nbsp&nbsp'.$output;
    }
    echo $output;
    echo "<br>";
}
echo"</pre>";
echo "<br>";
echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspTHIS IS A DIAMOND WORT TO SAVE";
?>
    
</body>
</html>