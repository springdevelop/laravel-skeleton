
<div class="modal" id="addFounding">
    <div class="modal-dialog">
        <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title">Thêm dự toán</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
            <form method="POST" action="/backend/founding">
                @csrf
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label">{{ __('Ngày đóng góp') }}</label>

                    <div class="col-md-8">
                        <input id="date_founding" type="date" class="form-control @error('date_founding') is-invalid @enderror" name="date_founding" value="{{ old('date_founding') }}" required autocomplete="date_founding" autofocus>
                        @error('date_founding')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label">Đóng góp</label>
                    <div class="col-md-8">
                        <input id="founding" type="text" class="form-control @error('founding') is-invalid @enderror" name="founding" value="{{ old('founding') }}"  autocomplete="founding">
                        @error('founding')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label">Hiện tại</label>
                    <div class="col-md-8">

                        <input id="current" type="text" class="form-control @error('current') is-invalid @enderror" name="current" value="{{ old('current') }}"  autocomplete="current">
                        @error('currrent')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary">Thêm</button>
                    </div>
                </div>
            </form>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Thoát</button>
        </div>

        </div>
    </div>
    </div>