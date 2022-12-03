@foreach($blogs as $blog)
<div class="card bg-dark mb-2 shadow">
    <div class="card-header">
        <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex justify-content-between align-items-center">
                <div class="mr-2 p-1">
                    <img class="rounded-circle p-1 bg-secondary" width="45" src="{{$blog['author_image_url']}}"" alt="">
                </div>
                <div class="ml-2">
                    <div class="h7 mt-2">{{$blog['author']}}</div>
                    <div class="text-muted small mb-2"> <i class="fa fa-clock-o"></i> {{date('g:i a, d M y', strtotime($blog['created_at']));}}</div>
                </div>
            </div>
            <div>
                <div class="dropdown">
                    <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-caret"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                        <div class="h6 dropdown-header">Configuration</div>
                        <a class="dropdown-item" href="#">Save</a>
                        <a class="dropdown-item" href="#">Hide</a>
                        <a class="dropdown-item" href="#">Report</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        
        <h5 class="card-title"><a class="card-link text-decoration-none" href="#">{{$blog['title']}}</a></h5>
        <p class="card-text text-justify">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam omnis nihil, aliquam est, voluptates officiis iure soluta
            alias vel odit, placeat reiciendis ut libero! Quas aliquid natus cumque quae repellendus. Lorem
            ipsum dolor sit amet consectetur adipisicing elit. Ipsa, excepturi. Doloremque, reprehenderit!
            Quos in maiores, soluta doloremque molestiae reiciendis libero expedita assumenda fuga quae.
            Consectetur id molestias itaque facere? Hic!
        </p>
        <div class="p-0 m-0">
            @foreach($blog['tags'] as $tag)
            <span class="badge border">{{$tag['tag']}}</span>
            @endforeach
        </div>
    </div>
    <div class="card-footer">
        <a href="#" class="card-link text-decoration-none"><i class="fa fa-gittip"></i> Like</a>
        <a href="#" class="card-link text-decoration-none"><i class="fa fa-comment"></i> Comment</a>
        <a href="#" class="card-link text-decoration-none"><i class="fa fa-mail-forward"></i> Share</a>
    </div>
</div>
@endforeach