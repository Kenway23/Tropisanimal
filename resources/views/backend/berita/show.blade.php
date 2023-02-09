@extends('admin.index')

@section('isi')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-dark">
                        Data Berita
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label text-dark">Foto</label>
                            @if (isset($data) && $data->foto)
                                <p>
                                    <img src="{{ asset('images/berita/' . $data->foto) }}" class="img-rounded img-responsive"
                                        style="width: 75px; height:75px;" alt="">
                                </p>
                            @endif
                        </div>
                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('berita.index') }}" class="btn btn-primary">Kembali</a>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection