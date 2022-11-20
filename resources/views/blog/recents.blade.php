@extends('layouts.master')

@section('title','Recents')
<p class="text-primary p-0 m-0">Recent Written</p>
@foreach($recents as $recent)
<div class="card mb-2" style="min-height: 120px">
    <img class="card-img w-100 h-100" src="{{$recent['image_url_landscape']}}" style="min-height: 120px" alt="Card image">
    <div class="card-img-overlay opacity-7 overlay-image">
        <h4 class="card-title text-white  fs-6">{{$recent['title']}}</h4>
        <p class="card-text  text-white fs-6">{{$recent['date']}}</p>
    </div>
</div>
@endforeach