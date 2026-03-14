@extends('admin.layouts.app')
@section('title', 'Edit Post')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h5 class="fw-bold mb-0">✏️ Edit Post</h5>
    <a href="{{ route('admin.posts.index') }}" class="btn btn-outline-secondary btn-sm">← Back</a>
</div>

@if($errors->any())
<div class="alert alert-danger">
    <ul class="mb-0">@foreach($errors->all() as $e)<li>{{ $e }}</li>@endforeach</ul>
</div>
@endif

<form action="{{ route('admin.posts.update', $post) }}" method="POST" enctype="multipart/form-data">
@csrf @method('PUT')
<div class="row g-4">

    <div class="col-lg-8">

        <div class="card p-4 mb-4">
            <div class="mb-3">
                <label class="form-label fw-semibold">Post Title *</label>
                <input type="text" name="title" class="form-control form-control-lg @error('title') is-invalid @enderror"
                       value="{{ old('title', $post->title) }}">
                @error('title') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="mb-0">
                <label class="form-label fw-semibold">Excerpt</label>
                <textarea name="excerpt" rows="2" class="form-control">{{ old('excerpt', $post->excerpt) }}</textarea>
            </div>
        </div>

        <div class="card p-4 mb-4">
            <label class="form-label fw-semibold">Content *</label>
            <textarea name="content" id="content" class="form-control">{{ old('content', $post->content) }}</textarea>
        </div>

        {{-- Gallery --}}
        <div class="card p-4 mb-4">
            <h6 class="fw-bold mb-3">🖼️ Gallery Images</h6>

            @if($post->gallery_images && count($post->gallery_images) > 0)
            <div class="row g-2 mb-3">
                @foreach($post->gallery_images as $img)
                <div class="col-4 position-relative">
                    <img src="{{ asset('storage/' . $img) }}" class="img-fluid rounded" style="height:80px;object-fit:cover;width:100%">
                    <div class="form-check mt-1">
                        <input class="form-check-input" type="checkbox" name="delete_gallery[]" value="{{ $img }}">
                        <label class="form-check-label text-danger small">Delete</label>
                    </div>
                </div>
                @endforeach
            </div>
            @endif

            <input type="file" name="gallery_images[]" class="form-control" accept="image/*" multiple>
            <div class="form-text">Nayi images add karo (existing ke saath)</div>
        </div>

        {{-- SEO --}}
        <div class="card p-4 mb-4">
            <h6 class="fw-bold mb-3">🔍 SEO Settings</h6>

            <div class="mb-3">
                <label class="form-label fw-semibold">Focus Keyword</label>
                <input type="text" name="focus_keyword" class="form-control"
                       value="{{ old('focus_keyword', $post->focus_keyword) }}">
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold d-flex justify-content-between">
                    Meta Title
                    <span id="title_count" class="text-muted small">{{ strlen($post->meta_title) }}/60</span>
                </label>
                <input type="text" name="meta_title" id="meta_title" class="form-control"
                       value="{{ old('meta_title', $post->meta_title) }}" maxlength="60">
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold d-flex justify-content-between">
                    Meta Description
                    <span id="desc_count" class="text-muted small">{{ strlen($post->meta_description) }}/160</span>
                </label>
                <textarea name="meta_description" id="meta_description" class="form-control" rows="3"
                          maxlength="160">{{ old('meta_description', $post->meta_description) }}</textarea>
            </div>

            <div class="p-3 rounded" style="background:#f8f9fa; border:1px solid #dee2e6">
                <div class="small text-muted mb-1">Google Preview:</div>
                <div id="preview_title" class="text-primary fw-semibold" style="font-size:18px">
                    {{ $post->meta_title ?: $post->title }}
                </div>
                <div class="text-success small">jmkrepairs.com/blog/{{ $post->slug }}</div>
                <div id="preview_desc" class="small text-muted">
                    {{ $post->meta_description ?: 'Meta description here...' }}
                </div>
            </div>

            <div class="mt-3">
                <label class="form-label fw-semibold">OG Image</label>
                @if($post->og_image)
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $post->og_image) }}" height="80" class="rounded border">
                </div>
                @endif
                <input type="file" name="og_image" class="form-control" accept="image/*">
            </div>
        </div>

    </div>

    <div class="col-lg-4">

        <div class="card p-4 mb-4">
            <h6 class="fw-bold mb-3">📢 Publish</h6>
            <div class="mb-3">
                <label class="form-label fw-semibold">Status</label>
                <select name="status" class="form-select">
                    <option value="draft" {{ $post->status == 'draft' ? 'selected' : '' }}>📝 Draft</option>
                    <option value="published" {{ $post->status == 'published' ? 'selected' : '' }}>✅ Published</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary w-100">
                <i class="bi bi-save"></i> Update Post
            </button>
        </div>

        <div class="card p-4 mb-4">
            <h6 class="fw-bold mb-3">🖼️ Featured Image</h6>
            @if($post->featured_image)
            <img src="{{ asset('storage/' . $post->featured_image) }}"
                 class="img-fluid rounded mb-2" style="max-height:150px">
            @endif
            <input type="file" name="featured_image" class="form-control" accept="image/*"
                   onchange="previewFeatured(this)">
            <div id="featured_preview"></div>
        </div>

        <div class="card p-4 mb-4">
            <h6 class="fw-bold mb-3">🏷️ Tags</h6>
            <input type="text" name="tags" class="form-control"
                   value="{{ old('tags', $post->tags) }}" placeholder="watch, repair, dubai">
            <div class="form-text">Comma separated tags</div>
        </div>

    </div>
</div>
</form>

<script src="https://cdn.tiny.cloud/1/d2dedx9ntre5cpfav89l1zp9f2eqylf6b74a9kjsbm93k4td/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
tinymce.init({
    selector: '#content',
    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
    height: 400,
    promotion: false,
    branding: false,
});

document.getElementById('meta_title').addEventListener('input', function() {
    document.getElementById('title_count').textContent = this.value.length + '/60';
    document.getElementById('preview_title').textContent = this.value || 'Post Title...';
});

document.getElementById('meta_description').addEventListener('input', function() {
    document.getElementById('desc_count').textContent = this.value.length + '/160';
    document.getElementById('preview_desc').textContent = this.value || 'Meta description here...';
});

function previewFeatured(input) {
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = e => {
            document.getElementById('featured_preview').innerHTML =
                `<img src="${e.target.result}" class="img-fluid rounded mt-2" style="max-height:150px">`;
        };
        reader.readAsDataURL(input.files[0]);
    }
}
</script>
@endsection