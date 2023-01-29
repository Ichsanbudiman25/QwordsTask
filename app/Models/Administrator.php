<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrator extends Model
{
    use HasFactory;

    protected $table = 'tbl_administrators';
    protected $primaryKey = 'id_admin';
    protected $timestamps = false;

}
