<div class="modal fade" id="edit_domain{{$domain->id}}">


    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center">Edit Member</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="text-danger">The field labels marked with * are required input fields.</p>
                <form action="{{route('domains.update', $domain->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                      <div class="row">
                          <div class="col-md-6" data-select2-id="30">
                              <div class="form-group" data-select2-id="29">
                                  <label>Customer Name</label>
                                  <select name="cust_id" class="form-control" style="width: 100%;">
                                      @foreach ($customers as $customer)
                                      <option value="{{ $customer->id }}" {{$customer->id == $domain->cust_id ? 'Selected': ''}}>{{ $customer->name ?? '' }}</option>
                                      @endforeach
                                  </select>
                                  @if($errors->has('cust_id'))
                                  <span class="text-danger">{{$errors->first('cust_id')}}</span>
                                  @endif()

                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label for="exampleInputEmail1"> Domain Name <span style="color:red;"> *</span></label>
                                  <input type="text" name="domain_name" required value="{{$domain->domain_name }}" class="form-control" id="exampleInputEmail1">
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label for="exampleInputEmail1"> Author Name</label>
                                  <input type="text" name="domain_author_name" value="{{$domain->domain_author_name}}" class="form-control" id="exampleInputEmail1">
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Yearly Price<span style="color:red;"> *</span></label>
                                  <input type="text" name="domain_yearly_price" required value="{{$domain->domain_yearly_price}}" class="form-control" id="exampleInputEmail1">

                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Start Date</label>
                                  <input type="date" name="domain_start_date" value="{{$domain->domain_start_date}}" class="form-control" id="exampleInputEmail1">
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Exp: Date</label>
                                  <input type="date" name="domain_expiry_date" value="{{$domain->domain_expiry_date}}" class="form-control" id="exampleInputPassword1">
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Hosting Space</label>
                                  <input type="text" name="hosting_space" value="{{$domain->hosting_space}}" class="form-control" id="exampleInputPassword1">
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Hosting Author</label>
                                  <input type="text" name="hosting_author_name" value="{{$domain->hosting_author_name}}" class="form-control" id="exampleInputPassword1">
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Hosting Start Date</label>
                                  <input type="date" name="hosting_start_date" value="{{$domain->hosting_start_date}}" class="form-control" id="exampleInputPassword1">
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Hosting Exp: Date</label>
                                  <input type="date" name="hosting_expiry_date" value="{{$domain->hosting_expiry_date}}" class="form-control" id="exampleInputPassword1">
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Hosting Yearly Price</label>
                                  <input type="text" name="hosting_yearly_price" value="{{$domain->hosting_yearly_price}}" class="form-control" id="exampleInputPassword1">
                              </div>
                          </div>
                          <div class="col-md-6"></div>
                          <div class="card-footer">
                              <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <div type="" class=""></div>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
