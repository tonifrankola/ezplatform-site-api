<?php

namespace Netgen\EzPlatformSiteApi\API\Values;

use eZ\Publish\API\Repository\Values\ValueObject;

/**
 * Site Location represents location of Site Content object in the content tree.
 *
 * Corresponds to eZ Platform Repository Location object.
 * @see \eZ\Publish\API\Repository\Values\Content\Location
 *
 * @property-read int|string $id
 * @property-read int $status
 * @property-read int $priority
 * @property-read bool $hidden
 * @property-read bool $invisible
 * @property-read string $remoteId
 * @property-read int|string $parentLocationId
 * @property-read string $pathString
 * @property-read int[] $path
 * @property-read int $depth
 * @property-read int $sortField
 * @property-read int $sortOrder
 * @property-read int|string $contentId
 * @property-read \eZ\Publish\API\Repository\Values\Content\Location $innerLocation
 * @property-read \Netgen\EzPlatformSiteApi\API\Values\ContentInfo $contentInfo
 */
abstract class Location extends ValueObject
{
}
