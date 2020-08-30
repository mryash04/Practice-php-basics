<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Headtail</title>
</head>
<body>
    <p>
        <?php
            $heads = 0;
            $tails = 0;

            for( $i = 0; $i <= 100; $i++ ){
                $randomNum = rand( 1, 2 );
                if( $randomNum == 1 ){
                    $heads++;
                }else if( $randomNum == 2 ){
                    $tails++;
                }
            }
               echo " The total heads is {$heads} and total tails is {$tails} <br> ";
               if( $heads > $tails ){
                   echo " the heads is {$heads} ";
               }else if( $tails > $heads ){
                   echo " the tails is {$tails} ";
               }else{
                   echo " draw ";
               }
        ?>
    </p>
</body>
</html>