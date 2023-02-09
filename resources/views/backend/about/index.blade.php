@extends('admin.index')
@section('isi')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card border-secondary">
                    <div class="card-header text-dark">
                        Data About
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-middle" id="dataTable">
                                <thead>
                                    <tr>
                                        <th class="text-dark">No</th>
                                        <th class="text-dark">Title</th>
                                        <th class="text-dark">Subtitle</th>
                                        <th class="text-dark">Content</th>
                                        <th class="text-dark">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($about as $data)
                                        <tr>
                                             <td class="text-dark">{{ $no++ }}</td>
                                            <td class="text-dark">{{$data->title}}</td>
                                            <td class="text-dark">{{$data->subtitle}}</td>
                                            <td class="text-dark">{!! $data->excerpt !!}</td>
                                            <td class="text-dark">
                                                    <a href="{{ route('about.edit', $data->id) }}"
                                                        class="btn btn-sm btn-outline-success">
                                                        Edit
                                                    </a> |
                                                    <a href="{{ route('about.show', $data->id) }}"
                                                        class="btn btn-sm btn-outline-warning">
                                                        Show
                                                    </a>
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