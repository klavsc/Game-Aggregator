<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Livewire\Component;
use Illuminate\Support\Str;

class RecentlyReviewed extends Component
{
    public $recentlyReviewed = [];

    public function loadRecentlyReviewed()
    {
        $before = Carbon::now()->subMonths(2)->timestamp;
        $current = Carbon::now()->timestamp;

        $recentlyReviewedUnformatted = Http::withHeaders(config('services.igdb'))
            ->withBody(
                "
            fields name,
            cover.url,
            first_release_date,
            total_rating_count,
            platforms.abbreviation,
            rating,
            slug,
            rating_count,
            summary;
            where platforms = (48,49,130,6)
            & (first_release_date > {$before}
            & first_release_date < {$current}
            & rating_count > 5);
            sort popularity desc;
            limit 3;
            ", 'text/plain'
            )->post('https://api.igdb.com/v4/games')
            ->json();

        $this->recentlyReviewed = $this->formatForView($recentlyReviewedUnformatted);
    }

    public function render()
    {
        return view('livewire.recently-reviewed');
    }

    private function formatForView($games)
    {
        return collect($games)->map(function ($game) {
            return collect($game)->merge([
                'coverImageUrl' => Str::replaceFirst('thumb','cover_big', $game['cover']['url']),
                'rating' => isset($game['rating']) ? round($game['rating']).'%' : null,
                'platforms' => collect($game['platforms'])->pluck('abbreviation')->implode(', '),
            ]);
        })->toArray();
    }
}
