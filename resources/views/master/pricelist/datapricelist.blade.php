
<div class="table-controls">
    <!-- DataTables will place buttons here -->
    <div id="button-container"></div>
</div>
<!-- datatable-buttons -->
<table id="tablePricelist" class="table table-striped table-bordered text-table" width="3000px">
    <thead>
    <tr>
        <th rowspan="2" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
            Periode
        </th>
        <th rowspan="2" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
            Tipe
        </th>
        <th rowspan="2" class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
            Blok & Number
        </th>
        <th colspan="3" class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
            Luas
        </th>
        <th rowspan="2" class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
            Lantai
            </th>
        <th rowspan="2" class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
            Harga Jual STD
        </th>
        
        <th colspan="3" class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
            Harga Jual Setelah Diskon
        </th>
        <th colspan="2" class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
            KPR
        </th>
        <th rowspan="2" class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
            Dibuat Oleh
        </th>
        <th rowspan="2" class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
            Dibuat Tgl
        </th>
        <th rowspan="2" class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
            Diubah Oleh
        </th>
        <th rowspan="2" class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
            Diubah Tgl
        </th>
        @if($levelid == 1)
        <th rowspan="2" class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
            Aksi
        </th>
        @endif
    </tr>
    <tr>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
            BGN
        </th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
            TNH
        </th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
            TNH LBH
        </th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
            Tunai Keras 20%
        </th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
            Tunai Bertahap 15%
        </th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
            KPR 10%
        </th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
            Uang Muka
        </th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
            Angsuran
        </th>
    </tr>
    </thead>
    <tbody>
        @foreach ($clusters as $cluster)
        <tr>
            
            <td class="ps-4 text-center">@formatDate($cluster->periode)</td>
            <td class="text-center text-xs">{{ $cluster->propertyType->name }}</td> 
            <td class="text-center">{{ $cluster->blok }} </td>
            <td class="text-center">{{ $cluster->luas_bangunan }} m²</td>
            <td class="text-center">{{ $cluster->luas_tanah }} m²</td>
            <td class="text-center">{{ $cluster->luas_tanah_lebih }} m²</td>
            <td class="text-center">{{ $cluster->propertyFloor->name }}</td> 
            <td class="text-center">Rp. {{ number_format($cluster->harga_jual_standar, 0, ',', '.') }}</td>
            <td class="text-center">Rp. {{ number_format($cluster->tunai_bertahap, 0, ',', '.') }}</td>
            <td class="text-center">Rp. {{ number_format($cluster->tunai_keras, 0, ',', '.') }}</td>
            <td class="text-center">Rp. {{ number_format($cluster->kpr, 0, ',', '.') }} </td>
            <td class="text-center">Rp. {{ number_format($cluster->uang_muka, 0, ',', '.') }}</td>
            <td class="text-center">Rp. {{ number_format($cluster->angsuran, 0, ',', '.') }}</td>
            <td  class="text-center">{{ $cluster->created_by }}</td>
            <td class="text-center">{{ $cluster->created_at->format('d/m/y') }}</td>
            <td  class="text-center">{{ $cluster->updated_by }}</td>
            <td class="text-center">{{ $cluster->updated_at->format('d/m/y') }}</td> 
            @if($levelid == 1)
            <td class="text-center">
                <a href="{{ route('pricelist.addedit', $cluster->id_pricelist) }}" class="btn btn-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit user">
                    <i class="fa fa-pencil-square-o"></i>
                </a>
                
                <span>
                    <button class="btn btn-danger  btn-sm" onclick="deleteData('{{ $cluster->id_pricelist }}')">
                        <i class="fa fa-trash"></i> 
                    </button>                                    
                </span>
            </td>
            @endif
            <!--<td  class="text-center">{{ $cluster->periode }}</td>-->
        </tr>
    @endforeach
    
    </tbody>
</table>
             