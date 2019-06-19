<?php
/**
 * Created by PhpStorm.
 * User: pavel
 * Date: 18.03.2019
 * Time: 14:17
 */

namespace App\Repositories;


use App\Admin\Models\AdminUser;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Redis;


abstract class BaseRepository
{
    public static $items = [];
    protected $modelName = null;
    protected $modelInstance = null;
    protected $cached_data = [];

    public function __construct()
    {
        $this->modelInstance = app()->make($this->modelName);
    }

    /**
     * @return Builder
     */
    public function getModelInstance()
    {
        return clone $this->modelInstance;
    }


    public function find($id)
    {
        if (!isset(static::$items[$id])) {
            return static::$items[$id] = $this->getModelInstance()->find($id);
        }
        return static::$items[$id];
    }

    public function findWithoutScopes($id)
    {
        if (!isset(static::$items[$id])) {
            return static::$items[$id] = $this->getModelInstance()->withoutGlobalScopes()->find($id);
        }
        return static::$items[$id];
    }
}
