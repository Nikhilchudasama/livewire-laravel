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
    public $orderBy = 'id';
    public $orderAsc = true;
    public $selectedIds = [];
    public $uid = '';

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
            ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc');
    }

    public function render()
    {
        return view('livewire.backend.user-table',[
            'users' => $this->getQuery()->paginate()
        ]);
    }
}
