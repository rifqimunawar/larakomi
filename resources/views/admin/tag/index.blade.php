@section('title') {{ 'Tag' }}@endsection
@extends('admin.layout')
@section('content')

<div class="card info-card sales-card">
    <div class="container my-3">
        <h4 class="my-5">Tag Blog</h4>
        <a class="btn btn-primary mb-3 mx-3" href="/admin/blog/tag/create">Tambah Tag</a>
        <table class="table table-striped table-hover">
            <tr>
                <td class="text-center">No</td>
                <td >Tag</td>
                <td class="text-center" > Aksi</td>
            </tr>
            @foreach ($tags as $cate)
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td>{{ $cate['name'] }}</td>
                <td class="text-center">
                    <div class="btn-group">
                    <a href="/admin/blog/tag/{{ $cate->id }}/edit" type="button" class="btn btn-warning btn-sm mx-3" style="border-radius:6px">Edit</a>
                    <form action=
                    "{{ route('destroy', $cate->id) }}" 
                    method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm
                    ('Apakah Anda yakin ingin menghapus kader ini?')">Hapus</button>
                    </form>
                </div>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection