
<div class="form-group">
    <input name="title" type="text" class="form-control" required value="{{ old('title') ?? $post->title ?? '' }}">
</div>
<div class="form-group">
    <textarea name="descr" rows="10" class="form-control" required>{{ old('descr') ?? $post->descr ?? '' }}</textarea>
</div>
<textarea class="form-control" id="summary-ckeditor" name="summary-ckeditor"></textarea>
<div class="form-group">
    <select name="category_id" rows="10" class="form-control" required value="{{ old('category_id') ?? $post->category_id ?? '' }}>
        @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <select name="tags[]" rows="10" class="form-control select2-multi" required multiple="multiple">
        @foreach($tags as $tag)
            <option value="{{$tag->id}}">{{$tag->name}}</option>
        @endforeach
    </select>
</div>


<div class="form-group">
    <input type="file" name="img">
</div>

<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
CKEDITOR.replace( 'summary-ckeditor' );
</script>


    {{-- {!! Html::script('js/select2.min.js') !!} --}}

