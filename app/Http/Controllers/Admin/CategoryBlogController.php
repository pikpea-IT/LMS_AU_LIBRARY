<?php

namespace App\Http\Controllers\Admin;

use App\Models\CategoryBlog;
use App\Http\Controllers\Controller;
// use Illuminate\Support\Facades\Request;
use Illuminate\Http\Request;

class CategoryBlogController extends Controller
{
    protected $prefix = 'category_blog_';
    protected $crudRoutePath = 'category_blogs';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //    abort_if(Gate::denies($this->prefix . 'access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $data['prefix'] = $this->prefix;
        $data['crudRoutePath'] = $this->crudRoutePath;
        $data['CategoryBlogs'] = CategoryBlog::latest()->get();
        return view('admin.category-blog.index', $data);
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

        // dd($request->all());

        // if ($validator->fails()) {
        //     $errors = $validator->errors()->getMessages();
        //     $errors = array_reverse($errors);
        //     foreach ($errors as $key => $error) {
        //         Toastr::error($error[0]);
        //     }
        //     return redirect()->back()->withInput();
        // }

        // Find existing record or create a new one
        $model = CategoryBlog::find($request->id) ?? new CategoryBlog();
        $model->cat_name = $request->cat_name;
        $model->cat_slug = $request->cat_slug;

        // Handle Image Upload
        if ($request->has('image')) {
            if ($request->id) {
                $image_name = uploadImageReplace('category_blogs/', $model->cat_img, 'png', $request->file('image'));
            } else {
                $image_name = uploadImage('category_blogs/', 'png', $request->file('image'));
            }
        } else {
            $image_name = @$model->cat_img;
        }
        $model->cat_img = $image_name;

        // Set Status
        $model->status = $request->status == 'on' || $request->status == 1 ? 1 : 0;

        // Save the record
        $model->save();

        // Toastr::success(trans('Saved successfully'));

        if ($model instanceof CategoryBlog) {
            toastr()->success('Data has been saved successfully!99');

            return redirect()->route('admin.category-blogs.index');
        }
        toastr()->error('An error has occurred please try again later.');
        return redirect()->back();
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
            CategoryBlog::find($id)->delete();
            $response = array(
                'success' => false,
                'success' => 'Data has been deleted successfully!'
            );
        } catch (\Throwable $e) {
            $response = array(
                'success' => true,
                'error' => $e->getMessage()
            );
        }
        return response()->json($response);
        return redirect()->route('admin.category-blogs.index')->with($response);
    }

    public function changeStatus(Request $request)
    {
        //   abort_if(Gate::denies($this->prefix . 'edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $response = CategoryBlog::find($request->id);
        $response->status = $request->status;
        $response->save();
        return response()->json(['success' => 'Status has been change successfully!']);
    }
}
