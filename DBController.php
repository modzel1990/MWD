// colemod_pages is my name of the table in the database

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
        $tests = DB::table('colemod_pages')->get();                                         // ->pluck('id', 'Name', 'Surname');

        return view('pages.nameofpage', ['tests' => $tests]);
    }
}
