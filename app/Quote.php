<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model {
    protected $table = 'quote';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = ['user', 'text', 'author',
                          'extra_1', 'extra_2'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['id'];
}
