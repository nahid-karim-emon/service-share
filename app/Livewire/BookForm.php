<?php

namespace App\Livewire;

use App\Models\AdminAmount;
use App\Models\User;
use App\Models\Service;
use Livewire\Component;
use App\Models\PendingTask;
use Illuminate\Support\Facades\Auth;

class BookForm extends Component
{
    public $location;
    public $phone;
    public $service_slug;

    public function mount($service_slug)
    {
        $this->service_slug = $service_slug;
    }

    public function created($fields)
    {
        $this->validateOnly($fields, [
            'location' => 'required',
            'phone' => 'required',
        ]);
    }

    public function bookNow()
    {
        $this->validate([
            'location' => 'required',
            'phone' => 'required',
        ]);

        $service = Service::where('slug', $this->service_slug)->first();
        $customer = User::where('id', Auth::user()->id)->first();
        $pending = new PendingTask();
        $adminAmount = new AdminAmount();
        $pending->customer_id = $customer->id;
        $pending->service_id = $service->id;
        $pending->service_category_id = $service->service_category_id;
        $pending->service_location = $this->location;
        $pending->phone = $this->phone;
        $pending->amount = $service->price;
        $adminAmount->customer_id = $customer->id;
        $adminAmount->service_id = $service->id;
        $adminAmount->amount = $service->price;
        $pending->save();
        $adminAmount->save();
        session()->flash('message', 'Your request has been submitted for acceptance by our service providers!');
    }

    public function render()
    {
        return view('livewire.book-form')->layout('layouts.base');
    }
}
