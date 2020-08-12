@extends('backend.layouts.app')

@section('content')

 <!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

<div class="page-content">
    <div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Profile Settings</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Site</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->




<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">

                    <form action="{{ url('user/profile_settings/'.auth()->user()->id) }}" method="POST">
                        @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                               <label>Email</label>
                                <input class="form-control" type="text" name="email" value="{{ auth()->user()->email }}">
                                @error('email')
                                    <div class="invalid-feedback" style="display: block;">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                               <label>Name</label>
                                <input class="form-control" type="text" name="name" value="{{ auth()->user()->name }}">
                                @error('name')
                                    <div class="invalid-feedback" style="display: block;">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                           
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                               <label>Password</label>
                                <input class="form-control" type="password" name="password" value="">
                                @error('logo')
                                    <div class="invalid-feedback" style="display: block;">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>

                           

                             <div class="form-group">
                               <label>Company Url</label>
                                <input class="form-control" type="text" name="company_url" value="{{ auth()->user()->company_url }}">
                                @error('company_url')
                                    <div class="invalid-feedback" style="display: block;">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>

                            </div>
                            
                        </div>
                    </div>

 
                    <button type="submit" class="btn btn-primary waves-effect waves-light btn-block" style="margin-top: 10px;">Submit</button>

                </form>

            </div>
        </div>
        <!-- end site -->

    </div>


</div>
<!-- end row -->

</div>

</div>
@endsection

