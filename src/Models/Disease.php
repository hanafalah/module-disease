<?php

namespace Gii\ModuleDisease\Models;

use Gii\ModuleDisease\Resources\Disease\ViewDisease;
use Illuminate\Database\Eloquent\SoftDeletes;
use Zahzah\LaravelHasProps\Concerns\HasProps;
use Zahzah\LaravelSupport\Models\BaseModel;

class Disease extends BaseModel {
    use HasProps, SoftDeletes;

    protected $list  = ['id','name','local_name','code','version','classification_disease_id','props'];
    protected $show  = [];

    protected $casts = [
        'name' => 'string',
        'local_name' => 'string',
        'code' => 'string'
    ];

    public function toViewApi(){
        return new ViewDisease($this);
    }

    public function classificationDisease(){
        return $this->belongsToModel('ClassificationDisease');
    }
}
