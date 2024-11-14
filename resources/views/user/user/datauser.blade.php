
<div class="table-controls">
    <!-- DataTables will place buttons here -->
    <div id="button-container"></div>
</div>
<!-- datatable-buttons -->
<table id="tableUser" class="table table-striped table-bordered text-table " style="width: 100%;">
  <thead>
    <tr>
      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
        Foto
      </th>  
      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
            Nama
        </th>
        <th  class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
            Email
        </th>
        <th  class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
            Telepon
        </th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
            Level
        </th>
        <th  class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
            Aksi
        </th>
    </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td class="ps-4 text-center"><img src="{{ url('storage/' . $user->photo) }}" class="avatar"></td>
            <td class="ps-4 text-left">{{ $user->name }}</td>
            <td class="text-left text-xs">{{ $user->email }}</td> 
            <td class="text-left">{{ $user->phone }} </td>
            <td class="text-center">{{ $user->level->name }}</td>
            <td class="text-center">
                <a href="{{ route('user.addedit', $user->id) }}" class="btn btn-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit user">
                    <i class="fa fa-pencil-square-o"></i>
                </a>
                
                <span>
                    <button class="btn btn-danger  btn-sm" onclick="deleteData('{{ $user->id }}')">
                        <i class="fa fa-trash"></i> 
                    </button>                                    
                </span>
            </td>
        </tr>
        @endforeach
    
    </tbody>
</table>
