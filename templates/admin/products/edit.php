<?= $this->element('admin/head'); ?>
<div class="container tm-mt-big tm-mb-big">
  <div class="row">
    <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
      <div class="tm-bg-primary-cm tm-block tm-block-h-auto">
        <div class="row">
          <div class="col-12">
            <h2 class="tm-block-title d-inline-block">Edit Product</h2>
          </div>
        </div>
        <div class="row tm-edit-product-row">
          <div class="col-xl-12 col-lg-12 col-md-12">
            <form action="" method="post" class="tm-edit-product-form">
              <div class="form-group mb-3">
                <label for="name">Product Name
                </label>
                <input id="name" name="name" type="text" value="Lorem Ipsum Product" class="form-control validate" />
              </div>
              <div class="form-group mb-3">
                <label for="description">Description</label>
                <textarea class="form-control validate tm-small" rows="5"
                  required>Lorem ipsum dolor amet gentrify glossier locavore messenger bag chillwave hashtag irony migas wolf kale chips small batch kogi direct trade shaman.</textarea>
              </div>
              <div class="form-group mb-3">
                <label for="category">Category</label>
                <select class="custom-select tm-select-accounts" id="category">
                  <option>Select category</option>
                  <option value="1" selected>New Arrival</option>
                  <option value="2">Most Popular</option>
                  <option value="3">Trending</option>
                </select>
              </div>
              <div class="group-classify">
                <h3 class="tm-block-title">Group 1</h3>
                <div class="form-group mb-3">
                  <label for="size">size</label>
                  <select class="custom-select tm-select-accounts" id="size">
                    <option selected>Select size</option>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                  </select>
                </div>
                <div class="form-group mb-3">
                  <label for="status">status</label>
                  <select class="custom-select tm-select-accounts" id="status">
                    <option selected>Select status</option>
                    <option value="1">unripe fruit</option>
                    <option value="2">ripen fruits</option>
                    <option value="3">medium ripe fruit</option>
                  </select>
                </div>
                <div class="form-group mb-3">
                  <label for="status">price</label>
                  <select class="custom-select tm-select-accounts" id="price">
                    <option selected>Select price</option>
                    <option value="1">10 USD</option>
                    <option value="2">11 USD</option>
                    <option value="3">12 USD</option>
                  </select>
                </div>
              </div>
              <div class="group-classify">
              <h3 class="tm-block-title">Group 2</h3>
                
                <div class="form-group mb-3">
                  <label for="size">size</label>
                  <select class="custom-select tm-select-accounts" id="size">
                    <option selected>Select size</option>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                  </select>
                </div>
                <div class="form-group mb-3">
                  <label for="status">status</label>
                  <select class="custom-select tm-select-accounts" id="status">
                    <option selected>Select status</option>
                    <option value="1">unripe fruit</option>
                    <option value="2">ripen fruits</option>
                    <option value="3">medium ripe fruit</option>
                  </select>
                </div>
                <div class="form-group mb-3">
                  <label for="status">price</label>
                  <select class="custom-select tm-select-accounts" id="price">
                    <option selected>Select price</option>
                    <option value="1">10 USD</option>
                    <option value="2">11 USD</option>
                    <option value="3">12 USD</option>
                  </select>
                </div>
              </div>
              <div class="group-classify">
              <h3 class="tm-block-title">Group 3</h3>
                <div class="form-group mb-3">
                  <label for="size">size</label>
                  <select class="custom-select tm-select-accounts" id="size">
                    <option selected>Select size</option>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                  </select>
                </div>
                <div class="form-group mb-3">
                  <label for="status">status</label>
                  <select class="custom-select tm-select-accounts" id="status">
                    <option selected>Select status</option>
                    <option value="1">unripe fruit</option>
                    <option value="2">ripen fruits</option>
                    <option value="3">medium ripe fruit</option>
                  </select>
                </div>
                <div class="form-group mb-3">
                  <label for="status">price</label>
                  <select class="custom-select tm-select-accounts" id="price">
                    <option selected>Select price</option>
                    <option value="1">10 USD</option>
                    <option value="2">11 USD</option>
                    <option value="3">12 USD</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="form-group mb-3 col-xs-12 col-sm-6">
                  <label for="expire_date">Expire Date
                  </label>
                  <input id="expire_date" name="expire_date" type="text" value="22 Oct, 2020"
                    class="form-control validate" data-large-mode="true" />
                </div>
                <div class="form-group mb-3 col-xs-12 col-sm-6">
                  <label for="stock">Units In Stock
                  </label>
                  <input id="stock" name="stock" type="text" value="19,765" class="form-control validate" />
                </div>
              </div>

          </div>
          <div class="col-xl-12 col-lg-12 col-md-12 mx-auto mb-4">
            <div class="tm-product-img-edit mx-auto">
              <img src="/admin/img/product-image.jpg" alt="Product image" class="img-fluid d-block mx-auto">
              <i class="fas fa-cloud-upload-alt tm-upload-icon"
                onclick="document.getElementById('fileInput').click();"></i>
            </div>
            <div class="custom-file mt-3 mb-3">
              <input id="fileInput" type="file" style="display:none;" />
              <input type="button" class="btn btn-primary btn-block mx-auto" value="CHANGE IMAGE NOW"
                onclick="document.getElementById('fileInput').click();" />
            </div>
          </div>
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block text-uppercase">Update Now</button>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->element('admin/footer'); ?>