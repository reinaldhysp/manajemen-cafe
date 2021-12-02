<div>
    <div class="form-group">
        <div class="padss">
          <label>Pilihan Minuman : </label>
        </div>
        @foreach ($pesananMinuman as $index => $pesanMinuman)
        <div class="padsss">
          <div class="row">
            <div class="col-5 col-sm-5 col-lg-5">
                <select name="pesananMinuman[{{$index}}][minuman_dipesan]"
                wire:model="pesananMinuman.{{$index}}.minuman_dipesan"
                class="form-control">
                    <option value="">-- Pilih Minuman --</option>
                    @foreach ($semuaMinuman as $items)
                    <option value="{{ $items->id }}">{{ $items->drink_name }} (Rp{{ number_format($items->price, 0) }})</option>
                    @endforeach
                </select>
            </div>
            <div class="col-2 col-sm-2 col-lg-2">
                <input type="number"  min=1  name="pesananMinuman[{{$index}}][porsi_minuman]" class="form-control" wire:model="pesananMinuman.{{$index}}.porsi_minuman" required>
            </div>
            <div class="col-2 col-sm-2 col-lg-2">
              <button wire:click.prevent="hapusMinuman({{$index}})" class="btn btn-lg btn-danger fa fa-trash"></i></button>
            </div> 
          </div>
        </div>
        @endforeach
          <div class="pad text-center">
            <button wire:click.prevent="tambahMinuman" class="btn btn-lg btn-light">Tambah</button>
          </div>
      </div>
</div>
