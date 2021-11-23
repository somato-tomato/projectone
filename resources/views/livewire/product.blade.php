<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    @foreach($portofolio as $portofolios)
        <div class="cbp-item itemshadow">
            <img src="{{ asset('images_site/'.$portofolios->image)}}" alt="" style="height:500px">
            <div class="overlay center-block whitecolor">
                <a class="plus" data-fancybox="gallery" href="{{ asset('images_site/'.$portofolios->image)}}"></a>
                <h4 class="top30">{{$portofolios->nama_portofolio}}</h4>
                <p>{{$portofolios->deskripsi}}</p>
            </div>
        </div>
    @endforeach
</div>
