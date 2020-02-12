
@extends('layouts.app')

@section('content')
<div class="container">

<h2 class="">Sửa</h2>
<form method="post" action="/backend/custom-html/{{ $customHtml->id }}">
                @csrf
                <div class="form-group row">
                    <label for="position" class="col-md-4 col-form-label text-md-right">{{ __('Vị trí') }}</label>
                    <div class="col-md-8">
                        <input id="position" type="text" class="form-control @error('position') is-invalid @enderror" name="position" value="{{ $customHtml->position }}" required autocomplete="position" autofocus>
                        @error('position')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="desc" class="col-md-4 col-form-label text-md-right">{{ __('Mô tả') }}</label>

                    <div class="col-md-8">
                        <input id="desc" type="text" class="form-control @error('desc') is-invalid @enderror" name="desc" value="{{ $customHtml->desc }}">

                        @error('desc')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="content" class="col-md-12 col-form-label">{{ __('Nội dung') }}</label>

                    <div class="col-md-12">
                        <textarea id="content" type="text" class="form-control @error('content') is-invalid @enderror" name="content" >
                        {{$customHtml->content}}</textarea>

                        @error('content')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                    </div>
                </div>
            </form>
</div>
@endsection