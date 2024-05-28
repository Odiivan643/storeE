@extends('admin')

@section('content')
<div >
    <h3>Create Slider</h3>
    <a href="{{ route('admin.slider.index') }}" class="btn btn-success my-1">
            Home
    </a>
    @include('sliders/sliderForm')
        </div>
@endsection
