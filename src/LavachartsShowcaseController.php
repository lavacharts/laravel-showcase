<?php

namespace Khill\Lavacharts\Laravel\Showcase;

use Illuminate\Routing\Controller as BaseController;
// use Khill\Lavacharts\Laravel\LavachartsFacade as Lava;

class LavachartsShowcaseController extends BaseController
{
    public function showChart($type)
    {
        $lava = app('lavacharts');
        $title = ucfirst($type) . 'Chart';
        $width  = 600;
        $height = floor($width*(6/19));

        $chartPath = __DIR__ . "/../src/charts/{$title}.php";

        if (!file_exists($chartPath)) {
            throw new \Exception("{$title} not found!");
        }

        require $chartPath;

        return \View::make('lavacharts::chart', [
            'title' => $title
        ]);
    }
}
