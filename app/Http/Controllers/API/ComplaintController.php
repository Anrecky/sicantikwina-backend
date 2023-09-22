<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Complaint;
use Validator;
use App\Http\Resources\ComplaintResource;

class ComplaintController extends BaseController

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {
        $complaints = Complaint::whereRelation('user', 'id', auth()->user()->id)->whereRelation('user', 'is_admin', false)->get();
        return $this->sendResponse(ComplaintResource::collection($complaints), 'Berhasil memuat data laporan pengaduan.');
    }

    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)

    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'relationship' => 'required|string',
            'chronology' => 'nullable|string',
            'whistleblower_name' => 'required|string|max:90',
            'whistleblower_gender' => 'required|in:male,female',
            'whistleblower_dob' => 'nullable|date',
            'whistleblower_address' => 'nullable|string',
            'whistleblower_phone' => 'nullable|numeric',
            'whistleblower_is_year' => 'nullable|boolean',
            'whistleblower_year' => 'nullable|numeric',
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

        if ($validator->fails()) {

            return $this->sendError('Validation Error.', $validator->errors());
        }

        $input['user_id'] = auth()->user()->id;
        $complaint = Complaint::create($input);

        return $this->sendResponse(new ComplaintResource($complaint), 'Berhasil mengajukan pengaduan.');
    }



    /**

     * Display the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function show($id)

    {

        $complaint = Complaint::find($id);
        if (is_null($complaint)) {

            return $this->sendError('Complaint not found.');
        }

        return $this->sendResponse(new ComplaintResource($complaint), 'Berhasil menampilkan data pengaduan.');
    }



    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, Complaint $complaint)

    {

        $input = $request->all();

        $validator = Validator::make($input, [

            'relationship' => 'required|string',
            'chronology' => 'nullable|string',

            'whistleblower_name' => 'required|string|max:90',
            'whistleblower_gender' => 'required|in:male,female',
            'whistleblower_dob' => 'nullable|date',
            'whistleblower_address' => 'nullable|string',
            'whistleblower_phone' => 'nullable|numeric',
            'whistleblower_is_year' => 'nullable|boolean',
            'whistleblower_year' => 'nullable|numeric',

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

        if ($validator->fails()) {

            return $this->sendError('Validation Error.', $validator->errors());
        }

        $complaint->whistleblower_name = $input['whistleblower_name'];
        $complaint->whistleblower_dob = $input['whistleblower_dob'];
        $complaint->whistleblower_gender = $input['whistleblower_gender'];
        $complaint->whistleblower_phone = $input['whistleblower_phone'];
        $complaint->whistleblower_address = $input['whistleblower_address'];
        $complaint->whistleblower_is_year = $input['whistleblower_is_year'];
        $complaint->whistleblower_year = $input['whistleblower_year'];

        $complaint->bride_name = $input['bride_name'];
        $complaint->bride_dob = $input['bride_dob'];
        $complaint->bride_phone = $input['bride_phone'];
        $complaint->bride_address = $input['bride_address'];
        $complaint->bride_is_year = $input['bride_is_year'];
        $complaint->bride_year = $input['bride_year'];

        $complaint->groom_name = $input['groom_name'];
        $complaint->groom_dob = $input['groom_dob'];
        $complaint->groom_phone = $input['groom_phone'];
        $complaint->groom_address = $input['groom_address'];
        $complaint->groom_is_year = $input['groom_is_year'];
        $complaint->groom_year = $input['groom_year'];

        $complaint->chronology = $input['chronology'];
        $complaint->relationship = $input['relationship'];

        $complaint->user()->associate(auth()->user());
        $complaint->save();

        return $this->sendResponse(new ComplaintResource($complaint), 'Berhasil memperbaharui laporan pengaduan.');
    }



    /**

     * Remove the specified resource from storage.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function destroy(Complaint $complaint)

    {
        $complaint->delete();
        return $this->sendResponse([], 'Berhasil menghapus data pengaduan.');
    }
}
