<?php

namespace Hermko\Containers;

use Plenty\Plugin\Templates\Twig;

class HermkoContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('Hermko::Stylesheet');
    }
}
