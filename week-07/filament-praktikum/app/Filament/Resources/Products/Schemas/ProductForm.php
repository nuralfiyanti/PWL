<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Wizard;
use Filament\Schemas\Components\Wizard\Step;
use Filament\Schemas\Components\Group;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Toggle;
use Filament\Actions\Action;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Wizard::make([
                    Step::make('Product Info')
                        ->description('Isi Informasi Produk')
                        ->schema([
                            Group::make([
                                TextInput::make('name')
                                    ->label('Nama Produk')
                                    ->required()
                                    ->minLength(3)
                                    ->maxLength(255)
                                    ->placeholder('Masukkan nama produk'),
                                TextInput::make('sku')
                                    ->label('SKU')
                                    ->required()
                                    ->unique(ignoreRecord: true)
                                    ->minLength(3)
                                    ->maxLength(50)
                                    ->placeholder('Masukkan SKU produk'),
                            ])->columns(2),
                            MarkdownEditor::make('description')
                                ->label('Deskripsi Produk')
                        ]),
                    Step::make('Pricing & Stock')
                        ->description('Isi harga dan jumlah stok')
                        ->schema([
                            Group::make([
                                TextInput::make('price')
                                    ->label('Harga (Rp)')
                                    ->numeric()
                                    ->required()
                                    ->minValue(0)
                                    ->placeholder('Contoh: 50000'),
                                TextInput::make('stock')
                                    ->label('Stok')
                                    ->numeric()
                                    ->required()
                                    ->minValue(0)
                                    ->placeholder('Contoh: 100'),
                            ])->columns(2),
                        ]),
                    Step::make('Media & Status')
                        ->description('Unggah Gambar dan Status')
                        ->schema([
                            FileUpload::make('image')
                                ->label('Gambar Produk')
                                ->image()
                                ->maxSize(2048),
                            Group::make([
                                Toggle::make('is_active')
                                    ->label('Aktif')
                                    ->default(true),
                                Toggle::make('is_featured')
                                    ->label('Produk Unggulan')
                                    ->default(false),
                            ])->columns(2),
                        ]),
                ])
                ->columnSpanFull()
            ]);
    }
}

