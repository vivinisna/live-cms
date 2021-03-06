<?php

namespace App\liveCMS\Controllers\Backend;

use App\liveCMS\Controllers\BackendController;
use App\liveCMS\Models\Setting as Model;

class SettingController extends BackendController
{
    public function __construct(Model $model, $base = 'setting')
    {
        parent::__construct($model, $base);
        $this->breadcrumb2Icon  = 'cog';
        $this->fields           = array_except($this->model->getFields(), ['id']);
        
        $this->view->share();
    }

    public function redirectTo()
    {
        $url = action($this->baseClass.'@index');

        $segments = explode('/', trim($url, '/'));

        $path = array_pop($segments);

        $adminSlug  = globalParams('slug_admin', config('livecms.slugs.admin'));

        return redirect($adminSlug.'/'.$path);
    }
}
