<?php

namespace Commerce\HwiconnexionBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class CommerceHwiconnexionBundle extends Bundle
{
    public function getParent()
    {
        return 'HWIOAuthBundle';
    }
}
