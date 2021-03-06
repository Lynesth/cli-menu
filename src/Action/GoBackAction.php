<?php

namespace PhpSchool\CliMenu\Action;

use PhpSchool\CliMenu\CliMenu;

/**
 * @author Aydin Hassan <aydin@hotmail.co.uk>
 */
class GoBackAction
{
    public function __invoke(CliMenu $menu) : void
    {
        if ($parent = $menu->getParent()) {
            $menu->close();
            $parent->open();
        }
    }
}
