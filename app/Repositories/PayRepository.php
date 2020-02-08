<?php

namespace App\Repositories;

use App\Models\Pay;
use App\Repositories\Contracts\PayRepositoryInterface;

class PayRepository extends BaseRepository implements PayRepositoryInterface
{
    public function __construct(Pay $model)
    {
        parent::__construct($model);
    }
}
