@extends('dashLayout.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div style="float: right">
                        <nav aria-label="breadcrumb" class="main-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Home</a></li>
                                                            <li class="breadcrumb-item"><a href="{{route('portofolio.index')}}">Portofolio</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Portofolio Lihat</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="card-title">
                        Portofolio
                    </div>
                    <hr>
                    <div style="align-content: center">
                    <div class="row gutters-sm ">
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex flex-column align-items-center text-center">
                                        <img src="{{ asset('storage/' . ($file_foto[0] ?? '')) }}" alt="Admin" class="rounded-circle" width="150" height="150">
                                        <div class="mt-3">
                                            <h4>{{$team->nama_portofolio}}</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        </div>

                        <div class="col-md-12">
                        <a href="{{route('portofolio.index')}}" class="btn btn-danger">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection

