<?php

namespace App\Http\Livewire;

use App\Media;
use Livewire\Component;

class GalleryComponent extends Component
{
	public $search,$filter;

    public function render()
    {
    	$term = '%'.$this->search.'%';
    	$filter = '%'.$this->filter.'%';

    	$medias = Media::where('media','LIKE',$term)
		    	->where('ext','LIKE',$filter)
		    	->where('domain',request()->domain)
		    	->get();
		    	
        return view('livewire.gallery-component',compact('medias'));
    }
}
