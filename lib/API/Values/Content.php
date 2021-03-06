<?php

namespace Netgen\EzPlatformSiteApi\API\Values;

use eZ\Publish\API\Repository\Values\ValueObject;

/**
 * Site Content object represents eZ Platform Repository Content object in a current version
 * and specific language.
 *
 * Corresponds to eZ Platform Repository Content object.
 * @see \eZ\Publish\API\Repository\Values\Content\Content
 *
 * @property-read string|int $id
 * @property-read string $name
 * @property-read string|int $mainLocationId
 * @property-read \Netgen\EzPlatformSiteApi\API\Values\ContentInfo $contentInfo
 * @property-read \eZ\Publish\API\Repository\Values\Content\VersionInfo $versionInfo
 * @property-read \Netgen\EzPlatformSiteApi\API\Values\Field[] $fields
 * @property-read \eZ\Publish\API\Repository\Values\Content\Content $innerContent
 */
abstract class Content extends ValueObject
{
    /**
     * Returns if content has the field with the given field definition $identifier.
     *
     * @param string $identifier
     *
     * @return bool
     */
    abstract public function hasField($identifier);

    /**
     * Return Field object for the given field definition $identifier, or null if not found.
     *
     * @param string $identifier
     *
     * @return null|\Netgen\EzPlatformSiteApi\API\Values\Field
     */
    abstract public function getField($identifier);

    /**
     * Returns if content has the field with the given field $id.
     *
     * @param string|int $id
     *
     * @return bool
     */
    abstract public function hasFieldById($id);

    /**
     * Return Field object for the given field $id, or null if not found.
     *
     * @param string|int $id
     *
     * @return null|\Netgen\EzPlatformSiteApi\API\Values\Field
     */
    abstract public function getFieldById($id);

    /**
     * Returns a field value for the given field definition identifier, or null if not found.
     *
     * @param string $identifier
     *
     * @return null|\eZ\Publish\SPI\FieldType\Value
     */
    abstract public function getFieldValue($identifier);

    /**
     * Returns a field value for the given field $id, or null if not found.
     *
     * @param string $id
     *
     * @return null|\eZ\Publish\SPI\FieldType\Value
     */
    abstract public function getFieldValueById($id);
}
