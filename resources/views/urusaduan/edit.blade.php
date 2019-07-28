@extends('layouts.app')

@section ('content')
<!-- create.blade.php -->
<div class="row justify-content-center">
	<div class="col-md-8 ">
	<h1>Tambah Maklumbalas Aduan</h1>
	<form method="post" 
		action="{{ action('UrusAduanController@update', $aduan['id']) }}">
		<input type="hidden" name="_method" value="put">

		@if (session('success')!=null)
			<div class="alert alert-success">
				{{ session('success')}}
			</div>
		@endif
		@csrf

		Nama <input type="text" name="nama"
		class="form-control"
		value="{{ $aduan['nama']}}"
		readonly="true">
		
		Tarikh <input type="date" name="tarikh"
		class="form-control"
		value="{{ $aduan['tarikh']}}"
		readonly="true">
		
		Butiran <input type="text" name="butiraduan"
		class="form-control"
		value="{{ $aduan['butiraduan']}}"
		readonly="true">
		
		Telefon <input type="text" name="telefon"
		class="form-control"
		value="{{ $aduan['telefon']}}"
		readonly="true">
		Tindakan 
		<textarea name="tindakan"
			class="form-control">{{ $aduan['tindakan']}}
		</textarea>
		<br>
		<input type="submit" value="Simpan Maklum balas"
			class="btn btn-primary">
		<br>
	</form>
</div>
</div>
@endsection