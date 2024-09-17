<?php

namespace App\Filament\Resources\OrderResource\Widgets;

use App\Models\Order;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class OrderStat extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Pesanan', Order::count()),
            Stat::make('Pesanan menunggu', Order::whereDate('pickup_date', '>', now())->count()),
            Stat::make('Pendapatan', 'Rp. ' . number_format(Order::sum('total_price'), 0, ',', '.')),
        ];
    }
}
