<?php

namespace Koka\Bootstrap3Bundle;

class App extends \PHPixie\DefaultBundle
{
    protected function buildBuilder($frameworkBuilder)
    {
        return new Builder($frameworkBuilder);
    }
}
