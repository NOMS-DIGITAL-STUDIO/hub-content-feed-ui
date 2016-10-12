@extends('layouts.master')

@section('title', 'Radio')

@section('header')

@include('stickyNavigation', ['title' => trans('navigation.radio'), 'icon' => 'icon-icon-radio', 'titleLink' => action('RadiosController@showRadioLandingPage'), 'colour' => 'blue' ])

<div class="header-nav-wrap light-blue">
	<div class="container" id="header">
		<div class="row">
			<div class="col-xs-12">
				<p>{{ trans('radio.description') }}</p>
			</div>
		</div>
	</div>
</div>

@endsection

@section('content')

<br />
<br />
<div class="channel-programmes channel-episodes radio-episodes">
	@foreach($radios as $radio)
		@include('radio.programmeCard', ['radio' => $radio])
	@endforeach
</div>



@endsection
