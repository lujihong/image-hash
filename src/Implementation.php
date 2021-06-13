<?php

namespace Lujihong\ImageHash;

use Intervention\Image\Image;

interface Implementation
{
    public function hash(Image $image): Hash;
}
