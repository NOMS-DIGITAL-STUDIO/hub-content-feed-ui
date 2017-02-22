@extends('layouts.master')

@section('title', 'Hub')

@section('content')

<div class="hub-content">
    <div class="row hub-title">
        <div class="col-xs-12">
            @if ($page->id)
            <a href="{{ action('HubLinksController@getItem', $page->parent->id) }}" class="back-to-hub">
                <span class="icon icon-icon-hub" aria-hidden="true"></span>
                <div class="back-to-the-hub-text">
                    {{ trans('navigation.title', ['page' => $page->parent->title]) }}
                </div>
            </a>
            <h1><img src="{{ $page->icon }}" alt="{{ $page->title }}" style="height:1.5em;width:auto;vertical-align:middle;"> {{ $page->title }}</h1>
            @else
            <img src="/img/icon-hub.png" alt="{{ $page->title }}">
            <h1>{{ $page->title }}</h1>
            @endif
        </div>
    </div>

    <ul class="row row-centered hub-thumb">
        @foreach($page->links as $link)
        <li class="col-xs-2 col-centered">
            @if(!$link->url)
            <a href="{{ action('HubLinksController@getItem', $link->nid) }}" rel="noopener" id="term-{{ $link->nid }}">
                @else
                <a href="{{ $link->url }}" target="_blank" rel="noopener" id="term-{{ $link->nid }}">
                    @endif
                    @if(!Request::is('hub/*'))
                      <img src="/img/{{ $link->thumbnail }}" alt="{{ $link->title }}" />
                    @else
                      <img src="{{ $link->thumbnail }}" alt="{{ $link->title }}" />
                    @endif

                    <h4>{{ $link->title }}</h4>
                </a>
        </li>
        @endforeach
    </ul>

</div>

@endsection
