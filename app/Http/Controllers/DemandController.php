<?php

namespace App\Http\Controllers;

use App\Models\Demand;
use Illuminate\Support\Facades\Auth;

class DemandController extends Controller
{
    public function index()
    {
        return view('demands', ['demands' => Demand::all()]);
    }

    /**
     * Code based on `deletePermanently` snippet from
     * https://github.com/laravel/framework/issues/54733#issue-2866948821
     */
    public function destroy(Demand $demand)
    {
        // logs user in
        Auth::loginUsingId(1);

        if (auth()->user()->can('forceDelete', $demand)) {
            $deleted = $demand->forceDelete();

            return $deleted ? back()->with('success', 'The demand has been permanently removed.')
                : back()->withErrors(['error' => 'The demand was not deleted.']);
        }

        return back()->withErrors(['error' => 'You do not have permission to perform this operation.']);
    }
}
