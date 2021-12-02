<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Devfaysal\BangladeshGeocode\Models\Division;
use Devfaysal\BangladeshGeocode\Models\District;
use Devfaysal\BangladeshGeocode\Models\Upazila;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $divisions = Division::all();

        return view('frontend.register', compact('divisions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // validate the data
        $data =  $this->validate($request, [
            'name' => 'required|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:100',
            'birth_certificate_no'  => 'required|max:255',
            'birth_date'  => 'required|date',
            'gender' => 'required',
            'phone' => 'required',
            'father_name' =>  'required|max:255',
            'father_nid_no' => 'required|max:255',
            'mother_name' =>  'required|max:255',
            'mother_nid_no' => 'required|max:255',
            'desire_class' => 'required',
            'present_address' => 'required',
            'present_devision' => 'required',
            'present_district' => 'required',
            'present_thana' => 'required',
            'present_post_code' => 'required',
            'permanent_address' => 'required',
            'permanent_devision' => 'required',
            'permanent_district' => 'required',
            'permanent_thana' => 'required',
            'permanent_post_code' => 'required',
            'transaction_id' => 'transaction_id',
        ]);

        dd('ok');
        // store in the database
        // create new uuid for student
        $uuid = Str::uuid()->toString();

        // check if uuid already exists
        $student = Student::where('uuid', $uuid)->first();
        if (!empty($student)) {
            $uuid = Str::uuid()->toString();
        }

        $data['uuid'] = $uuid;

        // upload image
        $image = $request->file('image');
        // set image name to studnet name
        $image_name = $data['name'];
        // set image extension
        $image_extension = $image->getClientOriginalExtension();
        // set image name
        $image_name = $image_name . $uuid .  '.' . $image_extension;
        // upload image
        $image->move('images/students', $image_name);

        $data['image'] = $image_name;


        // create new student
        $student = Student::create($data);

        if ($student) {
            return redirect()->back()->with('success', 'Student created successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }

    public function getDistricts($division)
    {
        $districts = District::where('division_id', $division)->get();

        return response()->json($districts);
    }

    public function getThanas($district)
    {
        $Upazila = Upazila::where('district_id', $district)->get();

        return response()->json($Upazila);
    }
}
