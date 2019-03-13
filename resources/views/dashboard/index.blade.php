@extends('layouts.app')

@section('title')
    Dashboard
@endsection


@section('content')
<div>
    <div class="jumbotron">
        <h2>
            Dashboard
        </h2>
        <p style="text-align: justify;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        <div class="row">
            <div class="col-md-6">
                <h4><a href="{{ url('/living-room') }}">Living Room</a></h4>
                <div id="living-room" class="carousel slide" data-ride="carousel">
                  <ul class="carousel-indicators">
                    <li data-target="#living-room" data-slide-to="0" class="active"></li>
                    <li data-target="#living-room" data-slide-to="1"></li>
                    <li data-target="#living-room" data-slide-to="2"></li>
                  </ul>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="https://www.lg.com/us/images/tvs/50pn5300/gallery/large01.jpg" alt="TV">
                      <div class="carousel-caption">
                        <h3>TV</h3>
                      </div>   
                    </div>
                    <div class="carousel-item">
                      <img src="https://images.costco-static.com/ImageDelivery/imageService?profileId=12026540&imageId=2000890-847__1&recipeName=350" alt="Couch">
                      <div class="carousel-caption">
                        <h3>Couch</h3>
                      </div>   
                    </div>
                    <div class="carousel-item">
                      <img src="https://images.homedepot-static.com/productImages/58c9f3ac-7e02-4621-b8d8-a38e1fa062d7/svn/illuminations-christmas-string-lights-l9024021nu01-64_1000.jpg" alt="Lights">
                      <div class="carousel-caption">
                        <h3>Lights</h3>
                      </div>   
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#living-room" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                  </a>
                  <a class="carousel-control-next" href="#living-room" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                  </a>
                </div>
                <br>
                <p style="text-align: justify;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <p>Total Price : S$100.00</p>
                <p>Maintenance : S$100.00</p>
                <p>Monthly Electricity : S$100.00</p>
            </div>
            <div class="col-md-6">
                <h4><a href="{{ url('/kitchen') }}">Kitchen</a></h4>
                <div id="kitchen" class="carousel slide" data-ride="carousel">
                  <ul class="carousel-indicators">
                    <li data-target="#kitchen" data-slide-to="0" class="active"></li>
                    <li data-target="#kitchen" data-slide-to="1"></li>
                    <li data-target="#kitchen" data-slide-to="2"></li>
                  </ul>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="https://cnet3.cbsistatic.com/img/hnHTgSaLnLeinNgfKUdQ4-vB1sM=/830x467/2018/01/29/b44d35a5-5488-48a8-a5aa-942cda192504/lg-lfxs28566m-fridge-6.jpg" alt="Refrigerator">
                      <div class="carousel-caption">
                        <h3>Refrigerator</h3>
                      </div>   
                    </div>
                    <div class="carousel-item">
                      <img src="https://media.wired.com/photos/5ba5885280ec002859e56ab0/master/w_1556,c_limit/microwave.jpg" alt="Microwave">
                      <div class="carousel-caption">
                        <h3>Microwave</h3>
                      </div>   
                    </div>
                    <div class="carousel-item">
                      <img src="https://i.ytimg.com/vi/sWkj6yGvISk/hqdefault.jpg" alt="Stove">
                      <div class="carousel-caption">
                        <h3>Stove</h3>
                      </div>   
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#kitchen" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                  </a>
                  <a class="carousel-control-next" href="#kitchen" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                  </a>
                </div>
                <br>
                <p style="text-align: justify;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                <p>Total Price : S$100.00</p>
                <p>Maintenance : S$100.00</p>
                <p>Monthly Electricity : S$100.00</p>                        
            </div>                    
            <div class="col-md-6">
                <h4><a href="{{ url('/bedrooms') }}">Bedrooms</a></h4>
                <div id="bedrooms" class="carousel slide" data-ride="carousel">
                  <ul class="carousel-indicators">
                    <li data-target="#bedrooms" data-slide-to="0" class="active"></li>
                    <li data-target="#bedrooms" data-slide-to="1"></li>
                    <li data-target="#bedrooms" data-slide-to="2"></li>
                  </ul>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="https://cdn.shopify.com/s/files/1/0661/2373/products/2.Fabric-Bed_2048x2048.jpeg?v=1516956007" alt="Bed">
                      <div class="carousel-caption">
                        <h3>Bed</h3>
                      </div>   
                    </div>
                    <div class="carousel-item">
                      <img src="https://4.imimg.com/data4/UO/MM/MY-14300348/low-floor-double-bed-500x500.jpg" alt="Bed">
                      <div class="carousel-caption">
                        <h3>Bed</h3>
                      </div>   
                    </div>
                    <div class="carousel-item">
                      <img src="http://roetsjordanbrewery.com/wp-content/uploads/2018/09/built-in-wardrobe-designs-for-bedroom-best-wardrobes-for-small-bedrooms-bedroom-cabinet-design-ideas-for-small-spaces.jpg" alt="Wardrobe">
                      <div class="carousel-caption">
                        <h3>Wardrobe</h3>
                      </div>   
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#bedrooms" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                  </a>
                  <a class="carousel-control-next" href="#bedrooms" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                  </a>
                </div>
                <br>
                <p style="text-align: justify;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <p>Total Price : S$100.00</p>
                <p>Maintenance : S$100.00</p>
                <p>Monthly Electricity : S$100.00</p>                        
            </div>
            <div class="col-md-6">
                <h4><a href="{{ url('/dining') }}">Dining</a></h4>
                <div id="dining" class="carousel slide" data-ride="carousel">
                  <ul class="carousel-indicators">
                    <li data-target="#dining" data-slide-to="0" class="active"></li>
                    <li data-target="#dining" data-slide-to="1"></li>
                  </ul>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="https://4.imimg.com/data4/XT/BT/ANDROID-23336468/product-500x500.jpeg" alt="Dining Table">
                      <div class="carousel-caption">
                        <h3>Table</h3>
                      </div>   
                    </div>
                    <div class="carousel-item">
                      <img src="https://alexjm.co/i/2019/01/pads-chair-lowes-dining-for-small-dresser-furniture-lighting-target-menards-rustic-dressers-covers-unit-table-houzz-whit-grey-decor-ideas-inspiration-spaces-room-height-chairs.jpg" alt="Cabinet">
                      <div class="carousel-caption">
                        <h3>Cabinet</h3>
                      </div>   
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#dining" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                  </a>
                  <a class="carousel-control-next" href="#dining" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                  </a>
                </div>
                <br>
                <p style="text-align: justify;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <p>Total Price : S$100.00</p>
                <p>Maintenance : S$100.00</p>
                <p>Monthly Electricity : S$100.00</p>                        
            </div>
            <div class="col-md-6">
                <h4><a href="{{ url('/bathroom') }}">Bathrooms</a></h4>
                <div id="demo" class="carousel slide" data-ride="carousel">
                  <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                  </ul>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="http://www.therunnerssoul.com/wp-content/uploads/2018/07/affordable-bathroom-sinks-double-lavatory-sink-complete-bathroom-sink.jpg" alt="Sink">
                      <div class="carousel-caption">
                        <h3>Sink</h3>
                        <p>We had such a great time in LA!</p>
                      </div>   
                    </div>
                    <div class="carousel-item">
                      <img src="http://www.betterlifestylesinc.com/images/pictures/toiletthreefifty.JPG" alt="Toilet">
                      <div class="carousel-caption">
                        <h3>Toilet</h3>
                      </div>   
                    </div>
                    <div class="carousel-item">
                      <img src="https://d2f6oilijz0a9g.cloudfront.net/images/presets/product_page_main/store/products/1576/51000001550-Playtime-walk-in-shower-1400-1.jpg" alt="Shower">
                      <div class="carousel-caption">
                        <h3>Shower</h3>
                      </div>   
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                  </a>
                  <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                  </a>
                </div>
                <br>
                <p style="text-align: justify;">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <p>Total Price : S$100.00</p>
                <p>Maintenance : S$100.00</p>
                <p>Monthly Electricity : S$100.00</p>                        
            </div>         
        </div>
    </div>
</div>
@endsection