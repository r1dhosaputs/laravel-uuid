<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'students';

    public function getIncrementing()
    {
        // jadi tidak autoincrements karena makai uuid
        return false;
    }

    public function getKeyType()
    {
        // string uuid
        return 'string';
    }
}
