@extends('layouts.app') 
@section('content') 

<div class="container bg-dark">
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
<ul class="navbar-nav">
	        <a class="nav-link" href="{{ url('/home') }}">Home</a>
            <a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
            </a>
            <a class="nav-link" href="{{ url('/artist') }}">Artist</a>
            <a class="nav-link" href="{{ url('/album') }}">Album</a>
            <a class="nav-link" href="{{ url('/track') }}">Track</a>
            <a class="nav-link" href="{{ url('/played') }}">Played</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
</ul>
</nav>
    <div class="row justify-content-center">
        <div class="col-md-8 bg-light">
<div class="container"> 
	<h3 align="center">Tambah Data Album</h3>
	<form action="{{ url('/album') }}" method="post"> 
		@csrf 
		<table> 
			<tr> 
			 	<td>Nama</td> 
			 	<td><input type="text" name="album_name"></td> 
			</tr> 
			<tr> 
			  	<td>ID Artist</td> 
			 	<td><input type="text" name="album_id_artist"></td>  
			</tr> 
			<tr> 
				<td></td> 
				<td><input type="submit" value="SIMPAN"></td> 
			</tr>  
		</table>  
	</form>  
</div>  
@endsection