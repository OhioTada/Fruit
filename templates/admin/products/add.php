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

              <input type="text" class="form-control" name="productName" id="productNameLabel"
                placeholder="Shirt, t-shirts, etc." aria-label="Shirt, t-shirts, etc." value="Tiro track jacket">
            </div>
            <!-- End Form -->

            <div class="row">
              <div class="col-sm-6">
                <!-- Form -->
                <div class="mb-4">
                  <label for="SKULabel" class="form-label">
                    <?= __("SKU"); ?>
                  </label>

                  <input type="text" class="form-control" name="SKU" id="SKULabel" placeholder="eg. 348121032"
                    aria-label="eg. 348121032">
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
                    <input type="text" class="form-control" name="weightName" id="weightLabel" placeholder="0.0"
                      aria-label="0.0">

                    <div class="input-group-append">
                      <!-- Select -->
                      <div class="form-group mb-3">
                        <select class="custom-select tm-select-accounts" id="size">
                          <option value="kg" selected>kg</option>
                          <option value="lb">lb</option>
                          <option value="oz">oz</option>
                          <option value="g">g</option>
                        </select>
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
              <?= $this->Form->control('description', ['type' => 'textarea', 'id' => 'editor', 'class' => 'editor editor-full', 'value' => '', 'label' => false]); ?>
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

            <!-- Dropdown -->
            <div class="tom-select-custom">
              <select class="custom-select tm-select-accounts custom-select--full" id="tomselect-4">
                <option value="1" selected>
                  <?= __("Add media from URL"); ?>
                </option>
                <option value="2">
                  <?= __("Add image from URL"); ?>
                </option>
                <option value="3">
                  <?= __("Embed video"); ?>
                </option>
              </select>
            </div>

            <!-- End Dropdown -->
          </div>
          <!-- End Header -->

          <!-- Body -->
          <div class="card-body">
            <!-- Dropzone -->
            <div id="attachFilesNewProjectLabel" class="js-dropzone dz-dropzone dz-dropzone-card dz-clickable">
              <div class="form-block__cont form-block">
                <?php
                if (isset($prizeImage)):
                  $valImageUrl01 = '';
                  foreach ($prizeImage as $keyPrizeImage01 => $itemPrizeImage01):
                    ?>
                    <?php
                    $valImageUrl01 .= isset($requestData["prizeImageUrl"]) ? pathinfo($requestData["prizeImageUrl"][$keyPrizeImage01])['basename'] . ',' : pathinfo($itemPrizeImage01['url'])['basename'] . ',';
                    ?>
                  <?php endforeach;
                  $valImageUrl01 = substr_replace($valImageUrl01, "", -1) ?>

                <?php endif; ?>
                <div class="input-upload">
                  <label class="file-select" for="input02"><span class="icon">
                  <i class="bi bi-arrow-bar-up"></i></span></label>
                  <span class="file-name">
                    <span class="js-img-caption">
                      <?= (isset($valImageUrl01) ? $valImageUrl01 : 'ファイル未選択') ?>
                    </span>
                    <?php echo $this->Form->control('input02', [
                      'type' => 'file',
                      'label' => false,
                      'accept' => 'image/*',
                      'multiple' => 'multiple',
                      "class" => "js-upload-img",
                      "data-max_length" => "20",
                      'name' => 'input02[]',
                    ]); ?>
                  </span>
                  <div class="upload-spinner none"><img src="/img/submit-spin.svg" /></div>
                  <div class="js-change-img preview">
                    <?php
                    if (isset($prizeImage)):
                      foreach ($prizeImage as $keyPrizeImage => $itemPrizeImage):
                        ?>
                        <?php
                        $valImage = isset($requestData["prizeImageUrl"]) ? $requestData["prizeImageUrl"][$keyPrizeImage] : $itemPrizeImage['url'];
                        $valImageUrl = !is_null($valImage) ? pathinfo($valImage)['basename'] : '';
                        ?>
                        <div class="file-img" data-number="<?= $keyPrizeImage; ?>" data-file="<?= $valImageUrl; ?>"
                          data-id="<?= $itemPrizeImage['id']; ?>">
                          <figure class="js-thum-figure">
                            <figcaption>
                              <?= $valImageUrl; ?>
                            </figcaption>
                            <img src="<?= $valImage ?>" alt="<?= $valImageUrl; ?>" class="thumbnail">
                            <input type="text" hidden name="prizeImageUrl[]" class="--ss hidden" value="<?= $valImage ?>">
                          </figure>
                          <span class="js-delete-file"></span>
                        </div>
                      <?php endforeach; ?>
                    <?php endif; ?>
                  </div>
                  <p class="text-error error-validate-size" style="display: none"></p>
                  <?php
                  if (isset($errors) && $errors) {
                    if (isset($errors['prizeImageUrl']['validExtension'])) { ?>
                      <p class="text-error">
                        <?= $errors['prizeImageUrl']['validExtension'] ?>
                      </p>
                    <?php }
                  } ?>
                </div>
                <input type="text" hidden name="img_delete" class="list-img-delete" value="" />
              </div>
            </div>
            <!-- End Dropzone -->
          </div>
          <!-- Body -->
        </div>
        <!-- End Card -->

        <!-- Card -->
        <div class="card">
          <!-- Header -->
          <div class="card-header">
            <h4 class="card-header-title">Variants</h4>
          </div>
          <!-- End Header -->

          <!-- Body -->
          <div class="card-body">
            <h6 class="text-cap">Options</h6>

            <div class="js-add-field" data-hs-add-field-options="{
                    &quot;template&quot;: &quot;#addAnotherOptionFieldTemplate&quot;,
                    &quot;container&quot;: &quot;#addAnotherOptionFieldContainer&quot;,
                    &quot;defaultCreated&quot;: 0
                  }">
              <div class="row mb-4">
                <div class="col-sm-4 mb-2 mb-sm-0">
                  <!-- Select -->
                  <div class="tom-select-custom">
                    <select class="custom-select tm-select-accounts custom-select--full" id="tomselect-3">
                      <option value="Size" selected>Size</option>
                      <option value="Color">Color</option>
                      <option value="Material">Material</option>
                      <option value="Style">Style</option>
                      <option value="Title">Title</option>
                    </select>
                  </div>
                  <!-- End Select -->
                </div>
                <!-- End Col -->

                <div class="col-sm-8">
                  <input type="text" class="form-control" placeholder="Enter tags" aria-label="Enter tags">
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->

              <!-- Container For Input Field -->
              <div id="addAnotherOptionFieldContainer"></div>

              <a href="javascript:;" class="js-create-field form-link">
                <i class="bi-plus"></i> Add another option
              </a>
            </div>

            <!-- Add Another Option Input Field -->
            <div id="addAnotherOptionFieldTemplate" style="display: none;">
              <div class="row mb-4">
                <div class="col-sm-4 mb-2 mb-sm-0">
                  <!-- Select -->
                  <div class="tom-select-custom">
                    <select class="custom-select tm-select-accounts custom-select--full" id="tomselect-3">
                      <option value="Size" selected>Size</option>
                      <option value="Color">Color</option>
                      <option value="Material">Material</option>
                      <option value="Style">Style</option>
                      <option value="Title">Title</option>
                    </select>
                  </div>
                  <!-- End Select -->
                </div>
                <!-- End Col -->

                <div class="col-sm-8">
                  <input type="text" class="form-control" placeholder="Enter tags" aria-label="Enter tags">
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->
            </div>
            <!-- End Add Another Option Input Field -->
          </div>
          <!-- Body -->
        </div>
        <!-- End Card -->
      </div>
      <!-- End Col -->

      <div class="col-lg-4">
        <!-- Card -->
        <div class="card mb-3 mb-lg-5">
          <!-- Header -->
          <div class="card-header">
            <h4 class="card-header-title">Pricing</h4>
          </div>
          <!-- End Header -->

          <!-- Body -->
          <div class="card-body">
            <!-- Form -->
            <div class="mb-4">
              <label for="priceNameLabel" class="form-label">Price</label>

              <div class="input-group">
                <input type="text" class="form-control" name="priceName" id="priceNameLabel" placeholder="0.00"
                  aria-label="0.00">

                <div class="input-group-append">
                  <!-- Select -->
                  <div class="tom-select-custom">
                    <select class="custom-select tm-select-accounts" id="tomselect-3">
                      <option value="AED">AED</option>
                      <option value="AFN">AFN</option>
                      <option value="ALL">ALL</option>
                      <option value="AMD">AMD</option>
                      <option value="ANG">ANG</option>
                      <option value="AOA">AOA</option>
                      <option value="ARS">ARS</option>
                      <option value="AUD">AUD</option>
                      <option value="AWG">AWG</option>
                      <option value="AZN">AZN</option>
                      <option value="BAM">BAM</option>
                      <option value="BBD">BBD</option>
                      <option value="BDT">BDT</option>
                      <option value="BGN">BGN</option>
                      <option value="BIF">BIF</option>
                      <option value="BMD">BMD</option>
                      <option value="BND">BND</option>
                      <option value="BOB">BOB</option>
                      <option value="BRL">BRL</option>
                      <option value="BSD">BSD</option>
                      <option value="BWP">BWP</option>
                      <option value="BZD">BZD</option>
                      <option value="CAD">CAD</option>
                      <option value="CDF">CDF</option>
                      <option value="CHF">CHF</option>
                      <option value="CLP">CLP</option>
                      <option value="CNY">CNY</option>
                      <option value="COP">COP</option>
                      <option value="CRC">CRC</option>
                      <option value="CVE">CVE</option>
                      <option value="CZK">CZK</option>
                      <option value="DJF">DJF</option>
                      <option value="DKK">DKK</option>
                      <option value="DOP">DOP</option>
                      <option value="DZD">DZD</option>
                      <option value="EGP">EGP</option>
                      <option value="ETB">ETB</option>
                      <option value="EUR">EUR</option>
                      <option value="FJD">FJD</option>
                      <option value="FKP">FKP</option>
                      <option value="GBP">GBP</option>
                      <option value="GEL">GEL</option>
                      <option value="GIP">GIP</option>
                      <option value="GMD">GMD</option>
                      <option value="GNF">GNF</option>
                      <option value="GTQ">GTQ</option>
                      <option value="GYD">GYD</option>
                      <option value="HKD">HKD</option>
                      <option value="HNL">HNL</option>
                      <option value="HRK">HRK</option>
                      <option value="HTG">HTG</option>
                      <option value="HUF">HUF</option>
                      <option value="IDR">IDR</option>
                      <option value="ILS">ILS</option>
                      <option value="INR">INR</option>
                      <option value="ISK">ISK</option>
                      <option value="JMD">JMD</option>
                      <option value="JPY">JPY</option>
                      <option value="KES">KES</option>
                      <option value="KGS">KGS</option>
                      <option value="KHR">KHR</option>
                      <option value="KMF">KMF</option>
                      <option value="KRW">KRW</option>
                      <option value="KYD">KYD</option>
                      <option value="KZT">KZT</option>
                      <option value="LAK">LAK</option>
                      <option value="LBP">LBP</option>
                      <option value="LKR">LKR</option>
                      <option value="LRD">LRD</option>
                      <option value="LSL">LSL</option>
                      <option value="MAD">MAD</option>
                      <option value="MDL">MDL</option>
                      <option value="MGA">MGA</option>
                      <option value="MKD">MKD</option>
                      <option value="MMK">MMK</option>
                      <option value="MNT">MNT</option>
                      <option value="MOP">MOP</option>
                      <option value="MRO">MRO</option>
                      <option value="MUR">MUR</option>
                      <option value="MVR">MVR</option>
                      <option value="MWK">MWK</option>
                      <option value="MXN">MXN</option>
                      <option value="MYR">MYR</option>
                      <option value="MZN">MZN</option>
                      <option value="NAD">NAD</option>
                      <option value="NGN">NGN</option>
                      <option value="NIO">NIO</option>
                      <option value="NOK">NOK</option>
                      <option value="NPR">NPR</option>
                      <option value="NZD">NZD</option>
                      <option value="PAB">PAB</option>
                      <option value="PEN">PEN</option>
                      <option value="PGK">PGK</option>
                      <option value="PHP">PHP</option>
                      <option value="PKR">PKR</option>
                      <option value="PLN">PLN</option>
                      <option value="PYG">PYG</option>
                      <option value="QAR">QAR</option>
                      <option value="RON">RON</option>
                      <option value="RSD">RSD</option>
                      <option value="RUB">RUB</option>
                      <option value="RWF">RWF</option>
                      <option value="SAR">SAR</option>
                      <option value="SBD">SBD</option>
                      <option value="SCR">SCR</option>
                      <option value="SEK">SEK</option>
                      <option value="SGD">SGD</option>
                      <option value="SHP">SHP</option>
                      <option value="SLL">SLL</option>
                      <option value="SOS">SOS</option>
                      <option value="SRD">SRD</option>
                      <option value="STD">STD</option>
                      <option value="SZL">SZL</option>
                      <option value="THB">THB</option>
                      <option value="TJS">TJS</option>
                      <option value="TOP">TOP</option>
                      <option value="TRY">TRY</option>
                      <option value="TTD">TTD</option>
                      <option value="TWD">TWD</option>
                      <option value="TZS">TZS</option>
                      <option value="UAH">UAH</option>
                      <option value="UGX">UGX</option>
                      <option value="UYU">UYU</option>
                      <option value="UZS">UZS</option>
                      <option value="VND">VND</option>
                      <option value="VUV">VUV</option>
                      <option value="WST">WST</option>
                      <option value="XAF">XAF</option>
                      <option value="XCD">XCD</option>
                      <option value="XOF">XOF</option>
                      <option value="XPF">XPF</option>
                      <option value="YER">YER</option>
                      <option value="ZAR">ZAR</option>
                      <option value="ZMW">ZMW</option>
                      <option value="USD" selected="">USD</option>
                    </select>
                  </div>
                  <!-- End Select -->
                </div>
              </div>
            </div>
            <!-- End Form -->
            <hr class="my-4">

            <!-- Form Switch -->
            <label class="row form-check form-switch" for="availabilitySwitch1">
              <span class="col-8 col-sm-9 ms-0">
                <span class="text-dark">Availability <i class="bi-question-circle text-body ms-1"
                    data-bs-toggle="tooltip" data-bs-placement="top"
                    aria-label="Product availability switch toggler."></i></span>
              </span>
              <span class="col-4 col-sm-3 text-end">
                <input type="checkbox" class="form-check-input" id="availabilitySwitch1">
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
            <h4 class="card-header-title">Organization</h4>
          </div>
          <!-- End Header -->

          <!-- Body -->
          <div class="card-body">
            <!-- Form -->
            <div class="mb-4">
              <label for="vendorLabel" class="form-label">Vendor</label>

              <input type="text" class="form-control" name="vendor" id="vendorLabel" placeholder="eg. Nike"
                aria-label="eg. Nike">
            </div>
            <!-- End Form -->

            <!-- Form -->
            <div class="mb-4">
              <label for="categoryLabel-ts-control" class="form-label" id="categoryLabel-ts-label">Category</label>

              <!-- Select -->
              <div class="tom-select-custom">
                <select class="custom-select tm-select-accounts custom-select--full" id="category">
                  <option value="Shoes" selected>Shoes</option>
                  <option value="Electronics">Electronics</option>
                  <option value="Others">Others</option>
                  <option value="Clothing">Clothing</option>
                </select>
              </div>
              <!-- End Select -->
            </div>
            <!-- Form -->

            <!-- Form -->
            <div class="mb-4">
              <label for="collectionsLabel-ts-control" class="form-label"
                id="collectionsLabel-ts-label">Collections</label>

              <!-- Select -->
              <div class="tom-select-custom">
                <select class="custom-select tm-select-accounts custom-select--full" id="category">
                  <option value="Spring" selected>Spring</option>
                  <option value="Summer">Summer</option>
                  <option value="Autumn">Autumn</option>
                  <option value="Clothing">Clothing</option>
                </select>
              </div>
              <!-- End Select -->

              <span class="form-text">Add this product to a collection so it’s easy to find in your store.</span>
            </div>
            <!-- Form -->

            <label for="tagsLabel" class="form-label">Tags</label>

            <input type="text" class="form-control" id="tagsLabel" placeholder="Enter tags here"
              aria-label="Enter tags here">
          </div>
          <!-- Body -->
        </div>
        <!-- End Card -->
      </div>
      <!-- End Col -->
    </div>
    <!-- End Row -->

    <div class="position-fixed start-50 bottom-0 translate-middle-x w-100 zi-99 mb-3" style="max-width: 40rem;">
      <!-- Card -->
      <div class="card card-sm bg-dark border-dark mx-2">
        <div class="card-body">
          <div class="row justify-content-center justify-content-sm-between">
            <div class="col">
              <button type="button" class="btn btn-ghost-danger">Delete</button>
            </div>
            <!-- End Col -->

            <div class="col-auto">
              <div class="d-flex gap-3">
                <button type="button" class="btn btn-ghost-light">Discard</button>
                <button type="button" class="btn btn-primary">Save</button>
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

<?= $this->element('admin/footer'); ?>