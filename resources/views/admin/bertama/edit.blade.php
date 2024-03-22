@extends('layouts.adminLayout')

@section('title', 'Berita Utama')

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Forms</h5>
            <div class="card">
                <div class="card-body">
                    <form method="post" action="{{ route('bertama.update', $bertama->id) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Title</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                value="{{ $bertama->title }}" name="title">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Teks Berita</label>
                            <textarea type="text" name="description" class="form-control" id="floatingTextarea" placeholder="Description"
                                style="height: 100px;">{{ $bertama->description }}</textarea>
                        </div>
                        <div class="row">

                            <div class="col-md-6 mb-3">
                                <label for="floatingSelect" class="form-label">Kategori Berita</label>
                                <select name="type" class="form-select" id="floatingSelect" aria-label="State">
                                    <option value="{{ $bertama->type }}">{{ $bertama->type }}</option>
                                    <option value="welding">Kat1</option>
                                    <option value="welding">Kat2</option>
                                    <option value="welding">Kat3</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="inputNumber" class="form-label">Upload Picture</label>
                                <div class="col-sm-10">
                                    <input type="file" name="thumb" class="form-control" id="formFile">
                                    <div class="col-sm-4">
                                        <img src="/bertama_thumb/{{ $bertama->thumb }}" alt="" class="img-fluid">
                                    </div>
                                </div>
                                @error('thumb')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
