@extends('dashLayout.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        Experience
                    </div>
                    <hr>
                    <form action="{{route('experience.update',1)}}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <br>
                                <label for="" class="form-label">value 1</label>
                                <input type="number" name="pelanggan" value="{{$ok->pelanggan?? ''}}" class="form-control">
                            </div>
                            <br>
                            <div class="col-md-12">
                                <label for="" class="form-label">label 1</label>
                                <input type="text" name="pelanggan_puas" class="form-control" value="{{$ok->pelanggan_puas ?? ''}}"></input>
                            </div>
                            <div class="col-md-12">
                                <br>
                                <label for="" class="form-label">value 2</label>
                                <input type="number" name="konsultaso" value="{{$ok->konsultasi?? ''}}" class="form-control">
                            </div>
                            <br>
                            <div class="col-md-12">
                                <label for="" class="form-label">label 2</label>
                                <input type="text" name="konsultasi_selesai" class="form-control" value="{{$ok->konsultasi_selesai ?? ''}}"></input>
                            </div>
                            <div class="col-md-12">
                                <br>
                                <label for="" class="form-label">value 3</label>
                                <input type="number" name="kegiatan" value="{{$ok->kegiatan?? ''}}" class="form-control">
                            </div>
                            <br>
                            <div class="col-md-12">
                                <label for="" class="form-label">label 3</label>
                                <input type="text" name="kegiatan_pelatihan" class="form-control" value="{{$ok->kegiatan_pelatihan?? ''}}"></input>
                            </div>
                        </div>
                        <br>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endsection
