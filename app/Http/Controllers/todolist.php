<?php

namespace App\Http\Controllers;

use App\Models\todolist as ModelsTodolist;
use Illuminate\Http\Request;

class todolist extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $max_data = 5;
        //
        if(request('search')) {
            $data = ModelsTodolist::where('task','like', '%'.request('search').'%')->paginate($max_data);
            return view('todolist', compact('data'));
        }else {
            $data = ModelsTodolist::orderBy('task','asc')->paginate($max_data);
            return view('todolist', compact('data'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'task' => 'required|min:3|max:25'
        ],[
            'task.required' => 'The task field is required',
            'task.min' => 'The task must be at least 3 characters',
            'task.max' => 'The task can be a maximum of 25 characters'
        ]);

        $data = [
            'task' => $request->input('task')
        ];

        ModelsTodolist::create($data);
        return redirect()->route('todolist.post')->with('success', 'Task created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'task' => 'required|min:3|max:25'
        ],[
            'task.required' => 'The task field is required',
            'task.min' => 'The task must be at least 3 characters',
            'task.max' => 'The task can be a maximum of 25 characters'
        ]);

        $data = [
            'task' => $request->input('task'),
            'is_done' => $request->input('is_done')
        ];

        ModelsTodolist::where('id', $id)->update($data);

        // Redirect dengan pesan sukses
        return redirect()->route('todolist')->with('success', 'Task berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        ModelsTodolist::where('id', $id)->delete();
        return redirect()->route('todolist')->with('success', 'Task deleted successfully');
    }
}
