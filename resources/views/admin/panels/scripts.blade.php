{{-- Vendor Scripts --}}
<script src="{{ asset(mix('vendors/js/vendors.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/ui/prism.min.js')) }}"></script>
@yield('vendor-script')
{{-- Theme Scripts --}}
<script src="{{ asset(mix('js/core/app-menu.js')) }}"></script>
<script src="{{ asset(mix('js/core/app.js')) }}"></script>
<!--Datatable Files-->
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
<!-- Quill Editor js file -->
<script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>

@if($configData['blankPage'] === false)
<script src="{{ asset(mix('js/scripts/customizer.js')) }}"></script>
@endif
{{-- page script --}}
@yield('page-script')
{{-- page script --}}
<script>
    $(document).ready(function() {
        //trigger datatable
        $('#example').DataTable();
    });
    // trigger quill editor
    // var quill = new Quill('#editor', {
    //     theme: 'snow'
    // });
</script>

