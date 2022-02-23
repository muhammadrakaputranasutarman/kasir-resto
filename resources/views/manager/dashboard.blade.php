@extends('master.manager')

@section('main')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Halaman Menu</h4>
        <div class="template-demo mt-2">
            <a class="btn btn-outline-secondary btn-icon-text" href="{{ route('manager.create') }}"> Create <i class="mdi mdi-file-check btn-icon-append"></i></a> 
            
          </div>
        </p>
        <div class="table-responsive">
          <table class="table table-dark">
            <thead>
              <tr>
                <th> No </th>
                <th> Nama Menu </th>
                <th> Harga </th>
                <th> Deskripsi </th>
                <th> Ketersediaan  </th>
                <th> Aksi </th>
              </tr>
            </thead>
            <tbody>
               @foreach ($manager as $managers) 
              <tr>
                <td> {{ ++$i }}  </td>
                <td> {{ $managers->nama_menu }} </td>
                <td> {{ $managers->harga }} </td> 
                <td> {{ $managers->deskripsi }} </td>
                <td> {{ $managers->ketersediaan}} </td>
                <td> <form action="{{ route('manager.destroy',$managers->id) }}" method="POST">
           
                     <a class="btn btn-inverse-primary btn-fw" href="{{ route('manager.edit', $managers->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-inverse-danger btn-fw">Hapus</button>
                </form> </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection