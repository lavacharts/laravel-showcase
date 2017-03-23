<!DOCTYPE html>
<html>
    <head>
        <title>Lavacharts Showcase</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100,200" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato', sans-serif;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 72px;
            }

            a {
                color: #000;
                text-decoration: none;
            }

            .links ul {
                width: 60%;
                margin: 0 auto;
                line-height: 0;
                list-style: none;
            }

            .links ul li {
                font-size: 20px;
                font-weight: 200;
                display: inline-block;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">
                    Lavacharts <?= $versions['lavacharts']; ?><br />
                    Chart Showcase<br />
                    <div class="links">
                        <ul>
                            @foreach ($charts as $chart)
                                <li>
                                <a href="{{ url("/lavacharts/example/chart/{$chart}") }}">{{ $chart }}
                                </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <small>Running on Laravel <?= $versions['laravel']; ?></small>
                </div>
            </div>
        </div>
    </body>
</html>
