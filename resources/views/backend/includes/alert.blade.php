@if (session()->has('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <i class="bx bx-block mr-2"></i>
    {!! session()->get('error') !!}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
@elseif(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <i class="bx bx-check-shield mr-2"></i>
    {!! session()->get('success') !!}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
@endif