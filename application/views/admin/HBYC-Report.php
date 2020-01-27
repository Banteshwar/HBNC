<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumb-->
        <div class="row pt-2 pb-2">
            <div class="col-sm-9">
                <h4 class="page-title">HBYC Report</h4>
                <!-- <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javaScript:void();">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Events</li>
                     </ol> -->
            </div>
        </div><!-- End Breadcrumb-->

         <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header"><i class="fa fa-table"></i> Reporting</div>
                     <div class="card-body">
                        <form method='GET' action="">
                            <div class="row">
                                <div class="col-md-3">
                                    <!-- <?php $state_required = true; ?>
                                    <?php $this->load->view('common/state_select_box.php'); ?> -->
                                    <div class="form-group">

                                        <label>State</label>
                                           <!--  <font color="red">*</font> -->
                                            <select name="State_ID" class="form-control error" required="1">
                                            <option value="0">-- Select a State --</option>
                                            <option value="1" selected="selected">Andhra Pradesh</option>
                                            <option value="2">Arunachal Pradesh</option>
                                            <option value="3">Assam</option>
                                            <option value="4">BIHAR</option>
                                            <option value="5">Chhattisgarh</option>
                                            <option value="6">Dadra &amp; Nagar Haveli</option>
                                            <option value="7">Delhi</option>
                                            <option value="8">Gujarat</option>
                                            <option value="9">Haryana</option>
                                            <option value="10">Himachal Pradesh</option>
                                            <option value="11">Jammu &amp; Kashmir</option>
                                            <option value="12">Jharkhand</option>
                                            <option value="13">Karnataka</option>
                                            <option value="14">Kerala</option>
                                            <option value="15">Madhya Pradesh</option>
                                            <option value="16">Maharashtra</option>
                                            <option value="17">Manipur</option>
                                            <option value="18">Meghalaya</option>
                                            <option value="19">Mizoram</option>
                                            <option value="20">Nagaland</option>
                                            <option value="21">Odisha</option>
                                            <option value="22">Punjab</option>
                                            <option value="23">Rajasthan</option>
                                            <option value="24">Tamil Nadu</option>
                                            <option value="25">Telangana</option>
                                            <option value="26">Tripura</option>
                                            <option value="27">UTTAR PRADESH</option>
                                            <option value="28">Uttarakhand</option>
                                            <option value="29">West Bengal</option>
                                            </select>
                                    </div>
                                </div>
                                 <div class="col-md-3">
                                   <div class="form-group">
                                    <label>District</label>
                                        <select name="District_ID" class="form-control error" required="1">
                                        <option value="0">-- Select a District --</option>
                                        <option value="85" selected="selected">Cuddapah</option>
                                        <option value="369">Vishakapatnam</option>
                                        <option value="370">Vizianagaram</option></select>
                                    </div>
                                 </div>                                 
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Month</label>
                                            <select name="State_ID" class="form-control error">
                                                <option value="0" selected="selected">-- Select Month --</option>
                                                <option value="1" selected="selected">January</option>
                                                <option value="2">February</option>
                                                <option value="3">March</option>
                                                <option value="4">April</option>
                                                <option value="5">May</option>
                                                <option value="6">June</option>
                                                <option value="7">July</option>
                                                <option value="8">August</option>
                                                <option value="9">September</option>
                                                <option value="10">October</option>
                                                <option value="11">November</option>
                                                <option value="12">December</option>
                                            </select>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Year</label>
                                            <select name="State_ID" class="form-control error">
                                                <option value="0" selected="selected">-- Select Year --</option>
                                                <option value="1">2016-17</option>
                                                <option value="2">2017-18</option>
                                                <option value="3">2018-19</option>
                                                <option value="4" selected="selected">2019-20</option>
                                            </select>
                                    </div>
                                 </div>
                                    <div class="col-md-4">
                                        <div class="form-group" style="margin-top: 5px;">
                                            <button type="submit" name="srch" class="btn btn-primary px-5 active"><i aria-hidden="true" class="fa fa-search"></i> Search</button>
                                        </div>
                                    </div>
                            </div>
                        </form>
                         <table id="" class="table table-bordered">
                                       <tbody>
                                             <tr>
                                                <th style="width:20%">Date of reporting</th>
                                                <td style="width:15%">03-12-2019</td>
                                                <th style="width:20%">Total no. of ASHA Facilitators in place</th>
                                                <td style="width:15%">279</td>
                                                <th style="width:20%">No of Blocks Reported</th>
                                                <td style="width:15%">100</td>
                                            </tr>
                                            <tr>
                                                <th>No. of ASHA Facilitators trained on HBYC till last month</th>
                                                <td width="">252</td>
                                                <th>No. of ASHAs</th>
                                                <td width="">205</td>
                                                 <th>Total no. of ANM in place</th>
                                                <td width="">65</td>
                                            </tr>
                                             <tr>
                                                <th>Total no. of ASHA trained on HBYC till last month</th>
                                                <td width="">147</td>
                                                <th>No. of ANM trained on HBYC till last month</th>
                                                <td width="">105</td>
                                                 <th>No. of ASHSs trained this month</th>
                                                <td width="">52</td>
                                            </tr>
                                             <tr>
                                                <th>No. of Supervisors (ASHA Facilitators/ANMs trained this month)</th>
                                                <td width="">252</td>
                                                
                                            </tr>

                                        </tbody>
                                    </table>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                             <table id="" class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Indicator</th>
                                                <th>3 months</th>
                                                <th>6 months</th>
                                                <th>9 months</th>
                                                <th>12 months</th>
                                                <th>15 months</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             <tr>
                                                <td>1.</td>
                                                <td>Number of children visited by ASHA</td>
                                                <td><input class="form-control" type="number" name=""></td>
                                                <td><input class="form-control" type="number" name=""></td>
                                                <td><input class="form-control" type="number" name=""></td>
                                                <td><input class="form-control" type="number" name=""></td>
                                                <td><input class="form-control" type="number" name=""></td>
                                                <td><input class="form-control" type="number" name=""></td>
                                            </tr>
                                             <tr>
                                                <td>2.</td>
                                                <td>Number of children received ORS from ASHA</td>
                                                <td></td>
                                                <td><input class="form-control" type="number" name=""></td>
                                                <td><input class="form-control" type="number" name=""></td>
                                                <td><input class="form-control" type="number" name=""></td>
                                                <td><input class="form-control" type="number" name=""></td>
                                                <td><input class="form-control" type="number" name=""></td>
                                            </tr>
                                            <tr>
                                                <td>3.</td>
                                                <td>Number of children received IFA from ASHA</td>
                                                <td></td>
                                                <td><input class="form-control" type="number" name=""></td>
                                                <td><input class="form-control" type="number" name=""></td>
                                                <td><input class="form-control" type="number" name=""></td>
                                                <td><input class="form-control" type="number" name=""></td>
                                                <td><input class="form-control" type="number" name=""></td>
                                            </tr>
                                             <tr>
                                                <td>4.</td>
                                                <td>Number of children received age appropriate immunization</td>
                                                <td><input class="form-control" type="number" name=""></td>
                                                <td><input class="form-control" type="number" name=""></td>
                                                <td><input class="form-control" type="number" name=""></td>
                                                <td><input class="form-control" type="number" name=""></td>
                                                <td><input class="form-control" type="number" name=""></td>
                                                <td><input class="form-control" type="number" name=""></td>
                                            </tr>
                                             <tr>
                                                <td>5.</td>
                                                <td>Number of sick children referred to nearest health facility</td>
                                                <td><input class="form-control" type="number" name=""></td>
                                                <td><input class="form-control" type="number" name=""></td>
                                                <td><input class="form-control" type="number" name=""></td>
                                                <td><input class="form-control" type="number" name=""></td>
                                                <td><input class="form-control" type="number" name=""></td>
                                                <td><input class="form-control" type="number" name=""></td>
                                            </tr>
                                             <tr>
                                                <td>6.</td>
                                                <td>Number of sick children referred to nearest health facility</td>
                                                <td><input class="form-control" type="number" name=""></td>
                                                <td><input class="form-control" type="number" name=""></td>
                                                <td><input class="form-control" type="number" name=""></td>
                                                <td><input class="form-control" type="number" name=""></td>
                                                <td><input class="form-control" type="number" name=""></td>
                                                <td><input class="form-control" type="number" name=""></td>
                                            </tr>
                                             <tr>
                                                <td>7.</td>
                                                <td>Number of children received adequate complementary feeding</td>
                                                <td><input class="form-control" type="number" name=""></td>
                                                <td><input class="form-control" type="number" name=""></td>
                                                <td><input class="form-control" type="number" name=""></td>
                                                <td><input class="form-control" type="number" name=""></td>
                                                <td><input class="form-control" type="number" name=""></td>
                                                <td><input class="form-control" type="number" name=""></td>
                                            </tr>
                                             <tr>
                                                <td>8.</td>
                                                <td>Number of children identified underweight (Yellow)</td>
                                                <td><input class="form-control" type="number" name=""></td>
                                                <td><input class="form-control" type="number" name=""></td>
                                                <td><input class="form-control" type="number" name=""></td>
                                                <td><input class="form-control" type="number" name=""></td>
                                                <td><input class="form-control" type="number" name=""></td>
                                                <td><input class="form-control" type="number" name=""></td>
                                            </tr>
                                            <tr>
                                                <td>9.</td>
                                                <td>Number of children identified Severe Underweight (Red)</td>
                                                <td><input class="form-control" type="number" name=""></td>
                                                <td><input class="form-control" type="number" name=""></td>
                                                <td><input class="form-control" type="number" name=""></td>
                                                <td><input class="form-control" type="number" name=""></td>
                                                <td><input class="form-control" type="number" name=""></td>
                                                <td><input class="form-control" type="number" name=""></td>
                                            </tr>
                                            <tr>
                                                <td>10.</td>
                                                <td>Number of children identified with any development delay</td>
                                                <td><input class="form-control" type="number" name=""></td>
                                                <td><input class="form-control" type="number" name=""></td>
                                                <td><input class="form-control" type="number" name=""></td>
                                                <td><input class="form-control" type="number" name=""></td>
                                                <td><input class="form-control" type="number" name=""></td>
                                                <td><input class="form-control" type="number" name=""></td>
                                            </tr>
                                            <tr>
                                                <td>11.</td>
                                                <td>Number of children identified with development delay referred to ANM/Health Facility, RBSK</td>
                                                <td><input class="form-control" type="number" name=""></td>
                                                <td><input class="form-control" type="number" name=""></td>
                                                <td><input class="form-control" type="number" name=""></td>
                                                <td><input class="form-control" type="number" name=""></td>
                                                <td><input class="form-control" type="number" name=""></td>
                                                <td><input class="form-control" type="number" name=""></td>
                                            </tr>
                                            <tr>
                                                <td>12.</td>
                                                <td>Number of ASHA received supervisory visits</td>
                                                <td><input class="form-control" type="number" name=""></td>
                                                <td><input class="form-control" type="number" name=""></td>
                                                <td><input class="form-control" type="number" name=""></td>
                                                <td><input class="form-control" type="number" name=""></td>
                                                <td><input class="form-control" type="number" name=""></td>
                                                <td><input class="form-control" type="number" name=""></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <button type="submit" name="submit" class="btn btn-primary px-5"><i class="fa fa-paper-plane" aria-hidden="true"></i> Save and Update</button>
                                                                    </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End row-->
    </div><!-- End container-fluid-->
</div><!--End content-wrapper-->


