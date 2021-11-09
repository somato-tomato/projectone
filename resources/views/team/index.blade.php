@extends('dashLayout.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        Team
                    </div>
                    <hr>
                    <div class="">
                        <a href="{{route('team.create')}}" class="btn btn-primary">Buat Baru Team</a>
                    </div>
                    <br>
                    <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jobdes</th>
                            <th>Perusahaan</th>
                            <th>deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                        @php $no=1;@endphp
                        @foreach($team as $teams)

                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$teams->nama_team}}</td>
                                <td>{{$teams->jobdes}}</td>
                                <td>{{$teams->perusahaan}}</td>
                                <td>{{$teams->deskripsi}}</td>
                                <td>Lihat</td>
                            </tr>
                        @endforeach
                    </table>
                    </div>
                    {{ $team->links() }}
                </div>

            </div>

        </div>
        @endsection
