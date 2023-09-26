<x-app-layout>
  <div class="px-4 sm:px-6 lg:px-8 pt-4 w-full max-w-9xl relative mx-auto">
    <h1 class="font-bold my-4 text-3xl">Ubah Jadwal Kapal</h1>
    <a href="{{ route('schedules.index') }}" class="absolute right-0 top-0 pt-8 pr-8">
      <button class="btn btn-sm btn-outline px-4">Back</button>
    </a>

    <form action="{{ route('schedules.update', [$schedule]) }}" class="w-full mb-5" method="POST">
      @csrf
      @method('put')

      <input type="hidden" name="id_kapal" value="{{ $schedule->id_kapal }}">
      <input type="hidden" name="nama_kapal" value="{{ $schedule->nama_kapal }}">

      <div class="mb-4">
        <label for="tanggalTiba" class="block mb-3">Tanggal Tiba</label>
        <input type="date" id="tanggalTiba" class="input input-bordered @error ('tanggal_tiba') input-error @enderror bg-slate-800 w-full focus:text-slate-400" name="tanggal_tiba" value="{{ $schedule->tanggal_tiba }}" />
      </div>
      @error('tanggal_tiba')
        <div class="text-error flex mb-1">
          <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" /></svg>
          <span>{{ $message }}</span>
        </div>
      @enderror
      
      <div class="mb-4">
        <label for="tibaDari" class="block mb-3">Tiba Dari</label>
        <input type="text" id="tibaDari" class="input input-bordered @error ('tiba_dari') input-error @enderror bg-slate-800 w-full focus:text-slate-400" name="tiba_dari" value="{{ $schedule->tiba_dari }}" />
      </div>
      @error('tiba_dari')
        <div class="text-error flex mb-1">
          <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" /></svg>
          <span>{{ $message }}</span>
        </div>
      @enderror

      <div class="mb-4">
        <label for="posisiTambat" class="block mb-3">Posisi Tambat</label>
        <input type="text" id="posisiTambat" class="input input-bordered @error ('posisi_tambat') input-error @enderror bg-slate-800 w-full focus:text-slate-400" name="posisi_tambat" value="{{ $schedule->posisi_tambat }}" />
      </div>
      @error('posisi_tambat')
        <div class="text-error flex mb-1">
          <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" /></svg>
          <span>{{ $message }}</span>
        </div>
      @enderror

      <div class="mb-4">
        <label for="rencanaBerangkat" class="block mb-3">Tanggal Rencana Berangkat</label>
        <input type="date" id="rencanaBerangkat" class="input input-bordered @error ('tanggal_rencana_berangkat') input-error @enderror bg-slate-800 w-full focus:text-slate-400" name="tanggal_rencana_berangkat" value="{{ $schedule->tanggal_rencana_berangkat }}" />
      </div>
      @error('tanggal_rencana_berangkat')
        <div class="text-error flex mb-1">
          <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" /></svg>
          <span>{{ $message }}</span>
        </div>
      @enderror

      <div class="mb-4">
        <label for="tujuan" class="block mb-3">Tujuan</label>
        <input type="text" id="tujuan" class="input input-bordered @error ('tujuan') input-error @enderror bg-slate-800 w-full focus:text-slate-400" name="tujuan" value="{{ $schedule->tujuan }}" />
      </div>
      @error('tujuan')
        <div class="text-error flex mb-1">
          <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" /></svg>
          <span>{{ $message }}</span>
        </div>
      @enderror
      <button type="submit" class="btn btn-outline btn-primary mt-3">Edit</button>
    </form>
  </div>
</x-app-layout>
