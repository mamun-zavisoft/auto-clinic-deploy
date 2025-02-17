<?php $page = 'users'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            @component('components.breadcrumb')
                @slot('title')
                    User List
                @endslot
                @slot('li_1')
                    Manage Your Users
                @endslot
                @slot('li_2')
                    Add New User
                @endslot
            @endcomponent

            <!-- /product list -->
            <div class="card table-list-card">
                <div class="card-body">
                    <div class="table-top">
                        <div class="search-set">
                            <div class="search-input">
                                <a href="" class="btn btn-searchset"><i data-feather="search"
                                        class="feather-search"></i></a>
                            </div>
                        </div>
                        <div class="search-path">
                            <div class="d-flex align-items-center">
                                <a class="btn btn-filter" id="filter_search">
                                    <i data-feather="filter" class="filter-icon"></i>
                                    <span><img src="{{ URL::asset('/build/img/icons/closes.svg') }}" alt="img"></span>
                                </a>
                            </div>
                        </div>
                        <div class="form-sort">
                            <i data-feather="sliders" class="info-img"></i>
                            <select class="select">
                                <option>Sort by Date</option>
                                <option>Newest</option>
                                <option>Oldest</option>
                            </select>
                        </div>
                    </div>
                    <!-- /Filter -->
                    <div class="card" id="filter_inputs">
                        <div class="card-body pb-0">
                            <div class="row">
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="input-blocks">
                                        <i data-feather="user" class="info-img"></i>
                                        <select class="select">
                                            <option>Choose Name</option>
                                            <option>Lilly</option>
                                            <option>Benjamin</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="input-blocks">
                                        <i data-feather="stop-circle" class="info-img"></i>
                                        <select class="select">
                                            <option>Choose Status</option>
                                            <option>Active</option>
                                            <option>Inactive</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="input-blocks">
                                        <i data-feather="zap" class="info-img"></i>
                                        <select class="select">
                                            <option>Choose Role</option>
                                            <option>Store Keeper</option>
                                            <option>Salesman</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="input-blocks">
                                        <a class="btn btn-filters ms-auto"> <i data-feather="search"
                                                class="feather-search"></i> Search </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Filter -->
                    <div class="table-responsive">
                        <table class="table datanew">
                            <thead>
                                <tr>
                                    <th class="no-sort">
                                        <label class="checkboxs">
                                            <input type="checkbox" id="select-all">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </th>
                                    <th>User Name</th>
                                    <th>Phone</th>
                                    <th>email</th>
                                    <th>Role</th>
                                    <th>Created On</th>
                                    <th>Status</th>
                                    <th class="no-sort">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <label class="checkboxs">
                                            <input type="checkbox">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <div class="userimgname">
                                            <a href="javascript:void(0);" class="userslist-img bg-img">
                                                <img src="{{ URL::asset('/build/img/users/user-23.jpg') }}" alt="product">
                                            </a>
                                            <div>
                                                <a href="javascript:void(0);">Thomas</a>
                                            </div>

                                        </div>
                                    </td>
                                    <td>+12163547758</td>
                                    <td>thomas@example.com</td>
                                    <td>Admin</td>
                                    <td>19 Jan 2023</td>
                                    <td><span class="badge badge-linedanger">Inactive</span></td>
                                    <td class="action-table-data">
                                        <div class="edit-delete-action">
                                            <a class="me-2 p-2 mb-0" href="javascript:void(0);">
                                                <i data-feather="eye" class="action-eye"></i>
                                            </a>
                                            <a class="me-2 p-2 mb-0" data-bs-toggle="modal" data-bs-target="#edit-units">
                                                <i data-feather="edit" class="feather-edit"></i>
                                            </a>
                                            <a class="me-2 confirm-text p-2 mb-0" href="javascript:void(0);">
                                                <i data-feather="trash-2" class="feather-trash-2"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="checkboxs">
                                            <input type="checkbox">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <div class="userimgname">
                                            <a href="javascript:void(0);" class="userslist-img">
                                                <img src="{{ URL::asset('/build/img/users/user-15.jpg') }}" alt="product">
                                            </a>
                                            <div>
                                                <a href="javascript:void(0);">Rose</a>
                                            </div>

                                        </div>
                                    </td>
                                    <td>+11367529510 </td>
                                    <td>rose@example.com</td>
                                    <td>Manager</td>
                                    <td>23 Jan 2023</td>
                                    <td><span class="badge badge-linesuccess">Active</span></td>
                                    <td class="action-table-data">
                                        <div class="edit-delete-action">
                                            <a class="me-2 p-2 mb-0" href="javascript:void(0);">
                                                <i data-feather="eye" class="action-eye"></i>
                                            </a>
                                            <a class="me-2 p-2 mb-0" data-bs-toggle="modal" data-bs-target="#edit-units">
                                                <i data-feather="edit" class="feather-edit"></i>
                                            </a>
                                            <a class="me-2 confirm-text p-2 mb-0" href="javascript:void(0);">
                                                <i data-feather="trash-2" class="feather-trash-2"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="checkboxs">
                                            <input type="checkbox">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <div class="userimgname">
                                            <a href="javascript:void(0);" class="userslist-img bg-img">
                                                <img src="{{ URL::asset('/build/img/users/user-16.jpg') }}"
                                                    alt="product">
                                            </a>
                                            <div>
                                                <a href="javascript:void(0);">Benjamin</a>
                                            </div>

                                        </div>
                                    </td>
                                    <td>+15362789414 </td>
                                    <td>benjamin@example.com</td>
                                    <td>Salesman</td>
                                    <td>07 Feb 2023</td>
                                    <td><span class="badge badge-linesuccess">Active</span></td>
                                    <td class="action-table-data">
                                        <div class="edit-delete-action">
                                            <a class="me-2 p-2 mb-0" href="javascript:void(0);">
                                                <i data-feather="eye" class="action-eye"></i>
                                            </a>
                                            <a class="me-2 p-2 mb-0" data-bs-toggle="modal" data-bs-target="#edit-units">
                                                <i data-feather="edit" class="feather-edit"></i>
                                            </a>
                                            <a class="me-2 confirm-text p-2 mb-0" href="javascript:void(0);">
                                                <i data-feather="trash-2" class="feather-trash-2"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="checkboxs">
                                            <input type="checkbox">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <div class="userimgname">
                                            <a href="javascript:void(0);" class="userslist-img">
                                                <img src="{{ URL::asset('/build/img/users/user-17.jpg') }}"
                                                    alt="product">
                                            </a>
                                            <div>
                                                <a href="javascript:void(0);">Kaitlin</a>
                                            </div>

                                        </div>
                                    </td>
                                    <td>+18513094627</td>
                                    <td>kaitlin@example.com</td>
                                    <td>Supervisor</td>
                                    <td>18 Feb 2023</td>
                                    <td><span class="badge badge-linesuccess">Active</span></td>
                                    <td class="action-table-data">
                                        <div class="edit-delete-action">
                                            <a class="me-2 p-2 mb-0" href="javascript:void(0);">
                                                <i data-feather="eye" class="action-eye"></i>
                                            </a>
                                            <a class="me-2 p-2 mb-0" data-bs-toggle="modal" data-bs-target="#edit-units">
                                                <i data-feather="edit" class="feather-edit"></i>
                                            </a>
                                            <a class="me-2 confirm-text p-2 mb-0" href="javascript:void(0);">
                                                <i data-feather="trash-2" class="feather-trash-2"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="checkboxs">
                                            <input type="checkbox">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <div class="userimgname">
                                            <a href="javascript:void(0);" class="userslist-img bg-img">
                                                <img src="{{ URL::asset('/build/img/users/user-18.jpg') }}"
                                                    alt="product">
                                            </a>
                                            <div>
                                                <a href="javascript:void(0);">Lilly</a>
                                            </div>

                                        </div>
                                    </td>
                                    <td>+14678219025</td>
                                    <td>lilly@example.com</td>
                                    <td>Store Keeper</td>
                                    <td>16 Mar 2023</td>
                                    <td><span class="badge badge-linedanger">Inactive</span></td>
                                    <td class="action-table-data">
                                        <div class="edit-delete-action">
                                            <a class="me-2 p-2 mb-0" href="javascript:void(0);">
                                                <i data-feather="eye" class="action-eye"></i>
                                            </a>
                                            <a class="me-2 p-2 mb-0" data-bs-toggle="modal" data-bs-target="#edit-units">
                                                <i data-feather="edit" class="feather-edit"></i>
                                            </a>
                                            <a class="me-2 confirm-text p-2 mb-0" href="javascript:void(0);">
                                                <i data-feather="trash-2" class="feather-trash-2"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="checkboxs">
                                            <input type="checkbox">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <div class="userimgname">
                                            <a href="javascript:void(0);" class="userslist-img bg-img">
                                                <img src="{{ URL::asset('/build/img/users/user-19.jpg') }}"
                                                    alt="product">
                                            </a>
                                            <div>
                                                <a href="javascript:void(0);">Freda</a>
                                            </div>

                                        </div>
                                    </td>
                                    <td>+10913278319</td>
                                    <td>freda@example.com</td>
                                    <td>Purchase</td>
                                    <td>29 Mar 2023</td>
                                    <td><span class="badge badge-linedanger">Inactive</span></td>
                                    <td class="action-table-data">
                                        <div class="edit-delete-action">
                                            <a class="me-2 p-2 mb-0" href="javascript:void(0);">
                                                <i data-feather="eye" class="action-eye"></i>
                                            </a>
                                            <a class="me-2 p-2 mb-0" data-bs-toggle="modal" data-bs-target="#edit-units">
                                                <i data-feather="edit" class="feather-edit"></i>
                                            </a>
                                            <a class="me-2 confirm-text p-2 mb-0" href="javascript:void(0);">
                                                <i data-feather="trash-2" class="feather-trash-2"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="checkboxs">
                                            <input type="checkbox">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <div class="userimgname">
                                            <a href="javascript:void(0);" class="userslist-img">
                                                <img src="{{ URL::asset('/build/img/users/user-20.jpg') }}"
                                                    alt="product">
                                            </a>
                                            <div>
                                                <a href="javascript:void(0);">Alwin</a>
                                            </div>

                                        </div>
                                    </td>
                                    <td>+19125852947</td>
                                    <td>alwin@example.com</td>
                                    <td>Delivery Biker</td>
                                    <td>03 Apr 2023</td>
                                    <td><span class="badge badge-linesuccess">Active</span></td>
                                    <td class="action-table-data">
                                        <div class="edit-delete-action">
                                            <a class="me-2 p-2 mb-0" href="javascript:void(0);">
                                                <i data-feather="eye" class="action-eye"></i>
                                            </a>
                                            <a class="me-2 p-2 mb-0" data-bs-toggle="modal" data-bs-target="#edit-units">
                                                <i data-feather="edit" class="feather-edit"></i>
                                            </a>
                                            <a class="me-2 confirm-text p-2 mb-0" href="javascript:void(0);">
                                                <i data-feather="trash-2" class="feather-trash-2"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="checkboxs">
                                            <input type="checkbox">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <div class="userimgname">
                                            <a href="javascript:void(0);" class="userslist-img">
                                                <img src="{{ URL::asset('/build/img/users/user-06.jpg') }}"
                                                    alt="product">
                                            </a>
                                            <div>
                                                <a href="javascript:void(0);">Maybelle</a>
                                            </div>

                                        </div>
                                    </td>
                                    <td>+13671835209</td>
                                    <td>maybelle@example.com</td>
                                    <td>Maintenance</td>
                                    <td>13 Apr 2023</td>
                                    <td><span class="badge badge-linesuccess">Active</span></td>
                                    <td class="action-table-data">
                                        <div class="edit-delete-action">
                                            <a class="me-2 p-2 mb-0" href="javascript:void(0);">
                                                <i data-feather="eye" class="action-eye"></i>
                                            </a>
                                            <a class="me-2 p-2 mb-0" data-bs-toggle="modal" data-bs-target="#edit-units">
                                                <i data-feather="edit" class="feather-edit"></i>
                                            </a>
                                            <a class="me-2 confirm-text p-2 mb-0" href="javascript:void(0);">
                                                <i data-feather="trash-2" class="feather-trash-2"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="checkboxs">
                                            <input type="checkbox">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <div class="userimgname">
                                            <a href="javascript:void(0);" class="userslist-img bg-img">
                                                <img src="{{ URL::asset('/build/img/users/user-21.jpg') }}"
                                                    alt="product">
                                            </a>
                                            <div>
                                                <a href="javascript:void(0);">Ellen</a>
                                            </div>

                                        </div>
                                    </td>
                                    <td>+19756194733</td>
                                    <td>ellen@example.com</td>
                                    <td>Quality Analyst</td>
                                    <td>17 May 2023</td>
                                    <td><span class="badge badge-linesuccess">Active</span></td>
                                    <td class="action-table-data">
                                        <div class="edit-delete-action">
                                            <a class="me-2 p-2 mb-0" href="javascript:void(0);">
                                                <i data-feather="eye" class="action-eye"></i>
                                            </a>
                                            <a class="me-2 p-2 mb-0" data-bs-toggle="modal" data-bs-target="#edit-units">
                                                <i data-feather="edit" class="feather-edit"></i>
                                            </a>
                                            <a class="me-2 confirm-text p-2 mb-0" href="javascript:void(0);">
                                                <i data-feather="trash-2" class="feather-trash-2"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="checkboxs">
                                            <input type="checkbox">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <div class="userimgname">
                                            <a href="javascript:void(0);" class="userslist-img">
                                                <img src="{{ URL::asset('/build/img/users/user-22.jpg') }}"
                                                    alt="product">
                                            </a>
                                            <div>
                                                <a href="javascript:void(0);">Grace</a>
                                            </div>

                                        </div>
                                    </td>
                                    <td>+19167850925</td>
                                    <td>grace@example.com</td>
                                    <td>Accountant</td>
                                    <td>21 May 2023</td>
                                    <td><span class="badge badge-linesuccess">Active</span></td>
                                    <td class="action-table-data">
                                        <div class="edit-delete-action">
                                            <a class="me-2 p-2 mb-0" href="javascript:void(0);">
                                                <i data-feather="eye" class="action-eye"></i>
                                            </a>
                                            <a class="me-2 p-2 mb-0" data-bs-toggle="modal" data-bs-target="#edit-units">
                                                <i data-feather="edit" class="feather-edit"></i>
                                            </a>
                                            <a class="me-2 confirm-text p-2 mb-0" href="javascript:void(0);">
                                                <i data-feather="trash-2" class="feather-trash-2"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /product list -->
        </div>
    </div>
@endsection
