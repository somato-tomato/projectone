@extends('dashLayout.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        client logo
                    </div>
                    <hr>
                                    <div class="">
                                        <a href="{{route('clientlogo.create')}}" class="btn btn-primary">Buat Baru clientlogo</a>
                                    </div>
                                    <br>
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <tr>
                                                <th>No</th>
                                                <th>image</th>
                                                <th>Hapus</th>
                                            </tr>
                                            @php $no=1;@endphp
                                            @foreach($ok as $teams)
                                                <tr>
                                                    <td>{{$no++}}</td>
                                                    <td> <img alt="" src="{{ asset('images_site/'.$teams->image)}}" class="equalheight" width="100" height="100">
                                                    </td>
                                                    <td>
                                                        <form method="post" class="delete_form" action="{{ route('clientlogo.destroy',$teams->id) }}" id="studentForm_{{$teams->id}}">
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
