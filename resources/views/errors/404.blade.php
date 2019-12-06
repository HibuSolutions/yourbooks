@extends('errors::illustrated-layout')

@section('code', '404')
@section('title', __('Page Not Found'))

@section('image')
<div style="background-image: url('img/photo.jpg');" class="absolute pin bg-cover bg-no-repeat md:bg-left lg:bg-center">
</div>
@endsection

@section('message', __('Lo sentimos, no encontramos lo que buscas.'))