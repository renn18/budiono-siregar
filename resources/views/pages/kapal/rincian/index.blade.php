<x-app-layout>
  <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
    <a href="{{ route('details.create') }}" role="button">
      <button class="btn btn-sm btn-primary">Tambah Rincian</button>
    </a>

    <div class="overflow-x-auto mt-4">

      <table class="table table-xs text-center even:bg-slate-500">
        <thead class="text-slate-600">
          <tr>
            <th>No.</th>
            <th>Nama Kapal</th>
            <th>Muat</th>
            <th>Bongkar</th>
            <th>Jenis Barang</th>
            <th>Keterangan</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody class="capitalize">
          @foreach ($details as $detail)
            <tr class="hover:bg-slate-200 hover:text-slate-500">
              <th>{{ $details->firstItem() + $loop->index }}</th>
              <td>{{ $detail->nama_kapal }}</td>
              <td>{{ $detail->muat_barang }}</td>
              <td>{{ $detail->bongkar }}</td>
              <td>{{ $detail->jenis_barang }}</td>
              <td>{{ $detail->keterangan }}</td>
              <td class="flex justify-center gap-2">
                <a href="{{ route('details.edit', [$detail->id]) }}" class="hover:text-yellow-600">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                  </svg>
                </a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>

      <div class="mt-5">
        {{ $details->links() }}
      </div>
      
    </div>
  </div>
</x-app-layout>
