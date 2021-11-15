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
                    <button type="button" class="btn btn-lg btn-outline-primary mt-3" data-bs-toggle="modal" data-bs-target="#siteConfig"
                            data-name="{{ $siteConfig->siteName }}"
                            data-deskripsi="{{ $siteConfig->siteDescription }}"
                    >
                        Perbarui Video
                    </button>
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
                            <button type="submit" class="btn btn-outline-primary btn-lg">Generate Favicon</button>
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
                            <label for="youtube" class="form-label">Youtube</label>
                            <input type="text" class="form-control" id="youtube" name="youtube">
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
                        @if($siteConfig->youtube)
                            <div class="col-md-4">
                                <a href="{{ $siteConfig->youtube }}" target="_blank"><i class="fab fa-youtube fa-3x"></i></a>
                            </div>
                        @endif
                        @if($siteConfig->instagram)
                             <div class="col-md-4">
                                 <a href="{{ $siteConfig->instagram }}" target="_blank"><i class="fab fa-instagram fa-3x"></i></a>
                             </div>
                        @endif
                    </div>
                    <button type="button" class="btn btn-lg btn-outline-primary mt-3" data-bs-toggle="modal" data-bs-target="#siteInfo"
                            data-alamat="{{ $siteConfig->alamat }}"
                            data-telponSatu="{{ $siteConfig->telponSatu }}"
                            data-telponDua="{{ $siteConfig->telponDua }}"
                            data-email="{{ $siteConfig->email }}"
                            data-facebook="{{ $siteConfig->facebook }}"
                            data-instagram="{{ $siteConfig->instagram }}"
                            data-youtube="{{ $siteConfig->youtube }}"
                    >
                        Perbarui Detail
                    </button>
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
                                {{ \Illuminate\Support\Str::limit($s->sectionDescription, '100', ' (...)') }}
                            </td>
                            <td class="text-center">
                                <a href='javascript:void(0);' style='color:red' data-id='{{$s->id}}' onclick='deleteConfirmation({{$s->id}})'><i class='far fa-times-circle'></i></a>
                                <a href='{{ url('/'.$s->buttonDestination) }}' target="_blank"><i class="far fa-eye"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                Bagian Proses
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Nomor Proses</th>
                        <th scope="col">Nama Proses</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($sectionProcess as $p)
                        <tr>
                            <td>{{ $p->number }}</td>
                            <td>{{ $p->processName }}</td>
                            <td>
                                {{ \Illuminate\Support\Str::limit($p->processDesc, '100', ' (...)') }}
                            </td>
                            <td>
                                <a data-bs-target="#processModal" data-bs-toggle="modal"
                                   href="#processModal"
                                   data-number="{{ $p->number }}"
                                   data-name="{{ $p->processName }}"
                                   data-desc="{{ $p->processDesc }}"
                                >
                                    <i class="far fa-edit"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal Bagian Site Config -->
    <div class="modal fade" id="siteConfig" data-bs-backdrop="static" tabindex="-1" aria-labelledby="siteConfigLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Perbarui Konfigurasi Situs</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="fileUploadForm" action="{{ route('site.usc') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="siteLogo" class="form-label">Logo Situs</label>
                            <input class="form-control @error('siteLogo') is-invalid @enderror" type="file" name="siteLogo" id="siteLogo">
                            @error('siteLogo')
                            <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="siteName" class="form-label">Nama Situs</label>
                            <input class="form-control @error('siteName') is-invalid @enderror" type="text" name="siteName" id="siteName">
                            @error('siteName')
                            <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="siteDescription" class="form-label">Deskripsi Situs</label>
                            <input class="form-control @error('siteDescription') is-invalid @enderror" type="text" name="siteDescription" id="siteDescription">
                            @error('siteDescription')
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

    <div class="modal fade" id="siteInfo" data-bs-backdrop="static" tabindex="-1" aria-labelledby="siteInfoLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Perbarui Konfigurasi Situs</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="fileUploadForm" action="{{ route('site.usm') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" id="alamat"></textarea>
                            @error('alamat')
                            <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="email" class="form-label">Email</label>
                                    <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" id="email">
                                    @error('alamat')
                                    <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="telponSatu" class="form-label">Telepon Satu</label>
                                    <input class="form-control @error('telponSatu') is-invalid @enderror" type="text" name="telponSatu" id="telponSatu">
                                    @error('telponSatu')
                                    <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="telponDua" class="form-label">Telpon Dua</label>
                                    <input class="form-control @error('telponDua') is-invalid @enderror" type="text" name="telponDua" id="telponDua">
                                    @error('telponDua')
                                    <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="facebook" class="form-label">Url Facebook</label>
                                    <input class="form-control @error('facebook') is-invalid @enderror" type="text" name="facebook" id="facebook">
                                    @error('facebook')
                                    <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="instagram" class="form-label">Url Instagram</label>
                                    <input class="form-control @error('instagram') is-invalid @enderror" type="text" name="instagram" id="instagram">
                                    @error('instagram')
                                    <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="youtube" class="form-label">Url youtube</label>
                                    <input class="form-control @error('youtube') is-invalid @enderror" type="text" name="youtube" id="youtube">
                                    @error('youtube')
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
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="buttonName" class="form-label">Nama Tombol</label>
                                        <input class="form-control @error('buttonName') is-invalid @enderror" type="text" name="buttonName" id="buttonName">
                                        @error('buttonName')
                                        <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="buttonDestination" class="form-label">Tujuan Tombol</label>
                                        <select class="form-select" type="text" name="buttonDestination" id="buttonDestination">
                                            <option value="#ourhome">Home</option>
                                            <option value="#aboutus">Features</option>
                                            <option value="#our-team">Team</option>
                                            <option value="#portofolio-xe">Product</option>
                                            <option value="#out-pricing">Pricing</option>
                                            <option value="#our-testimonial">Testimony</option>
                                            <option value="#our-blog">Blog</option>
                                            <option value="#contactus">Contact</option>
                                        </select>
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

    <div class="modal fade" id="processModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="processModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="sectionFeatureLabel">Tambah Fitur</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form id="fileUploadForm" action="{{ route('site.up') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <input hidden name="number" id="number">
                            <div class="form-group">
                                <label for="processName" class="form-label">Nama Proses</label>
                                <input class="form-control @error('processName') is-invalid @enderror" type="text" name="processName" id="processName">
                                @error('processName')
                                <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="processDesc" class="form-label">Deskripsi Proses</label>
                                <textarea class="form-control @error('processDesc') is-invalid @enderror" type="text" name="processDesc" id="processDesc"></textarea>
                                @error('processDesc')
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

{{--    <div class="modal fade" id="menuFeature" data-bs-backdrop="static" tabindex="-1" aria-labelledby="menuFeatureLabel" aria-hidden="true">--}}
{{--        <div class="modal-dialog modal-lg">--}}
{{--            <div class="modal-content">--}}
{{--                <div class="modal-header">--}}
{{--                    <h5 class="modal-title" id="exampleModalLabel">Perbarui Konfigurasi Situs</h5>--}}
{{--                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}
{{--                </div>--}}
{{--                <form id="fileUploadForm" action="{{ route('site.usv') }}" method="post" enctype="multipart/form-data">--}}
{{--                    @csrf--}}
{{--                    <div class="modal-body">--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="sectionImage" class="form-label">Image</label>--}}
{{--                            <input class="form-control @error('sectionImage') is-invalid @enderror" type="file" name="sectionImage" id="sectionImage">--}}
{{--                            @error('sectionImage')--}}
{{--                            <span class="invalid-feedback">--}}
{{--                                            <strong>{{ $message }}</strong>--}}
{{--                                        </span>--}}
{{--                            @enderror--}}
{{--                        </div>--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-6">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="sectionName" class="form-label">Nama Seksi</label>--}}
{{--                                    <input class="form-control @error('sectionName') is-invalid @enderror" type="text" name="sectionName" id="sectionName">--}}
{{--                                    @error('sectionName')--}}
{{--                                    <span class="invalid-feedback">--}}
{{--                                            <strong>{{ $message }}</strong>--}}
{{--                                        </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-6">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="sectionTitle" class="form-label">Judul Seksi</label>--}}
{{--                                    <input class="form-control @error('sectionTitle') is-invalid @enderror" type="text" name="sectionTitle" id="sectionTitle">--}}
{{--                                    @error('sectionTitle')--}}
{{--                                    <span class="invalid-feedback">--}}
{{--                                            <strong>{{ $message }}</strong>--}}
{{--                                        </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="sectionDescription" class="form-label">Judul Seksi</label>--}}
{{--                            <textarea class="form-control @error('sectionDescription') is-invalid @enderror" type="text" name="sectionDescription" id="sectionDescription"></textarea>--}}
{{--                            @error('sectionDescription')--}}
{{--                            <span class="invalid-feedback">--}}
{{--                                            <strong>{{ $message }}</strong>--}}
{{--                                        </span>--}}
{{--                            @enderror--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="modal-footer">--}}
{{--                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>--}}
{{--                        <button type="submit" class="btn btn-primary">Perbarui</button>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


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
                        url: "{{ route('site.dsf','') }}"+'/'+x,
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
    <script>
        var siteConfig = document.getElementById('siteConfig')
        var siteInfo = document.getElementById('siteInfo')
        var sectionVideo = document.getElementById('sectionVideo')
        var processModal = document.getElementById('processModal')

        siteConfig.addEventListener('show.bs.modal', function (event) {
            var button = event.relatedTarget
            var name = button.getAttribute('data-name')
            var desc = button.getAttribute('data-deskripsi')
            var mname = siteConfig.querySelector('.modal-body #siteName')
            var mdesc = siteConfig.querySelector('.modal-body #siteDescription')

            mname.value = name
            mdesc.value = desc
        })
        siteInfo.addEventListener('show.bs.modal', function (event) {
            var button = event.relatedTarget
            var alamat = button.getAttribute('data-alamat')
            var telponSatu = button.getAttribute('data-telponSatu')
            var telponDua = button.getAttribute('data-telponDua')
            var email = button.getAttribute('data-email')
            var facebook = button.getAttribute('data-facebook')
            var instagram = button.getAttribute('data-instagram')
            var youtube = button.getAttribute('data-youtube')
            var malamat = siteInfo.querySelector('.modal-body #alamat')
            var mtelponSatu = siteInfo.querySelector('.modal-body #telponSatu')
            var mtelponDua = siteInfo.querySelector('.modal-body #telponDua')
            var memail = siteInfo.querySelector('.modal-body #email')
            var mfacebook = siteInfo.querySelector('.modal-body #facebook')
            var minstagram = siteInfo.querySelector('.modal-body #instagram')
            var myoutube = siteInfo.querySelector('.modal-body #youtube')

            malamat.value = alamat
            mtelponSatu.value = telponSatu
            mtelponDua.value = telponDua
            memail.value = email
            mfacebook.value = facebook
            minstagram.value = instagram
            myoutube.value = youtube
        })
        sectionVideo.addEventListener('show.bs.modal', function (event) {
            var button = event.relatedTarget
            var desc = button.getAttribute('data-desc')
            var descTwo = button.getAttribute('data-descTwo')
            var mdesc = sectionVideo.querySelector('.modal-body #description')
            var mdescTwo = sectionVideo.querySelector('.modal-body #descriptionDua')

            mdesc.value = desc
            mdescTwo.value = descTwo
        })
        processModal.addEventListener('show.bs.modal', function (event) {
            var button = event.relatedTarget
            var number = button.getAttribute('data-number')
            var processName = button.getAttribute('data-name')
            var processDesc = button.getAttribute('data-desc')
            var mnumber = processModal.querySelector('.modal-body #number')
            var mprocessName = processModal.querySelector('.modal-body #processName')
            var mprocessDesc = processModal.querySelector('.modal-body #processDesc')

            mnumber.value = number
            mprocessName.value = processName
            mprocessDesc.value = processDesc
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
