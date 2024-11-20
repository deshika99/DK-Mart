<?php $__env->startSection('content'); ?>



   <!-- ========================= Breadcrumb Start =============================== -->
   <div class="breadcrumb mb-0 py-26 bg-main-two-50">
    <div class="container container-lg">
        <div class="breadcrumb-wrapper flex-between flex-wrap gap-16">
            <h6 class="mb-0">Shop</h6>
            <ul class="flex-align gap-8 flex-wrap">
                <li class="text-sm">
                    <a href="/home" class="text-gray-900 flex-align gap-8 hover-text-main-600">
                        <i class="ph ph-house"></i>
                        Home
                    </a>
                </li>
                <li class="flex-align">
                    <i class="ph ph-caret-right"></i>
                </li>
                <li class="text-sm text-main-600"> Product Shop </li>
            </ul>
        </div>
    </div>
</div>
<!-- ========================= Breadcrumb End =============================== -->
<!-- =============================== Shop Section Start ======================================== -->
<section class="shop py-80">
    <div class="container container-lg">
        <div class="row">

            <!-- Sidebar Start -->
            <div class="col-lg-3">
                <div class="shop-sidebar">
                    <button type="button" class="shop-sidebar__close d-lg-none d-flex w-32 h-32 flex-center border border-gray-100 rounded-circle hover-bg-main-600 position-absolute inset-inline-end-0 me-10 mt-8 hover-text-white hover-border-main-600">
                        <i class="ph ph-x"></i>
                    </button>
                    <div class="shop-sidebar__box border border-gray-100 rounded-8 p-32 mb-32">
                        <h6 class="text-xl border-bottom border-gray-100 pb-24 mb-24">Product Category</h6>
                        <ul class="max-h-540 overflow-y-auto scroll-sm">
                            <li class="mb-24">
                                <a href="<?php echo e(route('shop.index')); ?>" 
                                class="text-gray-900 hover-text-main-600 <?php echo e(!isset($categoryId) ? 'font-bold' : ''); ?>">
                                    All Categories
                                </a>
                            </li>
                           <!-- Category Filter -->
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="mb-24">
                                    <a href="<?php echo e(route('shop.index', [
                                        'category_id' => $category->id, 
                                        'min_price' => $minPrice, 
                                        'max_price' => $maxPrice,
                                        'color' => $color
                                    ])); ?>" 
                                    class="text-gray-900 hover-text-main-600 <?php echo e(isset($categoryId) && $categoryId == $category->id ? 'font-bold' : ''); ?>">
                                        <?php echo e($category->name); ?> (<?php echo e($category->products_count); ?>)
                                    </a>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>

                    <div class="shop-sidebar__box border border-gray-100 rounded-8 p-32 mb-32">
                        <h6 class="text-xl border-bottom border-gray-100 pb-24 mb-24">Filter by Price</h6>
                        <div class="custom--range">
                            <div id="slider-range"></div>
                            <div class="flex-between flex-wrap-reverse gap-8 mt-24 ">
                            <form method="GET" action="<?php echo e(route('shop.index')); ?>">
                                <input type="hidden" name="min_price" id="min_price" value="<?php echo e($minPrice ?? 0); ?>">
                                <input type="hidden" name="max_price" id="max_price" value="<?php echo e($maxPrice ?? 20000); ?>">
                                <button type="submit" class="btn btn-main h-40 flex-align">Filter </button>
                            </form>

                                <div class="custom--range__content flex-align gap-8">
                                    <span class="text-gray-500 text-md flex-shrink-0">Price:</span>
                                    <input type="text" class="custom--range__prices text-neutral-600 text-start text-md fw-medium" id="amount" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <div class="shop-sidebar__box border border-gray-100 rounded-8 p-32 mb-32">
                        <h6 class="text-xl border-bottom border-gray-100 pb-24 mb-24">Filter by Color</h6>
                        <ul class="color-filter-list max-h-540 overflow-y-auto scroll-sm">
                            <?php
                                $displayedColors = []; 
                            ?>
                            <!-- Color Filter -->
                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php $__currentLoopData = $product->variations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $variation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($variation->type == 'color' && !in_array($variation->hex_value, $displayedColors)): ?> 
                                        <li class="mb-16 color-item">
                                            <div class="form-check common-check common-radio checked-black">
                                                <input class="form-check-input" type="radio" name="color" id="color<?php echo e($variation->id); ?>" value="<?php echo e($variation->hex_value); ?>" style="display: none;" onclick="filterByColor('<?php echo e($variation->hex_value); ?>')">
                                                <label class="form-check-label color-swatch" for="color<?php echo e($variation->id); ?>" 
                                                    style="background-color: <?php echo e($variation->hex_value); ?>; display: inline-block; width: 24px; height: 24px; border-radius: 50%; cursor: pointer; transition: box-shadow 0.3s;"
                                                    onmouseover="this.style.boxShadow='0 0 5px rgba(0,0,0,0.5)';" 
                                                    onmouseout="if (!this.classList.contains('selected')) this.style.boxShadow='none';"></label>
                                            </div>
                                        </li>
                                        <?php
                                            $displayedColors[] = $variation->hex_value;
                                        ?>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                    
                    <div class="shop-sidebar__box border border-gray-100 rounded-8 p-32 mb-32">
                        <h6 class="text-xl border-bottom border-gray-100 pb-24 mb-24">Filter by Rating</h6>
                        <div class="flex-align gap-8 position-relative mb-20">
                            <label class="position-absolute w-100 h-100 cursor-pointer" for="rating5"> </label>
                            <div class="common-check common-radio mb-0">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="rating5">
                            </div>
                            <div class="progress w-100 bg-gray-100 rounded-pill h-8" role="progressbar" aria-label="Basic example" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-main-600 rounded-pill" style="width: 70%"></div>
                            </div>
                            <div class="flex-align gap-4">
                                <span class="text-xs fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                <span class="text-xs fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                <span class="text-xs fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                <span class="text-xs fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                <span class="text-xs fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            </div>
                            <span class="text-gray-900 flex-shrink-0">124</span>
                        </div>
                        <div class="flex-align gap-8 position-relative mb-20">
                            <label class="position-absolute w-100 h-100 cursor-pointer" for="rating4"> </label>
                            <div class="common-check common-radio mb-0">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="rating4">
                            </div>
                            <div class="progress w-100 bg-gray-100 rounded-pill h-8" role="progressbar" aria-label="Basic example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-main-600 rounded-pill" style="width: 50%"></div>
                            </div>
                            <div class="flex-align gap-4">
                                <span class="text-xs fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                <span class="text-xs fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                <span class="text-xs fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                <span class="text-xs fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                <span class="text-xs fw-medium text-gray-400 d-flex"><i class="ph-fill ph-star"></i></span>
                            </div>
                            <span class="text-gray-900 flex-shrink-0">52</span>
                        </div>
                        <div class="flex-align gap-8 position-relative mb-20">
                            <label class="position-absolute w-100 h-100 cursor-pointer" for="rating3"> </label>
                            <div class="common-check common-radio mb-0">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="rating3">
                            </div>
                            <div class="progress w-100 bg-gray-100 rounded-pill h-8" role="progressbar" aria-label="Basic example" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-main-600 rounded-pill" style="width: 35%"></div>
                            </div>
                            <div class="flex-align gap-4">
                                <span class="text-xs fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                <span class="text-xs fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                <span class="text-xs fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                <span class="text-xs fw-medium text-gray-400 d-flex"><i class="ph-fill ph-star"></i></span>
                                <span class="text-xs fw-medium text-gray-400 d-flex"><i class="ph-fill ph-star"></i></span>
                            </div>
                            <span class="text-gray-900 flex-shrink-0">12</span>
                        </div>
                        <div class="flex-align gap-8 position-relative mb-20">
                            <label class="position-absolute w-100 h-100 cursor-pointer" for="rating2"> </label>
                            <div class="common-check common-radio mb-0">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="rating2">
                            </div>
                            <div class="progress w-100 bg-gray-100 rounded-pill h-8" role="progressbar" aria-label="Basic example" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-main-600 rounded-pill" style="width: 20%"></div>
                            </div>
                            <div class="flex-align gap-4">
                                <span class="text-xs fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                <span class="text-xs fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                <span class="text-xs fw-medium text-gray-400 d-flex"><i class="ph-fill ph-star"></i></span>
                                <span class="text-xs fw-medium text-gray-400 d-flex"><i class="ph-fill ph-star"></i></span>
                                <span class="text-xs fw-medium text-gray-400 d-flex"><i class="ph-fill ph-star"></i></span>
                            </div>
                            <span class="text-gray-900 flex-shrink-0">5</span>
                        </div>
                        <div class="flex-align gap-8 position-relative mb-0">
                            <label class="position-absolute w-100 h-100 cursor-pointer" for="rating1"> </label>
                            <div class="common-check common-radio mb-0">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="rating1">
                            </div>
                            <div class="progress w-100 bg-gray-100 rounded-pill h-8" role="progressbar" aria-label="Basic example" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-main-600 rounded-pill" style="width: 5%"></div>
                            </div>
                            <div class="flex-align gap-4">
                                <span class="text-xs fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                <span class="text-xs fw-medium text-gray-400 d-flex"><i class="ph-fill ph-star"></i></span>
                                <span class="text-xs fw-medium text-gray-400 d-flex"><i class="ph-fill ph-star"></i></span>
                                <span class="text-xs fw-medium text-gray-400 d-flex"><i class="ph-fill ph-star"></i></span>
                                <span class="text-xs fw-medium text-gray-400 d-flex"><i class="ph-fill ph-star"></i></span>
                            </div>
                            <span class="text-gray-900 flex-shrink-0">2</span>
                        </div>
                    </div>
                        
                </div>
            </div>
            <!-- Sidebar End -->

           <!-- Content Start -->
            <div class="col-lg-9">
                <!-- Top Start -->
                <div class="flex-between gap-16 flex-wrap mb-40 ">
                    <span class="text-gray-900">
                        Showing <?php echo e($products->firstItem()); ?>-<?php echo e($products->lastItem()); ?> of <?php echo e($products->total()); ?> results
                    </span>
                    <div class="position-relative flex-align gap-16 flex-wrap">
                        <div class="list-grid-btns flex-align gap-16">
                            <button type="button" class="w-44 h-44 flex-center border border-gray-100 rounded-6 text-2xl list-btn">
                                <i class="ph-bold ph-list-dashes"></i>
                            </button>
                            <button type="button" class="w-44 h-44 flex-center border border-main-600 text-white bg-main-600 rounded-6 text-2xl grid-btn">
                                <i class="ph ph-squares-four"></i>
                            </button>
                        </div>  
                        <button type="button" class="w-44 h-44 d-lg-none d-flex flex-center border border-gray-100 rounded-6 text-2xl sidebar-btn">
                            <i class="ph-bold ph-funnel"></i>
                        </button>
                    </div>
                </div>
                <!-- Top End -->

                <div class="list-grid-wrapper">
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                            <a href="<?php echo e(url('/product-details/' . $product->product_id)); ?>" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                <img src="<?php echo e(asset('storage/' . $product->images->first()->image_path)); ?>" 
                                    alt="<?php echo e($product->product_name); ?>" 
                                    class="product-image">
                                <span class="product-card__badge bg-primary-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">Best Sale</span>
                            </a>

                            <div class="product-card__content mt-16">
                                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                                    <a href="" class="link text-line-2" tabindex="0"><?php echo e($product->product_name); ?></a>
                                </h6>
                                <div class="flex-align mb-20 mt-16 gap-6">
                                    <span class="text-xs fw-medium text-gray-500">4.8</span>
                                    <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                    <span class="text-xs fw-medium text-gray-500">(17k)</span>
                                </div>
                                <div class="mt-8">
                                    <div class="progress w-100 bg-color-three rounded-pill h-4" role="progressbar" aria-label="Basic example" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-main-two-600 rounded-pill" style="width: 35%"></div>
                                    </div>
                                    <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                                </div>
                                <div class="product-card__price my-20">
                                    <span class="text-heading text-md fw-semibold ">Rs <?php echo e(number_format($product->normal_price, 2)); ?> <span class="text-gray-500 fw-normal">/Qty</span></span>
                                </div>
                                <a href="" style="width:230px" class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium" tabindex="0">
                                    Add To Cart <i class="ph ph-shopping-cart"></i> 
                                </a>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>


                <!-- Pagination Start -->
                <ul class="pagination flex-center flex-wrap gap-16">
                    <li class="page-item">
                        <a class="page-link flex-center text-xxl rounded-8 fw-medium text-neutral-600 border border-gray-100" href="<?php echo e($products->previousPageUrl()); ?>">
                            <i class="ph-bold ph-arrow-left"></i>
                        </a>
                    </li>
                    <?php for($i = 1; $i <= $products->lastPage(); $i++): ?>
                        <li class="page-item <?php echo e($i == $products->currentPage() ? 'active' : ''); ?>">
                            <a class="page-link flex-center text-md rounded-8 fw-medium text-neutral-600 border border-gray-100" href="<?php echo e($products->url($i)); ?>"><?php echo e($i); ?></a>
                        </li>
                    <?php endfor; ?>
                    <li class="page-item">
                        <a class="page-link flex-center text-xxl rounded-8 fw-medium text-neutral-600 border border-gray-100" href="<?php echo e($products->nextPageUrl()); ?>">
                            <i class="ph-bold ph-arrow-right"></i>
                        </a>
                    </li>
                </ul>
                <!-- Pagination End -->
            </div>
            <!-- Content End -->


        </div>
    </div>
 </section>
