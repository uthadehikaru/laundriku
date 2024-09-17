<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Order;

class OrderForm extends Component
{
    
    public $customer_name;
    public $phone_number;
    public $service_type;
    public $weight;
    public $pickup_date;
    public $special_instructions;
    public $total_price;
    public $showForm = false;

    protected $prices = [
        'wash' => 5000,
        'iron' => 4000,
        'wash_and_iron' => 7000,
    ];

    public function showOrderForm()
    {
        $this->showForm = true;
    }

    public function updatedServiceType()
    {
        $this->calculateTotalPrice();
    }

    public function updatedWeight()
    {
        $this->calculateTotalPrice();
    }

    private function calculateTotalPrice()
    {
        if ($this->service_type && $this->weight) {
            $pricePerKg = $this->prices[$this->service_type] ?? 0;
            $this->total_price = $pricePerKg * $this->weight;
        } else {
            $this->total_price = 0;
        }
    }

    protected $rules = [
        'customer_name' => 'required|string|max:255',
        'phone_number' => 'required|string|max:20',
        'service_type' => 'required|in:wash,dry-clean,iron',
        'weight' => 'required|numeric|min:0',
        'pickup_date' => 'required|date|after:today',
        'special_instructions' => 'nullable|string|max:500',
    ];

    public function submitOrder()
    {
        $validatedData = $this->validate();
        $validatedData['price'] = $this->prices[$this->service_type] ?? 0;
        $validatedData['total_price'] = $this->total_price;
        $validatedData['user_id'] = auth()->id();

        Order::create($validatedData);

        $this->reset();

        session()->flash('message', 'Laundry order submitted successfully!');
        $this->dispatch('orderSubmitted');
    }

    public function render()
    {
        return view('livewire.order-form');
    }
}
