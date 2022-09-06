<?php
$xuhuong = DB::table('tin')
    ->orderby('ngayDang', 'DESC')
    ->limit(10)
    ->get();
?>
<style>
    .product_list {
    height: 240px;
}
    </style>
<section class="blockProductNew tp_product_new">
    <div class="container">
        <h2 class="tp_title">
            <span style="color: #2daaed;">PLAYLIST HOT NHẤT</span></h2>
        <div class="main-list-product">
            <div class="product_list owl-carousel owl-theme owl-loaded owl-drag" style="hight: 230px;">
                <div class="owl-stage-outer">
                    <div class="owl-stage"
                        style="transform: translate3d(-690px, 0px, 0px); transition: all 0s ease 0s; width: 2760px;">
                        @foreach ($xuhuong as $xu)
                            <div class="owl-item active" style="width: 230px;">
                                <div class="itemProduct ivt p37701559">
                                    <div class="item_content_product">
                                        <div class="img_product">
                                            <a href="">
                                                <img width="100%" class="lazyautosizes lazyloaded"
                                                    data-sizes="auto"
                                                    src="{{$xu->urlHinh}}"
                                                    
                                                    sizes="210px">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <div class="name_product"><a
                                                    href="{{ url('/tin',[$xu->id])}}"
                                                    class="tp_product_name">{{$xu->tieuDe}}</a></div>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>

            <div class="clearfix"></div>
        </div>
    </div>
</section>
