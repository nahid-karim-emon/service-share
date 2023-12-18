<?php

namespace App\Livewire\Sprovider;

use App\Models\User;
use Livewire\Component;
use App\Models\PendingTask;
use App\Models\ServiceProvider;
use Illuminate\Support\Facades\Auth;

class SproviderToDoList extends Component
{

    public function updateService($tas_id)
    {
        $task = PendingTask::find($tas_id);
        $task->status = "finished";
        $task->save();
        session()->flash('message', 'Please Wait for Customer Confirmation!');
    }

    public function render()
    {
        $spro = User::where('id', Auth::user()->id)->first();
        $sprovider = ServiceProvider::where('user_id', $spro->id)->first();
        $task = PendingTask::where('service_category_id', $sprovider->service_category_id)->where('status', 'accepted')->paginate(15);
        return view('livewire.sprovider.sprovider-to-do-list', ['task' => $task])->layout('layouts.base');
    }
}
