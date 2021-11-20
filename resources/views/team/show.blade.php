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
                                                            <li class="breadcrumb-item"><a href="{{route('team.index')}}">Team</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Team Lihat</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="card-title">
                        Team
                    </div>
                    <hr>
                    <div class="row gutters-sm">
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex flex-column align-items-center text-center">
                                        <img src="{{ asset('storage/' . ($file_foto[0] ?? '')) }}" alt="Admin" class="rounded-circle" width="150" height="150">
                                        <div class="mt-3">
                                            <h4>{{$team->nama_team}}</h4>
                                            <p class="text-secondary mb-1">{{$team->jobdes}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-8">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Full Name</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            {{$team->nama_team}}
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Job Desk</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            {{$team->jobdes}}
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Perusahaan</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            {{$team->perusahaan}}
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">deskripsi</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                           {{$team->deskripsi}}
                                        </div>
                                    </div>
                                    <hr>
                                </div>

                            </div>

                        </div>
                        <div class="col-md-12">
                        <a href="{{route('team.index')}}" class="btn btn-danger">Kembali</a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        @endsection

