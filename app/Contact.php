<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model {
    protected $table = 'contact';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = ['user', 'first_title', 'first_caption', 'second_title', 'second_caption',
                           'email', 'phone', 'address', 'latitude', 'longitude', 'extra_1', 'extra_2'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['id'];
}
