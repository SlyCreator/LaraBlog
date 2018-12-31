<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Post extends Model
{
    protected $fillable = [
        'post_title',
        'body',
        'author_id',
        'image',
        'category_id',
    ];
    public function category(){
        return $this->belongsTo('App\Category');
    }
    
    public function author_id(){
        return $this->belongsTo('App\User');
    }
}