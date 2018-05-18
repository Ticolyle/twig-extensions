<?php

namespace modules\twigextensionsmodule\twigextensions;

use modules\twigextensionsmodule\traits\TwigExtensionsTrait;
use Twig\Extension\AbstractExtension;

class DumpDieExtension extends AbstractExtension
{
    use TwigExtensionsTrait;

    /**
     * @return string
     */
    public function getName()
    {
        return 'Dump and Die';
    }

    /**
     * @return array|\Twig_Function[]
     */
    public function getFunctions()
    {
        return [
            $this->addFunction('d'),
            $this->addFunction('dd')
        ];
    }

    /**
     * Dump
     */
    public function d()
    {
        call_user_func_array('dump', func_get_args());
    }

    /**
     * Dump and die
     */
    public function dd()
    {
        call_user_func_array('dump', func_get_args());
        die();
    }
}