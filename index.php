<?php 

require_once __DIR__ . '/partials/vars.php';
require_once __DIR__ . '/partials/functions.php';

/*if (isset($password_length)) {
  var_dump($password_length, 'é valido ');
}
else{
  $password_length = 0;
  var_dump('non é stato ancora inserito un numero');
}*/


//var_dump($numbers[55]);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap-utilities.min.css' integrity='sha512-DEGBrwaCF4lkKzMKNwt8Qe/V54bmJctk7I1HyfINGAIugDvsdBeuWzAWZmXAmm49P6EBfl/OeUM01U3r7cW4jg==' crossorigin='anonymous'/><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>
  <!-- // bootstrap -->
  <title>PHP Strong Password Generator</title>
</head>
<body>
  
<div class="container my-5">

  <form action="index.php" method='GET'>
    <label for="quantity">Scegli la lunghezza della password:</label>
    <input type="number" name='number' id="quantity" name="quantity" min="1" max="20">
    <button type="submit" class="btn btn-success ms-3">Submit</button>
  </form>

  <h1> <?php echo makePassword($letters,$numbers,$symbol,$upcase_letters,$password_length) ?></h1>
</div> 


</body>
</html>