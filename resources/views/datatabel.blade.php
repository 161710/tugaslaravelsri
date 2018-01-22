@extends('layouts.master3')
@extends('layouts.app')
@section('datatabel')
<!DOCTYPE html>
<html>
<head>

	<title></title>
</head>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-warning">

<body background="gambar/anime.png">

      <div class="page-header">
        <center><h1>Data Table</h1></center>
      </div>
      <div class="row">
        <div class="col-md-6">
          <table class="table table-bordered">
            <thead>
<tr>
              <tr>
              <center>
                <th>NIS</th>
                <th>Nama</th>
                <th>Tempat lahir</th>
                <th>Tanggal lahir</th>
                <th>Alamat</th>
                <th>Cita-Cita</th>
                <th>Hobi</th>
                <th>Photos</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>140401</td>
                <td>Sri Mukti Rahayu</td>
                <td>Bandung</td>
                <td>2001-04-14</td>
                <td>Kp.Coblong</td>
                <td>Designer</td>
                <td>Dance and Jaipong</td>
                <td><?php
$image=glob("gambar/in.jpg");
for($i=0;$i<count($image);$i++)
{
	$single_image = $image[$i];
?>
	<img src="<?php echo $single_image;?>" width="100" heigth="100"/?>
<?php
}
	?>
	</td>
              </tr>
              <tr>
                <td>170201</td>
                <td>Susi Febriyani</td>
                <td>Bandung</td>
                <td>2002-02-27</td>
                <td>Kp.Cendo</td>
                <td>Guru B.Inggris</td>
                <td>Nyanyi and Nari</td>
                <td><?php
$image=glob("gambar/is.jpg");
for($i=0;$i<count($image);$i++)
{
	$single_image = $image[$i];
?>
	<img src="<?php echo $single_image;?>" width="100" heigth="100"/?>
<?php
}
	?>
	</center>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      </div>
      </div>
</div>
</div>
</body>
</html>
@endsection