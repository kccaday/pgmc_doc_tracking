<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Text extends Model
{
    protected $table = 'pgmc_text_main_tbl';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'afpsn', 
        'last_name',
        'first_name',
        'middle_name',
        'pension_rank'
    ];
}
