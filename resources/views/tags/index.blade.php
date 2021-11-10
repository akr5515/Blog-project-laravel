@extends('layouts.layout', ['title' => "Create the post"])

@section('title','| All Categories')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h1>Tags</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($tags as $tag)
                    <tr>
                        <th>{{$tag->id}}</th>
                        <td>
                            <form action="{{ route('tags.index') }}">
                                <input class="" name="search" type="hidden" value="{{$tag->name}}" aria-label="Search">
                                <label name="cat" value="{{  $tag->name }}">
                                    {{$tag->name}}
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
                <form action=" {{ route('tags.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <h3>Tag Category</h3>
                    <div class="form-group">
                        <input name="name" type="text" class="form-control" value="{{ old('title') ?? $post->title ?? '' }}">
                    </div>

                    <input type="submit" value="Create new Tag" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>


@endsection