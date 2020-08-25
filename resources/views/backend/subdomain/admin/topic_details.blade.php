@extends('backend.layouts.app')
@push('css')
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<link href="{{ asset('backend/assets/libs/dropzone/min/dropzone.min.css') }}" rel="stylesheet" 
type="text/css" />
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
            <h4 class="mb-0 font-size-18"> Content</h4>
            <div class="page-title-right">
              <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Site</a></li>
                <li class="breadcrumb-item">Topics</li>
                <li class="breadcrumb-item active"></li>
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
                          <button type="button" style="margin-bottom: 15px;" name="add" id="add-video" class="btn btn-success waves-effect waves-light">Add +</button>
                          <form method="POST" action="{{ url('admin/site-topics/'.$details->id.'/video') }}">
                            @csrf
                            <table class="table table-striped table-bordered" id="videos">
                              <thead>
                                <tr>
                                  <th width="50%">Link</th>
                                  <th width="30%">Title</th>
                                  <th width="20%">Action</th>
                                </tr>
                              </thead>
                              <tbody>

                                @if ($details->videos()->count())
                                @forelse($details->videos as $videos)
                                <tr>
                                  <input type="hidden" name="videos[id][]" 
                                  value="{{ $videos->id }}">
                                  <td>
                                    <input type="text" name="videos[link][]" 
                                      value="{{ $videos->video }}" 
                                      placeholder="Vimeo / Youtube Link" class="form-control"/>
                                  </td>
                                  <td>
                                    <input type="text" name="videos[title][]" 
                                      value="{{ $videos->title }}" 
                                      placeholder="Vimeo / Youtube Link" class="form-control"/>
                                  </td>
                                  <td>
                                    <a class="btn btn-danger" 
                                      href="{{ url('admin/site-topics/'.$details->id.'/video/'.$videos->id) }}">Delete</a>
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
                                value="{{ $details->video_default }}" required 
                                placeholder="Select Any From Gallery">
                              <span class="galleryOpenFetch" style="cursor:pointer;color:red;" data-toggle="modal" data-target=".bs-example-modal-xl">Gallery</span>
                            </div>
                            <button type="submit" class="btn btn-info waves-effect waves-light">
                            <i class="bx bx-check-double font-size-16 align-middle mr-2"></i>
                            Set
                            </button>
                            @if (isset($details->video_default))
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


                    <div class="row">
                    <div class="col-lg-12">
                      @include('backend.includes.form_errors')
                      @include('backend.includes.alert')
                      <div class="card">
                        <div class="card-body">
                          <button type="button" style="margin-bottom: 15px;" name="add" id="add-pdf" class="btn btn-success waves-effect waves-light">Add +</button>
                          <form method="POST" action="{{ url('admin/site-topics/'.$details->id.'/pdf') }}">
                            @csrf
                            <table class="table table-striped table-bordered" id="pdf">
                              <thead>
                                <tr>
                                  <th width="50%">PDF</th>
                                  <th width="30%">Title</th>
                                  <th width="20%">Action</th>
                                </tr>
                              </thead>
                              <tbody>

                                @if ($details->pdfs()->count())
                                @forelse($details->pdfs as $pdf)
                                <tr>
                                  <input type="hidden" name="pdf[id][]" 
                                  value="{{ $pdf->id }}">
                                  <td>
                                    <input type="text" name="pdf[link][]" 
                                      value="{{ $pdf->link }}" 
                                      placeholder="Select From Gallery" class="form-control"/>
                                    <span class="galleryOpenFetch" style="cursor:pointer;color:red;" data-toggle="modal" data-target=".bs-example-modal-xl">Gallery</span>
                                  </td>
                                  <td>
                                    <input type="text" name="pdf[title][]" 
                                      value="{{ $pdf->title }}" 
                                      placeholder="Vimeo / Youtube Link" class="form-control"/>
                                  </td>
                                  <td>
                                    <a class="btn btn-danger" 
                                      href="{{ url('admin/site-topics/'.$details->id.'/pdf/'.$pdf->id) }}">Delete</a>
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
                          <form action="{{ url('admin/site-topics/'.$details->id.'/pdf/default') }}" method="POST" role="form" id="video-default-pdf-form">
                            @csrf
                            <legend>No Pdf's yet? Set a default Image!</legend>
                            <div class="form-group">
                              <label for="">Image</label>
                              <input type="text" class="form-control" id="video-default-pdf" 
                                name="pdf_default"
                                value="{{ $details->pdf_default }}" required 
                                placeholder="Select Any From Gallery">
                              <span class="galleryOpenFetch" style="cursor:pointer;color:red;" data-toggle="modal" data-target=".bs-example-modal-xl">Gallery</span>
                            </div>
                            <button type="submit" class="btn btn-info waves-effect waves-light">
                            <i class="bx bx-check-double font-size-16 align-middle mr-2"></i>
                            Set
                            </button>
                            @if (isset($details->pdf_default))
                              <a href="#" id="delete-default-pdf-video" class="btn btn-danger waves-effect waves-light">
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


                <div class="tab-pane" id="messages-1" role="tabpanel">
                  <p class="mb-0">
                  <div class="row">
                    <div class="col-lg-12">
                      @include('backend.includes.form_errors')
                      @include('backend.includes.alert')
                      <div class="card">
                        <div class="card-body">
                          <button type="button" style="margin-bottom: 15px;" name="add" id="add-text" class="btn btn-success waves-effect waves-light">Add +</button>
                          <form method="POST" action="{{ url('admin/site-topics/'.$details->id.'/text') }}">
                            @csrf
                            <table class="table table-striped table-bordered" id="text">
                              <thead>
                                <tr>
                                  <th width="50%">Text</th>
                                  <th width="20%">Action</th>
                                </tr>
                              </thead>
                              <tbody>

                                @if (isset($details->text_slider) && is_array(json_decode($details->text_slider)))
                                @forelse(json_decode($details->text_slider) as $text)
                                <tr>
                                  <td>
                                    <textarea name="text[]" class="form-control" rows="3" required="required">{{ $text }}</textarea>
                                  </td>
                                  <td>
                                    <a class="btn btn-danger" 
                                      href="{{ url('admin/site-topics/'.$details->id.'/text/'.$text) }}">Delete</a>
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
                        </div>
                      </div>
                      <!-- end client -->
                    </div>
                  </div>
                  <!-- end row -->
                  </p>
                </div>


                <div class="tab-pane" id="settings-1" role="tabpanel">
                  <p class="mb-0">
                    <div class="row">
                    <div class="col-lg-12">
                      @include('backend.includes.form_errors')
                      @include('backend.includes.alert')
                      <div class="card">
                        <div class="card-body">
                          <form action="{{ url('admin/site-topics/'.$details->id.'/chatbot') }}" method="POST" role="form">
                            @csrf
                            
                            <div class="form-group">
                              <label for="">ChatBot Image</label>
                              <input type="text" class="form-control" id="" 
                              name="chatbot"
                              required="required"
                              value="{{ $details->chatbot_pic }}" 
                              placeholder="Select From Gallery">
                              <span class="galleryOpenFetch" style="cursor:pointer;color:red;" data-toggle="modal" data-target=".bs-example-modal-xl">Gallery</span>
                            </div>
                        
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                        </div>
                      </div>
                      <!-- end client -->
                    </div>
                  </div>
                  <!-- end row -->
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
<script src="{{ asset('backend/assets/libs/dropzone/min/dropzone.min.js') }}"></script>
<script src="{{ asset('backend/assets/Admin/dropzone_popup.js') }}"></script>

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


