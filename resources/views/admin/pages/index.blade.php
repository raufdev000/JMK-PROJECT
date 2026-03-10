@extends('admin.layouts.app')
@section('title', 'Pages')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h5 class="fw-bold mb-0">All Pages</h5>
    <a href="{{ route('admin.pages.create') }}" class="btn btn-primary">
        <i class="bi bi-plus-lg"></i> Add Page
    </a>
</div>

<div class="card">
    <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
            <thead class="table-light">
                <tr>
                    <th>Title</th>
                    <th>Slug</th>
                    <th>Status</th>
                    <th>Meta Title</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($pages as $page)
                <tr>
                    <td class="fw-semibold">{{ $page->title }}</td>
                    <td><code>{{ $page->slug }}</code></td>
                    <td>
                        @if($page->is_active)
                            <span class="badge bg-success">Active</span>
                        @else
                            <span class="badge bg-secondary">Inactive</span>
                        @endif
                    </td>
                    <td>{{ $page->meta_title ?? '—' }}</td>
                    <td>
                        <a href="{{ route('admin.pages.edit', $page) }}" 
                           class="btn btn-sm btn-outline-primary">
                            <i class="bi bi-pencil"></i>
                        </a>
                        <form action="{{ route('admin.pages.destroy', $page) }}" 
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
                        No page found, First create page!
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

<div class="mt-3">{{ $pages->links() }}</div>
@endsection