<?php

/*
 * This file is part of the RzOAuthBundle package.
 *
 * (c) mell m. zamora <mell@rzproject.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Rz\OAuthBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Rz\OAuthBundle\DependencyInjection\Compiler\TemplateCompilerPass;
use Rz\OAuthBundle\DependencyInjection\Compiler\OverrideServiceCompilerPass;

class RzOAuthBundle extends Bundle
{
    /**
     * {@inheritDoc}
     */
    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(new OverrideServiceCompilerPass());
        $container->addCompilerPass(new TemplateCompilerPass());
    }
}

