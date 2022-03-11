<!DOCTYPE html>
<html lang="en">

<head>

    {{-- Menyisipkan file meta yang ada difolder includes --}}
    @include('includes.meta')

    <title>@yield('title') | Landing Page </title>

    {{-- Favicon --}}
    <link rel="apple-touch-icon" href="">
    <link rel="shortcut icon" type="image/x-icon" href="">

    {{-- Stack digunakan untuk menyisipkan style tambahan ataupun script tambahan yang hanya berjalan pada patch tertentu --- Bertujuan agar tidak perlu melakukan load semua style yang tidak digunakan atau hanya digunakan pada file tertentu saja --}}

    {{-- Include adalah sebuah aktivitas atau component atau script yang digunakan disemua pacth --}}

    {{-- Style ini akan diload sebelum style utama berhasil diload --}}
    @stack('before-style')

    {{-- style yang dipakai secara umum oleh semua file atau patch --}}
    @include('includes.style')

    {{-- Style ini akan diload setelah style utama berhasil diload --}}
    @stack('after-style')

</head>

<body>

    @include('includes.header')

    {{-- yield adalah melakukan pengisian sebuah patch masuk kedalam body dari file ini, agar tidak perlu melakukan penulisan code ex: header - footer secara berulang ulang --}}
    @yield('content')

    @include('includes.footer')

    @stack('before-script')
    {{-- script --}}
    @include('includes.script')

    @stack('after-script')
</body>

</html>
