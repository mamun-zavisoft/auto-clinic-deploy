<form action="" method="get">
    <div class="table-top">
        {{-- custom filter --}}
        <div class="d-flex flex-wrap">
            {{ $slot }}
        </div>

        {{-- default filter --}}
        <div class="d-flex mt-3 mt-md-0">
            <div class="search-set ">
                <div class="search-input ms-3" data-url="{{ request()->url() }}">
                    <a href="javascript:void(0);" class="btn btn-searchset"><i data-feather="search"
                            class="feather-search"></i></a>
                    <input type="search" name="search" class="form-control form-control-sm" placeholder="Search" value="{{ request('search') }}" autocomplete="off">
                </div>
                <button type="submit" class="btn btn-secondary rounded-pill custom-submit-btn">filter</button>
            </div>
        </div>
    </div>
</form>

@push('scripts')
    <script>
        $(document).ready(function() {
            $('.form-control[name="search"]').on('input', function() {
                let query = $.trim($(this).val());
                let searchUrl = $('.search-input').data('url');

                    $.ajax({
                        url: searchUrl,
                        type: 'GET',
                        data: { search: query },
                        success: function(res) {
                            $('table tbody').html(res);
                        },
                        error: function(xhr, status, error) {
                            console.error("Search request failed." , error);
                        }
                    });
                
            });
        });
    </script>
@endpush
