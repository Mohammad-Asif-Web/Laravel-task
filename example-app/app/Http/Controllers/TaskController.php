<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskStoreRequest;
use App\Http\Requests\TaskUpdateRequest;
use App\Models\Task;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return View
     */
    public function index(): View
    {
        // $tasks = Task::all();
        // $tasks = Task::orderBy('id', 'desc')->paginate(4);
        // $tasks = Task::latest()->limit(2)->get();
        // $tasks = Task::orderBy('id', 'desc')->limit(1)->get();
        // $tasks = Task::where('state', 'dhaka')->latest()->get();
        $tasks = Task::with('user')->get();
        return view('index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     * @return View
     */
    public function create(): View
    {
        $users = User::get();
        return view('create-task', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     * @param TaskStoreRequest $request
     * @return RedirectResponse
     */
    public function store(TaskStoreRequest $request): RedirectResponse
    {
        // $this->validate($request, [
        //     'name' => 'required|max:255|min:5|string',
        //     'address' => 'required|string',
        //     'profession' => 'required|string'
        //     ],

        //     $message=[
        //         'name.min' => "Name is too small",
        //     ]
        // );

        Task::create($request->all());
        session()->flash('msg', 'Task Created Successfully');
        session()->flash('cls', 'success');
        return redirect()->route('task.index');
    }

    /**
     * Display the specified resource.
     * @return View
     */
    public function show($id): View
    {
        // $task = Task::findOrFail($id);
        $task = Task::where('id', $id)->first();
        if(!$task){
            abort(404);
        }
        return view('show-single-task', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     * @return View
     */
    public function edit($id): View
    {
        $task = Task::findOrFail($id);
        return view('edit', compact('task'));
    }
      
    /**
     * Update the specified resource in storage.
     * @param TaskUpdateRequest $request
     * @param mixed $id
     * @return RedirectResponse
     */
    public function update(TaskUpdateRequest $request, $id): RedirectResponse
    {

        // dd($request->all());

        $task = Task::findOrFail($id);
        $task->update($request->all());
        session()->flash('msg', 'Task Updated');
        session()->flash('cls', 'success');
        return redirect()->route('task.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param mixed $id
     * @return RedirectResponse
     */
    public function destroy($id): RedirectResponse
    {
        $task = Task::findOrFail($id);
        $task->delete();
        session()->flash('msg', 'Task Deleted Successfully');
        session()->flash('cls', 'danger');
        return redirect()->route('task.index');
    }
}
