<?php

namespace App\Http\Controllers;
use App\Models\Job;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class JobController extends Controller{


//listar
public function index()
{
    $jobs = Job::all();
    return response()->json($jobs);
}

//insertar


public function store(Request $request)
{
    $rules = [
        'name' => 'required|max:255',
    ];

    $this->validate($request, $rules);

    $job = Job::create($request->all());

    return response()->json($job, Response::HTTP_CREATED);
}

public function show($job)
{
    $job = Job::findOrFail($job);

    return response()->json($job);
}

//actualizar
    public function update(Request $request,$job){
        $rules=[
            'name' => 'required|max:255',
            ];
        $this->validate( $request, $rules );
        $job=Job::findOrFail($job);
        $job->fill($request->all());
        if(!$job->isClean()){
            return $this->errorResponse('Al menos un campo debe cambiar',Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        $job->save();
        return $this->successResponse($job,Response::HTTP_CREATED);
    }
//borrar
    public function destroy($job){
        $job=Job::findOrFail($job);
        $job->delete();
        return $this->successResponse($job,Response::HTTP_OK);
    }
}
