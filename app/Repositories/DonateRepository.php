<?php

namespace App\Repositories;

use App\Models\Donate;
use App\Repositories\Contracts\DonateRepositoryInterface;

class DonateRepository extends BaseRepository implements DonateRepositoryInterface
{
    public function __construct(Donate $model)
    {
        parent::__construct($model);
    }
}