// Video part
var count = 1;
html = '';
 
 
dynamic_field_video(count);
   
function dynamic_field_video(number)
{
   
  html = '<tr>'; 
  html += '<td><input type="text" name="videos[link][]" value="" placeholder="Vimeo / Youtube Link" class="form-control" required /></td>';
  html += '<td><input type="text" name="videos[title][]" value="" placeholder="Title" class="form-control" required /></td>';
    
  if(number > 1)
   {
      html += '<td><button type="button" name="remove" class="btn btn-danger remove-video">Remove</button></td></tr>';
       
      $("#videos tbody").append(html);   
   }
  else
  {   
    html = '';
    $("#videos tbody").append(html);
  }    
}
   
  $(document).on('click', '#add-video', function(){
  count++;

  dynamic_field_video(count);  
  });

  $(document).on('click', '.remove-video', function(){
  count--;
  $(this).parent().parent().remove();
  });

// default image removal trick for video
$('#delete-default-image-video').click(function(){
  $('#video-default-image').val('');
  $('#video-default-image-form')[0].submit();
});
// video part end here


// pdf part
var count = 1;
html = '';
 
dynamic_field_pdf(count);
   
function dynamic_field_pdf(number)
{
   
  html = '<tr>'; 
  html += '<td><input type="text" name="pdf[link][]" value="" placeholder="Select from gallery" class="form-control" required /><span class="galleryOpenFetch" style="cursor:pointer;color:red;" data-toggle="modal" data-target=".bs-example-modal-xl">Gallery</span></td>';
  html += '<td><input type="text" name="pdf[title][]" value="" placeholder="Title" class="form-control" required /></td>';
    
  if(number > 1)
   {
      html += '<td><button type="button" name="remove" class="btn btn-danger remove-pdf">Remove</button></td></tr>';
       
      $("#pdf tbody").append(html);   
   }
  else
  {   
    html = '';
    $("#pdf tbody").append(html);
  }    
}
   
  $(document).on('click', '#add-pdf', function(){
  count++;

  dynamic_field_pdf(count);  
  });

  $(document).on('click', '.remove-pdf', function(){
  count--;
  $(this).parent().parent().remove();
  });
// default image removal trick for pdf
$('#delete-default-pdf-video').click(function(){
  $('#video-default-pdf').val('');
  $('#video-default-pdf-form')[0].submit();
});

// text part
var count = 1;
html = '';
 
dynamic_field_text(count);
   
function dynamic_field_text(number)
{
   
  html = '<tr>'; 
  html += '<td><textarea name="text[]" class="form-control" rows="3" placeholder="Text" required="required"></textarea></td>';
    
  if(number > 1)
   {
      html += '<td><button type="button" name="remove" class="btn btn-danger remove-text">Remove</button></td></tr>';
       
      $("#text tbody").append(html);   
   }
  else
  {   
    html = '';
    $("#text tbody").append(html);
  }    
}
   
  $(document).on('click', '#add-text', function(){
  count++;

  dynamic_field_text(count);  
  });

  $(document).on('click', '.remove-text', function(){
  count--;
  $(this).parent().parent().remove();
  });
   
});
</script> 
@endpush