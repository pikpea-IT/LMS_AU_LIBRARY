<?php

namespace App\Http\Controllers\Admin;

use App\Models\Generation;
use App\Models\Permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class GenerationController extends Controller
{
  protected $prefix = 'generation_';
  protected $crudRoutePath = 'generations';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       abort_if(Gate::denies($this->prefix . 'access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $data['prefix'] = $this->prefix;
        $data['crudRoutePath'] = $this->crudRoutePath;
        $data['generations'] = Generation::latest()->get();
        return view('admin.generation.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        abort_if(Gate::denies($this->prefix . 'create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            // Find the record by ID or create a new instance
            $save_record = Generation::find($request->id) ?? new Generation();

            // Set the fields from the request
            $save_record->code = $request->code;
            $save_record->name = $request->name;
            $save_record->name_english = $request->name_english;
            $save_record->description = $request->description;
            $save_record->description_english = $request->description_english;
            $save_record->order = $request->order;
            $save_record->year = $request->year;

            // Handle the "is_current" field
            if ($request->is_current == 'on' || $request->is_current == 1) {
                $save_record->is_current = true;
            } else {
                $save_record->is_current = false;
            }

            // Handle the "status" field
            if ($request->status == 'on' || $request->status == 1) {
                $save_record->status = true;
            } else {
                $save_record->status = false;
            }

            // Save the record
            $save_record->save();

            // Prepare a success response
            $response = [
                'success' => 'Generation data has been saved successfully!',
            ];
        } catch (\Throwable $e) {
            // Handle errors and prepare an error response
            $response = [
                'error' => $e->getMessage(),
            ];
        }

        // Redirect to the appropriate route with the response
        return redirect()->route('admin.generations.index')->with($response);

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
        try {
            Generation::find($id)->delete();
            $response = array(
                // 'success' => false,
                'success' => 'Data has been deleted successfully!'
            );
        } catch (\Throwable $e) {
            $response = array(
                // 'success' => true,
                'error' => $e->getMessage()
            );
        }
        // return response()->json($response);
        return redirect()->route('admin.generations.index')->with($response);
    }

    public function changeStatus(Request $request)
    {
      abort_if(Gate::denies($this->prefix . 'edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
      $response = Generation::find($request->object_id);
      $response->status = $request->status;
      $response->save();
      return response()->json(['success' => 'Status has been change successfully!']);
    }
}