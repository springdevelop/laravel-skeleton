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
    @foreach ($donates as $key=>$donate)
        <tr >
        <td class="text-center pr-3">{{$key+1}}</td>
        <td class="pl-2">
        {{$donate->name}}
        </td>
        <td class="text-right">
            {{number_format($donate->amount,0,',','.')}} đ
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
