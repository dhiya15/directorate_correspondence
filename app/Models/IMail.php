<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IMail extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable = [
        "mail_number",
        "mail_subject",
        "mail_date",
        "mail_receiver"
    ];
}
