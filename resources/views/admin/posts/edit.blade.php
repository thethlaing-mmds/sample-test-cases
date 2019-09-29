@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.edit') }} {{ trans('cruds.post.title_singular') }}
                </div>
                <div class="panel-body">

                    <form action="{{ route("admin.posts.update", [$post->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group {{ $errors->has('post_titlle') ? 'has-error' : '' }}">
                            <label for="post_titlle">{{ trans('cruds.post.fields.post_titlle') }}</label>
                            <input type="text" id="post_titlle" name="post_titlle" class="form-control" value="{{ old('post_titlle', isset($post) ? $post->post_titlle : '') }}">
                            @if($errors->has('post_titlle'))
                                <p class="help-block">
                                    {{ $errors->first('post_titlle') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.post.fields.post_titlle_helper') }}
                            </p>
                        </div>
                        <div class="form-group {{ $errors->has('post_description') ? 'has-error' : '' }}">
                            <label for="post_description">{{ trans('cruds.post.fields.post_description') }}*</label>
                            <textarea id="post_description" name="post_description" class="form-control ckeditor">{{ old('post_description', isset($post) ? $post->post_description : '') }}</textarea>
                            @if($errors->has('post_description'))
                                <p class="help-block">
                                    {{ $errors->first('post_description') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.post.fields.post_description_helper') }}
                            </p>
                        </div>
                        <div class="form-group {{ $errors->has('post_image') ? 'has-error' : '' }}">
                            <label for="post_image">{{ trans('cruds.post.fields.post_image') }}</label>
                            <input type="text" id="post_image" name="post_image" class="form-control" value="{{ old('post_image', isset($post) ? $post->post_image : '') }}">
                            @if($errors->has('post_image'))
                                <p class="help-block">
                                    {{ $errors->first('post_image') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.post.fields.post_image_helper') }}
                            </p>
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