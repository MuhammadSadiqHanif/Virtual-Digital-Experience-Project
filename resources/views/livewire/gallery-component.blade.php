<div>

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link {{ $tab == 'media' ? 'active' : '' }}" data-toggle="tab" href="#home" role="tab">
                    <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                    <span class="d-none d-sm-block">Media</span>    
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ $tab == 'upload' ? 'active' : '' }}" data-toggle="tab" href="#profile" 
                role="tab">
                    <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                    <span class="d-none d-sm-block">Upload</span>    
                </a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content p-3 text-muted">
            <div class="tab-pane active" id="home" role="tabpanel">
                <p class="mb-0">

                    <form action="" method="POST" role="form">
                        <div class="row">

                            <div class="col-md-4">
                                <div class="form-group">
                                  <label for="">Search</label>
                                  <input type="text" class="form-control" wire:model.debounce.500ms="search" 
                                  id="" placeholder="Search">
                                </div>
                            </div>

                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="">Filter</label>
                                <select name="filter" id="inputFilter" wire:model.debounce.500ms="filter" 
                                class="form-control" required="required">
                                <option value="">Filter</option>
                                    <option value="pdf">Pdf</option>
                                    <option value="json">Lottie</option>
                                    <option value="png">PNG</option>
                                    <option value="jpg">jpeg</option>
                                    <option value="gif">gif</option>
                                </select>
                              </div>
                            </div>

                        </div>
                    </form>
                    <div class="row">

                    @forelse($medias as $media)

                        @if ($media->ext == 'json')
                        <div class="col-md-4" style="padding-bottom: 10px;">
                            <lottie-player class="galleryMedia" lsrc="{{ asset('clients/gallery/'.$media->media) }}" src="{{ asset('clients/gallery/'.$media->media) }}"  background="transparent"  speed="1"  style="width: 200px; height: 150px;"  loop autoplay></lottie-player>
                        </div>

                        @elseif($media->ext == 'pdf')
                            <div class="col-md-4" style="padding-bottom: 10px;">
                              <img class="img-thumbnail galleryMedia" lsrc="{{ asset('clients/gallery/'.$media->media) }}" alt="200x200" style="width: 250px; height: 150px;"" src="{{ asset('clients/logos/pdflogo.png') }}" data-holder-rendered="true">
                               </a>
                            </div>
                        @else

                        <div class="col-md-4" style="padding-bottom: 10px;">
                           <img class="img-thumbnail galleryMedia" lsrc="{{ asset('clients/gallery/'.$media->media) }}" alt="200x200" style="width: 250px; height: 150px;"" src="{{ asset('clients/gallery/'.$media->media) }}" data-holder-rendered="true">
                          
                        </div>

                        @endif
                       

                    @empty

                    <div class="col-md-12" wire:loading.remove>
                        <h3 class="text-center">No Media Found</h3>
                    </div>
                        
                    @endforelse

                    <div class="col-md-12" wire:loading>
                        <h3 class="text-center">Processing....</h3>
                    </div>

                    </div>

                    </div>

                </p>
            
            <div class="tab-pane" id="profile" role="tabpanel">
                <p class="mb-0">
                    <form action="" class="dropzone" method="post" enctype="multipart/form-data">
                        {!! csrf_field() !!}

                        @if ($msg == true)
                            <div class="dz-default dz-message">
                                <button class="dz-button" type="button">Drop files here to upload</button>
                            </div>
                        @endif
                    </form>
                    <div class="form-group">
                        <span class="card-title-desc" style="help-block">Maximum Size: 10MB | Allowed Extensions are jpg,jpeg,png,bmp,json,pdf</span>
                    </div>
                    <button class="btn btn-success" wire:click.prevent="updateDom">Done</button>
                </p>
            </div>
            
        </div>
</div>