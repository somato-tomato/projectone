@extends('dashLayout.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        clientlogo
                    </div>
                    <hr>
                    <form action="{{route('clientlogo.store')}}" method="post" enctype="multipart/form-data">
                        @csrf

                                <div class="row">
                                    <div class="col-md-10"style="margin-top: 20px">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="foto"
                                                   onchange="showPreview(event);">
                                            <label class="custom-file-label"></label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <img id="file-ip-1-preview" width="250" height="200">
                                    </div>
                        </div>
                        <br>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{route('clientlogo.index')}}"  class="btn btn-danger">Kembali</a>
                        </div>
                    </form>
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


            </script>





    @endpush
