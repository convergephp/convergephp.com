<?php

namespace App\Admin\Resources;

use App\Admin\Resources\TransactionResource\Pages;
use App\Admin\Resources\TransactionResource\RelationManagers;
use Laravel\Paddle\Transaction;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TransactionResource extends Resource
{
    protected static ?string $model = Transaction::class;

    protected static ?string $navigationIcon = 'iconsax-bul-transaction-minus';

    protected static ?string $navigationGroup = 'Billing';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('billable_type')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('billable_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('paddle_id')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('paddle_subscription_id')
                    ->maxLength(255),
                Forms\Components\TextInput::make('invoice_number')
                    ->maxLength(255),
                Forms\Components\TextInput::make('status')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('total')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('tax')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('currency')
                    ->required()
                    ->maxLength(3),
                Forms\Components\DateTimePicker::make('billed_at')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('billable_type')
                    ->searchable(),
                Tables\Columns\TextColumn::make('billable_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('paddle_id')
                    ->searchable(),
                Tables\Columns\TextColumn::make('paddle_subscription_id')
                    ->searchable(),
                Tables\Columns\TextColumn::make('invoice_number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('status')
                    ->searchable(),
                Tables\Columns\TextColumn::make('total')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tax')
                    ->searchable(),
                Tables\Columns\TextColumn::make('currency')
                    ->searchable(),
                Tables\Columns\TextColumn::make('billed_at')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTransactions::route('/'),
            'create' => Pages\CreateTransaction::route('/create'),
            'edit' => Pages\EditTransaction::route('/{record}/edit'),
        ];
    }
}
