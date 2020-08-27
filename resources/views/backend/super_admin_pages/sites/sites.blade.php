@extends('backend.layouts.app')

@push('css')
 <!-- Responsive Table css -->
<link href="{{ asset('backend/assets/libs/admin-resources/rwd-table/rwd-table.min.css') }}" rel="stylesheet" type="text/css" />
@endpush

@section('content')
    
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0 font-size-18">Sites</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Site</a></li>
                    <li class="breadcrumb-item active">Sites</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <i class="bx bx-info-circle mr-2"></i>
                    <strong>If You Delete any site we will automatically cleared all the users/topics linked to that
                    domain and also delete it from  Cloudflare.</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                @include('backend.includes.alert')
                
                <div class="table-rep-plugin">
                    <div class="table-responsive mb-0" data-pattern="priority-columns">
                        <table id="tech-companies-1" class="table table-striped">
                            <thead>
                            <tr>
                                <th>Logo</th>
                                <th data-priority="1">Domain</th>
                                <th data-priority="3">Allowed Domain</th>
                                <th data-priority="6">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($sites as $site)
                            <tr>
                                <th><img class="rounded-circle avatar-sm" src="{{ asset('clients/logos/'.$site->logo) }}" alt=""></th>
                                <td><a target="_blank" href="https://{{ replaceHttps($site->domain) }}">{{ replaceHttps($site->domain) }}</a></td>
                                <td>{{ $site->allowed_domain }}</td>
                                <td>
                                    <div class="btn-group btn-group-example mb-3" role="group">
                                        <a href="{{ route('sites.edit',$site->id) }}" class="btn btn-primary w-xs btn-sm"><i class="bx bx-pencil font-size-16"></i></a>
                                        <a href="#" onclick="event.preventDefault(); document.getElementById('user-del-{{ $site->id }}').submit();" class="btn btn-danger w-xs btn-sm"><i class="bx bxs-trash d-block font-size-16"></i></a>
                                    </div>
                                </td>

                                <form action="{{ route('sites.destroy',$site->id) }}" id="user-del-{{ $site->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </tr> 
                            @empty

                            @endforelse
                            </tbody>
                        </table>

                        {{ $sites->links() }}
                    </div>

                </div>

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

</div> <!-- container-fluid -->
</div>
<!-- End Page-content -->

@endsection

@push('js')
 <!-- Responsive Table js -->
<script src="{{ asset('backend/assets/libs/admin-resources/rwd-table/rwd-table.min.js') }}"></script>

<!-- Init js -->
<script src="{{ asset('backend/assets/js/pages/table-responsive.init.js') }}"></script>
@endpush
