<?php

namespace App\Models;

use App\liveCMS\Models\BaseModel;

class Tag extends BaseModel
{
    protected $fillable = ['tag', 'slug'];

    public function rules()
    {
        $this->slugify('tag');

        return [
            'tag' => $this->uniqify('tag'),
            'slug' => $this->uniqify('slug'),
        ];
    }
}
