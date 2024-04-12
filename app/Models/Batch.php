<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class batch extends Model
{
    protected $table = 'Batches';
    protected $primarykey = 'id';
    protected $fillable = ['name','course_id','start_date'];
    use HasFactory;
}
