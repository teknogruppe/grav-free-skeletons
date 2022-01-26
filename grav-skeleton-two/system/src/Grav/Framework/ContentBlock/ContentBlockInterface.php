<?php
/**
 * @package    Grav\Framework\ContentBlock
 *
 * @copyright  Copyright (C) 2015 - 2018 Trilby Media, LLC. All rights reserved.
 * @license    MIT License; see LICENSE file for details.
 */

namespace Grav\Framework\ContentBlock;

/**
 * ContentBlock Interface
 * @package Grav\Framework\ContentBlock
 */
interface ContentBlockInterface extends \Serializable
{
    /**
     * @param string $id
     * @return static
     */
    public static function create($id = null);

    /**
     * @param array $serialized
     * @return ContentBlockInterface
     */
    public static function fromArray(array $serialized);

    /**
     * @param string $id
     */
    public function __construct($id = null);

    /**
     * @return string
     */
    public function getId();

    /**
     * @return string
     */
    public function getToken();

    /**
     * @return array
     */
    public function toArray();

    /**
     * @return string
     */
    public function toString();

    /**
     * @return string
     */
    public function __toString();

    /**
     * @param array $serialized
     */
    public function build(array $serialized);

    /**
     * @param string $content
     * @return $this
     */
    public function setContent($content);

    /**
     * @param ContentBlockInterface $block
     * @return $this
     */
    public function addBlock(ContentBlockInterface $block);
}
