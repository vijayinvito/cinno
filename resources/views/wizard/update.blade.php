@include('wizard.header')
<div class="wrapper">
        <form method="post" action="{{ route('update', $Plan[0]->id) }}" >
        @CSRF
            <div id="wizard">
                <!-- SECTION 0 -->
                
                <h4></h4>
                <section>
                <h4>Plan Name</h4>
                <br>
                <h6 style="color:red">* all fields are mandatory</h6>
                <br>
                <table border="1px" cellpadding="5" cellspacing="0" width="100%" class="tb_0">
                    <tr bgcolor='silver'>
                        <th>Plan Name</th>
                        
                    </tr>
               
                    @foreach ($Plan as $item)
                    <tr><td>
                            <input type="text" hidden required class="form-control" name='id' value={{session()->get('data')['id']}}>
                            <input type="text" value ="{{$item->plan_name}}" required placeholder="Plan Name" class="form-control" name='plan'></td>
                            </tr>
                    @endforeach
                   
                </table>

                <br>
               
                </section>  
                <!-- SECTION 1 -->
                
                <h4></h4>
                <section>
                <h4>Pandemic Team</h4>
                <br>
                <h6 style="color:red">* all fields are mandatory</h6>
                <br>
                <table border="1px" cellpadding="5" cellspacing="0" width="100%" class="tb_1">
                    <tr bgcolor='silver'>
                        <th>Name</th>
                        <th>Role</th>
                        <th>Responsbility</th>
                    </tr>
                   
                    @foreach ($Pandemic as $item)
                    <tr> <td><input type="text" value ="{{$item->name}}"  required placeholder="Name" class="form-control" name='tb1_name[]'></td>
                        <td><input type="text" value ="{{$item->role}}" required placeholder="Role" class="form-control" name='tb1_role[]'></td>
                        <td><input type="text"  value ="{{$item->responsbility}}" required placeholder="Responsibility" class="form-control" name='pt_resp[]'></td>
                        </tr>
                    @endforeach
                    
                </table>
                    {{-- <div class="form-holder">
                        <input type="text"  required placeholder="Name" class="form-control">
                    </div>
                    <div class="form-holder">
                        <input type="text"  required placeholder="Role" class="form-control">
                    </div>
                    <div class="form-holder">
                        <input type="text"  required placeholder="Responsibility" class="form-control">
                    </div> --}}
                <br>
                <a href="#" id="add_1">+ add new item</a>
                </section>

                <!-- SECTION 2 -->
                
                <h4></h4>
                <section>
                <h4>Plan Activation Authority</h4>
                <br>
                <h6 style="color:red">* all fields are mandatory</h6>
                <br>
                <table border="1px" cellpadding="5" cellspacing="0" width="100%" class="tb_2">
                    <tr bgcolor='silver'>
                        <th>Name</th>
                        <th>Title</th>
                    </tr>
                    @foreach ($Authority as $item)
                    <tr><td>
                            <input type="text"  value ="{{$item->name}}"   required placeholder="Name" class="form-control" name="tb2_name[]">
                        </td>
                        <td>
                            <input type="text"  value ="{{$item->title}}"   required placeholder="Title" class="form-control" name="tb2_title[]">
                        </td> </tr>
                        @endforeach
                   
                </table>
                <br>
                <a href="#" id="add_2">+ add new item</a>
                </section>                

                <!-- SECTION 3 -->
                
                <h4></h4>
                <section>
                <h4>Critical Functions</h4>
                <br>
                <h6 style="color:red">* all fields are mandatory</h6>
                <br>
                <table border="1px" cellpadding="5" cellspacing="0" width="100%" class="tb_3">
                    <tr bgcolor='silver'>
                        <th>Priority</th>
                        <th>Critical Function Name</th>
                    </tr>
                    @foreach ($Critical as $item)
                    <tr>
                        <td><input type="text" value ="{{$item->priority}}"  required placeholder="Title" class="form-control" name="tb3_priority[]" value="1" ></td>
                        <td><input type="text" value ="{{$item->name}}"  required placeholder="Title" class="form-control" name="tb3_function_name[]"
                            value="Call Center"></td>
                    </tr>
                    @endforeach
                  
                </table>
                <br>
                <a href="#" id="add_3">+ add new item</a>
                </section>

                <!-- SECTION 4 -->
                
                <h4></h4>
                <section>
                <h4>Key Staff</h4>
                <br>
                <h6 style="color:red">* all fields are mandatory</h6>
                <br>
                <table border="1px" cellpadding="5" cellspacing="0" width="100%" class="tb_4">
                    <tr bgcolor='silver'>
                        <th>Name</th>
                        <th>Department</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Has Remote Work Capability</th>
                    </tr>
                    @foreach ($Keystaf as $item)
                    <tr>
                        <td><input type="text"  value ="{{$item->name}}"  required placeholder="Name" class="form-control" name="tb4_name[]"></td>
                        <td><input type="text"  value ="{{$item->department}}"   required placeholder="Department" class="form-control" name="tb4_dept[]"></td>
                        <td><input type="text"  value ="{{$item->phone}}"  required placeholder="Phone" class="form-control" name="tb4_phone[]"></td>
                        <td><input type="text"  value ="{{$item->email}}"  placeholder="Email" class="form-control" name="tb4_email[]"></td>
                        <td>
                            <select name="tb4_remote[]" id="remote" class="form-control">
                                <option @if($item->remote == 1 ) selected @endif value="1">Yes</option>
                                <option  @if($item->remote == 0 ) selected @endif value="0">No</option>
                            </select>
                        </td>
                    </tr>
                    @endforeach
                </table>
                <br>
                <a href="#" id="add_4">+ add new item</a>
                </section>                

                <!-- SECTION 5 -->
                
                <h4></h4>
                <section>
                <h4>Required Resources</h4>
                <br>
                <h6 style="color:red">* all fields are mandatory</h6>
                <br>
                <table border="1px" cellpadding="5" cellspacing="0" width="100%" class="tb_5">
                    <tr bgcolor='silver'>
                        <th>Resource Name</th>
                        <th>Quantity needed</th>
                    </tr>
                    @foreach ($Resources as $item)
                    <tr>
                        <td><input type="text"  value ="{{$item->name}}" required placeholder="Resource Name" class="form-control" name="tb5_resource[]"></td>
                        <td><input type="number" value ="{{$item->quantity}}" placeholder="Quantity needed" class="form-control" name="tb5_quan[]"></td>
                    </tr>
                    @endforeach

                </table>
                <br>
                <a href="#" id="add_5">+ add new item</a>
                </section>              

                <!-- SECTION 6 -->
                
                <h4></h4>
                <section>
                <h4>Key Supplier/Vendors</h4>
                <br>
                <h6 style="color:red">* all fields are mandatory</h6>
                <br>
                <table border="1px" cellpadding="5" cellspacing="0" width="100%" class="tb_6">
             
                    <tr bgcolor='silver'>
                        <th>Name</th>
                        <th>Service Provided</th>
                        <th>Address</th>
                        <th>Address 2</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Zip</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Supplier/Vendor Representative</th>
                        <th>Supplier/Vendor Representative Phone</th>
                        <th>Supplier/Vendor Representative Email</th>
                    </tr>
                    @foreach ($Vendors as $item)
                    <tr>
                        <td><input type="text"  value ="{{$item->name}}"  required placeholder="Name" class="form-control" name="tb6_name[]"></td>
                        <td><input type="text"  value ="{{$item->service}}"   required placeholder="Service Provided" class="form-control" name="tb6_service[]"></td>
                        <td><input type="text"  value ="{{$item->address}}"  required placeholder="Address" class="form-control" name="tb6_address[]"></td>
                        <td><input type="text"  value ="{{$item->address_2}}"  required placeholder="Address 2" class="form-control" name="tb6_address2[]"></td>
                        <td><input type="text"  value ="{{$item->city}}"  required placeholder="City" class="form-control" name="tb6_city[]"></td>
                        <td><input type="text"  value ="{{$item->status}}"  required placeholder="State" class="form-control" name="tb6_state[]"></td>
                        <td><input type="text"  value ="{{$item->zip}}"  required placeholder="Zip" class="form-control" name="tb6_zip[]"></td>
                        <td><input type="number"  value ="{{$item->phone}}"  placeholder="Phone" class="form-control" name="tb6_phone[]"></td>
                        <td><input type="text"  value ="{{$item->email}}"  placeholder="Email" class="form-control" name="tb6_email[]"></td>
                        <td><input type="text"  value ="{{$item->supplier_representative}}"  required placeholder="Supplier/Vendor Representative" class="form-control" name="tb6_supplier[]"></td>
                        <td><input type="number"  value ="{{$item->Vendor_email}}"  placeholder="Supplier/Vendor Representative Phone" class="form-control" name="tb6_supplierphone[]"></td>
                        <td><input type="text"  value ="{{$item->vendor_phone}}"  placeholder="Supplier/Vendor Representative Email" class="form-control" name="tb6_supplieremail[]"></td>
                    </tr>
                    @endforeach
                </table>
                <br>
                <a href="#" id="add_6">+ add new item</a>                                       
                </section>                

                <!-- SECTION 7 -->
                
                <h4></h4>
                <section>
                <h4>Stakeholders</h4>
                <br>
                <h6 style="color:red">* all fields are mandatory</h6>
                <br>
                <table border="1px" cellpadding="5" cellspacing="0" width="100%" class="tb_7">
                    <tr bgcolor='silver'>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Phone</th>
                        <th>Email</th>
                    </tr>
                    @foreach ($Stakeholders as $item)
                    <tr>
                        <td><input type="text" value ="{{$item->name}}" required placeholder="Name" class="form-control" name="tb7_name[]"></td>
                        <td><input type="text"  value ="{{$item->desceiption}}" required placeholder="Description" class="form-control" name="tb7_desc[]"></td>
                        <td><input type="number" value ="{{$item->phone}}" placeholder="Phone" class="form-control" name="tb7_phone[]"></td>
                        <td><input type="text" value ="{{$item->email}}" placeholder="Email" class="form-control" name="tb7_email[]"></td>
                    </tr>
                    @endforeach
                </table>
                <br>
                <a href="#" id="add_7">+ add new item</a>
                </section>              

                <!-- SECTION 8 -->
                
                <h4></h4>
                <section>
                <h4>Contact Agencies</h4>
                <br>
                <h6 style="color:red">* all fields are mandatory</h6>
                <br>
                <table border="1px" cellpadding="5" cellspacing="0" width="100%" class="tb_8">
                    <tr bgcolor='silver'>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Address 2</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Zip</th>
                        <th>Phone</th>
                        <th>Email</th>
                    </tr> 
                     @foreach ($Agencies as $item)
                    <tr>
                        <td><input type="text"  value ="{{$item->name}}" required placeholder="Name" class="form-control" name="tb8_name[]"></td>
                        <td><input type="text"  value ="{{$item->address}}" required placeholder="Address" class="form-control" name="tb8_address[]"></td>
                        <td><input type="text"  value ="{{$item->address_2}}" required placeholder="Address 2" class="form-control" name="tb8_address2[]"></td>
                        <td><input type="text"  value ="{{$item->city}}" required placeholder="City" class="form-control" name="tb8_city[]"></td>
                        <td><input type="text"  value ="{{$item->state}}" required placeholder="State" class="form-control" name="tb8_state[]"></td>
                        <td><input type="text"  value ="{{$item->zip}}" required placeholder="Zip" class="form-control" name="tb8_zip[]"></td>
                        <td><input type="number" value ="{{$item->phone}}" placeholder="Phone" class="form-control" name="tb8_phone[]"></td>
                        <td><input type="text"  value ="{{$item->email}}" placeholder="Email" class="form-control" name="tb8_email[]"></td>
                    </tr>
                    @endforeach
                </table>  
                <br>
                <a href="#" id="add_8">+ add new item</a>                                 
                </section>              


                <!-- SECTION 9 -->
                
                <h4></h4>
                <section>
                <h4>Action Items</h4>
                <br>
                <h6 style="color:red">* all fields are mandatory</h6>
                <br>
                <table border="1px" cellpadding="5" cellspacing="0" width="100%" class="tb_9">
                    <tr bgcolor='silver'>
                        <th>Action Item</th>
                        <th>Assigned To</th>
                    </tr>
                    @foreach ($Actionitems as $item)
                    <tr>
                        <td><input type="text" value ="{{$item->name}}" required placeholder="Action Item" class="form-control" name="tb9_actionitem[]"></td>
                        <td><input type="text" value ="{{$item->assigned_to}}" required placeholder="Assigned To" class="form-control" name="tb9_assign[]"></td>
                    </tr>
                    @endforeach
                </table>
                <br>
                <a href="#" id="add_9">+ add new item</a>
                </section>     


                   <h4></h4>
                <section>
                <h4>Submit Request</h4>
                <br>
                <input type="submit" Value="Submit" class="form-control" name="submit"> 
                </section>         
            </div>
        </form>
    </div>

