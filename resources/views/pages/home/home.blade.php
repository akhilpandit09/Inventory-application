@extends('../../app')

@section('content')
    <div class="container">
        <div>
            @include('pages.home.homeHeader')
        </div>
        <div>
            @include('pages.home.card')
        </div>
        <div>
            @include('pages.home.table')
        </div>
        <div>
            @include('pages.analytics.analytics')
        </div>
    </div>
@endsection
