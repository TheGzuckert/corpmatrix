<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Apontamentos extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'user_id',
        'processo',
        'descricao',
    ];

    /**
     * Get the user that owns the apontamento.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
