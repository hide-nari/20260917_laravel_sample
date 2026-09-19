<?php

namespace App\Models;

use Database\Factories\EmployeeFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    /** @use HasFactory<EmployeeFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable
        = [
            'name',
            'email',
            'department_id',
            'image',
        ];

    /**
     * @return BelongsTo<Department,$this>
     */
    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }
}
