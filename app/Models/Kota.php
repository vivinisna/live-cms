<?php

namespace App\Models;

class Kota extends BaseModel
{
    protected $fillable = ['kota', 'tipe', 'propinsi_id'];

    protected $dependencies = ['propinsi'];

    public function rules()
    {
        return [
            'kota' => 'required',
            'tipe' => 'required',
        ];
    }

    public function propinsi()
    {
        return $this->belongsTo(Propinsi::class);
    }

    public function kecamatan()
    {
        return $this->hasMany(Kecamatans::class);
    }
}