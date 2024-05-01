<html>

<head>
    <title>Laravel app</title>
    <meta name="autor" content="Zahid Hassan">
    <meta name="viewpoet" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" >
</head>
@include('component.header')
<body>

    <div class="container">
        <div class="row d-flex justify-content-center "></div>

            <div class="col-6">

                <button class="btn btn-success"> Hello </button>

@include('component.Media')

                <img src="{{asset('laravel.png')}} ">

   <style>
        body {
            display: flex;
            justify-content: center;
        }

        .geeks {
            width: 60%;
            height: 300px;
            border: 1px solid #ccc;
        }

        img {
            width: 50%;
            height: 50%;
        }
    </style>
            </div>

    </div>

@include('component.Team') <br></br>



    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
</body>

@include('component.Footer')




</html>
