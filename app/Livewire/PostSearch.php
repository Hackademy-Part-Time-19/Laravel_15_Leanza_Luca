<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostSearch extends Component
{

    public $search = '';
    public $posts = [];

    public function render()
    {

        if ($this->search == '') {
            $this->posts = Post::all();
        } else {
            $this->posts = Post::where('title', 'like', '%' . $this->search . '%')->orWhere('content', 'like', '%' . $this->search . '%')->orWhere('author', 'like', '%' . $this->search . '%')->get();
        }
        return view('livewire.post-search');
    }
}
