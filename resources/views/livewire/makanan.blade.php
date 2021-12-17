<div>
    <div class="form-group">
      <div class="pads">        
        <label>Pemesanan : </label>
      </div>
          <select name="servis" class="form-control col-2" >
            <option value="">-- Pilih Servis --</option>
            @foreach ($servisPesanan as $itemss)
            <option value="{{ $itemss->id }}">{{ $itemss->servis }}</option>
            @endforeach
          </select>
          @error('servis')
          <p class="ayyo text-danger">
              {{ $message }}
          </p>
          @enderror
        <div class="pads">
        <label>Nomor Meja : </label>
        </div>
        <select name="no_meja" class="form-control col-2" >
            <option value="">-- Pilih Meja --</option>
            @foreach ($nomorMeja as $item)
            <option value="{{ $item->id }}">{{ $item->id }}</option>
            @endforeach
        </select>
        @error('no_meja')
        <p class="ayyo text-danger">
            {{ $message }}
        </p>
        @enderror
        <div class="padss">
          <label>Pilihan Makanan : </label>
        </div>
        @foreach ($pesananMakanan as $index => $pesanMakanan)
        <div class="padsss">
          <div class="row">
            <div class="col-5 col-sm-5 col-lg-5">
                <select name="pesananMakanan[{{$index}}][makanan_dipesan]"
                wire:model="pesananMakanan.{{$index}}.makanan_dipesan"
                class="form-control">
                    <option value="">-- Pilih Makanan --</option>
                    @foreach ($semuaMakanan as $items)
                    <option value="{{ $items->id }}">{{ $items->food_name }} (Rp{{ number_format($items->price, 0) }})</option>
                    @endforeach
                </select>
            </div>
            <div class="col-2 col-sm-2 col-lg-2">
              <input type="number"  min=1  name="pesananMakanan[{{$index}}][porsi_makanan]" class="form-control" wire:model="pesananMakanan.{{$index}}.porsi_makanan" required>
            </div>
            <div class="col-2 col-sm-2 col-lg-2">
              <button wire:click.prevent="hapusPesanan({{$index}})" class="btn btn-lg btn-danger fa fa-trash"></i></button>
            </div> 
          </div>
        </div>
        @endforeach
          <div class="pad text-center">
                <button wire:click.prevent="tambahPesanan" class="btn btn-lg btn-light">Tambah</button> 
            </div>
          </div>
</div>
