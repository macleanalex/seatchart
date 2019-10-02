<?php


namespace App\Http\Controllers;


use App\Person;
use Illuminate\Http\Request;

class PeopleController extends Controller
{

    public function create(Request $request)
    {
        $person = new Person($request->except('_token'));
        $person->save();

        return $person;
    }

    public function destroy(int $id)
    {

    }

}
