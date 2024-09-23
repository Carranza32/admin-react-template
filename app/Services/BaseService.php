<?php

namespace App\Services;

use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

class BaseService
{
    protected $repository;

    public function __construct(Model $model)
    {
        $this->repository = new BaseRepository($model);
    }

    public function getAll(): Collection
    {
        return $this->repository->getAll();
    }

    public function findById($id): ?Model
    {
        return $this->repository->findById($id);
    }

    public function create(array $attributes): Model
    {
        return $this->repository->create($attributes);
    }

    public function createMassive(array $data): bool
    {
        return $this->repository->createMassive($data);
    }

    public function update(Model $model, array $attributes): bool
    {
        return $this->repository->update($model, $attributes);
    }

    public function delete(Model $model): bool
    {
        return $this->repository->delete($model);
    }
}
