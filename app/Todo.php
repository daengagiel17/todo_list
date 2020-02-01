<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Label;

class Todo extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'judul', 'gambar', 'detail'
    ];

    public function label()
    {
        return $this->belongsToMany(Label::class, 'todo_label')->withTimestamps();
    }
}