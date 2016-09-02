<div class="card programme-card radio-card">
  <div class="shadow">
    <img src="{{ $radio->thumbnail }}">
    <div class="programme-title">
      <h6>{{ $radio->title }}</h6>
    </div>

    <div class="overlay">
        <span class="programme-name">{{ $radio->title }}</span>
        <div class="programme-description">
          {!! $radio->description !!}
        </div>
          <a href="radio/{{ $radio->episode_nid }}" id="programme-{{ $radio->tid }}">
          <div class="programme-text">
            <h4>{{ trans('radio.play') }}</h4>
          </div>
          <img src="/img/equaliser.png" id="equaliser">
        </a>
    </div>
  </div>
</div>
