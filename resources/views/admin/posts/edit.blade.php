@extends('admin.layouts.app')
@section('title', 'Edit Post')

@section('content')
<div class="card p-4" style="max-width:800px">
    <h5 class="fw-bold mb-4">Edit Post</h5>

    <form action="{{ route('admin.posts.update', $post) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label fw-semibold">Post Title *</label>
            <input type="text" name="title" 
                   class="form-control @error('title') is-invalid @enderror"
                   value="{{ old('title', $post->title) }}">
            @error('title') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label fw-semibold">Excerpt</label>
            <textarea name="excerpt" rows="2" class="form-control">{{ old('excerpt', $post->excerpt) }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label fw-semibold">Content</label>
            <textarea name="content" rows="10" class="form-control">{{ old('content', $post->content) }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label fw-semibold">Featured Image</label>
            @if($post->featured_image)
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $post->featured_image) }}" 
                         height="100" class="rounded border">
                </div>
            @endif
            <input type="file" name="featured_image" class="form-control" accept="image/*">
        </div>

        <hr class="my-4">
        <h6 class="fw-bold text-muted mb-3">
            <i class="bi bi-search"></i> SEO Settings
        </h6>

        <div class="mb-3">
            <label class="form-label fw-semibold">
                Meta Title <small class="text-muted">(max 60 chars)</small>
            </label>
            <input type="text" name="meta_title" class="form-control" 
                   value="{{ old('meta_title', $post->meta_title) }}" maxlength="60">
        </div>

        <div class="mb-3">
            <label class="form-label fw-semibold">
                Meta Description <small class="text-muted">(max 160 chars)</small>
            </label>
            <textarea name="meta_description" class="form-control" rows="3" 
                      maxlength="160">{{ old('meta_description', $post->meta_description) }}</textarea>
        </div>

        <div class="mb-4">
            <label class="form-label fw-semibold">Status</label>
            <select name="status" class="form-select">
                <option value="draft" {{ $post->status == 'draft' ? 'selected' : '' }}>Draft</option>
                <option value="published" {{ $post->status == 'published' ? 'selected' : '' }}>Published</option>
            </select>
        </div>

        <div class="d-flex gap-2">
            <button type="submit" class="btn btn-primary px-4">
                <i class="bi bi-save"></i> Update Post
            </button>
            <a href="{{ route('admin.posts.index') }}" class="btn btn-outline-secondary">
                Cancel
            </a>
        </div>
    </form>
</div>
@endsection