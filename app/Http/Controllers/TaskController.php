<?php

namespace Prueba\Http\Controllers;

use Illuminate\Http\Request;
use Prueba\Http\Requests;
use Prueba\Http\Requests\TaskRequest;
use Prueba\Task;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $tasks = Task::all();
      $tasks = Task::paginate(2);
      if($request->ajax){
        return response()->json(view('directorio.tasks',compact('tasks'))->render());
      }
          return view('directorios.index',[
            'tasks' => $tasks,
          ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('directorios.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TaskRequest $request)
    {
      Task::create([
          'name' => $request['name'],
          'type_id' => $request['type_id'],
          'phone' => $request['phone'],
          'email' => $request['email']

      ]);
        return redirect('\directorio')->with('success','Tarea Creada Correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($task)
    {
        $user = Task::find($task);
        return view('directorios.edit',[
          'task' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$task)
    {
        $user = Task::find($task);
        $user->fill($request->all());
        $user->save();
        return redirect('\directorio')->with('success','Directorio Modificada Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($task)
    {
        Task::destroy($task);
        return redirect('\directorio')->with('success','Directorio Eliminado Correctamente');
    }
}
