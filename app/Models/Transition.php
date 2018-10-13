<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transition extends Model
{
    protected $guarded = ['id'];
    protected $table = 'transition';
    protected $fillable = ['transition_name', 'transition_type', 'transition_amt', 'plus_or_minus', 'created_at', 'n_or_sp'];
}