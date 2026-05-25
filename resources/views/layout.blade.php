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
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        body {
            background-image: url("/images/main.svg");
            width: 100%;
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
            background-color: #9B9A98;
            height: 40px;
            width: 500px;
            border-radius: 20px;
            margin-top: 20px;
            font-size: medium;
            margin-bottom: 30px;
        }

        .view_more {
                font-family: "Inter";
                font-size: 20px;
                border-style: solid;
                border-color: #9B9A98;
                color: #9B9A98;
                border-radius: 100px;
                font-weight: 500;
                padding: 21px;
                transition: all 0.3s ease;
                text-decoration: none;
            }

        .view_more:hover {
            background-color: #BCBAB4;
            color: white;
            transform: translateY(-1px);
        }

        .networks {
            margin-bottom: 70px;

            .btn_links {
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: 60px;

                
            }
        }

        

        .link {
            font-family: "Bruno Ace", sans-serif;
            font-size: 30px;
            border: 2px solid #9B9A98;
            color: #9B9A98;
            border-radius: 100px;
            font-weight: 500;
            padding: 21px;
            transition: all 0.3s ease;
            width: 417px;
            text-align: center;
            text-decoration: none;
        }

        .link:hover {
            background-color: #BCBAB4;
            color: white;
            transform: translateY(-1px);
        }
    </style>
</head>
<body class="d-flex flex-column h-100">
    @include('navbar')

    @if(session('success'))
        <div style="background:#d4edda; color:#155724; padding:15px; border-radius:5px; margin:20px auto; max-width:1000px; text-align:center;">
            {{ session('success') }}
        </div>
    @endif

    @yield('content')
</body>
</html>