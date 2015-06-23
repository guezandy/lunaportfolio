<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Home extends Model {
    protected $table = 'home';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = ['user_id', 'title', 'caption', 'image_id', 'video_url',
        'extra_1', 'extra_2'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['id'];
}
