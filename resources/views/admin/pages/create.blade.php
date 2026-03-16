@extends('admin.layouts.app')
@section('title', 'New Page')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h5 class="fw-bold mb-0">🗒️ Create New Page</h5>
    <a href="{{ route('admin.pages.index') }}" class="btn btn-outline-secondary btn-sm">← Back</a>
</div>

<form action="{{ route('admin.pages.store') }}" method="POST" enctype="multipart/form-data">
@csrf

<div class="row g-4">

    <!-- ===== LEFT COLUMN ===== -->
    <div class="col-lg-8">

        <!-- BASIC INFO -->
        <div class="card p-4 mb-4">
            <h6 class="fw-bold mb-3">📄 Page Information</h6>

            <div class="mb-3">
                <label class="form-label fw-semibold">Page Title *</label>
                <input type="text" name="title" id="pageTitle"
                       class="form-control @error('title') is-invalid @enderror"
                       value="{{ old('title') }}" placeholder="e.g. About Us"
                       oninput="generateSlug(this.value)">
                @error('title')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">
                    Slug (URL) —
                    <small class="text-primary">jmkrepairs.com/<span id="slugPreview">page-slug</span></small>
                </label>
                <div class="input-group">
                    <span class="input-group-text">/</span>
                    <input type="text" name="slug" id="pageSlug"
                           class="form-control @error('slug') is-invalid @enderror"
                           value="{{ old('slug') }}" placeholder="page-slug"
                           oninput="document.getElementById('slugPreview').textContent=this.value; document.getElementById('gSlug').textContent=this.value">
                </div>
                @error('slug')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
                <div class="form-text">⚠️ Sirf lowercase letters, numbers aur hyphens</div>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Page Heading (H1)
                    <small class="text-muted">— visitor ko jo bada title dikhega</small>
                </label>
                <input type="text" name="heading" class="form-control"
                       value="{{ old('heading') }}" placeholder="e.g. About JMK Repairs Dubai">
                <div class="form-text">Khali rakho to Page Title use hoga</div>
            </div>
        </div>

        <!-- CONTENT -->
        <div class="card p-4 mb-4">
            <h6 class="fw-bold mb-3">✏️ Page Content</h6>
<textarea name="content" id="pageContent" rows="10" class="form-control"
          placeholder="Page ka main content yahan likhein...">{{ old('content') }}</textarea>

