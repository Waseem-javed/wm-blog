@extends('layouts.master')

@section('title','Trendings')

<p class="text-primary p-0 m-0">What's Trendings</p>
@foreach($trendings as $trend)
<div class="card mb-2" style="min-height: 120px">
    <img class="card-img w-100 h-100" src="{{$trend['image_url_landscape']}}" style="min-height: 120px" alt="Card image">
    <div class="card-img-overlay overlay-image">
        <h4 class="card-title text-white fs-6">{{$trend['title']}}</h4>
        <p class="card-text text-white fs-6">{{$trend['date']}}</p>
    </div>
</div>
@endforeach