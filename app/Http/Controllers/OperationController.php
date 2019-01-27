<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Operation;

class OperationController extends Controller
{
    public function index()
    {
      $lists = Operation::orderBy('created_at', 'ASC')->get();
      return view('operation.index')->with('lists', $lists);
    }

    public function store(Request $request)
    {
      Operation::create(
        array(
          'date' => $request->date,
          'rate' => $request->rate,
        )
      );
      return redirect('/');
    }

    public function destroy(Request $request)
    {
      Operation::destroy($request->id);
      return redirect('/');
    }
}
