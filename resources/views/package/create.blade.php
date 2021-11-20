@extends('dashLayout.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        Package
                    </div>
                    <hr>
                    <form action="{{route('package.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-12">
                                        <br>

                                        <label for="" class="form-label">Name Package</label>
                                        <input type="text" name="judul" class="form-control">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="" class="form-label">Call Us</label>
                                        <input type="text" name="call" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <th>
                                                Konten
                                            </th>
                                            <th>Aksi</th>
                                        </tr>
                                        <tbody class="addMoreProduct">
                                        <tr>
                                            <td>
                                                <input type="text" name="nama_kemampuan[]"
                                                       class="form-control nama_kemampuan">
                                            </td>
                                            <td>
                                                <button class="btn btn-primary btn-block add-line add_more"
                                                        type="button"><i class="fas fa-plus"></i></button>
                                                <button class="btn btn-danger btn-block add-line delete " type="button">
                                                    <i class="fas fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{route('team.index')}}" class="btn btn-danger">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endsection
        @push('modals')
            <script>
                $('.add_more').on('click', function () {
                    var nama_kemampuan = $('.nama_kemampuan').html();
                    var numberofrow = ($('.addMoreProduct tr').length - 0) + 1;

                    var tr = '<tr>' +
                        // '<td>'+ numberofrow +'</td>'+
                        '<td><input  type="text" class="form-control nama_kemampuan" name="nama_kemampuan[]"></td>' +
                        '<td> ' +
                        '<button class="btn btn-danger btn-block add-line delete " type="button"><i class="fas fa-trash"></i></button>' +
                        '</td>';

                    $('.addMoreProduct').append(tr);

                    $('.okok').html(numberofrow)
                });

                $('.addMoreProduct').delegate('.delete', 'click', function () {
                    var tr = $(this).parent().parent();
                    $(this).parent().parent().remove();
                });

            </script>

    @endpush
