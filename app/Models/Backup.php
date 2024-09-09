<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Backup extends Model
{
    use HasFactory;
    const PENDING = 'pending';
    const DONE = 'done';
    const RUNNING = 'running';
    const FAILED = 'failed';

    protected $guarded = ['*'];

    /**
     * Get the user that owns the Backup
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
