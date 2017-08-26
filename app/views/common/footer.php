<script src="<?php echo base_url()?>assets/js/jquery-2.2.0.min.js"></script>
<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="<?php echo base_url()?>assets/js/ie10-viewport-bug-workaround.js"></script>

<!-- Custom javascript -->
<script src="<?php echo base_url()?>assets/js/theme.js"></script>
<script src="<?php echo base_url()?>assets/js/bootstrap-editable.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery.js"></script>
<script src="<?php echo base_url()?>assets/js/bootstrap.js"></script>
<!--<script src="assets/js/bootstrap.min.js"></script>-->
<script src="<?php echo base_url()?>assets/datatables/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()?>assets/datatables/js/dataTables.bootstrap.js"></script>
<script>
    $('#addMoreField').click(function (e) {
        var max_field = 10;
        var x = 1;
        e.preventDefault();
        if (x < max_field) {
            x++;
            $('#addMoreOption').append('<div class="row append_row">' +
                '<div class="col-lg-12">' +
                '<div class="row">' +
                '<div class="col-lg-9">' +
                '<input required="required" name="name[]" type="text" class="form-control" placeholder="Name">' +
                '</div>' +
                '<div class="col-xs-2 col-sm-2 col-md-3 col-lg-3">' +
                '<a id="removeField" class="btn btn-xs btn-danger removeBtn">Remove</a>' +
                '</div>' +
                '</div><div class="clearfix"></div>' +
                '</div>'
            );
        }
    });

    $('#addMoreOption').on('click' , "#removeField" , function(e){
        e.preventDefault();
        console.log("This is remove button");
        $(this).parent('div').parent('div').remove();
    });

</script>

<script>
    $('#addMoreFieldForRole').click(function (e) {
        var max_field = 10;
        var x = 1;
        e.preventDefault();
        if (x < max_field) {
            x++;
            $('#addMoreOptionForRole').append('<div class="row append_row">' +
                '<div class="col-lg-12">' +
                '<div class="row">' +
                '<div class="col-lg-9">' +
                '<input required="required" name="name[]" type="text" class="form-control" placeholder="Name">' +
                '</div>' +
                '<div class="col-xs-2 col-sm-2 col-md-3 col-lg-3">' +
                '<a id="removeField" class="btn btn-xs btn-danger removeBtn">Remove</a>' +
                '</div>' +
                '</div><div class="clearfix"></div>' +
                '</div>'
            );
        }
    });

    $('#addMoreOptionForRole').on('click' , "#removeField" , function(e){
        e.preventDefault();
        console.log("This is remove button");
        $(this).parent('div').parent('div').remove();
    });

    $(document).on('ready', function () {
        var rightPanel = $("#rightPanel").height();
        var leftPanel = $("#leftPanel").height();
        var rightList = $("#rightList").height();
        var leftList = $("#leftList").height();
        var rightwidget = $("#rightwidget").height();
        var leftwidget = $("#leftwidget").height();

        if(rightPanel > leftPanel){
            $("#leftPanel").css("min-height", rightPanel + 30);
        }

        if(rightPanel < leftPanel){
            $("#rightPanel").css("min-height", leftPanel + 30);
        }

        if(rightList > leftList){
            $("#leftList").css("min-height", rightList + 30);
        }

        if(rightList < leftList){
            $("#rightList").css("min-height", leftList + 30);
        }

        if(rightwidget > leftwidget){
            $("#leftwidget").css("min-height", rightwidget + 30);
        }

        if(rightwidget < leftwidget){
            $("#rightwidget").css("min-height", leftwidget + 30);
        }

    });

    $(document).ready(function () {
        $(".changeRole").click(function () {
            $("#dataName").val($(this).data('name'));//database table field
            $("#dataId").val($(this).data('id'));//database table field
            $('#changeRole').modal('show');
        });
    });

    var ctxAPIUsageMonthly = document.getElementById("apiUsageChartMonthly").getContext('2d');
    var apiUsageChartMonthly = new Chart(ctxAPIUsageMonthly, {
        "type": "line",
        "data": {
            "labels": ["January", "February", "March", "April", "May", "June", "July"],
            "datasets": [{
                "label": "Monthly API Usage",
                "data": [65, 59, 80, 81, 56, 55, 40],
                "fill": false,
                "borderColor": "#114c69",
                "lineTension": 0.1
            }]
        },
        "options": {}
    });

    var ctxAPIUsageDaily = document.getElementById("apiUsageChartDaily").getContext('2d');
    var apiUsageChartDaily = new Chart(ctxAPIUsageDaily, {
        "type": "line",
        "data": {
            "labels": [01, 02, 03, 04, 05, 06, 07],
            "datasets": [{
                "label": "Daily API Usage",
                "data": [65, 59, 80, 81, 56, 55, 40],
                "fill": false,
                "borderColor": "#114c69",
                "lineTension": 0.1
            }]
        },
        "options": {}
    });

</script>

<! --Modal Script -->
<script type="text/javascript">
    var save_method; //for save method string

    function addRole()
    {
        save_method = 'add';
        $('#roleAddForm')[0].reset(); // reset form on modals
        $('.form-group').removeClass('has-error'); // clear error class
        $('.help-block').empty(); // clear error string
        $('#roleAddModal').modal('show'); // show bootstrap modal
        $('.modal-title').text('Add New Role'); // Set Title to Bootstrap modal title
    }

</script>
</body>
</html>