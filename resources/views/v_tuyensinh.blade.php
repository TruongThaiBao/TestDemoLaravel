<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuyển Sinh</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        div{
            margin-bottom: 10px;
        }
    </style>
</head>

<body class="d-flex justify-content-center align-items-center">
    <form action="tuyen-sinh-post" method="post" class="d-flex justify-content-center flex-column align-items-center">
        @csrf
        <h1>Xếp loại kết quả tuyển sinh</h1>
        <div>
            <label for="">Điểm môn Toán: </label>
            <input type="text" name="toan">
        </div>
        <div>
            <label for="">Điểm môn Lý: </label>
            <input type="text" name="ly">
        </div>
        <div>
            <label for="">Điểm môn Hoá: </label>
            <input type="text" name="hoa">
        </div>
        <div>
            <select name="kv" id="">
                <option value="1">Khu vực 1</option>
                <option value="2">Khu vực 2</option>
                <option value="3">Khu vực 3</option>
            </select>
        </div>
        <div>
            <input type="submit" value="Tính Điểm" class="btn btn-primary">
        </div>

        <h1>Kết Quả Xếp Loại</h1>
        @if(isset($toan) && isset($ly) && isset($hoa))
            <div> Tổng điểm : {{$toan+$ly+$hoa}}</div>
            <div> Xếp loại : 
                @if(($toan+$ly+$hoa)>=24)
                    'Giỏi'
                @elseif (($toan+$ly+$hoa)>=21)
                    'Khá'
                @elseif (($toan+$ly+$hoa)>=15)
                    'Trung Bình'
                @else
                    'Yếu'
                @endif
            </div>
            <div> Điểm ưu tiên: 
                @if($kv==1)
                    5
                @elseif($kv==2)
                    4
                @else
                    2
                @endif
            </div>
        @endif

    </form>
</body>

</html>