@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.create') }} {{ trans('cruds.comment.title_singular') }}
                </div>
                <div class="panel-body">

                    <form action="{{ route("admin.comments.store") }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group {{ $errors->has('comment_text') ? 'has-error' : '' }}">
                            <label for="comment_text">{{ trans('cruds.comment.fields.comment_text') }}*</label>
                            <input type="text" id="comment_text" name="comment_text" class="form-control" value="{{ old('comment_text', isset($comment) ? $comment->comment_text : '') }}" required>
                            @if($errors->has('comment_text'))
                                <p class="help-block">
                                    {{ $errors->first('comment_text') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.comment.fields.comment_text_helper') }}
                            </p>
                        </div>
                        <div class="form-group {{ $errors->has('post_id') ? 'has-error' : '' }}">
                            <label for="post">{{ trans('cruds.comment.fields.post') }}</label>
                            <select name="post_id" id="post" class="form-control select2">
                                @foreach($posts as $id => $post)
                                    <option value="{{ $id }}" {{ (isset($comment) && $comment->post ? $comment->post->id : old('post_id')) == $id ? 'selected' : '' }}>{{ $post }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('post_id'))
                                <p class="help-block">
                                    {{ $errors->first('post_id') }}
                                </p>
                            @endif
                        </div>
                        <div>
                            <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
                        </div>
                    </form>


                </div>
            </div>

        </div>
    </div>
</div>
@endsection