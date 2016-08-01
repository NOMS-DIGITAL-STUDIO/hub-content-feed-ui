@extends('layouts.master')

@section('title', $video->getTitle())

@section('top_content')

<div class="video-player-wrap dark">
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <video id="video_player" class="video-js vjs-default-skin vjs-big-play-centered" controls preload="auto" width="600" height="240" data-setup='{}' controls poster="{{$video->getThumbnail()}}">
          <source src="{{ $video->getUrl() }}">
          <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
        </video>
      </div>

      <div class="col-md-4 video-details">
        <span class="video-programme">{{ $video->getCategories()->name }}</span>

        <h2 class="video-title">{{ $video->getTitle() }}</h2>

        <div class="video-description">{!! $video->getDescription() !!}</div>

        @if($video->getDuration())
          <div class="video-duration">{{ $video->getDuration() }}</div>
        @endif

      </div>
    </div>
  </div>
</div>

@endsection

@section('content')

<div class="row">
  <div class="col-xs-12">
    <ul class="episodes-menu">
      <li>
        <h2><a href="#" id="EpisodeLink" class="active">{{ trans('video.episodes') }}</a></h2>
      </li>
      <li>
       <h2><a href="#" id="AboutLink">{{ trans('video.about') }}</a></h2>
      </li>
    </ul>
  </div>
</div>


<!-- Lists the episodes of the programme -->
<div id="EpisodeInfo">
  <div class="row">
    <div class="col-xs-12">
      <div class="channel-programmes channel-episodes">
        @foreach($categoryEpisodes as $episode)
          @include('video.episodeCard', ['episode' => $episode])
        @endforeach
      </div>
    </div>
  </div>
</div>

<!-- Information about the programme-->
<div id="AboutInfo">
  <div class="row">
    <div class="col-xs-12">
      <div class="channel-programmes channel-episodes">
        <div>{!! $video->getCategories()->description !!}</div>
      </div>
    </div>
  </div>
</div>

@endsection
