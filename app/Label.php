<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Todo;

class Label extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama', 'deskripsi'
    ];

    public function todo()
    {
        return $this->belongsToMany(Todo::class, 'todo_label')->withTimestamps();
    }
}
