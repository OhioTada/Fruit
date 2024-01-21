<?= $this->element('admin/head'); ?>
<div class="product-add">
  <div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
      <div class="row align-items-center">
        <div class="col-sm mb-2 mb-sm-0">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-no-gutter">
              <li class="breadcrumb-item"><a class="breadcrumb-link" href="#">
                  <?= __("Products"); ?>
                </a></li>
              <li class="breadcrumb-item active" aria-current="page">
                <?= __("Add Product"); ?>
              </li>
            </ol>
          </nav>

          <h1 class="page-header-title">
            <?= __("Add Product"); ?>
          </h1>

          <div class="mt-2">
            <a class="text-body me-3" href="javascript:;">
              <i class="bi-clipboard me-1"></i>
              <?= __("Duplicate"); ?>
            </a>
            <a class="text-body" href="javascript:;">
              <i class="bi-eye me-1"></i>
              <?= __("Preview"); ?>
            </a>
          </div>
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>
    <!-- End Page Header -->
    <?= $this->Form->create(null, ['type' => 'POST', 'id' => 'product-fr', 'enctype' => 'multipart/form-data']) ?>
    <div class="row">
      <div class="col-lg-8 mb-3 mb-lg-0">
        <!-- Card -->
        <div class="card mb-3 mb-lg-5">
          <!-- Header -->
          <div class="card-header">
            <h4 class="card-header-title">
              <?= __("Product information"); ?>
            </h4>
          </div>
          <!-- End Header -->

          <!-- Body -->
          <div class="card-body">
            <!-- Form -->
            <div class="mb-4">
              <label for="productNameLabel" class="form-label">
                <?= __("Name"); ?> <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip"
                  data-bs-placement="top" aria-label="Products are the goods or services you sell."></i>
              </label>

              <input type="text" class="form-control" name="name" id="productNameLabel"
                placeholder="<?= __("Shirt, t-shirts, etc."); ?>" aria-label="<?= __("Shirt, t-shirts, etc."); ?>"
                value="<?= isset($data['name']) ? $data['name'] : ''; ?>">
            </div>
            <!-- End Form -->

            <div class="row">
              <div class="col-sm-6">
                <!-- Form -->
                <div class="mb-4">
                  <label for="SKULabel" class="form-label">
                    <?= __("SKU"); ?>
                  </label>

                  <input type="text" class="form-control" name="sku" id="SKULabel"
                    placeholder="<?= __("eg. 348121032"); ?>" value="<?= isset($data['sku']) ? $data['sku'] : ''; ?>">
                </div>
                <!-- End Form -->
              </div>
              <!-- End Col -->

              <div class="col-sm-6">
                <!-- Form -->
                <div class="mb-4">
                  <label for="weightLabel" class="form-label">
                    <?= __("Weight"); ?>
                  </label>

                  <div class="input-group">
                    <input type="text" class="form-control" name="weight" id="weightLabel"
                      placeholder="<?= __("0.0"); ?>"
                      value="<?= isset($data['weight']) ? $data['weight'] : ''; ?>">

                    <div class="input-group-append">
                      <!-- Select -->
                      <div class="form-group mb-3">
                        <?php
                        $arrUnits = ['kg', 'lb', 'oz', 'g'];
                        echo $this->Form->select(
                          'unitWeight',
                          $arrUnits,
                          ['default' => '' . (isset($data['unitWeight'])) ? $data['unitWeight'] : '' . '', 'class' => 'custom-select tm-select-accounts'],
                        );
                        ?>
                      </div>
                      <!-- End Select -->
                    </div>
                  </div>

                  <small class="form-text">
                    <?= __("Used to calculate shipping rates at checkout and label prices during fulfillment."); ?>
                  </small>
                </div>
                <!-- End Form -->
              </div>
              <!-- End Col -->
            </div>
            <!-- End Row -->

            <label class="form-label">
              <?= __("Description"); ?> <span class="form-label-secondary">
                <?= __("(Optional)"); ?>
              </span>
            </label>

            <!-- Quill -->
            <div class="quill-custom">
              <?= $this->Form->control('desc', ['type' => 'textarea', 'id' => 'desc', 'class' => 'desc editor-full', 'value' => ''.(isset($data['desc'])) ? $data['desc'] : ''.'', 'label' => false]); ?>
            </div>
            <!-- End Quill -->
          </div>
          <!-- Body -->
        </div>
        <!-- End Card -->

        <!-- Card -->
        <div class="card mb-3 mb-lg-5">
          <!-- Header -->
          <div class="card-header card-header-content-between">
            <h4 class="card-header-title">
              <?= __("Media"); ?>
            </h4>
          </div>
          <!-- End Header -->

          <!-- Body -->
          <div class="card-body">
            <!-- Dropzone -->
            <div id="attachFilesNewProjectLabel" class="js-dropzone">
              <div id="image-container">
                <div id="image-slot">
                  <?= __(" Upload file!"); ?>
                  <input type="file" name='image' id="image-upload" multiple style="display: none;">
                </div>
              </div>

              <div id="fullscreen-modal">
                <img id="fullscreen-image" src="" alt="">
                <button id="prev-image">&#10094;</button>
                <button id="next-image">&#10095;</button>
                <button id="close-modal">X</button>
              </div>

              <div id="toast" style="display: none;">
                <?= __(" It is only possible to upload up to 8 images!"); ?>
              </div>
            </div>
            <!-- End Dropzone -->
          </div>
          <!-- Body -->
        </div>
        <!-- End Card -->
        <div class="mb-4">
          <label for="productNameLabel" class="form-label">
            <?= __("Quantity"); ?>
          </label>

          <input type="text" class="form-control" name="quantity" id="quantityLabel" placeholder="<?= __("Quantity"); ?>" value="<?= isset($data['quantity']) ? $data['quantity'] : ''; ?>">
        </div>
        
        <!-- Card -->
        <div class="card">
          <!-- Header -->
          <div class="card-header">
            <h4 class="card-header-title">
              <?= __("Variants"); ?>
            </h4>
          </div>
          <!-- End Header -->

          <!-- Body -->
          <div class="card-body">


            <div class="js-add-field">
              <div class="row mb-4">

                <div class="col-sm-4 mb-2 mb-sm-0">
                  <h6 class="text-cap"> <?= __("Size"); ?></h6>
                  <!-- Select -->
                  <?php
                        $arrSize = ['xs','s', 'm', 'l'];
                        echo $this->Form->select(
                          'size',
                          $arrSize,
                          ['default' => '' . (isset($data['size'])) ? $data['size'] : '' . '', 'class' => 'custom-select tm-select-accounts custom-select--full'],
                        );
                        ?>
                  <!-- End Select -->
                </div>
                <div class="col-sm-4 mb-2 mb-sm-0">
                  <h6 class="text-cap"> <?= __("color"); ?></h6>
                  <!-- Select -->
                  <input type="text" name="color" class="form-control" placeholder="<?= __("Enter tags"); ?>">
                  <!-- End Select -->
                </div>
                <div class="col-sm-4 mb-2 mb-sm-0">
                  <h6 class="text-cap"> <?= __("Material"); ?></h6>
                  <!-- Select -->
                  <input type="text" name="material" class="form-control" placeholder="<?= __("Enter material"); ?>">
                  <!-- End Select -->
                </div>
                <!-- End Col -->
                <!-- End Col -->
              </div>
              <!-- End Row -->
              <!-- Container For Input Field -->
          </div>
          <!-- Body -->
        </div>
        <!-- End Card -->
      </div>
      </div>
      <!-- End Col -->

      <div class="col-lg-4">
        <!-- Card -->
        <div class="card mb-3 mb-lg-5">
          <!-- Header -->
          <div class="card-header">
            <h4 class="card-header-title">
              <?= __("Pricing"); ?>
            </h4>
          </div>
          <!-- End Header -->

          <!-- Body -->
          <div class="card-body">
            <!-- Form -->
            <div class="mb-4">
              <label for="priceNameLabel" class="form-label">
                <?= __("Price"); ?>
              </label>

              <div class="input-group">
                <input type="text" class="form-control" name="price" id="priceNameLabel"
                  placeholder="<?= __("0.00"); ?>"
                  value="<?= (isset($data['price'])) ? $data['price'] : ''; ?>">

                <div class="input-group-append">
                  <!-- Select -->
                  <div class="tom-select-custom">
                    <?php
                    $arrUnitCountry = [
                      'VND' => 'VND',
                      'USD' => 'USD',
                      'JPY' => 'JPY',
                      'Euro' => 'EURO'
                    ];
                    echo $this->Form->select(
                      'unitPrice',
                      $arrUnitCountry,
                      ['default' => '' . (isset($data['unitPrice'])) ? $data['unitPrice'] : 'VND' . '', 'class' => 'custom-select tm-select-accounts custom-select--full'],
                    );
                    ?>
                  </div>
                  <!-- End Select -->
                </div>
              </div>
            </div>
            <div class="mb-4">
              <label for="discountPercentNameLabel" class="form-label">
                <?= __("discountPercent"); ?>
              </label>

              <div class="input-group">
                <input type="text" class="form-control" name="discountPercent" id="discountPercentNameLabel"
                  placeholder="<?= __("0.00"); ?>"
                  value="<?= (isset($data['discountPercent'])) ? $data['discountPercent'] : ''; ?>">
              </div>
            </div>
            <!-- End Form -->
            <hr class="my-4">

            <!-- Form Switch -->
            <label class="row form-check form-switch" for="availabilitySwitch1">
              <span class="col-8 col-sm-9 ms-0">
                <span class="text-dark">
                  <?= __("Availability"); ?> <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip"
                    data-bs-placement="top" aria-label="Product availability switch toggler."></i>
                </span>
              </span>
              <span class="col-4 col-sm-3 text-end">
                <input type="checkbox" class="form-check-input js-availability" id="availabilitySwitch1" name="availability"
                  value="<?= (isset($data['availability']) ? $data['availability'] : '0') ?>">
              </span>
            </label>
            <!-- End Form Switch -->
          </div>
          <!-- Body -->
        </div>
        <!-- End Card -->

        <!-- Card -->
        <div class="card">
          <!-- Header -->
          <div class="card-header">
            <h4 class="card-header-title">
              <?= __("Organization"); ?>
            </h4>
          </div>
          <!-- End Header -->

          <!-- Body -->
          <div class="card-body">
            <!-- Form -->
            <div class="mb-4">
              <label for="branchLabel" class="form-label">
                <?= __("Branch"); ?>
              </label>

              <input type="text" class="form-control" name="branch" id="branchLabel"
                placeholder="<?= __("eg. Nike"); ?>" value="<?= (isset($data['branch']) ? $data['branch'] : ''); ?>">
            </div>
            <!-- End Form -->

            <!-- Form -->
            <div class="mb-4">
              <label for="categoryLabel-ts-control" class="form-label" id="categoryLabel-ts-label">
                <?= __("Category"); ?>
              </label>

              <!-- Select -->
              <div class="tom-select-custom">
                <select class="custom-select tm-select-accounts custom-select--full" id="category" name = "categoryId">
                  <option value="1" selected><?= __("domestic"); ?></option>
                  <option value="2"><?= __("import"); ?></option>

                </select>
              </div>
              <!-- End Select -->
            </div>
            <!-- Form -->

            <!-- Form -->
            <div class="mb-4">
              <label for="collectionsLabel-ts-control" class="form-label" id="collectionsLabel-ts-label">
                <?= __("Collections"); ?>
              </label>

              <!-- Select -->
              <div class="tom-select-custom">
                <?php
                $arrCategory = [
                  'Spring' => 'Spring',
                  'Summer' => 'Summer',
                  'Autumn' => 'Autumn',
                  'Clothing' => 'Clothing'
                ];
                echo $this->Form->select(
                  'collections',
                  $arrCategory,
                  ['default' => '' . (isset($data['collections'])) ? $data['collections'] : 'Spring' . '', 'class' => 'custom-select tm-select-accounts custom-select--full'],
                );
                ?>

              </div>
              <!-- End Select -->

              <span class="form-text">
                <?= __("Add this product to a collection so it’s easy to find in your store."); ?>
              </span>
            </div>
            <!-- Form -->
            <div class="mb-4">
              <label for="tagsLabel" class="form-label">
                <?= __("Tags"); ?>
              </label>

              <input type="text" class="form-control" name="tags" id="tagsLabel"
                placeholder="<?= __("Enter tags here"); ?>"
                value="<?= (isset($data['tags'])) ? $data['tags'] : ''; ?>">
            </div>

            <div>
              <label for="expireDate" class="form-label">
                <?= __("Expire Date"); ?>
              </label>
              <div class="calendar-wrap">
                <input type="text" class="form-control datePick" name="expireDate" id="expireDate"
                placeholder="<?= __("Enter Expire Date"); ?>"
                value="<?= (isset($data['expireDate'])) ? $data['expireDate'] : ''; ?>">
              </div>
              
            </div>

          </div>

          <!-- Body -->
        </div>
        <!-- End Card -->
      </div>
      <!-- End Col -->
    </div>
    <?= $this->Form->end(); ?>
    <!-- End Row -->

    <div class="position-fixed start-50 bottom-0 translate-middle-x w-100 zi-99 mb-3" style="max-width: 40rem;">
      <!-- Card -->
      <div class="card card-sm bg-dark border-dark mx-2">
        <div class="card-body">
          <div class="row justify-content-center justify-content-sm-between">
            <div class="col">
              <button type="button" class="btn btn-ghost-danger">
                <?= __('Delete'); ?>
              </button>
            </div>
            <!-- End Col -->

            <div class="col-auto">
              <div class="d-flex gap-3">
                <button type="button" class="btn btn-ghost-light">
                  <?= __('Discard'); ?>
                </button>
                <?= $this->Form->button('Save', ['escapeTitle' => false, 'type' => 'submit', 'value' => 'Save', 'class' => 'btn btn-primary', 'form' => 'product-fr']); ?>
              </div>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>
      </div>
      <!-- End Card -->
    </div>
  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.14.0/Sortable.min.js"></script>
<?= $this->element('admin/footer'); ?>