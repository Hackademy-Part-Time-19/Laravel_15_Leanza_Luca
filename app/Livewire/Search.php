<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Search extends Component
{
    public $users = [];
    public $search = '';


    public function render()
    {
        if ($this->search == '') {
            $this->users = User::all();
        } else {
            $this->users = User::where('name', 'like', '%' . $this->search . '%')->orWhere('email', 'like', '%' . $this->search . '%')->orWhere('surname', 'like', '%' . $this->search . '%')->get();
        }


        return view('livewire.search');
    }
}