<!-- =============================== Shop Section End ======================================== -->


    <!-- ========================== Shipping Section Start ============================ -->
 <section class="shipping mb-24" id="shipping">
    <div class="container container-lg">
        <div class="row gy-4">
            <div class="col-xxl-3 col-sm-6" data-aos="zoom-in" data-aos-duration="400">
                <div class="shipping-item flex-align gap-16 rounded-16 bg-main-50 hover-bg-main-100 transition-2">
                    <span class="w-56 h-56 flex-center rounded-circle bg-main-600 text-white text-32 flex-shrink-0"><i class="ph-fill ph-car-profile"></i></span>
                    <div class="">
                        <h6 class="mb-0">Free Shipping</h6>
                        <span class="text-sm text-heading">Free shipping all over the US</span>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-sm-6" data-aos="zoom-in" data-aos-duration="600">
                <div class="shipping-item flex-align gap-16 rounded-16 bg-main-50 hover-bg-main-100 transition-2">
                    <span class="w-56 h-56 flex-center rounded-circle bg-main-600 text-white text-32 flex-shrink-0"><i class="ph-fill ph-hand-heart"></i></span>
                    <div class="">
                        <h6 class="mb-0"> 100% Satisfaction</h6>
                        <span class="text-sm text-heading">Free shipping all over the US</span>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-sm-6" data-aos="zoom-in" data-aos-duration="800">
                <div class="shipping-item flex-align gap-16 rounded-16 bg-main-50 hover-bg-main-100 transition-2">
                    <span class="w-56 h-56 flex-center rounded-circle bg-main-600 text-white text-32 flex-shrink-0"><i class="ph-fill ph-credit-card"></i></span>
                    <div class="">
                        <h6 class="mb-0"> Secure Payments</h6>
                        <span class="text-sm text-heading">Free shipping all over the US</span>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-sm-6" data-aos="zoom-in" data-aos-duration="1000">
                <div class="shipping-item flex-align gap-16 rounded-16 bg-main-50 hover-bg-main-100 transition-2">
                    <span class="w-56 h-56 flex-center rounded-circle bg-main-600 text-white text-32 flex-shrink-0"><i class="ph-fill ph-chats"></i></span>
                    <div class="">
                        <h6 class="mb-0"> 24/7 Support</h6>
                        <span class="text-sm text-heading">Free shipping all over the US</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </section>
