
<?php $__env->startSection('admin_content'); ?>
    <main role="main">  
            <div class="card">
                <div class="container-fliud">
                    <form name="frmsanphamchitiet" id="frmsanphamchitiet" method="post" action="#">
                        <div class="wrapper">
                            <div class="row">
                                <div class=" col-md-6">
                                    <div id="carouselExampleControls" class="carousel slide" style="width: 100%" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100" src="<?php echo e('../public/upload/' .  $cate_detail->product_file); ?>"
                                                    alt="First slide">
                                            </div>
                                            <?php $__currentLoopData = $img_detail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100"
                                                        src="<?php echo e('../public/upload/' . $item->url); ?>" alt="First slide">
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="details col-md-6">
                                    <h3 class="product-title"><?php echo e($cate_detail->product_name); ?></h3>
                                    <br>
                                    <h4 class="card-text">Giá bán: <span><?php echo e(number_format($cate_detail->product_price )); ?> vnđ</span></h4>
                                    <p class="vote"><strong>100%</strong> hàng <strong>Chất lượng</strong>, đảm bảo
                                        <strong>Uy tín</strong>!
                                    </p>
                                    <div class="form-group">
                                        <label for="soluong">Số lượng đặt mua:</label>
                                        <input type="number" class="form-control" id="soluong" name="soluong_chitiet" min="0">
                                    </div>
                                    <div class="action">
                                        <a href="<?php echo e(URL::to('#')); ?>">
                                            <button type="button" style="width:180px" class="btn btn-danger">Thêm vào giỏ
                                                hàng</button>
                                        </a>
                                    </div>
                                    <br>
                                   
                                    <div class="card">
                                        <div class="container-fluid">
                                            <h3>Thông tin về sản phẩm</h3>
                                            <div class="row">
                                                <div class="col">
                                                    Vi xử lý Dual-core 1 Cortex-A9 tốc độ 1GHz
                                                    Using color to add meaning only provides a visual indication, which will n
                                                    ot be conveyed to users of assistive technologies – such as screen readers.
                                                    Ensure that information denoted by the color is either obvious
                                                    from the content itself (e.g. the visible text), or is i
                                                    ncluded through alternative means, such as additional text hidden with the .sr-only class.
                                                    Using color to add meaning only provides a visual indication, which will not be conveyed to users of
                                                    assistive t
                                                    chnologies – such as screen readers. Ensure that information denoted by the color is either obvious
                                                    f
                                                    rom the content itself (e.g. the visible text), or is included through alternative means, such
                                                    as additional text hidden with the .sr-only class.
                                                    <span class="st-icon-delicious"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                </div>

                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>

        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\relaravel\resources\views/categories/detail.blade.php ENDPATH**/ ?>