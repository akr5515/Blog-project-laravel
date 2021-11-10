@extends('layouts.layout', ['title' => "Create the post"])

@section('title','| All Categories')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h1>Categories</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <th>{{$category->id}}</th>
                        <td>
                            <form action="{{ route('categories.index') }}">
                                <input class="" name="search" type="hidden" value="{{$category->name}}" aria-label="Search">
                                <label name="cat" value="{{  $category->name }}">
                                    {{$category->name}}
                                </label>
        
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Go</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div> 
        {{-- end of col 8 --}}
        <div class="col-md-3">
            <div class="well">
                <form action=" {{ route('categories.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <h3>New Category</h3>
                    <div class="form-group">
                        <input name="name" type="text" class="form-control" value="{{ old('title') ?? $post->title ?? '' }}">
                    </div>

                    <input type="submit" value="Create new Category" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>


@endsection