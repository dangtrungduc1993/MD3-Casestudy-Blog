<?php

namespace App\Repositories;

use App\Models\Category;
use App\Repositories\Impl\BaseInterface;

class CategoryRepository extends BaseRepository
{

    public function getModel()
    {
        return Category::class;
    }
}
