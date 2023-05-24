
<?php include 'header.php';?>

<div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Products /</span> Add</h4>

              <div class="row">
                <div class="col-md-12">
                 
                  <div class="card mb-4">
                    <h5 class="card-header">Add Products</h5>
                    <!-- Account -->
                    <div class="card-body">
                      <div class="d-flex align-items-start align-items-sm-center gap-4">
                       
                    
                      </div>
                    </div>
                    <hr class="my-0" />
                    <div class="card-body">
                      <form id="formAccountSettings" method="POST" onsubmit="return false">
                        <div class="row">
                          <div class="mb-3 col-md-6">
                            <label for="firstName" class="form-label">S No.</label>
                            <input
                              class="form-control"
                              type="text"
                              id="firstName"
                              name="firstName"
                              placeholder="S No."
                              autofocus
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="lastName" class="form-label">Product Title</label>
                            <input class="form-control" type="text" name="lastName" id="lastName" placeholder="Product Title" />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">Product Sub Title</label>
                            <input
                              class="form-control"
                              type="text"
                              id="email"
                              name="email"
                              placeholder="Product Sub Title"
                              
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="organization" class="form-label">Price</label>
                            <input
                              type="text"
                              class="form-control"
                              id="organization"
                              name="organization"
                              placeholder="Price"
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label class="form-label" for="phoneNumber">Colours</label>
                            <div class="input-group input-group-merge">
                             
                              <input
                                type="text"
                                id="phoneNumber"
                                name="phoneNumber"
                                class="form-control"
                                placeholder="Colours"
                              />
                            </div>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="address" class="form-label">Product details</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="Product details" />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="state" class="form-label">Weight</label>
                            <input class="form-control" type="text" id="state" name="state" placeholder="Weight" />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="zipCode" class="form-label">Dimensions</label>
                            <input
                              type="text"
                              class="form-control"
                              id="zipCode"
                              name="zipCode"
                              placeholder="Dimensions"
                             
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="zipCode" class="form-label">Product Category</label>
                            <input
                              type="text"
                              class="form-control"
                              id="zipCode"
                              name="zipCode"
                              placeholder="Product Category"
                             
                            />
                          </div>

                          <div class="mb-3 col-md-6">
                            <label for="zipCode" class="form-label">Model</label>
                            <input
                              type="text"
                              class="form-control"
                              id="zipCode"
                              name="zipCode"
                              placeholder="Model"
                             
                            />
                          </div>

                          <div class="mb-3 col-md-6">
                            <label for="zipCode" class="form-label">Shipping</label>
                            <input
                              type="text"
                              class="form-control"
                              id="zipCode"
                              name="zipCode"
                              placeholder="Shipping"
                             
                            />
                          </div>

                          <div class="mb-3 col-md-6">
                            <label for="zipCode" class="form-label">Care Info	</label>
                            <input
                              type="text"
                              class="form-control"
                              id="zipCode"
                              name="zipCode"
                              placeholder="Care Info"
                             
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="zipCode" class="form-label">Brand</label>
                            <input
                              type="text"
                              class="form-control"
                              id="zipCode"
                              name="zipCode"
                              placeholder="Brand"
                             
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="zipCode" class="form-label">Payment mode</label>
                            <input
                              type="text"
                              class="form-control"
                              id="zipCode"
                              name="zipCode"
                              placeholder="Payment mode"
                             
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="zipCode" class="form-label">Dimensions</label>
                            <input
                              type="text"
                              class="form-control"
                              id="zipCode"
                              name="zipCode"
                              placeholder="Dimensions"
                             
                            />
                          </div>

                        </div>
                        <div class="mt-2">
                          <button type="submit" class="btn btn-primary me-2">Save</button>
                          <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                        </div>
                      </form>
                    </div>
                    <!-- /Account -->
                  </div>
                  
                </div>
              </div>
            </div>
            <!-- / Content -->



<?php include 'footer.php';?>