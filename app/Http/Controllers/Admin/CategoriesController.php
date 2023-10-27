<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\AddCategoryRequest;
use App\Http\Requests\Category\UpdateCategoryRequest;
use App\Models\PortfolioCategory;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    protected $model;
    protected $folder;

    function __construct()
    {
        $this->model = new PortfolioCategory();
        $this->folder = 'Admin.Categories';
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = $this->model::paginate(10);
        return view($this->folder.'.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view($this->folder.'.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddCategoryRequest $request)
    {
        $data = $request->validated();
        try {
            $this->model::create($request->only($this->model->getFillable()));
            return to_route('admin.categories.index')->with('success', 'Category Added Successfully');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
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
        $category = $this->model::findOrFail($id);
        return view($this->folder.'.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, string $id)
    {
        $category = $this->model::find($id)->update($request->only($this->model->getFillable()));
        return to_route('admin.categories.index')->with('success', 'Category Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        PortfolioCategory::find($id)->delete();
        return back()->with('success', 'deleted successfully');
    }
}
