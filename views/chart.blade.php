<!DOCTYPE html>
<html>
    <head>
        <title>Lavacharts Examples</title>
        <style type="text/css">
            h1, h2 {font-family:Helvetica,Verdana,sans-serif;}
            #logo{text-align:center}
            #lavachart{width:99%}
            .float{float:left;padding:0 20px;margin-left:20px;}
            .grey{background-color:#f3f3f3;border:1px solid #666}
            ul{list-style-type:none;margin:0;padding:0}li{font:200 16px/1.5 Helvetica,Verdana,sans-serif;border-bottom:1px solid #ccc}li:last-child{border:none}li a{text-decoration:none;color:#000;display:block;width:200px;-webkit-transition:font-size .2s ease,background-color .2s ease;-moz-transition:font-size .2s ease,background-color .2s ease;-o-transition:font-size .2s ease,background-color .2s ease;-ms-transition:font-size .2s ease,background-color .2s ease;transition:font-size .2s ease,background-color .2s ease}li a:hover{font-size:18px;background:#f6f6f6}
        </style>
    </head>
    <body>
        @include('lavacharts::partials.logo')

        <h1>{{ $title }} Example</h1>
        <div id="chart"></div>

        {!! \Lava::render($type, $lable, 'chart') !!}
    </body>
</html>

