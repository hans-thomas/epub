<?php

namespace Epubli\Epub\Spine;

use Epubli\Common\Enum\InternetMediaType;

/**
 * An item of the EPUB spine.
 *
 * @author Simon Schrape <simon@epubli.com>
 */
class Item
{
    /** @var string */
    private $id;
    /** @var string */
    private $href;
    /** @var InternetMediaType */
    private $mediaType;

    /**
     * @param string $id
     * @param string $href
     * @param string|InternetMediaType $mediaType
     */
    public function __construct($id, $href, $mediaType = InternetMediaType::XHTML)
    {
        $this->id = $id;
        $this->href = $href;
        $this->mediaType = new InternetMediaType((string)$mediaType);
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getHref()
    {
        return $this->href;
    }

    /**
     * @return InternetMediaType
     */
    public function getMediaType()
    {
        return $this->mediaType;
    }
}
