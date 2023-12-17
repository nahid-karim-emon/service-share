<?php

namespace App\Livewire\Sprovider;

use App\Models\PendingTask;
use App\Models\Service;
use App\Models\ServiceProvider;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class SproviderPendingTaskComponent extends Component
{

    public function updateService($tas_id)
    {
        $task = PendingTask::find($tas_id);
        $task->status = "accepted";
        $task->save();
        session()->flash('message', 'Service added your task list successfully!');
    }

    public function render()
    {
        $spro = User::where('id', Auth::user()->id)->first();
        $sprovider = ServiceProvider::where('user_id', $spro->id)->first();
        $task = PendingTask::where('service_category_id', $sprovider->service_category_id)->where('status', 'pending')->paginate(15);
        return view('livewire.sprovider.sprovider-pending-task-component', ['task' => $task])->layout('layouts.base');
    }
}