<script src="{{config('app.url()')}}/wizard/js/jquery-3.3.1.min.js"></script>
<script src="{{config('app.url()')}}/wizard/js/main.js"></script>

<script>
    $(function (){
        $('#add_1').click(function(){
            $('.tb_1').append('<tr><td><input type="text"  required placeholder="Name" class="form-control" name="tb1_name[]"></td><td><input type="text"  required placeholder="Role" class="form-control" name="tb1_role[]"></td><td><input type="text"  required placeholder="Responsibility" class="form-control" name="pt_resp[]"></td></tr>');
        });

        $('#add_2').click(function(){
            $('.tb_2').append('<tr><td><input type="text"  required placeholder="Name" class="form-control" name="tb2_name[]"></td><td><input type="text"  required placeholder="Title" class="form-control" name="tb2_title[]"></td></tr>');
        });
        pri = 8;
        $('#add_3').click(function(){
            pri = pri + 1 ;
            $('.tb_3').append('<tr><td><input type="text"  required placeholder="Title" class="form-control" name="tb3_priority[]" value="'+pri+'" disabled></td><td><input type="text"  required placeholder="Title" class="form-control" name="tb3_function_name[]" value=""></td></tr>');
        });

        $('#add_4').click(function(){
            $('.tb_4').append('<tr><td><input type="text"  required placeholder="Name" class="form-control" name="tb4_name[]"></td><td><input type="text"  required placeholder="Department" class="form-control"></td><td><input type="text"  required placeholder="Phone" class="form-control"></td><td><input type="text" placeholder="Email" class="form-control"></td><td><select name="remote" id="remote" class="form-control"><option value="1">Yes</option><option value="0">No</option></select></td></tr>');
        });

        $('#add_5').click(function(){
            $('.tb_5').append('<tr><td><input type="text"  required placeholder="Resource Name" class="form-control" name="tb5_resource[]"></td><td><input type="number" placeholder="Quantity needed" class="form-control" name="tb5_quan[]"></td></tr>');
        });

        $('#add_6').click(function(){
            $('.tb_6').append('<tr><td><input type="text"  required placeholder="Name" class="form-control" name="tb6_name[]"></td><td><input type="text"  required placeholder="Service Provided" class="form-control" name="tb6_service[]"></td><td><input type="text"  required placeholder="Address" class="form-control" name="tb6_address[]"></td><td><input type="text"  required placeholder="Address 2" class="form-control" name="tb6_address2[]"></td><td><input type="text"  required placeholder="City" class="form-control" name="tb6_city[]"></td><td><input type="text"  required placeholder="State" class="form-control" name="tb6_state[]"></td><td><input type="text"  required placeholder="Zip" class="form-control" name="tb6_zip[]"></td><td><input type="number" placeholder="Phone" class="form-control" name="tb6_phone[]"></td><td><input type="text" placeholder="Email" class="form-control" name="tb6_email[]"></td><td><input type="text"  required placeholder="Supplier/Vendor Representative" class="form-control" name="tb6_supplier[]"></td><td><input type="number" placeholder="Supplier/Vendor Representative Phone" class="form-control" name="tb6_supplierphone[]"></td><td><input type="text" placeholder="Supplier/Vendor Representative Email" class="form-control" name="tb6_supplieremail[]"></td></tr>');
        });

        $('#add_7').click(function(){
            $('.tb_7').append('<tr><td><input type="text"  required placeholder="Name" class="form-control" name="tb7_name[]"></td><td><input type="text"  required placeholder="Description" class="form-control" name="tb7_desc[]"></td><td><input type="number" placeholder="Phone" class="form-control" name="tb7_phone[]"></td><td><input type="text" placeholder="Email" class="form-control" name="tb7_email[]"></td></tr>');
        });

        $('#add_8').click(function(){
            $('.tb_8').append('<tr><td><input type="text"  required placeholder="Name" class="form-control" name="tb8_name[]"></td><td><input type="text"  required placeholder="Address" class="form-control" name="tb8_address[]"></td><td><input type="text"  required placeholder="Address 2" class="form-control" name="tb8_address2[]"></td><td><input type="text"  required placeholder="City" class="form-control" name="tb8_city[]"></td><td><input type="text"  required placeholder="State" class="form-control" name="tb8_state[]"></td><td><input type="text"  required placeholder="Zip" class="form-control" name="tb8_zip[]"></td><td><input type="number" placeholder="Phone" class="form-control" name="tb8_phone[]"></td><td><input type="text" placeholder="Email" class="form-control" name="tb8_email[]"></td></tr>');
        });

        $('#add_9').click(function(){
            $('.tb_9').append('<tr><td><input type="text"  required placeholder="Action Item" class="form-control" name="tb9_actionitem[]"></td><td><input type="text"  required placeholder="Assigned To" class="form-control" name="tb9_assign[]"></td></tr>');
        });


        $('#finish').click(function(){
            console.log('click');
        });

    });

</script>

@include('wizard.footer')