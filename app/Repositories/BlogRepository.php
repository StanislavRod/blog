<?php
/**
 * Created by PhpStorm.
 * User: pavel
 * Date: 18.03.2019
 * Time: 14:17
 */

namespace App\Repositories;

use App\Models\Blog as Model;

class BlogRepository extends BaseRepository
{
    protected $modelName = Model::class;

    public function forSelectBox()
    {
        return $this->getModelInstance()->get()->pluck('title', 'id');
    }

    public function all()
    {
        return $this->getModelInstance()::isPublish()->limit(5)->with('category')->get();
    }
}
