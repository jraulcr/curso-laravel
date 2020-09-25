<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>

    <style>
        .contenedor {
            background-color: #F00;
            text-align: center;
        }

        .infoGeneral {
            background-color: #00f;
            margin: 200px 0;
            color: #fff;
        }

        .pie {
            background-color: #ff0;
        }

    </style>

    <link rel="stylesheet" href="">
</head>

<body>
    <div class="contenedor">
        @yield('cabecera')


    </div>

    <div class="infoGeneral">
        @yield('infoGeneral')
    </div>
    <div class="pie">
        @yield('pie')
    </div>

</body>
</html>
