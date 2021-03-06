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
            <div class="content flex-center">
                <p class="title">Hasil Formulir</p>
                <div class="flex-column">
                    <strong>Nama</strong>
                    <p>{{ $name }}</p>
                    <strong>Jenis Kelamin</strong>
                    <p> {{ $gender }} </p>
                    <strong>Usia</strong>
                    <p> {{ $age }} </p>
                </div>
            </div>
        </div>
    </body>
</html>

