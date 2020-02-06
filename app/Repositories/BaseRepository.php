<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\BaseRepositoryInterface;

/**
 * Class EloquentBaseRepository
 *
 * @package App\Repositories
 */
abstract class BaseRepository implements BaseRepositoryInterface
{
    /**
     * @var \Illuminate\Database\Eloquent\Model An instance of the Eloquent Model
     */
    protected $model;

    /**
     * @param Model $model
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * @inheritdoc
     */
    public function find($id, array $relation = [])
    {
        return $this->model->with($relation)->find($id);
    }

    /**
     * @inheritdoc
     */
    public function all(array $relation = [])
    {
        return $this->model->with($relation)->orderBy('created_at', 'DESC')->get();
    }

    /**
     * @inheritdoc
     */
    public function allWithBuilder() : Builder
    {
        return $this->model->query();
    }

    /**
     * @inheritdoc
     */
    public function paginate($perPage = 15, array $relation = [])
    {
        return $this->model->orderBy('created_at', 'DESC')->with($relation)->paginate($perPage);
    }

    /**
     * @inheritdoc
     */
    public function create($data)
    {
        return $this->model->create($data);
    }

    /**
     * @inheritdoc
     */
    public function update($model, $data)
    {
        $model->update($data);

        return $model;
    }

    /**
     * @inheritdoc
     */
    public function destroy($model)
    {
        return $model->delete();
    }

    /**
     * @inheritdoc
     */
    public function findByAttributes(array $attributes)
    {
        $query = $this->buildQueryByAttributes($attributes);

        return $query->first();
    }

    /**
     * @inheritdoc
     */
    public function getByAttributes(array $attributes, $orderBy = null, $sortOrder = 'asc')
    {
        $query = $this->buildQueryByAttributes($attributes, $orderBy, $sortOrder);

        return $query->get();
    }

    /**
     * Build Query to catch resources by an array of attributes and params
     * @param  array $attributes
     * @param  null|string $orderBy
     * @param  string $sortOrder
     * @return \Illuminate\Database\Eloquent\Builder
     */
    private function buildQueryByAttributes(array $attributes, $orderBy = null, $sortOrder = 'asc')
    {
        $query = $this->model->query();

        foreach ($attributes as $field => $value) {
            $query = $query->where($field, $value);
        }

        if (null !== $orderBy) {
            $query->orderBy($orderBy, $sortOrder);
        }

        return $query;
    }

    /**
     * @inheritdoc
     */
    public function findByMany(array $ids)
    {
        $query = $this->model->query();

        return $query->whereIn("id", $ids)->get();
    }

    /**
     * @inheritdoc
     */
    public function clearCache()
    {
        return true;
    }

    public function findByName($value, array $relation = [])
    {
        return $this->model->where('name', 'LIKE', "%$value%")->with($relation)->get();
    }
}
