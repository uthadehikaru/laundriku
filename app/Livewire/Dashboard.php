<?php

namespace App\Livewire;

use App\Models\Order;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $data['totalOrders'] = Order::count();
        $data['pickupToday'] = Order::where('pickup_date', date('Y-m-d'))->get();
        return view('livewire.dashboard', $data);
    }
}
