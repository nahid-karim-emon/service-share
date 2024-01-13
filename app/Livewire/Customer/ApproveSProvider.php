<?php

namespace App\Livewire\Customer;

use App\Models\User;
use App\Models\Service;
use Livewire\Component;
use App\Models\PendingTask;
use App\Models\WaitingTask;
use Illuminate\Support\Facades\Auth;

class ApproveSProvider extends Component
{
    public function render()
    {
        $task = WaitingTask::where('customer_id', Auth::user()->id)->where('status', 'pending')->paginate(15);
        // $spro = User::where('id', $task->sprovider_id)->first();
        // $ntask = PendingTask::where('id', $task->task_id)->first();
        // $service = Service::where('id', $ntask->service_id)->first();
        return view('livewire.customer.approve-s-provider', ['task' => $task])->layout('layouts.base');
    }
}
