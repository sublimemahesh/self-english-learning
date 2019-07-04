<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Shopping cart &middot; Elephant Template &middot; The fastest way to build Modern Admin APPS for any platform, browser, or device.</title>
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
        <meta name="description" content="Elephant is an admin template that helps you build modern Admin Applications, professionally fast! Built on top of Bootstrap, it includes a large collection of HTML, CSS and JS components that are simple to use and easy to customize.">

        <meta name="theme-color" content="#ffffff">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,700">
        <link rel="stylesheet" href="css/vendor.min.css">
        <link rel="stylesheet" href="css/elephant.min.css">
        <link rel="stylesheet" href="css/application.min.css">
        <link rel="stylesheet" href="css/shopping-cart.min.css">
        
        
    </head>
    <body class="layout layout-header-fixed">
          <!--Top header -->
        <?php include './top-header.php'; ?>
        <!--End Top header -->
        
        <div class="layout-main">
            <!-- Navigation -->
            <?php include './disable-navigation.php'; ?>
            <!--End Navigation -->
            
            <div class="layout-content">
                <div class="layout-content-body">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <form id="shopping-cart">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <ul class="steps">
                                            <li class="step col-xs-3 active">
                                                <a class="step-segment" href="#step-1" data-toggle="tab">
                                                    <span class="step-icon icon icon-shopping-cart sq-48"></span>
                                                </a>
                                                <div class="step-content">
                                                    <strong class="hidden-xs">Shopping cart</strong>
                                                </div>
                                            </li>
                                            <li class="step col-xs-3">
                                                <a class="step-segment" href="#step-2" data-toggle="tab">
                                                    <span class="step-icon icon icon-truck sq-48"></span>
                                                </a>
                                                <div class="step-content">
                                                    <strong class="hidden-xs">Delivery details</strong>
                                                </div>
                                            </li>
                                            <li class="step col-xs-3">
                                                <a class="step-segment" href="#step-3" data-toggle="tab">
                                                    <span class="step-icon icon icon-credit-card sq-48"></span>
                                                </a>
                                                <div class="step-content">
                                                    <strong class="hidden-xs">Payment details</strong>
                                                </div>
                                            </li>
                                            <li class="step col-xs-3">
                                                <a class="step-segment" href="#step-4" data-toggle="tab">
                                                    <span class="step-icon icon icon-check sq-48"></span>
                                                </a>
                                                <div class="step-content">
                                                    <strong class="hidden-xs">Confirmation</strong>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="tab-content">
                                            <div id="step-1" class="tab-pane active">
                                                <h4>Your shopping cart - 3 items</h4>
                                                <div class="cart">
                                                    <ul class="cart-list">
                                                        <li class="cart-list-item">
                                                            <div class="cart-list-image">
                                                                <a href="product.html">
                                                                    <img class="cart-list-thumbnail" src="img/5615854990.jpg" alt="Raja Elephant T-shirt">
                                                                </a>
                                                            </div>
                                                            <div class="cart-list-details">
                                                                <h4 class="cart-list-name">
                                                                    <a href="product.html">Raja Elephant T-shirt Women's S-XL #4398</a>
                                                                </h4>
                                                                <p class="cart-list-description">
                                                                    <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque quo nulla ad id natus ratione, voluptatum, perspiciatis consequuntur, ea aliquid rem.</small>
                                                                </p>
                                                                <div class="cart-list-actions">
                                                                    <ul class="list-inline">
                                                                        <li><a href="#">Delete</a></li>
                                                                        <li>
                                                                            <span aria-hidden="true">|</span>
                                                                        </li>
                                                                        <li>
                                                                            <label class="custom-control custom-control-primary custom-checkbox">
                                                                                <input class="custom-control-input" type="checkbox">
                                                                                <span class="custom-control-indicator"></span>
                                                                                <span class="custom-control-label">This is a gift</span>
                                                                            </label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="cart-list-price">
                                                                <ul class="list-inline">
                                                                    <li>
                                                                        <del>$46.00</del>
                                                                    </li>
                                                                    <li>
                                                                        <strong>$33.00</strong>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="cart-list-quantity">
                                                                <input class="form-control" type="text" value="1">
                                                            </div>
                                                            <div class="cart-list-subtotal">$33.00</div>
                                                        </li>
                                                        <li class="cart-list-item">
                                                            <div class="cart-list-image">
                                                                <a href="product.html">
                                                                    <img class="cart-list-thumbnail" src="img/5991713086.jpg" alt="Maliha Elephant T-shirt">
                                                                </a>
                                                            </div>
                                                            <div class="cart-list-details">
                                                                <h4 class="cart-list-name">
                                                                    <a href="product.html">Maliha Elephant T-shirt Women's S-XL #4909</a>
                                                                </h4>
                                                                <p class="cart-list-description">
                                                                    <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque quo nulla ad id natus ratione, voluptatum, perspiciatis consequuntur, ea aliquid rem.</small>
                                                                </p>
                                                                <div class="cart-list-actions">
                                                                    <ul class="list-inline">
                                                                        <li><a href="#">Delete</a></li>
                                                                        <li>
                                                                            <span aria-hidden="true">|</span>
                                                                        </li>
                                                                        <li>
                                                                            <label class="custom-control custom-control-primary custom-checkbox">
                                                                                <input class="custom-control-input" type="checkbox">
                                                                                <span class="custom-control-indicator"></span>
                                                                                <span class="custom-control-label">This is a gift</span>
                                                                            </label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="cart-list-price">
                                                                <ul class="list-inline">
                                                                    <li>
                                                                        <del>$44.00</del>
                                                                    </li>
                                                                    <li>
                                                                        <strong>$36.00</strong>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="cart-list-quantity">
                                                                <input class="form-control" type="text" value="1">
                                                            </div>
                                                            <div class="cart-list-subtotal">$36.00</div>
                                                        </li>
                                                        <li class="cart-list-item">
                                                            <div class="cart-list-image">
                                                                <a href="product.html">
                                                                    <img class="cart-list-thumbnail" src="img/6149937996.jpg" alt="Jade Elephant T-shirt">
                                                                </a>
                                                            </div>
                                                            <div class="cart-list-details">
                                                                <h4 class="cart-list-name">
                                                                    <a href="product.html">Jade Elephant T-shirt Women's S-XL #5019</a>
                                                                </h4>
                                                                <p class="cart-list-description">
                                                                    <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque quo nulla ad id natus ratione, voluptatum, perspiciatis consequuntur, ea aliquid rem.</small>
                                                                </p>
                                                                <div class="cart-list-actions">
                                                                    <ul class="list-inline">
                                                                        <li><a href="#">Delete</a></li>
                                                                        <li>
                                                                            <span aria-hidden="true">|</span>
                                                                        </li>
                                                                        <li>
                                                                            <label class="custom-control custom-control-primary custom-checkbox">
                                                                                <input class="custom-control-input" type="checkbox">
                                                                                <span class="custom-control-indicator"></span>
                                                                                <span class="custom-control-label">This is a gift</span>
                                                                            </label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="cart-list-price">
                                                                <ul class="list-inline">
                                                                    <li>
                                                                        <del>$36.00</del>
                                                                    </li>
                                                                    <li>
                                                                        <strong>$33.00</strong>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="cart-list-quantity">
                                                                <input class="form-control" type="text" value="1">
                                                            </div>
                                                            <div class="cart-list-subtotal">$33.00</div>
                                                        </li>
                                                    </ul>
                                                    <div class="cart-subtotal">
                                                        Subtotal (3 items):
                                                        <span class="cart-subtotal-amount">$102.00</span>
                                                    </div>
                                                    <div class="cart-actions">
                                                        <button class="btn btn-default" type="submit">Continue shopping</button>
                                                        <button class="btn btn-primary" type="submit">Proceed to checkout</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="step-2" class="tab-pane">
                                                <div class="delivery">
                                                    <div class="row">
                                                        <div class="col-md-6 col-md-offset-3">
                                                            <div class="row gutter-xs">
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="first-name" class="form-label">First name</label>
                                                                        <input id="first-name" class="form-control" type="text" name="first_name">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="last-name" class="form-label">Last name</label>
                                                                        <input id="last-name" class="form-control" type="text" name="last_name">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <label for="country" class="form-label">Country</label>
                                                                        <select id="country" class="custom-select" name="country">
                                                                            <option value="1" selected="selected">United States</option>
                                                                            <option value="2">Canada</option>
                                                                            <option value="3">United Kingdom</option>
                                                                            <option value="4">Afghanistan</option>
                                                                            <option value="5">Albania</option>
                                                                            <option value="6">Algeria</option>
                                                                            <option value="7">American Samoa</option>
                                                                            <option value="8">Andorra</option>
                                                                            <option value="9">Angola</option>
                                                                            <option value="10">Anguilla</option>
                                                                            <option value="11">Antigua and Barbuda</option>
                                                                            <option value="12">Argentina</option>
                                                                            <option value="13">Armenia</option>
                                                                            <option value="14">Aruba</option>
                                                                            <option value="15">Australia</option>
                                                                            <option value="16">Austria</option>
                                                                            <option value="17">Azerbaijan Republic</option>
                                                                            <option value="18">Bahamas</option>
                                                                            <option value="19">Bahrain</option>
                                                                            <option value="20">Bangladesh</option>
                                                                            <option value="21">Barbados</option>
                                                                            <option value="22">Belarus</option>
                                                                            <option value="23">Belgium</option>
                                                                            <option value="24">Belize</option>
                                                                            <option value="25">Benin</option>
                                                                            <option value="26">Bermuda</option>
                                                                            <option value="27">Bhutan</option>
                                                                            <option value="28">Bolivia</option>
                                                                            <option value="29">Bosnia and Herzegovina</option>
                                                                            <option value="30">Botswana</option>
                                                                            <option value="31">Brazil</option>
                                                                            <option value="32">British Virgin Islands</option>
                                                                            <option value="33">Brunei Darussalam</option>
                                                                            <option value="34">Bulgaria</option>
                                                                            <option value="35">Burkina Faso</option>
                                                                            <option value="37">Burundi</option>
                                                                            <option value="38">Cambodia</option>
                                                                            <option value="39">Cameroon</option>
                                                                            <option value="2">Canada</option>
                                                                            <option value="40">Cape Verde Islands</option>
                                                                            <option value="41">Cayman Islands</option>
                                                                            <option value="42">Central African Republic</option>
                                                                            <option value="43">Chad</option>
                                                                            <option value="44">Chile</option>
                                                                            <option value="45">China</option>
                                                                            <option value="46">Colombia</option>
                                                                            <option value="47">Comoros</option>
                                                                            <option value="48">Congo, Democratic Republic of the</option>
                                                                            <option value="49">Congo, Republic of the</option>
                                                                            <option value="50">Cook Islands</option>
                                                                            <option value="51">Costa Rica</option>
                                                                            <option value="52">Cote d Ivoire (Ivory Coast)</option>
                                                                            <option value="53">Croatia, Republic of</option>
                                                                            <option value="55">Cyprus</option>
                                                                            <option value="56">Czech Republic</option>
                                                                            <option value="57">Denmark</option>
                                                                            <option value="58">Djibouti</option>
                                                                            <option value="59">Dominica</option>
                                                                            <option value="60">Dominican Republic</option>
                                                                            <option value="61">Ecuador</option>
                                                                            <option value="62">Egypt</option>
                                                                            <option value="63">El Salvador</option>
                                                                            <option value="64">Equatorial Guinea</option>
                                                                            <option value="65">Eritrea</option>
                                                                            <option value="66">Estonia</option>
                                                                            <option value="67">Ethiopia</option>
                                                                            <option value="68">Falkland Islands (Islas Malvinas)</option>
                                                                            <option value="69">Fiji</option>
                                                                            <option value="70">Finland</option>
                                                                            <option value="71">France</option>
                                                                            <option value="72">French Guiana</option>
                                                                            <option value="73">French Polynesia</option>
                                                                            <option value="74">Gabon Republic</option>
                                                                            <option value="75">Gambia</option>
                                                                            <option value="76">Georgia</option>
                                                                            <option value="77">Germany</option>
                                                                            <option value="78">Ghana</option>
                                                                            <option value="79">Gibraltar</option>
                                                                            <option value="80">Greece</option>
                                                                            <option value="81">Greenland</option>
                                                                            <option value="82">Grenada</option>
                                                                            <option value="83">Guadeloupe</option>
                                                                            <option value="84">Guam</option>
                                                                            <option value="85">Guatemala</option>
                                                                            <option value="86">Guernsey</option>
                                                                            <option value="87">Guinea</option>
                                                                            <option value="88">Guinea-Bissau</option>
                                                                            <option value="89">Guyana</option>
                                                                            <option value="90">Haiti</option>
                                                                            <option value="91">Honduras</option>
                                                                            <option value="92">Hong Kong</option>
                                                                            <option value="93">Hungary</option>
                                                                            <option value="94">Iceland</option>
                                                                            <option value="95">India</option>
                                                                            <option value="96">Indonesia</option>
                                                                            <option value="99">Ireland</option>
                                                                            <option value="100">Israel</option>
                                                                            <option value="101">Italy</option>
                                                                            <option value="102">Jamaica</option>
                                                                            <option value="103">Jan Mayen</option>
                                                                            <option value="104">Japan</option>
                                                                            <option value="105">Jersey</option>
                                                                            <option value="106">Jordan</option>
                                                                            <option value="107">Kazakhstan</option>
                                                                            <option value="108">Kenya</option>
                                                                            <option value="109">Kiribati</option>
                                                                            <option value="111">Korea, South</option>
                                                                            <option value="112">Kuwait</option>
                                                                            <option value="113">Kyrgyzstan</option>
                                                                            <option value="114">Laos</option>
                                                                            <option value="115">Latvia</option>
                                                                            <option value="116">Lebanon</option>
                                                                            <option value="120">Liechtenstein</option>
                                                                            <option value="121">Lithuania</option>
                                                                            <option value="122">Luxembourg</option>
                                                                            <option value="123">Macau</option>
                                                                            <option value="124">Macedonia</option>
                                                                            <option value="125">Madagascar</option>
                                                                            <option value="126">Malawi</option>
                                                                            <option value="127">Malaysia</option>
                                                                            <option value="128">Maldives</option>
                                                                            <option value="129">Mali</option>
                                                                            <option value="130">Malta</option>
                                                                            <option value="131">Marshall Islands</option>
                                                                            <option value="132">Martinique</option>
                                                                            <option value="133">Mauritania</option>
                                                                            <option value="134">Mauritius</option>
                                                                            <option value="135">Mayotte</option>
                                                                            <option value="136">Mexico</option>
                                                                            <option value="226">Micronesia</option>
                                                                            <option value="137">Moldova</option>
                                                                            <option value="138">Monaco</option>
                                                                            <option value="139">Mongolia</option>
                                                                            <option value="228">Montenegro</option>
                                                                            <option value="140">Montserrat</option>
                                                                            <option value="141">Morocco</option>
                                                                            <option value="142">Mozambique</option>
                                                                            <option value="143">Namibia</option>
                                                                            <option value="144">Nauru</option>
                                                                            <option value="145">Nepal</option>
                                                                            <option value="146">Netherlands</option>
                                                                            <option value="147">Netherlands Antilles</option>
                                                                            <option value="148">New Caledonia</option>
                                                                            <option value="149">New Zealand</option>
                                                                            <option value="150">Nicaragua</option>
                                                                            <option value="151">Niger</option>
                                                                            <option value="152">Nigeria</option>
                                                                            <option value="153">Niue</option>
                                                                            <option value="154">Norway</option>
                                                                            <option value="155">Oman</option>
                                                                            <option value="156">Pakistan</option>
                                                                            <option value="157">Palau</option>
                                                                            <option value="158">Panama</option>
                                                                            <option value="159">Papua New Guinea</option>
                                                                            <option value="160">Paraguay</option>
                                                                            <option value="161">Peru</option>
                                                                            <option value="162">Philippines</option>
                                                                            <option value="163">Poland</option>
                                                                            <option value="164">Portugal</option>
                                                                            <option value="165">Puerto Rico</option>
                                                                            <option value="166">Qatar</option>
                                                                            <option value="227">Reunion</option>
                                                                            <option value="167">Romania</option>
                                                                            <option value="168">Russian Federation</option>
                                                                            <option value="169">Rwanda</option>
                                                                            <option value="170">Saint Helena</option>
                                                                            <option value="171">Saint Kitts-Nevis</option>
                                                                            <option value="172">Saint Lucia</option>
                                                                            <option value="173">Saint Pierre and Miquelon</option>
                                                                            <option value="174">Saint Vincent and the Grenadines</option>
                                                                            <option value="175">San Marino</option>
                                                                            <option value="176">Saudi Arabia</option>
                                                                            <option value="177">Senegal</option>
                                                                            <option value="229">Serbia</option>
                                                                            <option value="178">Seychelles</option>
                                                                            <option value="179">Sierra Leone</option>
                                                                            <option value="180">Singapore</option>
                                                                            <option value="181">Slovakia</option>
                                                                            <option value="182">Slovenia</option>
                                                                            <option value="183">Solomon Islands</option>
                                                                            <option value="184">Somalia</option>
                                                                            <option value="185">South Africa</option>
                                                                            <option value="186">Spain</option>
                                                                            <option value="187">Sri Lanka</option>
                                                                            <option value="189">Suriname</option>
                                                                            <option value="190">Svalbard</option>
                                                                            <option value="191">Swaziland</option>
                                                                            <option value="192">Sweden</option>
                                                                            <option value="193">Switzerland</option>
                                                                            <option value="195">Tahiti</option>
                                                                            <option value="196">Taiwan</option>
                                                                            <option value="197">Tajikistan</option>
                                                                            <option value="198">Tanzania</option>
                                                                            <option value="199">Thailand</option>
                                                                            <option value="200">Togo</option>
                                                                            <option value="201">Tonga</option>
                                                                            <option value="202">Trinidad and Tobago</option>
                                                                            <option value="203">Tunisia</option>
                                                                            <option value="204">Turkey</option>
                                                                            <option value="205">Turkmenistan</option>
                                                                            <option value="206">Turks and Caicos Islands</option>
                                                                            <option value="207">Tuvalu</option>
                                                                            <option value="208">Uganda</option>
                                                                            <option value="209">Ukraine</option>
                                                                            <option value="210">United Arab Emirates</option>
                                                                            <option value="3">United Kingdom</option>
                                                                            <option value="1">United States</option>
                                                                            <option value="211">Uruguay</option>
                                                                            <option value="212">Uzbekistan</option>
                                                                            <option value="213">Vanuatu</option>
                                                                            <option value="214">Vatican City State</option>
                                                                            <option value="215">Venezuela</option>
                                                                            <option value="216">Vietnam</option>
                                                                            <option value="217">Virgin Islands (U.S.)</option>
                                                                            <option value="218">Wallis and Futuna</option>
                                                                            <option value="219">Western Sahara</option>
                                                                            <option value="220">Western Samoa</option>
                                                                            <option value="221">Yemen</option>
                                                                            <option value="223">Zambia</option>
                                                                            <option value="224">Zimbabwe</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <label for="address" class="form-label">Address</label>
                                                                        <input id="address" class="form-control" type="text" name="address_1" placeholder="Street address">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input class="form-control" type="text" name="address_2" placeholder="Apartment, suite, unit etc. (optional)">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <label for="town" class="form-label">Town / City</label>
                                                                        <input id="town" class="form-control" type="text" name="town_city">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <label for="phone" class="form-label">Phone number</label>
                                                                        <input id="phone" class="form-control" type="text" name="phone_number">
                                                                        <small class="help-block">This will only be used if there are shipping questions.</small>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <label for="email" class="form-label">Email address</label>
                                                                        <input id="email" class="form-control" type="email" name="email_address">
                                                                        <small class="help-block">We'll email you an order confirmation.</small>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button class="btn btn-primary btn-block">Continue</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="step-3" class="tab-pane">
                                                <div class="payment">
                                                    <div class="row">
                                                        <div class="col-md-6 col-md-offset-3">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <div class="payment-card">
                                                                        <p>
                                                                            <small>
                                                                                <strong>FREE</strong> Economy Shipping from UK to worldwide (10 to 35 business days)</small>
                                                                        </p>
                                                                        <table class="table">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="col-xs-9">Subtotal</td>
                                                                                    <td class="col-xs-3">$102.00</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="col-xs-9">Shipping</td>
                                                                                    <td class="col-xs-3">
                                                                                        <span class="nowrap">Free Shipping</span>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="col-xs-9">Total</td>
                                                                                    <td class="col-xs-3">
                                                                                        <span class="payment-total-amount">$102.00</span>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <label for="card-type" class="form-label">Card type</label>
                                                                        <select id="card-type" class="custom-select" name="card_type">
                                                                            <option value="" selected="selected">Select a card</option>
                                                                            <option value="v">Visa</option>
                                                                            <option value="m">MasterCard</option>
                                                                            <option value="a">American Express</option>
                                                                            <option value="d">Discover</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <label for="card-number" class="form-label">Card number</label>
                                                                        <input id="card-number" class="form-control" type="text" name="card_number">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-xs-6">
                                                                    <label for="expdate-month" class="form-label">Expiration date</label>
                                                                    <div class="row gutter-xs">
                                                                        <div class="col-xs-6">
                                                                            <div class="form-group">
                                                                                <select id="expdate-month" class="custom-select" name="expdate_month">
                                                                                    <option value="" selected="selected">Month</option>
                                                                                    <option value="1">01</option>
                                                                                    <option value="2">02</option>
                                                                                    <option value="3">03</option>
                                                                                    <option value="4">04</option>
                                                                                    <option value="5">05</option>
                                                                                    <option value="6">06</option>
                                                                                    <option value="7">07</option>
                                                                                    <option value="8">08</option>
                                                                                    <option value="9">09</option>
                                                                                    <option value="10">10</option>
                                                                                    <option value="11">11</option>
                                                                                    <option value="12">12</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-6">
                                                                            <div class="form-group">
                                                                                <select id="expdate-year" class="custom-select" name="expdate_year">
                                                                                    <option value="" selected="selected">Year</option>
                                                                                    <option value="2017">2017</option>
                                                                                    <option value="2017">2017</option>
                                                                                    <option value="2018">2018</option>
                                                                                    <option value="2019">2019</option>
                                                                                    <option value="2020">2020</option>
                                                                                    <option value="2021">2021</option>
                                                                                    <option value="2022">2022</option>
                                                                                    <option value="2023">2023</option>
                                                                                    <option value="2024">2024</option>
                                                                                    <option value="2025">2025</option>
                                                                                    <option value="2026">2026</option>
                                                                                    <option value="2027">2027</option>
                                                                                    <option value="2028">2028</option>
                                                                                    <option value="2029">2029</option>
                                                                                    <option value="2030">2030</option>
                                                                                    <option value="2031">2031</option>
                                                                                    <option value="2032">2032</option>
                                                                                    <option value="2033">2033</option>
                                                                                    <option value="2034">2034</option>
                                                                                    <option value="2035">2035</option>
                                                                                    <option value="2036">2036</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-5 col-xs-offset-1">
                                                                    <div class="row">
                                                                        <div class="col-xs-12">
                                                                            <div class="form-group">
                                                                                <label for="cvv2-number" class="form-label">Card Security Code</label>
                                                                                <input id="cvv2-number" class="form-control" type="text" name="cvv2_number">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <label for="promotional-code" class="control-label">Promotional code</label>
                                                                        <input id="promotional-code" class="form-control" type="text" name="promotional_code">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="step-4" class="tab-pane">
                                                <div class="confirmation">
                                                    <div class="confirmation-icon">
                                                        <div class="icon icon-check icon-5x"></div>
                                                    </div>
                                                    <div class="confirmation-content">
                                                        <h3>Congratulations! Your Order is accepted.</h3>
                                                        <div class="row">
                                                            <div class="col-md-6 col-md-offset-3">
                                                                <p>
                                                                    <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, sapiente magnam explicabo voluptatibus aut reprehenderit eius inventore dolore. Itaque nisi ullam, nulla quibusdam officiis sequi at eum, architecto qui numquam.</small>
                                                                </p>
                                                                <button class="btn btn-default m-y">Track Order</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="layout-footer">
                <div class="layout-footer-body">
                    <small class="version">Version 1.4.0</small>
                    <small class="copyright">2017 &copy; Elephant <a href="http://madebytilde.com/">Made by Tilde</a></small>
                </div>
            </div>
        </div>
        <script src="js/vendor.min.js"></script>
        <script src="js/elephant.min.js"></script>
        <script src="js/application.min.js"></script>

    </body> 
</html>