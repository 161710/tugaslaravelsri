@extends('layouts.app')

@section('content')
<body background="gambar/inuyasha.jpg"></body>
<font color="Blue">  
                <ul class="nav nav-pills nav-stacked">
  <li role="presentation"><a href="halaman"><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-home">Menu Utama</span></button></a></li>
  <li role="presentation"><a href="halaman1"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-picture">Gallery</span></button></a></li>
  <li role="presentation"><a href="halaman2"><button type="button" class="btn btn-success">Data Table</button></a></li>
  <li role="presentation"><a href="halaman3"><button type="button" class="btn btn-info">Inspirasi</button></a></li>
  <li role="presentation"><a href="halaman4"><button type="button" class="btn btn-warning">Paragraph</button></a></li>
  <li role="presentation"><a href="halaman5"><button type="button" class="btn btn-danger">Free</button></a></li>
 
          </ul> 
      
     </font>

@endsection
