<?php

use Intervention\Image\Exception\NotReadableException;
use Lujihong\ImageHash\ImageHash;
use PHPUnit\Framework\TestCase;

class ImageHashTest extends TestCase
{
    /**
     * @var ImageHash
     */
    private $imageHash;

    public function setup(): void
    {
        $this->imageHash = new ImageHash();
    }

    public function testHashInvalidFile()
    {
        $this->expectException(NotReadableException::class);

        $this->imageHash->hash('nonImageString');
    }
}
