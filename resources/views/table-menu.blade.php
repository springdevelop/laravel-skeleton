<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addMenu">
    Thêm
</button>
<table id="" class="table table-striped table-hover mb-0 mt-2">
    <colgroup>
        <col width="5%" />
        <col width="50%" />
        <col width="40%" />
        <col width="5%" />

    </colgroup>
    <thead>
        <tr>
            <th class="pr-3">STT </th>
            <th class="pl-2">Tên</th>
            <th class="pl-2">Link</th>
            <th class="text-right"></th>
        </tr>
    </thead>
    <tbody>
    @foreach ($menus as $key=>$menu)
        <tr >
        <td class="text-center pr-3">{{$key+1}}</td>
        <td class="pl-2">
        {{$menu->name}}
        </td>
        <td class="pl-2">
           {{$menu->link}}
        </td>
        <td class="text-right">
            <form action="{{ url('/backend/menus', ['id' => $menu->id]) }}" method="post">
                <input class="btn btn-danger btn-sm" type="submit" value="Delete" />
                @method('delete')
                @csrf
            </form>
        </td>
        </tr>
        @endforeach

    </tbody>
</table>
