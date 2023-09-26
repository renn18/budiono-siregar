<x-app-layout>
  <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
    <a href="{{ route('kapal.create') }}" role="button">
      <button class="btn btn-sm btn-primary">Tambah Kapal</button>
    </a>

    <div class="overflow-x-auto mt-4">

      <table class="table table-xs text-center even:bg-slate-500">
        <thead class="text-slate-600">
          <tr>
            <th rowspan="2">No.</th>
            <th rowspan="2">Nama Kapal</th>
            <th rowspan="2">Keagenan</th>
            <th colspan="2" class="text-center">Ukuran</th>
            <th rowspan="2">Pemilik</th>
            <th rowspan="2">Bendera</th>
            <th rowspan="2">Action</th>
          </tr>
          <tr>
            <th>LOA</th>
            <th>GT</th>
          </tr>
        </thead>
        <tbody class="capitalize">
          @foreach ($ships as $kapal)
              
            <tr class="hover:bg-slate-200 hover:text-slate-500">
              <th>{{ $ships->firstItem() + $loop->index }}</th>
              <td>{{ $kapal->nama_kapal }}</td>
              <td>{{ $kapal->keagenan }}</td>
              <td>{{ $kapal->loa }}</td>
              <td>{{ $kapal->gt }}</td>
              <td>{{ $kapal->pemilik == 1 ? 'Pemilik' : 'Non-Pemilik' }}</td>
              <td>{{ $kapal->bendera }}</td>
              <td class="flex justify-center gap-2">
                <button class="hover:text-blue-600" type="button" onclick="kapal_{{ $kapal->id }}.showModal()">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                  </svg>
                </button>
                <a href="{{ route('kapal.edit', [$kapal]) }}" class="hover:text-yellow-600">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                  </svg>
                </a>
                <form action="{{ route('kapal.destroy', [$kapal]) }}" method="post" class="hover:text-red-700">
                  @csrf
                  @method('delete')
                  <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus data kapal?')">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                      class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round"
                        d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                    </svg>
                  </button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>

      <div class="mt-5">
        {{ $ships->links() }}
      </div>

      @foreach ($keperluan as $detail)
        <!-- Open the modal using ID.showModal() method -->
        <dialog id="kapal_{{ $detail->id_kapal }}" class="modal">
          <form method="dialog" class="modal-box w-11/12 max-w-5xl shadow shadow-white">
            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
            <h3 class="font-bold text-lg mb-4 pl-3">Rincian</h3>

            <table class="table table-zebra text-center">
              <thead>
                <tr>
                  <th>Bongkar Barang</th>
                  <th>Muat Barang</th>
                  <th>Jenis Barang</th>
                  <th>Keterangan</th>
                </tr>
              </thead>
              <tbody class="capitalize">
                <td>{{ $detail->bongkar }}</td>
                <td>{{ $detail->muat_barang }}</td>
                <td>{{ $detail->jenis_barang }}</td>
                <td>{{ $detail->keterangan }}</td>
              </tbody>
            </table>
          </form>
        </dialog>
      @endforeach

    </div>
  </div>
</x-app-layout>
