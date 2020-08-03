
<script src="{{ asset('admin/assets/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/slimscrollbar/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/jekyll-search.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/charts/Chart.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/jvectormap/jquery-jvectormap-world-mill.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/daterangepicker/moment.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
<script>
  jQuery(document).ready(function() {
    jQuery('input[name="dateRange"]').daterangepicker({
    autoUpdateInput: false,
    singleDatePicker: true,
    locale: {
      cancelLabel: 'Clear'
    }
  });
    jQuery('input[name="dateRange"]').on('apply.daterangepicker', function (ev, picker) {
      jQuery(this).val(picker.startDate.format('MM/DD/YYYY'));
    });
    jQuery('input[name="dateRange"]').on('cancel.daterangepicker', function (ev, picker) {
      jQuery(this).val('');
    });
  });
</script>
<script src="{{ asset('admin/assets/plugins/toastr/toastr.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/sleek.bundle.js') }}"></script>
<script>
		$(".delete").on("submit", function () {
			return confirm("Do you want to remove this?");
		});
</script>
