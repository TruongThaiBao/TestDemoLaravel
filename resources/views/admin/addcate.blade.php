@extends("layouts.master")
@section("mainview")
<br>
<div>
    <h2>Thêm loại sản phẩm</h2> 
    <form action="add-cate-post" method="post">
        @csrf
        <div class="mb-3">
            Tên loại 
            <input type="text" class="form-control" name="ten">
        </div>
        <div class="mb-3">
            Mô tả:
            <textarea name="mota" id="" cols="30" rows="5" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Thêm loại sản phẩm</button>
        </div>
    </form>
</div>
@endsection