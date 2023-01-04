@if(Session::has('message'))
    <div class="alert alert-{{ Session::get('alert-type') }} alert-dismissible fade show mb-0" role="alert" style="position: absolute; z-index: 100000; right: 20px">
        <strong> {{ Session::get('message') }} </strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
@endif
