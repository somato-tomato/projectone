@extends('dashLayout.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        Portofolio
                    </div>
                    <hr>
                                    <div class="">
                                        <a href="{{route('portofolio.create')}}" class="btn btn-primary">Buat Baru Portofolio</a>
                                    </div>
                                    <br>
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Deskripsi</th>
                                                <th>Aksi</th>
                                            </tr>
                                            @php $no=1;@endphp
                                            @foreach($portofolio as $teams)
                                                <tr>
                                                    <td>{{$no++}}</td>
                                                    <td>{{$teams->nama_portofolio}}</td>
                                                    <td>{{$teams->deskripsi}}</td>
                                                    <td>
                                                        <form method="post" class="delete_form" action="{{ route('portofolio.destroy',$teams->id) }}" id="studentForm_{{$teams->id}}">
                                                            <a href="{{route('portofolio.show',$teams->id)}}" class="btn btn-info"><i class="fa fa-eye"></i></a>
                                                            {{ method_field('delete') }}
                                                            {{  csrf_field() }}
                                                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                    {{ $portofolio->links() }}
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection
        @push('modals')
            <script>
                function showPreview(event) {
                    if (event.target.files.length > 0) {
                        var src = URL.createObjectURL(event.target.files[0]);
                        var preview = document.getElementById("file-ip-1-preview");
                        preview.src = src;
                        preview.style.display = "block";
                    }
                }

                $('.delete_form').on('submit', function(){
                    if(confirm("Are you sure you want to delete it?"))
                    {
                        return true;
                    }
                    else
                    {
                        return false;
                    }
                });
            </script>





    @endpush
