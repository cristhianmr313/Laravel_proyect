<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class UserIndex extends Component
{
    use WithPagination;

    public $searchTerm;

    protected $paginationTheme="bootstrap";

    public function updatingSearchTheme(){
        $this->resetPage();
    }


    public function render()
    {

        $users = $this->searchTerm
            ? User::where('name', 'LIKE', "%$this->searchTerm%")
            ->orWhere('email', 'LIKE', "%$this->searchTerm%")->paginate(10)
            : User::paginate(10);
        return    view('livewire.user-index',compact('users'));
    }

    public function search()
    {
        $this->render();
    }
}
