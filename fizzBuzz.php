<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FizzBuzz</title>
</head>
<body>
<p>
<?php
for( $i = 1; $i <= 100; $i++ ){
    if( ($i%3 == 0) && ($i%5 == 0) ){
        echo " FIZZ BUZZ </br> ";
    }elseif( $i%3 == 0 ){
        echo " FIZZ </br> ";
    }elseif( $i%5 == 0 ){
        echo " BUZZ </br> ";
    }else{
        echo  $i. "<br>";
    }
}
?>
</p>

</body>
</html>