<?php

namespace app\Components\Web;

use app\components\Items\Link;

class Controller extends \nano\Components\Web\Controller
{
    /**
     * @return void
     */
    public function init(): void
    {
        View::$links[] = $this->addLink('/', 'Home');
        View::$links[] = $this->addLink('/info', 'Info');
    }

    /**
     * @param string $href
     * @param string $text
     * @return Link
     */
    private function addLink( string $href, string $text ): Link
    {
        return new Link($href, $text);
    }
}