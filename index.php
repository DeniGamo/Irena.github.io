<?php
  session_start();
  if(isset($_SESSION['login'])){
    $name = $_GET['name'];
    header("Location: main/card.php?name=$name");
  }
 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/1style.css">
    <title>Login</title>
  </head>
  <body>
	<div class="login container col-lg-4 col-10 col-sm-6">
		<h2>Please Fill Form Below</h2>
		<form class="" method="post">
			<div class="form-group">
				<label for="userName">Username/Fullname</label>
				<input class="col-lg-12 form-control" type="text" name="userName" placeholder="Input Name">
			</div>
			<div class="form-group">
				<label for="date">Password</label>
				<input class="date col-lg-12 form-control" type="password" name="date" placeholder="Example : 02-29">
			</div>
			<button class="btn btn-primary col-lg-4 col-4" type="submit" name="submit">SUBMIT</button>
			<button class="btn btn-danger col-lg-4 col-4" type="reset">RESET</button>
		</form>
	</div>





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>
<?php
  include("config.php");
  if(isset($_POST['submit'])){
    $name = trim($_POST['userName']);
    $date = $_POST['date'];
    $currentDate = date("m-d");
//Check isi form
    if($name == '' || $date == ''){
      echo "<span class='alert'>
        <p>Isi semua form yang tersedia!!!</p>
        <button onclick='hilang()'>OK</button>
      </span>
      <script>
        function hilang(){
          var el = document.getElementsByClassName('alert')[0];
          console.log('hilang');
          el.style = 'display:none;';
        }
      </script>";
      exit;
    }elseif($name == 'demo' && $date == 'demo'){
      $_SESSION['login'] = true;
      header("Location: main/card.php?name=demo");
    }elseif($name == 'IrenNancy' && $date == '12-13'){
      $_SESSION['login'] = true;
      header("Location: main/card.php?name=$name");
    }
  }
 ?>
