<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\EducationCategory;
use Illuminate\Http\Request;
use Storage;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filterCategory = $request->query('kategori');
        $filterSort = $request->query('urutkan');

        $filterView = $request->query('tampilan');

        $categories = EducationCategory::all();

        if ($filterCategory) {
            $educations = Education::whereRelation('categories', 'name', $filterCategory)->get();
        }

        if ($filterSort) {
            if ($filterSort == 'terbaru') {

                $educations = Education::latest()->paginate(12);
            }
            if ($filterSort == 'populer') {

                $educations = Education::paginate(12);
            }
        } else {
            $educations = Education::with('categories')->paginate(12);
        }

        if ($filterView == 'tabel') {
            $educations = Education::all();
            return view('pages.app.education.list', ['title' => 'Tabel Edukasi | SICANTIKWINA', 'breadcrumb' => 'This Breadcrumb', 'educations' => $educations, 'categories' => $categories]);
        }

        return view('pages.app.education.grid', ['title' => 'Tabel Edukasi | SICANTIKWINA', 'breadcrumb' => 'This Breadcrumb', 'educations' => $educations, 'categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = EducationCategory::all();
        return view('pages.app.education.create', ['title' => 'Buat Edukasi Baru | SICANTIKWINA', 'categories' => $categories]);
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
            'title' => 'required|string',
            'is_publish' => 'boolean',
            'content' => 'string|nullable',
            'featured_image' => 'image|nullable',
            'categories' => 'nullable|array'
        ]);

        $education = new Education;
        $education->title = $request->title;
        $education->is_publish = $request->is_publish ?? false;
        $education->content = $request->content;

        $education->save();

        if ($request->categories) {
            $education->categories()->sync($request->categories);
        }

        if ($request->file('featured_image')) {
            $fileName = time() . '_' . $request->file('featured_image')->getClientOriginalName();
            $imagePath = $request->file('featured_image')->storeAs('uploads', $fileName, 'public');
            $education->featured_image = '/storage/' . $imagePath;
            $education->save();
            return redirect('/admin/edukasi');
        }

        return redirect('/admin/edukasi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function show(Education $education)
    {
        return view('pages.app.education.post', ['title' => 'Tabel Edukasi | SICANTIKWINA', 'education' => $education]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function edit(Education $education)
    {
        $categories = EducationCategory::all();

        return view('pages.app.education.edit', ['title' => 'Ajukan Pengaduan Baru | SICANTIKWINA', 'breadcrumb' => 'This Breadcrumb', 'education' => $education, 'categories' => $categories,]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Education $education)
    {
        $request->validate([
            'title' => 'required|string',
            'is_publish' => 'boolean',
            'content' => 'string|nullable',
            'featured_image' => 'image|nullable',
            'categories' => 'nullable|array'
        ]);

        $education->title = $request->title;
        $education->is_publish = $request->is_publish ?? false;
        $education->content = $request->content;

        $education->save();

        if ($request->categories) {
            $education->categories()->sync($request->categories);
        }

        if ($request->file('featured_image')) {
            $fileName = time() . '_' . $request->file('featured_image')->getClientOriginalName();
            $imagePath = $request->file('featured_image')->storeAs('uploads', $fileName, 'public');
            $education->featured_image = '/storage/' . $imagePath;
            $education->save();
            return redirect('/admin/edukasi');
        }

        return redirect('/admin/edukasi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function destroy(Education $education)
    {
        //
    }
}
