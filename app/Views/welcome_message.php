
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
=======
>>>>>>> 52a24081f0d4275cdc3dd274481bd895daf8c3df
    <title>Document</title>
</head>
<body>
<?php 
echo "Hello World <br>";
?>

<<<<<<< HEAD
  <!-- include navbar -->
   <?= view('layout/navbar') ?>
   <h2 class="d-flex justify-content-center my-5">
    Welcome to to do list of yasir sardar
   </h2>
   <?php
/**
 * @var CodeIgniter\View\View $this
*/
?>
   <main>
        <?= $this->renderSection('content') ?>
        
    </main>

     <!-- include footer -->
     <?= view('layout/footer') ?>

=======
<h2>
<?php 
function GreetingMessage(){
    echo "Assalam o alaikum function";
}
GreetingMessage();
?>
</h2>

<?php 
$cars = array('BMW', 'mercedes', 'toyota');

foreach($cars as $car){
    echo "$car<br>";
}
?>
>>>>>>> 52a24081f0d4275cdc3dd274481bd895daf8c3df

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>