<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class PortfolioCategory extends Model {
    protected $table = 'portfolio_category';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user', 'name', 'extra_1'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['id'];
}
