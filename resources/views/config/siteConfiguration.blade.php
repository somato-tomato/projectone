@extends('dashLayout.app')

@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                @if ($siteConfig == null)
                    <form action="{{ route('site.usc') }}" method="post" enctype="multipart/form-data" autocomplete="off">
                        @csrf
                        <div class="mb-3">
                            <label for="siteName" class="form-label">Nama Situs</label>
                            <input type="text" class="form-control" id="siteName" aria-describedby="Nama Situs" name="siteName">
                        </div>
                        <div class="mb-3">
                            <label for="siteDescription" class="form-label">Deskripsi Situs</label>
                            <input type="text" class="form-control" id="siteDescription" aria-describedby="Deskripsi Situs" name="siteDescription">
                        </div>
                        <div class="mb-3">
                            <label for="siteLogo" class="form-label">Logo Situs</label>
                            <input class="form-control" type="file" name="siteLogo" id="photo">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                @else
                <div class="text-center">
                    <img class="mb-3" style="width: 50%" src="{{ asset('images_site/'.$siteConfig->siteLogo) }}" alt="site-logo">
                    <h4>Nama Situs</h4>
                    <p>{{ $siteConfig->siteName }}</p>
                    <hr/>
                    <h4>Deskripsi</h4>
                    <p>{{ $siteConfig->siteDescription }}</p>
                </div>
                @endif
            </div>
        </div>
        @if ($siteConfig == null)
        @else
        <div class="card">
            <div class="card-body">
                @if ($siteConfig->siteFavicon == null | $var_fav != $siteConfig->siteFavicon)
                    <form action="{{ route('site.uf') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                @else
                <div class="text-center">
                    <p>Favicon</p>
                    <img class="mb-3" src="{{ asset('images_site/'.$siteConfig->siteFavicon) }}" alt="site-logo">
                </div>
                @endif
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                @if ($siteConfig->alamat == null)
                    <form action="{{ route('site.usm') }}" method="post" autocomplete="off">
                        @csrf
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea type="text" class="form-control" id="alamat" aria-describedby="Nama Situs" name="alamat"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="telponSatu" class="form-label">Telepon Satu</label>
                            <input type="text" class="form-control" id="telponSatu" name="telponSatu">
                        </div>
                        <div class="mb-3">
                            <label for="telponDua" class="form-label">Telepon Dua</label>
                            <input type="text" class="form-control" id="telponDua" name="telponDua">
                        </div>
                        <div class="mb-3">
                            <label for="facebook" class="form-label">Facebook</label>
                            <input type="text" class="form-control" id="facebook" name="facebook">
                        </div>
                        <div class="mb-3">
                            <label for="twitter" class="form-label">Twitter</label>
                            <input type="text" class="form-control" id="twitter" name="twitter">
                        </div>
                        <div class="mb-3">
                            <label for="instagram" class="form-label">Instagram</label>
                            <input type="text" class="form-control" id="instagram" name="instagram">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                @else
                <div class="text-center">
                    <h4>Alamat</h4>
                    <p>{{ $siteConfig->alamat }}</p>
                    <hr/>
                    <h4>Kontak</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <p style="font-size: 15px"><span><i class="fas fa-mobile-alt"></i></span> +62-{{ $siteConfig->telponSatu }}</p>
                        </div>
                        @if($siteConfig->telponDua)
                        <div class="col-md-6">
                            <p style="font-size: 15px"><span><i class="fas fa-mobile-alt"></i></span> +62-{{ $siteConfig->telponDua }}</p>
                        </div>
                        @endif
                    </div>
                    <div class="row text-center">
                        @if($siteConfig->facebook)
                            <div class="col-md-4">
                                <a href="{{ $siteConfig->facebook }}" target="_blank"><i class="fab fa-facebook-square fa-3x"></i></a>
                            </div>
                        @endif
                        @if($siteConfig->twitter)
                            <div class="col-md-4">
                                <a href="{{ $siteConfig->twitter }}" target="_blank"><i class="fab fa-twitter fa-3x"></i></a>
                            </div>
                        @endif
                        @if($siteConfig->instagram)
                             <div class="col-md-4">
                                 <a href="{{ $siteConfig->instagram }}" target="_blank"><i class="fab fa-instagram fa-3x"></i></a>
                             </div>
                        @endif
                    </div>
                </div>
                @endif
            </div>
        </div>
        @endif
    </div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                Bagian Banner Video
            </div>
            <div class="card-body">
                @if($sectionVideo)
                    <div class="text-center">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="{{ asset('/videos_site/'.$sectionVideo->video) }}"></iframe>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p>Deskripsi 1</p>
                                <p><b>{{ $sectionVideo->description }}</b></p>
                            </div>
                            <div class="col-md-6">
                                <p>Deskripsi 2</p>
                                <p><b>{{ $sectionVideo->descriptionDua }}</b></p>
                            </div>
                        </div>
                        <button type="button" class="btn btn-lg btn-outline-primary mt-3" data-bs-toggle="modal" data-bs-target="#sectionVideo"
                                data-desc="{{ $sectionVideo->description }}"
                                data-descTwo="{{ $sectionVideo->descriptionDua }}"
                        >
                            Perbarui Video
                        </button>
                    </div>
                @else
                    <div class="text-center">
                        <button type="button" class="btn btn-outline-primary btn-lg mt-3" data-bs-toggle="modal" data-bs-target="#sectionVideo">
                            Tambah Video
                        </button>
                    </div>
                @endif
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                Bagian Fitur
            </div>
            <div class="card-body">
                <div class="text-center">
                    <button type="button" class="btn btn-outline-primary btn-lg mt-3" data-bs-toggle="modal" data-bs-target="#sectionFeature">
                        Tambah Fitur
                    </button>
                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($sectionFeature as $s)
                        <tr>
                            <td><img style="width: 100px; height: auto" src="{{ asset('images_site/'.$s->sectionImage) }}" class="img-thumbnail" alt="a"></td>
                            <td>{{ $s->sectionName }}</td>
                            <td>{{ $s->sectionTitle }}</td>
                            <td>
                                {{ $s->sectionDescription }}
                            </td>
                            <td>
                                x
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal Bagian Site Config -->
    <div class="modal fade" id="sectionVideo" data-bs-backdrop="static" tabindex="-1" aria-labelledby="sectionVideoLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Perbarui Konfigurasi Situs</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="fileUploadForm" action="{{ route('site.usv') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="video" class="form-label">Video</label>
                            <input class="form-control @error('video') is-invalid @enderror" type="file" name="video" id="video">
                            @error('video')
                            <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="description" class="form-label">Deskripsi Pertama</label>
                                    <input class="form-control @error('description') is-invalid @enderror" type="text" name="description" id="description">
                                    @error('description')
                                    <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="descriptionDua" class="form-label">Deskripsi Kedua</label>
                                    <input class="form-control @error('descriptionDua') is-invalid @enderror" type="text" name="descriptionDua" id="descriptionDua">
                                    @error('descriptionDua')
                                    <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
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

    <!-- Modal Bagian Site Config -->
    <div class="modal fade" id="sectionFeature" data-bs-backdrop="static" tabindex="-1" aria-labelledby="sectionFeatureLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="sectionFeatureLabel">Tambah Fitur</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="fileUploadForm" action="{{ route('site.sf') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="sectionImage" class="form-label">Image</label>
                            <input class="form-control @error('sectionImage') is-invalid @enderror" type="file" name="sectionImage" id="sectionImage">
                            @error('sectionImage')
                            <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="sectionName" class="form-label">Nama Bagian</label>
                                    <input class="form-control @error('sectionName') is-invalid @enderror" type="text" name="sectionName" id="sectionName">
                                    @error('sectionName')
                                    <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="sectionTitle" class="form-label">Judul Bagian</label>
                                    <input class="form-control @error('sectionTitle') is-invalid @enderror" type="text" name="sectionTitle" id="sectionTitle">
                                    @error('sectionTitle')
                                    <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sectionDescription" class="form-label">Deskripsi Bagian</label>
                            <textarea class="form-control @error('sectionDescription') is-invalid @enderror" type="text" name="sectionDescription" id="sectionDescription"></textarea>
                            @error('sectionDescription')
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

    <div class="modal fade" id="descModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="descModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <p class="desc"></p>
                </div>
            </div>
        </div>
    </div>


</div>
@endsection
@push('modals')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script>
        var sectionVideo = document.getElementById('sectionVideo')

        sectionVideo.addEventListener('show.bs.modal', function (event) {
            var button = event.relatedTarget
            var desc = button.getAttribute('data-desc')
            var descTwo = button.getAttribute('data-descTwo')
            var mdesc = sectionVideo.querySelector('.modal-body #description')
            var mdescTwo = sectionVideo.querySelector('.modal-body #descriptionDua')

            mdesc.value = desc
            mdescTwo.value = descTwo
        })
    </script>
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 2500,
            timerProgressBar: true,
        })

        $(function () {
            $(document).ready(function () {
                $('#fileUploadForm').ajaxForm({
                    beforeSend: function () {
                        var percentage = '0';
                    },
                    uploadProgress: function (event, position, total, percentComplete) {
                        var percentage = percentComplete;
                        $('.progress .progress-bar').css("width", percentage+'%', function() {
                            return $(this).attr("aria-valuenow", percentage) + "%";
                        })
                    },
                    complete: function (xhr) {
                        Toast.fire({
                            icon: 'success',
                            title: 'Signed in successfully'
                        })
                        setTimeout(function(){// wait for 5 secs(2)
                            location.reload(); // then reload the page.(3)
                        }, 2500);
                    }
                });
            });
        });
    </script>
@endpush
