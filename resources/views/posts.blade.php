<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Social Share</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        .container{
            width: 100%;
            height: 100vh;
            background-color: rgb(239, 239, 239);
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container ul{
            list-style-type: none;
            display: flex;
            gap: 20px;
        }
        .container ul li{
            width: 30px;
            height: 30px;
            border-radius: 4px;
            background-color: tomato;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        .container ul li a{
            color: #fff;
            font-size: 22px;
        }
        .container ul li:hover{
            transform: rotate(350deg);
        }
        .title{
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">

        <div class="social_share">
            <h1 class="title">Social Share</h1>
            {{-- {!! $shareComponent !!} --}}
        </div>
    </div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
<script src="{{ asset('js/share.js') }}"></script>
</body>
</html>