<script src="https://cdn.tiny.cloud/1/d2dedx9ntre5cpfav89l1zp9f2eqylf6b74a9kjsbm93k4td/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
tinymce.init({
    selector: '#pageContent',
    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
    height: 400,
});
</script>
        </div>

        <!-- ===== IMAGES SECTION ===== -->
        <div class="card p-4 mb-4">
            <h6 class="fw-bold mb-3">🖼️ Images</h6>

            <div class="row g-3">

                <!-- Featured Image -->
                <div class="col-md-6">
                    <label class="form-label fw-semibold">
                        Featured Image
                        <span class="badge bg-primary ms-1">Main</span>
                    </label>
                    <input type="file" name="featured_image" class="form-control"
                           accept="image/*" onchange="previewImage(this, 'prev_featured')">
                    <div class="mt-2" id="prev_featured"></div>
                    <div class="form-text">Hero section / main page image (max 2MB)</div>
                </div>

                <!-- Banner Image -->
                <div class="col-md-6">
                    <label class="form-label fw-semibold">
                        Banner Image
                        <span class="badge bg-info ms-1">Top Banner</span>
                    </label>
                    <input type="file" name="banner_image" class="form-control"
                           accept="image/*" onchange="previewImage(this, 'prev_banner')">
                    <div class="mt-2" id="prev_banner"></div>
                    <div class="form-text">Page top banner / cover image (max 2MB)</div>
                </div>

                <!-- Icon Image -->
                <div class="col-md-6">
                    <label class="form-label fw-semibold">
                        Icon / Thumbnail
                        <span class="badge bg-secondary ms-1">Small</span>
                    </label>
                    <input type="file" name="icon_image" class="form-control"
                           accept="image/*" onchange="previewImage(this, 'prev_icon')">
                    <div class="mt-2" id="prev_icon"></div>
                    <div class="form-text">Chhoti thumbnail ya service icon (max 1MB)</div>
                </div>

                <!-- OG Image -->
                <div class="col-md-6">
                    <label class="form-label fw-semibold">
                        OG Image
                        <span class="badge bg-success ms-1">Social Share</span>
                    </label>
                    <input type="file" name="og_image" class="form-control"
                           accept="image/*" onchange="previewImage(this, 'prev_og')">
                    <div class="mt-2" id="prev_og"></div>
                    <div class="form-text">WhatsApp/Facebook share pe dikhegi (1200x630 best, max 2MB)</div>
                </div>

                <!-- Gallery Images -->
                <div class="col-12">
                    <hr>
                    <label class="form-label fw-semibold">
                        Gallery Images
                        <span class="badge bg-warning text-dark ms-1">Multiple</span>
                    </label>
                    <input type="file" name="gallery_images[]" class="form-control"
                           accept="image/*" multiple onchange="previewGallery(this)">
                    <div class="form-text">Multiple images select kar sakte ho (Ctrl+Click) — max 2MB each</div>
                    <div id="galleryPreview" class="d-flex flex-wrap gap-2 mt-2"></div>
                </div>

            </div>
        </div>

        <!-- SEO SETTINGS -->
        <div class="card p-4 mb-4">
            <h6 class="fw-bold mb-3">🔍 SEO Settings</h6>

            <div class="mb-3">
                <label class="form-label fw-semibold">Meta Title
                    <span id="metaTitleCount" class="badge bg-secondary ms-2">0/60</span>
                </label>
                <input type="text" name="meta_title" id="metaTitle" class="form-control"
                       value="{{ old('meta_title') }}" maxlength="60"
                       placeholder="SEO title for Google..."
                       oninput="updateCount('metaTitle','metaTitleCount',60); document.getElementById('gTitle').textContent=this.value||'Page Title...'">
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Meta Description
                    <span id="metaDescCount" class="badge bg-secondary ms-2">0/160</span>
                </label>
                <textarea name="meta_description" id="metaDesc" class="form-control" rows="3"
                        placeholder="SEO description..."
                          oninput="updateCount('metaDesc','metaDescCount',160); document.getElementById('gDesc').textContent=this.value||'Meta description here...'">{{ old('meta_description') }}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Canonical URL <small class="text-muted">(optional)</small></label>
                <div class="input-group">
                    <span class="input-group-text text-muted small">https://jmkrepairs.com/</span>
                    <input type="text" name="canonical_url" class="form-control"
                           value="{{ old('canonical_url') }}" placeholder="page-slug">
                </div>
            </div>

            <!-- Google Preview -->
            <div class="bg-light border rounded p-3 mt-2">
                <div class="form-text fw-semibold mb-2">🔎 Google Preview:</div>
                <div style="color:#1a0dab;font-size:18px;font-family:arial" id="gTitle">Page Title...</div>
                <div style="color:#006621;font-size:13px;">jmkrepairs.com/<span id="gSlug">page-slug</span></div>
                <div style="color:#545454;font-size:13px;" id="gDesc">Meta description here...</div>
            </div>
        </div>

        <!-- OG TAGS -->
        <div class="card p-4 mb-4">
            <h6 class="fw-bold mb-3">📱 Social Media (OG Tags)</h6>
            <div class="form-text mb-3 text-muted">WhatsApp/Facebook share pe jo dikhega</div>

            <div class="mb-3">
                <label class="form-label fw-semibold">OG Title</label>
                <input type="text" name="og_title" class="form-control"
                       value="{{ old('og_title') }}"
                       placeholder="Khali rakho = Meta Title use hoga">
            </div>
            <div class="mb-3">
                <label class="form-label fw-semibold">OG Description</label>
                <textarea name="og_description" class="form-control" rows="2"
                          placeholder="Khali rakho = Meta Description use hoga">{{ old('og_description') }}</textarea>
            </div>
        </div>

    </div>

    <!-- ===== RIGHT COLUMN ===== -->
    <div class="col-lg-4">

        <!-- PUBLISH -->
        <div class="card p-4 mb-4">
            <h6 class="fw-bold mb-3">📢 Publish</h6>
            <div class="mb-3">
                <label class="form-label fw-semibold">Status</label>
                <select name="is_active" class="form-select">
                    <option value="1">✅ Active</option>
                    <option value="0">📝 Draft</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary w-100 py-2">
                <i class="bi bi-save"></i> Save Page
            </button>
        </div>

        <!-- ROBOTS -->
        <div class="card p-4 mb-4">
            <h6 class="fw-bold mb-3">🤖 Robots / Indexing</h6>
            <select name="robots" class="form-select">
                <option value="index, follow" selected>index, follow (Default)</option>
                <option value="noindex, follow">noindex, follow</option>
                <option value="index, nofollow">index, nofollow</option>
                <option value="noindex, nofollow">noindex, nofollow</option>
            </select>
            <div class="form-text mt-1">Google ko batao index karna hai ya nahi</div>
        </div>

        <!-- IMAGE GUIDE -->
        <div class="card p-4 mb-4 bg-light">
            <h6 class="fw-bold mb-3">🖼️ Image Guide</h6>
            <ul class="small text-muted mb-0">
                <li class="mb-2"><strong>Featured:</strong> Hero section — 1200x600px</li>
                <li class="mb-2"><strong>Banner:</strong> Top banner — 1920x400px</li>
                <li class="mb-2"><strong>Icon:</strong> Thumbnail — 200x200px</li>
                <li class="mb-2"><strong>OG Image:</strong> Social share — 1200x630px</li>
                <li><strong>Gallery:</strong> Work photos — any size</li>
            </ul>
        </div>

        <!-- SEO TIPS -->
        <div class="card p-4 bg-light">
            <h6 class="fw-bold mb-3">💡 SEO Tips</h6>
            <ul class="small text-muted mb-0">
                <li class="mb-2">Meta Title: 50-60 characters</li>
                <li class="mb-2">Meta Description: 150-160 characters</li>
                <li class="mb-2">Slug mein main keyword rakho</li>
                <li class="mb-2">H1 heading mein keyword zaroor ho</li>
                <li>WebP format images use karo — fast loading</li>
            </ul>
        </div>

    </div>
