<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model {
    protected $table = 'about';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user', 'first_title', 'first_caption', 'second_title', 'second_caption',
                          'third_title', 'third_caption', 'extra_1', 'extra_2'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['id'];
}
