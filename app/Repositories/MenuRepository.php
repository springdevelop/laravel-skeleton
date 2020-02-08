<?php

namespace App\Repositories;

use App\Models\Menu;
use App\Repositories\Contracts\MenuRepositoryInterface;

class MenuRepository extends BaseRepository implements MenuRepositoryInterface
{
    public function __construct(Menu $model)
    {
        parent::__construct($model);
    }
}
