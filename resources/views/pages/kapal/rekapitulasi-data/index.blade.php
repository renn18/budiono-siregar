<x-app-layout>
  <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto" x-data="{ selectedMonth: '', selectedYear: '' }">
    <div class="flex gap-2">
      <div class="form-group">
        <label for="filter-month">Filter by Month:</label>
        <select id="filter-month" class="form-select" x-model="selectedMonth">
          <option value="1">Januari</option>
          <option value="2">Februari</option>
          <option value="3">Maret</option>
          <option value="4">April</option>
          <option value="5">Mei</option>
          <option value="6">Juni</option>
          <option value="7">Juli</option>
          <option value="8">Agustus</option>
          <option value="9">September</option>
          <option value="10">Oktober</option>
          <option value="11">November</option>
          <option value="12">Desember</option>
        </select>
      </div>

      <div class="form-group">
        <label for="filter-year">Filter by Year:</label>
        <select x-model="selectedYear" class="form-select" id="filter-year">
          @for ($year = now()->year; $year >= 2016; $year--)
            <option value="{{ $year }}" {{ now()->format('Y') == $year ? 'selected' : '' }}>{{ $year }}
            </option>
          @endfor
        </select>
      </div>
    </div>

    <div id="filtered-data" class="overflow-x-auto mt-4">
      <table id="filtered-table" class="table table-xs text-center even:bg-slate-500">
        <thead class="text-slate-600">
          <tr>
            <th rowspan="2">No.</th>
            <th rowspan="2">Nama Kapal</th>
            <th rowspan="2">Keagenan</th>
            <th colspan="2" class="text-center">Ukuran</th>
            <th colspan="2" class="text-center">Tiba</th>
            <th colspan="2" class="text-center">Rencana Berangkat</th>
            <th colspan="2" class="text-center">Rencana Kegiatan</th>
            <th rowspan="2">Jenis Barang</th>
            <th rowspan="2">Posisi Tambat</th>
            <th rowspan="2">Bendera</th>
            <th rowspan="2">Keterangan</th>
            <th rowspan="2">Tanggal</th>
          </tr>
          <tr>
            <th>LOA</th>
            <th>GT</th>
            <th>Dari</th>
            <th>Tanggal</th>
            <th>Tujuan</th>
            <th>Tanggal</th>
            <th>B (Ton/M3)</th>
            <th>M (Ton/M3)</th>
          </tr>
        </thead>
        <tbody class="capitalize">
          @foreach ($ships as $kapal)
            <tr class="hover:bg-slate-200 hover:text-slate-500"
              x-show="(selectedMonth === '' || parseInt(selectedMonth) === {{ Carbon\Carbon::parse($kapal->created_at)->format('m') }}) && (selectedYear === '' || parseInt(selectedYear) === {{ Carbon\Carbon::parse($kapal->created_at)->format('Y') }})">
              <th>{{ $ships->firstItem() + $loop->index }}</th>
              <td>{{ $kapal->nama_kapal }}</td>
              <td>{{ $kapal->keagenan }}</td>
              <td>{{ $kapal->loa }}</td>
              <td>{{ $kapal->gt }}</td>
              <td>{{ $kapal->penjadwalan->tiba_dari }}</td>
              <td>{{ Carbon\Carbon::parse($kapal->penjadwalan->tanggal_tiba)->format('d-m-Y') }}</td>
              <td>{{ $kapal->penjadwalan->tujuan }}</td>
              <td>{{ Carbon\Carbon::parse($kapal->penjadwalan->tanggal_rencana_berangkat)->format('d-m-Y') }}
              </td>
              <td>{{ $kapal->keperluan->bongkar }}</td>
              <td>{{ $kapal->keperluan->muat_barang }}</td>
              <td>{{ $kapal->keperluan->jenis_barang }}</td>
              <td>{{ $kapal->penjadwalan->posisi_tambat }}</td>
              <td>{{ $kapal->bendera }}</td>
              <td>{{ $kapal->keperluan->keterangan }}</td>
              <td>{{ $kapal->created_at->format('d-m-Y') }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>

			<div class="mt-5">
        {{ $ships->links() }}
      </div>
    </div>
  </div>
</x-app-layout>
