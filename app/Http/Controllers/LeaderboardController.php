<?php

namespace App\Http\Controllers;

use App\Models\Leaderboard;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Contracts\Container\BindingResolutionException;
use Response;

class LeaderboardController extends Controller
{
    public function __invoke()
    {
        $user = auth()->user();

        // get all users which have more than 0 score in leaderboard table
        $users = User::whereHas('leaderboard', function ($query) {
            $query->where('score', '>', 0);
        })->with('leaderboard')->get();

        // sort users by score
        $users = $users->sortByDesc(function ($user) {
            return $user->leaderboard->score;
        });

        $userPosition = $users->pluck('id')->search($user->id) + 1;
        $userPosition = $userPosition ?: null;

        $userScore = Leaderboard::where('user_id', $user->id)->first()->score;
        return view('leaderboard', compact('users', 'user', 'userPosition', 'userScore'));
    }

    public function exportToPDF()
    {
        $users = User::whereHas('leaderboard', function ($query) {
            $query->where('score', '>', 0);
        })->with('leaderboard')->get();

        $users = $users->sortByDesc(function ($user) {
            return $user->leaderboard->score;
        });

        $pdf = PDF::loadView('pdf.leaderboard_pdf', compact('users'));

        return $pdf->download('leaderboard.pdf');
    }

    /**
     * @throws BindingResolutionException
     */
    public function exportToCSV()
    {
        $users = User::whereHas('leaderboard', function ($query) {
            $query->where('score', '>', 0);
        })->with('leaderboard')->get();

        $csvFileName = 'leaderboard.csv';
        $headers = array(
            "Content-type" => "text/csv",
            "Content-Disposition" => "attachment; filename=$csvFileName",
            "Pragma" => "no-cache",
            "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
            "Expires" => "0",
        );

        $handle = fopen('leaderboard.csv', 'w');

        // Add CSV header
        fputcsv($handle, ['Position', 'Name', 'Score', 'Last task solved']);

        // Add CSV rows
        $index = 1;
        foreach ($users as $user) {
            fputcsv($handle, [
                $index,
                $user->name,
                $user->leaderboard->score,
                $user->leaderboard->updated_at->format('Y-m-d H:i:s T'),
            ]);
            $index++;
        }

        fclose($handle);

        return Response::download($csvFileName, "leaderboard.csv", $headers);
    }
}
