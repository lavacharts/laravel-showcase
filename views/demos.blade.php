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

        <div class="float">
            <h1>Charts</h1>
            <ul>
            <?php
                foreach (ChartFactory::getChartTypes() as $chartType) {
                    echo sprintf('<li><a href="%1$s">%1$s</a></li>', $chartType);
                }
            ?>
            </ul>
        </div>

        <div class="float">
            <h1>Dashboards</h1>
            <ul>
                <li><a href="OneToOne">One to One</a></li>
                <li><a href="OneToMany">One to Many</a></li>
                <li><a href="ManyToOne">Many to One</a></li>
                <li><a href="ManyToMany">Many to Many</a></li>
                <li><a href="OneToOneDateFilter">One to One [DateFilter]</a></li>
            </ul>
        </div>
    </body>
</html>

