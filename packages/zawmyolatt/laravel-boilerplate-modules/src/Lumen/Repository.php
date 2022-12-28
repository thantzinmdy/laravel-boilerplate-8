<?php

namespace Zawmyolatt\Modules\Lumen;

use Zawmyolatt\Modules\Json;
use Zawmyolatt\Modules\Repository as BaseRepository;

class Repository extends BaseRepository
{
    /**
     * {@inheritdoc}
     */
    protected function createModule(...$args)
    {
        return new Module(...$args);
    }
}
