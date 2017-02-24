
<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 2/17/2017
 * Time: 9:39 PM
 */

?>


<div class="page-barner-area">
    <div class="container wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <div class="barner-text">
                    <h1>Thực đơn</h1>
                    <ul class="page-location">
                        <li><a href="#">Home</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li class="active"><a href="#">Thực đơn</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="wrapper wrap-content">

    <div class="wrap-pro">
        <ul class="list-pro">

         <!--   <li class="item-01 item-0 first">
                <a href="http://www.lotteria.vn/vn/thuc-don/chi-tiet/397/big-pork-combo/"><img src="http://www.lotteria.vn/resize.php?w=250&amp;h=250&amp;src=data/201635/2a_5896.png&amp;zc=1" alt=""></a>
                <h2><a href="http://www.lotteria.vn/vn/thuc-don/chi-tiet/397/big-pork-combo/">BIG PORK COMBO</a></h2>
                <p class="price"><span>69,000 đ</span></p>
                <a href="javascript:;" data-id="397" class="order OrderCart">Chọn</a>
            </li>
            -->
            <?php foreach ($mon_an as $mon)
            {
                ?>
                <li>
                    <a href="#"><img
                                src="img/monan/<?php echo $mon->Hinh_anh ?>"
                                alt=""></a>
                    <h2><a href="#"><?php echo $mon->Ten_mon_an ?></a>
                    </h2>
                    <p class="price"><span><?php echo number_format( $mon->Don_gia) ?> đ</span></p>
                    <a href="#" data-id="397" class="order OrderCart">Chọn</a>
                </li>
                <?php
            }?>

        </ul>
    </div>

    <div style="margin-top:10px;">
    </div>
    <!--
        <div id="float-nav" class="pro">
            <a href="http://www.lotteria.vn/vn/dat-hang/" class="cart cartNumber">0</a>
            <a href="http://www.lotteria.vn/vn/khuyen-mai/" class="gift">Gift</a>
        </div>
        -->
</div>

