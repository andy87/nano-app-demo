<?php

namespace app\components\Items;

/**
 *
 */
class Link
{
    /**
     * @param string $href
     * @param string $text
     */
    public function __construct(
        public string $href,
        public string $text,
    ){

    }

}