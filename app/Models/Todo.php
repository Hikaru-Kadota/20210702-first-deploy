<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class Todo extends Model
{
    use HasFactory;

    // アプリケーション側でcreateなどできない値を記述
    // ↓以下の処理を記述
    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    public static function getAllOrderByDeadline()
    {
        return self::orderBy('deadline', 'asc')->get();
    }

    public function todos()
    {
        return $this->hasMany(Todo::class)->orderBy('deadline', 'asc');
    }
}
