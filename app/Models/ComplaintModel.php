<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ComplaintModel extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $timetable = true;
    protected $table = "table_complaint";

    protected $fillable = [
        'description',
    ];
}
