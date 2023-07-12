<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MateriRequest;
use App\Models\Course;
use App\Models\Materi;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Materi::with('course')->get();
        return view('pages.admin.materi.index', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $course = Course::all();
        return view('pages.admin.materi.create', [
            'course' => $course
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MateriRequest $request)
    {
        $data = $request->all();
        $data['course_id'] = $request->course_id;

        Materi::create($data);
        return redirect()->route('materi.index');
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
    public function edit($id)
    {
        $kursus = Course::all();

        $item = Materi::findOrFail($id);

        return view('pages.admin.materi.edit',[
            'item' => $item,
            'kursus' => $kursus
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MateriRequest $request, $id)
    {
        $data = $request->all();

        $item = Materi::findOrFail($id);

        $item -> update($data);
        return redirect()->route('materi.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $item = Materi::findOrFail($id);
        $item ->delete();

        return redirect()->route('materi.index');
    }
}
