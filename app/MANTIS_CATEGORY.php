<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MANTIS_CATEGORY extends BaseModelMantis
{
    protected $table = 'mantis_category_table';
    protected $guarded = ['id'];
    public function BUG(){
        return $this->hasMany('App\MANTIS_BUG', 'category_id', 'id');
    }
}
