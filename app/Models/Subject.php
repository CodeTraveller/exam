<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Builder;

class Subject extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'status',
    ];

    public function scopeActive(Builder $query): Builder
    {
        return $query->where('status', 1);
    }

    public function questions()
    {
        return $this->hasMany(Question::class, 'subject_id');
    }
}