<!-- ========================== Shipping Section End ============================ -->
    <!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- jQuery UI -->
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>


   
    <script>
        $(function() {
            $( "#slider-range" ).slider({
                range: true,
                min: 0,
                max: 20000,
                values: [ <?php echo e($minPrice ?? 0); ?>, <?php echo e($maxPrice ?? 20000); ?> ],
                slide: function( event, ui ) {
                    $( "#amount" ).val( "Rs " + ui.values[ 0 ] + " - Rs " + ui.values[ 1 ] );
                    $( "#min_price" ).val(ui.values[0]);
                    $( "#max_price" ).val(ui.values[1]);
                }
            });
            $( "#amount" ).val( "Rs " + $( "#slider-range" ).slider( "values", 0 ) + " - Rs " + $( "#slider-range" ).slider( "values", 1 ) );
        });
    </script>

    <script>
    // Change the box shadow of the selected color
        const colorInputs = document.querySelectorAll('input[name="color"]');
        colorInputs.forEach(input => {
            input.addEventListener('change', function() {
                // Remove the selected box shadow from all labels
                colorInputs.forEach(input => {
                    const label = document.querySelector(`label[for="${input.id}"]`);
                    label.style.boxShadow = 'none';
                    label.classList.remove('selected'); // Remove selected class
                });
                // Add box shadow for the selected label
                const selectedLabel = document.querySelector(`label[for="${this.id}"]`);
                selectedLabel.style.boxShadow = '0 0 5px rgba(255, 69, 0, 0.7)'; 
                selectedLabel.classList.add('selected'); 
            });
        });
    </script>
    <script>
    function filterByColor(color) {
        const url = new URL(window.location.href);
        const params = new URLSearchParams(url.search);
        params.set('color', color); // Set the color parameter

        // Make sure to keep existing price and category filters
        params.set('min_price', document.getElementById('min_price').value);
        params.set('max_price', document.getElementById('max_price').value);
        params.set('category_id', "<?php echo e($categoryId); ?>");

        window.location.href = url.pathname + '?' + params.toString();
    }
    </script>

<?php $__env->stopSection(); ?>



 
<?php echo $__env->make('frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DK-Mart\resources\views\frontend\shop.blade.php ENDPATH**/ ?>