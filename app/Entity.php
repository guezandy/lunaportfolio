<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Entity extends Model {
    protected $table = 'entity';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user', 'company_logo', 'company_name', 'slogan', 'facebook',
                          'linkedin', 'dribble', 'twitter', 'instagram', 'email', 'github',
                          'behance', 'extra_1', 'extra_2', 'website'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['id'];
}
