<?php

namespace App\Http\Controllers;

use App\Http\Requests\TransitionRequest;
use App\Models\Transition;

class TransitionController extends Controller
{
    public function index()
    {
        $transitions = Transition::latest()->get();

        return response()->json($transitions);
    }

    public function store(TransitionRequest $request)
    {
        $transition = Transition::create($request->all());

        return response()->json($transition, 201);
    }

    public function show($id)
    {
        $transition = Transition::findOrFail($id);

        return response()->json($transition);
    }

    public function update(TransitionRequest $request, $id)
    {
        $transition = Transition::findOrFail($id);
        $transition->update($request->all());

        return response()->json($transition, 200);
    }

    public function destroy($id)
    {
        Transition::destroy($id);

        return response()->json(['result'=>true, 'message'=>'deleted'], 200);
    }
}