<?php

namespace Khill\Lavacharts\Laravel\Showcase;

use Lava;
use View;
use Exception;
use Illuminate\Routing\Controller as BaseController;

class LavachartsShowcaseController extends BaseController
{
    public function welcome()
    {
        return View::make('lavacharts::welcome', [
            'charts' => $this->getChartTypes()
        ]);
    }

    public function demos()
    {
        return View::make('lavacharts::demos');
    }

    public function showChart($type)
    {
        if ($type == 'wordtree') {
            $type = 'wordTree';
        }

        $type = ucfirst($type) . 'Chart';

        $chartPath = __DIR__ . "/../src/charts/{$type}.php";

        if ( ! file_exists($chartPath)) {
            throw new Exception("{$type} not found!");
        }

        $title  = md5_file($chartPath);
        // $width  = 600;
        // $height = floor($width*(6/19));

        require $chartPath;

        $chartCode = file_get_contents($chartPath);
        $chartCode = str_replace('<?php', '', $chartCode);

        return View::make('lavacharts::chart', [
            'logo'  => $this->getLogo(),
            'type'  => $type,
            'title' => $title,
            'code'  => $chartCode
        ]);
    }

    private function getChartTypes()
    {
        $chartPath = __DIR__.'/charts/';

        $charts = array_diff(scandir($chartPath), ['.', '..']);

        return array_map(function ($chart) {
            return strtolower(str_replace('Chart.php', '', $chart));
        }, $charts);
    }

    private function getLogo()
    {
        $logoPath = __DIR__.'/../resources/assets/images/Lavacharts600px.gif';

        $type = pathinfo($logoPath, PATHINFO_EXTENSION);
        $data = file_get_contents($logoPath);

        return 'data:image/' . $type . ';base64,' . base64_encode($data);
    }
}
