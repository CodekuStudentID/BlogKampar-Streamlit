<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Post;

class PostStats extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Berita', Post::count())
                ->description('Jumlah semua postingan')
                ->descriptionIcon('heroicon-m-document-text')
                ->color('success')
                ->chart([7, 2, 10, 3, 15, 4, 17]), // Grafik naik turun sederhana

            Stat::make('Kategori', Post::distinct('category')->count())
                ->description('Kategori berita aktif')
                ->descriptionIcon('heroicon-m-tag')
                ->color('primary'),

            Stat::make('Update Terakhir', Post::latest()->first()?->title ?? 'Belum ada data')
                ->description('Berita paling baru')
                ->descriptionIcon('heroicon-m-clock')
                ->color('info'),

            Stat::make('Lihat membuat Widget di file App\Filament\Widgets\PostStats', 1)
        ];
    }
}
