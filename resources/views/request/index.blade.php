@extends('dashLayout.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        Request
                    </div>
                    <hr>

                    <br>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tr>
                                <th>No</th>
                                <th>Nama Depan</th>
                                <th>Nama Belakang</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Pesan</th>
                                <th>Aksi</th>
                            </tr>
                            @php $no=1;@endphp
                            @foreach($ok as $teams)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$teams->first}}</td>
                                    <td>{{$teams->last}}</td>
                                    <td>{{$teams->email}}</td>
                                    <td>{{$teams->phone}}</td>
                                    <td>{{$teams->message}}</td>
                                    <td>
                                        <form method="post" class="delete_form" action="{{ route('request.destroy',$teams->id) }}" id="studentForm_{{$teams->id}}">
                                            {{ method_field('delete') }}
                                            {{  csrf_field() }}
                                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>

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
