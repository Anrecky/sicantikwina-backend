<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DateTimeInterface;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;

class EducationCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];


    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->translatedFormat('A B M');
    }
    public function educations()
    {
        return $this->belongsToMany(Education::class);
    }
    public function scopeFilterByCategory($query, $category)
    {
        return  $query->whereHas('educations', function (Builder $query) use ($category) {
            $query->where('name', 'like', '%' . $category . '%');
        })->get();
    }
}
