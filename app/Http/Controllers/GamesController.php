<?php

namespace App\Http\Controllers;


use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GamesController extends Controller
{


    public function index()
    {

        $before = Carbon::now()->subMonths(2)->timestamp;
        $after = Carbon::now()->addMonths(2)->timestamp;
        $current = Carbon::now()->timestamp;
        $afterFourMonths = Carbon::now()->addMonths(4)->timestamp;

        $popularGames = Http::withHeaders(config('services.igdb'))
            ->withBody(
                "
            fields name,
            cover.url,
            first_release_date,
            total_rating_count,
            platforms.abbreviation,
            rating;
            where platforms = (48,49,139,6)
            & (first_release_date >= {$before}
            & first_release_date < {$current}
            & total_rating_count > 5);
            sort popularity desc;
            limit 12;
            ", 'text/plain'
            )->post('https://api.igdb.com/v4/games')
            ->json();


        $recentlyReviewed = Http::withHeaders(config('services.igdb'))
            ->withBody(
                "
            fields name,
            cover.url,
            first_release_date,
            total_rating_count,
            platforms.abbreviation,
            rating,
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


        $mostAnticipated = Http::withHeaders(config('services.igdb'))
            ->withBody(
                "
            fields name,
            cover.url,
            first_release_date,
            total_rating_count,
            platforms.abbreviation,
            rating, rating_count, summary;
            where platforms = (48,49,139,6)
            & (first_release_date >= {$before}
            & first_release_date < {$afterFourMonths});
            slug;
            limit 4;
            ", 'text/plain'
            )->post('https://api.igdb.com/v4/games')
            ->json();

        $comingSoon = Http::withHeaders(config('services.igdb'))
            ->withBody(
                "
            fields name,
            cover.url,
            first_release_date,
            total_rating_count,
            platforms.abbreviation,
            rating, rating_count, summary;
            where platforms = (48,49,139,6)
            & (first_release_date >= {$current}
            & total_rating_count > 1);
            limit 4;
            ", 'text/plain'
            )->post('https://api.igdb.com/v4/games')
            ->json();


        return view('index', [
            'popularGames' => $popularGames,
            'recentlyReviewed' => $recentlyReviewed,
            'mostAnticipated' => $mostAnticipated,
            'comingSoon' => $comingSoon,
        ]);


    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
