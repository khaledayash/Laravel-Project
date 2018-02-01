<?php

namespace Forum;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

    public function user(){
        return $this->belongsTo('Forum\User');
    }

    protected $fillable =[
        'titel','content','categorie','comments','clicked','checked','user_id'
    ];
}

