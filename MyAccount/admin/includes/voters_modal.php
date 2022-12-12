<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Add New Voter</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="voters_add.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="firstname" class="col-sm-3 control-label">Firstname</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="firstname" name="firstname" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="lastname" class="col-sm-3 control-label">Lastname</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="lastname" name="lastname" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Photo</label>
                    <div class="col-sm-9">
                      <input type="file" id="photo" name="photo" multiple accept="image/*" >
                    </div>
                </div>

                <div class="form-group">
                    <label for="birth_date" class="col-sm-3 control-label">Birth date</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="birth_date" id="birth_date" placeholder="MM-DD-YYYY" />
                    </div>
                </div>

                <div class="form-group">
                    <label for="gender" class="col-sm-3 control-label">Gender</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="gender" id="gender" placeholder="Male or Female" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="phone_number" class="col-sm-3 control-label">Phone number</label>
                    <div class="col-sm-9">
                      <input type="number" class="form-control" name="phone_number" id="phone_number" placeholder="+91-1234567890"/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="mm" class="col-sm-3 control-label">Metamask wallet address</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="mm" id="mm" />
                    </div>
                </div>

                <div class="form-group">
                    <label for="aadhar_card" class="col-sm-3 control-label">Aadhar Card Number</label>
                    <div class="col-sm-9">
                      <input type="number" class="form-control" name="aadhar_card" id="aadhar_card" placeholder="1234-1234-1234"/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">
                      <input type="email" class="form-control" name="email" id="email" placeholder="example@email.com"/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="st1" class="col-sm-3 control-label">House/Building/ Apartment No.</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="st1" id="st1"  />
                    </div>
                </div>

                <div class="form-group">
                    <label for="st2" class="col-sm-3 control-label">Street/Area/ Locality/Road</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="st2" id="st2" />
                    </div>
                </div>

                <div class="form-group">
                    <label for="tv" class="col-sm-3 control-label">Town/Village</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="tv" id="tv"/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="pinc" class="col-sm-3 control-label">Pincode</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="pinc" id="pinc"/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="city" class="col-sm-3 control-label">City</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="city" id="city"/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="state" class="col-sm-3 control-label">State</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="state" id="state"/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="aadhar" class="col-sm-3 control-label">Aadhar Copy</label>
                    <div class="col-sm-9">
                      <input type="file" id="aadhar" name="aadhar" multiple accept=".pdf,.doc">
                    </div>
                </div>

                <div class="form-group">
                    <label for="tv1" class="col-sm-3 control-label">Birth Town/Village</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="tv1" id="tv1"/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="city1" class="col-sm-3 control-label">Birth City</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="city1" id="city1"/>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Edit Voter</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="voters_edit.php">
                <input type="hidden" class="id" name="id">
                <div class="form-group">
                    <label for="edit_firstname" class="col-sm-3 control-label">Firstname</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_firstname" name="firstname">
                    </div>
                </div>

                <div class="form-group">
                    <label for="edit_lastname" class="col-sm-3 control-label">Lastname</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_lastname" name="lastname">
                    </div>
                </div>

                <div class="form-group">
                    <label for="edit_password" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="edit_password" name="password">
                    </div>
                </div>

                <div class="form-group">
                    <label for="birth_date" class="col-sm-3 control-label">Birth date</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="birth_date" id="birth_date" placeholder="MM-DD-YYYY" />
                    </div>
                </div>

                <div class="form-group">
                    <label for="gender" class="col-sm-3 control-label">Gender</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="gender" id="gender" placeholder="Male or Female" />
                    </div>
                </div>

                <div class="form-group">
                    <label for="phone_number" class="col-sm-3 control-label">Phone number</label>
                    <div class="col-sm-9">
                      <input type="number" class="form-control" name="phone_number" id="phone_number" placeholder="+91-1234567890"/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="mm" class="col-sm-3 control-label">Metamask wallet address</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="mm" id="mm" />
                    </div>
                </div>

                <div class="form-group">
                    <label for="aadhar_card" class="col-sm-3 control-label">Aadhar Card Number</label>
                    <div class="col-sm-9">
                      <input type="number" class="form-control" name="aadhar_card" id="aadhar_card" placeholder="1234-1234-1234"/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">
                      <input type="email" class="form-control" name="email" id="email" placeholder="example@email.com"/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="st1" class="col-sm-3 control-label">House/Building/ Apartment No.</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="st1" id="st1"  />
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="st2" class="col-sm-3 control-label">Street/Area/ Locality/Road</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="st2" id="st2" />
                    </div>
                </div>

                <div class="form-group">
                    <label for="tv" class="col-sm-3 control-label">Town/Village</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="tv" id="tv"/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="pinc" class="col-sm-3 control-label">Pincode</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="pinc" id="pinc"/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="city" class="col-sm-3 control-label">City</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="city" id="city"/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="state" class="col-sm-3 control-label">State</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="state" id="state"/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="tv1" class="col-sm-3 control-label">Birth Town/Village</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="tv1" id="tv1"/>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="city1" class="col-sm-3 control-label">Birth City</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="city1" id="city1"/>
                    </div>
                </div>



            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Deleting...</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="voters_delete.php">
                <input type="hidden" class="id" name="id">
                <div class="text-center">
                    <p>DELETE VOTER</p>
                    <h2 class="bold fullname"></h2>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> Delete</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Update Photo -->
<div class="modal fade" id="edit_photo">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b><span class="fullname"></span></b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="voters_photo.php" enctype="multipart/form-data">
                <input type="hidden" class="id" name="id">
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Photo</label>

                    <div class="col-sm-9">
                      <input type="file" id="photo" name="photo" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="upload"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>


     