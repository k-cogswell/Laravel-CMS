<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class CSS extends Model {
    protected $table = 'css_template';


    protected $fillable = [

        'name',
        'content',
        'description',
        'active',
        'created_by',
        'modified_by'

    ];
}
