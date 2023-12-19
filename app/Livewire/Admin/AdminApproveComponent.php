<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class AdminApproveComponent extends Component
{

    public function updateUser($use_id)
    {
        $spro = User::where('id', $use_id)->first();
        $spro->status = "approved";
        $spro->save();
        session()->flash('message', 'Service Provider Approved successfully!');
    }

    public function deleteUser($use_id)
    {
        $spro = User::where('id', $use_id)->first();
        $spro->delete();
        session()->flash('message', 'Service Provider Deleted successfully!');
    }

    public function render()
    {
        $user = User::where('status', 'pending')->where('utype', 'SVP')->paginate(15);
        return view('livewire.admin.admin-approve-component', ['user' => $user])->layout('layouts.base');
    }
}
