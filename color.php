<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>color</title>
<style>
   *{
       margin:0;
       padding:0;
   }
   form{
       display:flex;
       flex-direction:column;
       justify-content:center;
       align-items:center;
   }
   label{
       margin-top:15px;
   }
   input{
       display:inline-block;
       width:20%;
       margin-top:20px;
       padding:5px;
   }
   p{
       display:flex;
       justify-content:center;
       align-items:center;
       margin-top:5px;
       font-size:20px;
   }
</style>
</head>
<body>
<form method="POST">
        <label>Enter Your Favouriate Color</label>
        <input type="text" name="color"> <br>
        <input type="submit" name="submit">
</form>
<p>
        <?php
              if(isset($_POST['submit'])){
                  $color = $_POST['color'];
                  switch( $color ){
                      case 'green': echo "Green is your favouriate color";
                      break;
                      case 'red': echo "Red is your favouriate color";
                      break;
                      case 'blue': echo "Blue is your favouriate color";
                      break;
                      case 'yellow': echo "Yellow is your favouriate color";
                      break;
                      default:
                      echo "Sorry i do not able to identify your favouriate color";
                  }
              }
        ?>
</p>
</body>
</html>