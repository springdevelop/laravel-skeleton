@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Quản lý</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Danh sách ủng hộ</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Founding</a>
                        </li>
                       
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addDonate">
                            Thêm
                        </button>
                            <table id="" class="table table-striped table-hover mb-0 mt-2">
                                <colgroup>
                                    <col width="5%" />
                                    <col width="70%" />
                                    <!-- <col width="20%" /> -->
                                    <col width="20%" />
                                    <col width="5%" />

                                </colgroup>
                                <thead>
                                    <tr>
                                        <th class="pr-3">STT </th>
                                        <th class="pl-2">Đươn vị/ Cá nhân</th>
                                        <!-- <th class="text-center">Ghi chú</th> -->
                                        <th class="text-right">Số tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($donates as $donate)
                                    <tr >
                                    <td class="text-center pr-3"></td>
                                    <td class="pl-2">
                                    {{$donate->name}}
                                    </td>
                                    <td class="text-right">
                                        {{$donate->amount}} vnđ
                                    </td>
                                    <td class="text-right">
                                        <form action="{{ url('/donate', ['id' => $donate->id]) }}" method="post">
                                            <input class="btn btn-danger btn-sm" type="submit" value="Delete" />
                                            @method('delete')
                                            @csrf
                                        </form>
                                    </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>

                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <h2>Foundings</h2>
                            @foreach ($foundings as $founding)
                                <p>{{ $founding->date_founding }}</p>
                            @endforeach

                        </div>
                    </div> <!-- end tab-content -->

                </div>
            </div>
        </div>
    </div>
   
    <div class="modal" id="addDonate">
        <div class="modal-dialog">
            <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Thêm Ủng hộ</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form method="POST" action="/donate">
                    @csrf

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Tên') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">

                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Mô tả') }}</label>

                        <div class="col-md-6">
                            <textarea id="desc" type="text" class="form-control @error('desc') is-invalid @enderror" name="desc" value="{{ old('desc') }}"  autocomplete="Mô tả"></textarea>

                            @error('desc')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        </div>
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Số tiền') }}</label>

                        <div class="col-md-6">
                            <input id="amount" type="text" class="form-control @error('amount') is-invalid @enderror" name="amount" value="{{ old('amount') }}"  autocomplete="amount">

                            @error('amount')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
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
</div>
@endsection
