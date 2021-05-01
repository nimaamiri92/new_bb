<?php


namespace App\Repositories\Admin;

use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;

class OrderRepository extends BaseRepository
{
    public function __construct(Model $model)
    {
        parent::__construct($model);
    }
}
