<?php

namespace App\Models;

use Database\Factories\WorkSpaceFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['title', 'description'])]
class WorkSpace extends Model
{
    /** @use HasFactory<WorkSpaceFactory> */
    use HasFactory;
}
