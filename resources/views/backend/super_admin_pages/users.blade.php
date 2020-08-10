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
            <h4 class="mb-0 font-size-18">Clients</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Site</a></li>
                    <li class="breadcrumb-item active">Clients</li>
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
                
                @include('backend.includes.alert')
                
                <div class="table-rep-plugin">
                    <div class="table-responsive mb-0" data-pattern="priority-columns">
                        <table id="tech-companies-1" class="table table-striped">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th data-priority="1">Email</th>
                                <th data-priority="3">Domain</th>
                                <th data-priority="3">Role</th>
                                <th data-priority="3">Company url</th>
                                <th data-priority="6">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($users as $user)
                            <tr>
                                <th>{{ $user->name }}</th>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->domain }}</td>
                                <td>{{ $user->role == 1 ? 'Admin' : "Un-known"  }}</td>
                                <td>{{ $user->company_url }}</td>
                                <td>
                                    <div class="btn-group btn-group-example mb-3" role="group">
                                        <a href="{{ route('clients.edit',$user->id) }}" class="btn btn-primary w-xs btn-sm"><i class="bx bx-pencil font-size-16"></i></a>
                                        <a href="{{ route('clients.destroy',$user->id) }}" class="btn btn-danger w-xs btn-sm"><i class="bx bxs-trash d-block font-size-16"></i></a>
                                    </div>
                                </td>
                            </tr> 
                            @empty

                            @endforelse
                            </tbody>
                        </table>

                        {{ $users->links() }}
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
