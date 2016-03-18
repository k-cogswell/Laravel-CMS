<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ContentArea extends Model {

    protected $fillable = [

        'name',
        'alias',
        'description',
        'order',
        'created_by',
        'modified_by'

    ];

    public function articles()
    {
        return $this->hasMany('App\Article', 'content_area', 'name');
    }

}
