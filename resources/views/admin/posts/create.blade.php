@extends('admin.layouts.app')
@section('title', 'New Post')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h5 class="fw-bold mb-0">✍️ Create New Post</h5>
    <a href="{{ route('admin.posts.index') }}" class="btn btn-outline-secondary btn-sm">
        ← Back
    </a>
</div>

@if($errors->any())
<div class="alert alert-danger">
    <ul class="mb-0">@foreach($errors->all() as $e)<li>{{ $e }}</li>@endforeach</ul>
</div>
@endif

<form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
@csrf
<div class="row g-4">

    {{-- LEFT COLUMN --}}
    <div class="col-lg-8">

        {{-- Title --}}
        <div class="card p-4 mb-4">
            <div class="mb-3">
                <label class="form-label fw-semibold">Post Title *</label>
                <input type="text" name="title" class="form-control form-control-lg @error('title') is-invalid @enderror"
                       value="{{ old('title') }}" placeholder="Enter post title...">
                @error('title') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="mb-0">
                <label class="form-label fw-semibold">Excerpt <small class="text-muted">(short summary)</small></label>
                <textarea name="excerpt" rows="2" class="form-control"
                          placeholder="Brief description shown in post listings...">{{ old('excerpt') }}</textarea>
            </div>
        </div>

        {{-- Content Editor --}}
        <div class="card p-4 mb-4">
            <label class="form-label fw-semibold">Content *</label>
            <textarea name="content" id="content" class="form-control @error('content') is-invalid @enderror">{{ old('content') }}</textarea>
            @error('content') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        {{-- Gallery Images --}}
        <div class="card p-4 mb-4">
            <h6 class="fw-bold mb-3">🖼️ Gallery Images</h6>
            <input type="file" name="gallery_images[]" class="form-control" accept="image/*" multiple>
            <div class="form-text">Multiple images select kar sakte ho (Ctrl+Click)</div>
        </div>

        {{-- SEO Card --}}
        <div class="card p-4 mb-4">
            <h6 class="fw-bold mb-3">🔍 SEO Settings</h6>

            <div class="mb-3">
                <label class="form-label fw-semibold">Focus Keyword</label>
                <input type="text" name="focus_keyword" class="form-control"
                       value="{{ old('focus_keyword') }}" placeholder="e.g. watch repair dubai">
                <div class="form-text">Main keyword jo is post ke liye rank karna hai</div>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold d-flex justify-content-between">
                    Meta Title
                    <span id="title_count" class="text-muted small">0/60</span>
                </label>
                <input type="text" name="meta_title" id="meta_title" class="form-control"
                       value="{{ old('meta_title') }}" maxlength="60"
                       placeholder="SEO title for Google...">
                <div class="form-text">Google search mein jo title dikhega</div>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold d-flex justify-content-between">
                    Meta Description
                    <span id="desc_count" class="text-muted small">0/160</span>
                </label>
                <textarea name="meta_description" id="meta_description" class="form-control" rows="3"
                          maxlength="160" placeholder="SEO description for Google...">{{ old('meta_description') }}</textarea>
                <div class="form-text">Google search mein jo description dikhegi</div>
            </div>

            {{-- Google Preview --}}
            <div class="p-3 rounded" style="background:#f8f9fa; border:1px solid #dee2e6">
                <div class="small text-muted mb-1">Google Preview:</div>
                <div id="preview_title" class="text-primary fw-semibold" style="font-size:18px">
                    {{ old('meta_title') ?: 'Post Title...' }}
                </div>
                <div class="text-success small">jmkrepairs.com/blog/post-slug</div>
                <div id="preview_desc" class="small text-muted">
                    {{ old('meta_description') ?: 'Meta description here...' }}
                </div>
            </div>

            {{-- OG Image --}}
            <div class="mt-3">
                <label class="form-label fw-semibold">OG Image <small class="text-muted">(Social media share image)</small></label>
                <input type="file" name="og_image" class="form-control" accept="image/*">
                <div class="form-text">Facebook/WhatsApp share pe jo image dikhegi (1200x630px recommended)</div>
            </div>
        </div>

    </div>

    {{-- RIGHT COLUMN --}}
    <div class="col-lg-4">

        {{-- Publish --}}
        <div class="card p-4 mb-4">
            <h6 class="fw-bold mb-3">📢 Publish</h6>
            <div class="mb-3">
                <label class="form-label fw-semibold">Status</label>
                <select name="status" class="form-select">
                    <option value="draft" {{ old('status') == 'draft' ? 'selected' : '' }}>📝 Draft</option>
                    <option value="published" {{ old('status') == 'published' ? 'selected' : '' }}>✅ Published</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary w-100">
                <i class="bi bi-save"></i> Save Post
            </button>
        </div>

        {{-- Featured Image --}}
        <div class="card p-4 mb-4">
            <h6 class="fw-bold mb-3">🖼️ Featured Image</h6>
            <input type="file" name="featured_image" class="form-control" accept="image/*"
                   onchange="previewFeatured(this)">
            <div class="mt-2" id="featured_preview"></div>
        </div>

        {{-- Tags --}}
        <div class="card p-4 mb-4">
            <h6 class="fw-bold mb-3">🏷️ Tags</h6>
            <input type="text" name="tags" class="form-control"
                   value="{{ old('tags') }}" placeholder="watch, repair, dubai">
            <div class="form-text">Comma separated tags</div>
        </div>

    </div>
</div>
</form>

<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
tinymce.init({
    selector: '#content',
    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
    height: 400,
    images_upload_url: false,
    promotion: false,
    branding: false,
});

// Character counters
document.getElementById('meta_title').addEventListener('input', function() {
    document.getElementById('title_count').textContent = this.value.length + '/60';
    document.getElementById('preview_title').textContent = this.value || 'Post Title...';
});

document.getElementById('meta_description').addEventListener('input', function() {
    document.getElementById('desc_count').textContent = this.value.length + '/160';
    document.getElementById('preview_desc').textContent = this.value || 'Meta description here...';
});

// Featured image preview
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