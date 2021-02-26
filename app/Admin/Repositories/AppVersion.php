<?php

namespace App\Admin\Repositories;

use App\Models\AppVersion as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class AppVersion extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
