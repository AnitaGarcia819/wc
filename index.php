<!doctype html>
<!--
@license
Copyright (c) 2015 The Polymer Project Authors. All rights reserved.
This code may only be used under the BSD style license found at http://polymer.github.io/LICENSE.txt
The complete set of authors may be found at http://polymer.github.io/AUTHORS.txt
The complete set of contributors may be found at http://polymer.github.io/CONTRIBUTORS.txt
Code distributed by Google as part of the polymer project is also
subject to an additional IP rights grant found at http://polymer.github.io/PATENTS.txt
-->

<html lang="en">
<?php session_start();?> 
<head>
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="generator" content="Polymer Starter Kit">
  <link rel="import" href="elements/wc-assess/wc-assess.html">
  <link rel="import" href="elements/wc-multi-select-input/wc-multi-select-input.html">
  <link rel="import" href="elements/wc-button-select-input/wc-button-select-input.html">
  <link rel="import" href="elements/wc-aroma-value-input/wc-aroma-value-input.html">
  <link rel="import" href="elements/wc-long-menu/wc-long-menu.html">

  <title>Winary Code</title>

  <!-- Place favicon.ico in the `app/` directory -->

  <!-- Chrome for Android theme color -->
  <meta name="theme-color" content="#2E3AA1">

  <!-- Web Application Manifest -->
  <link rel="manifest" href="manifest.json">

  <!-- Tile color for Win8 -->
  <meta name="msapplication-TileColor" content="#3372DF">

  <!-- Add to homescreen for Chrome on Android -->
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="application-name" content="PSK">
  <link rel="icon" sizes="192x192" href="images/touch/chrome-touch-icon-192x192.png">

  <!-- Add to homescreen for Safari on iOS -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="Polymer Starter Kit">
  <link rel="apple-touch-icon" href="images/touch/apple-touch-icon.png">

  <!-- Tile icon for Win8 (144x144) -->
  <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">

  <!-- build:css styles/main.css -->
  <link rel="stylesheet" href="styles/main.css">
  <!-- endbuild-->

  <!-- build:js bower_components/webcomponentsjs/webcomponents-lite.min.js -->
  <script src="bower_components/webcomponentsjs/webcomponents-lite.js"></script>
  <!-- endbuild -->

  <!-- Because this project uses vulcanize this should be your only html import
       in this file. All other imports should go in elements.html -->
  <link rel="import" href="elements/elements.html">

  <!-- For shared styles, shared-styles.html import in elements.html -->
  <style is="custom-style" include="shared-styles"></style>
</head>

