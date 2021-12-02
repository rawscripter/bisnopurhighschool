@extends('layouts.frontend.app')

@section('content')
    <main id="main">

        <section class="inner-page">
            <div class="container">

                <div class="header-title">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h2><span style="color: #6262ee;"> বেসরকারি</span> বিদ্যালয়ে ভর্তির আবেদন- ২০২২</h2>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-10 m-auto">
                        <div class="form-description-area">
                            <div style="font-weight: 800; ">
                                * সমস্ত তথ্য অবশ্যই <span style=" color: red;">ইংরেজিতে</span> পূরণ করতে হবে।
                            </div>
                            <div style="font-weight: 800;">
                                * লাল তারকা (<span style="color: red;">*</span>) চিহ্ণিত তথ্যগুলো অবশ্যই প্রদান করতে হবে।
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10 m-auto">
                        <form method="POST" action="{{ route('student.store') }}">
                            {{ csrf_field() }}
                            <fieldset>

                                <section class="section box-shadow">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="name" class="required" lang="bn">নাম <span
                                                        style="color: red;">*</span></label>
                                                <input class="form-control" type="text" name="name" id=""
                                                    value="{{ old('name') }}">

                                                @error('name')
                                                    <span class="invalid-feedback show" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="birth_date" class="required">জন্ম তারিখ <span
                                                        style="color: red;">*</span></label>

                                                <input type="date" name="birth_date" class="form-control"
                                                    value="{{ old('birth_date') }}">

                                                @error('birth_date')
                                                    <span class="invalid-feedback show" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="birth_certificate_no" class="required">
                                                    জন্ম নিবন্ধনের নম্বর
                                                    <span style="color: red;">*</span></label>

                                                <input type="text" name="birth_certificate_no" class="form-control"
                                                    maxlength="17" value="{{ old('birth_certificate_no') }}">

                                                @error('birth_certificate_no')
                                                    <span class="invalid-feedback show" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="gender" class="required">লিঙ্গ <span
                                                        style="color: red;">*</span></label>

                                                <select name="gender" class="form-control">
                                                    <option value="">নির্বাচন করুন</option>
                                                    <option value="male">বালক</option>
                                                    <option value="Female">বালিকা</option>
                                                    <option value="Third Gender">তৃতীয় লিঙ্গ</option>
                                                </select>

                                                @error('gender')
                                                    <span class="invalid-feedback show" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label for="phone" class="required">মোবাইল নম্বর <span
                                                        style="color: red;">*</span></label>
                                                <input class="form-control" type="text" name="phone"
                                                    value="{{ old('phone') }}">

                                                @error('phone')
                                                    <span class="invalid-feedback show" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror

                                            </div>
                                        </div>

                                    </div>
                                </section>

                                <section class="section box-shadow">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="fatherName" class="required">পিতার নাম <span
                                                        style="color: red;">*</span></label>
                                                <input class="form-control" type="text" name="father_name"
                                                    value="{{ old('father_name') }}">

                                                @error('father_name')
                                                    <span class="invalid-feedback show" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror

                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="fatherNid" class="required">পিতার এনআইডি (NID)
                                                    নম্বর <span style="color: red;">*</span></label>

                                                <input class="form-control" type="text" name="father_nid_no"
                                                    value="{{ old('father_nid_no') }}" maxlength="17">

                                                @error('father_nid_no')
                                                    <span class="invalid-feedback show" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror

                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="motherName" class="required">মাতার নাম <span
                                                        style="color: red;">*</span></label>
                                                <input type="text" class="form-control" name="mother_name"
                                                    value="{{ old('mother_name') }}">

                                                @error('mother_name')
                                                    <span class="invalid-feedback show" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="motherNid" class="required">মাতার এনআইডি (NID)
                                                    নম্বর <span style="color: red;">*</span></label>
                                                <input class="form-control" type="text" class="form-control"
                                                    value="{{ old('mother_nid_no') }}" maxlength="17"
                                                    name="mother_nid_no">

                                                @error('mother_nid_no')
                                                    <span class="invalid-feedback show" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror

                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="guardianName" class="">অভিভাবকের নাম</label>
                                                <input type="text" class="form-control" name="guardian_name"
                                                    value="{{ old('guardian_name') }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="guardianNid" class="">অভিভাবকের এনআইডি (NID)
                                                    নম্বর</label>
                                                <input class="form-control" type="text" maxlength="17"
                                                    name="guardian_nid_no" value="{{ old('guardian_nid_no') }}">
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <section class="section box-shadow">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="version" class="required">শ্রেণী <span
                                                        style="color: red;">*</span></label>
                                                <small>(যে শ্রেণিতে ভর্তি হতে চান সেটি
                                                    নির্বাচন করুন।)</small>

                                                <select name="desire_class" class="form-control">
                                                    <option value="">নির্বাচন করুন</option>
                                                    <option value="1">প্রথম</option>
                                                    <option value="2">দ্বিতীয়</option>
                                                    <option value="3">তৃতীয়</option>
                                                    <option value="4">চতুর্থ</option>
                                                    <option value="5">পঞ্চম</option>
                                                    <option value="6">ষষ্ঠ</option>
                                                    <option value="7">সপ্তম</option>
                                                    <option value="8">অষ্টম</option>
                                                    <option value="9">নবম</option>
                                                    <option value="101">প্রথম (ফিডার)</option>
                                                    <option value="501">পঞ্চম (ফিডার)</option>
                                                </select>

                                                @error('desire_class')
                                                    <span class="invalid-feedback show" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror

                                            </div>
                                        </div>
                                    </div>

                                    {{-- <div class="row" id="prevSchoolDetails">
                                        <div class="col-lg-9">
                                            <div class="form-group">
                                                <label for="previousSchoolName" class="required">পূর্ববর্তী স্কুলের
                                                    নাম </label>
                                                <input type="text" name="previousSchoolName" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="previousClassId" class="required">
                                                    পূর্ববর্তী শ্রেণী <span style="color: red;">*</span></label>

                                                <select name="previousClassId" class="form-control">
                                                    <option value="">নির্বাচন করুন</option>
                                                    <option value="1">প্রথম</option>
                                                    <option value="2">দ্বিতীয়</option>
                                                    <option value="3">তৃতীয়</option>
                                                    <option value="4">চতুর্থ</option>
                                                    <option value="5">পঞ্চম</option>
                                                    <option value="6">ষষ্ঠ</option>
                                                    <option value="7">সপ্তম</option>
                                                    <option value="8">অষ্টম</option>
                                                    <option value="9">নবম</option>
                                                    <option value="101">প্রথম (ফিডার)</option>
                                                    <option value="501">পঞ্চম (ফিডার)</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div> --}}
                                </section>

                                <section class="section box-shadow">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <label style="color: rgba(128, 128, 128, 1);">বর্তমান ঠিকানা <span
                                                    style="color: red;">*</span></label>
                                            <div class="form-group">
                                                <label for="present_address" class="required">বিস্তারিত
                                                    ঠিকানা
                                                </label>
                                                <small>(এখানে জেলা এবং থানা লেখার প্রয়োজন নাই।)</small>
                                                <input class="form-control" type="text" name="present_address">

                                                @error('present_address')
                                                    <span class="invalid-feedback show" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-12">
                                            <div class="form-group">
                                                <label for="present_devision" class="required">বিভাগ <span
                                                        style="color: red;">*</span></label>
                                                <select class="form-control" name="present_devision"
                                                    id="present_division">
                                                    <option value="">Select Divison</option>
                                                    @foreach ($divisions as $division)}
                                                        <option value="{{ $division->id }}">
                                                            {{ $division->name }}
                                                        </option>
                                                    @endforeach
                                                </select>

                                                @error('present_devision')
                                                    <span class="invalid-feedback show" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror

                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-12">
                                            <div class="form-group">
                                                <label for="present_district" class="required">জেলা <span
                                                        style="color: red;">*</span></label>
                                                <select class="form-control" name="present_district"
                                                    id="present_district">
                                                </select>

                                                @error('present_district')
                                                    <span class="invalid-feedback show" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-12">
                                            <div class="form-group">
                                                <label for="present_thana" class="required">থানা <span
                                                        style="color: red;">*</span></label>
                                                <select class="form-control" name="present_thana" id="present_thana">
                                                </select>

                                                @error('present_thana')
                                                    <span class="invalid-feedback show" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror

                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="present_post_code" class="">পোস্ট কোড <span
                                                        style="color: red;">*</span></label>
                                                <input class="form-control" type="text" name="present_post_code"
                                                    maxlength="4" value="{{ old('present_post_code') }}">

                                                @error('present_post_code')
                                                    <span class="invalid-feedback show" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror

                                            </div>
                                        </div>

                                    </div>
                                </section>

                                <section class="section box-shadow">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <label style="color: rgba(128, 128, 128, 1);">স্থায়ী ঠিকানা <span
                                                    style="color: red;">*</span></label>
                                            <div class="form-group">
                                                <label for="permanent_address" class="required">বিস্তারিত
                                                    ঠিকানা
                                                </label>
                                                <small>(এখানে জেলা এবং থানা লেখার প্রয়োজন নাই।)</small>
                                                <input type="text" name="permanent_address" class="form-control"
                                                    id="permanent_address" value="{{ old('permanent_address') }}">

                                                @error('permanent_address')
                                                    <span class="invalid-feedback show" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-12">
                                            <div class="form-group">
                                                <label for="permanent_devision" class="required">বিভাগ <span
                                                        style="color: red;">*</span></label>

                                                <select class="form-control" name="permanent_devision"
                                                    value="{{ old('permanent_devision') }}" id="permanent_devision">
                                                    <option value="">Select Divison</option>
                                                    @foreach ($divisions as $division)}
                                                        <option value="{{ $division->id }}">
                                                            {{ $division->name }}
                                                        </option>
                                                    @endforeach
                                                </select>

                                                @error('permanent_devision')
                                                    <span class="invalid-feedback show" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror

                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-12">
                                            <div class="form-group">
                                                <label for="permanent_district" class="required">জেলা <span
                                                        style="color: red;">*</span></label>
                                                <select class="form-control" name="permanent_district"
                                                    id="permanent_district">
                                                </select>

                                                @error('permanent_district')
                                                    <span class="invalid-feedback show" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-12">
                                            <div class="form-group">
                                                <label for="permanent_thana" class="required">থানা <span
                                                        style="color: red;">*</span></label>
                                                <select class="form-control" name="permanent_thana" id="permanent_thana">

                                                </select>

                                                @error('permanent_thana')
                                                    <span class="invalid-feedback show" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="permanent_post_code">পোস্ট কোড <span
                                                        style="color: red;">*</span></label>
                                                <input class="form-control" type="text" name="permanent_post_code"
                                                    maxlength="4">

                                                @error('permanent_post_code')
                                                    <span class="invalid-feedback show" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </section>


                                <section class="section box-shadow">
                                    <div class="uploader field formControl">
                                        <div style="border:0; width: 100%;">
                                            <h2
                                                style="font-family: 'Hind Siliguri',sans-serif; color: #3d4e5e; font-size: 20px;">
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; প্রার্থীর ছবি <span
                                                    style="color: red;">*</span></h2>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="preview">
                                                        <img name="ApplicantPhoto" id="ApplicantPhotoImage"
                                                            src="http://gsaext.teletalk.com.bd/assets/images/default-photo.jpg"
                                                            style="width: 150px;">
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="file-input">
                                                        <label>ছবির দৈর্ঘ্য ও প্রস্থ্য অবশ্যই <strong> 300X300
                                                            </strong>
                                                            পিক্সেল এবং সাইজ <strong>100</strong> কিলোবাইটের নিচে হতে
                                                            হবে।
                                                        </label>
                                                        <input type="file" title="Applicant's Photo" name="image"
                                                            id="ApplicantPhoto" class="photo form-control"
                                                            accept="image/jpeg/png/jpg">
                                                    </div>
                                                </div>
                                                @error('image')
                                                    <span class="invalid-feedback show" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Photo upload ends -->
                                </section>

                                <section class="section box-shadow">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="">Bkash / Nagad Transcation ID <span
                                                        style="color: red;">*</span> </label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <br>
                                <div class="row">
                                    <div class="col-md-4 m-auto">
                                        <button class="btn btn-parimary btn-block">Submit</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>

                    </div>
                </div>
        </section>
        <br>

        <br>
    </main>
@endsection
