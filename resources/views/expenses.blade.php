<?php $page = 'expenses'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Expenses
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Expenses
        @endslot
    @endcomponent

    @component('components.searchfilter')
    @endcomponent

    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table mb-0 datatable">
                    <thead>
                        <tr>
                            <th>Item</th>
                            <th>Purchase From</th>
                            <th>Purchase Date</th>
                            <th>Purchased By</th>
                            <th>Amount</th>
                            <th>Paid By</th>
                            <th class="text-center">Status</th>
                            <th class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <strong>Dell Laptop</strong>
                            </td>
                            <td>Amazon</td>
                            <td>5 Jan 2019</td>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{url('profile')}}" class="avatar avatar-xs"><img src="{{ URL::asset('assets/img/profiles/avatar-04.jpg')}}" alt="User Image"></a>
                                    <a href="{{url('profile')}}">Loren Gatlin</a>
                                </h2>
                            </td>
                            <td>$1215</td>
                            <td>Cash</td>
                            <td class="text-center">
                                <div class="dropdown action-label">
                                    <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-regular fa-circle-dot text-danger"></i> Pending
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i> Pending</a>
                                        <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-success"></i> Approved</a>
                                    </div>
                                </div>
                            </td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_expense"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_expense"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Mac System</strong>
                            </td>
                            <td>Amazon</td>
                            <td>5 Jan 2019</td>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{url('profile')}}" class="avatar avatar-xs"><img src="{{ URL::asset('assets/img/profiles/avatar-03.jpg')}}" alt="User Image"></a>
                                    <a href="{{url('profile')}}">Tarah Shropshire</a>
                                </h2>
                            </td>
                            <td>$1215</td>
                            <td>Cheque</td>
                            <td class="text-center">
                                <div class="dropdown action-label">
                                    <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-regular fa-circle-dot text-success"></i> Approved
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i> Pending</a>
                                        <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-success"></i> Approved</a>
                                    </div>
                                </div>
                            </td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_expense"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_expense"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
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
    <!-- /Page Content -->

    @component('components.model-popup')
    @endcomponent
@endsection
