@extends('admin.layouts.master')

@section('contents')
<section class="section">
    <div class="section-header">
      <h1>Dashboard</h1>
    </div>
  
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-primary">
            <i class="fas fa-dollar-sign"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Earnings</h4>
            </div>
            <div class="card-body">
           
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-danger">
            <i class="fas fa-users"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Candidates</h4>
            </div>
            <div class="card-body">
             
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-warning">
            <i class="fas fa-users"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Companies</h4>
            </div>
            <div class="card-body">
             
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-success">
            <i class="fas fa-circle"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Jobs</h4>
            </div>
            <div class="card-body">
             
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-info">
            <i class="fas fa-briefcase"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Active Jobs</h4>
            </div>
            <div class="card-body">
             
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-warning">
            <i class="fas fa-briefcase"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Expired Jobs</h4>
            </div>
            <div class="card-body">
            
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-danger">
            <i class="fas fa-briefcase"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Pending Jobs</h4>
            </div>
            <div class="card-body">
             
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-primary">
            <i class="fab fa-blogger-b"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Blogs</h4>
            </div>
            <div class="card-body">
              
            </div>
          </div>
        </div>
      </div>
    </div>
  

   
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Pending Jobs</h4>
                <div class="card-header-form">
                    <form action="" method="GET">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search" name="search" value="">
                            <div class="input-group-btn">
                                <button type="submit" style="height: 40px;" class="btn btn-primary"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <th>Job</th>
                            <th>Category/Role</th>
                            <th>Salary</th>
                            <th>Deadline</th>
                            <th>Status</th>
                            <th>Approve</th>

                            <th style="width: 10%">Action</th>
                        </tr>
                    <tbody>
                       

                    </tbody>

                    </table>
                </div>
            </div>
            <div class="card-footer text-right">
                <nav class="d-inline-block">
                   
                </nav>
            </div>
        </div>
    </div>
 

  </section>
@endsection

@push('scripts')
    
@endpush
