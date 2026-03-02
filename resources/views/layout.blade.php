<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bona+Nova+SC:ital,wght@0,400;0,700;1,400&family=Bruno+Ace&display=swap" rel="stylesheet">
    <title>@yield('title')</title>
    <style>
        body {
            background-color: #efececff;
            padding-top: 100px;
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 40px;
            color: #333 !important;
            letter-spacing: 1px;
            font-family: "Bruno Ace", sans-serif;
            font-style: normal;
        }

        .button {
            background-color: #D3A9CC;
            height: 40px;
            width: 500px;
            border-radius: 20px;
            margin-top: 20px;
            font-size: medium;
            margin-bottom: 30px;
        }
        /* .flash-messages {
            position: fixed;
            top: 80px;
            left: 0;
            right: 0;
            z-index: 1050;
            max-width: 600px;
            margin: 0 auto;
        }
        
        .flash-message {
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            margin-bottom: 10px;
            animation: slideIn 0.3s ease-out;
        }
        
        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        } */

    </style>
</head>
<body class="d-flex flex-column h-100">
    @include('navbar')

    @yield('content')
</body>
</html>