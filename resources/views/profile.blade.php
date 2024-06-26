<?php $page = 'profile'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Profile
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Profile
        @endslot
    @endcomponent



    <div class="card mb-0">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="profile-view">
                        <div class="profile-img-wrap">
                            <div class="profile-img">
                                <a href="#"><img alt=""
                                        src="{{ URL::asset('assets/img/profiles/avatar-02.jpg') }}"></a>
                            </div>
                        </div>
                        <div class="profile-basic">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="profile-info-left">
                                        <h3 class="user-name m-t-0 mb-0">John Doe</h3>
                                        <h6 class="text-muted">UI/UX Design Team</h6>
                                        <small class="text-muted">Web Designer</small>
                                        <div class="staff-id">Employee ID : FT-0001</div>
                                        <div class="small doj text-muted">Date of Join : 1st Jan 2013</div>
                                        <div class="staff-msg"><a class="btn btn-custom" href="{{ url('chat') }}">Send
                                                Message</a></div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <ul class="personal-info">
                                        <li>
                                            <div class="title">Phone:</div>
                                            <div class="text"><a href="">9876543210</a></div>
                                        </li>
                                        <li>
                                            <div class="title">Email:</div>
                                            <div class="text"><a href="">johndoe@example.com</a></div>
                                        </li>
                                        <li>
                                            <div class="title">Birthday:</div>
                                            <div class="text">24th July</div>
                                        </li>
                                        <li>
                                            <div class="title">Address:</div>
                                            <div class="text">1861 Bayonne Ave, Manchester Township, NJ, 08759</div>
                                        </li>
                                        <li>
                                            <div class="title">Gender:</div>
                                            <div class="text">Male</div>
                                        </li>
                                        <li>
                                            <div class="title">Reports to:</div>
                                            <div class="text">
                                                <div class="avatar-box">
                                                    <div class="avatar avatar-xs">
                                                        <img src="{{ URL::asset('assets/img/profiles/avatar-16.jpg') }}"
                                                            alt="">
                                                    </div>
                                                </div>
                                                <a href="{{ url('profile') }}">
                                                    Jeffery Lalor
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="pro-edit"><a data-bs-target="#profile_info" data-bs-toggle="modal" class="edit-icon"
                                href="#"><i class="fa fa-pencil"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card tab-box">
        <div class="row user-tabs">
            <div class="col-lg-12 col-md-12 col-sm-12 line-tabs">
                <ul class="nav nav-tabs nav-tabs-bottom">
                    <li class="nav-item"><a href="#emp_profile" data-bs-toggle="tab" class="nav-link active">Profile</a>
                    </li>
                    <li class="nav-item"><a href="#emp_projects" data-bs-toggle="tab" class="nav-link">Projects</a></li>
                    <li class="nav-item"><a href="#bank_statutory" data-bs-toggle="tab" class="nav-link">Bank & Statutory
                            <small class="text-danger">(Admin Only)</small></a></li>
                    <li class="nav-item"><a href="#emp_assets" data-bs-toggle="tab" class="nav-link">Assets</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="tab-content">

        <!-- Profile Info Tab -->
        <div id="emp_profile" class="pro-overview tab-pane fade show active">
            <div class="row">
                <div class="col-md-6 d-flex">
                    <div class="card profile-box flex-fill">
                        <div class="card-body">
                            <h3 class="card-title">Personal Informations <a href="#" class="edit-icon"
                                    data-bs-toggle="modal" data-bs-target="#personal_info_modal"><i
                                        class="fa fa-pencil"></i></a></h3>
                            <ul class="personal-info">
                                <li>
                                    <div class="title">Passport No.</div>
                                    <div class="text">9876543210</div>
                                </li>
                                <li>
                                    <div class="title">Passport Exp Date.</div>
                                    <div class="text">9876543210</div>
                                </li>
                                <li>
                                    <div class="title">Tel</div>
                                    <div class="text"><a href="">9876543210</a></div>
                                </li>
                                <li>
                                    <div class="title">Nationality</div>
                                    <div class="text">Indian</div>
                                </li>
                                <li>
                                    <div class="title">Religion</div>
                                    <div class="text">Christian</div>
                                </li>
                                <li>
                                    <div class="title">Marital status</div>
                                    <div class="text">Married</div>
                                </li>
                                <li>
                                    <div class="title">Employment of spouse</div>
                                    <div class="text">No</div>
                                </li>
                                <li>
                                    <div class="title">No. of children</div>
                                    <div class="text">2</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex">
                    <div class="card profile-box flex-fill">
                        <div class="card-body">
                            <h3 class="card-title">Emergency Contact <a href="#" class="edit-icon"
                                    data-bs-toggle="modal" data-bs-target="#emergency_contact_modal"><i
                                        class="fa fa-pencil"></i></a></h3>
                            <h5 class="section-title">Primary</h5>
                            <ul class="personal-info">
                                <li>
                                    <div class="title">Name</div>
                                    <div class="text">John Doe</div>
                                </li>
                                <li>
                                    <div class="title">Relationship</div>
                                    <div class="text">Father</div>
                                </li>
                                <li>
                                    <div class="title">Phone </div>
                                    <div class="text">9876543210, 9876543210</div>
                                </li>
                            </ul>
                            <hr>
                            <h5 class="section-title">Secondary</h5>
                            <ul class="personal-info">
                                <li>
                                    <div class="title">Name</div>
                                    <div class="text">Karen Wills</div>
                                </li>
                                <li>
                                    <div class="title">Relationship</div>
                                    <div class="text">Brother</div>
                                </li>
                                <li>
                                    <div class="title">Phone </div>
                                    <div class="text">9876543210, 9876543210</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 d-flex">
                    <div class="card profile-box flex-fill">
                        <div class="card-body">
                            <h3 class="card-title">Bank information</h3>
                            <ul class="personal-info">
                                <li>
                                    <div class="title">Bank name</div>
                                    <div class="text">ICICI Bank</div>
                                </li>
                                <li>
                                    <div class="title">Bank account No.</div>
                                    <div class="text">159843014641</div>
                                </li>
                                <li>
                                    <div class="title">IFSC Code</div>
                                    <div class="text">ICI24504</div>
                                </li>
                                <li>
                                    <div class="title">PAN No</div>
                                    <div class="text">TC000Y56</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex">
                    <div class="card profile-box flex-fill">
                        <div class="card-body">
                            <h3 class="card-title">Family Informations <a href="#" class="edit-icon"
                                    data-bs-toggle="modal" data-bs-target="#family_info_modal"><i
                                        class="fa fa-pencil"></i></a></h3>
                            <div class="table-responsive">
                                <table class="table table-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Relationship</th>
                                            <th>Date of Birth</th>
                                            <th>Phone</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Leo</td>
                                            <td>Brother</td>
                                            <td>Feb 16th, 2019</td>
                                            <td>9876543210</td>
                                            <td class="text-end">
                                                <div class="dropdown dropdown-action">
                                                    <a aria-expanded="false" data-bs-toggle="dropdown" class="action-icon dropdown-toggle" href="#"><i class="material-icons">more_vert</i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="#" class="dropdown-item"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                                        <a href="#" class="dropdown-item"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 d-flex">
                    <div class="card profile-box flex-fill">
                        <div class="card-body">
                            <h3 class="card-title">Education Informations <a href="#" class="edit-icon"
                                    data-bs-toggle="modal" data-bs-target="#education_info"><i
                                        class="fa fa-pencil"></i></a></h3>
                            <div class="experience-box">
                                <ul class="experience-list">
                                    <li>
                                        <div class="experience-user">
                                            <div class="before-circle"></div>
                                        </div>
                                        <div class="experience-content">
                                            <div class="timeline-content">
                                                <a href="#/" class="name">International College of Arts and Science
                                                    (UG)</a>
                                                <div>Bsc Computer Science</div>
                                                <span class="time">2000 - 2003</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="experience-user">
                                            <div class="before-circle"></div>
                                        </div>
                                        <div class="experience-content">
                                            <div class="timeline-content">
                                                <a href="#/" class="name">International College of Arts and Science
                                                    (PG)</a>
                                                <div>Msc Computer Science</div>
                                                <span class="time">2000 - 2003</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex">
                    <div class="card profile-box flex-fill">
                        <div class="card-body">
                            <h3 class="card-title">Experience <a href="#" class="edit-icon" data-bs-toggle="modal"
                                    data-bs-target="#experience_info"><i class="fa fa-pencil"></i></a></h3>
                            <div class="experience-box">
                                <ul class="experience-list">
                                    <li>
                                        <div class="experience-user">
                                            <div class="before-circle"></div>
                                        </div>
                                        <div class="experience-content">
                                            <div class="timeline-content">
                                                <a href="#/" class="name">Web Designer at Zen Corporation</a>
                                                <span class="time">Jan 2013 - Present (5 years 2 months)</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="experience-user">
                                            <div class="before-circle"></div>
                                        </div>
                                        <div class="experience-content">
                                            <div class="timeline-content">
                                                <a href="#/" class="name">Web Designer at Ron-tech</a>
                                                <span class="time">Jan 2013 - Present (5 years 2 months)</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="experience-user">
                                            <div class="before-circle"></div>
                                        </div>
                                        <div class="experience-content">
                                            <div class="timeline-content">
                                                <a href="#/" class="name">Web Designer at Dalt Technology</a>
                                                <span class="time">Jan 2013 - Present (5 years 2 months)</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Profile Info Tab -->

        <!-- Projects Tab -->
        <div class="tab-pane fade" id="emp_projects">
            <div class="row">
                <div class="col-lg-4 col-sm-6 col-md-4 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="dropdown profile-action">
                                <a aria-expanded="false" data-bs-toggle="dropdown" class="action-icon dropdown-toggle"
                                    href="#"><i class="material-icons">more_vert</i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a data-bs-target="#edit_project" data-bs-toggle="modal" href="#"
                                        class="dropdown-item"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                    <a data-bs-target="#delete_project" data-bs-toggle="modal" href="#"
                                        class="dropdown-item"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                </div>
                            </div>
                            <h4 class="project-title"><a href="{{ url('project-view') }}">Office Management</a></h4>
                            <small class="block text-ellipsis m-b-15">
                                <span class="text-xs">1</span> <span class="text-muted">open tasks, </span>
                                <span class="text-xs">9</span> <span class="text-muted">tasks completed</span>
                            </small>
                            <p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. When an unknown printer took a galley of type and
                                scrambled it...
                            </p>
                            <div class="pro-deadline m-b-15">
                                <div class="sub-title">
                                    Deadline:
                                </div>
                                <div class="text-muted">
                                    17 Apr 2019
                                </div>
                            </div>
                            <div class="project-members m-b-15">
                                <div>Project Leader :</div>
                                <ul class="team-members">
                                    <li>
                                        <a href="#" data-bs-toggle="tooltip" title="Jeffery Lalor"><img
                                                alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-16.jpg') }}"></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="project-members m-b-15">
                                <div>Team :</div>
                                <ul class="team-members">
                                    <li>
                                        <a href="#" data-bs-toggle="tooltip" title="John Doe"><img alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-02.jpg') }}"></a>
                                    </li>
                                    <li>
                                        <a href="#" data-bs-toggle="tooltip" title="Richard Miles"><img
                                                alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-09.jpg') }}"></a>
                                    </li>
                                    <li>
                                        <a href="#" data-bs-toggle="tooltip" title="John Smith"><img
                                                alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-10.jpg') }}"></a>
                                    </li>
                                    <li>
                                        <a href="#" data-bs-toggle="tooltip" title="Mike Litorus"><img
                                                alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-05.jpg') }}"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="all-users">+15</a>
                                    </li>
                                </ul>
                            </div>
                            <p class="m-b-5">Progress <span class="text-success float-end">40%</span></p>
                            <div class="progress progress-xs mb-0">
                                <div style="width: 40%" title="" data-bs-toggle="tooltip" role="progressbar"
                                    class="progress-bar bg-success" data-original-title="40%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-md-4 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="dropdown profile-action">
                                <a aria-expanded="false" data-bs-toggle="dropdown" class="action-icon dropdown-toggle"
                                    href="#"><i class="material-icons">more_vert</i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a data-bs-target="#edit_project" data-bs-toggle="modal" href="#"
                                        class="dropdown-item"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                    <a data-bs-target="#delete_project" data-bs-toggle="modal" href="#"
                                        class="dropdown-item"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                </div>
                            </div>
                            <h4 class="project-title"><a href="{{ url('project-view') }}">Project Management</a></h4>
                            <small class="block text-ellipsis m-b-15">
                                <span class="text-xs">2</span> <span class="text-muted">open tasks, </span>
                                <span class="text-xs">5</span> <span class="text-muted">tasks completed</span>
                            </small>
                            <p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. When an unknown printer took a galley of type and
                                scrambled it...
                            </p>
                            <div class="pro-deadline m-b-15">
                                <div class="sub-title">
                                    Deadline:
                                </div>
                                <div class="text-muted">
                                    17 Apr 2019
                                </div>
                            </div>
                            <div class="project-members m-b-15">
                                <div>Project Leader :</div>
                                <ul class="team-members">
                                    <li>
                                        <a href="#" data-bs-toggle="tooltip" title="Jeffery Lalor"><img
                                                alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-16.jpg') }}"></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="project-members m-b-15">
                                <div>Team :</div>
                                <ul class="team-members">
                                    <li>
                                        <a href="#" data-bs-toggle="tooltip" title="John Doe"><img alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-02.jpg') }}"></a>
                                    </li>
                                    <li>
                                        <a href="#" data-bs-toggle="tooltip" title="Richard Miles"><img
                                                alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-09.jpg') }}"></a>
                                    </li>
                                    <li>
                                        <a href="#" data-bs-toggle="tooltip" title="John Smith"><img
                                                alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-10.jpg') }}"></a>
                                    </li>
                                    <li>
                                        <a href="#" data-bs-toggle="tooltip" title="Mike Litorus"><img
                                                alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-05.jpg') }}"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="all-users">+15</a>
                                    </li>
                                </ul>
                            </div>
                            <p class="m-b-5">Progress <span class="text-success float-end">40%</span></p>
                            <div class="progress progress-xs mb-0">
                                <div style="width: 40%" title="" data-bs-toggle="tooltip" role="progressbar"
                                    class="progress-bar bg-success" data-original-title="40%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-md-4 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="dropdown profile-action">
                                <a aria-expanded="false" data-bs-toggle="dropdown" class="action-icon dropdown-toggle"
                                    href="#"><i class="material-icons">more_vert</i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a data-bs-target="#edit_project" data-bs-toggle="modal" href="#"
                                        class="dropdown-item"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                    <a data-bs-target="#delete_project" data-bs-toggle="modal" href="#"
                                        class="dropdown-item"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                </div>
                            </div>
                            <h4 class="project-title"><a href="{{ url('project-view') }}">Video Calling App</a></h4>
                            <small class="block text-ellipsis m-b-15">
                                <span class="text-xs">3</span> <span class="text-muted">open tasks, </span>
                                <span class="text-xs">3</span> <span class="text-muted">tasks completed</span>
                            </small>
                            <p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. When an unknown printer took a galley of type and
                                scrambled it...
                            </p>
                            <div class="pro-deadline m-b-15">
                                <div class="sub-title">
                                    Deadline:
                                </div>
                                <div class="text-muted">
                                    17 Apr 2019
                                </div>
                            </div>
                            <div class="project-members m-b-15">
                                <div>Project Leader :</div>
                                <ul class="team-members">
                                    <li>
                                        <a href="#" data-bs-toggle="tooltip" title="Jeffery Lalor"><img
                                                alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-16.jpg') }}"></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="project-members m-b-15">
                                <div>Team :</div>
                                <ul class="team-members">
                                    <li>
                                        <a href="#" data-bs-toggle="tooltip" title="John Doe"><img alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-02.jpg') }}"></a>
                                    </li>
                                    <li>
                                        <a href="#" data-bs-toggle="tooltip" title="Richard Miles"><img
                                                alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-09.jpg') }}"></a>
                                    </li>
                                    <li>
                                        <a href="#" data-bs-toggle="tooltip" title="John Smith"><img
                                                alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-10.jpg') }}"></a>
                                    </li>
                                    <li>
                                        <a href="#" data-bs-toggle="tooltip" title="Mike Litorus"><img
                                                alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-05.jpg') }}"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="all-users">+15</a>
                                    </li>
                                </ul>
                            </div>
                            <p class="m-b-5">Progress <span class="text-success float-end">40%</span></p>
                            <div class="progress progress-xs mb-0">
                                <div style="width: 40%" title="" data-bs-toggle="tooltip" role="progressbar"
                                    class="progress-bar bg-success" data-original-title="40%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-md-4 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="dropdown profile-action">
                                <a aria-expanded="false" data-bs-toggle="dropdown" class="action-icon dropdown-toggle"
                                    href="#"><i class="material-icons">more_vert</i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a data-bs-target="#edit_project" data-bs-toggle="modal" href="#"
                                        class="dropdown-item"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                    <a data-bs-target="#delete_project" data-bs-toggle="modal" href="#"
                                        class="dropdown-item"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                </div>
                            </div>
                            <h4 class="project-title"><a href="{{ url('project-view') }}">Hospital Administration</a>
                            </h4>
                            <small class="block text-ellipsis m-b-15">
                                <span class="text-xs">12</span> <span class="text-muted">open tasks, </span>
                                <span class="text-xs">4</span> <span class="text-muted">tasks completed</span>
                            </small>
                            <p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. When an unknown printer took a galley of type and
                                scrambled it...
                            </p>
                            <div class="pro-deadline m-b-15">
                                <div class="sub-title">
                                    Deadline:
                                </div>
                                <div class="text-muted">
                                    17 Apr 2019
                                </div>
                            </div>
                            <div class="project-members m-b-15">
                                <div>Project Leader :</div>
                                <ul class="team-members">
                                    <li>
                                        <a href="#" data-bs-toggle="tooltip" title="Jeffery Lalor"><img
                                                alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-16.jpg') }}"></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="project-members m-b-15">
                                <div>Team :</div>
                                <ul class="team-members">
                                    <li>
                                        <a href="#" data-bs-toggle="tooltip" title="John Doe"><img alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-02.jpg') }}"></a>
                                    </li>
                                    <li>
                                        <a href="#" data-bs-toggle="tooltip" title="Richard Miles"><img
                                                alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-09.jpg') }}"></a>
                                    </li>
                                    <li>
                                        <a href="#" data-bs-toggle="tooltip" title="John Smith"><img
                                                alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-10.jpg') }}"></a>
                                    </li>
                                    <li>
                                        <a href="#" data-bs-toggle="tooltip" title="Mike Litorus"><img
                                                alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-05.jpg') }}"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="all-users">+15</a>
                                    </li>
                                </ul>
                            </div>
                            <p class="m-b-5">Progress <span class="text-success float-end">40%</span></p>
                            <div class="progress progress-xs mb-0">
                                <div style="width: 40%" title="" data-bs-toggle="tooltip" role="progressbar"
                                    class="progress-bar bg-success" data-original-title="40%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Projects Tab -->

        <!-- Bank Statutory Tab -->
        <div class="tab-pane fade" id="bank_statutory">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title"> Basic Salary Information</h3>
                    <form>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Salary basis <span class="text-danger">*</span></label>
                                    <select class="select">
                                        <option>Select salary basis type</option>
                                        <option>Hourly</option>
                                        <option>Daily</option>
                                        <option>Weekly</option>
                                        <option>Monthly</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Salary amount <small class="text-muted">per
                                            month</small></label>
                                    <div class="input-group">
                                        <span class="input-group-text">$</span>
                                        <input type="text" class="form-control" placeholder="Type your salary amount"
                                            value="0.00">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Payment type</label>
                                    <select class="select">
                                        <option>Select payment type</option>
                                        <option>Bank transfer</option>
                                        <option>Check</option>
                                        <option>Cash</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h3 class="card-title"> PF Information</h3>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">PF contribution</label>
                                    <select class="select">
                                        <option>Select PF contribution</option>
                                        <option>Yes</option>
                                        <option>No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">PF No. <span class="text-danger">*</span></label>
                                    <select class="select">
                                        <option>Select PF contribution</option>
                                        <option>Yes</option>
                                        <option>No</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Employee PF rate</label>
                                    <select class="select">
                                        <option>Select PF contribution</option>
                                        <option>Yes</option>
                                        <option>No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Additional rate <span
                                            class="text-danger">*</span></label>
                                    <select class="select">
                                        <option>Select additional rate</option>
                                        <option>0%</option>
                                        <option>1%</option>
                                        <option>2%</option>
                                        <option>3%</option>
                                        <option>4%</option>
                                        <option>5%</option>
                                        <option>6%</option>
                                        <option>7%</option>
                                        <option>8%</option>
                                        <option>9%</option>
                                        <option>10%</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Total rate</label>
                                    <input type="text" class="form-control" placeholder="N/A" value="11%">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Employee PF rate</label>
                                    <select class="select">
                                        <option>Select PF contribution</option>
                                        <option>Yes</option>
                                        <option>No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Additional rate <span
                                            class="text-danger">*</span></label>
                                    <select class="select">
                                        <option>Select additional rate</option>
                                        <option>0%</option>
                                        <option>1%</option>
                                        <option>2%</option>
                                        <option>3%</option>
                                        <option>4%</option>
                                        <option>5%</option>
                                        <option>6%</option>
                                        <option>7%</option>
                                        <option>8%</option>
                                        <option>9%</option>
                                        <option>10%</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Total rate</label>
                                    <input type="text" class="form-control" placeholder="N/A" value="11%">
                                </div>
                            </div>
                        </div>

                        <hr>
                        <h3 class="card-title"> ESI Information</h3>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">ESI contribution</label>
                                    <select class="select">
                                        <option>Select ESI contribution</option>
                                        <option>Yes</option>
                                        <option>No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">ESI No. <span class="text-danger">*</span></label>
                                    <select class="select">
                                        <option>Select ESI contribution</option>
                                        <option>Yes</option>
                                        <option>No</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Employee ESI rate</label>
                                    <select class="select">
                                        <option>Select ESI contribution</option>
                                        <option>Yes</option>
                                        <option>No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Additional rate <span
                                            class="text-danger">*</span></label>
                                    <select class="select">
                                        <option>Select additional rate</option>
                                        <option>0%</option>
                                        <option>1%</option>
                                        <option>2%</option>
                                        <option>3%</option>
                                        <option>4%</option>
                                        <option>5%</option>
                                        <option>6%</option>
                                        <option>7%</option>
                                        <option>8%</option>
                                        <option>9%</option>
                                        <option>10%</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Total rate</label>
                                    <input type="text" class="form-control" placeholder="N/A" value="11%">
                                </div>
                            </div>
                        </div>

                        <div class="submit-section">
                            <button class="btn btn-primary submit-btn" type="submit">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /Bank Statutory Tab -->
        <!-- Assets -->
						<div class="tab-pane fade" id="emp_assets">
							<div class="table-responsive table-newdatatable">
								<table class="table table-new custom-table mb-0 datatable">
									<thead>
										<tr>
											<th>#</th>
											<th>Name</th>
											<th>Asset ID</th>
											<th>Assigned Date</th>
											<th>Assignee</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>
												<a href="{{url('assets-details')}}" class="table-imgname">
													<img src="{{ URL::asset('assets/img/laptop.png')}}" class="me-2" alt="Laptop Image">
													<span>Laptop</span>
												</a>
											</td>
											<td>AST - 001</td>
											<td>22 Nov, 2022    10:32AM</td>
											<td class="table-namesplit">
												<a href="javascript:void(0);" class="table-profileimage">
													<img src="{{ URL::asset('assets/img/profiles/avatar-02.jpg')}}" class="me-2" alt="User Image">
												</a>
												<a href="javascript:void(0);" class="table-name">
													<span>John Paul Raj</span>
													<p>john@dreamguystech.com</p>
												</a>
											</td>
											<td>
												<div class="table-actions d-flex">
													<a class="delete-table me-2" href="{{url('user-asset-details')}}">
													   <img src="{{ URL::asset('assets/img/icons/eye.svg')}}" alt="Eye Icon">
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>2</td>
											<td>
												<a href="{{url('assets-details')}}" class="table-imgname">
													<img src="{{ URL::asset('assets/img/laptop.png')}}" class="me-2" alt="Laptop Image">
													<span>Laptop</span>
												</a>
											</td>
											<td>AST - 002</td>
											<td>22 Nov, 2022    10:32AM</td>
											<td class="table-namesplit">
												<a href="javascript:void(0);" class="table-profileimage" data-bs-toggle="modal" data-bs-target="#edit-asset">
													<img src="{{ URL::asset('assets/img/profiles/avatar-05.jpg')}}" class="me-2" alt="User Image">
												</a>
												<a href="javascript:void(0);" class="table-name">
													<span>Vinod Selvaraj</span>
													<p>vinod.s@dreamguystech.com</p>
												</a>
											</td>
											<td>
												<div class="table-actions d-flex">
													<a class="delete-table me-2" href="{{url('user-asset-details')}}">
													   <img src="{{ URL::asset('assets/img/icons/eye.svg')}}" alt="Eye Icon">
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>3</td>
											<td>
												<a href="{{url('assets-details')}}" class="table-imgname">
													<img src="{{ URL::asset('assets/img/keyboard.png')}}" class="me-2" alt="Keyboard Image">
													<span>Dell Keyboard</span>
												</a>
											</td>
											<td>AST - 003</td>
											<td>22 Nov, 2022    10:32AM</td>
											<td class="table-namesplit">
												<a href="javascript:void(0);" class="table-profileimage" data-bs-toggle="modal" data-bs-target="#edit-asset">
													<img src="{{ URL::asset('assets/img/profiles/avatar-03.jpg')}}" class="me-2" alt="User Image">
												</a>
												<a href="javascript:void(0);" class="table-name">
													<span>Harika </span>
													<p>harika.v@dreamguystech.com</p>
												</a>
											</td>
											<td>
												<div class="table-actions d-flex">
													<a class="delete-table me-2" href="{{url('user-asset-details')}}">
													   <img src="{{ URL::asset('assets/img/icons/eye.svg')}}" alt="Eye Icon">
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>4</td>
											<td>
												<a href="#" class="table-imgname">
													<img src="{{ URL::asset('assets/img/mouse.png')}}" class="me-2" alt="Mouse Image">
													<span>Logitech Mouse</span>
												</a>
											</td>
											<td>AST - 0024</td>
											<td>22 Nov, 2022    10:32AM</td>
											<td class="table-namesplit">
												<a href="{{url('assets-details')}}" class="table-profileimage" >
													<img src="{{ URL::asset('assets/img/profiles/avatar-02.jpg')}}" class="me-2" alt="User Image">
												</a>
												<a href="{{url('assets-details')}}" class="table-name">
													<span>Mythili</span>
													<p>mythili@dreamguystech.com</p>
												</a>
											</td>
											<td>
												<div class="table-actions d-flex">
													<a class="delete-table me-2" href="{{url('user-asset-details')}}">
													   <img src="{{ URL::asset('assets/img/icons/eye.svg')}}" alt="Eye Icon">
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>5</td>
											<td>
												<a href="#" class="table-imgname">
													<img src="{{ URL::asset('assets/img/laptop.png')}}" class="me-2" alt="Laptop Image">
													<span>Laptop</span>
												</a>
											</td>
											<td>AST - 005</td>
											<td>22 Nov, 2022    10:32AM</td>
											<td class="table-namesplit">
												<a href="{{url('assets-details')}}" class="table-profileimage" >
													<img src="{{ URL::asset('assets/img/profiles/avatar-02.jpg')}}" class="me-2" alt="User Image">
												</a>
												<a href="{{url('assets-details')}}" class="table-name">
													<span>John Paul Raj</span>
													<p>john@dreamguystech.com</p>
												</a>
											</td>
											<td>
												<div class="table-actions d-flex">
													<a class="delete-table me-2" href="{{url('user-asset-details')}}">
													   <img src="{{ URL::asset('assets/img/icons/eye.svg')}}" alt="Eye Icon">
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>6</td>
											<td>
												<a href="#" class="table-imgname">
													<img src="{{ URL::asset('assets/img/laptop.png')}}" class="me-2" alt="Laptop Image">
													<span>Laptop</span>
												</a>
											</td>
											<td>AST - 006</td>
											<td>22 Nov, 2022    10:32AM</td>
											<td class="table-namesplit">
												<a href="javascript:void(0);" class="table-profileimage" >
													<img src="{{ URL::asset('assets/img/profiles/avatar-05.jpg')}}" class="me-2" alt="User Image">
												</a>
												<a href="javascript:void(0);" class="table-name">
													<span>Vinod Selvaraj</span>
													<p>vinod.s@dreamguystech.com</p>
												</a>
											</td>
											<td>
												<div class="table-actions d-flex">
													<a class="delete-table me-2" href="{{url('user-asset-details')}}">
													   <img src="{{ URL::asset('assets/img/icons/eye.svg')}}" alt="Eye Icon">
													</a>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<!-- /Assets -->

    </div>
    </div>
    <!-- /Page Content -->

    @component('components.model-popup')
    @endcomponent
@endsection
