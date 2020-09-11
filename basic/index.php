<?php
//include runs the code from the other file
//if we get error it still execute the codes from the main file
include('sample1.php');

//Require is closely similar but if we get error
// from the other file it did'nt execute the code in main file 
require('sample1.php');
echo '<br>Hello from index';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Tutorial</title>
</head>
<body>
    <?php
        // DEFINING A CONSTANT VARIABLE
        // define('NAME','JOHN PAUL VISTAL');

        // $variable1 = 'My email is: ';
        // $variable2 = 'johnpaulvistal@gmail.com';

        //  Deference between single quotation and double quotation
        //  single quotation canot read variable inside.

        // echo strlen($variable2).'<br>';
        // echo strtoupper($variable2).'<br>';
        // echo str_replace('A','O',NAME).'<br>';

        //(BIDMAS) oparation order
        // echo 2*3*(8/2)**2;

        // Declaration of array
        //$array = []
        //$array = array()


        // $num = [0,1,2,3,5,8,4];
        // //Adding item in array
        // $num[] = 100;
        // array_push($num,457);
        // print_r($num);

        //Merging Array
        // $n1 = [1,2,3];
        // $n2 = [4,5,6];
        // $n3 = array_merge($n1,$n2);
        // print_r($n3);

        // Associative Array key and value pairs
        // $student = ['john'=>19,'paul'=>20,'shawn'=>23,'tony'=>18,'mello'=>21];
        // echo $student['john'];
        // $student['criz'] = 20;
        // print_r($student)


        //Multidimensional Arrays
        // $blog = [
        //     ['author'=>'john','content'=>'hello world','likes' =>52],
        //     ['author'=>'shawn','content'=>'hello php','likes' =>20],
        //     ['author'=>'peter','content'=>'hello javascript','likes' =>10],
        //     ['author'=>'tony','content'=>'hello dragons','likes' =>25],
        // ];
        //    echo $blog[1]['author'];
        //    echo count($blog);
        //Adding Item in array
        // $blog[] = [ 'author'=>'strange','content' =>'hello magic','likes' => 15];
        //Deleting the last element
        // array_pop($blog);
        // print_r($blog);



        //LOOPS
        // $num = [0,1,2,3,5,8,4];
        //Traditional Loop
        // for($i = 0 ;$i<count($num);$i++){
        //     echo $num[$i].'<br>';
        // }

        //FOR EACH
        // foreach($num as $n){
        //     echo $n.'<br>';
        // }

        //  $blog = [
        //     ['author'=>'john','content'=>'hello world','likes' =>52],
        //     ['author'=>'shawn','content'=>'hello php','likes' =>20],
        //     ['author'=>'peter','content'=>'hello javascript','likes' =>10],
        //     ['author'=>'tony','content'=>'hello dragons','likes' =>25],
        // ];
        //Convert array to readable string;
        // foreach($blog as $item){
        //     echo json_encode($item).'<br>';
        // }
        // foreach($blog as $item){
        //     echo $item['author'].'-'.$item['content'].'-'.$item['likes'].'<br>';
        // }

        //Compare the first letter according to alphabet indexes
        // echo 'john' > 'John';
        // echo 'john' > 'jan';


        // function formatProduct($product){
        //     echo "{$product['name']} cost P {$product['cost']} to buy <br>";
        // }
        // formatProduct(['name'=>'Apple','cost'=>150]);
    ?>
    <div>
          <!-- <?php //foreach($blog as $item){?>
                <h3><?php //echo $item['author'];?></h3>
                <p><?php //echo $item['content'];?></p>
                <span><?php// echo $item['likes'];?></span>
            <?php// }?> -->
    </div>
    <?php
    include('content.php')
    ?>
</body>
</html>