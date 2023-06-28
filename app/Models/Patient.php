<?php
declare(strict_types=1);

namespace App\Models;

use Database\Factories\PatientFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Patient extends Model
{
    use HasFactory;

    /**
     * @var string[] The database table name.
     */
    protected $table = 'patient';

    /**
     * @var string[] The attributes that are mass assignable.
     */
    protected $fillable = [
        'name',
        'phone',
        'email',
    ];

    /**
     * The attributes that belong to the patient records.
     */
    public function records(): HasMany
    {
        return $this->hasMany(Records::class);
    }

    /**
     * Create a new factory instance for the model. This method is used by seeders.
     */
    protected static function newFactory(): PatientFactory
    {
        return PatientFactory::new();
    }
}
