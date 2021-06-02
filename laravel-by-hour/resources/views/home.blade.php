@extends('layouts.app')
@section('title') Home @endsection
@section('content')

    <div class="d-block">
        <p>new Content</p>

    </div>

@endsection

@section('aside')
    @parent
    <p>Adding text</p>
@endsection
