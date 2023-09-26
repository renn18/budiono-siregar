<x-app-layout>
  <div class="px-4 sm:px-6 lg:px-8 pt-4 w-full max-w-9xl relative mx-auto">
    <h1 class="font-bold mb-3 text-3xl">Edit Rincian Data Kapal</h1>
    <a href="{{ route('details.index') }}" class="absolute right-0 top-0 pt-8 pr-8">
      <button class="btn btn-sm btn-outline px-4">Back</button>
    </a>

{{-- @dd($detail) --}}
    <form action="{{ route('details.update', [$detail]) }}" class="w-full mb-5" method="POST">
      @csrf
      @method('put')

      <input type="hidden" name="id_kapal" value="{{ $detail->id_kapal }}">
      <input type="hidden" name="nama_kapal" value="{{ $detail->nama_kapal }}">
      
      <div class="mb-4">
        <label for="muatBarang" class="block mb-3">Muat Barang</label>
        <input type="number" id="muatBarang" class="input input-bordered @error ('muat_barang') input-error @enderror bg-slate-800 w-full focus:text-slate-400" name="muat_barang" value="{{ $detail->muat_barang }}" />
      </div>
      @error ('muat_barang')
      <div class="text-error flex mb-1">
        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" /></svg>
        <span>{{ $message }}</span>
      </div>
      @enderror
      
      <div class="mb-4">
        <label for="bongkarBarang" class="block mb-3">Bongkar Barang</label>
        <input type="number" id="bongkarBarang" class="input input-bordered @error ('bongkar') input-error @enderror bg-slate-800 w-full focus:text-slate-400" name="bongkar" value="{{ $detail->bongkar_barang }}" />
      </div>
      @error ('bongkar')
        <div class="text-error flex mb-1">
          <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" /></svg>
          <span>{{ $message }}</span>
        </div>
      @enderror

      <div class="mb-4">
        <label for="jenisBarang" class="block mb-3">Jenis Barang</label>
        <input type="text" id="jenisBarang" class="input input-bordered @error ('jenis_barang') input-error @enderror bg-slate-800 w-full focus:text-slate-400" name="jenis_barang" value="{{ $detail->jenis_barang }}" />
      </div>
      @error ('jenis_barang')
        <div class="text-error flex mb-1">
          <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" /></svg>
          <span>{{ $message }}</span>
        </div>
      @enderror

      <div class="mb-4">
        <label for="keterangan" class="block mb-3">keterangan</label>
        <select class="select select-bordered @error ('keterangan') select-error @enderror w-full bg-slate-800" id="keterangan" name="keterangan">
          <option value="ekspor" {{ ($detail->keterangan == 'ekspor' ? 'selected' : '') }}>Ekspor</option>
          <option value="import" {{ ($detail->keterangan == 'import' ? 'selected' : '') }}>Import</option>
          <option value="" {{ ($detail->keterangan == null ? 'selected' : '') }}></option>
        </select>
      </div>
      @error ('keterangan')
        <div class="text-error flex mb-1">
          <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" /></svg>
          <span>{{ $message }}</span>
        </div>
      @enderror
      <button type="submit" class="btn btn-outline btn-primary mt-3">Ubah</button>
    </form>
  </div>
</x-app-layout>
