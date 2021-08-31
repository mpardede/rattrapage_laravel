<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasTimestamps;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    use HasTimestamps;

    protected $table = 'tasks';
    protected $fillable = ['id', 'tittle', 'description', 'complete', 'created_at', 'updated_at'];
}
