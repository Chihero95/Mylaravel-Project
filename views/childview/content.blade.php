<div style="height: 50px;"></div>
<div> 
        @foreach ($listProduct as $product)
        <div class="col ">
          <img
            class="img"
            src="{{$product->image}}"
          />
          <p class="ProName">
          {{$product->name}}
          </p><br><br>
          <p class="price">
          {{number_format($product->price)}}
          </p>
          <button class="button">
            View options
          </button>
        </div>
        <!-- <div class="col">
          <img
            class="img"
            src="{{url('assets/images/product-2.jpeg')}}"
          />
          <p class="ProName">
            Special Item
          </p>
          <div class="rate">
            <input type="radio" id="star5" name="rate" value="5" />
            <label for="star5" title="text">5 stars</label>
            <input type="radio" id="star4" name="rate" value="4" />
            <label for="star4" title="text">4 stars</label>
            <input type="radio" id="star3" name="rate" value="3" />
            <label for="star3" title="text">3 stars</label>
            <input type="radio" id="star2" name="rate" value="2" />
            <label for="star2" title="text">2 stars</label>
            <input type="radio" id="star1" name="rate" value="1" />
            <label for="star1" title="text">1 star</label>
          </div><br>
          <p class="price">
            <span style = " text-decoration: line-through">$20.00</span> $18.00
          </p>
          <button class="button">
            Add to cart
          </button>
        </div> -->
        <!-- <div class="col">
          <img
            class="img"
            src="{{url('assets/images/product-3.jpeg')}}"
          />
          <p class="ProName">
            Sale Item
          </p><br><br>
          <p class="price">
            <span style = " text-decoration: line-through">$50.00</span> $25.00
          </p>
          <button class="button">
            Add to cart
          </button>
        </div>
        <div class="col">
          <img
            class="img"
            src="{{url('assets/images/product-4.jpeg')}}"
          />
          <p class="ProName">
            Popular Item
          </p>
          <div class="rate">
            <input type="radio" id="star5" name="rate" value="5" />
            <label for="star5" title="text">5 stars</label>
            <input type="radio" id="star4" name="rate" value="4" />
            <label for="star4" title="text">4 stars</label>
            <input type="radio" id="star3" name="rate" value="3" />
            <label for="star3" title="text">3 stars</label>
            <input type="radio" id="star2" name="rate" value="2" />
            <label for="star2" title="text">2 stars</label>
            <input type="radio" id="star1" name="rate" value="1" />
            <label for="star1" title="text">1 star</label>
          </div><br>
          <p class="price">
            $40.00
          </p>
          <button class="button">
            Add to cart
          </button>
        </div>
      </div>
    </div>
    <div style = "height: 60px"></div>
    <div class="container">
      <div class="row row-cols-4">
        <div class="col">
         <img class="img" src="{{url('assets/images/product-5.jpeg')}}"/>
      <p class="ProName">
      Sale Item  
      </p><br><br> 
      <p class="price">
      <span style = " text-decoration: line-through">$50.00</span> $25.00 
      </p>
      <button class="button">
        Add to cart
      </button>
        </div>
        <div class="col">
         <img class="img" src="{{url('assets/images/product-6.jpeg')}}"/>
      <p class="ProName">
      Fancy Product  
      </p><br><br> 
      <p class="price">
      $120.00 - $280.00  
      </p>
      <button class="button">
        View options
      </button>
        </div>
        <div class="col">
         <img class="img" src="{{url('assets/images/product-7.jpeg')}}"/>
      <p class="ProName">
      Special Item 
      </p>
      <div class="rate">
            <input type="radio" id="star5" name="rate" value="5" />
            <label for="star5" title="text">5 stars</label>
            <input type="radio" id="star4" name="rate" value="4" />
            <label for="star4" title="text">4 stars</label>
            <input type="radio" id="star3" name="rate" value="3" />
            <label for="star3" title="text">3 stars</label>
            <input type="radio" id="star2" name="rate" value="2" />
            <label for="star2" title="text">2 stars</label>
            <input type="radio" id="star1" name="rate" value="1" />
            <label for="star1" title="text">1 star</label>
          </div><br>
      <p class="price">
      <span style = " text-decoration: line-through">$20.00</span> $18.00  
      </p>  
      <button class="button">
        Add to cart
      </button>
        </div>
        <div class="col">
         <img class="img" src="{{url('assets/images/product-8.jpeg')}}"/>
      <p class="ProName">
      Popular Item  
      </p>
      <div class="rate">
            <input type="radio" id="star5" name="rate" value="5" />
            <label for="star5" title="text">5 stars</label>
            <input type="radio" id="star4" name="rate" value="4" />
            <label for="star4" title="text">4 stars</label>
            <input type="radio" id="star3" name="rate" value="3" />
            <label for="star3" title="text">3 stars</label>
            <input type="radio" id="star2" name="rate" value="2" />
            <label for="star2" title="text">2 stars</label>
            <input type="radio" id="star1" name="rate" value="1" />
            <label for="star1" title="text">1 star</label>
          </div><br>
      <p class="price">
      $40.00  
      </p>  
      <button class="button">
        Add to cart
      </button>
        </div> -->
      <!-- </div> -->
    <!-- </div> -->
    @endforeach
  </div>
  <br>