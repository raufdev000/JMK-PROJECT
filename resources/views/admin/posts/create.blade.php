@extends('admin.layouts.app')
@section('title', 'New Post')

@section('content')
<div class="card p-4" style="max-width:800px">
    <h5 class="fw-bold mb-4">Create New Post</h5>

    <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label class="form-label fw-semibold">Post Title *</label>
            <input type="text" name="title" 
                   class="form-control @error('title') is-invalid @enderror"
                   value="{{ old('title') }}" placeholder="e.g. How to fix AC">
            @error('title') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label fw-semibold">Excerpt (Short Summary)</label>
            <textarea name="excerpt" rows="2" class="form-control" 
                      placeholder="Short description...">{{ old('excerpt') }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label fw-semibold">Content *</label>
            <textarea name="content" id="content" rows="10" 
                      class="form-control">{{ old('content') }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label fw-semibold">Featured Image</label>
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
                   value="{{ old('meta_title') }}" maxlength="60">
            <div class="form-text">Google search mein jo title dikhega</div>
        </div>

        <div class="mb-3">
            <label class="form-label fw-semibold">
                Meta Description <small class="text-muted">(max 160 chars)</small>
            </label>
            <textarea name="meta_description" class="form-control" rows="3" 
                      maxlength="160">{{ old('meta_description') }}</textarea>
            <div class="form-text">Google search mein jo description dikhegi</div>
        </div>

        <div class="mb-4">
            <label class="form-label fw-semibold">Status</label>
            <select name="status" class="form-select">
                <option value="draft" {{ old('status') == 'draft' ? 'selected' : '' }}>
                    Draft
                </option>
                <option value="published" {{ old('status') == 'published' ? 'selected' : '' }}>
                    Published
                </option>
            </select>
        </div>

        <div class="d-flex gap-2">
            <button type="submit" class="btn btn-primary px-4">
                <i class="bi bi-save"></i> Save Post
            </button>
            <a href="{{ route('admin.posts.index') }}" class="btn btn-outline-secondary">
                Cancel
            </a>
        </div>
    </form>
</div>
@endsection