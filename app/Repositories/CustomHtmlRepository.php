<?php

namespace App\Repositories;

use App\Models\CustomHtml;
use App\Repositories\Contracts\CustomHtmlRepositoryInterface;

class CustomHtmlRepository extends BaseRepository implements CustomHtmlRepositoryInterface
{
    public function __construct(CustomHtml $model)
    {
        parent::__construct($model);
    }
}
