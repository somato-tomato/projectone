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
                @if ($siteConfig == null)
                    <form action="{{ route('site.uf') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="siteFavicon" class="form-label">Ikon Situs</label>
                            <input class="form-control" type="file" name="siteFavicon" id="photo">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                @else
                <div class="text-center">
                    <img class="mb-3" style="width: 50%" src="{{ asset('images_site/'.$siteConfig->siteFavicon) }}" alt="site-logo">
                </div>
                @endif
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                @if ($siteConfig == null)
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
                        <div class="col-md-6">
                            <p style="font-size: 15px"><span><i class="fas fa-mobile-alt"></i></span> +62-{{ $siteConfig->telponDua }}</p>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-md-4">
                            <a href="{{ $siteConfig->facebook }}" target="_blank"><i class="fab fa-facebook-square fa-3x"></i></a>
                        </div>
                        <div class="col-md-4">
                            <a href="{{ $siteConfig->twitter }}" target="_blank"><i class="fab fa-twitter fa-3x"></i></a>
                        </div>
                        <div class="col-md-4">
                            <a href="{{ $siteConfig->instagram }}" target="_blank"><i class="fab fa-instagram fa-3x"></i></a>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
        @endif
    </div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
            </div>
        </div>
    </div>
</div>
@endsection