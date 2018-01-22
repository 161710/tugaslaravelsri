@extends('layouts.master')
@extends('layouts.app')
@section('home1')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body background="gambar/i.jpg">
<center>

<?php
$image=glob("gambar/iss.jpg");
for($i=0;$i<count($image);$i++)
{
	$single_image = $image[$i];
?>
	<img src="<?php echo $single_image;?>" width="360" heigth="260"/?>
<?php
}
	?>
	</center>

<center><h1><font color="black"> Welcome At My Web </font></h1></center>
</body>
</html>
@endsection