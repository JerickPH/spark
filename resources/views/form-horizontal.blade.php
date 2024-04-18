<?php $page = 'form-horizontal'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Horizontal Form
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Horizontal Form
        @endslot
    @endcomponent


    <div class="row">
        <div class="col-xl-6 d-flex">
            <div class="card flex-fill">
                <div class="card-header">
                    <h4 class="card-title mb-0">Basic Form</h4>
                </div>
                <div class="card-body">
                    <form action="#">
                        <div class="input-block mb-3 row">
                            <label class="col-lg-3 col-form-label">First Name</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="input-block mb-3 row">
                            <label class="col-lg-3 col-form-label">Last Name</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="input-block mb-3 row">
                            <label class="col-lg-3 col-form-label">Email Address</label>
                            <div class="col-lg-9">
                                <input type="email" class="form-control">
                            </div>
                        </div>
                        <div class="input-block mb-3 row">
                            <label class="col-lg-3 col-form-label">Username</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="input-block mb-3 row">
                            <label class="col-lg-3 col-form-label">Password</label>
                            <div class="col-lg-9">
                                <input type="password" class="form-control">
                            </div>
                        </div>
                        <div class="input-block mb-3 row">
                            <label class="col-lg-3 col-form-label">Repeat Password</label>
                            <div class="col-lg-9">
                                <input type="password" class="form-control">
                            </div>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-xl-6 d-flex">
            <div class="card flex-fill">
                <div class="card-header">
                    <h4 class="card-title mb-0">Address Form</h4>
                </div>
                <div class="card-body">
                    <form action="#">
                        <div class="input-block mb-3 row">
                            <label class="col-lg-3 col-form-label">Address 1</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="input-block mb-3 row">
                            <label class="col-lg-3 col-form-label">Address 2</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="input-block mb-3 row">
                            <label class="col-lg-3 col-form-label">City</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="input-block mb-3 row">
                            <label class="col-lg-3 col-form-label">State</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="input-block mb-3 row">
                            <label class="col-lg-3 col-form-label">Country</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="input-block mb-3 row">
                            <label class="col-lg-3 col-form-label">Postal Code</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Two Column Horizontal Form</h4>
                </div>
                <div class="card-body">
                    <h4 class="card-title">Personal Information</h4>
                    <form action="#">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="input-block mb-3 row">
                                    <label class="col-lg-3 col-form-label">First Name</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="input-block mb-3 row">
                                    <label class="col-lg-3 col-form-label">Last Name</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="input-block mb-3 row">
                                    <label class="col-lg-3 col-form-label">Gender</label>
                                    <div class="col-lg-9">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender"
                                                id="gender_male" value="option1" checked>
                                            <label class="form-check-label" for="gender_male">
                                                Male
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender"
                                                id="gender_female" value="option2">
                                            <label class="form-check-label" for="gender_female">
                                                Female
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-block mb-3 row">
                                    <label class="col-lg-3 col-form-label">Blood Group</label>
                                    <div class="col-lg-9">
                                        <select class="select">
                                            <option>Select</option>
                                            <option value="1">A+</option>
                                            <option value="2">O+</option>
                                            <option value="3">B+</option>
                                            <option value="4">AB+</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="input-block mb-3 row">
                                    <label class="col-lg-3 col-form-label">Username</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="input-block mb-3 row">
                                    <label class="col-lg-3 col-form-label">Email</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="input-block mb-3 row">
                                    <label class="col-lg-3 col-form-label">Password</label>
                                    <div class="col-lg-9">
                                        <input type="password" class="form-control">
                                    </div>
                                </div>
                                <div class="input-block mb-3 row">
                                    <label class="col-lg-3 col-form-label">Repeat Password</label>
                                    <div class="col-lg-9">
                                        <input type="password" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h4 class="card-title">Address</h4>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="input-block mb-3 row">
                                    <label class="col-lg-3 col-form-label">Address Line 1</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="input-block mb-3 row">
                                    <label class="col-lg-3 col-form-label">Address Line 2</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="input-block mb-3 row">
                                    <label class="col-lg-3 col-form-label">State</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="input-block mb-3 row">
                                    <label class="col-lg-3 col-form-label">City</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="input-block mb-3 row">
                                    <label class="col-lg-3 col-form-label">Country</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="input-block mb-3 row">
                                    <label class="col-lg-3 col-form-label">Postal Code</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-0">
                <div class="card-header">
                    <h4 class="card-title mb-0">Two Column Horizontal Form</h4>
                </div>
                <div class="card-body">
                    <form action="#">
                        <div class="row">
                            <div class="col-xl-6">
                                <h4 class="card-title">Personal Details</h4>
                                <div class="input-block mb-3 row">
                                    <label class="col-lg-3 col-form-label">First Name</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="input-block mb-3 row">
                                    <label class="col-lg-3 col-form-label">Last Name</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="input-block mb-3 row">
                                    <label class="col-lg-3 col-form-label">Password</label>
                                    <div class="col-lg-9">
                                        <input type="password" class="form-control">
                                    </div>
                                </div>
                                <div class="input-block mb-3 row">
                                    <label class="col-lg-3 col-form-label">State</label>
                                    <div class="col-lg-9">
                                        <select class="select">
                                            <option>Select State</option>
                                            <option value="1">California</option>
                                            <option value="2">Texas</option>
                                            <option value="3">Florida</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="input-block mb-3 row">
                                    <label class="col-lg-3 col-form-label">About</label>
                                    <div class="col-lg-9">
                                        <textarea rows="4" cols="5" class="form-control" placeholder="Enter message"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <h4 class="card-title">Personal details</h4>
                                <div class="row">
                                    <label class="col-lg-3 col-form-label">Name</label>
                                    <div class="col-lg-9">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-block mb-3">
                                                    <input type="text" placeholder="First Name" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-block mb-3">
                                                    <input type="text" placeholder="Last Name" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-block mb-3 row">
                                    <label class="col-lg-3 col-form-label">Email</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="input-block mb-3 row">
                                    <label class="col-lg-3 col-form-label">Phone</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="input-block mb-3 row">
                                    <label class="col-lg-3 col-form-label">Address</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control m-b-20">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-block mb-3">
                                                    <select class="select">
                                                        <option>Select Country</option>
                                                        <option value="1">USA</option>
                                                        <option value="2">France</option>
                                                        <option value="3">India</option>
                                                        <option value="4">Spain</option>
                                                    </select>
                                                </div>
                                                <div class="input-block mb-3">
                                                    <input type="text" placeholder="ZIP code" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-block mb-3">
                                                    <input type="text" placeholder="State/Province"
                                                        class="form-control">
                                                </div>
                                                <div class="input-block mb-3">
                                                    <input type="text" placeholder="City" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection