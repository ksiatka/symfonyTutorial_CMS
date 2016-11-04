<?php

namespace Polcode\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class PolcodeUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
