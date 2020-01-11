@extends('layouts.main')
@section('header')
<header class="masthead posts-image" >
  
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1>Posts</h1>
            
            <span class="subheading"></span>
            
          </div>
        </div>
      </div>
    </div>
</header>
@endsection
@section('content')
    <div class="container">
        <h2 class="title-primary">{{ $article->title}}</h2>
        <p class="text-centr">{{ $article->description }}
            <span>{{ $article->created_at }}</span>
        </p>
    </div>
    <div class="btn-group" role="group">
        <a type="button" href ="{{ route('editArticle', $article->id) }}" class="btn btn-success">Edit<i class="far fa-edit"></i></a>
        <a type="button" href ="{{ route('deleteArticle', $article->id) }}" class="btn btn-danger">Delete<i class="far fa-trash-alt"></i></a>
    </div>
@endsection