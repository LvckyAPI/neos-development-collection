<?php
namespace Neos\Fusion\FusionObjects\Internal;

/*
 * This file is part of the Neos.Fusion package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Fusion\FusionObjects\AbstractArrayFusionObject;
use Neos\Fusion\FusionObjects\Helpers\LazyProps;

/**
 * @internal
 */
class PrivateComponentPropsImplementation extends AbstractArrayFusionObject
{
    /**
     * @return ?PrivateComponentPropsDto
     */
    public function evaluate()
    {
        $sortedChildFusionKeys = $this->preparePropertyKeys($this->properties, $this->ignoreProperties);
        if ($sortedChildFusionKeys === []) {
            return null;
        }
        return new PrivateComponentPropsDto($this->path, $sortedChildFusionKeys);
    }
}
