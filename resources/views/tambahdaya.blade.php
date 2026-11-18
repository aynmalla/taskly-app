<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Panduan dan simulasi pengajuan tambah daya listrik.">
    <title>Tambah Daya — PLN Layanan Publik</title>
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
            <a href="{{ url('/') }}" class="flex items-center gap-2.5" aria-label="Kembali ke beranda">
                <span class="grid h-10 w-10 place-items-center rounded-lg bg-[#0072bc] text-[#ffd100]"><svg viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6" aria-hidden="true"><path d="M13 2 4 14h6l-1 8 9-12h-6l1-8Z"/></svg></span>
                <span class="leading-tight"><span class="block text-lg font-bold text-[#0072bc]">PLN</span><span class="block text-[11px] uppercase tracking-wide text-slate-500">Layanan Publik</span></span>
            </a>
            <a href="{{ url('/') }}#layanan" class="text-sm font-semibold text-[#0072bc] hover:text-[#005c9e]">Kembali ke layanan</a>
        </nav>
    </header>

    <main class="mx-auto max-w-6xl px-4 py-10 sm:px-6 sm:py-14">
        <nav aria-label="Breadcrumb" class="mb-8 text-sm text-slate-500"><a href="{{ url('/') }}" class="hover:text-[#0072bc]">Beranda</a><span class="mx-2">/</span><span class="font-medium text-slate-700">Tambah Daya</span></nav>

        <section class="relative overflow-hidden rounded-2xl bg-gradient-to-br from-[#0072bc] to-[#0a2e52] px-6 py-8 text-white sm:px-10 sm:py-10">
            <div class="pointer-events-none absolute -right-12 -top-16 h-56 w-56 rounded-full bg-[#ffd100]/15 blur-2xl"></div>
            <div class="relative max-w-2xl">
                <span class="inline-flex rounded-full bg-white/10 px-3 py-1 text-xs font-medium ring-1 ring-white/20">Layanan perubahan daya</span>
                <h1 class="mt-4 text-3xl font-bold sm:text-4xl">Tambah daya listrik</h1>
                <p class="mt-3 text-sm leading-relaxed text-white/80 sm:text-base">Butuh kapasitas listrik lebih besar? Cek kebutuhan daya dan siapkan informasi pelanggan sebelum mengajukan perubahan daya melalui kanal resmi PLN.</p>
                <a href="#simulasi" class="mt-6 inline-flex rounded-lg bg-[#ffd100] px-5 py-3 text-sm font-semibold text-[#0a2e52] transition hover:bg-[#ffdc4d]">Mulai simulasi</a>
            </div>
        </section>

        <div class="mt-8 grid gap-8 lg:grid-cols-[1.2fr_0.8fr] lg:items-start">
            <section id="simulasi" class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm sm:p-8">
                <div class="flex items-start gap-4">
                    <span class="grid h-11 w-11 shrink-0 place-items-center rounded-xl bg-sky-100 text-[#0072bc]"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" class="h-5 w-5" aria-hidden="true"><path d="M13 2 4 14h6l-1 8 9-12h-6l1-8Z" stroke-linejoin="round"/></svg></span>
                    <div><h2 class="text-lg font-semibold text-slate-900">Simulasi kebutuhan daya</h2><p class="mt-1 text-sm text-slate-600">Pilih daya saat ini dan tujuan untuk membantu menyiapkan pengajuan.</p></div>
                </div>
                <form class="mt-7 space-y-5" onsubmit="return false" aria-label="Simulasi tambah daya">
                    <div>
                        <label for="id-pelanggan" class="block text-sm font-medium text-slate-700">ID pelanggan / nomor meter</label>
                        <input id="id-pelanggan" name="id-pelanggan" type="text" inputmode="numeric" autocomplete="off" placeholder="Masukkan nomor pelanggan" maxlength="20" class="mt-2 w-full rounded-lg border border-slate-300 px-4 py-3 text-sm outline-none transition placeholder:text-slate-400 focus:border-[#0072bc] focus:ring-2 focus:ring-[#0072bc]/20">
                    </div>
                    <div class="grid gap-5 sm:grid-cols-2">
                        <div><label for="daya-awal" class="block text-sm font-medium text-slate-700">Daya saat ini</label><select id="daya-awal" name="daya-awal" class="mt-2 w-full rounded-lg border border-slate-300 bg-white px-4 py-3 text-sm outline-none focus:border-[#0072bc] focus:ring-2 focus:ring-[#0072bc]/20"><option value="">Pilih daya</option><option>450 VA</option><option>900 VA</option><option>1.300 VA</option><option>2.200 VA</option><option>3.500 VA</option><option>4.400 VA</option><option>5.500 VA</option><option>6.600 VA</option></select></div>
                        <div><label for="daya-tujuan" class="block text-sm font-medium text-slate-700">Daya yang diinginkan</label><select id="daya-tujuan" name="daya-tujuan" class="mt-2 w-full rounded-lg border border-slate-300 bg-white px-4 py-3 text-sm outline-none focus:border-[#0072bc] focus:ring-2 focus:ring-[#0072bc]/20"><option value="">Pilih daya</option><option>900 VA</option><option>1.300 VA</option><option>2.200 VA</option><option>3.500 VA</option><option>4.400 VA</option><option>5.500 VA</option><option>6.600 VA</option><option>7.700 VA</option></select></div>
                    </div>
                    <div><label for="jenis-pelanggan" class="block text-sm font-medium text-slate-700">Jenis pelanggan</label><select id="jenis-pelanggan" name="jenis-pelanggan" class="mt-2 w-full rounded-lg border border-slate-300 bg-white px-4 py-3 text-sm outline-none focus:border-[#0072bc] focus:ring-2 focus:ring-[#0072bc]/20"><option>Rumah tangga</option><option>Bisnis</option><option>Sosial</option><option>Industri</option></select></div>
                    <p class="rounded-lg bg-amber-50 px-4 py-3 text-xs leading-relaxed text-amber-800 ring-1 ring-amber-200">Simulasi ini belum menghitung biaya. Biaya resmi bergantung pada golongan tarif, kondisi jaringan, dan ketentuan yang berlaku; pastikan nominal melalui PLN Mobile atau Call Center 123.</p>
                    <button type="button" onclick="document.getElementById('cara-pengajuan').scrollIntoView({behavior:'smooth'})" class="inline-flex w-full items-center justify-center gap-2 rounded-lg bg-[#0072bc] px-5 py-3 text-sm font-semibold text-white transition hover:bg-[#005c9e] sm:w-auto">Lihat cara pengajuan<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="h-4 w-4" aria-hidden="true"><path d="M5 12h14m-6-6 6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
                </form>
            </section>

            <aside class="space-y-5">
                <section class="rounded-2xl bg-[#0a2e52] p-6 text-white sm:p-7">
                    <span class="grid h-11 w-11 place-items-center rounded-xl bg-white/10 text-[#ffd100]"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" class="h-5 w-5" aria-hidden="true"><path d="M5 4h14v16H5zM8 8h8m-8 4h8m-8 4h5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                    <h2 class="mt-4 text-lg font-semibold">Siapkan sebelum mengajukan</h2>
                    <ul class="mt-4 space-y-3 text-sm text-white/80">
                        <li class="flex gap-3"><span class="text-[#ffd100]">✓</span><span>ID pelanggan atau nomor meter.</span></li>
                        <li class="flex gap-3"><span class="text-[#ffd100]">✓</span><span>Identitas pemilik atau pemohon yang sah.</span></li>
                        <li class="flex gap-3"><span class="text-[#ffd100]">✓</span><span>Alamat lengkap lokasi sambungan dan nomor kontak aktif.</span></li>
                        <li class="flex gap-3"><span class="text-[#ffd100]">✓</span><span>Informasi daya saat ini dan daya yang dibutuhkan.</span></li>
                    </ul>
                    <p class="mt-5 border-t border-white/15 pt-4 text-xs leading-relaxed text-white/60">Dokumen tambahan mungkin diperlukan setelah verifikasi sesuai kondisi lokasi.</p>
                </section>
                <section class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                    <h2 class="text-base font-semibold text-slate-900">Butuh bantuan?</h2><p class="mt-2 text-sm leading-relaxed text-slate-600">Untuk informasi biaya, ketersediaan jaringan, dan status permohonan, gunakan kanal resmi PLN.</p>
                    <a href="tel:123" class="mt-4 inline-flex items-center gap-2 text-sm font-semibold text-[#0072bc] hover:text-[#005c9e]">Call Center 123<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" class="h-4 w-4" aria-hidden="true"><path d="M3 5a2 2 0 0 1 2-2h2l2 5-2 1a11 11 0 0 0 5 5l1-2 5 2v2a2 2 0 0 1-2 2A16 16 0 0 1 3 5Z" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </section>
            </aside>
        </div>

        <section id="cara-pengajuan" class="mt-10 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm sm:p-8">
            <p class="text-xs font-semibold uppercase tracking-widest text-[#0072bc]">Alur pengajuan</p><h2 class="mt-2 text-xl font-bold text-slate-900 sm:text-2xl">Ajukan melalui kanal resmi</h2>
            <ol class="mt-6 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ([['Pilih layanan', 'Buka PLN Mobile atau hubungi Call Center 123.'], ['Masukkan data', 'Isi ID pelanggan, lokasi, dan daya yang diinginkan.'], ['Verifikasi', 'Ikuti pemeriksaan data dan survei bila diperlukan.'], ['Selesaikan proses', 'Tinjau rincian biaya resmi, lalu ikuti instruksi pembayaran dan penyalaan.']] as $i => [$judul, $teks])
                    <li class="rounded-xl bg-slate-50 p-5 ring-1 ring-slate-200"><span class="grid h-8 w-8 place-items-center rounded-full bg-[#0072bc] text-sm font-bold text-white">{{ $i + 1 }}</span><h3 class="mt-3 text-sm font-semibold text-slate-900">{{ $judul }}</h3><p class="mt-1 text-sm leading-relaxed text-slate-600">{{ $teks }}</p></li>
                @endforeach
            </ol>
            <p class="mt-5 text-xs leading-relaxed text-slate-500">Halaman ini merupakan panduan dan simulasi, bukan formulir permohonan resmi. Jangan membayar ke rekening pribadi; gunakan kanal dan metode pembayaran resmi PLN.</p>
        </section>
    </main>
    <footer class="mt-10 border-t border-slate-200 bg-white"><div class="mx-auto flex max-w-6xl flex-col gap-2 px-4 py-6 text-xs text-slate-500 sm:flex-row sm:items-center sm:justify-between sm:px-6"><p>&copy; {{ date('Y') }} Halaman contoh layanan publik PLN. Bukan situs resmi PLN.</p><a href="{{ url('/') }}" class="font-medium text-[#0072bc] hover:text-[#005c9e]">Kembali ke beranda</a></div></footer>
</body>
</html>
