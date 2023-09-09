<?php

namespace Khairul\Fm;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Task extends Model
{
    protected $table = 'tasks';

    protected $fillable = [
        'name',
    ];
}
