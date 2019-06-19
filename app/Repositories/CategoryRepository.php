<?php
/**
 * Created by PhpStorm.
 * User: pavel
 * Date: 18.03.2019
 * Time: 14:17
 */

namespace App\Repositories;

use App\Models\Category as Model;

class CategoryRepository extends BaseRepository
{
    protected $modelName = Model::class;

    public function forSelectBox()
    {
        return $this->getModelInstance()->get()->pluck('title','id');
    }
}