<body unresolved>
  <span id="browser-sync-binding"></span>
  <template is="dom-bind" id="app">

    <paper-drawer-panel id="paperDrawerPanel">
      <!-- Drawer Scroll Header Panel -->
      <paper-scroll-header-panel drawer >

        <!-- Drawer Toolbar -->
        <paper-toolbar id="drawerToolbar">
          <span class="menu-name">Menu</span>
        </paper-toolbar>

        <!-- Drawer Content -->
        <paper-menu attr-for-selected="data-route" selected="[[route]]">
          <a data-route="home" href="{{baseUrl}}">
            <iron-icon icon="home"></iron-icon>
            <span>Home</span>
          </a>
          <a data-route="users" href="{{baseUrl}}users">
            <iron-icon icon="info"></iron-icon>
            <span>Users</span>
          </a>

          <a data-route="red-assessment" href="{{baseUrl}}red-assessment">
            <iron-icon icon="mail"></iron-icon>
            <span>Red Assessment</span>
          </a>

          <a data-route="register-wine" href="{{baseUrl}}register-wine">
            <iron-icon icon="assignment"></iron-icon>
            <span>Register Wine</span>

          </a><!--Login declared here -->
          <a data-route="login-form" href = "{{baseUrl}}login-form">
            <iron-icon icon "mail"></iron-icon>
            <span>Login</span>
          </a>
        </paper-menu>
      </paper-scroll-header-panel>

      <!-- Main Area -->
      <paper-scroll-header-panel main id="headerPanelMain" condenses keep-condensed-header>
        <!-- Main Toolbar -->
        <paper-toolbar id="mainToolbar" class="tall">
          <paper-icon-button id="paperToggle" icon="menu" paper-drawer-toggle></paper-icon-button>

          <span class="space"></span>

          <!-- Toolbar icons -->
          <paper-icon-button icon="refresh"></paper-icon-button>
          <paper-icon-button icon="search"></paper-icon-button>

          <!-- Application name -->
          <div class="middle middle-container">
            <div class="app-name">Winary Code</div>
          </div>

          <!-- Application sub title -->
          <div class="bottom bottom-container">
            <div class="bottom-title">Sommeiler 2.0</div>
          </div>
        </paper-toolbar>

        <!-- Main Content -->
        <div class="content">
          <iron-pages attr-for-selected="data-route" selected="{{route}}">
            <section data-route="home">
              <paper-material elevation="1">
                <p>
                  <br>
                        <?php 
                        if(isset($_SESSION['email'])){
                        $fbPhoto = $_SESSION['image'];
                        echo '<h1>Welcome, '. $_SESSION['name'] . '</h1>'.'<br>';
                    	  echo "<img src='$fbPhoto' /><br>";
                    	  //Logout
                      }
                      else{
                        echo "<h1>Welcome!</h1>";
                      }
                  ?>
                </p>
                
              </paper-material>

              <paper-material elevation="1">
                <p>This is another card.</p>

                <form action="api/login.php">
                  <button name="regWine" type="submit">Logout</button>
                </form>

              </paper-material>

              <paper-material elevation="1">
                <h1 id="license">License</h1>
                <p>Everything in this repo is BSD style license unless otherwise specified.</p>
                <p>Copyright (c) 2015 The Polymer Authors. All rights reserved.</p>
                <p>Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:</p>
                <ul>
                <li>Redistributions of source code must retain the above copyright
                notice, this list of conditions and the following disclaimer.</li>
                <li>Redistributions in binary form must reproduce the above
                copyright notice, this list of conditions and the following disclaimer
                in the documentation and/or other materials provided with the
                distribution.</li>
                <li>Neither the name of Google Inc. nor the names of its
                contributors may be used to endorse or promote products derived from
                this software without specific prior written permission.</li>
                </ul>
                <p>THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS &quot;AS IS&quot; AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.</p>
              </paper-material>
            </section>

            <section data-route="users">
              <paper-material elevation="1">
                <h2 class="page-title">Users</h2>
                <p>This is the users section</p>
                <a href$="{{baseUrl}}users/Addy">Addy</a><br>
                <a href$="{{baseUrl}}users/Rob">Rob</a><br>
                <a href$="{{baseUrl}}users/Chuck">Chuck</a><br>
                <a href$="{{baseUrl}}users/Sam">Sam</a>
              </paper-material>
            </section>

            <section data-route="user-info">
              <paper-material elevation="1">
                <h2 class="page-title">User: {{params.name}}</h2>
                <div>This is {{params.name}}'s section</div>
              </paper-material>
            </section>

            <section data-route="red-assessment">
              <paper-material elevation="1">
                <!-- Anita's --> 
                <wc-assess id="wc-red-assess"  method="post" action="api/assess.php">
                 <div class="assess-section" id="asses-overview">

                     <wc-button-select-input name="primary_color">
                         <paper-button raised noink>Orange</paper-button>
                         <paper-button raised noink>Garnet</paper-button>
                         <paper-button raised noink>Ruby</paper-button>
                         <paper-button raised noink>Purple</paper-button>
                     </wc-button-select-input>

                     <wc-button-select-input name="secondary_color">
                         <paper-button raised noink>Brown</paper-button>
                         <paper-button raised noink>Black/Blue</paper-button>
                     </wc-button-select-input>

                     <wc-button-select-input name="red_fruit" selected="{{redBool}}">
                         <paper-button raised noink>None</paper-button>
                         <paper-button raised noink>Low</paper-button>
                         <paper-button raised noink>Medium</paper-button>
                         <paper-button raised noink>High</paper-button>
                     </wc-button-select-input>

                     <wc-multi-select-input makevisible="[[redBool]]"
                                            label="Choose all that apply"
                                            from="api/red-aroma-values.php"
                                            link="red_fruit"
                                            style="width: 100%">
                     </wc-multi-select-input>

                     <wc-button-select-input name="black_fruit" selected="{{blackBool}}">
                         <paper-button raised noink>None</paper-button>
                         <paper-button raised noink>Low</paper-button>
                         <paper-button raised noink>Medium</paper-button>
                         <paper-button raised noink>High</paper-button>
                     </wc-button-select-input>

                     <wc-multi-select-input makevisible="[[blackBool]]"
                                            label="Choose all that apply"
                                            from="api/red-aroma-values.php"
                                            link="black_fruit"
                                            style="width: 100%">
                     </wc-multi-select-input>

                     <wc-button-select-input name="blue_fruit" selected="{{blueBool}}">
                         <paper-button raised noink>None</paper-button>
                         <paper-button raised noink>Low</paper-button>
                         <paper-button raised noink>Medium</paper-button>
                         <paper-button raised noink>High</paper-button>
                     </wc-button-select-input>

                     <wc-multi-select-input makevisible="[[blueBool]]"
                                            label="Choose all that apply"
                                            from="api/red-aroma-values.php"
                                            link="blue_fruit"
                                            style="width: 100%">
                     </wc-multi-select-input>

                     <wc-button-select-input name="fruit_type" selected="{{typeBool}}">
                         <paper-button raised noink>None</paper-button>
                         <paper-button raised noink>Low</paper-button>
                         <paper-button raised noink>Medium</paper-button>
                         <paper-button raised noink>High</paper-button>
                     </wc-button-select-input>

                     <wc-multi-select-input makevisible="[[typeBool]]"
                                            label="Choose all that apply"
                                            from="api/red-aroma-values.php"
                                            link="fruit_type"
                                            style="width: 100%">
                     </wc-multi-select-input>

                     <wc-button-select-input name="flowers" selected="{{flowersBool}}">
                         <paper-button raised noink>None</paper-button>
                         <paper-button raised noink>Low</paper-button>
                         <paper-button raised noink>Medium</paper-button>
                         <paper-button raised noink>High</paper-button>
                     </wc-button-select-input>

                     <wc-multi-select-input makevisible="[[flowersBool]]"
                                            label="Choose all that apply"
                                            from="api/red-aroma-values.php"
                                            link="flowers"
                                            style="width: 100%">
                     </wc-multi-select-input>

                     <wc-button-select-input name="herbs" selected="{{herbsBool}}">
                         <paper-button raised noink>None</paper-button>
                         <paper-button raised noink>Low</paper-button>
                         <paper-button raised noink>Medium</paper-button>
                         <paper-button raised noink>High</paper-button>
                     </wc-button-select-input>

                     <wc-multi-select-input makevisible="[[herbsBool]]"
                                            label="Choose all that apply"
                                            from="api/red-aroma-values.php"
                                            link="herbs"
                                            style="width: 100%">
                     </wc-multi-select-input>

                     <wc-button-select-input name="vegetal" selected="{{vegetalBool}}">
                         <paper-button raised noink>None</paper-button>
                         <paper-button raised noink>Low</paper-button>
                         <paper-button raised noink>Medium</paper-button>
                         <paper-button raised noink>High</paper-button>
                     </wc-button-select-input>

                     <wc-multi-select-input makevisible="[[vegetalBool]]"
                                            label="Choose all that apply"
                                            from="api/red-aroma-values.php"
                                            link="vegetal"
                                            style="width: 100%">
                     </wc-multi-select-input>


                     <wc-button-select-input name="mint_eucalyptus" selected="{{mintBool}}">
                         <paper-button raised noink>None</paper-button>
                         <paper-button raised noink>Low</paper-button>
                         <paper-button raised noink>Medium</paper-button>
                         <paper-button raised noink>High</paper-button>
                     </wc-button-select-input>

                     <wc-multi-select-input makevisible="[[mintBool]]"
                                            label="Choose all that apply"
                                            from="api/red-aroma-values.php"
                                            link="mint_eucalyptus"
                                            style="width: 100%">
                     </wc-multi-select-input>

                     <wc-button-select-input name="pepper_spice" selected="{{pepperBool}}">
                         <paper-button raised noink>None</paper-button>
                         <paper-button raised noink>Low</paper-button>
                         <paper-button raised noink>Medium</paper-button>
                         <paper-button raised noink>High</paper-button>
                     </wc-button-select-input>

                     <wc-multi-select-input makevisible="[[pepperBool]]"
                                            label="Choose all that apply"
                                            from="api/red-aroma-values.php"
                                            link="pepper_spice"
                                            style="width: 100%">
                     </wc-multi-select-input>

                     <wc-button-select-input name="cocoa_coffee" selected="{{cocoaBool}}">
                         <paper-button raised noink>None</paper-button>
                         <paper-button raised noink>Low</paper-button>
                         <paper-button raised noink>Medium</paper-button>
                         <paper-button raised noink>High</paper-button>
                     </wc-button-select-input>

                     <wc-multi-select-input makevisible="[[cocoaBool]]"
                                            label="Choose all that apply"
                                            from="api/red-aroma-values.php"
                                            link="cocoa_coffee"
                                            style="width: 100%">
                     </wc-multi-select-input>

                     <wc-button-select-input name="meat_leather" selected="{{meatBool}}">
                         <paper-button raised noink>None</paper-button>
                         <paper-button raised noink>Low</paper-button>
                         <paper-button raised noink>Medium</paper-button>
                         <paper-button raised noink>High</paper-button>
                     </wc-button-select-input>

                     <wc-multi-select-input makevisible="[[meatBool]]"
                                            label="Choose all that apply"
                                            from="api/red-aroma-values.php"
                                            link="meat_leather"
                                            style="width: 100%">
                     </wc-multi-select-input>

                     <wc-button-select-input name="tobacco_tar"selected="{{tabaccoBool}}">
                         <paper-button raised noink>None</paper-button>
                         <paper-button raised noink>Low</paper-button>
                         <paper-button raised noink>Medium</paper-button>
                         <paper-button raised noink>High</paper-button>
                     </wc-button-select-input>

                     <wc-multi-select-input makevisible="[[tabaccoBool]]"
                                            label="Choose all that apply"
                                            from="api/red-aroma-values.php"
                                            link="tobacco_tar"
                                            style="width: 100%">
                     </wc-multi-select-input>

                     <wc-button-select-input name="earth_leaves_mushrooms" selected="{{earthBool}}">
                         <paper-button raised noink>None</paper-button>
                         <paper-button raised noink>Low</paper-button>
                         <paper-button raised noink>Medium</paper-button>
                         <paper-button raised noink>High</paper-button>
                     </wc-button-select-input>

                     <wc-multi-select-input makevisible="[[earthBool]]"
                                            label="Choose all that apply"
                                            from="api/red-aroma-values.php"
                                            link="earth_leaves_mushrooms"
                                            style="width: 100%">
                     </wc-multi-select-input>

                     <wc-button-select-input name="mineral_stone_sulfur" selected="{{mineralBool}}">
                         <paper-button raised noink>None</paper-button>
                         <paper-button raised noink>Low</paper-button>
                         <paper-button raised noink>Medium</paper-button>
                         <paper-button raised noink>High</paper-button>
                     </wc-button-select-input>

                     <wc-multi-select-input makevisible="[[mineralBool]]"
                                            label="Choose all that apply"
                                            from="api/red-aroma-values.php"
                                            link="mineral_stone_sulfur"
                                            style="width: 100%">
                     </wc-multi-select-input>

                     <wc-button-select-input name="oak_vanilla_toast_smoke_coconut" selected="{{oakBool}}">
                         <paper-button raised noink>None</paper-button>
                         <paper-button raised noink>Low</paper-button>
                         <paper-button raised noink>Medium</paper-button>
                         <paper-button raised noink>High</paper-button>
                     </wc-button-select-input>

                     <wc-multi-select-input makevisible="[[oakBool]]"
                                            label="Choose all that apply"
                                            from="api/red-aroma-values.php"
                                            link="oak_vanilla_toast_smoke_coconut"
                                            style="width: 100%">
                     </wc-multi-select-input>

                     <wc-button-select-input name="sweetness">
                         <paper-button raised noink>None</paper-button>
                         <paper-button raised noink>Low</paper-button>
                         <paper-button raised noink>Medium</paper-button>
                         <paper-button raised noink>High</paper-button>
                     </wc-button-select-input>

                     <wc-button-select-input name="acid">
                         <paper-button raised noink>None</paper-button>
                         <paper-button raised noink>Low</paper-button>
                         <paper-button raised noink>Medium</paper-button>
                         <paper-button raised noink>High</paper-button>
                     </wc-button-select-input>

                     <wc-button-select-input name="alcohol">
                         <paper-button raised noink>None</paper-button>
                         <paper-button raised noink>Low</paper-button>
                         <paper-button raised noink>Medium</paper-button>
                         <paper-button raised noink>High</paper-button>
                     </wc-button-select-input>

                     <wc-button-select-input name="tannin">
                         <paper-button raised noink>None</paper-button>
                         <paper-button raised noink>Low</paper-button>
                         <paper-button raised noink>Medium</paper-button>
                         <paper-button raised noink>High</paper-button>
                     </wc-button-select-input>

                      <wc-button-select-input name="bitter">
                         <paper-button raised noink>None</paper-button>
                         <paper-button raised noink>Low</paper-button>
                         <paper-button raised noink>Medium</paper-button>
                         <paper-button raised noink>High</paper-button>
                     </wc-button-select-input>

                     <wc-button-select-input name="balanced">
                         <paper-button raised noink>Yes</paper-button>
                         <paper-button raised noink>No</paper-button>

                     </wc-button-select-input>

                     <wc-button-select-input name="length">
                         <paper-button raised noink>Short</paper-button>
                         <paper-button raised noink>Medium</paper-button>
                         <paper-button raised noink>Medium Plus</paper-button>
                         <paper-button raised noink>Long</paper-button>
                     </wc-button-select-input>

                     <wc-button-select-input name="complexity">
                         <paper-button raised noink>Low</paper-button>
                         <paper-button raised noink>Moderate</paper-button>
                         <paper-button raised noink>Medium Plus</paper-button>
                     </wc-button-select-input>

                     <!--<input hidden$="{{true}}" type="text" value="{{user.user_name}}" name="user_name">-->
                     <input hidden$="{{true}}" type="text" value="{{params.name}}" name="wine_name">
                     <input hidden$="{{true}}" type="text" value="{{params.producer}}" name="wine_producer">
                     <input hidden$="{{true}}" type="text" value="{{params.vintage}}" name="wine_vintage">
                 </div>
                 <button class="btn" name="redAssessReturn" type="submit">Submit</button>
             </wc-assess> 
            </paper-material>
          </section>
          <section data-route="register-wine">
              <paper-material elevation="1">
                <!--Masons Section-->
                <form id="register-wine-form" method="post" action="api/register-wine.php">
                  <h3>Insert Wine Data! </h3>
                  <paper-input-container>
                      <input is="iron-input" id = "inputProducer" name ="producer" type ="text" placeholder = "Producer" required>
                  </paper-input-container>

                  <paper-input-container>
                      <input is="iron-input" id = "inputName" name ="wname" type ="text" placeholder = "Wine Name" required>

                  </paper-input-container>

                  <paper-input-container>
                      <input is="iron-input" id = "inputGrape" name ="grape" type ="text" placeholder = "Grape (Optional)">

                  </paper-input-container>

                  <paper-dropdown-menu id='menu' label="Wine Style">
                      <paper-listbox class="dropdown-content">
                        <paper-item>Sparkling White</paper-item>
                        <paper-item>Sparkling Rose</paper-item>
                        <paper-item>Still White</paper-item>
                        <paper-item>Still Red</paper-item>
                        <paper-item>Dessert</paper-item>
                        <paper-item>Fortified White</paper-item>
                        <paper-item>Fortified Red</paper-item>
                      </paper-listbox>
                    </paper-dropdown-menu>
                    
                    <select name="wine_styles">
                      <option value="volvo">Volvo</option>
                      <option value="saab">Saab</option>
                      <option value="mercedes">Mercedes</option>
                      <option value="audi">Audi</option>
                    </select>
                    
                  <paper-input-container>
                      <input is="iron-input" id = "inputCountry" name ="country" type ="text" placeholder = "Country" required>
                  </paper-input-container>
                  
                  <paper-input-container>
                      <input is="iron-input" id = "inputState" name ="state" type ="text" placeholder = "State/Province" required>
                  </paper-input-container>

                  <paper-input-container>
                      <input is="iron-input" id = "inputRegion" name ="region" type ="text" placeholder = "Region (Optional)">
                  </paper-input-container>

                  <paper-input-container>
                      <input is="iron-input" id = "inputSubRegion" name ="sRegion" type ="text" placeholder = "Sub-Region (Optional)">
                  </paper-input-container>

                  <paper-input-container>
                      <input is="iron-input" id = "inputAlcohol" name ="alcohol" type ="number" placeholder = "Alcohol Percentage (##)" required>
                  </paper-input-container>
                    <button name="regWine" type="submit">Register Wine</button>
                </form>
              </paper-material>
            </section>
            <section data-route="login-form">
              <paper-material elevation="1">
                <div>
                  <?php 
                      require_once ('vendor/autoload.php');
                      
                      //start session above because cache error 
                      $fb = new Facebook\Facebook([
                          'app_id'=>'1773451242931017',
                          'app_secret'=> '74656c1a602d2c78ce7da86f189d9c99',
                          'default_graph_version'=>'v2.5'
                      ]);
                  
                      $redirecTo = 'http://localhost:8888';
                      //will need to change redirect above when migrating to AWS 
                      $helper = $fb->getRedirectLoginHelper();
                      try{
                          $accessToken = $helper->getAccessToken();
                      }
                      catch(Facebooks\Exceptions\FacebookResponseException $e){
                          echo "Error" . $e->getMessage();
                          exit;
                      }
                      catch(Facebook\Exceptions\FacebookSDKException $e){
                          echo " FB SDK ERR". $e->getMessage();
                          exit;
                      }
                      if (isset($accessToken)) {
                  	  	//logged in
                  	  	$fb->setDefaultAccessToken($accessToken);
                  		try {
                  		  $response = $fb->get('/me?fields=email,name');
                  		  $userNode = $response->getGraphUser();
                  		}catch(Facebook\Exceptions\FacebookResponseException $e) {
                  		  echo 'error: ' . $e->getMessage();
                  		  exit;
                  		} catch(Facebook\Exceptions\FacebookSDKException $e) {
                  		  echo 'SDK error: ' . $e->getMessage();
                  		  exit;
                  		}
                  		// Payload, where we could see if its in database, if not insert.
                  		echo 'Name: ' . $userNode->getName().'<br>';
                  		echo 'User ID: ' . $userNode->getId().'<br>';
                  		echo 'Email: ' . $userNode->getProperty('email').'<br><br>';
                  		$fbPhoto = 'https://graph.facebook.com/'.$userNode->getId().'/picture?width=400';
                  		echo "<img src='$fbPhoto' /><br>";
                	    }else{
                	    //may be ugly, but I can add the basic login form here as well. DONE
                	    echo '<form action = " " method = "POST">';
                	    echo 'Login<br>Username<input type="text" name = "uName"> <br>';
                	    echo 'Password <input type = "password" name = "passWord"><br>';
                	    echo '<button name="signIn" type="submit">Login</button>';
                	    echo '</form>';
                	    echo '<br>Alternative Log in Methods<br>';
                	    
                  		$permissions  = ['email'];
                  		$loginUrl = $helper->getLoginUrl($redirecTo,$permissions);
                  	
                  		echo '<a href="' . $loginUrl . '">';
                  		echo '<img src="https://s12.postimg.org/d6dhoc20d/FBlogin.png"></a>';
                  	}
            ?>
                </div>
              </paper-material>
            </section>
          </iron-pages>
        </div>
      </paper-scroll-header-panel>
    </paper-drawer-panel>

    <paper-toast id="toast">
      <span class="toast-hide-button" role="button" tabindex="0" onclick="app.$.toast.hide()">Ok</span>
    </paper-toast>

  </template>

  <!-- build:js scripts/app.js -->
  <script src="scripts/app.js"></script>
 
  <!-- endbuild-->
</body>

</html>
