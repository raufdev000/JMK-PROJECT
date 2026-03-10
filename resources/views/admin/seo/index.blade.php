@extends('admin.layouts.app')
@section('title', 'SEO Settings')

@section('content')
<div class="card p-4">
    <h5 class="fw-bold mb-1">SEO Settings</h5>
    <p class="text-muted mb-4">Set meta title and description of every page</p>

    <form action="{{ route('admin.seo.update') }}" method="POST">
        @csrf

        @foreach($pages as $key => $label)
        <div class="border rounded p-4 mb-4">
            <h6 class="fw-bold mb-3">
                <i class="bi bi-file-earmark text-primary"></i> {{ $label }}
                <code class="ms-2 text-muted" style="font-size:12px">/{{ $key }}</code>
            </h6>

            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label fw-semibold">
                        Meta Title 
                        <small class="text-muted">(max 60 chars)</small>
                    </label>
                    <input type="text" 
                           name="seo[{{ $key }}][meta_title]" 
                           class="form-control"
                           value="{{ old('seo.'.$key.'.meta_title', $seoData[$key]->meta_title) }}"
                           maxlength="60"
                           placeholder="e.g. Best Repair Shop in City">
                    <div class="form-text">
                        <span class="char-count">0</span>/60 characters
                    </div>
                </div>

                <div class="col-md-6">
                    <label class="form-label fw-semibold">
                        Meta Description 
                        <small class="text-muted">(max 160 chars)</small>
                    </label>
                    <textarea name="seo[{{ $key }}][meta_description]" 
                              class="form-control" rows="3"
                              maxlength="160"
                              placeholder="Short description for Google...">{{ old('seo.'.$key.'.meta_description', $seoData[$key]->meta_description) }}</textarea>
                    <div class="form-text">
                        <span class="char-count">0</span>/160 characters
                    </div>
                </div>
            </div>

            {{-- Google Preview --}}
            <div class="mt-3 p-3 rounded" style="background:#f8f9fa; border-left: 3px solid #6c63ff">
                <div class="text-muted small mb-1">
                    <i class="bi bi-google"></i> Google Preview:
                </div>
                <div class="preview-title text-primary" style="font-size:18px; cursor:pointer">
                    {{ $seoData[$key]->meta_title ?: $label }}
                </div>
                <div class="text-success small">
                   https://jmkrepairs.com/{{ $key }}
                </div>
                <div class="preview-desc text-muted small mt-1">
                    {{ $seoData[$key]->meta_description ?: 'No description set...' }}
                </div>
            </div>
        </div>
        @endforeach

        <button type="submit" class="btn btn-primary px-5">
            <i class="bi bi-save"></i> Save All SEO Settings
        </button>
    </form>
</div>
@endsection

@section('scripts')
<script>
// Character counter
document.querySelectorAll('input[maxlength], textarea[maxlength]').forEach(input => {
    const counter = input.closest('.col-md-6').querySelector('.char-count');
    if (counter) {
        counter.textContent = input.value.length;
        input.addEventListener('input', () => {
            counter.textContent = input.value.length;
        });
    }
});
</script>
@endsection