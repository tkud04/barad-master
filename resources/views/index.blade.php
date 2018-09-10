@extends('layout')

@section('title',"Welcome")

@section('slider')
@include('slider')
@stop

@section('content')
@include('about-content')
@include('product-area')
@include('progress-bar')
@include('shuffle')
@include('team')
@include('digital-studio')
@include('testimonials')
@stop