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
                    <form action="{{route('team.store')}}" method="post"  enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-12">
                                        <br>

                                        <label for="" class="form-label">Name</label>
                                        <input type="text" name="nama_team" class="form-control">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="" class="form-label">Job Desk</label>
                                        <input type="text" name="jobdes" class="form-control">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="" class="form-label">Perusahaan</label>
                                        <input type="text" name="perusahaan" class="form-control">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="" class="form-label">Deskripsi</label>
                                        <textarea type="text" name="deskripsi" class="form-control"></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="image"
                                                   onchange="showPreview(event);">
                                            <label class="custom-file-label">Upload file ktp</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <img id="file-ip-1-preview" width="250" height="200">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <br>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{route('team.index')}}"  class="btn btn-danger">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endsection
        @push('modals')
            <script>
                $('.add_more').on('click', function () {
                    var range_kemampuan = $('.range_kemampuan').html();
                    var nama_kemampuan = $('.nama_kemampuan').html();
                    var numberofrow = ($('.addMoreProduct tr').length - 0) + 1;

                    var tr = '<tr>' +
                        // '<td>'+ numberofrow +'</td>'+
                        '<td><input  type="text" class="form-control nama_kemampuan" name="nama_kemampuan[]"></td>' +
                        '<td><input  type="range" class="form-range range_kemampuan" name="range_kemampuan[]"></td>' +
                        '<td> <button class="btn btn-primary btn-block add-line add_more" type="button"><i class="fas fa-plus"></i></button>' +
                        '<button class="btn btn-danger btn-block add-line delete " type="button"><i class="fas fa-trash"></i></button>' +
                        '</td>';

                    $('.addMoreProduct').append(tr);

                    $('.okok').html(numberofrow)
                });

                $('.addMoreProduct').delegate('.delete', 'click', function () {
                    var tr = $(this).parent().parent();
                    $(this).parent().parent().remove();
                });

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
