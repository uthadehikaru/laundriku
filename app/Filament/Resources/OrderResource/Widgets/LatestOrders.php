<?php

namespace App\Filament\Resources\OrderResource\Widgets;

use App\Models\Order;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class LatestOrders extends BaseWidget
{
    public function table(Table $table): Table
    {
        return $table
            ->query(
                Order::query()
                    ->latest()
                    ->limit(5)
            )
            ->columns([
                Tables\Columns\TextColumn::make('pickup_date')
                ->label('Tanggal Pickup'),
                Tables\Columns\TextColumn::make('customer_name')
                ->label('Nama'),
                Tables\Columns\TextColumn::make('phone_number')
                ->label('No. Telpon'),
                Tables\Columns\TextColumn::make('service_type')
                ->label('Jenis Layanan'),
                Tables\Columns\TextColumn::make('weight')
                ->label('Berat'),
                Tables\Columns\TextColumn::make('total_price')
                ->label('Total Harga'),
                Tables\Columns\TextColumn::make('status')
                ->label('Status')
                ->badge()
                ->colors([
                    'warning' => fn ($state) => $state === 'pending',
                    'info' => fn ($state) => $state === 'processing',
                    'primary' => fn ($state) => $state === 'ready',
                    'success' => fn ($state) => $state === 'done',
                ]),
            ]);
    }

    protected static ?int $sort = 1;

    protected int | string | array $columnSpan = 'full';

    protected static ?string $heading = 'Pesanan Terbaru';
}
