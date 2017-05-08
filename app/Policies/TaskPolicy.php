<?php

namespace Prueba\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Prueba\User;
use Prueba\Task;

class TaskPolicy
{
    use HandlesAuthorization;

    public function owner(User $user, Task $task){
      return $user->id;
    }
}
