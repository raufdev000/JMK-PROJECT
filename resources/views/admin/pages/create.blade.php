@extends('admin.layouts.app')
@section('title', 'New Page')

@section('content')
<div class="card p-4" style="max-width:800px">
    <h5 class="fw-bold mb-4">Create New Page</h5>
    
    <form action="{{ route('admin.pages.store') }}" method="POST">
        @csrf
        
        <div class="mb-3">
            <label class="form-label fw-semibold">Page Title *</label>
            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                   value="{{ old('title') }}" placeholder="e.g. About Us">
            @error('title') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label fw-semibold">Content</label>
            <textarea name="content" rows="8" class="form-control" 
                      placeholder="Page content...">{{ old('content') }}</textarea>
        </div>

        <hr class="my-4">
        <h6 class="fw-bold text-muted mb-3"><i class="bi bi-search"></i> SEO Settings</h6>

        <div class="mb-3">
            <label class="form-label fw-semibold">Meta Title 
                <small class="text-muted">(max 60 chars)</small>
            </label>
            <input type="text" name="meta_title" class="form-control" 
                   value="{{ old('meta_title') }}" maxlength="60">
            <div class="form-text">Google search mein jo title dikhega</div>
        </div>

        <div class="mb-3">
            <label class="form-label fw-semibold">Meta Description 
                <small class="text-muted">(max 160 chars)</small>
            </label>
            <textarea name="meta_description" class="form-control" rows="3" 
                      maxlength="160">{{ old('meta_description') }}</textarea>
            <div class="form-text">Google search mein jo description dikhegi</div>
        </div>

        <div class="mb-4">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" name="is_active" 
                       value="1" checked>
                <label class="form-check-label">Active (visible on website)</label>
            </div>
        </div>

        <div class="d-flex gap-2">
            <button type="submit" class="btn btn-primary px-4">
                <i class="bi bi-save"></i> Save Page
            </button>
            <a href="{{ route('admin.pages.index') }}" class="btn btn-outline-secondary">
                Cancel
            </a>
        </div>
    </form>
</div>
@endsection