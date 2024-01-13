<?php

namespace App\Livewire\Customer;

use App\Models\User;
use Livewire\Component;
use App\Models\PendingTask;
use App\Models\WaitingTask;
use App\Models\CustomerReview;
use Illuminate\Support\Facades\Auth;

class SProviderDetails extends Component
{
    public function updatePendingTask($tas_id)
    {
        $task = WaitingTask::find($tas_id);
        $taskp = PendingTask::find($task->task_id);
        //$spid = $task->sprovider_id;
        $taskp->sprovider_id = $task->sprovider_id;
        $taskp->status = "accepted";
        $task->status = "approved";
        $taskp->save();
        $task->save();
        session()->flash('message', 'Service added this service provider task list successfully!');
    }

    public function render()
    {
        $task1 = WaitingTask::where('customer_id', Auth::user()->id)->first();
        $review = CustomerReview::where('sprovider_id', $task1->sprovider_id)->paginate(15);
        $spro = User::where('id', $task1->sprovider_id);
        return view('livewire.customer.s-provider-details', ['spro' => $spro, 'review' => $review, 'tas' => $task1])->layout('layouts.base');
    }
}
