<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TesteDragDropStatus extends Model
{
    use HasFactory;

    protected $table = 'teste_drag_drop_status';

    public function tasks()
    {
        return $this->hasMany(TesteDragDropTask::class, 'teste_drag_drop_status_id');
    }
}
