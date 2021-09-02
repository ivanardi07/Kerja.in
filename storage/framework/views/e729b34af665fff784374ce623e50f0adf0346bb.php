<?php $__env->startSection('content'); ?>

    <!-- Slider -->


    <div class="main_slider" style="background-image:url(<?php echo e(asset('assets/images/bg2.jpg')); ?>)">
        <div class="container fill_height">
            <div class="row align-items-center fill_height">
                <div class="col">
                    <div class="main_slider_content">
                        <h6>telah dibuka pada masa pandemi</h6>
                        <h1>Jasa Layanan IT Kepercayaan Anda</h1>
                        <?php $__currentLoopData = $categoryMenu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="red_button shop_now_button"><a href="/category/<?php echo e($menu->slug); ?>">pesan sekarang</a></div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- New Arrivals -->

    <div class="new_arrivals">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="section_title new_arrivals_title">
                        <h2>Produk Terbaru</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col text-center">
                    <div class="new_arrivals_sorting">
                        <ul class="arrivals_grid_sorting clearfix button-group filters-button-group">
                            <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center active is-checked"
                                data-filter="*">tampilkan
                            </li>
                            <?php $__currentLoopData = $categoryMenu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center"
                                    data-filter=".<?php echo e($menu->id); ?>"><?php echo e($menu->category_name); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="product-grid"
                         data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>

                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="/product/<?php echo e($product->slug); ?>">
                                <div class="product-item <?php echo e($product->category_id); ?> ">
                                <div class="product discount product_filter">
                                    <div class="product_image">
                                        <?php echo $product->thumbs; ?>

                                    </div>

                                    <div class="product_info">
                                        <h6 class="product_name"><a
                                                    href="/product/<?php echo e($product->slug); ?>"><?php echo e($product->product_name); ?></a>
                                        </h6>

                                        <div class="product_price">Rp <?php echo e(number_format($product->product_price)); ?><span>Rp <?php echo e(number_format($product->original_price )); ?>

                                                </span></div>

                                        <input type="number" class="quantity" id="quantity" name="quantity" value="1"
                                               style="width: 50px; margin-right: 10px;">
                                    </div>
                                </div>
                                <div class="add_to_cart_button red_button"><a
                                            href="<?php echo e(route('basket.create', ['id' => $product->id])); ?>">add to cart</a>
                                </div>
                            </div>
                            </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Deal of the week -->

    <div class="deal_ofthe_week">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="deal_ofthe_week_img">
                        <img src="<?php echo e(asset('assets/images/cecan.png')); ?>" alt="">
                    </div>
                </div>
                <div class="col-lg-6 text-right deal_ofthe_week_col">
                    <div class="deal_ofthe_week_content d-flex flex-column align-items-center float-right">
                        <div class="section_title">
                            <h2>Jadilah Seller Kami</h2>
                            <p>Raih reward menjadi seller dalam waktu dekat !</p>
                        </div>
                        
                        <ul class="timer">
                            <li class="d-inline-flex flex-column justify-content-center align-items-center">
                                <div id="day" class="timer_num">03</div>
                                <div class="timer_unit">Hari</div>
                            </li>
                            <li class="d-inline-flex flex-column justify-content-center align-items-center">
                                <div id="hour" class="timer_num">15</div>
                                <div class="timer_unit">Jam</div>
                            </li>
                            <li class="d-inline-flex flex-column justify-content-center align-items-center">
                                <div id="minute" class="timer_num">45</div>
                                <div class="timer_unit">Menit</div>
                            </li>
                            <li class="d-inline-flex flex-column justify-content-center align-items-center">
                                <div id="second" class="timer_num">23</div>
                                <div class="timer_unit">Detik</div>
                            </li>
                        </ul>
                        <div class="red_button deal_ofthe_week_button"><a href="#">gabung sekarang</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Benefit -->

    <div class="benefit">
        <div class="container">
            <div class="row benefit_row">
                <div class="col-lg-4 benefit_col">
                    <div class="benefit_item d-flex flex-row align-items-center">
                        <div class="benefit_icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
                        <div class="benefit_content">
                            <h6>free ongkir</h6>
                            <p>Untuk area Kota Malang</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 benefit_col">
                    <div class="benefit_item d-flex flex-row align-items-center">
                        <div class="benefit_icon"><i class="fa fa-money" aria-hidden="true"></i></div>
                        <div class="benefit_content">
                            <h6>cash on delivery</h6>
                            <p>Bertemu dan bayar langsung ke penjual</p>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-3 benefit_col">
                    <div class="benefit_item d-flex flex-row align-items-center">
                        <div class="benefit_icon"><i class="fa fa-undo" aria-hidden="true"></i></div>
                        <div class="benefit_content">
                            <h6>45 days return</h6>
                            <p>Making it Look Like Readable</p>
                        </div>
                    </div>
                </div> -->
                <div class="col-lg-4 benefit_col">
                    <div class="benefit_item d-flex flex-row align-items-center">
                        <div class="benefit_icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
                        <div class="benefit_content">
                            <h6>buka setiap jam</h6>
                            <p>08AM - 06PM</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>


    <script>

        $('.add_to_cart_button').find('a').click(function (event) {
            event.preventDefault();
            var quantity = $(this).parent().prev().find('input').val();
            $.ajax({
                type: "POST",
                url: $(this).attr('href'),
                data: {quantity: quantity}
                , success: function (data) {
                    console.log(data);
                    $('#checkout_items').html(data.cartCount);
                }
            });
            return false; //for good measure
        });
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>