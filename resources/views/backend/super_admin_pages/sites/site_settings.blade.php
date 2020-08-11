@extends('backend.layouts.app')

@push('css')
<link href="{{ asset('backend/assets/libs/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('backend/assets/libs/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}" rel="stylesheet" type="text/css">	
@endpush

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
                <h4 class="mb-0 font-size-18">Site Settings</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Site</a></li>
                        <li class="breadcrumb-item active">Settings</li>
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


                @include('backend.includes.alert')
                
                <h4 class="card-title">Client Info</h4>
               
                <form method="POST" action="{{ route('site-setting.store') }}" enctype="multipart/form-data">
                	@csrf
                	<div class="row">

                        <div class="col-lg-6">
                            <div class="form-group">
                               <label>Company Name</label>
                                <input class="form-control" type="text" name="company_name" value="{{ old('company_name') }}">
                                @error('company_name')
                                    <div class="invalid-feedback" style="display: block;">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label>Admins</label>
                                <select class="custom-select" name="admins[]" multiple id="admins">
                                    @forelse($clients as $client)
                                        <option value="{{ $client->id }}">{{ $client->name }}</option>
                                    @empty
                                    @endforelse
                                </select>

                                @error('admins')
                                    <div class="invalid-feedback" style="display: block;">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6">
                               <div class="form-group">
	                               <label>Domain</label>
	                               <input class="form-control" type="text" name="domain" value="{{ old('domain') }}" id="domain">
	                               <span class="card-title-desc" id="domain_prepend"></span>
	                               	@error('domain')
                                    <div class="invalid-feedback" style="display: block;">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                	@enderror
		                        </div>

		                        <div class="form-group">
	                               <label>Company Url</label>
	                                <input class="form-control" type="text" name="company_url" 
	                                value="{{ old('company_url') }}">
	                                @error('company_url')
	                                    <div class="invalid-feedback" style="display: block;">
	                                        <strong>{{ $message }}</strong>
	                                    </div>
	                                @enderror
	                            </div> 

                                   
                            </div>
                       
                    </div>	

            </div>
        </div>
        <!-- end client -->

    </div>


</div>
<!-- end row -->







<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Site Settings</h4>
               
                    <div class="row">

                        <div class="col-lg-6">
                            <div class="form-group">
                               <label>Logo</label>
                                <input class="form-control" type="file" name="logo" value="">
                                @error('logo')
                                    <div class="invalid-feedback" style="display: block;">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label>Primary Color</label>
                                <div class="input-group colorpicker-default colorpicker-element" title="Using format option" data-colorpicker-id="2">
                                    <input type="text" class="form-control input-lg" name="primary_color" 
                                    value="{{ old('primary_color',"#4667cc") }}">
                                    <span class="input-group-append">
                                        <span class="input-group-text colorpicker-input-addon" data-original-title="" title="" tabindex="0"><i style="background: rgb(70, 103, 204);"></i></span>
                                    </span>
                                </div>
                                @error('primary_color')
                                    <div class="invalid-feedback" style="display: block;">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Secondary Color</label>
                                <div class="input-group colorpicker-default colorpicker-element" title="Using format option" data-colorpicker-id="2">
                                    <input type="text" class="form-control input-lg" name="secondary_color"
                                     value="{{ old('secondary_color',"#4667cc") }}">
                                    <span class="input-group-append">
                                        <span class="input-group-text colorpicker-input-addon" data-original-title="" title="" tabindex="0"><i style="background: rgb(70, 103, 204);"></i></span>
                                    </span>
                                </div>
                                @error('secondary_color')
                                    <div class="invalid-feedback" style="display: block;">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>

                        </div>

                        <div class="col-lg-6">
                            
                            <div class="form-group">
                                <label>Icon Color</label>
                                <div class="input-group colorpicker-default colorpicker-element" title="Using format option" data-colorpicker-id="2">
                                    <input type="text" class="form-control input-lg" name="icon_color" 
                                    value="{{ old('icon_color',"#4667cc") }}">
                                    <span class="input-group-append">
                                        <span class="input-group-text colorpicker-input-addon" data-original-title="" title="" tabindex="0"><i style="background: rgb(70, 103, 204);"></i></span>
                                    </span>
                                </div>

                                @error('icon_color')
                                    <div class="invalid-feedback" style="display: block;">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                               <label>Font Family Google Font Link</label>
                                <input class="form-control" type="text" name="font_family" 
                                value="{{ old('font_family') }}">
                                @error('font_family')
                                    <div class="invalid-feedback" style="display: block;">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>

                             <div class="form-group">
                               <label>Font Family CSS</label>
                                <input class="form-control" type="text" name="font_family_css" 
                                value="{{ old('font_family_css') }}">
                                @error('font_family_css')
                                    <div class="invalid-feedback" style="display: block;">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>

                        </div>
                    </div>

                       	<div class="row">
	                    	<div class="col-md-12">
	                    		<div class="form-group">
			                        <label>Allowed Domains</label>

			                        <select class="allowed_domains form-control" name="allowed_domains[]"
			                        multiple="multiple" data-placeholder="Choose ...">
			                        	<option value="gmail.com">gmail.com</option>
			                       	</select>
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

@push('js')
  <!-- JAVASCRIPT -->
<script src="{{ asset('backend/assets/libs/select2/js/select2.min.js') }}"></script>
<script src="{{ asset('backend/assets/libs/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
<script src="{{ asset('backend/assets/libs/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>	
<script src="{{ asset('backend/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js') }}"></script>
<script src="{{ asset('backend/assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
<script src="{{ asset('backend/assets/libs/%40chenfengyuan/datepicker/datepicker.min.js') }}"></script>
<script src="{{ asset('backend/assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
 <!-- form advanced init -->
<script src="{{ asset('backend/assets/js/pages/form-advanced.init.js') }}"></script>

<script>
	$(document).ready(function(){
		var url = "{{ env('APP_DOMAIN') }}";

		$('#domain').keyup(function(){
	       $('#domain_prepend').text($(this).val() + '.' + url.replace(/(^\w+:|^)\/\//, ''));
		});

		$(".allowed_domains").select2({
		    tags: true,
		    tokenSeparators: [',', ' ']
		})

        $("#admins").select2({
            tags: true,
            placeholder:'Select Admins',
            tokenSeparators: [',', ' ']
        })
	});
</script>	
@endpush