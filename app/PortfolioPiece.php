<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class PortfolioPiece extends Model {
    protected $table = 'portfolio_piece';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user', 'title', 'caption', 'content_title_1', 'content_text_1',
                        'content_title_2', 'content_text_2', 'content_title_3', 'content_text_3',
                        'content_title_4', 'content_text_4', 'info_title_1', 'info_text_1', 'info_title_2',
                        'info_text_2', 'extra_1', 'extra_2', 'extra_3', 'extra_4'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['id'];
}
