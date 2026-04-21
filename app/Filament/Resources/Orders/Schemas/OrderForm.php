<?php

namespace App\Filament\Resources\Orders\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class OrderForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('customer_name')
                    ->required(),
                TextInput::make('customer_phone')
                    ->tel()
                    ->required(),
                TextInput::make('total_price')
                    ->required()
                    ->numeric()
                    ->prefix('Rp'),
                    \Filament\Forms\Components\FileUpload::make('payment_receipt')
                    ->label('Bukti Transfer')
                    ->image()
                    ->directory('receipts')
                    ->disabled(),

                    \Filament\Forms\Components\Select::make('status')
                    ->label('Status Pesanan')
                    ->options([
                        'pending' => 'Menunggu Pembayaran',
                        'paid' => 'Sudah Dibayar (Valid/ACC)',
                        'processing' => 'Pesanan Diproses',
                        'completed' => 'Pesanan Selesai',
                        'cancelled' => 'Dibatalkan',
                    ])
                    ->default('pending')
                    ->required()
                    ->native(false),
            ]);
    }
}
