<?php

namespace tpext\builder\ueditor\common;

use tpext\common\Resource as baseResource;

class Resource extends baseResource
{
    protected $version = '1.0.1';

    protected $name = 'builder.ueditor';

    protected $title = 'ueditor资源包';

    protected $description = '提供[ueditor]相关样式资源';

    protected $root = __DIR__ . '/../../';

    protected $assets = 'assets';
}
