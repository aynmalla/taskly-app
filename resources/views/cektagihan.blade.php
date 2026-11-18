<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Informasi cara cek tagihan listrik dan riwayat pemakaian.">
    <title>Cek Tagihan — PLN Layanan Publik</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet">
    @vite(['resources/css/app.css'])
</head>
<body class="min-h-screen bg-slate-50 font-sans text-slate-800 antialiased">
    <div class="bg-[#0a2e52] text-white">
        <div class="mx-auto flex max-w-6xl items-center justify-between px-4 py-2 text-xs sm:px-6">
            <p>Layanan Pelanggan PLN</p>
            <a href="tel:123" class="rounded-full bg-[#ffd100] px-3 py-0.5 font-semibold text-[#0a2e52]">Call Center 123</a>
        </div>
    </div>

    <header class="border-b border-slate-200 bg-white">
        <nav class="mx-auto flex max-w-6xl items-center justify-between px-4 py-4 sm:px-6">
            <a href="{{ url('/') }}" class="flex items-center gap-2.5" aria-label="Kembali ke beranda PLN Layanan Publik">
                <span class="grid h-10 w-10 place-items-center rounded-lg bg-[#0072bc] text-[#ffd100]">
                    <svg viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6" aria-hidden="true"><path d="M13 2 4 14h6l-1 8 9-12h-6l1-8Z"/></svg>
                </span>
                <span class="leading-tight"><span class="block text-lg font-bold text-[#0072bc]">PLN</span><span class="block text-[11px] uppercase tracking-wide text-slate-500">Layanan Publik</span></span>
            </a>
            <a href="{{ url('/') }}#layanan" class="text-sm font-semibold text-[#0072bc] hover:text-[#005c9e]">Kembali ke layanan</a>
        </nav>
    </header>

    <main class="mx-auto max-w-6xl px-4 py-10 sm:px-6 sm:py-16">
        <nav aria-label="Breadcrumb" class="mb-8 text-sm text-slate-500">
            <a href="{{ url('/') }}" class="hover:text-[#0072bc]">Beranda</a>
            <span class="mx-2">/</span><span class="font-medium text-slate-700">Cek Tagihan</span>
        </nav>

        <div class="grid gap-8 lg:grid-cols-[1.2fr_0.8fr] lg:items-start">
            <section>
                <p class="text-xs font-semibold uppercase tracking-widest text-[#0072bc]">Informasi pelanggan</p>
                <h1 class="mt-2 text-3xl font-bold text-slate-900 sm:text-4xl">Cek tagihan listrik</h1>
                <p class="mt-4 max-w-2xl text-sm leading-relaxed text-slate-600 sm:text-base">
                    Siapkan nomor ID pelanggan atau nomor meter untuk melihat tagihan dan riwayat pemakaian melalui kanal resmi PLN.
                </p>

                <div class="mt-8 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm sm:p-8">
                    <div class="flex items-start gap-4">
                        <span class="grid h-11 w-11 shrink-0 place-items-center rounded-xl bg-sky-100 text-[#0072bc]">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" class="h-5 w-5" aria-hidden="true"><path d="M5 4h14v16H5zM8 8h8M8 12h3m2 0h3m-8 4h8" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </span>
                        <div>
                            <h2 class="text-lg font-semibold text-slate-900">Gunakan PLN Mobile</h2>
                            <p class="mt-1 text-sm leading-relaxed text-slate-600">Cek tagihan, riwayat transaksi, dan informasi layanan dengan memasukkan ID pelanggan Anda di aplikasi resmi PLN Mobile.</p>
                        </div>
                    </div>

                    <form class="mt-7" onsubmit="return false" aria-label="Formulir contoh nomor pelanggan">
                        <label for="nomor-pelanggan" class="block text-sm font-medium text-slate-700">Nomor ID pelanggan / nomor meter</label>
                        <input id="nomor-pelanggan" name="nomor-pelanggan" type="text" inputmode="numeric" autocomplete="off" placeholder="Contoh: 12345678901" maxlength="20"
                               class="mt-2 w-full rounded-lg border border-slate-300 bg-white px-4 py-3 text-sm outline-none transition placeholder:text-slate-400 focus:border-[#0072bc] focus:ring-2 focus:ring-[#0072bc]/20">
                        <p class="mt-2 text-xs text-slate-500">Nomor dapat ditemukan pada struk atau kartu pelanggan listrik Anda.</p>
                        <button type="button" onclick="document.getElementById('info-kanal-resmi').scrollIntoView({behavior: 'smooth'})"
                                class="mt-5 inline-flex w-full items-center justify-center gap-2 rounded-lg bg-[#0072bc] px-5 py-3 text-sm font-semibold text-white transition hover:bg-[#005c9e] sm:w-auto">
                            Lihat cara pengecekan
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="h-4 w-4" aria-hidden="true"><path d="M5 12h14m-6-6 6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </button>
                    </form>
                    <p class="mt-6 rounded-lg bg-amber-50 px-4 py-3 text-xs leading-relaxed text-amber-800 ring-1 ring-amber-200">
                        Halaman ini menyediakan panduan. Pengecekan tagihan dilakukan melalui aplikasi PLN Mobile atau kanal resmi PLN.
                    </p>
                </div>
            </section>

            <aside class="space-y-5">
                <section id="info-kanal-resmi" class="rounded-2xl bg-[#0a2e52] p-6 text-white sm:p-7">
                    <span class="grid h-11 w-11 place-items-center rounded-xl bg-white/10 text-[#ffd100]">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" class="h-5 w-5" aria-hidden="true"><path d="M12 3 4 6v5c0 5 3.4 8.5 8 10 4.6-1.5 8-5 8-10V6l-8-3Z" stroke-linejoin="round"/><path d="m9 12 2 2 4-4" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </span>
                    <h2 class="mt-4 text-lg font-semibold">Cara cek tagihan</h2>
                    <ol class="mt-4 space-y-3 text-sm text-white/80">
                        <li class="flex gap-3"><span class="font-semibold text-[#ffd100]">1.</span><span>Buka aplikasi PLN Mobile.</span></li>
                        <li class="flex gap-3"><span class="font-semibold text-[#ffd100]">2.</span><span>Pilih menu “Token &amp; Pembayaran” atau layanan tagihan.</span></li>
                        <li class="flex gap-3"><span class="font-semibold text-[#ffd100]">3.</span><span>Masukkan ID pelanggan atau nomor meter untuk melihat informasi Anda.</span></li>
                    </ol>
                    <a href="https://web.pln.co.id/" target="_blank" rel="noopener noreferrer" class="mt-6 inline-flex items-center gap-2 rounded-lg bg-[#ffd100] px-4 py-2.5 text-sm font-semibold text-[#0a2e52] transition hover:bg-[#ffdc4d]">
                        Kunjungi situs PLN
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" class="h-4 w-4" aria-hidden="true"><path d="M14 4h6v6m-11 4L20 4M18 13v6a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h6" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </a>
                </section>

                <section class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                    <h2 class="text-base font-semibold text-slate-900">Butuh bantuan?</h2>
                    <p class="mt-2 text-sm leading-relaxed text-slate-600">Hubungi layanan pelanggan PLN untuk bantuan terkait tagihan dan pemakaian listrik.</p>
                    <a href="tel:123" class="mt-4 inline-flex items-center gap-2 text-sm font-semibold text-[#0072bc] hover:text-[#005c9e]">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" class="h-4 w-4" aria-hidden="true"><path d="M3 5a2 2 0 0 1 2-2h2l2 5-2 1a11 11 0 0 0 5 5l1-2 5 2v2a2 2 0 0 1-2 2A16 16 0 0 1 3 5Z" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        Call Center 123
                    </a>
                </section>
            </aside>
        </div>
    </main>

    <footer class="mt-10 border-t border-slate-200 bg-white">
        <div class="mx-auto flex max-w-6xl flex-col gap-2 px-4 py-6 text-xs text-slate-500 sm:flex-row sm:items-center sm:justify-between sm:px-6">
            <p>&copy; {{ date('Y') }} Halaman contoh layanan publik PLN. Bukan situs resmi PLN.</p>
            <a href="{{ url('/') }}" class="font-medium text-[#0072bc] hover:text-[#005c9e]">Kembali ke beranda</a>
        </div>
    </footer>
</body>
</html>
