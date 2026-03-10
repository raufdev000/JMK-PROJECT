@extends('admin.layouts.app')
@section('title', 'Blog Posts')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h5 class="fw-bold mb-0">All Blog Posts</h5>
    <a href="{{ route('admin.posts.create') }}" class="btn btn-primary">
        <i class="bi bi-plus-lg"></i> Add Post
    </a>
</div>

<div class="card">
    <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
            <thead class="table-light">
                <tr>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Meta Title</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($posts as $post)
                <tr>
                    <td class="fw-semibold">{{ $post->title }}</td>
                    <td>
                        @if($post->status == 'published')
                            <span class="badge bg-success">Published</span>
                        @else
                            <span class="badge bg-warning text-dark">Draft</span>
                        @endif
                    </td>
                    <td>{{ $post->meta_title ?? '—' }}</td>
                    <td>{{ $post->created_at->format('d M Y') }}</td>
                    <td>
                        <a href="{{ route('admin.posts.edit', $post) }}" 
                           class="btn btn-sm btn-outline-primary">
                            <i class="bi bi-pencil"></i>
                        </a>
                        <form action="{{ route('admin.posts.destroy', $post) }}" 
                              method="POST" class="d-inline"
                              onsubmit="return confirm('Delete karna hai?')">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-outline-danger">
                                <i class="bi bi-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center text-muted py-4">
                        No post here, First write post!
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
<div class="mt-3">{{ $posts->links() }}</div>
@endsection