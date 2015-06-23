<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model {
    protected $table = 'skill';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = ['user', 'icon', 'image_id', 'title', 'caption',
        'extra_1', 'extra_2'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['id'];
}
