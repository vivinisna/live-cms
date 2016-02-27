<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\BackendController;
use App\Models\Artikel;
use App\Models\Permalink as Model;
use App\Models\StaticPage;

class PermalinkController extends BackendController
{
    public function __construct(Model $model, $base = 'permalink')
    {
        parent::__construct($model, $base);

        $edited = ['title' => 'Title', 'postable_type' => 'Tipe', 'postable_id' => 'ID'];
        
        $this->breadcrumb2Icon  = 'link';
        $this->fields           = array_merge(array_except($this->model->getFields(), ['id']), $edited);
        $this->withoutAddButton = true;
        
        $this->view->share();

    }

    protected function beforeDatatables($datas)
    {
        return $datas->with($this->model->dependencies());
    }

    protected function processDatatables($datatables)
    {
        return $datatables
            ->editColumn('postable_type', function ($data) {
                return $data->type;
            })
            ->addColumn('title', function ($data) {
                return
                    $data->postable->judul.
                    ' <a href="'.action('Backend\\'.$data->type.'Controller@getEdit', ['id' => $data->postable->id]).
                    '"><i class="fa fa-pencil"></i></a>';
            });
    }
}