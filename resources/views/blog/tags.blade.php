<p class="text-primary p-0 m-0">Tags</p>
@foreach($tags as $tag)
<a href="{{$tag['url']}}"><span class="badge bg-secondary text-white">{{$tag['name']}}</span></a>
@endforeach