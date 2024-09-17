<?php

namespace App\Livewire;

use App\Models\Order;
use Livewire\Component;
use Livewire\WithPagination;

class OrderList extends Component
{
    use WithPagination;
    
    public function render()
    {
        $orders = Order::latest()->paginate(10);
        return view('livewire.order-list', compact('orders'));
    }

    public function update($order_id, $status)
    {
        $order = Order::find($order_id);
        $order->status = $status;
        $order->save();
        $this->dispatch('message', message: 'Status berhasil diubah');
    }   
}
