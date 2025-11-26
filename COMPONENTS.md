# Laravel Components Documentation

## Struktur Komponen

Semua komponen telah diorganisir sesuai dengan best practice Laravel, dimana setiap komponen memiliki:
1. **PHP Class** di `app/View/Components/`
2. **Blade View** di `resources/views/components/`

## Daftar Komponen Aktif

### 1. AdminLayout
- **Class**: `app/View/Components/AdminLayout.php`
- **View**: `resources/views/components/admin-layout.blade.php`
- **Penggunaan**: Layout utama untuk halaman admin
- **Props**: 
  - `title` (optional): Judul halaman
  - `pageTitle` (optional): Judul dinamis di header
  - `breadcrumb1`, `breadcrumb2`, `breadcrumb3` (optional): Breadcrumb navigation

**Contoh:**
```blade
<x-admin-layout title="Dashboard" :pageTitle="'Admin Dashboard'" breadcrumb1="Home" breadcrumb2="Dashboard">
    <!-- Content here -->
</x-admin-layout>
```

### 2. Panel
- **Class**: `app/View/Components/Panel.php`
- **View**: `resources/views/components/panel.blade.php`
- **Penggunaan**: Card/Panel untuk konten
- **Props**: 
  - `title` (optional): Judul panel
  - `subtitle` (optional): Subjudul panel
  - `id` (optional): ID HTML untuk panel
  - `collapsed` (optional): Status collapsed panel

**Contoh:**
```blade
<x-panel title="Data Table" id="panel-1">
    <!-- Panel content -->
</x-panel>
```

### 3. Sidebar
- **Class**: `app/View/Components/Sidebar.php`
- **View**: `resources/views/components/sidebar.blade.php`
- **Penggunaan**: Navigasi sidebar
- **Props**: Tidak ada props (static sidebar)

### 4. Header
- **Class**: `app/View/Components/Header.php`
- **View**: `resources/views/components/header.blade.php`
- **Penggunaan**: Header halaman dengan profil dan menu
- **Props**: Tidak ada props (static header)

### 5. Footer
- **Class**: `app/View/Components/Footer.php`
- **View**: `resources/views/components/footer.blade.php`
- **Penggunaan**: Footer halaman
- **Props**: Tidak ada props (static footer)

### 6. ColorProfile
- **Class**: `app/View/Components/ColorProfile.php`
- **View**: `resources/views/components/color-profile.blade.php`
- **Penggunaan**: Selector profil warna tema
- **Props**: Tidak ada props

### 7. PageSettings
- **Class**: `app/View/Components/PageSettings.php`
- **View**: `resources/views/components/page-settings.blade.php`
- **Penggunaan**: Modal settings halaman
- **Props**: Tidak ada props

## Komponen yang Dihapus

Komponen berikut telah dihapus karena tidak memiliki view blade dan tidak digunakan:
- ❌ Alert.php
- ❌ Button.php
- ❌ Card.php
- ❌ Layout.php
- ❌ Navbar.php

## Best Practices

1. **Penamaan Komponen**:
   - Class menggunakan PascalCase: `AdminLayout.php`
   - View menggunakan kebab-case: `admin-layout.blade.php`
   - Penggunaan menggunakan kebab-case: `<x-admin-layout>`

2. **Lokasi File**:
   - Semua class komponen di `app/View/Components/`
   - Semua view komponen di `resources/views/components/`

3. **Constructor Props**:
   - Gunakan public properties untuk props yang dapat diakses
   - Gunakan nullable types (`?string`) untuk props opsional
   - Set default value untuk props opsional

4. **Return Type**:
   - Selalu specify return type `View` pada method `render()`
   - Import `use Illuminate\View\View;`

## Cara Menambah Komponen Baru

1. Buat class di `app/View/Components/NamaKomponen.php`:
```php
<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class NamaKomponen extends Component
{
    public function __construct(
        public ?string $prop1 = null,
    ) {}

    public function render(): View
    {
        return view('components.nama-komponen');
    }
}
```

2. Buat view di `resources/views/components/nama-komponen.blade.php`:
```blade
<div>
    {{ $prop1 }}
    {{ $slot }}
</div>
```

3. Gunakan di view lain:
```blade
<x-nama-komponen :prop1="'value'">
    Content here
</x-nama-komponen>
```

## Verifikasi

Untuk memastikan semua komponen terdaftar dengan benar:
```bash
php artisan view:clear
php artisan optimize:clear
```
