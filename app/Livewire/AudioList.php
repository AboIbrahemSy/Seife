<?php
namespace App\Livewire;

use App\Models\Audio;
use Livewire\Component;

class AudioList extends Component
{
    public $search    = '';
    public $language  = null;
    public $languages = null;
    public $audios    = null;
    public $perPage   = 5;

    public function loadMore()
    {
        $this->perPage += 5;
    }
    public function applyFilter()
    {
        $query = Audio::query();
        if ($this->language) {
            $query->where('language_id', $this->language);
        }
        if ($this->search) {
            $query->where('title', 'like', "%{$this->search}%");
        }
        $this->audios = $query->latest()->take($this->perPage)->get();
        // dd($this->audios);
    }
    public function mount()
    {
        $this->languages = \App\Models\Language::all();
        $this->audios = Audio::query()->latest()->take($this->perPage)->get();
    }
    public function render()
    {
        return view('livewire.audio-list');
    }

}
