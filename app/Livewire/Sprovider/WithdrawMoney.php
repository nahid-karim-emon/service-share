<?php

namespace App\Livewire\Sprovider;

use App\Models\ServiceProvider;
use App\Models\WithDrawStatus;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class WithdrawMoney extends Component
{
    public $amount;

    public function created($fields)
    {
        $this->validateOnly($fields, [
            'amount' => 'required'
        ]);
    }

    public function withdrawNow()
    {
        $this->validate([
            'amount' => 'required'
        ]);
        $spro = ServiceProvider::where('user_id', Auth::user()->id)->first();
        if ($this->amount <= $spro->amount) {
            $withdraw = new WithDrawStatus();
            $spro->amount = ($spro->amount) - $this->amount;
            $withdraw->user_id = $spro->user_id;
            $withdraw->amount = $this->amount;
            $withdraw->save();
            $spro->save();
            session()->flash('message', 'Withdraw Money Successfully!');
        } else {
            session()->flash('message', 'Please Enter Available Amount!');
        }
    }
    public function render()
    {
        $spro = ServiceProvider::where('user_id', Auth::user()->id)->first();
        return view('livewire.sprovider.withdraw-money', ['sprovider' => $spro])->layout('layouts.base');
    }
}
