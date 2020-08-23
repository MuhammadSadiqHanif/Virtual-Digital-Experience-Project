@extends('backend.layouts.app')
@push('css')
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
            <h4 class="mb-0 font-size-18">{{ $details->title }} Content</h4>
            <div class="page-title-right">
              <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Site</a></li>
                <li class="breadcrumb-item">Topics</li>
                <li class="breadcrumb-item active">{{ $details->title }}</li>
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
              <!-- Nav tabs -->
              <ul class="nav nav-pills nav-justified" role="tablist">
                <li class="nav-item waves-effect waves-light">
                  <a class="nav-link active" data-toggle="tab" href="#home-1" role="tab">
                  <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                  <span class="d-none d-sm-block">Video's</span> 
                  </a>
                </li>
                <li class="nav-item waves-effect waves-light">
                  <a class="nav-link" data-toggle="tab" href="#profile-1" role="tab">
                  <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                  <span class="d-none d-sm-block">Pdf's</span> 
                  </a>
                </li>
                <li class="nav-item waves-effect waves-light">
                  <a class="nav-link" data-toggle="tab" href="#messages-1" role="tab">
                  <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                  <span class="d-none d-sm-block">Text Slider</span>   
                  </a>
                </li>
                <li class="nav-item waves-effect waves-light">
                  <a class="nav-link" data-toggle="tab" href="#settings-1" role="tab">
                  <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                  <span class="d-none d-sm-block">Chatbot</span>    
                  </a>
                </li>
              </ul>


              <!-- Tab panes -->
              <div class="tab-content p-3 text-muted">
                <div class="tab-pane active" id="home-1" role="tabpanel">
                  <p class="mb-0">
                  <div class="row">
                    <div class="col-lg-12">
                      @include('backend.includes.form_errors')
                      @include('backend.includes.alert')
                      <div class="card">
                        <div class="card-body">
                          <button type="button" style="margin-bottom: 15px;" name="add" id="add" class="btn btn-success waves-effect waves-light">Add +</button>
                          <form method="POST" action="{{ url('admin/site-topics/'.$details->id.'/video') }}">
                            @csrf
                            <table class="table table-striped table-bordered" id="user_table">
                              <thead>
                                <tr>
                                  <th width="80%">Link</th>
                                  <th width="20%">Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                @if (optional($details->content)->videos != null &&
                                is_array(jsonDecode($details->content->videos)) 
                                &&
                                count(jsonDecode($details->content->videos)))
                                @forelse(jsonDecode($details->content->videos) as $video)
                                <tr>
                                  <td>
                                    <input type="text" name="videos[]" value="{{ $video }}" 
                                      placeholder="Vimeo / Youtube Link" class="form-control"/>
                                  </td>
                                  <td>
                                    <a class="btn btn-danger" 
                                      href="{{ url('admin/site-topics/'.$details->id.'/video/'.encrypt($video)) }}">Delete</a>
                                  </td>
                                </tr>
                                @empty
                                @endforelse
                                @endif
                              </tbody>
                            </table>
                            <button type="submit" class="btn btn-warning waves-effect waves-light">
                            <i class="bx bx-check-double font-size-16 align-middle mr-2"></i> Submit
                            </button>   
                          </form>
                          <br>
                          <br>
                          <hr>
                          <form action="{{ url('admin/site-topics/'.$details->id.'/video/default') }}" method="POST" role="form" id="video-default-image-form">
                            @csrf
                            <legend>No Video's yet? Set a default Image!</legend>
                            <div class="form-group">
                              <label for="">Image</label>
                              <input type="text" class="form-control" id="video-default-image" 
                                name="video_default"
                                value="{{ $details->content->video_default }}" 
                                placeholder="Select Any From Gallery">
                              <span class="galleryOpenFetch" style="cursor:pointer;color:red;" data-toggle="modal" data-target=".bs-example-modal-xl">Gallery</span>
                            </div>
                            <button type="submit" class="btn btn-info waves-effect waves-light">
                            <i class="bx bx-check-double font-size-16 align-middle mr-2"></i>
                            Set
                            </button>
                            @if (optional($details->content)->video_default != null)
                              <a href="#" id="delete-default-image-video" class="btn btn-danger waves-effect waves-light">
                              <i class="bx bx-block font-size-16 align-middle mr-2"></i>
                              Remove
                              </a>
                            @endif   
                          </form>
                        </div>
                      </div>
                      <!-- end client -->
                    </div>
                  </div>
                  <!-- end row -->
                  </p>
                </div>


                <div class="tab-pane" id="profile-1" role="tabpanel">
                  <p class="mb-0">
                    {{--  --}}
                  </p>
                </div>


                <div class="tab-pane" id="messages-1" role="tabpanel">
                  <p class="mb-0">
                    {{--  --}}
                  </p>
                </div>


                <div class="tab-pane" id="settings-1" role="tabpanel">
                  <p class="mb-0">
                    {{--  --}}
                  </p>
                </div>


              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!--  Modal content gallery for the above example -->
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
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->


  </div>
</div>
</div>
@endsection
@push('js')
@livewireScripts
<!-- JAVASCRIPT -->
<script>
  $(document).ready(function(){
   // gallery code
     var objectHandler = '';
  
     $(document).on('click','.galleryMedia',function(){
       
       $(objectHandler).prevAll("input[type=text]").val($(this).attr('lsrc').replace(/.*\/\/[^\/]*/, ''));
       $('.bs-example-modal-xl').modal('hide');
     });
  
     $(document).on('click','.galleryOpenFetch',function(){
         $('.bs-example-modal-xl').modal('show');
         objectHandler = $(this);
     });
   // gallery code end here
  
    var count = 1;
    html = '';
   
   
  dynamic_field(count);
   
function dynamic_field(number)
{
   
  html = '<tr>'; 
  html += '<td><input type="text" name="videos[]" value="" placeholder="Vimeo / Youtube Link" class="form-control" required /></td>';
    
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

// default image removal trick
$('#delete-default-image-video').click(function(){
  $('#video-default-image').val('');
  $('#video-default-image-form')[0].submit();
});
   
});
</script> 
@endpush