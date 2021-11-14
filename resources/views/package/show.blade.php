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
                                <li class="breadcrumb-item"><a href="{{route('package.index')}}">Package</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Package Lihat</li>
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
                                        <div class="mt-3">
                                            <h4>{{$group->judul[1][0]}}</h4>
                                            <p class="text-secondary mb-1">{{$group[1][0]->call}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mt-3">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">assignment&nbsp;</i>Project Status</h6>
                                        @foreach($group as $teams)
                                            <small>{{$teams->content}}</small>

                                        @endforeach
                                    </div>
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

