<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issues extends Model
{
    protected $fillable = [
        'Trackerid','Priorityid','Statusid','users','subject','description'
    ];
}