</div>
</form>

<script>
function generateSlug(title) {
    const slug = title.toLowerCase()
        .replace(/[^a-z0-9\s-]/g, '')
        .replace(/\s+/g, '-')
        .replace(/-+/g, '-').trim();
    document.getElementById('pageSlug').value = slug;
    document.getElementById('slugPreview').textContent = slug;
    document.getElementById('gSlug').textContent = slug;
}

function updateCount(inputId, countId, max) {
    const len = document.getElementById(inputId).value.length;
    const badge = document.getElementById(countId);
    badge.textContent = len + '/' + max;
    badge.className = 'badge ms-2 ' + (len > max * 0.9 ? 'bg-danger' : len > max * 0.7 ? 'bg-warning' : 'bg-secondary');
}

function previewImage(input, previewId) {
    const preview = document.getElementById(previewId);
    preview.innerHTML = '';
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = e => {
            preview.innerHTML = `<img src="${e.target.result}" 
                style="max-height:120px;max-width:100%;border-radius:8px;border:2px solid #dee2e6;">`;
        };
        reader.readAsDataURL(input.files[0]);
    }
}

function previewGallery(input) {
    const container = document.getElementById('galleryPreview');
    container.innerHTML = '';
    if (input.files) {
        Array.from(input.files).forEach(file => {
            const reader = new FileReader();
            reader.onload = e => {
                container.innerHTML += `
                    <div style="position:relative;">
                        <img src="${e.target.result}" 
                             style="height:90px;width:90px;object-fit:cover;border-radius:8px;border:2px solid #dee2e6;">
                    </div>`;
            };
            reader.readAsDataURL(file);
        });
    }
}
</script>
@endsection