<?php

namespace App\Livewire\Customer;

use Livewire\Component;
use App\Models\AdminAmount;
use App\Models\PendingTask;
use App\Models\CompletedTask;
use Illuminate\Support\Facades\Auth;
use App\Models\CustomerReview as ModelsCustomerReview;
use App\Models\ServiceProvider;

class CustomerReview extends Component
{
    public $message;
    public $rating;
    public $tas_id;
    public $service;
    public $sprovider_id;

    public function mount($tas_id)
    {
        $this->tas_id = $tas_id;
    }

    public function created($fields)
    {
        $this->validateOnly($fields, [
            'message' => 'required',
            'rating' => 'required|numeric|min:1.0|max:5.0',
        ]);
    }

    public function submitReview()
    {
        $this->validate([
            'message' => 'required',
            'rating' => 'required|numeric|min:1|max:5',
        ]);
        $task = PendingTask::find($this->tas_id);
        $user = PendingTask::where('customer_id', Auth::user()->id)->first();
        $admin = AdminAmount::where('id', 1)->first();
        $sprovider = new AdminAmount();
        $conTask = new CompletedTask();
        $conTask->customer_id = $task->customer_id;
        $conTask->service_id = $task->service_id;
        $service = $task->service_id;
        $conTask->service_category_id = $task->service_category_id;
        $conTask->service_location = $task->service_location;
        $conTask->phone = $task->phone;
        $conTask->amount = $task->amount;
        $samount = ($task->amount) * (90 / 100);
        $admin->amount = ($admin->amount) - $samount;
        $sprovider->customer_id = $task->customer_id;
        $sprovider->sprovider_id = $task->sprovider_id;
        $sprovider_id = $task->sprovider_id;
        $conTask->sprovider_id = $task->sprovider_id;
        $sprovider->service_id = $task->service_id;
        $sprovider->amount = $samount;
        $sprovider->save();
        $admin->save();
        $conTask->save();
        $review = new ModelsCustomerReview();
        $sprovider = CompletedTask::where('sprovider_id', $sprovider_id)->where('customer_id', Auth::user()->id)->Where('service_id', $service)->first();
        $spro = ServiceProvider::where('user_id', $sprovider_id)->first();
        $spro->amount = ($spro->amount) + $samount;
        $review->customer_id = $task->customer_id;
        $review->sprovider_id = $task->sprovider_id;
        $review->rating = $this->rating;
        $review->review = $this->message;
        $review->service_id = $service;
        $review->save();
        $spro->save();
        $task->delete();
        session()->flash('message', 'Thansks for your Valuable feedback!');
    }
    public function render()
    {
        return view('livewire.customer.customer-review')->layout('layouts.base');
    }
}
