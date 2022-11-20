@extends('layouts.master')
@section('title','Blog')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-around">
        <div class="col-sm-8">
            <div class="row my-2">
                <div class="col-sm-9 col-lg-9 m-0 px-1">
                    <p class="text-primary p-0 m-0">All Posts</p>
                    @include('blog.posts')
                </div>
                <div class="col-sm-3 col-lg-3 m-0 p-0">
                    @include('blog.trendings')
                    @include('blog.recents')
                    @include('blog.tags')
                </div>
            </div>
        </div>
    </div>
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
          <li class="page-item @if($page_number ===1) disabled @endif">
            <a class="page-link" href="/?page={{$page_number - 1}}" tabindex="-1" aria-disabled="true">Previous</a>
          </li>
          @for ($i = 0; $i < ceil($total_blogs / $page_length); $i++)
          <li class="page-item @if($page_number === $i + 1) active @endif"><a class="page-link" href="/?page={{$i+1}}">{{$i+1}}</a></li>
          @endfor
          <li class="page-item @if($page_number >= ceil($total_blogs / $page_length)) disabled @endif">
            <a class="page-link" href="/?page={{$page_number + 1}}" tabindex="-1" aria-disabled="true">Next</a>
          </li>
        </ul>
      </nav>
</div>
@stop