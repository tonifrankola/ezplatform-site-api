<?php

namespace Netgen\Bundle\EzPlatformSiteApiBundle\View;

use eZ\Publish\Core\MVC\Symfony\View\ContentValueView as BaseContentValueView;

interface ContentValueView extends BaseContentValueView
{
    /**
     * Returns the Site Content.
     *
     * @return \Netgen\EzPlatformSiteApi\API\Values\Content
     */
    public function getSiteContent();

    /**
     * Returns the Site Location.
     *
     * @return \Netgen\EzPlatformSiteApi\API\Values\Location
     */
    public function getSiteLocation();
}
