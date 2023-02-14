<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Master</title>
    <style>
        *{
            font-family:'Courier New', Courier, monospace;
        }
        header{
            background-color: #0d6efd;
            height: 20vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        aside{
            background-color: lightblue;
            min-height: 75vh;
        }
        footer{
            background-color: #0d6efd;
            height: 5vh;
            color: white;
        }
        h1{
            color: white;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body class="container">
    <header class="row">
        <h1>BÁN HÀNG TRỰC TUYẾN</h1>
    </header>
    <main class="row">
        <aside class="col-3"> Left Nav</aside>
        <div class="col-7"> 
            @yield("mainview")
        </div>
    </main>
    <footer class="row">
        Bài tập 3
    </footer>
</body>
</html>