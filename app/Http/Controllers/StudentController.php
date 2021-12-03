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
            'transaction_id' => 'required',
        ]);


        // store in the database
        $uuid = $this->randomID();
        $data = $request->all();
        $data['uuid'] = $uuid;

        // upload image
        $image = $request->file('image');

        // set image name to studnet name
        $image_name = $data['name'];
        // set image extension
        $image_extension = $image->getClientOriginalExtension();
        // set image name
        $image_name = $image_name . '-' . time() .  '.' . $image_extension;
        // upload image
        $request->image->move(public_path('images/students'), $image_name);


        $data['image'] = $image_name;


        // create new student
        $student = Student::create($data);

        if ($student) {
            return redirect()->route('register.success', $uuid);
        } else {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public  function randomID()
    {
        // generate a 8 digit random string from a-zA-Z0-9
        $random_string = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 8);
        return $random_string;
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

    public function success($uuid)
    {
        $student = Student::where('uuid', $uuid)->first();

        return view('frontend.register-success', compact('student'));
    }

    public function approve($uuid)
    {
        $student = Student::where('uuid', $uuid)->first();
        $student->status = 1;
        $student->save();
        // redirect with success message
        return redirect()->back()->with('success', 'Application has been approved');
    }
    public function reject($uuid)
    {
        $student = Student::where('uuid', $uuid)->first();
        $student->status = 2;
        $student->save();
        // redirect with success message
        return redirect()->back()->with('error', 'Application has been rejected');
    }
}
