<?php
/*
Plugin Name: Luxury Car Booking
Description: A plugin to handle booking forms.
Version: 1.0
Author: Your Name
*/

  // Enqueue scripts and styles
  function enqueue_booking_form_scripts() {
    wp_enqueue_style('booking-form-style', 'https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css');
  }
  add_action('wp_enqueue_scripts', 'enqueue_booking_form_scripts');

  // Shortcode to display booking form
  function booking_form_shortcode() {
    ob_start();
?>
  <!-- Booking Form -->
  <form method="post" id="booking_form" action="">
    <div class="row">
      
      <div class="mb-3 col-lg-4 col-md-12">
        <label for="name" class="form-label">Name*:</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>
      
      <div class="mb-3 col-lg-4 col-md-12">
        <label for="email" class="form-label">Email*:</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>

      <div class="mb-3 col-lg-4 col-md-12">
        <label for="brand" class="form-label">Brand:</label>
        <?php
        $brands = get_terms(array(
          'taxonomy' => 'brand',
          'hide_empty' => false,
        ));
        ?>
        <select class="form-select" aria-label="Default select example" id="brand" name="brand" required>
          <option selected>Select a Brand</option> 
          <?php foreach ($brands as $brand) : ?>
            <option value="<?php echo $brand->term_id; ?>"><?php echo $brand->name; ?></option>
          <?php endforeach; ?>
        </select>
      </div>

      <div class="country-code mb-3 col-lg-4 col-md-12">
        <label for="phone" class="form-label">Phone* (please select your country code)</label>
        <div class="row">
          <div class="col-lg-6">
            <div class="country-code-wrap">
              <select class="form-select" id="country-code-dropdown" name="country_code" required>
                <option value="">Select Country</option>
                <option value="+93"><span class="flag-icon flag-icon-af"></span> Afghanistan (+93)</option>
                <option value="+355"><span class="flag-icon flag-icon-al"></span> Albania (+355)</option>
                <option value="+213"><span class="flag-icon flag-icon-dz"></span> Algeria (+213)</option>
                <option value="+376"><span class="flag-icon flag-icon-ad"></span> Andorra (+376)</option>
                <option value="+244"><span class="flag-icon flag-icon-ao"></span> Angola (+244)</option>
                <option value="+1"><span class="flag-icon flag-icon-ai"></span> Anguilla (+1)</option>
                <option value="+672"><span class="flag-icon flag-icon-aq"></span> Antarctica (+672)</option>
                <option value="+1"><span class="flag-icon flag-icon-ag"></span> Antigua and Barbuda (+1)</option>
                <option value="+54"><span class="flag-icon flag-icon-ar"></span> Argentina (+54)</option>
                <option value="+374"><span class="flag-icon flag-icon-am"></span> Armenia (+374)</option>
                <option value="+297"><span class="flag-icon flag-icon-aw"></span> Aruba (+297)</option>
                <option value="+61"><span class="flag-icon flag-icon-au"></span> Australia (+61)</option>
                <option value="+43"><span class="flag-icon flag-icon-at"></span> Austria (+43)</option>
                <option value="+994"><span class="flag-icon flag-icon-az"></span> Azerbaijan (+994)</option>
                <option value="+1"><span class="flag-icon flag-icon-bs"></span> Bahamas (+1)</option>
                <option value="+973"><span class="flag-icon flag-icon-bh"></span> Bahrain (+973)</option>
                <option value="+880"><span class="flag-icon flag-icon-bd"></span> Bangladesh (+880)</option>
                <option value="+1"><span class="flag-icon flag-icon-bb"></span> Barbados (+1)</option>
                <option value="+375"><span class="flag-icon flag-icon-by"></span> Belarus (+375)</option>
                <option value="+32"><span class="flag-icon flag-icon-be"></span> Belgium (+32)</option>
                <option value="+501"><span class="flag-icon flag-icon-bz"></span> Belize (+501)</option>
                <option value="+229"><span class="flag-icon flag-icon-bj"></span> Benin (+229)</option>
                <option value="+1"><span class="flag-icon flag-icon-bm"></span> Bermuda (+1)</option>
                <option value="+975"><span class="flag-icon flag-icon-bt"></span> Bhutan (+975)</option>
                <option value="+591"><span class="flag-icon flag-icon-bo"></span> Bolivia (+591)</option>
                <option value="+387"><span class="flag-icon flag-icon-ba"></span> Bosnia and Herzegovina (+387)</option>
                <option value="+267"><span class="flag-icon flag-icon-bw"></span> Botswana (+267)</option>
                <option value="+55"><span class="flag-icon flag-icon-br"></span> Brazil (+55)</option>
                <option value="+246"><span class="flag-icon flag-icon-io"></span> British Indian Ocean Territory (+246)</option>
                <option value="+1"><span class="flag-icon flag-icon-vg"></span> British Virgin Islands (+1)</option>
                <option value="+673"><span class="flag-icon flag-icon-bn"></span> Brunei (+673)</option>
                <option value="+359"><span class="flag-icon flag-icon-bg"></span> Bulgaria (+359)</option>
                <option value="+226"><span class="flag-icon flag-icon-bf"></span> Burkina Faso (+226)</option>
                <option value="+257"><span class="flag-icon flag-icon-bi"></span> Burundi (+257)</option>
                <option value="+855"><span class="flag-icon flag-icon-kh"></span> Cambodia (+855)</option>
                <option value="+237"><span class="flag-icon flag-icon-cm"></span> Cameroon (+237)</option>
                <option value="+1"><span class="flag-icon flag-icon-ca"></span> Canada (+1)</option>
                <option value="+238"><span class="flag-icon flag-icon-cv"></span> Cape Verde (+238)</option>
                <option value="+599"><span class="flag-icon flag-icon-bq"></span> Caribbean Netherlands (+599)</option>
                <option value="+1"><span class="flag-icon flag-icon-ky"></span> Cayman Islands (+1)</option>
                <option value="+236"><span class="flag-icon flag-icon-cf"></span> Central African Republic (+236)</option>
                <option value="+235"><span class="flag-icon flag-icon-td"></span> Chad (+235)</option>
                <option value="+56"><span class="flag-icon flag-icon-cl"></span> Chile (+56)</option>
                <option value="+86"><span class="flag-icon flag-icon-cn"></span> China (+86)</option>
                <option value="+61"><span class="flag-icon flag-icon-cx"></span> Christmas Island (+61)</option>
                <option value="+61"><span class="flag-icon flag-icon-cc"></span> Cocos Islands (+61)</option>
                <option value="+57"><span class="flag-icon flag-icon-co"></span> Colombia (+57)</option>
                <option value="+269"><span class="flag-icon flag-icon-km"></span> Comoros (+269)</option>
                <option value="+243"><span class="flag-icon flag-icon-cd"></span> Congo - Kinshasa (+243)</option>
                <option value="+242"><span class="flag-icon flag-icon-cg"></span> Congo - Brazzaville (+242)</option>
                <option value="+682"><span class="flag-icon flag-icon-ck"></span> Cook Islands (+682)</option>
                <option value="+506"><span class="flag-icon flag-icon-cr"></span> Costa Rica (+506)</option>
                <option value="+385"><span class="flag-icon flag-icon-hr"></span> Croatia (+385)</option>
                <option value="+53"><span class="flag-icon flag-icon-cu"></span> Cuba (+53)</option>
                <option value="+599"><span class="flag-icon flag-icon-cw"></span> Curaçao (+599)</option>
                <option value="+357"><span class="flag-icon flag-icon-cy"></span> Cyprus (+357)</option>
                <option value="+420"><span class="flag-icon flag-icon-cz"></span> Czech Republic (+420)</option>
                <option value="+45"><span class="flag-icon flag-icon-dk"></span> Denmark (+45)</option>
                <option value="+253"><span class="flag-icon flag-icon-dj"></span> Djibouti (+253)</option>
                <option value="+1"><span class="flag-icon flag-icon-dm"></span> Dominica (+1)</option>
                <option value="+1"><span class="flag-icon flag-icon-do"></span> Dominican Republic (+1)</option>
                <option value="+593"><span class="flag-icon flag-icon-ec"></span> Ecuador (+593)</option>
                <option value="+20"><span class="flag-icon flag-icon-eg"></span> Egypt (+20)</option>
                <option value="+503"><span class="flag-icon flag-icon-sv"></span> El Salvador (+503)</option>
                <option value="+240"><span class="flag-icon flag-icon-gq"></span> Equatorial Guinea (+240)</option>
                <option value="+291"><span class="flag-icon flag-icon-er"></span> Eritrea (+291)</option>
                <option value="+372"><span class="flag-icon flag-icon-ee"></span> Estonia (+372)</option>
                <option value="+251"><span class="flag-icon flag-icon-et"></span> Ethiopia (+251)</option>
                <option value="+500"><span class="flag-icon flag-icon-fk"></span> Falkland Islands (+500)</option>
                <option value="+298"><span class="flag-icon flag-icon-fo"></span> Faroe Islands (+298)</option>
                <option value="+679"><span class="flag-icon flag-icon-fj"></span> Fiji (+679)</option>
                <option value="+358"><span class="flag-icon flag-icon-fi"></span> Finland (+358)</option>
                <option value="+33"><span class="flag-icon flag-icon-fr"></span> France (+33)</option>
                <option value="+594"><span class="flag-icon flag-icon-gf"></span> French Guiana (+594)</option>
                <option value="+689"><span class="flag-icon flag-icon-pf"></span> French Polynesia (+689)</option>
                <option value="+262"><span class="flag-icon flag-icon-yt"></span> French Southern Territories (+262)</option>
                <option value="+241"><span class="flag-icon flag-icon-ga"></span> Gabon (+241)</option>
                <option value="+220"><span class="flag-icon flag-icon-gm"></span> Gambia (+220)</option>
                <option value="+995"><span class="flag-icon flag-icon-ge"></span> Georgia (+995)</option>
                <option value="+49"><span class="flag-icon flag-icon-de"></span> Germany (+49)</option>
                <option value="+233"><span class="flag-icon flag-icon-gh"></span> Ghana (+233)</option>
                <option value="+350"><span class="flag-icon flag-icon-gi"></span> Gibraltar (+350)</option>
                <option value="+30"><span class="flag-icon flag-icon-gr"></span> Greece (+30)</option>
                <option value="+299"><span class="flag-icon flag-icon-gl"></span> Greenland (+299)</option>
                <option value="+1"><span class="flag-icon flag-icon-gd"></span> Grenada (+1)</option>
                <option value="+590"><span class="flag-icon flag-icon-gp"></span> Guadeloupe (+590)</option>
                <option value="+1"><span class="flag-icon flag-icon-gu"></span> Guam (+1)</option>
                <option value="+502"><span class="flag-icon flag-icon-gt"></span> Guatemala (+502)</option>
                <option value="+44"><span class="flag-icon flag-icon-gg"></span> Guernsey (+44)</option>
                <option value="+224"><span class="flag-icon flag-icon-gn"></span> Guinea (+224)</option>
                <option value="+245"><span class="flag-icon flag-icon-gw"></span> Guinea-Bissau (+245)</option>
                <option value="+592"><span class="flag-icon flag-icon-gy"></span> Guyana (+592)</option>
                <option value="+509"><span class="flag-icon flag-icon-ht"></span> Haiti (+509)</option>
                <option value="+504"><span class="flag-icon flag-icon-hn"></span> Honduras (+504)</option>
                <option value="+852"><span class="flag-icon flag-icon-hk"></span> Hong Kong SAR China (+852)</option>
                <option value="+36"><span class="flag-icon flag-icon-hu"></span> Hungary (+36)</option>
                <option value="+354"><span class="flag-icon flag-icon-is"></span> Iceland (+354)</option>
                <option value="+91"><span class="flag-icon flag-icon-in"></span> India (+91)</option>
                <option value="+62"><span class="flag-icon flag-icon-id"></span> Indonesia (+62)</option>
                <option value="+98"><span class="flag-icon flag-icon-ir"></span> Iran (+98)</option>
                <option value="+964"><span class="flag-icon flag-icon-iq"></span> Iraq (+964)</option>
                <option value="+353"><span class="flag-icon flag-icon-ie"></span> Ireland (+353)</option>
                <option value="+44"><span class="flag-icon flag-icon-im"></span> Isle of Man (+44)</option>
                <option value="+972"><span class="flag-icon flag-icon-il"></span> Israel (+972)</option>
                <option value="+39"><span class="flag-icon flag-icon-it"></span> Italy (+39)</option>
                <option value="+225"><span class="flag-icon flag-icon-ci"></span> Ivory Coast (+225)</option>
                <option value="+1"><span class="flag-icon flag-icon-jm"></span> Jamaica (+1)</option>
                <option value="+81"><span class="flag-icon flag-icon-jp"></span> Japan (+81)</option>
                <option value="+44"><span class="flag-icon flag-icon-je"></span> Jersey (+44)</option>
                <option value="+962"><span class="flag-icon flag-icon-jo"></span> Jordan (+962)</option>
                <option value="+7"><span class="flag-icon flag-icon-kz"></span> Kazakhstan (+7)</option>
                <option value="+254"><span class="flag-icon flag-icon-ke"></span> Kenya (+254)</option>
                <option value="+686"><span class="flag-icon flag-icon-ki"></span> Kiribati (+686)</option>
                <option value="+383"><span class="flag-icon flag-icon-xk"></span> Kosovo (+383)</option>
                <option value="+965"><span class="flag-icon flag-icon-kw"></span> Kuwait (+965)</option>
                <option value="+996"><span class="flag-icon flag-icon-kg"></span> Kyrgyzstan (+996)</option>
                <option value="+856"><span class="flag-icon flag-icon-la"></span> Laos (+856)</option>
                <option value="+371"><span class="flag-icon flag-icon-lv"></span> Latvia (+371)</option>
                <option value="+961"><span class="flag-icon flag-icon-lb"></span> Lebanon (+961)</option>
                <option value="+266"><span class="flag-icon flag-icon-ls"></span> Lesotho (+266)</option>
                <option value="+231"><span class="flag-icon flag-icon-lr"></span> Liberia (+231)</option>
                <option value="+218"><span class="flag-icon flag-icon-ly"></span> Libya (+218)</option>
                <option value="+423"><span class="flag-icon flag-icon-li"></span> Liechtenstein (+423)</option>
                <option value="+370"><span class="flag-icon flag-icon-lt"></span> Lithuania (+370)</option>
                <option value="+352"><span class="flag-icon flag-icon-lu"></span> Luxembourg (+352)</option>
                <option value="+853"><span class="flag-icon flag-icon-mo"></span> Macau SAR China (+853)</option>
                <option value="+389"><span class="flag-icon flag-icon-mk"></span> Macedonia (+389)</option>
                <option value="+261"><span class="flag-icon flag-icon-mg"></span> Madagascar (+261)</option>
                <option value="+265"><span class="flag-icon flag-icon-mw"></span> Malawi (+265)</option>
                <option value="+60"><span class="flag-icon flag-icon-my"></span> Malaysia (+60)</option>
                <option value="+960"><span class="flag-icon flag-icon-mv"></span> Maldives (+960)</option>
                <option value="+223"><span class="flag-icon flag-icon-ml"></span> Mali (+223)</option>
                <option value="+356"><span class="flag-icon flag-icon-mt"></span> Malta (+356)</option>
                <option value="+692"><span class="flag-icon flag-icon-mh"></span> Marshall Islands (+692)</option>
                <option value="+596"><span class="flag-icon flag-icon-mq"></span> Martinique (+596)</option>
                <option value="+222"><span class="flag-icon flag-icon-mr"></span> Mauritania (+222)</option>
                <option value="+230"><span class="flag-icon flag-icon-mu"></span> Mauritius (+230)</option>
                <option value="+262"><span class="flag-icon flag-icon-yt"></span> Mayotte (+262)</option>
                <option value="+52"><span class="flag-icon flag-icon-mx"></span> Mexico (+52)</option>
                <option value="+691"><span class="flag-icon flag-icon-fm"></span> Micronesia (+691)</option>
                <option value="+373"><span class="flag-icon flag-icon-md"></span> Moldova (+373)</option>
                <option value="+377"><span class="flag-icon flag-icon-mc"></span> Monaco (+377)</option>
                <option value="+976"><span class="flag-icon flag-icon-mn"></span> Mongolia (+976)</option>
                <option value="+382"><span class="flag-icon flag-icon-me"></span> Montenegro (+382)</option>
                <option value="+1"><span class="flag-icon flag-icon-ms"></span> Montserrat (+1)</option>
                <option value="+212"><span class="flag-icon flag-icon-ma"></span> Morocco (+212)</option>
                <option value="+258"><span class="flag-icon flag-icon-mz"></span> Mozambique (+258)</option>
                <option value="+95"><span class="flag-icon flag-icon-mm"></span> Myanmar (Burma) (+95)</option>
                <option value="+264"><span class="flag-icon flag-icon-na"></span> Namibia (+264)</option>
                <option value="+674"><span class="flag-icon flag-icon-nr"></span> Nauru (+674)</option>
                <option value="+977"><span class="flag-icon flag-icon-np"></span> Nepal (+977)</option>
                <option value="+31"><span class="flag-icon flag-icon-nl"></span> Netherlands (+31)</option>
                <option value="+687"><span class="flag-icon flag-icon-nc"></span> New Caledonia (+687)</option>
                <option value="+64"><span class="flag-icon flag-icon-nz"></span> New Zealand (+64)</option>
                <option value="+505"><span class="flag-icon flag-icon-ni"></span> Nicaragua (+505)</option>
                <option value="+227"><span class="flag-icon flag-icon-ne"></span> Niger (+227)</option>
                <option value="+234"><span class="flag-icon flag-icon-ng"></span> Nigeria (+234)</option>
                <option value="+683"><span class="flag-icon flag-icon-nu"></span> Niue (+683)</option>
                <option value="+672"><span class="flag-icon flag-icon-nf"></span> Norfolk Island (+672)</option>
                <option value="+850"><span class="flag-icon flag-icon-kp"></span> North Korea (+850)</option>
                <option value="+1"><span class="flag-icon flag-icon-mp"></span> Northern Mariana Islands (+1)</option>
                <option value="+47"><span class="flag-icon flag-icon-no"></span> Norway (+47)</option>
                <option value="+968"><span class="flag-icon flag-icon-om"></span> Oman (+968)</option>
                <option value="+92"><span class="flag-icon flag-icon-pk"></span> Pakistan (+92)</option>
                <option value="+680"><span class="flag-icon flag-icon-pw"></span> Palau (+680)</option>
                <option value="+970"><span class="flag-icon flag-icon-ps"></span> Palestinian Territories (+970)</option>
                <option value="+507"><span class="flag-icon flag-icon-pa"></span> Panama (+507)</option>
                <option value="+675"><span class="flag-icon flag-icon-pg"></span> Papua New Guinea (+675)</option>
                <option value="+595"><span class="flag-icon flag-icon-py"></span> Paraguay (+595)</option>
                <option value="+51"><span class="flag-icon flag-icon-pe"></span> Peru (+51)</option>
                <option value="+63"><span class="flag-icon flag-icon-ph"></span> Philippines (+63)</option>
                <option value="+48"><span class="flag-icon flag-icon-pl"></span> Poland (+48)</option>
                <option value="+351"><span class="flag-icon flag-icon-pt"></span> Portugal (+351)</option>
                <option value="+1"><span class="flag-icon flag-icon-pr"></span> Puerto Rico (+1)</option>
                <option value="+974"><span class="flag-icon flag-icon-qa"></span> Qatar (+974)</option>
                <option value="+262"><span class="flag-icon flag-icon-re"></span> Réunion (+262)</option>
                <option value="+40"><span class="flag-icon flag-icon-ro"></span> Romania (+40)</option>
                <option value="+7"><span class="flag-icon flag-icon-ru"></span> Russia (+7)</option>
                <option value="+250"><span class="flag-icon flag-icon-rw"></span> Rwanda (+250)</option>
                <option value="+590"><span class="flag-icon flag-icon-bl"></span> Saint Barthélemy (+590)</option>
                <option value="+290"><span class="flag-icon flag-icon-sh"></span> Saint Helena (+290)</option>
                <option value="+1"><span class="flag-icon flag-icon-kn"></span> Saint Kitts and Nevis (+1)</option>
                <option value="+1"><span class="flag-icon flag-icon-lc"></span> Saint Lucia (+1)</option>
                <option value="+590"><span class="flag-icon flag-icon-mf"></span> Saint Martin (+590)</option>
                <option value="+508"><span class="flag-icon flag-icon-pm"></span> Saint Pierre and Miquelon (+508)</option>
                <option value="+1"><span class="flag-icon flag-icon-vc"></span> Saint Vincent and the Grenadines (+1)</option>
                <option value="+685"><span class="flag-icon flag-icon-ws"></span> Samoa (+685)</option>
                <option value="+378"><span class="flag-icon flag-icon-sm"></span> San Marino (+378)</option>
                <option value="+239"><span class="flag-icon flag-icon-st"></span> São Tomé and Príncipe (+239)</option>
                <option value="+966"><span class="flag-icon flag-icon-sa"></span> Saudi Arabia (+966)</option>
                <option value="+221"><span class="flag-icon flag-icon-sn"></span> Senegal (+221)</option>
                <option value="+381"><span class="flag-icon flag-icon-rs"></span> Serbia (+381)</option>
                <option value="+248"><span class="flag-icon flag-icon-sc"></span> Seychelles (+248)</option>
                <option value="+232"><span class="flag-icon flag-icon-sl"></span> Sierra Leone (+232)</option>
                <option value="+65"><span class="flag-icon flag-icon-sg"></span> Singapore (+65)</option>
                <option value="+599"><span class="flag-icon flag-icon-sx"></span> Sint Maarten (+599)</option>
                <option value="+421"><span class="flag-icon flag-icon-sk"></span> Slovakia (+421)</option>
                <option value="+386"><span class="flag-icon flag-icon-si"></span> Slovenia (+386)</option>
                <option value="+677"><span class="flag-icon flag-icon-sb"></span> Solomon Islands (+677)</option>
                <option value="+252"><span class="flag-icon flag-icon-so"></span> Somalia (+252)</option>
                <option value="+27"><span class="flag-icon flag-icon-za"></span> South Africa (+27)</option>
                <option value="+82"><span class="flag-icon flag-icon-kr"></span> South Korea (+82)</option>
                <option value="+211"><span class="flag-icon flag-icon-ss"></span> South Sudan (+211)</option>
                <option value="+34"><span class="flag-icon flag-icon-es"></span> Spain (+34)</option>
                <option value="+94"><span class="flag-icon flag-icon-lk"></span> Sri Lanka (+94)</option>
                <option value="+249"><span class="flag-icon flag-icon-sd"></span> Sudan (+249)</option>
                <option value="+597"><span class="flag-icon flag-icon-sr"></span> Suriname (+597)</option>
                <option value="+47"><span class="flag-icon flag-icon-sj"></span> Svalbard and Jan Mayen (+47)</option>
                <option value="+268"><span class="flag-icon flag-icon-sz"></span> Swaziland (+268)</option>
                <option value="+46"><span class="flag-icon flag-icon-se"></span> Sweden (+46)</option>
                <option value="+41"><span class="flag-icon flag-icon-ch"></span> Switzerland (+41)</option>
                <option value="+963"><span class="flag-icon flag-icon-sy"></span> Syria (+963)</option>
                <option value="+886"><span class="flag-icon flag-icon-tw"></span> Taiwan (+886)</option>
                <option value="+992"><span class="flag-icon flag-icon-tj"></span> Tajikistan (+992)</option>
                <option value="+255"><span class="flag-icon flag-icon-tz"></span> Tanzania (+255)</option>
                <option value="+66"><span class="flag-icon flag-icon-th"></span> Thailand (+66)</option>
                <option value="+670"><span class="flag-icon flag-icon-tl"></span> Timor-Leste (+670)</option>
                <option value="+228"><span class="flag-icon flag-icon-tg"></span> Togo (+228)</option>
                <option value="+690"><span class="flag-icon flag-icon-tk"></span> Tokelau (+690)</option>
                <option value="+676"><span class="flag-icon flag-icon-to"></span> Tonga (+676)</option>
                <option value="+1"><span class="flag-icon flag-icon-tt"></span> Trinidad and Tobago (+1)</option>
                <option value="+216"><span class="flag-icon flag-icon-tn"></span> Tunisia (+216)</option>
                <option value="+90"><span class="flag-icon flag-icon-tr"></span> Turkey (+90)</option>
                <option value="+993"><span class="flag-icon flag-icon-tm"></span> Turkmenistan (+993)</option>
                <option value="+1"><span class="flag-icon flag-icon-tc"></span> Turks and Caicos Islands (+1)</option>
                <option value="+688"><span class="flag-icon flag-icon-tv"></span> Tuvalu (+688)</option>
                <option value="+1"><span class="flag-icon flag-icon-vi"></span> U.S. Virgin Islands (+1)</option>
                <option value="+256"><span class="flag-icon flag-icon-ug"></span> Uganda (+256)</option>
                <option value="+380"><span class="flag-icon flag-icon-ua"></span> Ukraine (+380)</option>
                <option value="+971"><span class="flag-icon flag-icon-ae"></span> United Arab Emirates (+971)</option>
                <option value="+44"><span class="flag-icon flag-icon-gb"></span> United Kingdom (+44)</option>
                <option value="+1"><span class="flag-icon flag-icon-us"></span> United States (+1)</option>
                <option value="+598"><span class="flag-icon flag-icon-uy"></span> Uruguay (+598)</option>
                <option value="+998"><span class="flag-icon flag-icon-uz"></span> Uzbekistan (+998)</option>
                <option value="+678"><span class="flag-icon flag-icon-vu"></span> Vanuatu (+678)</option>
                <option value="+39"><span class="flag-icon flag-icon-va"></span> Vatican City (+39)</option>
                <option value="+58"><span class="flag-icon flag-icon-ve"></span> Venezuela (+58)</option>
                <option value="+84"><span class="flag-icon flag-icon-vn"></span> Vietnam (+84)</option>
                <option value="+681"><span class="flag-icon flag-icon-wf"></span> Wallis and Futuna (+681)</option>
                <option value="+212"><span class="flag-icon flag-icon-eh"></span> Western Sahara (+212)</option>
                <option value="+967"><span class="flag-icon flag-icon-ye"></span> Yemen (+967)</option>
                <option value="+260"><span class="flag-icon flag-icon-zm"></span> Zambia (+260)</option>
                <option value="+263"><span class="flag-icon flag-icon-zw"></span> Zimbabwe (+263)</option>
              </select>
            </div>
          </div>
          <div class="col-lg-6">
            <input type="text" id="phone" name="phone" class="form-control" required>
          </div>
        </div>
      </div>

      <div class="mb-3 col-lg-2 col-md-6 col-sm-6">
        <label for="date_from" class="form-label">Date From:</label>
        <div class="input-group date" id="datepicker">
          <input type="date" class="form-control" id="date_from" name="date_from" min="<?php echo date('Y-m-d'); ?>" required>
        </div>
      </div>

      <div class="mb-3 col-lg-2 col-md-6 col-sm-6">
        <label for="date_to" class="form-label">Date To:</label>
        <div class="input-group date" id="datepicker">
          <input type="date" class="form-control" id="date_to" name="date_to" min="<?php echo date('Y-m-d'); ?>" required>
        </div>
      </div>

      <div class="mb-3 col-lg-4 col-md-12">
        <div class="form-btn">
          <input type="submit" class="btn btn-primary custom-btn" name="submit_booking" id="booking_btn" value="Book Now">
        </div>
      </div>

    </div>
  </form>
  <div id="booking_status"></div>
<?php
    return ob_get_clean();
  }
  add_shortcode('booking_form', 'booking_form_shortcode');

  // Handle form submission
  function handle_booking_form_submission() {
    global $wpdb;
    if (isset($_POST['submit_booking'])) {
      $name = sanitize_text_field($_POST['name']);
      $email = sanitize_email($_POST['email']);
      $brand = sanitize_text_field($_POST['brand']);
      $phone = sanitize_text_field($_POST['country_code']).'-'.sanitize_text_field($_POST['phone']);
      $date_from = $_POST['date_from'];
      $date_to = $_POST['date_to'];

      $table_name = $wpdb->prefix . 'luxury_car_bookings';
      $wpdb->insert(
        $table_name,
        array(
          'name' => $name,
          'email' => $email,
          'brand' => $brand,
          'phone' => $phone,
          'date_from' => $date_from,
          'date_to' => $date_to
        )
      );
      //echo '<p>Booking submitted successfully!</p>';
      header("Location: https://projects.codeartssolution.in/pham-luxury/thank-you");
      exit();
    }
  }
  add_action('init', 'handle_booking_form_submission');

  // Admin menu to display submitted data
  function booking_menu() {
    add_menu_page('Luxury Car Bookings', 'Luxury Car Bookings', 'manage_options', 'luxury-car-booking-list', 'display_luxury_car_bookings');
  }
  add_action('admin_menu', 'booking_menu');

  function display_luxury_car_bookings() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'luxury_car_bookings';
    $bookings = $wpdb->get_results("SELECT * FROM $table_name", ARRAY_A);
    echo '<div class="wrap">';
    echo '<h2>Luxury Car Bookings</h2>';
    echo '<table class="wp-list-table widefat fixed striped">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>Name</th>';
    echo '<th>Email</th>';
    echo '<th>Brand</th>';
    echo '<th>Phone</th>';
    echo '<th>Booking From</th>';
    echo '<th>Booking Upto</th>';
    echo '<th>Submission Date</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    foreach ($bookings as $booking) {
      echo '<tr>';
      echo '<td>' . $booking['name'] . '</td>';
      echo '<td>' . $booking['email'] . '</td>';
      $brand = get_term_by('id', intval($booking['brand']), 'brand');
      if ($brand) {
        echo '<td>' . $brand->name . '</td>';
      } else {
        echo '<td>N/A</td>';
      }
      echo '<td>' . $booking['phone'] . '</td>';
      echo '<td>' . $booking['date_from'] . '</td>';
      echo '<td>' . $booking['date_to'] . '</td>';
      echo '<td>' . $booking['submission_date'] . '</td>';
      echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';
    echo '</div>';
  }
?>