
<div class="modal" id="addDonate">
    <div class="modal-dialog">
        <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title">Thêm nội dung</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
            <form method="POST" action="/backend/custom-html">
                @csrf

                <div class="form-group row">
                    <label for="position" class="col-md-2 col-form-label ">{{ __('Vị trí') }}</label>

                    <div class="col-md-10">
                        <input id="position" type="text" class="form-control @error('position') is-invalid @enderror" name="position" value="{{ old('position') }}" required autocomplete="position" autofocus>

                        @error('position')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="desc" class="col-md-2 col-form-label ">{{ __('Mô tả') }}</label>

                    <div class="col-md-10">
                        <input id="desc" type="text" class="form-control @error('desc') is-invalid @enderror" name="desc" value="{{ old('desc') }}">

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
                        <textarea id="content" type="text" class="form-control @error('content') is-invalid @enderror" name="content" ></textarea>

                        @error('content')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">Thêm</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Thoát</button>

                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>

    
    