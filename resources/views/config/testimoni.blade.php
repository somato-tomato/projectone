@extends('dashLayout.app')

@section('content')
    <div class="row">
        <div>
            <button type="button" class="btn btn-outline-primary btn-lg" data-bs-toggle="modal" data-bs-target="#addTesti">
                Tambah Testimoni
            </button>
        </div>
    </div>
    <div class="row mt-4 text-center">
        @foreach($testi as $t)
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <img style="width: 75px" class="img-thumbnail" src="{{ asset('images_site/'.$t->photo) }}" alt="a">
                        <h5 class="mt-2">{{ $t->name }}</h5>
                        <p>{{ $t->occupation }}</p>
                        <hr/>
                        {{ $t->testimony }}
                        <br/>
                        <td class="text-center">
                            <a href='javascript:void(0);' class="btn btn-outline-danger mt-3" data-id='{{$t->id}}' onclick='deleteConfirmation({{$t->id}})'>Hapus</a>
                        </td>
                    </div>
                </div>
            </div>
        @endforeach
        {{ $testi->links() }}
    </div>

    <!-- Modal Tambah Tesimoni -->
    <div class="modal fade" id="addTesti" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Testimoni</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('site.at') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name" class="form-label">Nama pemberi Testimoni</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name">
                                    @error('name')
                                    <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="occupation" class="form-label">Pekerjaan</label>
                                    <input class="form-control @error('siteLogo') is-invalid @enderror" type="text" name="occupation" id="occupation">
                                    @error('occupation')
                                    <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="photo" class="form-label">Photo</label>
                                    <input class="form-control @error('photo') is-invalid @enderror" type="file" name="photo" id="photo">
                                    @error('photo')
                                    <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="testimony" class="form-label">Testimoni</label>
                            <textarea class="form-control @error('testimony') is-invalid @enderror" type="text" name="testimony" id="testimony"></textarea>
                            @error('testimony')
                            <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Perbarui</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('modals')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script>
        function deleteConfirmation(x) {
            Swal.fire({
                title: "Delete?",
                text: "Please ensure and then confirm!",
                // type: "warning",
                showCancelButton: !0,
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel!",
                reverseButtons: !0
            }).then(function (e) {
                if (e.value === true) {
                    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                    $.ajax({
                        method: 'DELETE',
                        url: "{{ route('site.dt','') }}"+'/'+x,
                        data: {_token: CSRF_TOKEN},
                        dataType: 'JSON',
                        success: function (response)
                        {
                            if (response.success) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Berhasil di delete'
                                }).then(function () {
                                    location.reload();
                                })
                            } else {
                                Swal.fire({
                                    icon: 'warning',
                                    title: 'a'
                                })
                            }
                        }
                    });

                } else {
                    e.dismiss;
                }
            }, function (dismiss) {
                return false;
            })
        }
    </script>
@endpush
