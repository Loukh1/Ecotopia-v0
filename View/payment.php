<?php 
session_start();
include "../Model/panier.php";
include "../Controller/panierController.php";
$total=0;
$panier=new panierController;
$commande = new commandeController();
$dcom=new commandedetailController();
$pn=$panier->getCart();
?>
        <!DOCTYPE html>
                <html lang="en" >
                <head>
                  <meta charset="UTF-8">
                  <title>Payment</title>
                  <link rel="stylesheet" href="./check.css">
                
                </head>
                <body>
                <div id="wrap">
                    <div id="grid">
                        <div class="column column1">
                        <div class="step" id="step1">
                            <div class="number">
                                <span>1</span>
                            </div>
                            <div class="title">
                                <h1>Email Address</h1>
                            </div>
                            <div class="modify">
                                <i class="fa fa-plus-circle"></i>
                            </div>
                        </div>
                        <div class="content" id="email">
                            <form class="go-right">
                                <div>
                        <input type="email" name="email" value="" id="email-address" placeholder="Email Address" data-trigger="change" data-validation-minlength="1" data-type="email" data-required="true" data-error-message="Enter a valid email address."/><label for="email">Email Address</label>
                        </div>
                            </form>
                        </div>
                        <div class="step" id="step2">
                            <div class="number">
                                <span>2</span>
                            </div>
                            <div class="title">
                                <h1>Billing Information</h1>
                            </div>
                        </div>
                        <div class="content" id="address">
                            <form class="go-right">
                                <div>
                                <input type="name" name="first_name" value="" id="first_name" placeholder="First Name" data-trigger="change" data-validation-minlength="1" data-type="name" data-required="true" data-error-message="Enter Your First Name"/><label for="first_name">First Name</label>
                        </div>
                        
                                <div>
                                <input type="name" name="last_name" value="" id="last_name" placeholder="Last Name" data-trigger="change" data-validation-minlength="1" data-type="name" data-required="true" data-error-message="Enter Your Last Name"/><label for="last_name">Last Name</label>
                                </div>
                                <div>
                                <input type="phone" name="telephone" value="" id="telephone" placeholder="Phone(555)-555-5555" data-trigger="change" data-validation-minlength="1" data-type="number" data-required="true" data-error-message="Enter Your Telephone Number"/><label for="telephone">Telephone</label>
                                </div>
                                <div>
                                <input type="text" name="company" value="" id="company" placeholder="Company" data-trigger="change" data-validation-minlength="1" data-type="name" data-required="false"/>
                          <label for="Company">Company</label>
                                </div>
                                <div>
                                <input type="text" name="address" value="" id="address" placeholder="Address" data-trigger="change" data-validation-minlength="1" data-type="text" data-required="true" data-error-message="Enter Your Billing Address"/><label for="Address">Address</label>
                                </div>
                                <div>
                                <input type="text" name="city" value="" id="city" placeholder="City" data-trigger="change" data-validation-minlength="1" data-type="text" data-required="true" data-error-message="Enter Your Billing City"/><label for="city">City</label>
                                </div>
                                <div>
                                <div class="state_options">
                                    <div class="select">
                                         <select id="state">
                                               <option value = "1">Ben arous</option>
                                               <option value = "2">Tunis</option>
                                               <option value = "3">Ariana</option>
                                               <option value = "4">Bizerte</option>
                                         </select>
                                     </div>
                                          <label class="state" for="state">State</label>
                                  </div>
                                </div>
                                <div>
                                <input type="text" name="zip" value="" id="zip" placeholder="Zip Code" data-trigger="change" data-validation-minlength="1" data-type="text" data-required="true" data-error-message="Enter Your Billing Zip Code"/><label for="zip">Zip Code</label>
                                </div>
                                <div>
                                <div class="country_options">
                                    <div class="select">
                                         <select id="country">
                                               <option value = "1">Tunisia</option>
                                         </select>
                                     </div>
                                <label class="country" for="country">Country</label>
                                  </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="column column2">
                        <div class="step" id="step3">
                            <div class="number">
                                <span>3</span>
                            </div>
                            <div class="title">
                                <h1>Shipping Information</h1>
                            </div>
                            <div class="modify">
                                <i class="fa fa-plus-circle"></i>
                            </div>
                        </div>
                        <div class="content" id="shipping">
                            <form action="" method="" name="">
                                <div>
                                    <input type="radio" id="shipping_1" value="1" name="shippings"/><label for="shipping_1"> Standard Shipping <span class="price">3DT</span></label>
                                </div>
                                <p>		
                                    <input type="radio" id="shipping_2" value="2" name="shippings"/><label for="shipping_2"> Express Shipping <span class="price">7DT</span></label>
                                </p>
                                <p>		
                                    <input type="radio" id="shipping_3" value="3" name="shippings"/><label for="shipping_3"> Overnight Shipping <span class="price">12DT</span></label>
                                </p>
                            </form>
                        </div>
                        <div class="step" id="step4">
                            <div class="number">
                                <span>4</span>
                            </div>
                            <div class="title">
                                <h1>Payment Information</h1>
                            </div>
                            <div class="modify">
                                <i class="fa fa-plus-circle"></i>
                            </div>
                        </div>
                        <div class="content" id="payment">
                            <div class="left">
                            <form class="go-right">
                                <div>
                                <input type="text" name="card_number" value="" id="card_number" placeholder="xxxx-xxxx-xxxx-xxxx" data-trigger="change" data-validation-minlength="1" data-type="name" data-required="true" data-error-message="Enter Your Credit Card Number"/><label for="card_number">Card Number</label>
                                </div>
                                <div>
                                  <div class="expiry">	
                                      <div class="month_select">
                                        <select name="exp_month" value="" id="exp_month" placeholder="" data-trigger="change" data-type="name" data-required="true" data-error-message="Enter Your Credit Card Expiration Date">
                                            <option value = "1">01</option>
                                               <option value = "2">02</option>
                                               <option value = "3">03</option>
                                               <option value = "4">04 </option>
                                               <option value = "5">05 </option>
                                               <option value = "6">06 </option>
                                               <option value = "7">07 </option>
                                               <option value = "8">08 </option>
                                               <option value = "9">09 </option>
                                               <option value = "10">10 </option>
                                               <option value = "11">11 </option>
                                               <option value = "12">12 </option>
                                        </select>
                                      </div>
                                      <div class="year_select">
                                        <select name="exp_year" value="" id="exp_year" placeholder="" data-trigger="change" data-type="name" data-required="true" data-error-message="Enter Your Credit Card Expiration Date">
                                            <option value = "1">21 </option>
                                               <option value = "2">22 </option>
                                               <option value = "3">23 </option>
                                               <option value = "4">24 </option>
                                               
                                        </select>
                                      </div>
                                  <label class="exp_date" for="Exp_Date">Exp Date</label>
                                    </div>
                                  </div>
                                <div class="sec_num">
                              <div>
                                        <input type="text" name="ccv" value="" id="ccv" placeholder="123" data-trigger="change" data-validation-minlength="3" data-type="name" data-required="true" data-error-message="Enter Your Card Security Code"/><label for="ccv">Security Code</label>
                                      </div>
                                      </div>
                                  </form>
                            </div>
                            <div class="right">
                                <div class="accepted">
                                    <span><img src="https://i.imgur.com/Z5HVIOt.png"></span>
                                    <span><img src="https://i.imgur.com/Le0Vvgx.png"></span>
                                    <span><img src="https://i.imgur.com/D2eQTim.png"></span>
                                    <span><img src="https://i.imgur.com/Pu4e7AT.png"></span>
                                    <span><img src="https://i.imgur.com/ewMjaHv.png"></span>
                                    <span><img src="https://i.imgur.com/3LmmFFV.png"></span>
                                </div>
                                
                            </div>
                        
                         </div>
                     </div>
                     <div class="column column3">
                         <div class="step" id="step5">
                            <div class="number">
                                <span>5</span>
                            </div>
                            <div class="title">
                                <h1>Finalize Order</h1>
                            </div>
                            <div class="modify">
                                <i class="fa fa-plus-circle"></i>
                            </div>
                        </div>
                        <div class="content" id="final_products">
                            <div class="left" id="ordered">
                             <?php
                             $totalprix=0; 
                             foreach($pn as $pn) {
                                 if($pn['id_client']==$_SESSION['id']){
                                    $prod=$panier->getProd($pn["id_produit"]);?>
                                
                                <div class="products">
                                    <div class="product_image">
                                        <img src="<?php echo $prod["urlimage"]?>"/>
                                    </div>
                                    <div class="product_details">
                                        <span class="product_name"><?php echo $prod["nom"]?></span>
                                        <span class="quantity"><?php echo $pn["qty"]?></span>
                                        <span class="price"><?php echo $prod["prix"]?></span>
                                    </div>
                                </div>
                                <?php $totalprix+=$prod['prix']*$pn['qty'];?>
                                 <?php }}?>
                                <div class="final">
                                    <span class="title">Total <span id="calculated_total"><?php echo $totalprix;?>dt</span></span>
                                </div>
                            </div>	
                            <div class="right" id="reviewed">
                                <div id="complete">
                                <a class="big_button" id="complete" href="deleteallcart.php">Complete Order</a>
                                <span class="sub">By selecting this button you agree to the purchase and subsequent payment for this order.</span> 
                            </div>
                        </div>
                    </div>
                </div>
                </body>
                </html>
