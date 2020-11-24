<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <link rel="stylesheet" href=" {{ asset('bootstrap-4.4.1-dist/css/bootstrap.css') }} ">
</head>
<body>

    <div class="container p-3">
        <div class="card">
            <div class="card-body">
                <form action="/add" method="post">
                    @csrf
                    <div class="form-group">
                         <label for="nama">Nama</label>
                         <input type="text" name="nama" class="form-control" id="nama">
                    </div>
                    <div class="form-group">
                        <label for="umur">Umur</label>
                        <input type="number" name="umur" class="form-control" id="umur">
                   </div>
                   <button class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
