<?php

namespace App\Http\Livewire\Backend;

use App\Models\User;
use App\Traits\SweetAlert;
use Livewire\Component;
use Livewire\WithPagination;

class UserTable extends Component
{
    use SweetAlert;
    use WithPagination;

    public $perPage = 10;
    public $search = '';
    public $sort_attribute = 'id';
    public $sort_direction = 'desc';
    public $selectedIds = [];
    public $uid = '';
    public $name = '';

    protected $listeners = [
        'deleteUsersEvent' => 'deleteUsersEvent',
        'deleteUserEvent' => 'deleteUserEvent'
    ];

    public function deleteUsersEvent()
    {
        if(!empty($this->selectedIds)) {
            User::whereIn('id', $this->selectedIds)->delete();
        }
        $this->selectedIds = [];
    }

    public function deleteUserEvent()
    {
        User::where('id', $this->uid)->delete();
        $this->uid = '';
        $this->toast('User Deleted Successfully','success','4000');
    }

    public function delete($id)
    {
        $this->uid = $id;
        $this->showConfirmation('Delete','error',"Are you sure delete?", 'Confirm','deleteUserEvent');
    }

    public function deleteUsers()
    {
        $this->showConfirmation('Delete','error',"Are you sure delete?", 'Confirm','deleteUsersEvent');
    }

    public function getQuery()
    {
        return User::query()
            ->where('email','LIKE', '%'.$this->search.'%')
            ->orWhere('name', 'LIKE', '%'.$this->search.'%')
            ->orderBy($this->sort_attribute, $this->sort_direction);
    }

    public function sort($column){
        if ($this->sort_attribute != $column) {
            $this->sort_direction = 'asc';
        }
        else {
            $this->sort_direction = $this->sort_direction == 'asc' ? 'desc' : 'asc';
        }

        $this->sort_attribute = $column;
    }

    public function render()
    {
        return view('livewire.backend.user-table',[
            'users' => $this->getQuery()->paginate()
        ]);
    }
}
