<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DateTimeInterface;
use Carbon\Carbon;

class Education extends Model
{
    use HasFactory;
    protected $casts = [
        'created_at' => 'datetime:d-m-Y, H:i:s',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('H:i:s');
    }

    public function categories()
    {
        return $this->belongsToMany(EducationCategory::class);
    }
}
