<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class employee extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable
        = [
            'name',
            'email',
            'department_id',
            'image',
        ];

    public function department(): BelongsTo
    {
        return $this->belongsTo(department::class);
    }
}
