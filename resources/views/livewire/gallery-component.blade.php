<div> <!-- parent element-->

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
	    <lottie-player class="galleryMedia" lsrc="{{ asset('clients/gallery/'.$media->media) }}" src="{{ asset('clients/gallery/'.$media->media) }}"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop autoplay></lottie-player>
	</div>

	@elseif($media->ext == 'pdf')
	    <div class="col-md-4" style="padding-bottom: 10px;">
	      <img class="img-thumbnail galleryMedia" lsrc="{{ asset('clients/gallery/'.$media->media) }}" alt="200x200" width="200" src="{{ asset('clients/logos/pdflogo.png') }}" data-holder-rendered="true">
	       </a>
	    </div>
	@else

	<div class="col-md-4" style="padding-bottom: 10px;">
	   <img class="img-thumbnail galleryMedia" lsrc="{{ asset('clients/gallery/'.$media->media) }}" alt="200x200" width="200" src="{{ asset('clients/gallery/'.$media->media) }}" data-holder-rendered="true">
	  
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
