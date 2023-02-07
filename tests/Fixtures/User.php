<?php

namespace Tests\Fixtures;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use PreemStudio\BinaryUuid\Casts\Binary;

class User extends Model
{
    use HasFactory;

    protected $table = 'users';

    protected $casts = [
        'uuid' => Binary::class,
    ];

    protected static function newFactory()
    {
        return UserFactory::new();
    }
}
