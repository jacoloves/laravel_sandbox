@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    indexpage
@endsection

@section('content')
    <p>this is words contents.</p>
    <p>write free!</p>

    @each('components.item', $data, 'item')
@endsection

@section('footer')
    copyright 2021 bona
@endsection
