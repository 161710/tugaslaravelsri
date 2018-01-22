@extends('layouts.master6')
@extends('layouts.app')
@section('free')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">My Family. <span class="text-muted">Bapak, Mamah, teteh.</span></h2>
          <p class="lead"> Keluargaku yang sangat harmonis, akupun begitu bahagia dan bersyukur bisa memiliki mereka semua seutuhnya, semoga keluargaku dapat sehat selalu, di panjangkan umurnya, dan selamat dunia akherat, Amin. </p>
        </div>
        <div class="col-md-5">
          <?php
$image=glob("gambar/kl.jpg");
for($i=0;$i<count($image);$i++)	
{
	$single_image = $image[$i];
?>
	<img src="<?php echo $single_image;?>" width="360" heigth="260"/?>
	<?php
}
	?>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">My Boy. <span class="text-muted">Gilang Syam Triawan.</span></h2>
          <p class="lead"> Dia adalah orang yang benar-benar sangat perhatian dan pengertian padaku, dan selalu menjadi penyemangatku selain keluargaku, walau hubungan kita baru satu tahun, tapi semoga kita dapat langgeng terus dan lancar terus untuk selamanya, Amin. </p>
        </div>
        <div class="col-md-5 col-md-pull-7">
           <?php
$gg=glob("gambar/mb.jpg");
for($i=0;$i<count($gg);$i++)	
{
	$double = $gg[$i];
?>
	<img src="<?php echo $double;?>" width="360" heigth="260"/?>
	<?php
}
	?>        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">My Friends. <span class="text-muted">Annisa, Nenden, Siti</span></h2>
          <p class="lead"> Mereka adalah teman yang sangat baik untukku, walau kadang sangat nyebelin sekali dan kadang bikin kesel, tapi aku tidak akan membencinya, karna bagaimanapun mereka adalah sahabatku, terimakasih kawan, jadilah selalu teman yang baik hati dan solideritas. </p>
        </div>
        <div class="col-md-5">
            <?php
$ww=glob("gambar/tm.jpg");
for($i=0;$i<count($ww);$i++)	
{
	$ampun = $ww[$i];
?>
	<img src="<?php echo $ampun;?>" width="360" heigth="260"/?>
	<?php
}
	?>
        </div>
      </div>

      <hr class="featurette-divider">

</body>
</html>
@endsection