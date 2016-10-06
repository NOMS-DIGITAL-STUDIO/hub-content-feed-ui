@extends('layouts.master'   )

@section('title', 'Videos')

@section('header')

@include('stickyNavigation', ['title' => trans('navigation.video'), 'icon' => 'icon-icon-video', 'titleLink' => action('VideosController@showVideoLandingPage'), 'colour' => 'red' ])

<div class="header-nav-wrap red">
  <div class="container" id="header">
      <div class="recent-video-wrap dark">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              @include('video.recentVideo', ['recentVideos' => $recentVideos])
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@section('content')

@foreach($videos as $channel)
  <div class="channel">
    <h2>{{ $channel->channel }}</h2>

    <div class="channel-programmes">
      @foreach($channel->programmes as $programme)
        @include('video.programmeCard', ['programme' => $programme])
      @endforeach
    </div>
  </div>
@endforeach

@endsection
