<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            label {
                font-weight:bold;
            }
            input, select {
                width:100%;
            }
            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
                flex-wrap:wrap;
            }

            .flex-column {
                display:flex;
                flex-direction: column;
                width:300px;
            }

            .form-group {
                display:flex;
                flex-wrap:wrap;
            }
            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
                width:100%;
            }
            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content flex-center">
                <p class="title">Ubah Formulir</p>
                <form action="{{ url('/edit/'.$person->id) }}" class="flex-column" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group m-b-md">
                        <label for="name">Nama</label>
                        <input type="text" name="name" id="name" value=" {{ $person->name }} ">
                    </div>
                    <div class="form-group m-b-md">
                        <label for="gender">Jenis Kelamin</label>
                        <select name="gender" id="gender">
                            <option value="Pria" {{ $person->gender == "Pria" ? "selected":"" }}>Pria</option>
                            <option value="Wanita" {{ $person->gender == "Wanita" ? "selected":"" }}>Wanita</option>
                        </select>
                    </div>
                    <div class="form-group m-b-md">
                        <label for="age">Usia</label>
                        <input type="number" name="age" id="age" placeholder=" {{ $person->age }} " >
                    </div>
                    <div>
                        <button type="submit">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
