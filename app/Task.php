<?php

namespace Prueba;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
  protected $fillable = [
    'name',
    'type_id',
    'phone',
    'email'
  ];

  public function user()
  {
    return $this->belongsTo(User::class);
  }
}
