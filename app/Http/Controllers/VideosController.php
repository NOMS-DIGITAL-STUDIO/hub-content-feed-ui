<?php

namespace App\Http\Controllers;

use App\Facades\Videos;
use App\Http\Controllers\Controller;
use App\Models\Video;
use App\Repositories\VideosRepository;
use App\User;

class VideosController extends Controller {

  function showVideoLandingPage() {
    $videos = Videos::landingPageVideos();

    return view('video.landingPage', ['videos' => $videos]);
  }

  function show($nid) {
    $video = Videos::find($nid);

    return view('video.detail', ['video' => $video]);
  }
  
  function getRecent() {
	  $recentVideos = Videos::getRecent();
	  
	  return view('video.recentVideo', ['recentVideos' => $recentVideos]);
  }

}
