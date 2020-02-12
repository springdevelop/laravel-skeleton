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
            <th class="pl-2">Vị trí</th>
            <th class="pl-2">Mô tả</th>
            <th class="text-right"></th>
        </tr>
    </thead>
    <tbody>
    @foreach ($customHtmls as $key=>$customHtml)
        <tr >
        <td class="text-center pr-3">{{$key+1}}</td>
        <td class="pl-2">
        {{$customHtml->position}}
        </td>
        <td class="pl-2">
        {{ $customHtml->desc }}
        </td>
        <td class="d-flex">
            <a class="btn btn-primary btn-sm mr-1" href="/backend/custom-html/{{$customHtml->id}}/edit">edit</a>
            <form action="{{ url('/backend/custom-html', ['id' => $customHtml->id]) }}" method="post">
                <input class="btn btn-danger btn-sm" type="submit" value="Delete" />
                @method('delete')
                @csrf
            </form>
        </td>
        </tr>
        @endforeach

    </tbody>
</table>
