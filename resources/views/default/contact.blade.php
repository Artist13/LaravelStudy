@extends('layouts.layout')

@section('content')

<div class="col-md-9">
    <ul>
    @foreach($form as $item)
        <li>$item</li>
    @endforeach
    </ul>
    <pre>
    {{ print_r(Session::all()) }}
    </pre>

    <div class="">
        <h2>Contact us!</h2>
    </div>

    <p>
        This is a template for a simple marketing or informational website. It includes a large...
    </p>

    <form method="post" action="{{route('contact')}}">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}" placeholder="Input your name...">
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" value="{{old('email')}}" name="email" placeholder="Input your email...">
        </div>
        <div class="form-group">
            <label for="site">Site</label>
            <input type="text" class="form-control" id="site" value="{{old('site')}}" name="site">
        </div>
        <div class="form-group">
            <label for="text">Text</label>
            <textarea name="text" id="text" rows="3" class="form-control">{{old('text')}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection