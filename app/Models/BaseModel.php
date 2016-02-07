<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\liveCMS\Models\BaseModelTrait;
use App\liveCMS\Models\ModelAuthorizationTrait;
use App\liveCMS\Models\BaseModelInterface as BaseModelContract;
use App\liveCMS\Models\ModelAuthorizationInterface as ModelAuthorizationContract;

abstract class BaseModel extends Model implements BaseModelContract, ModelAuthorizationContract
{
    use BaseModelTrait, ModelAuthorizationTrait;

    protected $dependencies = [];

    protected $rules = [];

    protected $aliases = [];

    protected $addition = [];

    protected $deletion = [];
}