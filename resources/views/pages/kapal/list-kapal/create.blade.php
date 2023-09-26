<x-app-layout>
  <div class="px-4 sm:px-6 lg:px-8 pt-4 w-full max-w-9xl relative mx-auto">
    <h1 class="font-bold my-4 text-3xl">Penambahan Data Kapal</h1>
    <a href="{{ route('kapal.index') }}" class="absolute right-0 top-0 pt-8 pr-8">
      <button class="btn btn-sm btn-outline px-4">Back</button>
    </a>
    <form action="{{ route('kapal.store') }}" class="w-full mb-5" method="POST">
      @csrf
      <div class="mb-4">
        <label for="namaKapal" class="block mb-3">Nama Kapal</label>
        <input type="text" id="namaKapal"
          class="input input-bordered @error('nama_kapal') input-error @enderror bg-slate-800 w-full focus:text-slate-400" name="nama_kapal" autofocus />
      </div>
      @error('nama_kapal')
        <div class="text-error flex mb-1">
          <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
          </svg>
          <span>{{ $message }}</span>
        </div>
      @enderror

      <div class="mb-4">
        <label for="keagenan" class="block mb-3">Keagenan</label>
        <input type="text" id="keagenan"
          class="input input-bordered @error('keagenan') input-error @enderror bg-slate-800 w-full focus:text-slate-400" name="keagenan" required />
      </div>
      @error('keagenan')
        <div class="text-error flex mb-1">
          <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
          </svg>
          <span>{{ $message }}</span>
        </div>
      @enderror

      <div class="mb-4">
        <fieldset class="border-2 border-slate-400 rounded">
          <legend class="ml-2 px-1">Ukuran Kapal</legend>
          <div class="flex gap-2 mx-2">
            <div class="w-full">
              <label for="loa" class="block mb-1">Loa</label>
              <input type="number" id="loa"
                class="input input-bordered @error('loa') input-error @enderror bg-slate-800 w-full focus:text-slate-400" name="loa" required />
            </div>
            @error('loa')
              <div class="text-error flex mb-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                </svg>
                <span>{{ $message }}</span>
              </div>
            @enderror

            <div class="w-full mb-2">
              <label for="gt" class="block mb-1">GT</label>
              <input type="number" id="gt"
                class="input input-bordered @error('gt') input-error @enderror bg-slate-800 w-full focus:text-slate-400" name="gt" required />
            </div>
            @error('gt')
              <div class="text-error flex mb-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                </svg>
                <span>{{ $message }}</span>
              </div>
            @enderror
          </div>
        </fieldset>
      </div>

      <div class="mb-4">
        <label for="pemilik" class="block mb-3">Pemilik</label>
        <select class="select select-bordered @error('pemilik') select-error @enderror w-full bg-slate-800" id="pemilik" name="pemilik" required>
          <option value="" selected disabled></option>
          <option value="1">Pemilik</option>
          <option value="0">Non-Pemilik</option>
        </select>
      </div>
      @error('pemilik')
        <div class="text-error flex mb-1">
          <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
          </svg>
          <span>{{ $message }}</span>
        </div>
      @enderror

      <div class="mb-4">
        <label for="bendera" class="block mb-3">Bendera</label>
        <input type="text" id="bendera"
          class="input input-bordered @error('bendera') inpur-error @enderror bg-slate-800 w-full focus:text-slate-400" name="bendera" required />
      </div>
      @error('bendera')
        <div class="text-error flex mb-1">
          <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
          </svg>
          <span>{{ $message }}</span>
        </div>
      @enderror

      <div class="mb-4">
        <label for="tanggal" class="block mb-3">Tanggal Masuk</label>
        <input type="date" id="tanggal"
          class="input input-bordered @error('tanggal') inpur-error @enderror bg-slate-800 w-full focus:text-slate-400" name="created_at" required />
      </div>
      @error('tanggal')
        <div class="text-error flex mb-1">
          <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
          </svg>
          <span>{{ $message }}</span>
        </div>
      @enderror

      <button type="submit" class="btn btn-outline btn-primary mt-3">Tambah</button>
    </form>
  </div>
</x-app-layout>
