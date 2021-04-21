@extends('layouts.client')

@section('headerContent')
    @include('client.components.companyInfo')
@endsection

@section('content')
    @include('client.components.search')

    @include('client.components.news')

    @include('client.components.callback')
@endsection
