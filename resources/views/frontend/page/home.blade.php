@extends('frontend.layout.app')


@section('header')
    @include('frontend.include.header')
    
    
@endsection

@section('contents')

    @include('frontend.include.banner')
    @include('frontend.include.about')
    @include('frontend.include.skills')
    @include('frontend.include.service')
    @include('frontend.include.technology')
    @include('frontend.include.portfolio')
    @include('frontend.include.contact')
    
@endsection



@section('footer')

    @include('frontend.include.footer')
    
@endsection