@extends("layouts.master")
@section("mainview")
<table class="table table-bordered">
    <tr class="primary">
        <th>Mã loại</th>
        <th>Tên loại</th>
    </tr>
    @foreach($ds as $n)
    <tr>
        <td>{{$n->cateid}}</td>
        <td>{{$n->catename}}</td>
    </tr>
    @endforeach
</table>
@endsection