<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class SkillSlider extends Model {
    protected $table = 'skill_slider';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = ['user', 'skill_title', 'skill_caption',
                          'value', 'extra_1'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['id'];
}
