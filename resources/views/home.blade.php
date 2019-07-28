@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (Auth::user()->userlevel=='Admin')
                        Selamat datang admin 
                        {{ Auth::user()->name }} 

                        <br>Menu Admin<br>
                        <a href="{{ url('urusaduan') }}">Senarai Aduan</a>
                    @elseif (Auth::user()->userlevel=='Awam')
                        Selamat datang Awam
                        {{ Auth::user()->name }}

                        <br>Menu Aduan<br>
                        <br>
                        <a href="{{ url('aduan/create') }}">Tambah aduan</a>
                        <br>
                        <a href="{{ url('aduan') }}">Lihat maklum balas</a>

                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
