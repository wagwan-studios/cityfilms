<?php

namespace App\Http\Controllers\Admin;

use App\Helper\Vimeo;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddPortfolioRequest;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use Exception;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{

    protected $model;
    protected $related_model;
    protected $folder;

    public function __construct()
    {
        $this->model = new Portfolio();
        $this->related_model = new PortfolioCategory();
        $this->folder = 'Admin.Portfolio.';
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portfolio = $this->model::paginate(10);
        return view($this->folder.'index', compact('portfolio'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = $this->related_model::active()->get();
        return view($this->folder.'create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddPortfolioRequest $request)
    {
        $fileName = 'uploads/portfolio/'.time().'.'.$request->video_url->extension();
        $request->video_url->move(public_path('uploads/portfolio/'), $fileName);
        try {
            $this->model->create([
                'title' => $request->title,
                'slug' => $request->slug ?? strtolower(str_replace(' ', '-', $request->title)),
                'description' => $request->description,
                'related_to' => $request->related_to,
                'video_url' => $fileName,
                'portfolio_category_id' => $request->portfolio_category_id
            ]);
            return to_route('admin.portfolio.index')->with('success', 'Portfolio Created Successfully');
        } catch (Exception $e) {
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
