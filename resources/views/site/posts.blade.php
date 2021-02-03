@extends('site.master')
@section('content')

<h2>Posts</h2>
{{ $language }}
<ul>
  @foreach ($data['rows'] as $post)
    <li>{{ $post->title }}</li>
  @endforeach
</ul>

{!! $data['links'] !!}

@stop