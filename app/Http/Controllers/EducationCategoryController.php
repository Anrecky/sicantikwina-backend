<?php

namespace App\Http\Controllers;

use App\Models\EducationCategory;
use Illuminate\Http\Request;

class EducationCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $educationCategories = EducationCategory::all();
        return view('pages.app.educationCategory.list', ['title' => 'Tabel Edukasi | SICANTIKWINA', 'breadcrumb' => 'This Breadcrumb', 'educationCategories' => $educationCategories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'string|unique:education_categories,name',
            'description' => 'nullable'
        ]);

        $category = new EducationCategory;
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EducationCategory  $educationCategory
     * @return \Illuminate\Http\Response
     */
    public function show(EducationCategory $educationCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EducationCategory  $educationCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(EducationCategory $educationCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EducationCategory  $educationCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EducationCategory $educationCategory)
    {
        $request->validate([
            'name' => 'string|unique:education_categories,name',
            'description' => 'nullable'
        ]);

        $educationCategory->update(
            [
                'name' => $request->name,
                'description' => $request->description,
            ]
        );
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EducationCategory  $educationCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(EducationCategory $educationCategory)
    {
        $educationCategory->delete();
        return redirect()->back();
    }
}
