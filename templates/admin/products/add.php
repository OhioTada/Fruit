<?= $this->element('admin/head'); ?>
<div class="content container-fluid">
      <!-- Page Header -->
      <div class="page-header">
        <div class="row align-items-center">
          <div class="col-sm mb-2 mb-sm-0">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-no-gutter">
                <li class="breadcrumb-item"><a class="breadcrumb-link" href="./ecommerce-products.html">Products</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Product</li>
              </ol>
            </nav>

            <h1 class="page-header-title">Add Product</h1>

            <div class="mt-2">
              <a class="text-body me-3" href="javascript:;">
                <i class="bi-clipboard me-1"></i> Duplicate
              </a>
              <a class="text-body" href="javascript:;">
                <i class="bi-eye me-1"></i> Preview
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
              <h4 class="card-header-title">Product information</h4>
            </div>
            <!-- End Header -->

            <!-- Body -->
            <div class="card-body">
              <!-- Form -->
              <div class="mb-4">
                <label for="productNameLabel" class="form-label">Name <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Products are the goods or services you sell."></i></label>

                <input type="text" class="form-control" name="productName" id="productNameLabel" placeholder="Shirt, t-shirts, etc." aria-label="Shirt, t-shirts, etc." value="Tiro track jacket">
              </div>
              <!-- End Form -->

              <div class="row">
                <div class="col-sm-6">
                  <!-- Form -->
                  <div class="mb-4">
                    <label for="SKULabel" class="form-label">SKU</label>

                    <input type="text" class="form-control" name="SKU" id="SKULabel" placeholder="eg. 348121032" aria-label="eg. 348121032">
                  </div>
                  <!-- End Form -->
                </div>
                <!-- End Col -->

                <div class="col-sm-6">
                  <!-- Form -->
                  <div class="mb-4">
                    <label for="weightLabel" class="form-label">Weight</label>

                    <div class="input-group">
                      <input type="text" class="form-control" name="weightName" id="weightLabel" placeholder="0.0" aria-label="0.0">

                      <div class="input-group-append">
                        <!-- Select -->
                        <div class="tom-select-custom tom-select-custom-end">
                          <select class="js-select form-select tomselected ts-hidden-accessible" autocomplete="off" data-hs-tom-select-options="{
                                    &quot;searchInDropdown&quot;: false,
                                    &quot;hideSearch&quot;: true,
                                    &quot;dropdownWidth&quot;: &quot;6rem&quot;
                                  }" id="tomselect-1" tabindex="-1">
                            <option value="lb">lb</option>
                            <option value="oz">oz</option>
                            
                            <option value="g">g</option>
                          <option value="kg" selected="">kg</option></select><div class="ts-wrapper js-select form-select single plugin-change_listener plugin-hs_smart_position input-hidden full has-items"><div class="ts-control"><div data-value="kg" class="item" data-ts-item="">kg</div></div><div class="tom-select-custom"><div class="ts-dropdown single plugin-change_listener plugin-hs_smart_position" style="display: none;"><div role="listbox" tabindex="-1" class="ts-dropdown-content" id="tomselect-1-ts-dropdown"></div></div></div></div>
                        </div>
                        <!-- End Select -->
                      </div>
                    </div>

                    <small class="form-text">Used to calculate shipping rates at checkout and label prices during fulfillment.</small>
                  </div>
                  <!-- End Form -->
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->

              <label class="form-label">Description <span class="form-label-secondary">(Optional)</span></label>

              <!-- Quill -->
              <div class="quill-custom">
                <div class="ql-toolbar ql-snow"><span class="ql-formats"><button type="button" class="ql-bold"><svg viewBox="0 0 18 18"> <path class="ql-stroke" d="M5,4H9.5A2.5,2.5,0,0,1,12,6.5v0A2.5,2.5,0,0,1,9.5,9H5A0,0,0,0,1,5,9V4A0,0,0,0,1,5,4Z"></path> <path class="ql-stroke" d="M5,9h5.5A2.5,2.5,0,0,1,13,11.5v0A2.5,2.5,0,0,1,10.5,14H5a0,0,0,0,1,0,0V9A0,0,0,0,1,5,9Z"></path> </svg></button><button type="button" class="ql-italic"><svg viewBox="0 0 18 18"> <line class="ql-stroke" x1="7" x2="13" y1="4" y2="4"></line> <line class="ql-stroke" x1="5" x2="11" y1="14" y2="14"></line> <line class="ql-stroke" x1="8" x2="10" y1="14" y2="4"></line> </svg></button><button type="button" class="ql-underline"><svg viewBox="0 0 18 18"> <path class="ql-stroke" d="M5,3V9a4.012,4.012,0,0,0,4,4H9a4.012,4.012,0,0,0,4-4V3"></path> <rect class="ql-fill" height="1" rx="0.5" ry="0.5" width="12" x="3" y="15"></rect> </svg></button><button type="button" class="ql-strike"><svg viewBox="0 0 18 18"> <line class="ql-stroke ql-thin" x1="15.5" x2="2.5" y1="8.5" y2="9.5"></line> <path class="ql-fill" d="M9.007,8C6.542,7.791,6,7.519,6,6.5,6,5.792,7.283,5,9,5c1.571,0,2.765.679,2.969,1.309a1,1,0,0,0,1.9-.617C13.356,4.106,11.354,3,9,3,6.2,3,4,4.538,4,6.5a3.2,3.2,0,0,0,.5,1.843Z"></path> <path class="ql-fill" d="M8.984,10C11.457,10.208,12,10.479,12,11.5c0,0.708-1.283,1.5-3,1.5-1.571,0-2.765-.679-2.969-1.309a1,1,0,1,0-1.9.617C4.644,13.894,6.646,15,9,15c2.8,0,5-1.538,5-3.5a3.2,3.2,0,0,0-.5-1.843Z"></path> </svg></button><button type="button" class="ql-link"><svg viewBox="0 0 18 18"> <line class="ql-stroke" x1="7" x2="11" y1="7" y2="11"></line> <path class="ql-even ql-stroke" d="M8.9,4.577a3.476,3.476,0,0,1,.36,4.679A3.476,3.476,0,0,1,4.577,8.9C3.185,7.5,2.035,6.4,4.217,4.217S7.5,3.185,8.9,4.577Z"></path> <path class="ql-even ql-stroke" d="M13.423,9.1a3.476,3.476,0,0,0-4.679-.36,3.476,3.476,0,0,0,.36,4.679c1.392,1.392,2.5,2.542,4.679.36S14.815,10.5,13.423,9.1Z"></path> </svg></button><button type="button" class="ql-image"><svg viewBox="0 0 18 18"> <rect class="ql-stroke" height="10" width="12" x="3" y="4"></rect> <circle class="ql-fill" cx="6" cy="7" r="1"></circle> <polyline class="ql-even ql-fill" points="5 12 5 11 7 9 8 10 11 7 13 9 13 12 5 12"></polyline> </svg></button><button type="button" class="ql-blockquote"><svg viewBox="0 0 18 18"> <rect class="ql-fill ql-stroke" height="3" width="3" x="4" y="5"></rect> <rect class="ql-fill ql-stroke" height="3" width="3" x="11" y="5"></rect> <path class="ql-even ql-fill ql-stroke" d="M7,8c0,4.031-3,5-3,5"></path> <path class="ql-even ql-fill ql-stroke" d="M14,8c0,4.031-3,5-3,5"></path> </svg></button><button type="button" class="ql-code"><svg viewBox="0 0 18 18"> <polyline class="ql-even ql-stroke" points="5 7 3 9 5 11"></polyline> <polyline class="ql-even ql-stroke" points="13 7 15 9 13 11"></polyline> <line class="ql-stroke" x1="10" x2="8" y1="5" y2="13"></line> </svg></button><button type="button" class="ql-list" value="bullet"><svg viewBox="0 0 18 18"> <line class="ql-stroke" x1="6" x2="15" y1="4" y2="4"></line> <line class="ql-stroke" x1="6" x2="15" y1="9" y2="9"></line> <line class="ql-stroke" x1="6" x2="15" y1="14" y2="14"></line> <line class="ql-stroke" x1="3" x2="3" y1="4" y2="4"></line> <line class="ql-stroke" x1="3" x2="3" y1="9" y2="9"></line> <line class="ql-stroke" x1="3" x2="3" y1="14" y2="14"></line> </svg></button></span></div><div class="js-quill ql-container ql-snow hs-quill-initialized" style="height: 15rem;" data-hs-quill-options="{
                     &quot;placeholder&quot;: &quot;Type your description...&quot;,
                      &quot;modules&quot;: {
                        &quot;toolbar&quot;: [
                          [&quot;bold&quot;, &quot;italic&quot;, &quot;underline&quot;, &quot;strike&quot;, &quot;link&quot;, &quot;image&quot;, &quot;blockquote&quot;, &quot;code&quot;, {&quot;list&quot;: &quot;bullet&quot;}]
                        ]
                      }
                     }"><div class="ql-editor ql-blank" data-gramm="false" contenteditable="true" data-placeholder="Type your description..."><p><br></p></div><div class="ql-clipboard" contenteditable="true" tabindex="-1"></div><div class="ql-tooltip ql-hidden"><a class="ql-preview" rel="noopener noreferrer" target="_blank" href="about:blank"></a><input type="text" data-formula="e=mc^2" data-link="https://quilljs.com" data-video="Embed URL"><a class="ql-action"></a><a class="ql-remove"></a></div></div>
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
              <h4 class="card-header-title">Media</h4>

              <!-- Dropdown -->
              <div class="dropdown">
                <a class="btn btn-ghost-secondary btn-sm" href="#!" id="mediaDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                  Add media from URL <i class="bi-chevron-down"></i>
                </a>

                <div class="dropdown-menu dropdown-menu-end mt-1">
                  <a class="dropdown-item" href="javascript:;" data-bs-toggle="modal" data-bs-target="#addImageFromURLModal">
                    <i class="bi-link dropdown-item-icon"></i> Add image from URL
                  </a>
                  <a class="dropdown-item" href="javascript:;" data-bs-toggle="modal" data-bs-target="#embedVideoModal">
                    <i class="bi-youtube dropdown-item-icon"></i> Embed video
                  </a>
                </div>
              </div>
              <!-- End Dropdown -->
            </div>
            <!-- End Header -->

            <!-- Body -->
            <div class="card-body">
              <!-- Dropzone -->
              <div id="attachFilesNewProjectLabel" class="js-dropzone dz-dropzone dz-dropzone-card dz-clickable">
                <div class="dz-message">
                  <img class="avatar avatar-xl avatar-4x3 mb-3" src="./assets/svg/illustrations/oc-browse.svg" alt="Image Description" data-hs-theme-appearance="default">
                  <img class="avatar avatar-xl avatar-4x3 mb-3" src="./assets/svg/illustrations-light/oc-browse.svg" alt="Image Description" data-hs-theme-appearance="dark">

                  <h5>Drag and drop your file here</h5>

                  <p class="mb-2">or</p>

                  <span class="btn btn-white btn-sm">Browse files</span>
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
                      <select class="js-select form-select tomselected ts-hidden-accessible" data-hs-tom-select-options="{
                                &quot;searchInDropdown&quot;: false,
                                &quot;hideSearch&quot;: true
                              }" id="tomselect-2" tabindex="-1">
                        
                        <option value="Color">Color</option>
                        <option value="Material">Material</option>
                        <option value="Style">Style</option>
                        <option value="Title">Title</option>
                      <option value="Size">Size</option></select><div class="ts-wrapper js-select form-select single plugin-change_listener plugin-hs_smart_position input-hidden full has-items"><div class="ts-control"><div data-value="Size" class="item" data-ts-item="">Size</div></div><div class="tom-select-custom"><div class="ts-dropdown single plugin-change_listener plugin-hs_smart_position" style="display: none;"><div role="listbox" tabindex="-1" class="ts-dropdown-content" id="tomselect-2-ts-dropdown"></div></div></div></div>
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
                      <select class="js-select-dynamic form-select" data-hs-tom-select-options="{
                                &quot;searchInDropdown&quot;: false,
                                &quot;hideSearch&quot;: true
                              }">
                        <option value="Size">Size</option>
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
                  <input type="text" class="form-control" name="priceName" id="priceNameLabel" placeholder="0.00" aria-label="0.00">

                  <div class="input-group-append">
                    <!-- Select -->
                    <div class="tom-select-custom">
                      <select class="js-select form-select tomselected ts-hidden-accessible" data-hs-tom-select-options="{
                                &quot;searchInDropdown&quot;: false,
                                &quot;hideSearch&quot;: true,
                                &quot;dropdownWidth&quot;: &quot;7rem&quot;,
                                &quot;dropdownWrapperClass&quot;: &quot;tom-select-custom tom-select-custom-end&quot;
                              }" id="tomselect-3" tabindex="-1">
                        
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
                      <option value="USD" selected="">USD</option></select><div class="ts-wrapper js-select form-select single plugin-change_listener plugin-hs_smart_position input-hidden full has-items"><div class="ts-control"><div data-value="USD" class="item" data-ts-item="">USD</div></div><div class="tom-select-custom tom-select-custom-end"><div class="ts-dropdown single plugin-change_listener plugin-hs_smart_position" style="display: none;"><div role="listbox" tabindex="-1" class="ts-dropdown-content" id="tomselect-3-ts-dropdown"></div></div></div></div>
                    </div>
                    <!-- End Select -->
                  </div>
                </div>
              </div>
              <!-- End Form -->

              <div class="mb-2">
                <a class="d-inline-block" href="javascript:;" data-bs-toggle="modal" data-bs-target="#productsAdvancedFeaturesModal">
                  <i class="bi-star-fill fs-4 text-warning me-1"></i> Set "Compare to" price
                </a>
              </div>

              <a class="d-inline-block" href="javascript:;" data-bs-toggle="modal" data-bs-target="#productsAdvancedFeaturesModal">
                <i class="bi-star-fill fs-4 text-warning me-1"></i> Bulk discount pricing
              </a>

              <hr class="my-4">

              <!-- Form Switch -->
              <label class="row form-check form-switch" for="availabilitySwitch1">
                <span class="col-8 col-sm-9 ms-0">
                  <span class="text-dark">Availability <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Product availability switch toggler."></i></span>
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

                <input type="text" class="form-control" name="vendor" id="vendorLabel" placeholder="eg. Nike" aria-label="eg. Nike">
              </div>
              <!-- End Form -->

              <!-- Form -->
              <div class="mb-4">
                <label for="categoryLabel-ts-control" class="form-label" id="categoryLabel-ts-label">Category</label>

                <!-- Select -->
                <div class="tom-select-custom">
                  <select class="js-select form-select tomselected ts-hidden-accessible" autocomplete="off" id="categoryLabel" data-hs-tom-select-options="{
                            &quot;searchInDropdown&quot;: false,
                            &quot;hideSearch&quot;: true,
                            &quot;placeholder&quot;: &quot;Select category&quot;
                          }" tabindex="-1">
                    
                    <option value="Shoes">Shoes</option>
                    <option value="Electronics">Electronics</option>
                    <option value="Others">Others</option>
                  <option value="Clothing">Clothing</option></select><div class="ts-wrapper js-select form-select single plugin-change_listener plugin-hs_smart_position input-hidden full has-items"><div class="ts-control"><div data-value="Clothing" class="item" data-ts-item="">Clothing</div></div><div class="tom-select-custom"><div class="ts-dropdown single plugin-change_listener plugin-hs_smart_position" style="display: none;"><div role="listbox" tabindex="-1" class="ts-dropdown-content" id="categoryLabel-ts-dropdown" aria-labelledby="categoryLabel-ts-label"></div></div></div></div>
                </div>
                <!-- End Select -->
              </div>
              <!-- Form -->

              <!-- Form -->
              <div class="mb-4">
                <label for="collectionsLabel-ts-control" class="form-label" id="collectionsLabel-ts-label">Collections</label>

                <!-- Select -->
                <div class="tom-select-custom">
                  <select class="js-select form-select tomselected ts-hidden-accessible" autocomplete="off" id="collectionsLabel" data-hs-tom-select-options="{
                            &quot;searchInDropdown&quot;: false,
                            &quot;hideSearch&quot;: true,
                            &quot;placeholder&quot;: &quot;Select collections&quot;
                          }" tabindex="-1">
                    
                    <option value="Spring">Spring</option>
                    <option value="Summer">Summer</option>
                    <option value="Autumn">Autumn</option>
                  <option value="Winter">Winter</option></select><div class="ts-wrapper js-select form-select single plugin-change_listener plugin-hs_smart_position input-hidden full has-items"><div class="ts-control"><div data-value="Winter" class="item" data-ts-item="">Winter</div></div><div class="tom-select-custom"><div class="ts-dropdown single plugin-change_listener plugin-hs_smart_position" style="display: none;"><div role="listbox" tabindex="-1" class="ts-dropdown-content" id="collectionsLabel-ts-dropdown" aria-labelledby="collectionsLabel-ts-label"></div></div></div></div>
                </div>
                <!-- End Select -->

                <span class="form-text">Add this product to a collection so it’s easy to find in your store.</span>
              </div>
              <!-- Form -->

              <label for="tagsLabel" class="form-label">Tags</label>

              <input type="text" class="form-control" id="tagsLabel" placeholder="Enter tags here" aria-label="Enter tags here">
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
<?= $this->element('admin/footer'); ?>