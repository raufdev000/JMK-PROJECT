@extends('admin.layouts.app')
@section('title', 'Edit Page')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h5 class="fw-bold mb-0">✏️ Edit — {{ $page->title }}</h5>
    <a href="{{ route('admin.pages.index') }}" class="btn btn-outline-secondary btn-sm">← Back</a>
</div>

<form action="{{ route('admin.pages.update', $page) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('PUT')

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
                       value="{{ old('title', $page->title) }}"
                       oninput="generateSlug(this.value)">
                @error('title')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">
                    Slug (URL) —
                    <small class="text-primary">jmkrepairs.com/<span id="slugPreview">{{ $page->slug }}</span></small>
                </label>
                <div class="input-group">
                    <span class="input-group-text">/</span>
                    <input type="text" name="slug" id="pageSlug"
                           class="form-control @error('slug') is-invalid @enderror"
                           value="{{ old('slug', $page->slug) }}"
                           oninput="document.getElementById('slugPreview').textContent=this.value; document.getElementById('gSlug').textContent=this.value">
                </div>
                @error('slug')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
                <div class="form-text">⚠️ Change karne se purana URL kaam karna band ho jayega!</div>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Page Heading (H1)</label>
                <input type="text" name="heading" class="form-control"
                       value="{{ old('heading', $page->heading ?? '') }}"
                       placeholder="e.g. About JMK Repairs Dubai">
                <div class="form-text">Khali rakho to Page Title use hoga</div>
            </div>
        </div>

        <!-- CONTENT -->
        <div class="card p-4 mb-4">
            <h6 class="fw-bold mb-3">✏️ Page Content</h6>
<textarea name="content" id="pageContent" rows="10" class="form-control">{{ old('content', $page->content) }}</textarea>

<script src="https://cdn.tiny.cloud/1/d2dedx9ntre5cpfav89l1zp9f2eqylf6b74a9kjsbm93k4td/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
tinymce.init({
    selector: '#pageContent',
    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
    height: 400,
});
</script>        </div>

        <!-- ===== IMAGES ===== -->
        <div class="card p-4 mb-4">
            <h6 class="fw-bold mb-3">🖼️ Images</h6>

            <div class="row g-3">

                <!-- Featured Image -->
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Featured Image <span class="badge bg-primary ms-1">Main</span></label>
                    @if($page->featured_image)
                        <div class="mb-2 position-relative d-inline-block">
                            <img src="{{ Storage::url($page->featured_image) }}"
                                 style="height:100px;width:100%;max-width:200px;object-fit:cover;border-radius:8px;border:2px solid #dee2e6;">
                            <div class="mt-1">
                                <input type="checkbox" name="remove_featured_image" value="1" id="rm_featured">
                                <label for="rm_featured" class="text-danger small">❌ Remove</label>
                            </div>
                        </div>
                    @endif
                    <input type="file" name="featured_image" class="form-control"
                           accept="image/*" onchange="previewImage(this, 'prev_featured')">
                    <div id="prev_featured" class="mt-2"></div>
                    <div class="form-text">Hero image (max 2MB)</div>
                </div>

                <!-- Banner Image -->
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Banner Image <span class="badge bg-info ms-1">Top Banner</span></label>
                    @if($page->banner_image)
                        <div class="mb-2">
                            <img src="{{ Storage::url($page->banner_image) }}"
                                 style="height:100px;width:100%;max-width:200px;object-fit:cover;border-radius:8px;border:2px solid #dee2e6;">
                            <div class="mt-1">
                                <input type="checkbox" name="remove_banner_image" value="1" id="rm_banner">
                                <label for="rm_banner" class="text-danger small">❌ Remove</label>
                            </div>
                        </div>
                    @endif
                    <input type="file" name="banner_image" class="form-control"
                           accept="image/*" onchange="previewImage(this, 'prev_banner')">
                    <div id="prev_banner" class="mt-2"></div>
                    <div class="form-text">Top banner (max 2MB)</div>
                </div>

                <!-- Icon Image -->
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Icon / Thumbnail <span class="badge bg-secondary ms-1">Small</span></label>
                    @if($page->icon_image)
                        <div class="mb-2">
                            <img src="{{ Storage::url($page->icon_image) }}"
                                 style="height:70px;width:70px;object-fit:cover;border-radius:8px;border:2px solid #dee2e6;">
                            <div class="mt-1">
                                <input type="checkbox" name="remove_icon_image" value="1" id="rm_icon">
                                <label for="rm_icon" class="text-danger small">❌ Remove</label>
                            </div>
                        </div>
                    @endif
                    <input type="file" name="icon_image" class="form-control"
                           accept="image/*" onchange="previewImage(this, 'prev_icon')">
                    <div id="prev_icon" class="mt-2"></div>
                    <div class="form-text">Thumbnail (max 1MB)</div>
                </div>

                <!-- OG Image -->
                <div class="col-md-6">
                    <label class="form-label fw-semibold">OG Image <span class="badge bg-success ms-1">Social Share</span></label>
                    @if($page->og_image)
                        <div class="mb-2">
                            <img src="{{ Storage::url($page->og_image) }}"
                                 style="height:100px;width:100%;max-width:200px;object-fit:cover;border-radius:8px;border:2px solid #dee2e6;">
                            <div class="mt-1">
                                <input type="checkbox" name="remove_og_image" value="1" id="rm_og">
                                <label for="rm_og" class="text-danger small">❌ Remove</label>
                            </div>
                        </div>
                    @endif
                    <input type="file" name="og_image" class="form-control"
                           accept="image/*" onchange="previewImage(this, 'prev_og')">
                    <div id="prev_og" class="mt-2"></div>
                    <div class="form-text">WhatsApp/Facebook — 1200x630px (max 2MB)</div>
                </div>

                <!-- Gallery Images -->
                <div class="col-12">
                    <hr>
                    <label class="form-label fw-semibold">
                        Gallery Images <span class="badge bg-warning text-dark ms-1">Multiple</span>
                    </label>

                    @if($page->gallery_images && count($page->gallery_images) > 0)
                        <div class="mb-3">
                            <div class="form-text fw-semibold mb-2">Current Gallery ({{ count($page->gallery_images) }} images):</div>
                            <div class="d-flex flex-wrap gap-2">
                                @foreach($page->gallery_images as $img)
                                <div class="text-center">
                                    <img src="{{ Storage::url($img) }}"
                                         style="height:90px;width:90px;object-fit:cover;border-radius:8px;border:2px solid #dee2e6;">
                                    <div class="mt-1">
                                        <input type="checkbox" name="delete_gallery[]" value="{{ $img }}"
                                               id="del_{{ $loop->index }}">
                                        <label for="del_{{ $loop->index }}" class="text-danger small">❌ Delete</label>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <input type="file" name="gallery_images[]" class="form-control"
                           accept="image/*" multiple onchange="previewGallery(this)">
                    <div class="form-text">Nayi images add karo (Ctrl+Click se multiple) — max 2MB each</div>
                    <div id="galleryPreview" class="d-flex flex-wrap gap-2 mt-2"></div>
                </div>

            </div>
        </div>

        <!-- SEO SETTINGS -->
        <div class="card p-4 mb-4">
            <h6 class="fw-bold mb-3">🔍 SEO Settings</h6>

            <div class="mb-3">
                <label class="form-label fw-semibold">Meta Title
                    <span id="metaTitleCount" class="badge bg-secondary ms-2">{{ strlen($page->meta_title ?? '') }}/60</span>
                </label>
                <input type="text" name="meta_title" id="metaTitle" class="form-control"
                       value="{{ old('meta_title', $page->meta_title) }}" maxlength="60"
                       oninput="updateCount('metaTitle','metaTitleCount',60); document.getElementById('gTitle').textContent=this.value||'Page Title...'">
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Meta Description
                    <span id="metaDescCount" class="badge bg-secondary ms-2">{{ strlen($page->meta_description ?? '') }}/160</span>
                </label>
                <textarea name="meta_description" id="metaDesc" class="form-control" rows="3" maxlength="160"
                          oninput="updateCount('metaDesc','metaDescCount',160); document.getElementById('gDesc').textContent=this.value||'Meta description here...'">{{ old('meta_description', $page->meta_description) }}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Canonical URL <small class="text-muted">(optional)</small></label>
                <div class="input-group">
                    <span class="input-group-text text-muted small">https://jmkrepairs.com/</span>
                    <input type="text" name="canonical_url" class="form-control"
                           value="{{ old('canonical_url', $page->canonical_url ?? $page->slug) }}">
                </div>
            </div>

            <!-- Google Preview -->
            <div class="bg-light border rounded p-3 mt-2">
                <div class="form-text fw-semibold mb-2">🔎 Google Preview:</div>
                <div style="color:#1a0dab;font-size:18px;font-family:arial" id="gTitle">{{ $page->meta_title ?? $page->title }}</div>
                <div style="color:#006621;font-size:13px;">jmkrepairs.com/<span id="gSlug">{{ $page->slug }}</span></div>
                <div style="color:#545454;font-size:13px;" id="gDesc">{{ $page->meta_description ?? 'Meta description here...' }}</div>
            </div>
        </div>

        <!-- OG TAGS -->
        <div class="card p-4 mb-4">
            <h6 class="fw-bold mb-3">📱 Social Media (OG Tags)</h6>
            <div class="mb-3">
                <label class="form-label fw-semibold">OG Title</label>
                <input type="text" name="og_title" class="form-control"
                       value="{{ old('og_title', $page->og_title ?? '') }}"
                       placeholder="Khali rakho = Meta Title use hoga">
            </div>
            <div class="mb-3">
                <label class="form-label fw-semibold">OG Description</label>
                <textarea name="og_description" class="form-control" rows="2"
                          placeholder="Khali rakho = Meta Description use hoga">{{ old('og_description', $page->og_description ?? '') }}</textarea>
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
                    <option value="1" {{ $page->is_active ? 'selected' : '' }}>✅ Active</option>
                    <option value="0" {{ !$page->is_active ? 'selected' : '' }}>📝 Draft</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary w-100 py-2">
                <i class="bi bi-save"></i> Update Page
            </button>
        </div>

        <!-- ROBOTS -->
        <div class="card p-4 mb-4">
            <h6 class="fw-bold mb-3">🤖 Robots / Indexing</h6>
            <select name="robots" class="form-select">
                @foreach(['index, follow', 'noindex, follow', 'index, nofollow', 'noindex, nofollow'] as $r)
                <option value="{{ $r }}" {{ ($page->robots ?? 'index, follow') == $r ? 'selected' : '' }}>{{ $r }}</option>
                @endforeach
            </select>
        </div>

        <!-- PAGE INFO -->
        <div class="card p-4 mb-4">
            <h6 class="fw-bold mb-3">ℹ️ Page Info</h6>
            <div class="small text-muted">
                <p class="mb-1"><strong>Created:</strong> {{ $page->created_at->format('d M Y') }}</p>
                <p class="mb-1"><strong>Updated:</strong> {{ $page->updated_at->format('d M Y') }}</p>
                <p class="mb-1"><strong>URL:</strong> jmkrepairs.com/{{ $page->slug }}</p>
                <p class="mb-0"><strong>Gallery:</strong> {{ count($page->gallery_images ?? []) }} images</p>
            </div>
        </div>

        <!-- IMAGE GUIDE -->
        <div class="card p-4 mb-4 bg-light">
            <h6 class="fw-bold mb-3">🖼️ Image Guide</h6>
            <ul class="small text-muted mb-0">
                <li class="mb-2"><strong>Featured:</strong> 1200x600px</li>
                <li class="mb-2"><strong>Banner:</strong> 1920x400px</li>
                <li class="mb-2"><strong>Icon:</strong> 200x200px</li>
                <li class="mb-2"><strong>OG Image:</strong> 1200x630px</li>
                <li><strong>Gallery:</strong> any size</li>
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
                style="max-height:100px;max-width:200px;border-radius:8px;border:2px solid #dee2e6;">`;
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
                    <img src="${e.target.result}" 
                         style="height:90px;width:90px;object-fit:cover;border-radius:8px;border:2px solid #4caf50;">`;
            };
            reader.readAsDataURL(file);
        });
    }
}
</script>
@endsection