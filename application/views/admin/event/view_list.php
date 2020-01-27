
<div class="content-wrapper">
    <div class="container-fluid">

        <!--Start Dashboard Content-->
        <!-- Breadcrumb-->
        <div class="row pt-2 pb-2">
            <div class="col-sm-9">
                <h4 class="page-title">Event Management</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url('user'); ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">View Event</li>
                </ol>
            </div>

        </div>
        <?php $this->load->view('common/messages.php');  ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header"><i class="fa fa-table"></i> Event List</div>

                    <div class="card-body">
                        <form method='GET' action="<?php echo base_url('admin/gallery'); ?>">
                            <div class="row">
                                <div class="col-md-4">
                                <?php $this->load->view('common/state_select_box.php');  ?>
                                </div>
                                <div class="col-md-4">
                                  <?php $this->load->view('common/district_select_box.php');  ?>
                                </div>

                                <div class="col-md-4">
                                     <?php if ($_SESSION['ADMIN']['District_ID'] == 0) { ?>
                                    <div class="form-group" style="margin-top: 30px;">
                                        <button type="submit" name="srch" value="1" class="btn btn-primary px-5"><i aria-hidden="true" class="fa fa-search"></i> Searchbutton>
                                    </div>
                                <?php } ?>
                                </div>

                            </div>
                        </form>

                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th colspan="">S.No.</th>
                                        <th>Image</th>  
                                        <th>Title</th>
                                        <th>State</th>
                                        <th>District</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                         <th>Approve</th>
                                        <th>Publish</th>
                                       

                                        <th colspan="3">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = serial_number_start();

                                    foreach ($result_list as $row) {

                                        $i++
                                        ?>
                                        <tr>
                                            <td colspan=""><?= $i ?></td>


                                            <td>
                                                <?php if(isset($row['image'])){ ?>    
                                                <a href="<?php echo base_url('download/event/' . $row['image']); ?>" class="fancybox">
                                                <img id="myImg" src="<?php echo base_url('download/event/' . $row['image']); ?>" class="img-responsive" width="75px" height="75px"></a>
                                                <?php } ?>
                                            </td>

                                            <td><?= $row['title'] ?></td>
                                            <td><?= $row['State_Name'] ?></td>
                                            <td><?= $row['District_Name'] ?></td>   
                                            <td><?= $row['date_added'] ?></td>
                                            <td>

                                                <?php if ($row['status'] == 1) { 
                                                   echo '<span class="text-success"> Active</span>';
                                                }else { 
                                                    echo '<span class="text-danger">Inactive</span>';
                                                } ?>

                                            </td>

                                             <td>

                                                <?php if ($row['approve'] == 1) { 
                                                   echo '<span class="text-success">Approved</span>';
                                                    } else { 
                                                    echo '<span class="text-danger">Unapproved</span>';
                                                    } ?>

                                            </td>


                                            <td>

                                                <?php if ($row['publish'] == 1) {
                                                   echo '<span class="text-success">Published</span>';
                                                    } else { 
                                                    echo '<span class="text-danger">Unpublished</span>';
                                                    } ?>

                                            </td>

                                            


                                            <td>                                             

                                                <a href="<?php echo base_url('admin/event/EditEvent'); ?>?action=edit&id=<?php echo $row['id']; ?>" class="btn btn-primary"><i class="fa fa-pencil"></i></a>


                                                &nbsp;&nbsp;											
                                                <a href="<?php echo base_url('admin/event/deleteEvent'); ?>?action=edit&id=<?php echo $row['id']; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure?')"><i class="fa fa-trash-o"></i></a>	

                                            </td>
                                        </tr>

<?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Row-->
    </div>
</div>
<!-- End container-fluid-->



<!-- Modal -->
<div class="modal fade" id="largesizemodal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">View User Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="t-heading" scope="col" colspan="6">User</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Full Name</th>
                                    <td class="fname"></td>
                                    <th>User Id</th>
                                    <td class="usId"></td>
                                    <th>Role</th>
                                    <td class="roles"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="t-heading" scope="col" colspan="6">Address</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>State</th>
                                    <td colspan="2" class="state_name"></td>
                                    <th>District</th>
                                    <td colspan="2" class="district_name"></td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="t-heading" scope="col" colspan="6">User Contact Information</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>User Mobile No.</th>
                                    <td colspan="2" class="mobile"></td>
                                    <th>Email</th>
                                    <td colspan="2" class="email"></td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="t-heading" scope="col" colspan="6">User Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th colspan="3">Status?</th>

                                    <td colspan="3"><span class="btn btn-success btn-sm waves-effect waves-light m-1 stateus" >Active</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>



<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript">

                                                    $(document).ready(function () {

                                                        function changeStatus(obj) {

                                                            var ID = $(obj).attr('id');

                                                            var status = $(obj).attr('name');
                                                            var msg = (status == '0') ? 'Active' : 'In-Active';
                                                            if (confirm("Are you sure to " + msg))
                                                            {
                                                                if (msg === 'Active') {
                                                                    $('#' + ID).removeClass('btn-danger').addClass('btn-success');
                                                                    $('#' + ID).attr('name', '1');
                                                                    $('#' + ID).text(msg);
                                                                    status = 1;
                                                                } else {
                                                                    $('#' + ID).removeClass("btn-success").addClass("btn-danger");
                                                                    $('#' + ID).attr('name', '0');
                                                                    $('#' + ID).text(msg);
                                                                    status = 0;
                                                                }

                                                                var userid = ID.split('_')[2];

                                                                url = "<?php echo base_url() . 'user/update_status' ?>";
                                                                $.ajax({
                                                                    type: "POST",
                                                                    url: url,
                                                                    data: {"id": userid, "status": status},
                                                                    success: function (data) {
                                                                        alert('Data successfully Updated');
                                                                    },
                                                                    failure: function (data) {
                                                                        alert('Failure!');
                                                                    }
                                                                });
                                                            }
                                                        }

                                                        //$(".getUserId").click(function () {

                                                        $(".getUserId").on("click", function () {

                                                            var uId = $(this).val();

                                                            var url = "<?php echo base_url() . 'user/getUserDetails' ?>";
                                                            //alert(url);
                                                            $.ajax({
                                                                type: "POST",
                                                                url: url,
                                                                data: {"uId": uId},
                                                                success: function (data) {
                                                                    //alert('Data successfully Updated');

                                                                    var ss = JSON.parse(data);
                                                                    var v1 = ss[0].State_ID;
                                                                    var roleIDS = ss[0].userType;
                                                                    var dd = ss[0].District_ID;

                                                                    //alert(dd);
                                                                    $(".fname").html(ss[0].fname);
                                                                    $(".fname").val(ss[0].fname);

                                                                    $(".usId").html(ss[0].id);

                                                                    $(".roles").html(ss[0].role);

                                                                    //$('#roleIDAjax option[value='+ roleIDS +']').attr('selected','selected');

                                                                    $('#roleIDAjax > option').each(function () {
                                                                        //alert($(this).text() + ' ' + $(this).val());
                                                                        var rr = $(this).val();
                                                                        // alert(rr);
                                                                        if (rr == roleIDS) {
                                                                            $('#roleIDAjax option[value=' + rr + ']').prop('selected', true);
                                                                        } else {

                                                                            $('#roleIDAjax option[value=' + rr + ']').prop('selected', false);
                                                                        }
                                                                    });

                                                                    $(".state_name").html(ss[0].State_Name);

                                                                    $('#stateIDAjax > option').each(function () {

                                                                        var ttt = $(this).val();

                                                                        if (v1 == ttt) {
                                                                            $('#stateIDAjax option[value=' + ttt + ']').prop('selected', true);
                                                                        } else {

                                                                            $('#stateIDAjax option[value=' + ttt + ']').prop('selected', false);
                                                                        }
                                                                    });

                                                                    $('#districtIDAjax > option').each(function () {

                                                                        var distD = $(this).val();

                                                                        if (dd == distD) {
                                                                            $('#districtIDAjax option[value=' + distD + ']').prop('selected', true);
                                                                        } else {

                                                                            $('#districtIDAjax option[value=' + distD + ']').prop('selected', false);
                                                                        }
                                                                    });


                                                                    $(".district_name").html(ss[0].District_Name);

                                                                    $(".mobile").html(ss[0].contact);
                                                                    $(".mobile").val(ss[0].contact);

                                                                    $(".email").html(ss[0].email);
                                                                    $(".email").val(ss[0].email);

                                                                    if (ss[0].status == 1)
                                                                    {
                                                                        $(".stateus").text("Active");
                                                                        $(".stateus").removeClass("btn-danger");
                                                                        $("input[name=active][value='1']").prop("checked", true);

                                                                    }
                                                                    else
                                                                    {
                                                                        $(".stateus").text("In-Active");
                                                                        $(".stateus").addClass("btn-danger");
                                                                        $("input[name=active][value='0']").prop("checked", true);
                                                                    }
                                                                },
                                                                failure: function (data) {
                                                                    alert('Failure!');
                                                                }
                                                            });

                                                            console.log(ss);
                                                        });


                                                        /* Get District List Based On State ID code start */


                                                        $(".edituserID").on("click", function () {

                                                            var eId = $(this).attr('State_ID_attr');
                                                            var uIds = $(this).val();
                                                            $("#uuid").val(uIds);
                                                            //alert(uIds);
                                                            // alert(uIds);
                                                            url = "<?php echo base_url() . 'user/getDistrictOfState/' ?>" + eId
                                                            $.ajax({
                                                                type: "POST",
                                                                url: url,
                                                                data: {"eId": eId, "uIds": uIds},
                                                                success: function (data) {
                                                                    //alert(data);
                                                                    $("#districtIDAjax").html(data);
                                                                    //alert('Data successfully Updated');
                                                                    //alert(data);
                                                                    var ss1 = JSON.parse(data);
                                                                    //alert(ss1);
                                                                    var v2 = ss1[0].district_name;
                                                                    //alert(v2);
                                                                    //var roleIDS= ss[0].userType;
                                                                    //var dd= ss[0].District_ID;


                                                                    //$(".district_name").html(ss[0].district_name);

                                                                },
                                                                failure: function (data) {
                                                                    alert('Failure!');
                                                                }
                                                            });


                                                        });


                                                    });
                                                    /* Get District List Based On State ID code ended */

</script>

<!-- Script code for State Change on Model started-->
<script type="text/javascript">

    $("#stateIDAjax").change(function () {

        var sid = $(this).val();
        //alert(sid);
        url = "<?php echo base_url() . 'user/changeState/' ?>" + sid
        $.ajax({
            type: "POST",
            url: url,
            data: {"sid": sid},
            success: function (data) {
                //alert(data);
                $("#districtIDAjax").html(data);

            },
            failure: function (data) {
                alert('Failure!');
            }
        });

    });

</script>
<!-- Script code for State Change On Model Ended-->

<!-- Update User Data Script Start-->
<script type="text/javascript">

    $("#updateData").on('click', function () {

        var getuserval = $("#uuid").val();
        var fnm = $("#fname").val();
        var rolevalid = $("#roleIDAjax").val();
        var stateVal1 = $("#stateIDAjax").val();
        var distVal1 = $("#districtIDAjax").val();
        var sttaus = $("input[name='active']:checked").val();
        var phone = $("#phone").val();
        var inputMessage = new Array("Full name", "Role", "State", "District", "Mobile");
        $('.error').hide();
        if (fnm == "")
        {
            $('#fname').after('<span class="error"> Please enter your ' + inputMessage[0] + '</span>');
            return false;
        }
        else if (rolevalid == "" || rolevalid == 0)
        {
            $('#roleIDAjax').after('<span class="error"> Please Select your ' + inputMessage[1] + '</span>');
            return false;
        }

        else if (stateVal1 == "" || stateVal1 == 0)
        {
            $('#stateIDAjax').after('<span class="error"> Please Select your ' + inputMessage[2] + '</span>');
            return false;
        }

        else if (distVal1 == "" || distVal1 == 0)
        {
            $('#districtIDAjax').after('<span class="error"> Please Select your ' + inputMessage[3] + '</span>');
            return false;
        }

        else if (phone == "")
        {
            $('#phone').after('<span class="error"> Please Enter your ' + inputMessage[4] + '</span>');
            return false;
        }

        else
        {
            $('.error').hide();

            url = "<?php echo base_url() . 'user/updateUser/' ?>" + getuserval
            $.ajax({
                type: "POST",
                url: url,
                data: {"getuserval": getuserval, "fnm": fnm, "rolevalid": rolevalid, "stateVal1": stateVal1, "distVal1": distVal1, "phone": phone, "sttaus": sttaus},
                success: function (data) {
                    //alert(data);
                    if (data == "success")
                    {
                        swal("Success!", "The record has been updated.", "success");
                        // $("#msgId").text("Data is Updated successfully !!");
                        // $("#msgId").css('color','green');
                        //$("#editsizemodal").modal("show");
                    }
                    else
                    {
                        swal("Danger", "The record could not be updated!!", "error");
                        // $("#msgId").text("Data is not Updated !!");
                        // $("#msgId").css('color','red');
                        //$("#editsizemodal").modal("show");
                    }

                },
                failure: function (data) {
                    alert('Failure!');
                }
            });
        }

        //alert("Hello");

    });

</script>
<script type="text/javascript">
    // $(document).ready(function() {   

      $('select[name="statename"]').on('change', function() {

        var stateID = $(this).val();
        //alert(stateID);
        var url1 = '<?php echo base_url(); ?>';
        if (stateID) {
          $.ajax({

            url: url1 + 'Dailyreporting/dailyreportform_Ajax/' + stateID,
            type: "GET",
            dataType: "json",
            success: function(data) {

              $('select[name="districtname"]').empty();
              $('select[name="districtname"]').append('<option value="">--Select District--</option>');
              $.each(data, function(key, value) {
                        // alert(value);
                        $('select[name="districtname"]').append('<option value="' + value.District_ID + '">' + value.District_Name + '</option>');
                      });
            }
          });
        } else {
          $('select[name="districtname"]').empty();
          $('select[name="districtname"]').append('<option value="">Select District</option>');
        }
      });
    //});

  </script>
<!-- Get CHC DROPDOWN VALUE BAsed On District Ended -->

<script type="text/javascript">
    $(".deleteUser").click(function () {

        var id = $(this).attr("data-id")

        swal({
            title: "DELETE?",
            text: "Are you sure you want to delete this record!",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "DELETE",
            cancelButtonText: "CANCEL",
            closeOnConfirm: true,
            closeOnCancel: false
        },
        function (isConfirm) {

            if (isConfirm) {
                $.ajax({
                    url: "<?php echo base_url('User/deleteUser') ?>",
                    type: 'POST',
                    data: {did: id},
                    error: function () {
                        return false;
                    },
                    success: function (data) {

                        swal("Deleted!", "The record has been deleted.", "success");
                        location.reload();
                    }
                });
            }
            else
            {
                swal("Cancelled", "The record is safe!!", "error");
            }
        });

    });
</script>
</body>
</html>




