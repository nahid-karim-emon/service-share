<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class PaymentSummary extends Component
{
    public function render()
    {
        $customer = User::where('id', Auth::user()->id)->first();
        return view('livewire.payment-summary', ['customer' => $customer])->layout(layouts . base);
    }
}
