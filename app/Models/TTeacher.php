<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TTeacher extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable = [
        "number",
        "full_name",
        "certificate",
        "grade",
        "hiring_date",
        "duration",
        "remarque"
    ];
}
