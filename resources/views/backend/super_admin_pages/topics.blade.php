@extends('backend.layouts.app')

@push('css')
<link href="{{ asset('backend/assets/libs/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('backend/assets/libs/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}" rel="stylesheet" type="text/css">	
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

@livewireStyles
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
                <h4 class="mb-0 font-size-18">Add Topics</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Site</a></li>
                        <li class="breadcrumb-item active">Topics</li>
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
                <h4 class="card-title">Select Client</h4>
               
                <form method="GET" action="" id="client-form">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <select class="custom-select" name="client" id="client">
                                    <option value="">Select Site</option>
                                    @forelse($sites as $site)
                                    <option {{ request()->has('client') && request()->client == $site->id ? 'selected' : '' }} 
                                        value="{{ $site->domain }}">
                                        <strong>{{ $site->name }}</strong>
                                        <span class="card-title-desc">({{ replaceHttps($site->domain) }})</span>
                                    </option>
                                    @empty
                                    @endforelse
                                </select>
                                
                                @error('client')
                                    <div class="invalid-feedback" style="display: block;">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                        </div>                         
                    </div>
                </form>

            </div>
        </div>
        <!-- end client -->

    </div>


</div>
<!-- end row -->
@if (isset($topics))
    
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <button type="button" style="margin-bottom: 15px;" name="add" id="add" class="btn btn-success waves-effect waves-light">Add +</button>
                <h4 class="card-title">Topics</h4>

                <form method="POST" action="{{ route('topics.store') }}">
                @csrf
                <input type="hidden" name="domain" value="{{ request()->client }}">
                <table class="table table-striped table-bordered" id="user_table">
                  <thead>
                    <tr>
                      <th width="16%">Title</th>
                      <th width="16%">Lottie Desktop</th>
                      <th width="16%">Lottie Mobile</th>
                      <th width="16%">Details Page Icon</th>
                      <th width="16%">Position</th>
                      <th width="16%">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if (isset($topics))
                    @foreach ($topics as $topic)
                    <input type="hidden" name="topic[id][]" value="{{ $topic->id }}">
                    <tr>
                      <td>
                        <input type="text" name="topic[title][]" value="{{ $topic->title }}" placeholder="Title" class="form-control" required />
                      </td>
                      <td>
                        <input type="text" name="topic[desktop][]" value="{{ $topic->lottie_desktop }}" placeholder="Desktop" class="form-control" required />
                        <span class="galleryOpenFetch" style="cursor:pointer;color:red;" data-toggle="modal" data-target=".bs-example-modal-xl">Gallery</span>
                      </td>
                      <td>
                        <input type="text" name="topic[mobile][]" value="{{ $topic->lottie_mobile }}" placeholder="Mobile" class="form-control" required />
                        <span class="galleryOpenFetch" style="cursor:pointer;color:red;" data-toggle="modal" data-target=".bs-example-modal-xl">Gallery</span>
                      </td>
                      <td>
                        <input type="text" name="topic[icon][]" value="{{ $topic->icon }}" placeholder="Icon" class="form-control" required />
                        <span class="galleryOpenFetch" style="cursor:pointer;color:red;" data-toggle="modal" data-target=".bs-example-modal-xl">Gallery</span>
                      </td>
                      <td>
                        <input type="text" name="topic[position][]" value="{{ $topic->position }}" placeholder="Position" class="form-control" required />
                      </td>
                      <td>
                        <button  onclick="event.preventDefault();document.getElementById('del-form-{{ $topic->id }}').submit()" class="btn btn-danger waves-effect waves-light" type="button">Delete</button>
                      </td>

                    </tr>
                    @endforeach
                    @endif
                  </tbody>
                </table>

            <button type="submit" class="btn btn-warning waves-effect waves-light">
                <i class="bx bx-check-double font-size-16 align-middle mr-2"></i> Submit
            </button>   
            </form>
            </div>
        </div>
        <!-- end client -->
    </div>
</div>
<!-- end row -->


<!--  Modal content for the above example -->
<div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myExtraLargeModalLabel">Gallery</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p style="display: none;" id="handleObject"></p>
           
                @livewire('gallery-component')
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@endif


@if (isset($topics))
@foreach ($topics as $topic)

<form method="POST" action="{{ route('topics.destroy',$topic->id) }}" id="del-form-{{ $topic->id }}">
  @csrf
  @method('DELETE')
</form>

@endforeach
@endif

</div>

</div>
@endsection



@push('js')
@livewireScripts
  <!-- JAVASCRIPT -->
<script src="{{ asset('backend/assets/libs/select2/js/select2.min.js') }}"></script>
<script src="{{ asset('backend/assets/libs/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
<script src="{{ asset('backend/assets/libs/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>	
<script src="{{ asset('backend/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js') }}"></script>
<script src="{{ asset('backend/assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
<script src="{{ asset('backend/assets/libs/%40chenfengyuan/datepicker/datepicker.min.js') }}"></script>
<script src="{{ asset('backend/assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>

<!-- form repeater js -->
<script src="{{ asset('backend/assets/libs/jquery.repeater/jquery.repeater.min.js') }}"></script>

<script src="{{ asset('backend/assets/js/pages/form-repeater.int.js')}}"></script>
<!-- form advanced init -->
<script src="{{ asset('backend/assets/js/pages/form-advanced.init.js') }}"></script>


<script>
	$(document).ready(function(){

    var objectHandler = '';

    $(document).on('click','.galleryMedia',function(){
      
      $(objectHandler).prevAll("input[type=text]").val($(this).attr('src').replace(/.*\/\/[^\/]*/, ''));
      $('.bs-example-modal-xl').modal('hide');
    });

    $(document).on('click','.galleryOpenFetch',function(){
        $('.bs-example-modal-xl').modal('show');
        objectHandler = $(this);
    });

		var url = "{{ config('app.url') }}";

		$('#client').on('change',function(){
	       $('#client-form').submit();
       });

    var count = 1;
    html = '';
  
  
  dynamic_field(count);
  
  function dynamic_field(number)
  {
  
  html = '<tr>'; 
    html += '<td><input type="text" name="topic[title][]" value="" placeholder="Title" class="form-control" required /></td>';
    html += '<td><input type="text" name="topic[desktop][]" value="" placeholder="Desktop" class="form-control" required /> <span style="cursor:pointer;color:red;" class="galleryOpenFetch">Gallery</span></td>';

    html += '<td> <input type="text" name="topic[mobile][]" value="" placeholder="Mobile" class="form-control" required /> <span style="cursor:pointer;color:red;" class="galleryOpenFetch">Gallery</span></td>';
    html += '<td> <input type="text" name="topic[icon][]" value="" placeholder="Icon" class="form-control" required /> <span style="cursor:pointer;color:red;" class="galleryOpenFetch">Gallery</span></td>';
    html += '<td> <input type="text" name="topic[position][]" value="" placeholder="Position" class="form-control" required /></td>';
     
      if(number > 1)
      {
          html += '<td><button type="button" name="remove" class="btn btn-danger remove">Remove</button></td></tr>';
          
          $('tbody').append(html);
          
      }
      else
      {   
        
        html = '';
        
        $('tbody').append(html);
      }    
  
  }
  
  
  
  $(document).on('click', '#add', function(){
  count++;
  
  dynamic_field(count);  
  });
  
  $(document).on('click', '.remove', function(){
  count--;
  $(this).parent().parent().remove();
  });

  $('.btn-toolbar').hide();
  
	});
</script>	
@endpush