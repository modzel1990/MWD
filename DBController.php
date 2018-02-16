<?php

namespace App\Http\Controllers\FootForward;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DBController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function hakunamatata()
    {
        $tests = DB::table('loudcrowd')->get();                                         // ->pluck('id', 'Name', 'Surname');

        return view('pages.testcursorfollow', ['tests' => $tests]);
    }

    public function testowanie()
    {
        $checks = DB::select('select * from loudcrowd where id = :id', ['id' => 1]);

        return view('pages.testcursorfollow', ['checks' => $checks]);
    }
}
