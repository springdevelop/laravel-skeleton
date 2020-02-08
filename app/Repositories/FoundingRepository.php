<?php

namespace App\Repositories;

use App\Models\Founding;
use App\Repositories\Contracts\FoundingRepositoryInterface;

class FoundingRepository extends BaseRepository implements FoundingRepositoryInterface
{
    public function __construct(Founding $model)
    {
        parent::__construct($model);
    }
}
