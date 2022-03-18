@extends('layouts.main')
@section('main')

<div class="content-container">
    <header id="awards">
        <h1 class="center-text">Daftar Supplier</h1>
        <h2 class="center-text">Di bawah ini merupakan Daftar Supplier dari Perusahaan Beauty Shop</h2>
    </header>
    
    <div id="templatemo_timeline" class="content">
        <div class="container-fluid">
            @foreach($daftar as $d)
            <div class="time_line_wap left_timeline">		            
                <div class="time_line_paragraph">
                    <div class="time_line_caption left">Supplier {{$d -> id}}</div>			            	
                    <div class="time_line_icon right"><i class="fa fa-gift"></i></div>			            	
                    <h1>{{$d -> namaSupplier}}</h1>
                    <p>{{$d -> produk}}</p>	            	
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div> <!-- /.content-container -->		

@endsection