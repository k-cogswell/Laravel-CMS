<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {

    protected $fillable = [

        'name',
        'title',
        'description',
        'HTML',
        'all_pages',
        'page',
        'content_area',
        'created_by',
        'modified_by'

    ];

    public function page()
    {
     return $this->belongsTo('App\Page', 'name');
    }

    public function contentarea(){
        return $this->belongsTo('App\ContentArea', 'page', 'name');
    }

    public function user()
    {
        return$this->belongsTo('\App\User');
    }

}
