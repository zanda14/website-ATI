<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Daftar semua review (pending + approved)
     */
    public function index(Request $request)
    {
        $filter = $request->get('filter', 'all');

        $query = Review::latest();

        if ($filter === 'pending') {
            $query->where('is_approved', false);
        } elseif ($filter === 'approved') {
            $query->where('is_approved', true);
        }

        $reviews = $query->paginate(20);
        $pendingCount = Review::where('is_approved', false)->count();

        return view('admin.reviews.index', compact('reviews', 'pendingCount', 'filter'));
    }

    /**
     * Approve review
     */
    public function approve(Review $review)
    {
        $review->update(['is_approved' => true]);

        return back()->with('success', "Ulasan dari {$review->nama_lengkap} telah disetujui.");
    }

    /**
     * Reject/unapprove review
     */
    public function reject(Review $review)
    {
        $review->update(['is_approved' => false]);

        return back()->with('success', "Ulasan dari {$review->nama_lengkap} telah ditolak.");
    }

    /**
     * Hapus review
     */
    public function destroy(Review $review)
    {
        $nama = $review->nama_lengkap;
        $review->delete();

        return back()->with('success', "Ulasan dari {$nama} telah dihapus.");
    }
}
