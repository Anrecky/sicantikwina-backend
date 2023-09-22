<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $complaints = Complaint::all();
        return view('pages.app.complaint.list', ['title' => 'Tabel Pengaduan | SICANTIKWINA', 'breadcrumb' => 'This Breadcrumb', 'complaints' => $complaints]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.app.complaint.create', ['title' => 'Ajukan Pengaduan Baru | SICANTIKWINA', 'breadcrumb' => 'This Breadcrumb']);
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
            'relationship' => 'required|string',
            'chronology' => 'nullable|string',

            'wb_name' => 'required|string|max:90',
            'wb_gender' => 'required|in:male,female',
            'wb_dob' => 'nullable|date',
            'wb_address' => 'nullable|string',
            'wb_phone' => 'nullable|numeric',
            'wb_is_year' => 'nullable|boolean',
            'wb_year' => 'nullable|numeric',

            'bride_name' => 'required|string|max:90',
            'bride_dob' => 'nullable|date',
            'bride_address' => 'nullable|string',
            'bride_phone' => 'nullable|numeric',
            'bride_is_year' => 'nullable|boolean',
            'bride_year' => 'nullable|numeric',

            'groom_name' => 'required|string|max:90',
            'groom_dob' => 'nullable|date',
            'groom_address' => 'nullable|string',
            'groom_is_year' => 'nullable|boolean',
            'groom_year' => 'nullable|numeric',
            'groom_phone' => 'nullable|numeric'
        ]);

        $complaint = new Complaint;
        $complaint->whistleblower_name = $request->wb_name;
        $complaint->whistleblower_dob = $request->wb_dob;
        $complaint->whistleblower_gender = $request->wb_gender;
        $complaint->whistleblower_phone = $request->wb_phone;
        $complaint->whistleblower_address = $request->wb_address;
        $complaint->whistleblower_is_year = $request->wb_is_year;
        $complaint->whistleblower_year = $request->wb_year;

        $complaint->bride_name = $request->bride_name;
        $complaint->bride_dob = $request->bride_dob;
        $complaint->bride_phone = $request->bride_phone;
        $complaint->bride_address = $request->bride_address;
        $complaint->bride_is_year = $request->bride_is_year;
        $complaint->bride_year = $request->bride_year;

        $complaint->groom_name = $request->groom_name;
        $complaint->groom_dob = $request->groom_dob;
        $complaint->groom_phone = $request->groom_phone;
        $complaint->groom_address = $request->groom_address;
        $complaint->groom_is_year = $request->groom_is_year;
        $complaint->groom_year = $request->groom_year;

        $complaint->chronology = $request->chronology;
        $complaint->relationship = $request->relationship;

        $complaint->user()->associate(auth()->user());
        $complaint->save();


        return redirect('/admin/pengaduan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\complaint  $complaint
     * @return \Illuminate\Http\Response
     */
    public function show(Complaint $complaint)
    {
        return view('pages.app.complaint.show', ['title' => 'Ajukan Pengaduan Baru | SICANTIKWINA', 'breadcrumb' => 'This Breadcrumb', 'complaint' => $complaint]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\complaint  $complaint
     * @return \Illuminate\Http\Response
     */
    public function edit(Complaint $complaint)
    {
        return view('pages.app.complaint.edit', ['title' => 'Ajukan Pengaduan Baru | SICANTIKWINA', 'breadcrumb' => 'This Breadcrumb', 'complaint' => $complaint]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\complaint  $complaint
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Complaint $complaint)
    {
        $request->validate([
            'relationship' => 'required|string',
            'chronology' => 'nullable|string',

            'wb_name' => 'required|string|max:90',
            'wb_gender' => 'required|in:male,female',
            'wb_dob' => 'nullable|date',
            'wb_address' => 'nullable|string',
            'wb_phone' => 'nullable|numeric',
            'wb_is_year' => 'nullable|boolean',
            'wb_year' => 'nullable|numeric',

            'bride_name' => 'required|string|max:90',
            'bride_dob' => 'nullable|date',
            'bride_address' => 'nullable|string',
            'bride_phone' => 'nullable|numeric',
            'bride_is_year' => 'nullable|boolean',
            'bride_year' => 'nullable|numeric',

            'groom_name' => 'required|string|max:90',
            'groom_dob' => 'nullable|date',
            'groom_address' => 'nullable|string',
            'groom_is_year' => 'nullable|boolean',
            'groom_year' => 'nullable|numeric',
            'groom_phone' => 'nullable|numeric'
        ]);

        $complaint->whistleblower_name = $request->wb_name;
        $complaint->whistleblower_dob = $request->wb_dob;
        $complaint->whistleblower_gender = $request->wb_gender;
        $complaint->whistleblower_phone = $request->wb_phone;
        $complaint->whistleblower_address = $request->wb_address;
        $complaint->whistleblower_is_year = $request->wb_is_year;
        $complaint->whistleblower_year = $request->wb_year;

        $complaint->bride_name = $request->bride_name;
        $complaint->bride_dob = $request->bride_dob;
        $complaint->bride_phone = $request->bride_phone;
        $complaint->bride_address = $request->bride_address;
        $complaint->bride_is_year = $request->bride_is_year;
        $complaint->bride_year = $request->bride_year;

        $complaint->groom_name = $request->groom_name;
        $complaint->groom_dob = $request->groom_dob;
        $complaint->groom_phone = $request->groom_phone;
        $complaint->groom_address = $request->groom_address;
        $complaint->groom_is_year = $request->groom_is_year;
        $complaint->groom_year = $request->groom_year;

        $complaint->chronology = $request->chronology;
        $complaint->relationship = $request->relationship;

        $complaint->user()->associate(auth()->user());
        $complaint->save();


        return redirect('/admin/pengaduan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\complaint  $complaint
     * @return \Illuminate\Http\Response
     */
    public function destroy(Complaint $complaint)
    {
        $complaint->delete();
        return redirect()->back();
    }
}
