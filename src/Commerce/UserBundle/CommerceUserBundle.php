<?php

namespace Commerce\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class CommerceUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
