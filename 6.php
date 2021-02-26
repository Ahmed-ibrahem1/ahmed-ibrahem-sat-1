<?php 
$breakLine = "<br>";
$HR = "<hr>";
echo "write a script that displays data in bootstrap cards. $breakLine $HR";


$arr =
    [
        [
          'name' => 'ahmed hamdy',
           'job' => 'front-end',
          'experience' => 3
         ],
      
         [
             'name' => 'mohammed shaker',
             'job' => 'back-end',
             'experience' => 2
         ],
      
         [
             'name' => 'ali hasan',
             'job' => 'full-stack',
             'experience' => 4
         ],
    ];
     


?>

<html>
    <head>
    <title>Emp Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    </head>
        <body>
            <h1>Emp Data</h1> 

            <div class="container">
               <div class="row">

               <?php 
                 foreach($arr as $kay => $emp){
                ?>

                 <div class="col-lg-4">

                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $emp['name']; ?></h5>
                            <h6 class="card-subtitle mb-2 text-muted"><?php echo $emp['job']; ?></h6>
                            <p class="card-text">Experience Deg : <?php echo $emp['experience']; ?></p>
                        </div>
                    </div>

                 </div>

                <?php } ?>

               </div>
            </div>



            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
        </body>
</html>
