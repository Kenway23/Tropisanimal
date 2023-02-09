@extends('admin.index')
@section('isi')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card border-secondary">
                    <div class="card-header text-dark">
                        Data Galeri
                        <a href="{{ route('galeri.create') }}" class="btn btn-sm btn-primary" style="float: right">
                            Tambah Data
                        </a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-middle" id="dataTable">
                                <thead>
                                    <tr>
                                        <th class="text-dark">No</th>
                                        <th class="text-dark">Foto</th>
                                        <th class="text-dark">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($galeri as $data)
                                        <tr>
                                            <td class="text-dark">{{ $no++ }}</td>
                                            <td>
                                                <img src="{{ $data->image() }}" style="width: 100px; height:100px;"
                                                    alt="">
                                            </td>
                                            <td>
                                                <form action="{{ route('galeri.destroy', $data->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('galeri.edit', $data->id) }}"
                                                        class="btn btn-sm btn-outline-success ">
                                                        Edit
                                                    </a> |
                                                    <a href="{{ route('galeri.show', $data->id) }}"
                                                        class="btn btn-sm btn-outline-warning ">
                                                        Show
                                                    </a> |
                                                    <button type="submit" class="btn btn-sm btn-outline-danger"
                                                        onclick="return confirm('Apakah Anda Yakin?')">Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection