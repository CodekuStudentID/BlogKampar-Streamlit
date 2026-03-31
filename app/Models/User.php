<?php

namespace App\Models;

// 1. Tambahkan import ini
use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

// 2. Tambahkan "implements FilamentUser" agar dikenali oleh Filament
class User extends Authenticatable implements FilamentUser
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * 3. Tambahkan fungsi ini untuk menentukan siapa yang boleh masuk Dashboard Admin
     */
    public function canAccessPanel(Panel $panel): bool
    {
        // Ganti 'admin@email.com' dengan email asli Anda agar bisa masuk
        // Atau gunakan logika lain, misal: return str_ends_with($this->email, '@admin.com');
        return $this->email === 'admin@gmail.com';
    }

    public function comments() {
    return $this->hasMany(Comments::class);
}
}
