<?php
declare(strict_types=1);

namespace App\Models;

use Database\Factories\RecordsFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Records extends Model
{
    use HasFactory;

    protected $table = 'records';

    protected $fillable = [
        'patient_id',
        'description',
    ];

    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }

    protected static function newFactory(): RecordsFactory
    {
        return RecordsFactory::new();
    }
}
