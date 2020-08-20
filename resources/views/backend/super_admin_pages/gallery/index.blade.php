@extends('backend.layouts.app')

@push('css')
 <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
@endpush

@section('content')
    
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0 font-size-18">Media</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Site</a></li>
                    <li class="breadcrumb-item active">Gallery</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                @include('backend.includes.alert')

                @include('backend.includes.form_errors')

                <div class="alert alert-danger alert-dismissible fade show" role="alert" id="ImageValidate" 
                style="display: none;">
                    <i class="bx bx-block mr-2"></i>
                    <span id="showError"></span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                
                <form action="{{ route('media.store') }}" method="POST" role="form" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="form-group">
                        <label for="">Upload Media</label>
                        <input type="file" class="form-control" id="files" multiple="multiple" name="files[]" required>
                        <span class="card-title-desc" style="help-block">Maximum Size: 10MB | Allowed Extensions are jpg,jpeg,png,bmp,json,pdf</span>
                    </div>
                  
                    <button type="submit" id="submitBtn" class="btn btn-danger">Upload</button>
                </form>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->



<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
               <div class="row">
                @forelse($medias as $media)

                @if ($media->ext == 'json')
                <div class="col-md-4" style="padding-bottom: 10px;">
                    <lottie-player src="{{ asset('clients/gallery/'.$media->media) }}"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop autoplay></lottie-player>
                    <a href="{{ route('media.edit',$media->id) }}" style="display: block;">Delete</a>
                </div>

                @elseif($media->ext == 'pdf')
                    <div class="col-md-4" style="padding-bottom: 10px;">
                       <a href="{{ route('media.show',$media->media) }}"><img class="img-thumbnail" alt="200x200" width="200" src="{{ asset('clients/logos/pdflogo.png') }}" data-holder-rendered="true">
                       </a>
                       <a href="{{ route('media.edit',$media->id) }}" style="display: block;">Delete</a>
                    </div>
                @else

                <div class="col-md-4" style="padding-bottom: 10px;">
                   <img class="img-thumbnail" alt="200x200" width="200" src="{{ asset('clients/gallery/'.$media->media) }}" data-holder-rendered="true">
                   <a href="{{ route('media.edit',$media->id) }}" style="display: block;">Delete</a>
                </div>

                @endif
                   

               @empty

               @endforelse
               </div>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

</div> <!-- container-fluid -->
</div>
<!-- End Page-content -->

@endsection

@push('js')
<script>
    $(document).ready(function(){
        $('#files').bind('change', function() {

            var fi = document.getElementById('files'); 
        // Check if any file is selected. 
        if (fi.files.length > 0) { 
            for (var i = 0; i <= fi.files.length - 1; i++) { 
  
                var fsize = fi.files.item(i).size; 
                var file = Math.round((fsize / 1024)); 
                // The size of the file. 
                if (file >= 10000) { 
                    $('#ImageValidate').show(); 
                    $('#showError').html("File too Big, One of your file is more than 10MB please remove");
                    $('#submitBtn').attr('disabled',true);
                } 
                else
                {
                    $('#ImageValidate').hide();
                    $('#submitBtn').attr('disabled',false);
                }
            } 
        } 
          //this.files[0].size gets the size of your file.
          // console.log(this.files[0].size  / 1024);

        });
    });
</script>
@endpush
