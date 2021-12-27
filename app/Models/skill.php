<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class skill extends Model
{
    use HasFactory;
    protected $primaryKey="id";
    protected $fillable=[
        'name',
        'color',
        'logo',
        'docs'
    ];
    protected $table="skills";
}
