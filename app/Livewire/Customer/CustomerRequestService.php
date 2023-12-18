<?php

namespace App\Livewire\Customer;

use Livewire\Component;
use App\Models\PendingTask;
use Illuminate\Support\Facades\Auth;

class CustomerRequestService extends Component
{
    // public function updateService($tas_id)
    // {
    //     $task = PendingTask::find($tas_id);
    //     $user = PendingTask::where('customer_id', Auth::user()->id)->first();
    //     $admin = AdminAmount::where('id', 1)->first();
    //     $sprovider = new AdminAmount();
    //     $conTask = new CompletedTask();
    //     $conTask->customer_id = $task->customer_id;
    //     $conTask->service_id = $task->service_id;
    //     $conTask->service_category_id = $task->service_category_id;
    //     $conTask->service_location = $task->service_location;
    //     $conTask->phone = $task->phone;
    //     $conTask->amount = $task->amount;
    //     $samount = ($task->amount) * (90 / 100);
    //     $admin->amount = ($admin->amount) - $samount;
    //     $sprovider->customer_id = $user->id;
    //     $sprovider->sprovider_id = $task->sprovider_id;
    //     $conTask->sprovider_id = $task->sprovider_id;
    //     $sprovider->service_id = $task->service_id;
    //     $sprovider->amount = $samount;
    //     $sprovider->save();
    //     $admin->save();
    //     $conTask->save();
    //     $task->delete();
    //     session()->flash('message', 'Thanks for your confirmation!');
    // }

    public function render()
    {
        $task = PendingTask::where('customer_id', Auth::user()->id)->paginate(15);
        return view('livewire.customer.customer-request-service', ['task' => $task])->layout('layouts.base');
    }
}
