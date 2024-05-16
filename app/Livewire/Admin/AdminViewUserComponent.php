<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class AdminViewUserComponent extends Component
{
    public function render()
    {
        $users = User::Where('utype', 'CST')->paginate(10);
        return view('livewire.admin.admin-view-user-component', ['users' => $users])->layout('layouts.base');
    }
}
