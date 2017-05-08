<?php

namespace Prueba\Repositories;

use Prueba\User;
use Prueba\Task;
use Prueba\Directorio;

class TaskRepository
{
    public function forUser(User $user)
    {
        return Task::where('user_id',$user->id)
            ->orderBy('created_at','des')
            ->get();
    }
}
