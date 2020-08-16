{{--
  Template Name: ACF Page Builder
--}}

@extends('layouts.app')

@section('content')

@php
  $sections = get_field('components');
@endphp

@foreach ($sections as $section)
    @php
        $name  = $section['acf_fc_layout'];
    @endphp

    @include('sections.'.$name, ['data'=>$section])
@endforeach

@endsection
