@extends('layouts.app')
@section('title') Contacts @endsection
@section('content')

    <h1>Contacts</h1>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('contact-form') }}" method="post">
        @csrf
        <div>
            <label for="name">Enter name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter Name" id="name">
        </div>

        <div>
            <label for="email">Enter email</label>
            <input type="email" name="email" class="form-control" placeholder="Email" id="email">
        </div>

        <div>
            <label for="message">Your message</label>
            <input type="text" name="message" class="form-control" placeholder="Text" id="message">
        </div>

        <button type="submit" class="btn btn-success">Send</button>

    </form>

@endsection
