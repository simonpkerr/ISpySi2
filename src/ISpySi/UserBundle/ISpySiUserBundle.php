<?php

namespace ISpySi\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ISpySiUserBundle extends Bundle
{
    public function getParent(){
        return 'FOSUserBundle';
    }
}
