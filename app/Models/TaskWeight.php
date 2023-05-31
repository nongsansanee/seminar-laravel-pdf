<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskWeight extends Model
{
    use HasFactory;
    public function t_main()
    {
        return $this->belongsTo(Task::class,'task_id_main');
    }
    public function s_main()
    {
        return $this->belongsTo(Task::class,'task_id_share');
    }
}
