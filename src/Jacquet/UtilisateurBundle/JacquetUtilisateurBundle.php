<?php

namespace Jacquet\UtilisateurBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class JacquetUtilisateurBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
