<?php

namespace system\lib\imageManager\Imagick\Commands;

class SharpenCommand extends \system\lib\imageManager\Commands\AbstractCommand
{
    /**
     * Sharpen image
     *
     * @param  \system\lib\imageManager\Image $image
     * @return boolean
     */
    public function execute($image)
    {
        $amount = $this->argument(0)->between(0, 100)->value(10);

        return $image->getCore()->unsharpMaskImage(1, 1, $amount / 6.25, 0);
    }
}
