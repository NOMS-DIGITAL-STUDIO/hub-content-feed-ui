@extends('layouts.master')

@section('title', '404 Error')

@section('content')

<div class="error-container">
  <div class="col-xs-12">
    <div class="content">
      <div class="title">4</div>
      <img src="/img/icon-hub-medium.png">
      <div class="title">4</div>
      <div class ="error">Page not found</div>
      <p>The page you are looking for cannot be found.</p>
      <a href="/" id="back">{{ trans('navigation.title') }}</a> 
    </div>
  </div>
</div>

@endsection
