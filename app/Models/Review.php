<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'nama_lengkap',
        'perusahaan',
        'layanan',
        'rating',
        'ulasan',
        'is_approved',
    ];

    protected $casts = [
        'layanan'     => 'array',
        'is_approved' => 'boolean',
        'rating'      => 'integer',
    ];

    /**
     * Scope: only approved reviews (shown to public)
     */
    public function scopeApproved($query)
    {
        return $query->where('is_approved', true);
    }

    /**
     * Helper: star label
     */
    public function getStarLabelAttribute(): string
    {
        return str_repeat('★', $this->rating) . str_repeat('☆', 5 - $this->rating);
    }
}
