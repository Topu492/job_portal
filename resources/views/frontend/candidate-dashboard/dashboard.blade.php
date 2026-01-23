@extends('frontend.layouts.master')

@section('contents')
    <section class="section-box mt-75">
        <div class="breacrumb-cover">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <h2 class="mb-20">Dashboard</h2>
                        <ul class="breadcrumbs">
                            <li><a class="home-icon" href="{{ url('/') }}">Home</a></li>
                            <li>Dashboard</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-box mt-120">
        <div class="container">
            <div class="row">

                @include('frontend.candidate-dashboard.sidebar')

                <div class="col-lg-9 col-md-8 col-sm-12 col-12 mb-50">
                    <div class="content-single">
                        <h3 class="mt-0 mb-0 color-brand-1">Dashboard</h3>
                        <div class="dashboard_overview">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="dash_overview_item bg-info-subtle">
                                        <h2>} <span>job applied</span></h2>
                                        <span class="icon"><i class="fas fa-briefcase"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="dash_overview_item bg-danger-subtle">
                                        <h2><span>job Bookmarks</span></h2>
                                        <span class="icon"><i class="fas fa-bookmark"></i></span>
                                    </div>
                                </div>

                            </div>
                         
                                <div class="row">
                                    <div class="col-12 mt-30">
                                        <div class="dash_alert_box p-30 bg-danger rounded-4 d-flex flex-wrap">
                                            <span class="img">
                                                <img src="" alt="alert">
                                            </span>
                                            <div class="text">
                                                <h4>Please setup your Profile First</h4>
                                                <p>You can not access all the features of the website if you don't setup your account first make sure you setup your <b style="font-weight: bold;">"Basic", "Profile" and "Account Seeting"</b> Data.</p>
                                            </div>
                                            <a href="" class="btn btn-default rounded-1">Edit Profile</a>
                                        </div>
                                    </div>
                                </div>
                          
                            <h3 class="mt-30 mb-0 color-brand-1">Recently Applied</h3>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Company</th>
                                        <th>Salary</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th style="width: 15%">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="experience-tbody">
                                  
                                        <tr>
                                            <td>
                                                <div class="d-flex ">
                                                    <img style="width: 50px; height: 50px; object-fit:cover;"
                                                        src="" alt="">
                                                    <div style="padding-left: 15px">
                                                        <h6></h6>
                                                        <b></b>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                               
                                                   
                                                  
                                            </td>
                                            <td></td>
                                            <td>
                                               
                                                    <span class="badge bg-danger">Expired</span>
                                              
                                                <span class="badge bg-success">Active</span>

                                               
                                            </td>
                                            <td>
                                               
                                                <a href="javascript:;"
                                                    class="btn-sm btn btn-secondary" ><i class="fas fa-eye"
                                                        aria-hidden="true"></i></a>
                                            
                                            <a href=""
                                                class="btn-sm btn btn-primary" ><i class="fas fa-eye"
                                                    aria-hidden="true"></i></a>

                                          

                                            </td>

                                        </tr>
                                  


                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="mt-120"></div>
@endsection
