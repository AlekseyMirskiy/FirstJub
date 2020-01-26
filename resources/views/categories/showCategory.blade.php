@extends('layouts.main')
@section('content')

<div class="card">
    <h5 class="card-header"><a href="{{route('category.index')}}">Categories</a></h5>
    <div class="card-body">
      <h5 class="card-title">{{$category->title}}</h5>
      @foreach($category->articles as $article)
          <a href="{{ route('showArticle', $article) }}"><span class="badge badge-pill badge-dark">{{$article->title}}</span></a>
      @endforeach      
    </div>
  </div>
  @endsection