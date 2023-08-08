<x-app-layout>
  @section('title', 'Menus')
  <style>
    .gallery.menu {
      /* display: flex; */
      /* gap: .5rem; */
    }

    .menus .menu .item {
      border-radius: 0;
      position: relative;
      overflow: hidden;
      padding: 0;
      border: .3rem solid transparent;
    }

    .menus .menu a img {
      max-height: 55rem;
      min-height: 35rem;
      width: 100%;
      transition-duration: .5s;
      opacity: 1;
    }

    .menus .menu a img:hover {
      opacity: 1;
    }
    /* 
    @media (max-width: 768px) {
      .menus .menu .item {
        width: 99%;
      }
    } */

  </style>
  <section class="section banner">
    <div class="bg fix layer" style="background-image: url({{ asset('images/s33.jpg') }})"></div>
    </div>
    <div class="banner-text">
      <h1>Our Menu</h1>
      <img src="{{ asset('images/title_separate_line.png') }}" alt="">
      <p></p>
    </div>
    <div class="content-wrap">
      <div class="content-text text-center" style="margin: 5rem;">
        <a href="/images/menu.pdf" target="_blank" class="menu-btn" style="padding: 15px 25px;
    display: inline-block;
    background-color: #f08113;
    color: #fff;
    margin-bottom: 28px;text-decoration: none;
    border-radius: 6px;
    -webkit-transition: opacity .35s ease-out;
    -o-transition: opacity .35s ease-out;
    transition: opacity .35s ease-out;">
          <i class="fa fa-file-pdf-o "></i>
          <span style="margin-left:5px;"> <b> Dine in PDF Menu</b></span>
        </a>
        <p style="max-width: 85rem; margin: auto; font-size: 1.6rem; text-align: left; line-height: 3.2rem;">We pride ourselves in working together to combine great tasting food, made from high quality ingredients with service that our customers know and trust.</p>
        <p style="max-width: 85rem; margin: auto; font-size: 1.6rem; text-align: left; line-height: 3.2rem;"> <a style="text-decoration: underline; color: #f08113;" href="/Allergen.pdf">Allergen PDF booklet</a></p>
        

      </div>
      {{-- <i class="icon material-icons">lunch_dining</i> --}}
      <div class="container-fluid menus">
        <div class="menu-page-tab">
          <ul class="tabs">
            <li><a href="#mains">Mains</a></li>
            <li><a href="#donerBox">Doner boxes</a></li>
            <li><a href="#burgers">Burgers</a></li>
            <li><a href="#kidsMeal">Kids meal</a></li>
            <li><a href="#fries">Fries</a></li>
          {{--  <li><a href="#pizzas">Pizzas</a></li>
            <li><a href="#garlicBread">Garlic bread</a></li> --}}
            <li><a href="#sideOrders">Side orders</a></li>
            {{-- <li><a href="{{ route('allergen') }}">Allegren Info</a></li> --}}
          </ul>
        </div>
        <div class="row" id="mains">
          <!-- <h2>Mains</h2> -->
          <div class="col-xs-12">
            <div class="gallery menu mains row">
              <a href="{{ asset('images/Doner.jpg') }}" class="item col-sm-12 col-md-4">
                <img src="{{ asset('images/Doner.jpg') }}" alt="" title="Salva Doner Kebab" class="img-fluid" />
                <h4>Doner Kebab</h4>
              </a>
             
              <a href="{{ asset('images/lah.jpg') }}" class="item col-sm-12 col-md-4">
                <img src="{{ asset('images/lah.jpg') }}" alt="" title="Salva Doner Lahmacun Wrap" class="img-fluid" />
                <h4>Doner Lahmacun Wrap</h4>
              </a>
              <a href="{{ asset('images/durm.jpg') }}" class="item col-sm-12 col-md-4">
                <img src="{{ asset('images/durm.jpg') }}" alt="" title="Salva Doner Durum Wrap" class="img-fluid" />
                <h4>Doner Durum Wrap</h4>
              </a>
            </div>
          </div>
        </div>
        <div class="row" id="donerBox" style="color:#ff671f";>
          <h2 style="color:#f08113">Doner boxes</h2>
          <div class="col-xs-12">
            <div class="gallery menu doner-box row row-cols-1 row-cols-md-2 row-cols-lg-4">
              <a href="{{ asset('images/1.jpg') }}" class="item col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <img src="{{ asset('images/1.jpg') }}" alt="" title="Doner Platter" class="img-fluid" />
                <h4>Doner Platter</h4>
              </a>
              <a href="{{ asset('foods/Doner_Box_Fries_Cheese.jpg') }}" class="item col-sm-12 col-md-6 col-lg-6">
                <img src="{{ asset('foods/Doner_Box_Fries_Cheese.jpg') }}" alt="" title="Doner Box with Chips & Cheese"
                  class="img-fluid" />
                <h4>Doner Box with Chips & Cheese</h4>
              </a>
              <a href="{{ asset('foods/Doner_Box_Fries.jpg') }}" class="item col-sm-12  col-md-6 col-lg-6">
                <img src="{{ asset('foods/Doner_Box_Fries.jpg') }}" alt="" title="Doner Box with Fries" class="img-fluid" />
                <h4>Doner Box with Fries</h4>
              </a>
              <a href="{{ asset('foods/Doner_Box_Fries_Salad.jpg') }}" class="item col-sm-12  col-md-6 col-lg-6">
                <img src="{{ asset('foods/Doner_Box_Fries_Salad.jpg') }}" alt="" title="Doner Box with Fries & Salad"
                  class="img-fluid" />
                <h4>Doner Box with Fries & Salad</h4>
              </a>
              
              <a href="{{ asset('foods/Doner_Box_Salad.jpg') }}" class="item col-sm-12  col-md-6 col-lg-6">
                <img src="{{ asset('foods/Doner_Box_Salad.jpg') }}" alt="" title="Doner Box with Salad" class="img-fluid" />
                <h4>Doner Box with Salad</h4>
              </a>
            </div>
          </div>
        </div>
        <div class="row" id="burgers">
          <h2 style="color:#f08113">Burgers</h2>
          <div class="col-xs-12">
            <div class="gallery menu burgers row row-cols-1 row-cols-md-2 row-cols-lg-3">
              <a href="{{ asset('images/1_Chicken_Burger.jpg') }}" class="item col-sm-12 col-md-6 col-lg-4">
                <img src="{{ asset('images/1_Chicken_Burger.jpg') }}" alt="" title="Chicken Burger"
                  class="img-fluid" />
                <h4>Chicken Burger</h4>
              </a>
              <a href="{{ asset('images/new_cheese_burger.jpg') }}" class="item col-sm-12 col-md-6 col-lg-4">
                <img src="{{ asset('images/new_cheese_burger.jpg') }}" alt="" title="Cheese Burger" class="img-fluid" />
                <h4>Cheese Burger</h4>
              </a>
              <a href="{{ asset('images/2-74.jpg') }}" class="item col-sm-12 col-md-6 col-lg-4">
                <img src="{{ asset('images/2-74.jpg') }}" alt="" title="Doner Burger"  class="img-fluid" />
                <h4>Doner Burger</h4>
              </a>
              
              <a href="{{ asset('foods/Tower_Burgernew.jpg') }}" class="item col-sm-12 col-md-6 col-lg-4">
                <img src="{{ asset('foods/Tower_Burgernew.jpg') }}" alt="" title="Tower Burger" class="img-fluid" />
                <h4>Tower Burger</h4>
              </a>
              <a href="{{ asset('foods/4_Salva_Burger.jpg') }}" class="item col-sm-12 col-md-6 col-lg-4">
                <img src="{{ asset('foods/4_Salva_Burger.jpg') }}" alt="" title="Salva Burger" class="img-fluid" />
                <h4>Salva Burger</h4>
              </a>
                          
            </div>
          </div>
        </div>
        <div class="row" id="kidsMeal">
          <h2 style="color:#f08113">Kids Meal</h2>
          <div class="col-xs-12">
            <div class="gallery menu kids-meal row">
              <a href="{{ asset('foods/newKids_Meal_Chicken_Nuggets.jpg') }}" class="item col-sm-12 col-md-4">
                <img src="{{ asset('foods/newKids_Meal_Chicken_Nuggets.jpg') }}" alt="" title="Chicken Nuggets Kids Meal"
                  class="img-fluid" />
                <h4>Chicken Nuggets Kids Meal</h4>
              </a>
              <a href="{{ asset('foods/newKids_Meal_Chicken_Popcorn.jpg') }}" class="item col-sm-12 col-md-4">
                <img src="{{ asset('foods/newKids_Meal_Chicken_Popcorn.jpg') }}" alt="" title="Chicken Popcorn Kids Meal"
                  class="img-fluid" />
                <h4>Chicken Popcorn Kids Meal</h4>
              </a>
              <a href="{{ asset('foods/newKids_Meal_Chicken_Strips.jpg') }}" class="item col-sm-12 col-md-4">
                <img src="{{ asset('foods/newKids_Meal_Chicken_Strips.jpg') }}" alt="" title="Chicken Strips Kids Meal" class="img-fluid" />
                <h4>Chicken Strips Kids Meal</h4>
              </a>
            </div>
          </div>
        </div>
     {{--    <div class="row" id="pizzas">
          <h2>Pizzas</h2>
          <div class="col-xs-12">
            <div class="gallery menu pizzas row row-cols-1 row-cols-lg-3">
              <a href="{{ asset('images/4-1.jpg') }}" class="item col-xs-12 col-sm-6 col">
                <img src="{{ asset('images/4-1.jpg') }}" alt="" title="Margherita Pizza" class="img-fluid" />
                <h4>Margherita Pizza</h4>
              </a>
              <a href="{{ asset('images/4-2.jpg') }}" class="item col-xs-12 col-sm-6 col">
                <img src="{{ asset('images/4-2.jpg') }}" alt="" title="Pepperoni Perfection Pizza"
                  class="img-fluid" />
                <h4>Pepperoni Perfection Pizza</h4>
              </a>
              <a href="{{ asset('foods/Chicken_Delight.jpg') }}" class="item col-xs-12 col-sm-6 col">
                <img src="{{ asset('foods/Chicken_Delight.jpg') }}" alt="" title="Chicken Delight Pizza" class="img-fluid" />
                <h4>Chicken Delight Pizza</h4>
              </a>
              <a href="{{ asset('foods/Hawain_Pizza.jpg') }}" class="item col-xs-12 col-sm-6 col">
                <img src="{{ asset('foods/Hawain_Pizza.jpg') }}" alt="" title="Hawaiian Pizza" class="img-fluid" />
                <h4>Hawaiian Pizza</h4>
              </a>
              <a href="{{ asset('foods/Doner_Pizza.jpg') }}" class="item col-xs-12 col-sm-6 col">
                <img src="{{ asset('foods/Doner_Pizza.jpg') }}" alt="" title="Doner Pizza" class="img-fluid" />
                <h4>Doner Pizza</h4>
              </a>
              <a href="{{ asset('foods/Shawarma_Pizza.jpg') }}" class="item col-xs-12 col-sm-6 col">
                <img src="{{ asset('foods/Shawarma_Pizza.jpg') }}" alt="" title="Shawarma Pizza" class="img-fluid" />
                <h4>Shawarma Pizza</h4>
              </a>
            </div>
          </div>
        </div>
        <div class="row" id="garlicBread">
          <h2>Garlic Bread</h2>
          <div class="col-xs-12">
            <div class="gallery menu garlic-bread row row-cols-1 row-cols-md-2 row-cols-xxl-4">
              <a href="{{ asset('images/6-1.jpg') }}" class="item col-xs-12 col-sm-6 col">
                <img src="{{ asset('images/6-1.jpg') }}" alt="" title="Garlic Bread" class="img-fluid" />
                <h4>Garlic Bread</h4>
              </a>
              <a href="{{ asset('foods/Garlic_Tom_Tom_Bread.jpg') }}" class="item col-xs-12 col-sm-6 col">
                <img src="{{ asset('foods/Garlic_Tom_Tom_Bread.jpg') }}" alt="" title="Garlic Tom Bread" class="img-fluid" />
                <h4>Garlic Tom Bread</h4>
              </a>
              <a href="{{ asset('foods/Garlic_Supreme.jpg') }}" class="item col-xs-12 col-sm-6 col">
                <img src="{{ asset('foods/Garlic_Supreme.jpg') }}" alt="" title="Garlic Supreme" class="img-fluid" />
                <h4>Garlic Supreme</h4>
              </a>
              <a href="{{ asset('images/6-4.jpg') }}" class="item col-xs-12 col-sm-6 col">
                <img src="{{ asset('images/6-4.jpg') }}" alt="" title="Garlic Chicken Supreme" class="img-fluid" />
                <h4>Garlic Chicken Supreme</h4>
              </a>
            </div>
          </div>
        </div> --}}
        <div class="row" id="fries">
          <h2 style="color:#f08113">Fries</h2>
          <div class="col-xs-12">
            <div class="gallery menu fries row">
              <a href="{{ asset('foods/Fries new2.jpg') }}" class="item col-xs-12 col-sm-4">
                <img src="{{ asset('foods/Fries.jpg') }}" alt="" title="Fries" class="img-fluid" />
                <h4>Fries</h4>
              </a>
              <a href="{{ asset('foods/newFries_Cheesy.jpg') }}" class="item col-xs-12 col-sm-4">
                <img src="{{ asset('foods/newFries_Cheesy.jpg') }}" alt="" title="Cheesy Fries" class="img-fluid" />
                <h4>Cheesy Fries</h4>
              </a>
              <a href="{{ asset('foods/Curly_Fries.jpeg') }}" class="item col-xs-12 col-sm-4">
                <img src="{{ asset('foods/Curly_Fries.jpeg') }}" alt="" title="Curly Fries" class="img-fluid" />
                <h4>Curly Fries</h4>
              </a>
            </div>
          </div>
        </div>
        <div class="row" id="sideOrders">
          <h2 style="color:#f08113">side Orders</h2>
          <div class="col-xs-12">
            <div class="gallery menu side-orders row row-cols-1 row-cols-md-2 row-cols-lg-2 row-cols-xl-4">              
              <a href="{{ asset('foods/Onion_Rings.jpg') }}" class="item col-xs-12 col-sm-6 col">
                <img src="{{ asset('foods/Onion_Rings.jpg') }}" alt="" title="Onion Rings" class="img-fluid" />
                <h4>Onion Rings</h4>
              </a>
              <a href="{{ asset('foods/Chicken_Wings.jpg') }}" class="item col-xs-12 col-sm-6 col">
                <img src="{{ asset('foods/Chicken_Wings.jpg') }}" alt="" title="Spicy Chicken Wings" class="img-fluid" />
                <h4>Spicy Chicken Wings</h4>
              </a>
              <a href="{{ asset('foods/Chicken_Popcorn.jpg') }}" class="item col-xs-12 col-sm-6 col">
                <img src="{{ asset('foods/Chicken_Popcorn.jpg') }}" alt="" title="Chicken Popcorn" class="img-fluid" />
                <h4>Chicken Popcorn</h4>
              </a>
              <a href="{{ asset('foods/Chicken_Nuggets.jpg') }}" class="item col-xs-12 col-sm-6 col">
                <img src="{{ asset('foods/Chicken_Nuggets.jpg') }}" alt="" title="Chicken Nuggets" class="img-fluid" />
                <h4>Chicken Nuggets</h4>
              </a>
              <a href="{{ asset('foods/Chicken_Stips.jpg') }}" class="item col-xs-12 col-sm-6 col">
                <img src="{{ asset('foods/Chicken_Stips.jpg') }}" alt="" title="Chicken Strips" class="img-fluid" />
                <h4>Chicken Strips</h4>
              </a>
             
              <a href="{{ asset('foods/Jalapeno_Cheese_Bites.jpg') }}" class="item col-xs-12 col-sm-6 col">
                <img src="{{ asset('foods/Jalapeno_Cheese_Bites.jpg') }}" alt="" title="Jalapeno Cheese Bites" class="img-fluid" />
                <h4>Jalapeno Cheese Bites</h4>
              </a>
              <a href="{{ asset('foods/Lahmacun.jpg') }}" class="item col-xs-12 col-sm-6 col">
                <img src="{{ asset('foods/Lahmacun.jpg') }}" alt="" title="Lahmacun" class="img-fluid" />
                <h4>Lahmacun</h4>
              </a>
              {{-- <a href="{{ asset('images/6-5.jpg') }}" class="item col-xs-12 col-sm-6 col">
                <img src="{{ asset('images/6-5.jpg') }}" alt="" title="Pitta Bread" class="img-fluid" />
                <h4>Pitta Bread</h4>
              </a> --}}
              
             
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</x-app-layout>