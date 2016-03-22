<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function about()
    {
        $dude = 'Chokewanka';
        $gal = 'Dana Falcon';

        return view('pages.about')->with([
           'first' => $dude,
           'last' => $gal
        ]);
    }

    public function contact()
    {
        return view('pages.contact');
    }

}
