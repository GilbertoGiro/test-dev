<?php

namespace App\Repository;

use Illuminate\Database\Eloquent\Model;

abstract class AbstractRepository
{
    /**
     * @var Model
     */
    protected $model;

    /**
     * AbstractRepository constructor.
     *
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * Method to get all Model Objects
     *
     * @return \Illuminate\Database\Eloquent\Collection|Model[]
     */
    public function all()
    {
        return $this->model->all();
    }

    /**
     * Method to get Model Object by id
     *
     * @param integer $id
     * @return mixed
     */
    public function find(int $id)
    {
        return $this->model->find($id);
    }

    /**
     * Method to get Model Object by passed Params
     *
     * @param array $data
     * @return mixed
     */
    public function findBy(array $data)
    {
        $return = $this->model->all();
        foreach ($data as $key => $value) {
            if (is_array($value)) {
                $return = $return->whereIn($key, $value);
                continue;
            }
            $return = $return->where($key, $value);
        }
        return $return->first();
    }

    /**
     * Method to get Model Objects by passed between dates
     *
     * @param string $key
     * @param array $value
     * @return mixed
     */
    public function whereBetween(string $key, array $value)
    {
        return $this->model::whereBetween($key, $value);
    }

    /**
     * Method to get Model Object with Relations
     *
     * @param array $relations
     * @param int $id
     * @return \Illuminate\Database\Eloquent\Builder|Model|null|object
     */
    public function with(array $relations, int $id = null)
    {
        if ($id) {
            return $this->model::with($relations)->where('id', $id)->first();
        }
        return $this->model::with($relations);
    }

    /**
     * Method to get passed Model Objects Attributes
     *
     * @param string $columns
     * @return mixed
     */
    public function select($columns = '*')
    {
        return $this->model->select($columns);
    }

    /**
     * Method to Create Model Object
     *
     * @param array $data
     * @return mixed
     */
    public function create(array $data)
    {
        return $this->model->create($data);
    }

    /**
     * Method to Get the first occurrence or Create an Model Object if that doesn't exists
     *
     * @param array $condition
     * @param array $data
     * @return mixed
     */
    public function firstOrCreate(array $condition, array $data)
    {
        return $this->model->firstOrCreate($condition, $data);
    }

    /**
     * Method to Get the first occurrence or Create an Model Object if that doesn't exists
     *
     * @param array $condition
     * @param array $data
     * @return mixed
     */
    public function firstOrNew(array $condition, array $data)
    {
        return $this->model->firstOrNew($condition, $data);
    }

    /**
     * Method to update Model Object
     *
     * @param array $data
     * @param int $id
     * @return mixed
     */
    public function update(array $data, int $id)
    {
        return $this->model->find($id)->update($data);
    }

    /**
     * Method to delete Model Object
     *
     * @param int $id
     * @return mixed
     */
    public function delete(int $id)
    {
        return $this->model->find($id)->delete();
    }

    /**
     * Method to get Model Objects count
     *
     * @return mixed
     */
    public function count()
    {
        return $this->model->count();
    }

    /**
     * Method to get Model Object Attributes
     *
     * @return array
     */
    public function getFillable()
    {
        return $this->model->getFillable();
    }

    /**
     * Method to get Model Table
     *
     * @return string
     */
    public function getTable()
    {
        return $this->model->getTable();
    }
}
