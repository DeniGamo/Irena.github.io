<?php
session_start();
$name = $_GET['name'];
if(!isset($_SESSION['login'])){
  header("Location:../index.php?name=$name");
}
include_once("../config.php");


 ?>

<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<title>End</title>
</head>
<body class="end">
	<div class="col-12">
  	<div class="row">
	    <div class="col-12">
				<h1 class="text highlight">Untuk Kak Iren</h1>
        <p>Sebelum baca pesan dibawah sambil puter lagu ini dong kak biar gak bosen hehehe...</p>
        <audio controls id="song">
          <source src="../img/song2.mp3" type="audio/mpeg">
        </audio>
        <p>Hai kak Iren, sekali lagi selamat ulang tahun ya, aku khusus buatin semua ini untuk kakak, selain itu ada yang mau aku sampaiin kak. Beberapa hari ini aku sering chat kakak karna sebenernya aku suka sama kakak, waktu pertama kali aku lihat IG kakak dan tahu kalau ternyata kita seiman jarang2 aku dapet kenalan seiman kak, dan entah kenapa aku seneng kak, udah lama aku gak merasakan hal kayak gini. Mungkin bagi kakak yang aku lakuin ini masih kekanak2an hehehe... tapi ya beginilah aku kak. Aku gak tahu kak Iren udah ada yang punya atau belom, aku juga tahu kalau umurku 3 tahun lebih muda dari kakak, aku tahu aku blom punya apa2 kak, tapi aku berani ngungkapin perasaanku karena aku gak mau melewatkan kesempatan buat ngungkapin perasaanku ke kakak karena bisa aja ternyata aku punya kesempatan tapi udah keduluan orang lain. Aku gak memaksa kakak menjawab iya atau nggak buat jadi pacarku, aku tahu ini terlalu cepet... aku hanya berharap kakak mau ngasih kesempatan ke aku buat saling mengenal lebih jauh lagi setelah itu kalau kakak mau kita bisa menjalin hubungan bersama kak. </p><hr>
        <h4>Silahkan klik salah satu tombol dibawah apakah kakak mau ngasih kesempatan untuk aku atau tidak kak?</h4>
	    </div>
    </div>
    <button onclick="accept()" class="btn btn-primary col-5" type="button" name="yes">Ya</button>
			<button onclick="denied()" class="btn btn-danger col-5" type="button" name="no">Tidak</button>
	</div>
  <div id="answer">
    <span id="yes" class='alert hide'>
      <p>Beneran kak? aku diterima? :) kalau iya chat aku kak, ini nomerku 085740009659</p>
      <a href="tel:085740009659">
        <button onclick='hilang()'>OK</button>
      </a>
    </span>
    <span  id="no" class='alert hide'>
      <p>Yahhh gak ada kesempatan buat aku ya kak? Oke kak gak apa :), tapi boleh dong kak kasih alasannya buat instropeksi diriku sendiri kak. Chat ke nomer ini ya kak 085740009659</p>
      <a href="tel:085740009659">
        <button onclick='hilang()'>OK</button>
      </a>
    </span>
  </div>
	<div class="end-footer">
		<p>All of this pages was made by &copy;<span>Deni</span>Gamo</p>
	</div>
  <script>
  function accept(){
    var el = document.getElementById('yes');
    el.className = "alert";
  }
  function denied(){
    var el = document.getElementById('no');
    el.className = "alert";
  }
  function hilang(){
    var el = document.getElementsByClassName('alert')[1];
    console.log('hilang');
    el.style = 'display:none;';
  }
  </script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>
