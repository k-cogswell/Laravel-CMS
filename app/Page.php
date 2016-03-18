<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model {

protected $fillable = [

    'name',
    'alias',
    'description',
    'created_by',
    'modified_by'

];

    public function articles()
    {
        return $this->hasMany('App\Article', 'page', 'name');
    }

}
