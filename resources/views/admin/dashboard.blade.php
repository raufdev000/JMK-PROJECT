@extends('admin.layouts.app')
@section('title', 'Dashboard')

@section('content')
<div class="row g-4 mb-4">
    <div class="col-md-4">
        <div class="card p-4">
            <div class="d-flex align-items-center gap-3">
                <div style="background:#6c63ff20; padding:15px; border-radius:10px;">
                    <i class="bi bi-file-earmark-text fs-3" style="color:#6c63ff"></i>
                </div>
                <div>
                    <div class="text-muted small">Total Pages</div>
                    <div class="fs-3 fw-bold">{{ $totalPages }}</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card p-4">
            <div class="d-flex align-items-center gap-3">
                <div style="background:#28a74520; padding:15px; border-radius:10px;">
                    <i class="bi bi-journal-richtext fs-3 text-success"></i>
                </div>
                <div>
                    <div class="text-muted small">Published Posts</div>
                    <div class="fs-3 fw-bold">{{ $publishedPosts }}</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card p-4">
            <div class="d-flex align-items-center gap-3">
                <div style="background:#ffc10720; padding:15px; border-radius:10px;">
                    <i class="bi bi-pencil-square fs-3 text-warning"></i>
                </div>
                <div>
                    <div class="text-muted small">Draft Posts</div>
                    <div class="fs-3 fw-bold">{{ $draftPosts }}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection