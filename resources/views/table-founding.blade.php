<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addFounding">
    Thêm
</button>
<table id="" class="table table-striped table-hover mb-0 mt-2">
    <colgroup>
        <col width="5%" />
        <col width="30%" />
        <!-- <col width="20%" /> -->
        <col width="30%" />
        <col width="30%" />
        <col width="5%" />

    </colgroup>
    <thead>
        <tr>
            <th class="pr-3">STT </th>
            <th class="pl-2">Ngày</th>
            <th class="text-right">Đóng góp</th>
            <th class="text-right">Hiện tại</th>
            <!-- <th class="text-center">Ghi chú</th> -->
            <th class="text-right"></th>

        </tr>
    </thead>
    <tbody>
    @foreach ($foundings as  $key=>$founding)
        <tr >
        <td class="text-center pr-3">{{$key+1}}</td>
        <td class="pl-2">
            {{date('d/m/Y', strtotime($founding->date_founding))}}

        </td>
        <td class="text-right">
            {{number_format($founding->founding,0,',','.')}} đ
        </td>
        <td class="text-right">
            {{number_format($founding->currrent,0,',','.')}} đ
        </td>
        <td class="text-right">
            <form action="{{ url('/founding', ['id' => $founding->id]) }}" method="post">
                <input class="btn btn-danger btn-sm" type="submit" value="Delete" />
                @method('delete')
                @csrf
            </form>
        </td>
        </tr>
        @endforeach

    </tbody>
</table>