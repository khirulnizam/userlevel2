@extends('layouts.app')

@section ('content')
<!-- create.blade.php -->
<div class="row justify-content-center">
	<div class="col-md-8 ">
	<h1>Borang Aduan</h1>
	<form method="post" 
		action="{{ url('aduan') }}">
		@if (session('success')!=null)
			<div class="alert alert-success">
				{{ session('success')}}
			</div>
		@endif
		@csrf

		Nama <input type="text" name="nama"
			class="form-control">
		
		Tarikh <input type="date" name="tarikh"
			class="form-control">
		
		Butiran <input type="text" name="butiraduan"
			class="form-control">
		
		Telefon <input type="text" name="telefon"
			class="form-control">
		<br>
		<input type="submit" value="Simpan Aduan"
			class="btn btn-primary">
		<br>
	</form>
</div>
</div>
@endsection