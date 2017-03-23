<html>
    <head>
        <title>Lavacharts Showcase - @yield('title')</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:400" rel="stylesheet" type="text/css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.10.0/styles/obsidian.min.css" rel="stylesheet" type="text/css">

        <style type="text/css">
            html, body {
                height: 100%;
            }

            body {
                position: relative;
            }

            h1, h2 {
                font-family: 'Lato', sans-serif;
            }

            #logo {
                text-align: center
            }

            .fill {
                min-height: 100%;
                height: 100%;
            }

            .header {
                padding: 10px 0;
                background-color: #fff;
                border-bottom: 2px solid #e3e3e3;
            }

            #chart-pane {
                color: #fff;
                background-color: #3d3d3d;
            }

            #chart {
                width: 100%;
            }

            #code-pane {
                color: #fff;
                background-color: #4f4f4f;
            }

            #code-pane pre {
                background-color: inherit;
                border: none;
            }
        </style>
    </head>
    <body>

        <div class="container-fluid fill">
            @yield('content')
        </div>

        <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.10.0/highlight.min.js"></script>

        <script>hljs.initHighlightingOnLoad();</script>

    </body>
</html>
