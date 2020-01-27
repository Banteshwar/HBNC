<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumb-->
        <div class="row pt-2 pb-2">
            <div class="col-sm-9">
                <h4 class="page-title">HBNC Report</h4>
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
                                <div class="col-md-4">
                                   <!--  <?php $state_required = true; ?>
                                    <?php $this->load->view('common/state_select_box.php'); ?> -->
                                    <div class="form-group">
                                        <label>State</label>
                                        <select name="State_ID" class="form-control error">
                                            <option value="0" selected="selected">-- Select a State --</option>
                                            <option value="28" selected="">Andhra Pradesh</option>
                                            <option value="35">Andman &amp; Nicobar Islands</option>
                                            <option value="12">Arunachal Pradesh</option>
                                            <option value="18">Assam</option>
                                            <option value="10">Bihar</option>
                                            <option value="4">Chandigarh</option>
                                            <option value="22">Chhattisgarh</option>
                                            <option value="26">Dadra &amp; Nagar Haveli</option>
                                            <option value="25">Daman &amp; Diu</option>
                                            <option value="7">Delhi</option>
                                            <option value="30">Goa</option>
                                            <option value="24">Gujarat</option>
                                            <option value="6">Haryana</option>
                                            <option value="2">Himachal Pradesh</option>
                                            <option value="1">Jammu &amp; Kashmir</option>
                                            <option value="20">Jharkhand</option>
                                            <option value="29">Karnataka</option>
                                            <option value="32">Kerala</option>
                                            <option value="31">Lakshadweep</option>
                                            <option value="23">Madhya Pradesh</option>
                                            <option value="27">Maharashtra</option>
                                            <option value="14">Manipur</option>
                                            <option value="17">Meghalaya</option>
                                            <option value="15">Mizoram</option>
                                            <option value="13">Nagaland</option>
                                            <option value="21">Odisha</option>
                                            <option value="34">Puducherry</option>
                                            <option value="3">Punjab</option>
                                            <option value="8">Rajasthan</option>
                                            <option value="11">Sikkim </option>
                                            <option value="33">Tamil Nadu</option>
                                            <option value="36">Telangana</option>
                                            <option value="16">Tripura</option>
                                            <option value="9">Uttar Pradesh</option>
                                            <option value="5">Uttarakhand</option>
                                            <option value="19">West Bengal</option>
                                        </select>
                                        <span class="form_error"></span>
                                    </div>
                                </div>                                
                                
                                    <div class="col-md-4">
                                        <div class="form-group" style="margin-top: 30px;">
                                            <button type="submit" name="srch" class="btn btn-primary px-5 active"><i aria-hidden="true" class="fa fa-search"></i> Search</button>
                                        </div>
                                    </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-body">
                         <div class="table-scrollable" style="height: 600px;">
                             <table id="" class="table table-bordered withspace">
                                        <thead>
                                            <tr>
                                                <th rowspan="2">S.No</th>
                                                <th rowspan="2">District</th>
                                                <th rowspan="2">No. of ASHAs in Place</th>
                                                <th colspan="4">&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;ASHAs trained in module 6 & 7&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;</th>
                                                <th rowspan="2">No. of ASHA started doing HBNC visit</th>
                                                <th rowspan="2">No. of New borns visited for HBNC</th>
                                                <th rowspan="2">No. of LBW/ Preterm (High Risk) baby reported out of those visited</th>
                                                <th rowspan="2">No. of Sick new borns referred</th>
                                                <th rowspan="2">No. New born deaths reported under HBNC</th>
                                                <th rowspan="2">No. of ASHA who have received HBNC payment in last quarter</th>
                                                <th rowspan="2">HBNC expenditure in this quarter (Rs.)</th>
                                                <th rowspan="2">HBNC Allocation in  2017-18 (Rs. lakhs)</th>
                                                <th rowspan="2">HBNC expenditure 2017-18 (Rs. lakhs)</th>
                                                <th rowspan="2">Percentage expenditure 2017-18</th>
                                                <th rowspan="2">HBNC Allocation in  2016-17 (Rs. lakhs)</th>
                                                <th rowspan="2">HBNC expenditure 2016-17</th>
                                                <th rowspan="2">Percentage expenditure 2016-17</th>
                                                <th rowspan="2">SNCU discharges followed up</th>
                                                <th rowspan="2">No: of low birth weight babies followed up</th>
                                                <th rowspan="2">Remarks (If any)</th>
                                            </tr>
                                             <tr>
                                                <th width="100px">R-1</th>
                                                <th width="100px">R-2</th>
                                                <th width="100px">R-3</th>
                                                <th width="100px">R-4</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             <tr>
                                                <td>1.</td>
                                                <td>Anantapur</td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td width="100px"><input type="text" class="form-control" name="" value=""></td>
                                                <td width="100px"><input type="text" class="form-control" name="" value=""></td>
                                                <td width="100px"><input type="text" class="form-control" name="" value=""></td>
                                                <td width="100px"><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                
                                            </tr>
                                             <tr>
                                                <td>2.</td>
                                                <td>Chittoor</td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                
                                            </tr>
                                             <tr>
                                                <td>3.</td>
                                                <td>East Godavari</td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                
                                            </tr>
                                             <tr>
                                                <td>4.</td>
                                                <td>Guntur</td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                
                                            </tr>
                                             <tr>
                                                <td>5.</td>
                                                <td>Kadapa</td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                
                                            </tr>
                                             <tr>
                                                <td>6.</td>
                                                <td>Krishna</td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                            </tr>
                                            <tr>
                                                <td>7.</td>
                                                <td>Kurnool</td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                            </tr>
                                            <tr>
                                                <td>8.</td>
                                                <td>Prakasam</td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                            </tr>
                                            <tr>
                                                <td>9.</td>
                                                <td>Sri Potti Sriramulu Nellore</td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                            </tr>
                                            <tr>
                                                <td>10.</td>
                                                <td>Srikakulam</td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
                                                <td><input type="text" class="form-control" name="" value=""></td>
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


