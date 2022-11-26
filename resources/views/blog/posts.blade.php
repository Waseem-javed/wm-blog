@foreach($blogs as $blog)
<div class="card mb-2 border border-secondary cardHover bg-dark">
    <span onClick="redirectTo('{{$blog['url']}}')">
        <div class="row g-0">
            <div class="col-sm-4 col-lg-4 col-md-4 position-relative p-0 m-0">
                <img src="{{$blog['image_url_portait']}}" class="card-img fit-contain w-100 h-100" alt="...">
            </div>

            <div class="col-sm-8 col-lg-8 col-md-8">
                <div class="card-body">
                    <small class="small fs-8 text-muted">{{$blog['date']}}</small>
                    <br />
                    @foreach($blog['tags'] as $tag)
                    <span class="text-primary fw-bolder fs-8 text-capitalize">{{$tag['tag']}}</span>
                    @if($loop->iteration < count($blog['tags'])) <span
                        class="text-primary fw-bolder gs-6 pe-1">&#x2022;
    </span>
    @endif
    @endforeach
    <br />
    <a class="fw-bold mb-0 fs-8 text-decoration-none" href="#" target="_blank">
        {{$blog['title']}}
    </a>
    <p class="text-muted fs-8 m-0 p-0 text-justify lh-sm">
        {{substr($blog['description'],0,250)}}
        ... <a href="#" class="small fs-8">Read
            More</a>
    </p>

    <p class="pt-3">
        <img class="rounded-pill" src="{{$blog['author_image_url']}}" height="30" width="30" alt="user">
        <span>{{$blog['author']}}</span>
    </p>
</div>
</div>
</div></span>
</div>
@endforeach