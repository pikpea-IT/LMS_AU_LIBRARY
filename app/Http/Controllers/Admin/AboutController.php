<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    protected $prefix = 'about_';
    protected $crudRoutePath = 'abouts';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //    abort_if(Gate::denies($this->prefix . 'access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $data['prefix'] = $this->prefix;
        $data['crudRoutePath'] = $this->crudRoutePath;
        // $data['abouts'] = abouts::latest()->get();
        return view('admin.about.index', $data);
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
