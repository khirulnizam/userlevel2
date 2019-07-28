@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Senarai Aduan</div>

                <div class="card-body">
                    <table class="table table-striped">
					<thead>
					  <tr>
						<th>ID</th>
						<th>Nama Pengadu</th>
						<th>Butir Aduan</th>
						<th>Action</th>
					  </tr>
					</thead>
					<tbody>
					  @foreach($aduans as $aduan)
					  <tr>
						<td>{{$aduan['id']}}</td>
						<td>{{$aduan['nama']}}</td>
						<td>{{$aduan['butiraduan']}}</td>
						<td><a href="{{ route('urusaduan.edit',$aduan['id']) }}" class="btn btn-success"> Maklumbalas</a>
						</td>
					  </tr>
					  @endforeach
					<tbody>
					</table>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection