@extends('layouts.adminLayout')

@section('title', 'Berita Utama')

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Berita Utama</h5>
            <a href="/bertama/create" class="btn btn-primary mb-3">Add Data</a>
            <!-- Table with hoverable rows -->
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Judul Berita Utama</th>
                        <th scope="col">Kategori Berita</th>
                        <th scope="col">Isi Berita</th>
                        <th scope="col">Thumbnail</th>
                        <th scope="col">Aksi</th>
                        <th scope="col">Gambar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    @forelse ($bertamas as $bertama)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $bertama->title }}</td>
                            <td>{{ $bertama->type }}</td>
                            <td>{{ $bertama->description }}</td>
                            {{-- <td>{{ $bertama->images->count() }}</td> --}}
                            <td>
                                <img src="/bertama_thumb/{{ $bertama->thumb }}" alt="" class="img-fluid"
                                    width="100">
                            </td>
                            <td>
                                <a href="{{ route('bertama.edit', $bertama->id) }}" class="btn btn-warning"><i
                                        class="bi bi-pencil-square"></i></a>

                                <form method="POST" action="{{ route('bertama.destroy', $bertama->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                </form>
                            </td>
                            <td>
                                <a href="{{ route('bertama.images', $bertama->id) }}" class="btn btn-outline-dark">Add /
                                    Edit
                                    Content
                                    Image</a>
                                {{-- <img src="/image/{{ $bertama->images }}" alt="" class="img-fluid" width="100"> --}}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">Nothing to show</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            <!-- End Table with hoverable rows -->
        </div>
    </div>
@endsection
