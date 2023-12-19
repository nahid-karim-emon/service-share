<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use App\Models\ServiceProvider;

class AdminServiceProviderComponent extends Component
{
    public function deleteS($sprovider_id)
    {
        $spro = User::where('id', $sprovider_id)->first();
        $spro->delete();
        session()->flash('message', 'Service Provider Deleted successfully!');
    }
    public function render()
    {
        $sproviders = ServiceProvider::paginate(12);
        return view('livewire.admin.admin-service-provider-component', ['sproviders' => $sproviders])->layout('layouts.base');
    }
}
