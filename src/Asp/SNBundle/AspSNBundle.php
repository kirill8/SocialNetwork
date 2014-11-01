<?php

namespace Asp\SNBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AspSNBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
