<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Temperature Conversion App</title>
</head>
<body>
    <header class="text-center text-uppercase mt-2">
        <h2> Temperature Conversion </h2>
    </header>
    <section class="mt-5">
        <div class="container-fluid d-flex justify-content-center align-items-center">
             <div class="row d-flex justify-content-center align-items-center">
         <div class="col-lg-6 col-md-6 col-12">
             <img src="php.jpg" alt="php" class="img-fluid" style="height:400px; width:400px;">
         </div>
         <div class="col-lg-6 col-md-6 col-12">
            <div class="card">
               <div class="card-body">
            <form method="POST">
               <div class="form-group">
                  <input type="text" name="num" placeholder="Enter your number" class="form-control">
               </div>
               <div class="form-group">
                  <label>Celcious</label>
                  <input type="radio" name="units">

                  <label>Frahnehite</label>
                  <input type="radio" name="units">
               </div>
               <div class="form-group">
                  <input type="submit" name="submit" class="btn btn-success" >
               </div>
            </form>
            </div>
                <div class="card-footer text-center text-uppercase bg-dark text-white">
                  <p>
                     <?php
                        if(isset($_POST["submit"])){
                           $num = $_POST["num"];
                           $temperature = $_POST["units"];

                           if( $temperature == "celcious" ){
                              $result = $num * 9 / 5 + 32;
                              echo " The conversion value of celcious to frahnehite is ". $result;
                           }else{
                              $result = ($num-32) * 5 / 9;
                              echo " The conversion value of frahneite to celcious is ". $result;
                           }
                        }
                     ?>
                  </p>
                </div>
            </div>
         </div>
             </div>
        </div>
    </section>
</body>
</html>