<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

   public static function form(Form $form): Form
{
    return $form
        ->schema([
            Forms\Components\TextInput::make('title')
                ->required()
                ->live(onBlur: true)
                ->afterStateUpdated(fn (Set $set, $state) => $set('slug', Str::slug($state))),

            Forms\Components\TextInput::make('slug')
                ->disabled()
                ->dehydrated()
                ->required(),

            Forms\Components\Select::make('category')
                ->options([
                    'nasional' => 'nasional',
                    'internasional' => 'internasional',
                    'ekonomi' => 'ekonomi',
                    'budaya' => 'budaya',
                    'olahraga' => 'olahraga',
                    'teknologi' => 'teknologi',
                    'hiburan' => 'hiburan',
                    'lifestyle' => 'lifestyle',
                ])
                ->required()
                ->native(false), // Membuat tampilan select jadi lebih modern

            Forms\Components\RichEditor::make('content')
                ->required()
                ->columnSpanFull(),

            Forms\Components\FileUpload::make('images')
                ->image()
                ->directory('posts') // Otomatis simpan ke storage/app/public/posts
                ->disk('public')
                ->imageEditor() // Bisa crop gambar langsung di dashboard!
        ]);
}

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
            Tables\Columns\ImageColumn::make('images')
                ->label('Thumbnail')
                ->disk('public')
                ->visibility('public')
                ->circular(),

            // 2. Menampilkan Judul (Bisa di-search dan di-sort)
            Tables\Columns\TextColumn::make('title')
                ->label('Judul Berita')
                ->searchable()
                ->sortable()
                ->wrap(), // Agar teks panjang turun ke bawah, tidak terpotong

            // 3. Menampilkan Kategori dengan Badge Berwarna
            Tables\Columns\TextColumn::make('category')
                ->badge()
                ->color(fn (string $state): string => match ($state) {
                    'nasional' => 'info',
                    'ekonomi' => 'success',
                    'teknologi' => 'primary',
                    'olahraga' => 'warning',
                    'internasional' => 'danger',
                    default => 'gray',
                }),

            // 4. Menampilkan Tanggal Dibuat
            Tables\Columns\TextColumn::make('created_at')
                ->label('Diposting Pada')
                ->dateTime('d M Y H:i')
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
        ])
        ->filters([
            // Anda bisa tambah filter kategori di sini nanti
        ])
        ->actions([
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
