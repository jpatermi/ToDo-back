<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    use HasFactory;

    const UPDATED_AT = null;

    protected $fillable = [
        'title',
        'due_date',
        'is_completed',
        'priority_id',
    ];

    protected $casts = [
        'id'           => 'integer',
        'is_completed' => 'boolean',
    ];

    public function priority(): BelongsTo
    {
        return $this->belongsTo(Priority::class);
    }
}
