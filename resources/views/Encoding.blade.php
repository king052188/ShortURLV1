<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
      	{!! SEO::generate() !!}
        <meta property="og:image" content="{{ secure_asset('images/logo.kpa.ph.png') }}" />
        <link rel="apple-touch-icon" href="{{ secure_asset('images/logo.kpa.ph.png') }}">
    		<link rel="shortcut icon" type="image/png" href="{{ secure_asset('images/logo.kpa.ph.png') }}"/>
        <script src="{{ secure_asset('js/jquery-3.2.1.min.js') }}"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,600,700,800,900" rel="stylesheet">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #f7f7f7;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            .full-height {
                height: 100vh;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .position-ref {
                position: relative;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .content {
                text-align: center;
            }
            .title {
                font-size: 84px;
                width: 500px;
                height: 130px;
                margin: 0 auto;
                padding: 5px;
            }
            .text {
                color: #636b6f;
                padding: 0 25px;
                font-size: 18px;
                font-weight: 600;
                letter-spacing: .1rem;
                margin: 40px 0 0 0;
            }
            .links > a {
               color: #636b6f;
               padding: 5px;
               font-size: 12px;
               font-weight: 600;
               letter-spacing: .1rem;
               text-decoration: none;
               text-transform: uppercase;
           }
            a {
                color: #636b6f;
                text-decoration: none;
            }
            a:hover {
              padding-bottom: 2px;
              border-bottom: 1px solid #636b6f;
            }
            a.shorl_url {
              color: #d93470;
              text-decoration: none;
            }
            a.shorl_url:hover {
              padding-bottom: 5px;
              border-bottom: 2px solid #d93470;
            }
            input[type=text], input[type=submit], select {
              font-family: 'Raleway', sans-serif;
              color: #636b6f;
              padding: 10px;
              font-size: 18px;
              width: 390px;
              font-weight: 600;
            }
            input[type=text]::-webkit-input-placeholder { /* Chrome/Opera/Safari */
              font-family: 'Raleway', sans-serif;
              font-weight: 300;
              color: #636b6f;
            }
            input[type=text]::-moz-placeholder { /* Firefox 19+ */
              font-family: 'Raleway', sans-serif;
              font-weight: 300;
              color: #636b6f;
            }
            input[type=text]:-ms-input-placeholder { /* IE 10+ */
              font-family: 'Raleway', sans-serif;
              font-weight: 300;
              color: #636b6f;
            }
            input[type=text]:-moz-placeholder { /* Firefox 18- */
              font-family: 'Raleway', sans-serif;
              font-weight: 300;
              color: #636b6f;
            }
            .btn {
              background: #d93470;
              background-image: -webkit-linear-gradient(top, #d93470, #b82b63);
              background-image: -moz-linear-gradient(top, #d93470, #b82b63);
              background-image: -ms-linear-gradient(top, #d93470, #b82b63);
              background-image: -o-linear-gradient(top, #d93470, #b82b63);
              background-image: linear-gradient(to bottom, #d93470, #b82b63);
              border-radius: 28px;
              border: 0px;
              font-family: 'Raleway', sans-serif;
              color: #ffffff;
              font-size: 22px;
              padding: 10px 35px 10px 35px;
              text-decoration: none;
            }
            .btn:hover {
              background: #b82b63;
              background-image: -webkit-linear-gradient(top, #b82b63, #d93470);
              background-image: -moz-linear-gradient(top, #b82b63, #d93470);
              background-image: -ms-linear-gradient(top, #b82b63, #d93470);
              background-image: -o-linear-gradient(top, #b82b63, #d93470);
              background-image: linear-gradient(to bottom, #b82b63, #d93470);
              text-decoration: none;
            }
            .m-b-md {
                margin-bottom: 30px;
            }

            @media only screen and (max-width: 500px) {
              .title {
                  font-size: 64px;
                  width: 355px;
                  height: 130px;
                  margin: 0 auto;
                  padding: 5px;
              }

              input {
                font-family: 'Raleway', sans-serif;
                color: #636b6f;
                padding: 10px;
                font-size: 18px;
                width: 300px;
                font-weight: 600;
              }
            }
        </style>
    </head>
    <body>

      <table class="tbl_encode" border="0" cellspacing="0" cellpadding="0" style="width: 100%;">
          <tr>
              <td>
                  <p><span> First name: </span> <input class="input-control text-medium" type="text" id="_first_name" name="_first_name" placeholder="First name"> </p>
              </td>
              <td>
                  <p><span> Last name: </span> <input class="input-control text-medium" type="text" id="_last_name" name="_last_name" placeholder="Last name" > </p>
              </td>
          </tr>

          <tr>
              <td>
                  <p><span> Email address: </span> <input class="input-control text-medium" type="text" id="_email" name="_email" placeholder="Email address"> </p>
              </td>
              <td>
                  <p><span> Mobile number: </span> <input class="input-control text-medium" type="text" id="_mobile" name="_mobile" placeholder="Mobile number I.e +63921123467 "> </p>
              </td>
          </tr>

          <tr>
              <td colspan="2">
                  <p>
                      <span> Country: </span>
                      <select class="input-control select" id="_country" name="_country" tabindex="5">
                          <option value="US">United States</option>
                          <option value="CA">Canada</option>
                          <option value="AF">Afghanistan</option>
                          <option value="AX">Aland Islands</option>
                          <option value="AL">Albania</option>
                          <option value="DZ">Algeria</option>
                          <option value="AS">American Samoa</option>
                          <option value="AD">Andorra</option>
                          <option value="AO">Angola</option>
                          <option value="AI">Anguilla</option>
                          <option value="AQ">Antarctica</option>
                          <option value="AG">Antigua and Barbuda</option>
                          <option value="AR">Argentina</option>
                          <option value="AM">Armenia</option>
                          <option value="AW">Aruba</option>
                          <option value="AU">Australia</option>
                          <option value="AT">Austria</option>
                          <option value="AZ">Azerbaijan</option>
                          <option value="BS">Bahamas</option>
                          <option value="BH">Bahrain</option>
                          <option value="BD">Bangladesh</option>
                          <option value="BB">Barbados</option>
                          <option value="BY">Belarus</option>
                          <option value="BE">Belgium</option>
                          <option value="BZ">Belize</option>
                          <option value="BJ">Benin</option>
                          <option value="BM">Bermuda</option>
                          <option value="BT">Bhutan</option>
                          <option value="BO">Bolivia</option>
                          <option value="BA">Bosnia And Herzegovina</option>
                          <option value="BW">Botswana</option>
                          <option value="BV">Bouvet Island</option>
                          <option value="BR">Brazil</option>
                          <option value="IO">British Indian Ocean Territory</option>
                          <option value="BN">Brunei Darussalam</option>
                          <option value="BG">Bulgaria</option>
                          <option value="BF">Burkina Faso</option>
                          <option value="BI">Burundi</option>
                          <option value="KH">Cambodia</option>
                          <option value="CM">Cameroon</option>
                          <option value="CV">Cape Verde</option>
                          <option value="KY">Cayman Islands</option>
                          <option value="CF">Central African Republic</option>
                          <option value="TD">Chad</option>
                          <option value="CL">Chile</option>
                          <option value="CN">China</option>
                          <option value="CX">Christmas Island</option>
                          <option value="CC">Cocos (keeling) Islands</option>
                          <option value="CO">Colombia</option>
                          <option value="KM">Comoros</option>
                          <option value="CG">Congo</option>
                          <option value="CD">Congo, The Democratic Republic Of The</option>
                          <option value="CK">Cook Islands</option>
                          <option value="CR">Costa Rica</option>
                          <option value="CI">Cote D&#39;Ivoire</option>
                          <option value="HR">Croatia</option>
                          <option value="CU">Cuba</option>
                          <option value="CY">Cyprus</option>
                          <option value="CZ">Czech Republic</option>
                          <option value="DK">Denmark</option>
                          <option value="DJ">Djibouti</option>
                          <option value="DM">Dominica</option>
                          <option value="DO">Dominican Republic</option>
                          <option value="EC">Ecuador</option>
                          <option value="EG">Egypt</option>
                          <option value="SV">El Salvador</option>
                          <option value="GQ">Equatorial Guinea</option>
                          <option value="ER">Eritrea</option>
                          <option value="EE">Estonia</option>
                          <option value="ET">Ethiopia</option>
                          <option value="FK">Falkland Islands (Malvinas)</option>
                          <option value="FO">Faroe Islands</option>
                          <option value="FJ">Fiji</option>
                          <option value="FI">Finland</option>
                          <option value="FR">France</option>
                          <option value="GF">French Guiana</option>
                          <option value="PF">French Polynesia</option>
                          <option value="TF">French Southern Territories</option>
                          <option value="GA">Gabon</option>
                          <option value="GM">Gambia</option>
                          <option value="GE">Georgia</option>
                          <option value="DE">Germany</option>
                          <option value="GH">Ghana</option>
                          <option value="GI">Gibraltar</option>
                          <option value="GR">Greece</option>
                          <option value="GL">Greenland</option>
                          <option value="GD">Grenada</option>
                          <option value="GP">Guadeloupe</option>
                          <option value="GU">Guam</option>
                          <option value="GT">Guatemala</option>
                          <option value="GG">Guernsey</option>
                          <option value="GN">Guinea</option>
                          <option value="GW">Guinea-bissau</option>
                          <option value="GY">Guyana</option>
                          <option value="HT">Haiti</option>
                          <option value="HM">Heard Island And Mcdonald Islands</option>
                          <option value="VA">Holy See (vatican City State)</option>
                          <option value="HN">Honduras</option>
                          <option value="HK">Hong Kong</option>
                          <option value="HU">Hungary</option>
                          <option value="IS">Iceland</option>
                          <option value="IN">India</option>
                          <option value="ID">Indonesia</option>
                          <option value="IR">Iran, Islamic Republic Of</option>
                          <option value="IQ">Iraq</option>
                          <option value="IE">Ireland</option>
                          <option value="IM">Isle Of Man</option>
                          <option value="IL">Israel</option>
                          <option value="IT">Italy</option>
                          <option value="JM">Jamaica</option>
                          <option value="JP">Japan</option>
                          <option value="JE">Jersey</option>
                          <option value="JO">Jordan</option>
                          <option value="KZ">Kazakhstan</option>
                          <option value="KE">Kenya</option>
                          <option value="KI">Kiribati</option>
                          <option value="KP">Korea, Democratic People&#39;s Republic Of</option>
                          <option value="KR">Korea, Republic Of</option>
                          <option value="KW">Kuwait</option>
                          <option value="KG">Kyrgyzstan</option>
                          <option value="LA">Lao People&#39;s Democratic Republic</option>
                          <option value="LV">Latvia</option>
                          <option value="LB">Lebanon</option>
                          <option value="LS">Lesotho</option>
                          <option value="LR">Liberia</option>
                          <option value="LY">Libyan Arab Jamahiriya</option>
                          <option value="LI">Liechtenstein</option>
                          <option value="LT">Lithuania</option>
                          <option value="LU">Luxembourg</option>
                          <option value="MO">Macao</option>
                          <option value="MK">Macedonia, The Former Yugoslav Republic Of</option>
                          <option value="MG">Madagascar</option>
                          <option value="MW">Malawi</option>
                          <option value="MY">Malaysia</option>
                          <option value="MV">Maldives</option>
                          <option value="ML">Mali</option>
                          <option value="MT">Malta</option>
                          <option value="MH">Marshall Islands</option>
                          <option value="MQ">Martinique</option>
                          <option value="MR">Mauritania</option>
                          <option value="MU">Mauritius</option>
                          <option value="YT">Mayotte</option>
                          <option value="MX">Mexico</option>
                          <option value="FM">Micronesia, Federated States Of</option>
                          <option value="MD">Moldova, Republic Of</option>
                          <option value="MC">Monaco</option>
                          <option value="MN">Mongolia</option>
                          <option value="ME">Montenegro</option>
                          <option value="MS">Montserrat</option>
                          <option value="MA">Morocco</option>
                          <option value="MZ">Mozambique</option>
                          <option value="MM">Myanmar</option>
                          <option value="NA">Namibia</option>
                          <option value="NR">Nauru</option>
                          <option value="NP">Nepal</option>
                          <option value="NL">Netherlands</option>
                          <option value="AN">Netherlands Antilles</option>
                          <option value="NC">New Caledonia</option>
                          <option value="NZ">New Zealand</option>
                          <option value="NI">Nicaragua</option>
                          <option value="NE">Niger</option>
                          <option value="NG">Nigeria</option>
                          <option value="NU">Niue</option>
                          <option value="NF">Norfolk Island</option>
                          <option value="MP">Northern Mariana Islands</option>
                          <option value="NO">Norway</option>
                          <option value="OM">Oman</option>
                          <option value="PK">Pakistan</option>
                          <option value="PW">Palau</option>
                          <option value="PS">Palestinian Territory, Occupied</option>
                          <option value="PA">Panama</option>
                          <option value="PG">Papua New Guinea</option>
                          <option value="PY">Paraguay</option>
                          <option value="PE">Peru</option>
                          <option selected="selected" value="PH">Philippines</option>
                          <option value="PN">Pitcairn</option>
                          <option value="PL">Poland</option>
                          <option value="PT">Portugal</option>
                          <option value="PR">Puerto Rico</option>
                          <option value="QA">Qatar</option>
                          <option value="RE">Reunion</option>
                          <option value="RO">Romania</option>
                          <option value="RU">Russian Federation</option>
                          <option value="RW">Rwanda</option>
                          <option value="BL">Saint Barthelemy</option>
                          <option value="SH">Saint Helena</option>
                          <option value="KN">Saint Kitts And Nevis</option>
                          <option value="LC">Saint Lucia</option>
                          <option value="MF">Saint Martin</option>
                          <option value="PM">Saint Pierre And Miquelon</option>
                          <option value="VC">Saint Vincent And The Grenadines</option>
                          <option value="WS">Samoa</option>
                          <option value="SM">San Marino</option>
                          <option value="ST">Sao Tome And Principe</option>
                          <option value="SA">Saudi Arabia</option>
                          <option value="SN">Senegal</option>
                          <option value="RS">Serbia</option>
                          <option value="SC">Seychelles</option>
                          <option value="SL">Sierra Leone</option>
                          <option value="SG">Singapore</option>
                          <option value="SK">Slovakia</option>
                          <option value="SI">Slovenia</option>
                          <option value="SB">Solomon Islands</option>
                          <option value="SO">Somalia</option>
                          <option value="ZA">South Africa</option>
                          <option value="GS">South Georgia and The South Sandwich Islands</option>
                          <option value="ES">Spain</option>
                          <option value="LK">Sri Lanka</option>
                          <option value="SD">Sudan</option>
                          <option value="SR">Suriname</option>
                          <option value="SJ">Svalbard and Jan Mayen</option>
                          <option value="SZ">Swaziland</option>
                          <option value="SE">Sweden</option>
                          <option value="CH">Switzerland</option>
                          <option value="SY">Syrian Arab Republic</option>
                          <option value="TW">Taiwan, Province Of China</option>
                          <option value="TJ">Tajikistan</option>
                          <option value="TZ">Tanzania, United Republic Of</option>
                          <option value="TH">Thailand</option>
                          <option value="TL">Timor-Leste</option>
                          <option value="TG">Togo</option>
                          <option value="TK">Tokelau</option>
                          <option value="TO">Tonga</option>
                          <option value="TT">Trinidad and Tobago</option>
                          <option value="TN">Tunisia</option>
                          <option value="TR">Turkey</option>
                          <option value="TM">Turkmenistan</option>
                          <option value="TC">Turks and Caicos Islands</option>
                          <option value="TV">Tuvalu</option>
                          <option value="UG">Uganda</option>
                          <option value="UA">Ukraine</option>
                          <option value="AE">United Arab Emirates</option>
                          <option value="GB">United Kingdom</option>
                          <option value="UM">United States Minor Outlying Islands</option>
                          <option value="UY">Uruguay</option>
                          <option value="UZ">Uzbekistan</option>
                          <option value="VU">Vanuatu</option>
                          <option value="VE">Venezuela</option>
                          <option value="VN">Viet Nam</option>
                          <option value="VG">Virgin Islands, British</option>
                          <option value="VI">Virgin Islands, U.s.</option>
                          <option value="WF">Wallis And Futuna</option>
                          <option value="EH">Western Sahara</option>
                          <option value="YE">Yemen</option>
                          <option value="ZM">Zambia</option>
                          <option value="ZW">Zimbabwe</option>
                      </select>
                  </p>
              </td>
          </tr>

          <tr>
              <td colspan="2">
                  <p> <span> Sponsor username: </span> <input class="input-control text" type="text" id="_sponsor_username" name="_sponsor_username" placeholder="Sponsor username" > </p>
              </td>
          </tr>

          <tr>
              <td>
                  <p> <span> Placement: </span>
                  <input class="input-control text" type="text" id="_placement_username" name="_placement_username" placeholder="Placement username" ></p>
              </td>
              <td>
                  <p>
                      <span> Position: </span>
                      <input class="input-control text" type="text" id="_position" name="_position" placeholder="Position" >
                  </p>
              </td>
          </tr>

          <tr>
              <td>
                  <p> <span> Username: </span> <input class="input-control text-medium" type="text" id="_username" name="_username" placeholder="Username" > </p>
              </td>
              <td>
                  <p> <span> Activation Code: </span> <input class="input-control text-medium" type="text" id="_activation_code" name="_activation_code" placeholder="Activation Code" > </p>
                  {{--<p>--}}
                      {{--<span> Type: </span>--}}
                      {{--<select class="input-control text-medium" style="width: 99%;" id="_member_type" name="_member_type" >--}}
                          {{--<option value="1">Starter</option>--}}
                          {{--<option value="3">Builder</option>--}}
                          {{--<option value="9">Supreme</option>--}}
                      {{--</select>--}}
                  {{--</p>--}}
              </td>
          </tr>
      </table>

      <p> <button id="btnSave">Create Account</button> </p>

      <script>
        $(document).ready(function() {
          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });

          $("#btnSave").click(function (e) {

            var first_name =  $("#_first_name").val();
            var last_name =  $("#_last_name").val();
            var email =  $("#_email").val();
            var mobile =  $("#_mobile").val();
            var country =  $("#_country").val();
            var sponsor =  $("#_sponsor_username").val();
            var placement =  $("#_placement_username").val();
            var position =  $("#_position").val();
            var username =  $("#_username").val();
            var code =  $("#_activation_code").val();

            var data = {
                first_name : first_name,
                last_name : last_name,
                email : email,
                mobile : mobile,
                country : country,
                sponsor : sponsor,
                placement : placement,
                position : position,
                username : username,
                code : code
            };

            console.log(data);

            ajax_execute("{{ secure_url('/bloops/v1/encode') }}", data, this);
          });


        })

        function ajax_execute(url, data, control)
        {
          $(document).ready(function() {
              $.ajax({
                  dataType: 'json',
                  type:'POST',
                  url: url,
                  data: data,
                  beforeSend: function () {
                      console.log("Sending...");
                      $(control).text("Please wait...");
                  }
              }).done(function(data){
                  console.log(data);
                  $(control).text("Create Account");
              });
          })
        }
    </script>
    </body>
</html>
