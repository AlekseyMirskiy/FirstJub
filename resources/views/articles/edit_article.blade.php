@extends('layouts.main')
@section('content')
<div class="row">

    <div class="container-fluid">
        @include('errors._form_errors')
        <form class="form-group" action="{{ route('update', $article->id) }}" method="POST" role="form" enctype="multipart/form-data">
            {{csrf_field()}}
            @method('PUT')

            @include('articles.parts._form_article')         
               
            <div class="col-md-6">
                <input type="file" name="image"
            </div>

            <hr>

            <button type="submit" class="btn btn-primary">Update</button>

        </form>

    </div>

</div>
@endsection