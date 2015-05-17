@extends('app')
@section('content')
<div class="container">
    @foreach ($posts as $post)
    <p>{{$post->title}}</p>
    @endforeach
</div>
@endsection