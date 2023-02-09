
@extends('admin.index')

@section('isi')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-dark">
                        Data About
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label text-dark">Title</label>
                            <input type="text" class="form-control" name="title" value="{{ $data->title }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-dark">SubTitle</label>
                            <input type="text" class="form-control" name="subtitle" value="{{ $data->subtitle }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-dark">Body</label>
                            <input type="text" class="form-control" name="body" value="{{ $data->body }}"
                                readonly>

                        </div>
                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('about.index') }}" class="btn btn-primary">Kembali</a>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection