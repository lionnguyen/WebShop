<!-- Products section -->
<?php
    $item_id = $_GET['item_id']??1;
    foreach ($product->getData() as $item):
        if($item['item_id'] == $item_id):
?>
<section id="product" class="py-3">
               <div class="container">
                    <div class="row">
                         <div class="col-sm-6">
                              <img src=<?php echo $item['item_image']??"../assets/products/1.png";?> alt="product" class="img-fluid"
                                   style="width: 82%; margin-left: 50px;">
                              <div class="font-row pt-4 font-size-16 font-baloo d-flex">
                                   <div class="col px-2">
                                        <button type="submit" class="btn btn-danger form-control">Proceed to
                                             Buy</button>
                                   </div>
                                   <div class="col px-2">
                                        <button type="submit" class="btn btn-warning form-control">Add to cart</button>
                                   </div>
                              </div>
                         </div>
                         <div class="col-sm-6 py-5">
                              <h5 class="font-baloo font-size-20"><?php echo $item['item_name']??"Unknown";?></h5>
                              <small> <?php echo $item['item_brand']??"Brand";?></small>
                              <div class="d-flex">
                                   <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                   </div>
                                   <a href="" class="px-2 font-rale font-size-14">20,534 ratings | 1000+ answered
                                        questions</a>
                              </div>
                              <hr class="m-0">

                              <!-- #Product Price -->
                              <table class="my-3">
                                   <tr class="font-rale font-size-14">
                                        <td>M.R.P</td>
                                        <td><del>$162.00</del></td>
                                   </tr>
                                   <tr class="font-rale font-size-14">
                                        <td>Deal Price</td>
                                        <td class="font-size-20 text-danger">$<span><?php echo $item['item_price']??"0";?><small
                                                       class="text-dark font-size-12">&nbsp;&nbsp;Include of all
                                                       taxes</small></span></td>
                                   </tr>
                                   <tr class="font-rale font-size-14">
                                        <td>You save</td>
                                        <td><span class="font-size-16 text-danger">$10.00</span></td>
                                   </tr>
                              </table>
                              <!-- !Product Price -->

                              <!-- #Policy -->
                              <div id="policy">
                                   <div class="d-flex">
                                        <div class="return text-center me-5">
                                             <div class="font-size-20 my-2 color-second">
                                                  <span class="fas fa-retweet border p-3 rounded-pill"></span>
                                             </div>
                                             <a href="" class="font-rale font-size-12">10 Days <br>Replacement</a>
                                        </div>
                                        <div class="return text-center me-5">
                                             <div class="font-size-20 my-2 color-second">
                                                  <span class="fas fa-truck border p-3 rounded-pill"></span>
                                             </div>
                                             <a href="" class="font-rale font-size-12">Daily<br>Deliverd</a>
                                        </div>
                                        <div class="return text-center me-5">
                                             <div class="font-size-20 my-2 color-second">
                                                  <span class="fas fa-check-double border p-3 rounded-pill"></span>
                                             </div>
                                             <a href="" class="font-rale font-size-12">1 Year<br>Warranty</a>
                                        </div>
                                   </div>
                              </div>
                              <!-- !Policy -->
                              <hr>
                              <!-- Order details -->
                              <div id="order-details" class="font-rale d-flex flex-column text-dark">
                                   <small>Delivery by: Mar 29 Apr 1</small>
                                   <small>Sold by <a href="" class="d-inline-block"> Tuns Shop</a> (4.5 out of 5 |
                                        18,198 ratings)</small>
                                   <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Deliver to
                                        Custom - 424201</small>
                              </div>
                              <!-- !Order details -->

                              <div class="row">
                                   <div class="col-6">
                                        <!-- Color -->
                                        <div class="color my-3">
                                             <div class="d-flex justify-content-between">
                                                  <h6 class="font-baloo">Color</h6>
                                                  <div class="p-2 color-yellow-bg rounded-circle"><button
                                                            class="btn font-size-14"></button></div>
                                                  <div class="p-2 color-primary-bg rounded-circle"><button
                                                            class="btn font-size-14"></button></div>
                                                  <div class="p-2 color-second-bg rounded-circle"><button
                                                            class="btn font-size-14"></button></div>
                                             </div>
                                        </div>
                                        <!-- !Color -->
                                   </div>
                                   <div class="col-6">
                                        <!-- Product qty Section -->
                                        <div class="qty d-flex" style="margin: 20px">
                                             <h6 class="font-baloo">Qty</h6>
                                             <div class="px-4 d-flex font-rale">
                                                  <button data-id="pro1" class="qty-up border bg-light"><i class="fas fa-angle-up"></i></button>
                                                  <input type="text" data-id="pro1" class="qty_input border px-2 w-50 bg-light" value="1" placeholder="1">
                                                  <button data-id="pro1" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                                             </div>
                                        </div>
                                        <!-- !Product qty Section -->
                                   </div>
                              </div>

                              <!-- Size -->
                              <div class="size my-3">
                                   <h6 class="font-baloo">Size:</h6>
                                   <div class="d-flex justify-content-between w-75">
                                        <div class="font-rubik border px-2">
                                             <button class="btn p-2 font-size-14">S</button>
                                        </div>
                                        <div class="font-rubik border px-2">
                                             <button class="btn p-2 font-size-14">M</button>
                                        </div>
                                        <div class="font-rubik border px-2">
                                             <button class="btn p-2 font-size-14">L</button>
                                        </div>
                                        <div class="font-rubik border px-1">
                                             <button class="btn p-2 font-size-14">XL</button>
                                        </div>
                                        <div class="font-rubik border px-0">
                                             <button class="btn p-2 font-size-14">XXL</button>
                                        </div>
                                   </div>
                              </div>

                         </div>
                         <div class="col-12">
                              <h6 class="font-rubik">Product Description</h6>
                              <hr>
                              <p class="font-rale font-size-14">Lorem ipsum dolor, sit amet consectetur adipisicing
                                   elit. Nostrum saepe molestias nisi dignissimos! Omnis architecto excepturi minus
                                   quidem totam laborum! Neque veritatis ratione omnis ea amet? Vero consectetur autem
                                   ullam doloremque, non sunt praesentium perspiciatis quisquam nihil quo unde est cum
                                   blanditiis. Sint ipsa vero tempora modi maiores quos voluptate facere ea suscipit eos
                                   odio quas ex quidem soluta ratione alias architecto, mollitia aspernatur
                                   consequuntur, doloremque explicabo quis ducimus officia quod? Ex, architecto eius
                                   dolores voluptatem molestiae, voluptatum tempora porro asperiores harum libero rem
                                   quisquam cumque ut, eum nemo quidem molestias deserunt placeat. Id, ea. Et cumque aut
                                   incidunt labore?</p>
                              <p class="font-rale font-size-14">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                   Hic numquam excepturi similique. Numquam reprehenderit delectus nihil veritatis
                                   laudantium blanditiis fuga eaque est praesentium quae quos aliquam nobis quam officia
                                   repellat doloremque, aperiam exercitationem distinctio quia architecto nesciunt.
                                   Possimus repellendus error dolores! Quos hic dolores illum corporis nihil blanditiis
                                   incidunt perspiciatis?</p>
                         </div>
                    </div>
               </div>
          </section>
<!-- Products section -->
<?php
    endif;
    endforeach;
    ?>