<?php

/*
 * This file is part of the Neos.ContentRepository package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

declare(strict_types=1);

namespace Neos\ContentRepository\Feature\Common\Exception;

use Neos\Flow\Annotations as Flow;

/**
 * The exception to be thrown if a node aggregate's type is ambiguous
 */
#[Flow\Proxy(false)]
final class NodeAggregatesTypeIsAmbiguous extends \DomainException
{
}
