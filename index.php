<?php 
    if(isset($_POST['submit'])) {
      $name = "";
      $error = "";
      $email = "";
      $message = "";

      if($_POST['name'] == ""){
        $error = "Fill your Name <br>";
      } else {
        $name = $_POST['name'];
      }

      if($_POST['email'] == ""){
        $error .=  "Enter Your Email <br>";
      } else {
        $email = $_POST['email'];
      }

      if($_POST['message'] ==""){
        $error .= " Enter Your message <br>";
      } else {
        $message = $_POST['message'];
      }

      if($error == ""){
        $headers = "From: '$email'";
        mail("tokasjayant@gmail.com", "Mail from Resume", $message, $headers);
        echo ' Mail Sent';
        echo "<a href ='index.html'>Go back</a> ";
      } else {
        echo $error;
        echo "<a href ='index.html'>Go back</a> ";
      }

    }

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  </body>
</html>