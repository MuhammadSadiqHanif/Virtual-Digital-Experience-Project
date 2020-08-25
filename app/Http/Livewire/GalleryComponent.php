<?php

namespace App\Http\Livewire;

use App\Media;
use Livewire\Component;

class GalleryComponent extends Component
{
	public $search, $filter, $domain,
	$tab = 'media',
	$msg = false;

	public function mount()
	{
		$this->domain = request()->domain;
	}
	
    public function render()
	{
		$term = '%' . $this->search . '%';
		$filter = '%' . $this->filter . '%';

		$medias = Media::where('media', 'LIKE', $term)
			->where('ext', 'LIKE', $filter)
			->where('domain', $this->domain)
			->latest()
			->get();

		return view('livewire.gallery-component', compact('medias'));
	}

	public function updateDom()
	{
		$this->msg = true;
		$this->render();
	}

}
