@extends('layouts.plantilla')

@section('title','vensuca')

@section('content')

</header>
<!-- end header -->
<!-- inner page banner -->
<div id="inner_banner" class="section inner_banner_section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="title-holder">
            <div class="title-holder-cell text-left">
              <h1 class="page-title">Detalles del producto</h1>
              <ol class="breadcrumb">
                <li><a href="index.html">inicio</a></li>
                <li class="active">Detalles del producto</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end inner page banner -->
<!-- section -->
<div class="section padding_layout_1 product_detail">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="row">
          <div class="col-xl-6 col-lg-12 col-md-12">
            <div class="product_detail_feature_img hizoom hi2">
              <div class='hizoom hi2'> <img src="assets/images/it_service/1.jpg" alt="#" /> </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-12 col-md-12 product_detail_side detail_style1">
            <div class="product-heading">
              <h2>{{$articulo->nombre}}</h2>
            </div>
            <div class="product-detail-side"><span class="new-price">${{$articulo->costo}}</span></div>
            <div class="detail-contant">
              <p>Sin detalles.</p>
              <form class="cart" method="post" action="it_cart.html">
                <div class="quantity">
                  <input step="1" min="1" max="100" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" type="number">
                </div>
                <button type="submit" class="btn sqaure_bt">Agregar al carrito</button>
              </form>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="full">
              <div class="tab_bar_section">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#description">Descripción</a> </li>
                  <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#reviews">Comentarios</a> </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                  <div id="description" class="tab-pane active">
                    <div class="product_desc">
                      <p>Sin descripción</p>
                    </div>
                  </div>
                  <div id="reviews" class="tab-pane fade">
                    <div class="product_review">
                      <div class="commant-text row">
                        <div class="col-lg-2 col-md-2 col-sm-4">
                          <div class="profile"> <img class="img-responsive" src="images/it_service/client1.png" alt="#"> </div>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8">
                          <h5>David</h5>
                          <p><span class="c_date">March 2, 2018</span> | <span><a rel="nofollow" class="comment-reply-link" href="#">Reply</a></span></p>
                          <span class="rating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </span>
                          <p class="msg">ThisThis book is a treatise on the theory of ethics, very popular during the Renaissance. 
                            The first line of Lorem Ipsum, “Lorem ipsum dolor sit amet.. </p>
                        </div>
                      </div>
                      <div class="commant-text row">
                        <div class="col-lg-2 col-md-2 col-sm-4">
                          <div class="profile"> <img class="img-responsive" src="images/it_service/client2.png" alt="#"> </div>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8">
                          <h5>Jack</h5>
                          <p><span class="c_date">March 2, 2018</span> | <span><a rel="nofollow" class="comment-reply-link" href="#">Reply</a></span></p>
                          <span class="rating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </span>
                          <p class="msg">Nunc augue purus, posuere in accumsan sodales ac, euismod at est. Nunc faccumsan ermentum consectetur metus placerat mattis. Praesent mollis justo felis, accumsan faucibus mi maximus et. Nam hendrerit mauris id scelerisque placerat. Nam vitae imperdiet turpis</p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="full review_bt_section">
                            <div class="float-right"> <a class="btn sqaure_bt" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Realizar comentario</a> </div>
                          </div>
                          <div class="full">
                            <div id="collapseExample" class="full collapse commant_box">
                              <form accept-charset="UTF-8" action="index.html" method="post">
                                <input id="ratings-hidden" name="rating" type="hidden">
                                <textarea class="form-control animated" cols="50" id="new-review" name="comment" placeholder="Comentar..." required=""></textarea>
                                <div class="full_bt center">
                                  <button class="btn sqaure_bt" type="submit">Enviar</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="full">
              <div class="main_heading text_align_left" style="margin-bottom: 35px;">
                <h3>Productos relacionados</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
            <a href="it_shop_detail.html">
              <div class="col-md-4 col-sm-6 col-xs-12 margin_bottom_30_all">
                <div class="product_list">
                    <div class="product_img"> <img class="img-responsive" src="images/it_service/1.jpg" alt=""> </div>
                    <div class="product_detail_btm">
                        <div class="center">
                          <h4><a href="it_shop_detail.html">Norton Internet Security</a></h4>
                        </div>

                        <div class="product_price">
                            <p><span class="new_price">$25.00</span></p>
                        </div>
                      </div>
                  </div>
              </div>
            </a>
                      <a href="it_shop_detail.html">
              <div class="col-md-4 col-sm-6 col-xs-12 margin_bottom_30_all">
                <div class="product_list">
                    <div class="product_img"> <img class="img-responsive" src="images/it_service/1.jpg" alt=""> </div>
                    <div class="product_detail_btm">
                        <div class="center">
                          <h4><a href="it_shop_detail.html">Norton Internet Security</a></h4>
                        </div>

                        <div class="product_price">
                            <p><span class="new_price">$25.00</span></p>
                        </div>
                      </div>
                  </div>
              </div>
            </a>
                      <a href="it_shop_detail.html">
              <div class="col-md-4 col-sm-6 col-xs-12 margin_bottom_30_all">
                <div class="product_list">
                    <div class="product_img"> <img class="img-responsive" src="images/it_service/1.jpg" alt=""> </div>
                    <div class="product_detail_btm">
                        <div class="center">
                          <h4><a href="it_shop_detail.html">Norton Internet Security</a></h4>
                        </div>

                        <div class="product_price">
                            <p><span class="new_price">$25.00</span></p>
                        </div>
                      </div>
                  </div>
              </div>
            </a>
        </div>
      </div>
            <div class="col-md-3">
        <div class="side_bar">
          </div>
            <h4>Otros servicios</h4>
            <div class="categary">
              <ul>
                <li><a href="it_data_recovery.html"><i class="fa fa-angle-right"></i>Fabricación de mangueras</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end section -->

@endsection