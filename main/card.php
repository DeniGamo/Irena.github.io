<?php
session_start();
$name = $_GET['name'];
if(!isset($_SESSION['login'])){
  header("Location:../index.php?name=$name");
}
include_once("../config.php");
$getName = mysqli_query($connect,
"SELECT * FROM `iren` WHERE `name` = '$name'");
$fullName = mysqli_fetch_array($getName)['full_name'];
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Main</title>
  </head>
  <body id="start">
    <div class="jumbotron jumbotron-fluid">
        <div class="head container">
          <h1 class="display-4">I just want to say...</h1>
          <p class="lead">Use your headset/earphone and click this audio...</p>
          <audio controls>
    				<source src="../img/song.mp3" type="audio/mpeg">
    			</audio>
          <p class="lead">After click play, scroll down "slowly"...</p>
        </div>
    </div>
    <div style="height: 50vh;"></div>
  	<div class="again"><p>Oops, sorry my mistake, scroll again...</p></div>
  	<div class="again"></div>
  	<h1 id="stop" class="col-12 dissappear">STOP HERE....wait the content below to show up while you listening the song</h1>
    <div class="message-container container appear">
      <div class="row">
        <div class="col-lg-6 col-12">
          <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" data-interval="6000">
                  <img src="../img/<?php echo "$name" ?>/photo1.jpg" class="photo d-block w-100" alt="Demo">
              </div>
              <div class="carousel-item" data-interval="6000">
                <img src="../img/<?php echo "$name" ?>/photo2.jpg" class="photo d-block w-100" alt="Demo">
              </div>
              <div class="carousel-item" data-interval="6000">
                <img src="../img/<?php echo "$name" ?>/photo3.jpg" class="photo d-block w-100" alt="Demo">
              </div>
              <div class="carousel-item" data-interval="6000">
                <img src="../img/<?php echo "$name" ?>/photo4.jpg" class="photo d-block w-100" alt="Demo">
              </div>
              <div class="carousel-item" data-interval="6000">
                <img src="../img/<?php echo "$name" ?>/photo5.jpg" class="photo d-block w-100" alt="Demo">
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-12">
          <div class="messageContainer">
      			<!--<p><span class="highlight"><b>Have a Fabolous Birthday</b></span> to one of My Bestfriend<span class="highlight"> Name</span>, whose birthday I can remember without a Facebook reminder.Wish you all the best, have a good personalities as always and God Bless you always.Make your wish at content below this.</p>-->
      			<p>Have a <span class="special"><b>Fabolous Birthday</b></span> for <span class="special"><b><?php echo $fullName ?></b></span>, Hope your Birthday is special as you are. May all of your dreams come true. Hope you get success in your new age. Remember to keep <span class="special"><b>smiling in every situation</b></span>. And remember that God will always be with you. God Bless You</p><hr>
            <h4>Make your wish at content below this. </h4>
            <form id="wishes" class="col-12" method="post">
          		<textarea class="wishes-input col-lg-12" name="wishes" rows="4" cols="80" placeholder="Tulis apapun permohonan kakak, kalau udah ditulis dan lagunya udah selesai, klik tombol dibawah"></textarea> <br><br>
              <button class="btn btn-primary" type="submit" name="submit">Click</button>
          	</form>
      		</div>
        </div>
      </div>
    </div>
    <div class="footer col-lg-12 appear">
        <img class="col-lg-6 " src="../img/minion.png">
    </div>
    <?php
      if(isset($_POST['submit'])){
        $wish = trim($_POST['wishes']);
        if($wish == ""){
          echo "<span class='alert'>
            <p>Please Input your wishes...</p>
            <button onclick='hilang()'>OK</button>
          </span>
          <script>
            function hilang(){
              var el = document.getElementsByClassName('alert')[0];
              console.log('hilang');
              el.style = 'display:none;';
            }
          </script>
          <script>
            var appear = document.getElementsByClassName('appear')[0];
            var appear2 = document.getElementsByClassName('appear')[1];
            var dissappear = document.getElementsByClassName('dissappear')[0];

            appear.className -= 'appear';
            appear1.className -= 'appear';
            dissappear.className -= 'dissappear';
          </script>";
        }else{
          $inputWish = mysqli_query($connect,
          "UPDATE `iren` SET `wishes` = '$wish' WHERE `name` = '$name' ");
          if($inputWish){
            header("Location: congrats.php?name=$name");
          }
        }
      }
     ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>
