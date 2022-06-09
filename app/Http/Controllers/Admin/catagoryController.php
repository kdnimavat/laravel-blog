<?php

namespace App\Http\Controllers\Admin;

use Valodator;
use App\Models\Catagory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Admin\CategoryRequest;

class catagoryController extends Controller
{
    public function index()
    {
        $category = Catagory::all();
        return view('admin.catagory.index', compact('category'));
    }

    public function create()
    {
        return view('admin.catagory.create');
    }

    public function store(CategoryRequest $request)
    {
        $data = $request->validated();

        $category = new Catagory;
        $category->name = $data['name'];
        $category->slug = $data['slug'];
        $category->description = $data['description'];

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/catagory/', $filename);
            $category->image = $filename;
        }

        $category->description = $data['description'];

        $category->navbar_status = $request->navbar_status == true ? '1' : '0';
        $category->status = $request->status == true ? '1' : '0';
        $category->created_by = Auth::user()->id;
        $category->save();

        return redirect('admin/category')->with('status', 'Category Added Successful');
    }

    public function edit($category_id)
    {
        $category = Catagory::find($category_id);
        return view('admin.catagory.edit', compact('category'));
    }

    public function update(CategoryRequest $request, $category_id)
    {
        // dd($request);
        $data = $request->validated();

        $category = Catagory::find($category_id);
        $category->name = $data['name'];
        $category->slug = Str::slug($data['slug']);
        $category->description = $data['description'];

        if ($request->hasfile('image')) {

            $destination = 'uploads/category/' . $category_id;
            if (File::exists($destination)) {
                File::delete($destination);
            }


            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/catagory/', $filename);
            $category->image = $filename;
        }

        $category->description = $data['description'];

        $category->navbar_status = $request->navbar_status == true ? '1' : '0';
        $category->status = $request->status == true ? '1' : '0';
        $category->created_by = Auth::user()->id;
        $category->update();

        return redirect('admin/category')->with('status', 'Category Updated Successful');
    }

    public function destroy($category_id)
    {
        $category = Catagory::find($category_id);
        if ($category) {
            $destination = 'uploads/category/' . $category_id;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $category->delete();
            return redirect('admin/category')->with('status', 'Category Deleted Successful');
        } else {
            return redirect('admin/category')->with('status', 'No Category Id Found');
        }
    }
}
