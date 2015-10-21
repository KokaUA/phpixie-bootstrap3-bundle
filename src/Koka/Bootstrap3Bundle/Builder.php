<?php

namespace Koka\Bootstrap3Bundle;

class Builder extends \PHPixie\DefaultBundle\Builder
{
    protected function getRootDirectory()
    {
        return realpath(__DIR__.'/../../../');
    }
    
    public function bundleName()
    {
        return 'bootstrap3Bundle';
    }
}
