<?php

namespace App\Http\Livewire\Backend;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserTable extends Component
{
    use WithPagination;

    public $perPage = 10;
    public $search = '';
    public $orderBy = 'id';
    public $orderAsc = true;
    public $selectedIds = [];


    public function deleteUsers()
    {
        if(!empty($this->selectedIds)) {
            User::whereIn('id', $this->selectedIds)->delete();
        }
        $this->selectedIds = [];
    }

    public function getQuery()
    {
        return User::query()
            ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc');
    }

    public function render()
    {
        return view('livewire.backend.user-table',[
            'users' => $this->getQuery()->paginate()
        ]);
    }
}
