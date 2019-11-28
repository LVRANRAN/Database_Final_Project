<html ng-app="cnodejsapp">
<head>
    <title>Angular.js的route单页面路由</title>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    <script src="./angular.min.js"></script>
    <script src="./angular-route.min.js"></script>
    <script src="./testAngular.js"></script>
</head>
<body>
<div>
    <div id="content">
        <div id="content-header">
            <h1 id="headInfo">


                General Information

            </h1>
            <div class="btn-main">
                <!-- ngIf: !isModified -->
                <!-- ngIf: !isModified -->
                <!-- ngIf: !isModified -->
                <!-- ngIf: isModified --><button class="btn btn-primary ng-scope" data-toggle="modal" ng-click="checkCompare()" ng-if="isModified" title="Submit your update" ng-disabled="isUploading">
                    <i class="icon-cloud-upload icon-white"></i>&nbsp;Update
                </button><!-- end ngIf: isModified -->
                <!-- ngIf: isModified --><button class="btn btn-primary ng-scope" ng-if="isModified" ng-click="cancelModification()" title="Cancel and go back to the model management page">
                    <i class="icon-file icon-white"></i>&nbsp;Cancel
                </button><!-- end ngIf: isModified -->
            </div>
        </div>

        <div id="breadcrumb">
            <a href="#" id="breadcrumb1" class="current">


                General Information

            </a>
            <a href="" id="breadcrumb2" class=""></a>
        </div>
        <div class="container-fluid">

            <!-- General Information -->
            <section ng-hide="sections.ge" id="genInfoSec" class="">

                <!--Identifer-->
                <div class="row">
                    <div class="col-xs-12">
                        <div class="widget-box">
                            <div class="widget-title">
                                <span class="icon">
                                    <i class="icon-align-justify"></i>
                                </span>
                                <h5>Customer Information</h5>
                            </div>
                            <div class="widget-content nopadding">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <br>
                                            <label class="font1">Hospital/Institution</label>
                                            <div>
                                                <input type="text" tabindex="1" class="form-control  ng-pristine ng-valid" id="HospitalName" maxlength="80" name="geninfo" ng-model="HospitalName" ng-change="CheckSpecCharacters('HospitalName')">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <br>
                                            <label class="font1">Country/Region</label>
                                            <div>
                                                <select type="text" tabindex="2" class="form-control ng-pristine ng-valid" id="Country" name="geninfo" ng-model="Country" ng-options="country for country in countryList" ng-change="check('Country');"><option value="0" selected="selected">Afghanistan</option><option value="1">Albania</option><option value="2">Algeria</option><option value="3">American Samoa</option><option value="4">Andorra</option><option value="5">Angola</option><option value="6">Anguilla</option><option value="7">Antigua and Barbuda</option><option value="8">Argentina</option><option value="9">Armenia</option><option value="10">Aruba</option><option value="11">Australia</option><option value="12">Austria</option><option value="13">Azerbaijan</option><option value="14">Bahamas</option><option value="15">Bahrain</option><option value="16">Bangladesh</option><option value="17">Barbados</option><option value="18">Belarus</option><option value="19">Belgium</option><option value="20">Belize</option><option value="21">Benin</option><option value="22">Bermuda</option><option value="23">Bhutan</option><option value="24">Bolivia</option><option value="25">Bosnia-Herzegovina</option><option value="26">Botswana</option><option value="27">Bouvet Island</option><option value="28">Brazil</option><option value="29">Brunei</option><option value="30">Bulgaria</option><option value="31">Burkina Faso</option><option value="32">Burundi</option><option value="33">Cambodia</option><option value="34">Cameroon</option><option value="35">Canada</option><option value="36">Cape Verde</option><option value="37">Cayman Islands</option><option value="38">Central African Republic</option><option value="39">Chad</option><option value="40">Chile</option><option value="41">China</option><option value="42">Christmas Island</option><option value="43">Cocos (Keeling) Islands</option><option value="44">Colombia</option><option value="45">Comoros</option><option value="46">Congo, Democratic Republic of the (Zaire)</option><option value="47">Congo, Republic of</option><option value="48">Cook Islands</option><option value="49">Costa Rica</option><option value="50">Croatia</option><option value="51">Cuba</option><option value="52">Curacao</option><option value="53">Cyprus</option><option value="54">Czech Republic</option><option value="55">Denmark</option><option value="56">Djibouti</option><option value="57">Dominica</option><option value="58">Dominican Republic</option><option value="59">Ecuador</option><option value="60">Egypt</option><option value="61">El Salvador</option><option value="62">Equatorial Guinea</option><option value="63">Eritrea</option><option value="64">Estonia</option><option value="65">Ethiopia</option><option value="66">Falkland Islands</option><option value="67">Faroe Islands</option><option value="68">Fiji</option><option value="69">Finland</option><option value="70">France</option><option value="71">French Guiana</option><option value="72">Gabon</option><option value="73">Gambia</option><option value="74">Georgia</option><option value="75">Germany</option><option value="76">Ghana</option><option value="77">Gibraltar</option><option value="78">Greece</option><option value="79">Greenland</option><option value="80">Grenada</option><option value="81">Guadeloupe (French)</option><option value="82">Guam</option><option value="83">Guatemala</option><option value="84">Guinea</option><option value="85">Guinea Bissau</option><option value="86">Guyana</option><option value="87">Haiti</option><option value="88">Holy See</option><option value="89">Honduras</option><option value="90">Hong Kong, China</option><option value="91">Hungary</option><option value="92">Iceland</option><option value="93">India</option><option value="94">Indonesia</option><option value="95">Iran</option><option value="96">Iraq</option><option value="97">Ireland</option><option value="98">Israel</option><option value="99">Italy</option><option value="100">Ivory Coast (Cote D`Ivoire)</option><option value="101">Jamaica</option><option value="102">Japan</option><option value="103">Jordan</option><option value="104">Kazakhstan</option><option value="105">Kenya</option><option value="106">Kiribati</option><option value="107">Korea, Democratic People's Republic of</option><option value="108">Korea, Republic of</option><option value="109">Kuwait</option><option value="110">Kyrgyzstan</option><option value="111">Laos</option><option value="112">Latvia</option><option value="113">Lebanon</option><option value="114">Lesotho</option><option value="115">Liberia</option><option value="116">Lybia</option><option value="117">Liechtenstein</option><option value="118">Lithuania</option><option value="119">Luxembourg</option><option value="120">Macau, China</option><option value="121">Macedonia</option><option value="122">Madagascar</option><option value="123">Malawi</option><option value="124">Malaysia</option><option value="125">Maldives</option><option value="126">Mali</option><option value="127">Malta</option><option value="128">Marshall Islands</option><option value="129">Martinique (French)</option><option value="130">Mauritania</option><option value="131">Mauritius</option><option value="132">Mayotte</option><option value="133">Mexico</option><option value="134">Micronesia</option><option value="135">Moldova</option><option value="136">Monaco</option><option value="137">Mongolia</option><option value="138">Montenegro</option><option value="139">Montserrat</option><option value="140">Morocco</option><option value="141">Mozambique</option><option value="142">Myanmar</option><option value="143">Namibia</option><option value="144">Nauru</option><option value="145">Nepal</option><option value="146">Netherlands</option><option value="147">Netherlands Antilles</option><option value="148">New Caledonia (French)</option><option value="149">New Zealand</option><option value="150">Nicaragua</option><option value="151">Niger</option><option value="152">Nigeria</option><option value="153">Niue</option><option value="154">Norfolk Island</option><option value="155">Norfolk Island</option><option value="156">Norway</option><option value="157">Oman</option><option value="158">Pakistan</option><option value="159">Palau</option><option value="160">Palestine</option><option value="161">Panama</option><option value="162">Papua New Guinea</option><option value="163">Paraguay</option><option value="164">Peru</option><option value="165">Philippines</option><option value="166">Pitcairn Island</option><option value="167">Poland</option><option value="168">Pitcairn Island</option><option value="169">Portugal</option><option value="170">Puerto Rico</option><option value="171">Qatar</option><option value="172">Reunion</option><option value="173">Reunion</option><option value="174">Romania</option><option value="175">Russia</option><option value="176">Rwanda</option><option value="177">Saint Helena</option><option value="178">Saint Kitts and Nevis</option><option value="179">Saint Lucia</option><option value="180">Saint Pierre and Miquelon</option><option value="181">Saint Vincent and Grenadines</option><option value="182">Samoa</option><option value="183">San Marino</option><option value="184">Sao Tome and Principe</option><option value="185">Saudi Arabia</option><option value="186">Senegal</option><option value="187">Serbia</option><option value="188">Seychelles</option><option value="189">Sierra Leone</option><option value="190">Singapore</option><option value="191">Slovakia</option><option value="192">Slovenia</option><option value="193">Solomon Islands</option><option value="194">Somalia</option><option value="195">South Africa</option><option value="196">South Georgia and South Sandwich Islands</option><option value="197">South Sudan</option><option value="198">Spain</option><option value="199">Sri Lanka</option><option value="200">Sudan</option><option value="201">Suriname</option><option value="202">Svalbard and Jan Mayen Islands</option><option value="203">Swaziland</option><option value="204">Sweden</option><option value="205">Switzerland</option><option value="206">Syria</option><option value="207">Taiwan</option><option value="208">Tajikistan</option><option value="209">Tanzania</option><option value="210">Thailand</option><option value="211">Timor-Leste (East Timor)</option><option value="212">Togo</option><option value="213">Tokelau</option><option value="214">Tonga</option><option value="215">Trinidad and Tobago</option><option value="216">Tunisia</option><option value="217">Turkey</option><option value="218">Turkmenistan</option><option value="219">Turks and Caicos Islands</option><option value="220">Tuvalu</option><option value="221">Uganda</option><option value="222">Ukraine</option><option value="223">United Arab Emirates</option><option value="224">United Kingdom</option><option value="225">United States</option><option value="226">Uruguay</option><option value="227">Uzbekistan</option><option value="228">Vanuatu</option><option value="229">Venezuela</option><option value="230">VietNam</option><option value="231">Virgin Islands (British)</option><option value="232">Virgin Islands (U.S.)</option><option value="233">Wallis and Futuna Islands</option><option value="234">Yemen</option><option value="235">Zambia</option><option value="236">Zimbabwe</option><option value="237">Other</option></select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <br>
                                            <label class="font1">Clinical Physicist</label>
                                            <div>
                                                <input type="text" tabindex="3" class="form-control  ng-pristine ng-valid" id="ContactPerson" ng-model="ContactPerson" ng-change="checkName('ContactPerson')">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <br>
                                            <label class="font1">Address</label>
                                            <div>
                                                <textarea row="3" tabindex="4" class="form-control ng-pristine ng-valid" id="HospitalAddress" maxlength="100" name="geninfo" ng-model="HospitalAddress" ng-change="CheckSpecCharacters('HospitalAddress')"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <br>
                                            <label class="font1">Contact Phone</label>
                                            <div>
                                                <input type="text" tabindex="5" class="form-control  ng-pristine ng-valid" id="cphone" ng-model="ContactPhone" ng-change="checkPhone('cphone')">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <br>
                                            <label class="font1">Contact Email</label>
                                            <div>
                                                <input type="text" tabindex="6" class="form-control  ng-pristine ng-valid" placeholder="someone@example.com" id="ContactEmail" ng-model="ContactEmail" onchange="CheckEmail('ContactEmail')">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <br>
                                            <label class="font1">Work Order for Physics Service (Optional)</label>
                                            <div>
                                                <input type="text" tabindex="8" class="form-control  ng-pristine ng-valid" id="WONumber" maxlength="20" ng-model="WONumber" ng-change="checkNumber('WONumber')">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Version and calculation algorithm-->
                <div class="row">
                    <div class="col-xs-12">
                        <div class="widget-box">
                            <div class="widget-title">
                                <span class="icon">
                                    <i class="icon-align-justify"></i>
                                </span>
                                <h5>TPS Version</h5>
                            </div>
                            <div class="widget-content nopadding">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <br>
                                            <label class="font1">Monaco TPS Version</label>
                                            <br>
                                            <div class="btn-group" id="btn-group1">
                                                <label class="btn btn-default ng-binding ng-pristine ng-valid" ng-model="monacoVn" ng-change="onSelectHighMonacoVersion()" btn-radio="monacoVns[0]">5.10</label>
                                                <label class="btn btn-default ng-binding ng-pristine ng-valid active btn-primary" ng-model="monacoVn" ng-change="onSelectHighMonacoVersion()" btn-radio="monacoVns[1]">5.11</label>
                                                <label class="btn btn-default ng-binding ng-pristine ng-valid" ng-model="monacoVn" ng-change="onSelectHighMonacoVersion()" btn-radio="monacoVns[2]">5.40 and above</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <br>
                                            <label class="font1">XiO TPS Version</label>
                                            <br>
                                            <div class="btn-group" id="btn-group2">
                                                <label class="btn btn-default ng-binding ng-pristine ng-valid" ng-model="xioVn" ng-change="onSelectXioVersion('xioVn0')" btn-radio="xioVns[0]">4.80</label>
                                                <label class="btn btn-default ng-binding ng-pristine ng-valid" ng-model="xioVn" ng-change="onSelectXioVersion('xioVn1')" btn-radio="xioVns[1]">5.00</label>
                                                <label class="btn btn-default ng-binding ng-pristine ng-valid" ng-model="xioVn" ng-change="onSelectXioVersion('xioVn2')" btn-radio="xioVns[2]">5.10 and above</label>
                                                <label class="btn btn-default ng-binding ng-pristine ng-valid active btn-primary" ng-model="xioVn" ng-change="onSelectXioVersion('xioVn3')" btn-radio="xioVns[3]">none</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Configuration-->
                <div class="row">
                    <div class="col-xs-12">
                        <div class="widget-box">
                            <div class="widget-title">
                                <span class="icon">
                                    <i class="icon-align-justify"></i>
                                </span>
                                <h5>Linear Accelerator Configuration</h5>
                            </div>
                            <div class="widget-content nopadding">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <br>
                                            <label class="font1">Linac Maker</label>
                                            <br>
                                            <div>
                                                <select name="linacmake" tabindex="9" class="form-control ng-pristine ng-valid" id="selectedvendor" ng-model="selectedvendor" ng-options="vendor.Vendor_Name for vendor in vendors" ng-change="changeVendorAction()"><option value="0" selected="selected">Elekta</option><option value="1">Siemens</option><option value="2">Varian</option></select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <br>
                                            <label class="font1">Linac Model</label>
                                            <br>
                                            <div>
                                                <select id="linacmodel" ng-class="otherClass.linacClass" tabindex="10" ng-model="selectedLinac" ng-options="Linac.LinacModel_Name for Linac in Linacs" ng-change="changeLinacAction()" class="ng-pristine ng-valid form-control"><option value="0" selected="selected">Synergy</option><option value="1">Axesse</option><option value="2">Infinity</option><option value="3">Precise</option><option value="4">Compact</option><option value="5">VersaHD</option></select>
                                                <span>
                                                    <input type="text" id="linacother" class="form-control width-35 ng-pristine ng-valid ng-hide" ng-show="selectedLinac.LinacModel_Name == 'Other'" ng-change="check('linacother')" ng-model="linacModel">
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <br>
                                            <label class="font1">MLC Model</label>
                                            <br>
                                            <div>
                                                <select ng-model="selectedMLC" id="mlcmodel" tabindex="11" ng-class="otherClass.mlcClass" ng-options="MLC.MLCModel_Name for MLC in MLCs" ng-change="changeMLCAction()" class="ng-pristine ng-valid form-control"><option value="0" selected="selected">MLCi2</option><option value="1">MLCi</option><option value="2">Agility</option><option value="3">Beam Modulator</option><option value="4">Apex MLCi</option><option value="5">Apex MLCi2</option><option value="6">Apex Agility</option><option value="7">None</option></select>
                                                <span>
                                                    <input type="text" id="mlcother" tabindex="9" class="form-control width-35 ng-pristine ng-valid ng-hide" ng-show="selectedMLC.MLCModel_Name == 'Other'" ng-change="check('mlcother')" ng-model="mlcModel">
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <br>
                                            <label class="font1">Machine Serial Number&nbsp;
                                                <a class="tooltip-demo" data-toggle="tooltip" data-placement="top" title="for an Elekta linac, this number is in the upper left corner of the Desktop monitor">
                                                    <i class="icon-exclamation-sign"></i>
                                                </a>
                                            </label>
                                            <br>
                                            <div>
                                                <input type="text" id="serialNumber" maxlength="12" tabindex="12" name="serialNumber" class="form-control ng-pristine ng-valid" ng-model="MachineSerialNumber" ng-blur="CheckSpecCharacters('serialNumber')">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <br>
                                            <label class="font1">Number of Leaf Pairs</label>
                                            <div>
                                                <input type="text" ng-disabled="selectedMLC.MLCModel_Name !='Other'" class="form-control  ng-pristine ng-valid" id="pairs" ng-change="check('pairs');" ng-blur="checkRange('pairs',1,200,'numeric')" ng-model="selectedMLC.NumberOfLeafPairs" disabled="disabled">
                                            </div>
                                        </div>
                                        <div class="col-md-6 ng-hide" ng-show="selectedMLC.MLCModel_Name =='Apex MLCi' || selectedMLC.MLCModel_Name =='Apex MLCi2' || selectedMLC.MLCModel_Name =='Apex Agility'">
                                            <br>
                                            <label class="font1">Leaf Width at Isocenter (mm)</label>
                                            <div>
                                                <input type="text" id="leafWidthatIsocenter" class="form-control ng-pristine ng-valid" ng-model="leafWidthatIsocenter" ng-change="SetApexFieldSize(selectedMLC.MLCModel_Name);" ng-blur="checkRange('leafWidthatIsocenter',2.4,2.5,'numeric');">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="font1">Photon</label>
                                            <br>
                                            <div class="switch switch-primary ats-switch ng-isolate-scope" ng-click="toggle()" ng-class="{ 'disabled': disabled }" bootstrap-switch="" model="photon" on-label="Yes" off-label="No"><div class="switch-animate switch-on" ng-class="{'switch-off': !model, 'switch-on': model}"><span class="switch-left ng-binding ng-scope" ng-bind="onLabel">Yes</span><span class="knob ng-binding ng-scope" ng-bind="knobLabel">&nbsp;</span><span class="switch-right ng-binding ng-scope" ng-bind="offLabel">No</span></div></div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="font1">Electron</label>
                                            <br>
                                            <div class="switch switch-primary ats-switch ng-isolate-scope" ng-click="toggle()" ng-class="{ 'disabled': disabled }" bootstrap-switch="" model="electron" on-label="Yes" off-label="No" ng-disabled="isApex()"><div class="switch-animate switch-on" ng-class="{'switch-off': !model, 'switch-on': model}"><span class="switch-left ng-binding ng-scope" ng-bind="onLabel">Yes</span><span class="knob ng-binding ng-scope" ng-bind="knobLabel">&nbsp;</span><span class="switch-right ng-binding ng-scope" ng-bind="offLabel">No</span></div></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6" ng-show="selectedMLC.MLCModel_Name ==='MLCi2'">
                                            <label class="font1">Interdigitation</label>
                                            <br>
                                            <div class="switch switch-primary ats-switch ng-isolate-scope" ng-click="toggle()" ng-class="{ 'disabled': disabled }" bootstrap-switch="" model="interdigitation" on-label="Yes" off-label="No" ng-disabled="isInterdigitation"><div class="switch-animate switch-on" ng-class="{'switch-off': !model, 'switch-on': model}"><span class="switch-left ng-binding ng-scope" ng-bind="onLabel">Yes</span><span class="knob ng-binding ng-scope" ng-bind="knobLabel">&nbsp;</span><span class="switch-right ng-binding ng-scope" ng-bind="offLabel">No</span></div></div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="font1">Stereotactic Cones</label>
                                            <br>
                                            <div class="switch switch-primary ats-switch ng-isolate-scope" ng-click="toggle()" ng-class="{ 'disabled': disabled }" bootstrap-switch="" model="cone" on-label="Yes" off-label="No"><div class="switch-animate switch-off" ng-class="{'switch-off': !model, 'switch-on': model}"><span class="switch-left ng-binding ng-scope" ng-bind="onLabel">Yes</span><span class="knob ng-binding ng-scope" ng-bind="knobLabel">&nbsp;</span><span class="switch-right ng-binding ng-scope" ng-bind="offLabel">No</span></div></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="font1">(Physical) Wedge</label>
                                            <br>
                                            <div class="switch switch-primary ats-switch ng-isolate-scope" ng-click="toggle()" ng-class="{ 'disabled': disabled }" bootstrap-switch="" model="wedge" on-change="iniWedgeOfTable()" on-label="Yes" off-label="No" ng-disabled="!photon || isApex()"><div class="switch-animate switch-on" ng-class="{'switch-off': !model, 'switch-on': model}"><span class="switch-left ng-binding ng-scope" ng-bind="onLabel">Yes</span><span class="knob ng-binding ng-scope" ng-bind="knobLabel">&nbsp;</span><span class="switch-right ng-binding ng-scope" ng-bind="offLabel">No</span></div></div>
                                        </div>
                                        <div class="col-md-6 ng-hide" ng-show="selectedvendor.Vendor_Name === 'Varian'">
                                            <label class="font1">Enhanced Dynamic Wedge</label>
                                            <br>
                                            <div class="btn-group" id="btn-group5">
                                                <label class="btn btn-default ng-binding ng-pristine ng-valid" ng-model="EDW" btn-radio="EDWS[0]">Fixed Angle</label>
                                                <label class="btn btn-default ng-binding ng-pristine ng-valid" ng-model="EDW" btn-radio="EDWS[1]">Flexible Angle</label>
                                                <label class="btn btn-default ng-binding ng-pristine ng-valid" ng-model="EDW" btn-radio="EDWS[2]">none</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 ng-hide" ng-show="selectedvendor.Vendor_Name === 'Siemens'">
                                            <label class="font1">Virtual Wedge</label>
                                            <br>
                                            <div class="btn-group" id="btn-group6">
                                                <label class="btn btn-default ng-binding ng-pristine ng-valid" ng-model="VW" btn-radio="VWS[0]">Fixed Angle</label>
                                                <label class="btn btn-default ng-binding ng-pristine ng-valid" ng-model="VW" btn-radio="VWS[1]">Flexible Angle</label>
                                                <label class="btn btn-default ng-binding ng-pristine ng-valid" ng-model="VW" btn-radio="VWS[2]">none</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Beam Data-->
                <div class="row">
                    <div class="col-xs-12">
                        <div class="widget-box">
                            <div class="widget-title">
                                <span class="icon">
                                    <i class="icon-align-justify"></i>
                                </span>
                                <h5>Beam Data Collection</h5>
                            </div>
                            <div class="widget-content nopadding">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-4 top20">
                                            <label class="font1">Collected By (Optional)</label>
                                            <div>
                                                <input type="text" class="form-control  ng-pristine ng-valid" tabindex="13" id="collectedBy" ng-model="collectedBy" ng-blur="checkName('collectedBy')">
                                            </div>
                                            <br>
                                            <label class="font1">Data Collection Date</label>
                                            <div>
                                                <input type="date" id="dp1" tabindex="15" class="form-control ng-pristine ng-valid" ng-model="dataCollectionDate" ng-blur="checkDateStr(dataCollectionDate,'dp1',earlierThanTodayChecker)" placeholder="YYYY-MM-DD">
                                            </div>
                                        </div>
                                        <div class="col-md-4 top20">
                                            <label class="font1">Scanning Software</label>
                                            <div>
                                                <select ng-model="selectedScanningSoftware" tabindex="14" ng-class="otherClass.sswClass" id="selectedScanningSoftware" ng-options="scanningSoftware for scanningSoftware in ScanningSoftwares" ng-change="changeClass('sswClass', selectedScanningSoftware)" class="ng-pristine ng-valid form-control width-40"><option value="0" selected="selected">PTW</option><option value="1">IBA</option><option value="2">Dynascan</option><option value="3">SunNuclear</option><option value="4">Other</option></select>
                                                <span>
                                                    <input type="text" id="ScanningSW" tabindex="13" class="form-control width-35 ng-pristine ng-valid" ng-show="selectedScanningSoftware=='Other'" ng-change="check('ScanningSW')" ng-model="ScanningSW">
                                                </span>
                                            </div>
                                            <br>
                                            <label class="font1">Scanning Software Version</label>
                                            <div>
                                                <input type="text" class="form-control  ng-pristine ng-valid" tabindex="16" id="ScanningVersion" maxlength="20" ng-model="ScanningVersion" ng-change="CheckSpecCharacters('ScanningVersion')">
                                            </div>
                                        </div>
                                        <div class="col-md-4 top20">
                                            <div>
                                                <label class="font1">Converted to Oncentra Format Data</label>
                                                <br>
                                                <div class="switch switch-primary ats-switch ng-isolate-scope" ng-click="toggle()" ng-class="{ 'disabled': disabled }" bootstrap-switch="" model="convertedToOtpData" on-label="Yes" off-label="No" on-change="updateOtpVersion()"><div class="switch-animate switch-off" ng-class="{'switch-off': !model, 'switch-on': model}"><span class="switch-left ng-binding ng-scope" ng-bind="onLabel">Yes</span><span class="knob ng-binding ng-scope" ng-bind="knobLabel">&nbsp;</span><span class="switch-right ng-binding ng-scope" ng-bind="offLabel">No</span></div></div>
                                            </div>
                                            <br>
                                            <label class="font1">Conversion Software Version</label>
                                            <div>
                                                <input type="text" class="form-control  ng-pristine ng-valid" tabindex="16" id="otpVersion" maxlength="20" ng-model="otpVersion" ng-disabled="!convertedToOtpData" ng-change="check('otpVersion')" disabled="disabled">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Machine Parameters -->
            <section id="macPara">

                <!-- Tx head -->
                <div class="row ng-hide" id="tabtxhead" ng-hide="sections.he">
                    <div class="col-xs-12">
                        <div class="widget-box">
                            <div class="widget-title">
                                <span class="icon">
                                    <i class="icon-align-justify"></i>
                                </span>
                                <h5>Beam Limiting Device Labeling</h5>
                            </div>
                            <div class="widget-content nopadding">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6">
                                        <p class="font1">
                                            <br>Using the image as a reference, enter the diaphragm and MLC nomenclature you
                                            want to use in the planning system
                                        </p>
                                        <table class="table table-bordered" id="tablehead">
                                            <tbody>
                                            <tr>
                                                <th class="width-15">System Default</th>
                                                <th class="width-15">User Defined Preference</th>
                                                <th class="width-15">System Default</th>
                                                <th class="width-15">User Defined Preference</th>
                                            </tr>
                                            <tr>
                                                <td>Width</td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" id="TxHeadLables_Width" ng-init="TxHeadLables_Width='X'" ng-model="TxHeadLables_Width" ng-change="check('TxHeadLables_Width')">
                                                </td>
                                                <td>Length</td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" id="TxHeadLables_Length" ng-init="TxHeadLables_Length='Y'" ng-model="TxHeadLables_Length" ng-change="check('TxHeadLables_Length')">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>LW</td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" id="TxHeadLables_LW" ng-init="TxHeadLables_LW='X1'" ng-model="TxHeadLables_LW" ng-change="check('TxHeadLables_LW')">
                                                </td>
                                                <td>LL</td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" id="TxHeadLables_LL" ng-init="TxHeadLables_LL='Y1'" ng-model="TxHeadLables_LL" ng-change="check('TxHeadLables_LL')">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>RW</td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" id="TxHeadLables_RW" ng-init="TxHeadLables_RW='X2'" ng-model="TxHeadLables_RW" ng-change="check('TxHeadLables_RW')">
                                                </td>
                                                <td>UL</td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" id="TxHeadLables_UL" ng-init="TxHeadLables_UL='Y2'" ng-model="TxHeadLables_UL" ng-change="check('TxHeadLables_UL')">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="text-align:center" colspan="4">MLC</td>
                                            </tr>
                                            <tr>
                                                <td>X1</td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" id="TxHeadLables_X1" ng-init="TxHeadLables_X1='X1'" ng-model="TxHeadLables_X1" ng-change="check('TxHeadLables_X1')">
                                                </td>
                                                <td>X2</td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" id="TxHeadLables_X2" ng-init="TxHeadLables_X2='X2'" ng-model="TxHeadLables_X2" ng-change="check('TxHeadLables_X2')">
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <a href="img/Linac Head Labels.png" data-lightbox="example-set1" title="Linac Head Labels">
                                            <img type="text/javascript" src="img/Linac Head Labels.png" width="329px" height="294px" alt="Linac Head Labels">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="widget-box">
                            <div class="widget-title">
                                <span class="icon">
                                    <i class="icon-align-justify"></i>
                                </span>
                                <h5>Scanner Coordinate System</h5>
                            </div>
                            <div class="widget-content nopadding">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6">
                                        <table class="table table-bordered" id="tablescan">
                                            <thead>
                                            <tr>
                                                <th class="width-50">Coordinate System Used for Measurement</th>
                                                <th class="width-50">Figure Label</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>+X</td>
                                                <td>
                                                    <select class="form-control ng-pristine ng-valid" id="ScannerCoordinateSystem_X" ng-model="ScannerCoordinateSystem_X" ng-options="SCS_X for SCS_X in ScannerCoordinateSystemOptions_X" ng-change="checkLabelY()"><option value="0">1</option><option value="1">2</option><option value="2" selected="selected">3</option><option value="3">4</option></select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>+Y</td>
                                                <td>
                                                    <select class="form-control ng-pristine ng-valid" id="ScannerCoordinateSystem_Y" ng-model="ScannerCoordinateSystem_Y" ng-options="SCS_Y for SCS_Y in ScannerCoordinateSystemOptions_Y"><option value="0">2</option><option value="1" selected="selected">4</option></select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>+Z</td>
                                                <td>
                                                    <select class="form-control ng-pristine ng-valid" id="ScannerCoordinateSystem_Z" ng-model="ScannerCoordinateSystem_Z" ng-options="SCS_Z for SCS_Z in ScannerCoordinateSystemOptions_Z"><option value="0" selected="selected">5</option><option value="1">6</option></select>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <a href="img/scanner coordinate system.jpg" data-lightbox="example-set2" title="Scanner Coordinate System">
                                            <img type="text/javascript" src="img/scanner coordinate system.jpg" width="329px" height="294px" alt="Scanner Coordinate System">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Configuration
          =====================================   -->
                <div class="row ng-hide" id="tabgeneral" ng-hide="sections.li">

                    <!-- General -->
                    <div class="col-xs-12">
                        <div class="widget-box">
                            <div class="widget-title">
                                <span class="icon">
                                    <i class="icon-align-justify"></i>
                                </span>
                                <h5>General</h5>
                            </div>
                            <div class="widget-content nopadding">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <br>
                                            <label class="font1">Machine Reference Distance (cm)</label>
                                            <div id="machineref">
                                                <input type="text" id="machineref1" class="form-control ng-pristine ng-valid" ng-model="MachineReferenceDistance" ng-change="check('machineref1');" ng-blur="checkRange('machineref1',40.0,200.0,'numeric')" onblur="keepDecimal(this.id,1)" ng-init="MachineReferenceDistance='100.0'">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <br>
                                            <legend class="font1 size-16p">Field Size Parameters at Machine Reference Distance</legend>
                                        </div>
                                        <div class="col-md-5">
                                            <label class="font1">Max. Width (cm)&nbsp;
                                                <a class="tooltip-demo" data-toggle="tooltip" data-placement="top" title="max collimator setting">
                                                    <i class="icon-exclamation-sign"></i>
                                                </a>
                                            </label>
                                            <br>
                                            <div>
                                                <input type="text" id="maxwidth" class="form-control ng-pristine ng-valid" ng-blur="checkMax('minwidth', 'maxwidth', 0.1, 80.0)" onblur="keepDecimal(this.id,1)" ng-model="selectedMLC.MaxWidth">
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <label class="font1">Min. Width (cm)&nbsp;
                                                <a class="tooltip-demo" data-toggle="tooltip" data-placement="top" title="limits collimator defined fields to fields greater than or equal to this field width">
                                                    <i class="icon-exclamation-sign"></i>
                                                </a>
                                            </label>
                                            <br>
                                            <div>
                                                <input type="text" id="minwidth" class="form-control ng-pristine ng-valid" ng-blur="checkMin('minwidth', 'maxwidth', 0.1, 40.0)" onblur="keepDecimal(this.id,1)" ng-model="selectedMLC.MinWidth">
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <br>
                                            <label class="font1">Max. Length (cm)&nbsp;
                                                <a class="tooltip-demo" data-toggle="tooltip" data-placement="top" title="max collimator setting">
                                                    <i class="icon-exclamation-sign"></i>
                                                </a>
                                            </label>
                                            <br>
                                            <div class="controls">
                                                <input type="text" id="maxlength" class="form-control ng-pristine ng-valid" ng-blur="checkMax('minlength', 'maxlength', 0.1, 80.0)" onblur="keepDecimal(this.id,1)" ng-model="selectedMLC.MaxLength">
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <br>
                                            <label class="font1">Min. Length (cm)&nbsp;
                                                <a class="tooltip-demo" data-toggle="tooltip" data-placement="top" title="limits collimator defined fields to fields greater than or equal to this field length">
                                                    <i class="icon-exclamation-sign"></i>
                                                </a>
                                            </label>
                                            <br>
                                            <div>
                                                <input type="text" id="minlength" class="form-control ng-pristine ng-valid" ng-blur="checkMin('minlength', 'maxlength', 0.1, 40.0)" onblur="keepDecimal(this.id,1)" ng-model="selectedMLC.MinLength">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <br>
                                            <legend class="font1 size-16p">Collimator Parameters</legend>
                                        </div>
                                        <div class="col-md-5">
                                            <label class="font1">Length Jaw</label>
                                            <div>
                                                <select class="form-control ng-pristine ng-valid" id="LengthJaw" ng-model="selectedLengthJaw" ng-options="LengthJaw for LengthJaw in LengthJaws" ng-disabled="selectedMLC.MLCModel_Name != 'None'" ng-change="ChangeLengthJaw()" disabled="disabled"><option value="0">upper</option><option value="1" selected="selected">lower</option><option value="2">none</option></select>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <label class="font1">Width Jaw</label>
                                            <div>
                                                <select class="form-control ng-pristine ng-valid" id="WidthJaw" ng-model="selectedWidthJaw" ng-options="WidthJaw for WidthJaw in WidthJaws"><option value="0" selected="selected">upper</option><option value="1">none</option></select>
                                            </div>
                                        </div>
                                        <!-- ngIf: selectedWidthJaw == 'upper' || selectedLengthJaw === 'upper' --><div class="col-md-5 ng-scope" ng-if="selectedWidthJaw == 'upper' || selectedLengthJaw === 'upper'">
                                            <br>
                                            <label class="font1">Middle of Upper Jaw Distance (cm)</label>
                                            <div>
                                                <input type="text" class="form-control ng-pristine ng-valid" id="UpjawDist" ng-model="UpperJawDist" ng-blur="checkRange('UpjawDist',15.0,100.0,'numeric')" onblur="keepDecimal(this.id, 1);">
                                            </div>
                                        </div><!-- end ngIf: selectedWidthJaw == 'upper' || selectedLengthJaw === 'upper' -->
                                        <!-- ngIf: selectedLengthJaw == 'lower' || selectedWidthJaw == 'lower' --><div class="col-md-5 ng-scope" ng-if="selectedLengthJaw == 'lower' || selectedWidthJaw == 'lower'">
                                            <br>
                                            <label class="font1">Middle of Lower Jaw Distance (cm)</label>
                                            <div>
                                                <input type="text" class="form-control ng-pristine ng-valid" id="LowjawDist" ng-model="LowerJawDist" ng-blur="checkRange('LowjawDist',15.0,100.0,'numeric')" onblur="keepDecimal(this.id, 1);">
                                            </div>
                                        </div><!-- end ngIf: selectedLengthJaw == 'lower' || selectedWidthJaw == 'lower' -->
                                        <!-- ngIf: selectedMLC.MLCModel_ID != 13 &&selectedMLC.MLCModel_ID != 14 &&selectedMLC.MLCModel_ID != 15 && selectedMLC.MLCModel_ID != 10 && (selectedLengthJaw == 'upper' || selectedWidthJaw == 'upper') --><div class="col-md-5 ng-scope" ng-if="selectedMLC.MLCModel_ID != 13 &amp;&amp;selectedMLC.MLCModel_ID != 14 &amp;&amp;selectedMLC.MLCModel_ID != 15 &amp;&amp; selectedMLC.MLCModel_ID != 10 &amp;&amp; (selectedLengthJaw == 'upper' || selectedWidthJaw == 'upper')">
                                            <br>
                                            <label class="font1">Upper Jaw Thickness (cm)</label>
                                            <div>
                                                <input type="text" class="form-control ng-pristine ng-valid" id="upperJawThickness" ng-model="selectedMLC.upperJawThickness" ng-blur="checkRange('upperJawThickness',0,100.0,'numeric')">
                                            </div>
                                        </div><!-- end ngIf: selectedMLC.MLCModel_ID != 13 &&selectedMLC.MLCModel_ID != 14 &&selectedMLC.MLCModel_ID != 15 && selectedMLC.MLCModel_ID != 10 && (selectedLengthJaw == 'upper' || selectedWidthJaw == 'upper') -->
                                        <!-- ngIf: selectedMLC.MLCModel_ID != 13 &&selectedMLC.MLCModel_ID != 14 &&selectedMLC.MLCModel_ID != 15 && selectedMLC.MLCModel_ID != 10 && (selectedLengthJaw == 'lower' || selectedWidthJaw == 'lower') --><div class="col-md-5 ng-scope" ng-if="selectedMLC.MLCModel_ID != 13 &amp;&amp;selectedMLC.MLCModel_ID != 14 &amp;&amp;selectedMLC.MLCModel_ID != 15 &amp;&amp; selectedMLC.MLCModel_ID != 10 &amp;&amp; (selectedLengthJaw == 'lower' || selectedWidthJaw == 'lower')">
                                            <br>
                                            <label class="font1">Lower Jaw Thickness (cm)</label>
                                            <div>
                                                <input type="text" class="form-control ng-pristine ng-valid" id="lowerJawThickness" ng-model="selectedMLC.lowerJawThickness" ng-blur="checkRange('lowerJawThickness',0,100.0,'numeric')">
                                            </div>
                                        </div><!-- end ngIf: selectedMLC.MLCModel_ID != 13 &&selectedMLC.MLCModel_ID != 14 &&selectedMLC.MLCModel_ID != 15 && selectedMLC.MLCModel_ID != 10 && (selectedLengthJaw == 'lower' || selectedWidthJaw == 'lower') -->
                                        <div class="col-md-5">
                                            <br>
                                            <label class="font1">Asym. Configuration</label>
                                            <div>
                                                <select class="form-control ng-pristine ng-valid" id="AsymmetricConfiguration" ng-model="selectedMLC.AsymmetricConfiguration" ng-change="check('AsymmetricConfiguration');changeAsymmetricConfiguration();" ng-options="AC for AC in AsymmetricConfigurations"><option value="0">Length Only</option><option value="1">Width Only</option><option value="2" selected="selected">Both</option><option value="3">None</option></select>
                                            </div>
                                        </div>
                                        <div class="col-md-5" ng-show="selectedMLC.AsymmetricConfiguration=='Both' || selectedMLC.AsymmetricConfiguration=='Length Only'">
                                            <br>
                                            <label class="font1">Min. Length Jaw Position (cm)</label>
                                            <div>
                                                <input type="text" class="form-control ng-pristine ng-valid" id="MinLengthPosition" ng-model="selectedMLC.MinLengthPosition" ng-change="check('MinLengthPosition');" ng-blur="checkRange('MinLengthPosition',-40.0,40.0,'numeric')" onblur="keepDecimal(this.id, 1);">
                                            </div>
                                        </div>
                                        <div class="col-md-5" ng-show="selectedMLC.AsymmetricConfiguration=='Both' || selectedMLC.AsymmetricConfiguration=='Width Only'">
                                            <br>
                                            <label class="font1">Min. Width Jaw Position (cm)</label>
                                            <div>
                                                <input type="text" class="form-control ng-pristine ng-valid" id="MinWidthPosition" ng-model="selectedMLC.MinWidthPosition" ng-change="check('MinWidthPosition');" ng-blur="checkRange('MinWidthPosition',-40.0,40.0,'numeric')" onblur="keepDecimal(this.id, 1);">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Gantry -->
                    <div class="col-xs-12">
                        <div class="widget-box" id="gantry">
                            <div class="widget-title">
                                <span class="icon">
                                    <i class="icon-align-justify"></i>
                                </span>
                                <h5>Gantry</h5>
                            </div>
                            <div class="widget-content nopadding">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="col-md-6">
                                                <br>
                                                <label class="font1">Scale Convention</label>
                                                <br>
                                                <div>
                                                    <span class="btn-group" id="Linac_Scale_Gantry" bs-buttons-radio="" data-toggle="buttons-radio">
                                                        <button type="button" id="gantry1" class="btn btn-default btn-sm active btn-primary" value="IEC 61217" ng-click="checkRadio('gantry1','gantry2','gantry3','gantry4');">IEC 61217</button>
                                                        <button type="button" id="gantry2" class="btn btn-default btn-sm" value="IEC 60601-2-1" ng-click="checkRadio('gantry2','gantry1','gantry3','gantry4');">IEC 60601</button>
                                                        <button type="button" id="gantry3" class="btn btn-default btn-sm" value="Bipolar" ng-click="checkRadio('gantry3','gantry2','gantry1','gantry4');">Bipolar&nbsp;
                                                            <a class="tooltip-demo" data-toggle="tooltip" data-placement="top" title="Elekta Service Mode">
                                                                <i class="icon-exclamation-sign"></i>
                                                            </a>
                                                        </button>
                                                        <button type="button" id="gantry4" class="btn btn-default btn-sm" value="Other" ng-click="checkRadio('gantry4','gantry2','gantry3','gantry1');">Other</button>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <br>
                                                <label class="font1">Angle at Vertical Down (°)</label>
                                                <div>
                                                    <input type="text" id="AngleAtVerticalDown" class="form-control ng-pristine ng-valid" ng-model="AngleAtVerticalDown" readonly="readonly" ng-change="backupGantryData(gantryConvention);" ng-blur="checkRange('AngleAtVerticalDown',0,359,'int');">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <br>
                                                <label class="font1">Arc Direction</label>
                                                <div>
                                                    <select class="form-control ng-pristine ng-valid" ng-model="selectedArcDirection" id="selectedArcDirection" ng-options="AD for AD in ArcDirections" ng-change="backupGantryData(gantryConvention);" disabled="disabled"><option value="0">Positive</option><option value="1">Negative</option><option value="2" selected="selected">Both</option></select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <br>
                                                <label class="font1">Arc from Angle at Vertical Down to Min Limit (°)</label>
                                                <div>
                                                    <input type="text" id="ArcFromAngleAtVerticalDownToMinLimit" class="form-control ng-pristine ng-valid" ng-model="ArcFromAngleAtVerticalDownToMinLimit" ng-blur="checkRange('ArcFromAngleAtVerticalDownToMinLimit',0,400,'int');" ng-change="backupGantryData(gantryConvention);" readonly="readonly">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <br>
                                                <label class="font1">Increasing Angle Direction</label>
                                                <div>
                                                    <select ng-model="selectedGantry" class="form-control ng-pristine ng-valid" id="selectedGantry" ng-options="IAD for IAD in IncreasingAngleDirections" ng-change="backupGantryData(gantryConvention);" disabled="disabled"><option value="0" selected="selected">CW</option><option value="1">CCW</option></select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <br>
                                                <label class="font1">Arc from Angle at Vertical Down to Max Limit (°)</label>
                                                <div>
                                                    <input type="text" id="ArcFromAngleAtVerticalDownToMaxLimit" class="form-control ng-pristine ng-valid" ng-model="ArcFromAngleAtVerticalDownToMaxLimit" ng-blur="checkRange('ArcFromAngleAtVerticalDownToMaxLimit',0,400,'int');" ng-change="backupGantryData(gantryConvention);" readonly="readonly">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <a ng-href="img/g61217.jpg" data-lightbox="example-set3" title="Gantry Image" href="img/g61217.jpg">
                                                <!-- ngIf: gantryImage!='BLANK' --><img ng-if="gantryImage!='BLANK'" ng-type="text/javascript" ng-src="img/g61217.jpg" width="170px" height="136px" alt="g61217" class="ng-scope" src="img/g61217.jpg"><!-- end ngIf: gantryImage!='BLANK' -->
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- collimator -->
                    <div class="col-xs-12">
                        <div class="widget-box" id="collimator">
                            <div class="widget-title">
                                <span class="icon">
                                    <i class="icon-align-justify"></i>
                                </span>
                                <h5>Collimator</h5>
                            </div>
                            <div class="widget-content nopadding">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="col-md-6">
                                                <br>
                                                <label class="font1">Scale Convention</label>
                                                <div>
                                                    <span class="btn-group" id="Linac_Scale_Collimator" bs-buttons-radio="" data-toggle="buttons-radio">
                                                        <button type="button" id="collimator1" class="btn btn-default btn-sm active btn-primary" value="IEC 61217" ng-click="checkRadio('collimator1','collimator2','collimator3','collimator4');">IEC 61217</button>
                                                        <button type="button" id="collimator2" class="btn btn-default btn-sm" value="IEC 60601-2-1" ng-click="checkRadio('collimator2','collimator1','collimator3','collimator4');">IEC 60601</button>
                                                        <button type="button" id="collimator3" class="btn btn-default btn-sm" value="Bipolar" ng-click="checkRadio('collimator3','collimator2','collimator1','collimator4');">Bipolar&nbsp;
                                                            <a class="tooltip-demo" data-toggle="tooltip" data-placement="top" title="Elekta Service Mode">
                                                                <i class="icon-exclamation-sign"></i>
                                                            </a>
                                                        </button>
                                                        <button type="button" id="collimator4" class="btn btn-default btn-sm" value="Other" ng-click="checkRadio('collimator4','collimator2','collimator3','collimator1');">Other</button>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <br>
                                                <label class="font1">Nominal Angle (°)</label>
                                                <div>
                                                    <input type="text" id="CollimatorNominalAngle" class="form-control ng-pristine ng-valid" ng-model="CollimatorNominalAngle" ng-blur="checkRange('CollimatorNominalAngle',0,360,'int');" readonly="readonly">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <br>
                                                <label class="font1">Increasing Angle Direction</label>
                                                <div class="controls">
                                                    <select ng-model="selectedCollimator" class="form-control ng-pristine ng-valid" id="selectedCollimator" ng-options="IAD for IAD in IncreasingAngleDirections" disabled="disabled"><option value="0">CW</option><option value="1" selected="selected">CCW</option></select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <a ng-href="img/c61217.jpg" data-lightbox="example-set4" title="Collimator Image" href="img/c61217.jpg">
                                                <!-- ngIf: collimatorImage!='BLANK' --><img ng-if="collimatorImage!='BLANK'" ng-type="text/javascript" ng-src="img/c61217.jpg" width="170px" height="136px" alt="c61217" class="ng-scope" src="img/c61217.jpg"><!-- end ngIf: collimatorImage!='BLANK' -->
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Couch-->
                    <div class="col-xs-12">
                        <div class="widget-box" id="couch">
                            <div class="widget-title">
                                <span class="icon">
                                    <i class="icon-align-justify"></i>
                                </span>
                                <h5>Couch</h5>
                            </div>
                            <div class="widget-content nopadding">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="col-md-6">
                                                <br>
                                                <label class="font1">Scale Convention</label>
                                                <div>
                                                    <span class="btn-group" id="Linac_Scale_Couch" bs-buttons-radio="" data-toggle="buttons-radio">
                                                        <button type="button" id="couch1" class="btn btn-default btn-sm active btn-primary" value="IEC 61217" ng-click="checkRadio('couch1','couch2','couch3','couch4');">IEC 61217</button>
                                                        <button type="button" id="couch2" class="btn btn-default btn-sm" value="IEC 60601-2-1" ng-click="checkRadio('couch2','couch1','couch3','couch4');">IEC 60601</button>
                                                        <button type="button" id="couch3" class="btn btn-default btn-sm" value="Bipolar" ng-click="checkRadio('couch3','couch2','couch1','couch4');">Bipolar&nbsp;
                                                            <a class="tooltip-demo" data-toggle="tooltip" data-placement="top" title="Elekta Service Mode">
                                                                <i class="icon-exclamation-sign"></i>
                                                            </a>
                                                        </button>
                                                        <button type="button" id="couch4" class="btn btn-default btn-sm" value="Other" ng-click="checkRadio('couch4','couch2','couch3','couch1');">Other</button>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <br>
                                                <label class="font1">Nominal Angle (°)</label>
                                                <div>
                                                    <input type="text" id="CouchNominalAngle" class="form-control ng-pristine ng-valid" ng-model="CouchNominalAngle" ng-change="backupCouchData(couchConvention);" ng-blur="checkRange('CouchNominalAngle',-360,360,'int');" readonly="readonly">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <br>
                                                <label class="font1">Increasing Angle Direction</label>
                                                <div>
                                                    <select class="form-control ng-pristine ng-valid" ng-model="selectedCouch" id="selectedCouch" ng-options="IAD for IAD in IncreasingAngleDirections" ng-change="backupCouchData(couchConvention);" disabled="disabled"><option value="0">CW</option><option value="1" selected="selected">CCW</option></select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ending -->
                </div>
            </section>

            <!-- Photon -->
            <section id="photopara">

                <!-- General -->
                <div id="tabphgeneral" ng-hide="sections.pge" class="ng-hide">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <div class="alert alert-info alert-block" style="text-align:left;padding:10px 10%">
                                <strong>Note!</strong>&nbsp;&nbsp; For Treatment Units with FF and FFF mode, define and submit both
                                at the same time (two “machines” for each Energy in this table). If you define and submit
                                FF and FFF separately, you will not be able to compare your scanning data with the Elekta
                                Data Library.
                            </div>
                            <div class="pull-right">
                                <button class="btn btn-primary width-120p" ng-click="addPhotonMachine();">
                                    <i class="icon-plus icon-white"></i> Add Row
                                </button>
                                <button type="button" class="btn btn-primary width-120p" ng-show="!del" ng-click="del=true" ng-disabled="photons.length == 1">
                                    <i class="icon-remove icon-white"></i> Delete Row
                                </button>
                                <button type="button" class="btn btn-primary width-120p ng-hide" ng-show="del" ng-click="del=false">
                                    <i class="icon-ok icon-white"></i> Exit Deletion
                                </button>
                            </div>
                            <br>
                            <table class="table table-bordered widget-box" id="tablephotongen">
                                <thead>
                                <tr><th>Machine No.</th>
                                    <th>Mode Type</th>
                                    <th>Machine ID
                                        <a class="tooltip-demo" data-toggle="tooltip" data-placement="top" title="no spaces, up to 20 characters, typical name might be '06x2100C', 'Agility6MV', etc..">&nbsp;
                                            <i class="icon-exclamation-sign"></i>
                                        </a>
                                    </th>
                                    <th>Description (optional)
                                        <a class="tooltip-demo" data-toggle="tooltip" data-placement="top" title="up to 24 characters, spaces acceptable, typical entry might be 'Elekta Agility6X Room#1'">&nbsp;
                                            <i class="icon-exclamation-sign"></i>
                                        </a>
                                    </th>
                                    <th>Energy (MV)</th>
                                    <th>Reference Depth (cm)</th>
                                    <th>Default Dmax Depth (cm)</th>
                                </tr></thead>
                                <tbody>
                                <!-- ngRepeat: photon in photons --><tr ng-repeat="photon in photons" class="ng-scope">
                                    <td class="ng-binding">#1&nbsp;
                                        <i class="icon-remove cursor-pointer ng-hide" ng-show="del" ng-click="deletePhotonMachine($index);"></i>
                                    </td>
                                    <td class="width-18">
                                        <select class="form-control ng-pristine ng-valid" style="width:100%" ng-options="type for type in MACHINE_MODE_TYPE" ng-model="photon.modeType" ng-change="checkEnergy('0')"><option value="0" selected="selected">FF</option><option value="1">FFF</option></select>
                                    </td>
                                    <td>
                                        <input class="form-control ng-pristine ng-valid" tabindex="1" type="text" id="machine_id0" name="Machine ID" ng-model="photon.MachineID" maxlength="20" ng-keyup="checkMacID('machine_id'+ $index,$index,'pht', 'Machine ID');" ng-change="changePhoton($index, photon.MachineID)">
                                    </td>
                                    <td>
                                        <input class="form-control ng-pristine ng-valid" type="text" tabindex="2" id="Description0" maxlength="24" ng-model="photon.Description" ng-keyup="checkDescription('Description'+$index)">
                                    </td>
                                    <td>
                                        <input class="form-control ng-pristine ng-valid" type="text" tabindex="3" id="Energy0" name="Energy" ng-change="checkRange('Energy'+$index,0.10,60.00,'numeric')" ng-blur="checkEnergy($index)" onblur="keepDecimal(this.id, 2);" ng-model="photon.Energy">
                                    </td>
                                    <td>
                                        <input class="form-control ng-pristine ng-valid" type="text" tabindex="4" id="ReferenceDepth0" name="Ref Depth" ng-blur="checkRange('ReferenceDepth'+$index,0.4,10.0,'numeric');" onblur="keepDecimal(this.id, 1);" ng-model="photon.ReferenceDepth">
                                    </td>
                                    <td class="width-15">
                                        <input class="form-control ng-pristine ng-valid" type="text" tabindex="5" id="dMaxDose0" name="Ref FZ" ng-change="checkRange('dMaxDose0',0.1,10.0,'numeric');" onblur="keepDecimal(this.id, 1);" ng-model="photon.dmaxDepth">
                                    </td>
                                </tr><!-- end ngRepeat: photon in photons --><tr ng-repeat="photon in photons" class="ng-scope">
                                    <td class="ng-binding">#2&nbsp;
                                        <i class="icon-remove cursor-pointer ng-hide" ng-show="del" ng-click="deletePhotonMachine($index);"></i>
                                    </td>
                                    <td class="width-18">
                                        <select class="form-control ng-pristine ng-valid" style="width:100%" ng-options="type for type in MACHINE_MODE_TYPE" ng-model="photon.modeType" ng-change="checkEnergy('1')"><option value="0" selected="selected">FF</option><option value="1">FFF</option></select>
                                    </td>
                                    <td>
                                        <input class="form-control ng-pristine ng-valid" tabindex="1" type="text" id="machine_id1" name="Machine ID" ng-model="photon.MachineID" maxlength="20" ng-keyup="checkMacID('machine_id'+ $index,$index,'pht', 'Machine ID');" ng-change="changePhoton($index, photon.MachineID)">
                                    </td>
                                    <td>
                                        <input class="form-control ng-pristine ng-valid" type="text" tabindex="2" id="Description1" maxlength="24" ng-model="photon.Description" ng-keyup="checkDescription('Description'+$index)">
                                    </td>
                                    <td>
                                        <input class="form-control ng-pristine ng-valid" type="text" tabindex="3" id="Energy1" name="Energy" ng-change="checkRange('Energy'+$index,0.10,60.00,'numeric')" ng-blur="checkEnergy($index)" onblur="keepDecimal(this.id, 2);" ng-model="photon.Energy">
                                    </td>
                                    <td>
                                        <input class="form-control ng-pristine ng-valid" type="text" tabindex="4" id="ReferenceDepth1" name="Ref Depth" ng-blur="checkRange('ReferenceDepth'+$index,0.4,10.0,'numeric');" onblur="keepDecimal(this.id, 1);" ng-model="photon.ReferenceDepth">
                                    </td>
                                    <td class="width-15">
                                        <input class="form-control ng-pristine ng-valid" type="text" tabindex="5" id="dMaxDose1" name="Ref FZ" ng-change="checkRange('dMaxDose1',0.1,10.0,'numeric');" onblur="keepDecimal(this.id, 1);" ng-model="photon.dmaxDepth">
                                    </td>
                                </tr><!-- end ngRepeat: photon in photons -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="widget-box">
                                <div class="widget-title">
                                    <span class="icon">
                                        <i class="icon-align-justify"></i>
                                    </span>
                                    <h5>Available Setups</h5>
                                </div>
                                <div class="widget-content nopadding">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <br>
                                            <label class="font1">Min SSD Limit (cm)</label>
                                            <div>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="5" id="min_ssd_limit" name="Min SSD Limit" ng-init="MinSSDLimit='70.0'" ng-blur="checkMin('min_ssd_limit', 'max_ssd_limit', 30.0, 750.0);" onblur="keepDecimal(this.id, 1);" ng-model="MinSSDLimit">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <br>
                                            <label class="font1">Max SSD Limit (cm)</label>
                                            <div>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="6" id="max_ssd_limit" name="Max SSD Limit" ng-model="MaxSSDLimit" ng-init="MaxSSDLimit='140.0'" ng-blur="checkMax('min_ssd_limit', 'max_ssd_limit', 30.0, 750.0)" onblur="keepDecimal(this.id, 1);">
                                            </div>
                                        </div>
                                        <div class="col-md-6 margin10">
                                            <label class="font1">Setups</label>
                                            <br>
                                            <div class="btn-group" id="Setups">
                                                <label class="btn btn-default ng-pristine ng-valid active btn-primary" ng-model="photonSetups.ssd" btn-checkbox="">SSD</label>
                                                <label class="btn btn-default ng-pristine ng-valid active btn-primary" ng-model="photonSetups.sad" btn-checkbox="">SAD</label>
                                                <label class="btn btn-default ng-pristine ng-valid active btn-primary" ng-model="photonSetups.rotational" btn-checkbox="">Rotational</label>
                                                <label class="btn btn-default ng-pristine ng-valid" ng-model="photonSetups.dynamicConformal" btn-checkbox="">Dynamic Conformal</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="widget-box">
                                <div class="widget-title">
                                    <span class="icon">
                                        <i class="icon-align-justify"></i>
                                    </span>
                                    <h5>Dose Calculation Algorithms</h5>
                                </div>
                                <div class="widget-content nopadding">
                                    <div class="row">
                                        <div class="col-md-6 margin10">
                                            <label class="font1">Photons</label>
                                            <br>
                                            <div class="btn-group" id="btn-group3">
                                                <label class="btn btn-default ng-pristine ng-valid" ng-model="photonAlgorithm.clarkson" ng-disabled="disAlgo.phtAlgo1" btn-checkbox="" disabled="disabled">Clarkson</label>
                                                <label class="btn btn-default ng-pristine ng-valid" ng-model="photonAlgorithm.convSuper" ng-disabled="disAlgo.phtAlgo2" btn-checkbox="" disabled="disabled">Conv/Super</label>
                                                <label class="btn btn-default ng-pristine ng-valid active btn-primary" ng-model="photonAlgorithm.pbMc" ng-disabled="disAlgo.phtAlgo3" btn-checkbox="">PB MC</label>
                                                <label class="btn btn-default ng-pristine ng-valid active btn-primary" ng-model="photonAlgorithm.ccc" ng-disabled="disAlgo.phtAlgo4" btn-checkbox="">CCC</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12">
                                            <div class="alert alert-info alert-block" style="text-align:left;padding:10px 10%">
                                                <strong>Note!</strong>&nbsp;&nbsp; In general, Beam Modeling team doesn't provide CC models of FFF. So if you don't collect measurements of Sc, please enter "1" in the EPP page to make sure submit successfully.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Absolute Dose Calibration -->
                <div id="tabdoserate" ng-hide="sections.pab" class="ng-hide">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <p class="font1" style="padding-left:15px">For each Machine ID, enter the geometry at which the absolute dose is calibrated to be 1 Gy/100
                                MU</p>
                            <div class="col-xs-12 col-sm-10">
                                <table class="table table-striped table-bordered" id="tablephotondose1">
                                    <thead>
                                    <tr><th>Machine No.</th>
                                        <th>Machine ID</th>
                                        <th>Energy (MV)</th>
                                        <th>Reference Field Size (cm)&nbsp;
                                            <a class="tooltip-demo" data-toggle="tooltip" data-placement="top" title="Field size is defined at isocenter distance">
                                                <i class="icon-exclamation-sign"></i>
                                            </a>
                                        </th>
                                        <th>SSD (cm)</th>
                                        <th>Depth (cm)</th>
                                    </tr></thead>
                                    <!-- ngRepeat: photon in photons --><tbody ng-repeat="photon in photons" class="ng-scope">
                                    <tr>
                                        <td class="ng-binding">#1</td>
                                        <td>
                                            <input type="text" class="form-control ng-pristine ng-valid" id="machine_id10" ng-model="photon.MachineID" maxlength="20" readonly="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control ng-pristine ng-valid" id="Energy0" ng-model="photon.Energy" maxlength="20" readonly="">
                                        </td>
                                        <td>
                                                <span>
                                                    <input type="text" class="form-control width-18 ng-pristine ng-valid" tabindex="1" id="refGeometryFldSizA0" ng-model="photon.refGeometryFldSizA" ng-blur="checkRange('refGeometryFldSizA'+$index,0.1,40.000,'numeric');" onblur="keepDecimal(this.id, 1);">
                                                </span>×
                                            <span>
                                                    <input type="text" class="form-control width-18 ng-pristine ng-valid" tabindex="2" id="refGeometryFldSizB0" ng-model="photon.refGeometryFldSizB" ng-blur="checkRange('refGeometryFldSizB'+$index,0.1,40.000,'numeric');" onblur="keepDecimal(this.id, 1);">
                                                </span>
                                        </td>
                                        <td>
                                            <input class="form-control  ng-pristine ng-valid" type="text" id="GeometrySSD0" ng-model="photon.GeometrySSD" ng-blur="checkRange('GeometrySSD'+$index,0.1,150.000,'numeric');" onblur="keepDecimal(this.id, 1);">
                                        </td>
                                        <td>
                                            <input class="form-control  ng-pristine ng-valid" type="text" id="GeometryDepth0" ng-model="photon.GeometryDepth" ng-blur="checkRange('GeometryDepth'+$index,0.1,35.000,'numeric');" onblur="keepDecimal(this.id, 1);">
                                        </td>

                                    </tr>
                                    </tbody><!-- end ngRepeat: photon in photons --><tbody ng-repeat="photon in photons" class="ng-scope">
                                    <tr>
                                        <td class="ng-binding">#2</td>
                                        <td>
                                            <input type="text" class="form-control ng-pristine ng-valid" id="machine_id11" ng-model="photon.MachineID" maxlength="20" readonly="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control ng-pristine ng-valid" id="Energy1" ng-model="photon.Energy" maxlength="20" readonly="">
                                        </td>
                                        <td>
                                                <span>
                                                    <input type="text" class="form-control width-18 ng-pristine ng-valid" tabindex="1" id="refGeometryFldSizA1" ng-model="photon.refGeometryFldSizA" ng-blur="checkRange('refGeometryFldSizA'+$index,0.1,40.000,'numeric');" onblur="keepDecimal(this.id, 1);">
                                                </span>×
                                            <span>
                                                    <input type="text" class="form-control width-18 ng-pristine ng-valid" tabindex="2" id="refGeometryFldSizB1" ng-model="photon.refGeometryFldSizB" ng-blur="checkRange('refGeometryFldSizB'+$index,0.1,40.000,'numeric');" onblur="keepDecimal(this.id, 1);">
                                                </span>
                                        </td>
                                        <td>
                                            <input class="form-control  ng-pristine ng-valid" type="text" id="GeometrySSD1" ng-model="photon.GeometrySSD" ng-blur="checkRange('GeometrySSD'+$index,0.1,150.000,'numeric');" onblur="keepDecimal(this.id, 1);">
                                        </td>
                                        <td>
                                            <input class="form-control  ng-pristine ng-valid" type="text" id="GeometryDepth1" ng-model="photon.GeometryDepth" ng-blur="checkRange('GeometryDepth'+$index,0.1,35.000,'numeric');" onblur="keepDecimal(this.id, 1);">
                                        </td>

                                    </tr>
                                    </tbody><!-- end ngRepeat: photon in photons -->
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <p class="font1" style="padding-left:15px">Absolute dose calibration in water at 10 cm Depth (100 cm SSD), for the reference field size
                                when delivering 100 MU</p>
                            <div class="col-xs-12 col-sm-10">
                                <table class="table table-striped table-bordered" id="tablephotondose1">
                                    <thead>
                                    <tr><th>Machine No.</th>
                                        <th>Machine ID</th>
                                        <th>SSD (cm)</th>
                                        <th>Reference Field Size (cm)&nbsp;
                                            <a class="tooltip-demo" data-toggle="tooltip" data-placement="top" title="Field size is defined at surface">
                                                <i class="icon-exclamation-sign"></i>
                                            </a>
                                        </th>
                                        <th>MU</th>
                                        <th>Absolute Dose @100cm SSD (Gy)</th>
                                    </tr></thead>
                                    <!-- ngRepeat: photon in photons --><tbody ng-repeat="photon in photons" class="ng-scope">
                                    <tr>
                                        <td class="ng-binding">#1</td>
                                        <td>
                                            <input type="text" class="form-control ng-pristine ng-valid" id="machine_id10" ng-model="photon.MachineID" maxlength="20" readonly="">
                                        </td>
                                        <td>
                                            <input class="form-control  ng-pristine ng-valid" type="text" id="SCDD1000" ng-model="phtSDD100" readonly="">
                                        </td>
                                        <td>
                                                <span>
                                                    <input type="text" class="form-control width-18 ng-pristine ng-valid" tabindex="1" id="refFldSiz100A0" ng-model="photon.refFldSiz100A" ng-disabled="selectedMLC.MLCModel_Name != 'Beam Modulator' &amp;&amp; selectedMLC.MLCModel_Name !='Apex MLCi' &amp;&amp; selectedMLC.MLCModel_Name !='Apex MLCi2' &amp;&amp; selectedMLC.MLCModel_Name !='Apex Agility'" ng-change="iniTableArray('0', selectedMLC.MLCModel_Name);check('refFldSiz100A0')" disabled="disabled">
                                                </span>×
                                            <span>
                                                    <input type="text" class="form-control width-18 ng-pristine ng-valid" tabindex="2" id="refFldSiz100B0" ng-model="photon.refFldSiz100B" ng-disabled="selectedMLC.MLCModel_Name != 'Beam Modulator' &amp;&amp; selectedMLC.MLCModel_Name !='Apex MLCi' &amp;&amp; selectedMLC.MLCModel_Name !='Apex MLCi2' &amp;&amp; selectedMLC.MLCModel_Name !='Apex Agility'" ng-change="iniTableArray('0', selectedMLC.MLCModel_Name);check('refFldSiz100B0')" disabled="disabled">
                                                </span>
                                        </td>
                                        <td>
                                            <input class="form-control ng-pristine ng-valid" type="text" id="MU10010" ng-model="phtMU100" readonly="">
                                        </td>
                                        <td>
                                            <input class="form-control ng-pristine ng-valid" tabindex="3" type="text" id="AbsoluteDose1000" ng-model="photon.AbsoluteDose100" ng-blur="checkRange('AbsoluteDose100'+$index,0.001,10.000,'numeric');" onblur="keepDecimal(this.id, 3);">
                                        </td>
                                    </tr>
                                    </tbody><!-- end ngRepeat: photon in photons --><tbody ng-repeat="photon in photons" class="ng-scope">
                                    <tr>
                                        <td class="ng-binding">#2</td>
                                        <td>
                                            <input type="text" class="form-control ng-pristine ng-valid" id="machine_id11" ng-model="photon.MachineID" maxlength="20" readonly="">
                                        </td>
                                        <td>
                                            <input class="form-control  ng-pristine ng-valid" type="text" id="SCDD1001" ng-model="phtSDD100" readonly="">
                                        </td>
                                        <td>
                                                <span>
                                                    <input type="text" class="form-control width-18 ng-pristine ng-valid" tabindex="1" id="refFldSiz100A1" ng-model="photon.refFldSiz100A" ng-disabled="selectedMLC.MLCModel_Name != 'Beam Modulator' &amp;&amp; selectedMLC.MLCModel_Name !='Apex MLCi' &amp;&amp; selectedMLC.MLCModel_Name !='Apex MLCi2' &amp;&amp; selectedMLC.MLCModel_Name !='Apex Agility'" ng-change="iniTableArray('1', selectedMLC.MLCModel_Name);check('refFldSiz100A1')" disabled="disabled">
                                                </span>×
                                            <span>
                                                    <input type="text" class="form-control width-18 ng-pristine ng-valid" tabindex="2" id="refFldSiz100B1" ng-model="photon.refFldSiz100B" ng-disabled="selectedMLC.MLCModel_Name != 'Beam Modulator' &amp;&amp; selectedMLC.MLCModel_Name !='Apex MLCi' &amp;&amp; selectedMLC.MLCModel_Name !='Apex MLCi2' &amp;&amp; selectedMLC.MLCModel_Name !='Apex Agility'" ng-change="iniTableArray('1', selectedMLC.MLCModel_Name);check('refFldSiz100B1')" disabled="disabled">
                                                </span>
                                        </td>
                                        <td>
                                            <input class="form-control ng-pristine ng-valid" type="text" id="MU10011" ng-model="phtMU100" readonly="">
                                        </td>
                                        <td>
                                            <input class="form-control ng-pristine ng-valid" tabindex="3" type="text" id="AbsoluteDose1001" ng-model="photon.AbsoluteDose100" ng-blur="checkRange('AbsoluteDose100'+$index,0.001,10.000,'numeric');" onblur="keepDecimal(this.id, 3);">
                                        </td>
                                    </tr>
                                    </tbody><!-- end ngRepeat: photon in photons -->
                                </table>
                            </div>
                            <div class="col-xs-12 col-sm-2">
                                <a href="img/Absolute Dose at SDD110.png" data-lightbox="example-set5" title="Absolute Dose at SDD110">
                                    <img type="text/javascript" src="img/Absolute Dose at SDD110.png" width="70%" class="cursor-pointer" alt="doserate">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <p class="font1" style="padding-left:15px">Absolute dose calibration in water at isocenter point, 10 cm Depth (90 cm SSD), for the reference
                                field size when delivering 100 MU</p>
                            <div class="col-xs-12 col-sm-10">
                                <table class="table table-striped table-bordered" id="tablephotondose2">
                                    <thead>
                                    <tr><th>Machine No.</th>
                                        <th>Machine ID</th>
                                        <th>SSD (cm)</th>
                                        <th>Reference Field Size (cm)&nbsp;
                                            <a class="tooltip-demo" data-toggle="tooltip" data-placement="top" title="Field size is defined at isocenter distance">
                                                <i class="icon-exclamation-sign"></i>
                                            </a>
                                        </th>
                                        <th>MU</th>
                                        <th>Absolute Dose @90cm SSD (Gy)</th>
                                    </tr></thead>
                                    <!-- ngRepeat: photon in photons --><tbody ng-repeat="photon in photons" class="ng-scope">
                                    <tr>
                                        <td class="ng-binding">#1</td>
                                        <td>
                                            <input type="text" class="form-control ng-pristine ng-valid" id="machine_id30" ng-model="photon.MachineID" maxlength="20" readonly="">
                                        </td>
                                        <td>
                                            <input class="form-control  ng-pristine ng-valid" type="text" id="SCDD900" ng-model="phtSDD90" readonly="">
                                        </td>
                                        <td>
                                                <span>
                                                    <input type="text" class="form-control width-18 ng-pristine ng-valid" tabindex="4" id="refFldSiz90A0" ng-model="photon.refFldSiz90A" ng-disabled="selectedMLC.MLCModel_Name != 'Beam Modulator' &amp;&amp; selectedMLC.MLCModel_Name !='Apex MLCi' &amp;&amp; selectedMLC.MLCModel_Name !='Apex MLCi2' &amp;&amp; selectedMLC.MLCModel_Name !='Apex Agility'" ng-change="iniTableArray(0, selectedMLC.MLCModel_Name);check('refFldSiz90A0')" disabled="disabled">
                                                </span>×
                                            <span>
                                                    <input type="text" class="form-control width-18 ng-pristine ng-valid" tabindex="5" id="refFldSiz90B0" ng-model="photon.refFldSiz90B" ng-disabled="selectedMLC.MLCModel_Name != 'Beam Modulator' &amp;&amp; selectedMLC.MLCModel_Name !='Apex MLCi' &amp;&amp; selectedMLC.MLCModel_Name !='Apex MLCi2' &amp;&amp; selectedMLC.MLCModel_Name !='Apex Agility'" ng-change="iniTableArray(0, selectedMLC.MLCModel_Name);check('refFldSiz90B0')" disabled="disabled">
                                                </span>
                                        </td>
                                        <td>
                                            <input class="form-control ng-pristine ng-valid" type="text" id="MU1000" ng-model="phtMU100" readonly="">
                                        </td>
                                        <td>
                                            <input class="form-control ng-pristine ng-valid" tabindex="6" type="text" id="AbsoluteDose900" ng-model="photon.AbsoluteDose90" ng-blur="checkPhotonAbsoluteDose90('AbsoluteDose90' + $index, $index)">
                                        </td>
                                    </tr>
                                    </tbody><!-- end ngRepeat: photon in photons --><tbody ng-repeat="photon in photons" class="ng-scope">
                                    <tr>
                                        <td class="ng-binding">#2</td>
                                        <td>
                                            <input type="text" class="form-control ng-pristine ng-valid" id="machine_id31" ng-model="photon.MachineID" maxlength="20" readonly="">
                                        </td>
                                        <td>
                                            <input class="form-control  ng-pristine ng-valid" type="text" id="SCDD901" ng-model="phtSDD90" readonly="">
                                        </td>
                                        <td>
                                                <span>
                                                    <input type="text" class="form-control width-18 ng-pristine ng-valid" tabindex="4" id="refFldSiz90A1" ng-model="photon.refFldSiz90A" ng-disabled="selectedMLC.MLCModel_Name != 'Beam Modulator' &amp;&amp; selectedMLC.MLCModel_Name !='Apex MLCi' &amp;&amp; selectedMLC.MLCModel_Name !='Apex MLCi2' &amp;&amp; selectedMLC.MLCModel_Name !='Apex Agility'" ng-change="iniTableArray(1, selectedMLC.MLCModel_Name);check('refFldSiz90A1')" disabled="disabled">
                                                </span>×
                                            <span>
                                                    <input type="text" class="form-control width-18 ng-pristine ng-valid" tabindex="5" id="refFldSiz90B1" ng-model="photon.refFldSiz90B" ng-disabled="selectedMLC.MLCModel_Name != 'Beam Modulator' &amp;&amp; selectedMLC.MLCModel_Name !='Apex MLCi' &amp;&amp; selectedMLC.MLCModel_Name !='Apex MLCi2' &amp;&amp; selectedMLC.MLCModel_Name !='Apex Agility'" ng-change="iniTableArray(1, selectedMLC.MLCModel_Name);check('refFldSiz90B1')" disabled="disabled">
                                                </span>
                                        </td>
                                        <td>
                                            <input class="form-control ng-pristine ng-valid" type="text" id="MU1001" ng-model="phtMU100" readonly="">
                                        </td>
                                        <td>
                                            <input class="form-control ng-pristine ng-valid" tabindex="6" type="text" id="AbsoluteDose901" ng-model="photon.AbsoluteDose90" ng-blur="checkPhotonAbsoluteDose90('AbsoluteDose90' + $index, $index)">
                                        </td>
                                    </tr>
                                    </tbody><!-- end ngRepeat: photon in photons -->
                                </table>
                            </div>
                            <div class="col-xs-12 col-sm-2">
                                <a href="img/Absolute Dose at SDD100.png" data-lightbox="example-set6" title="Absolute Dose at SDD100">
                                    <img type="text/javascript" src="img/Absolute Dose at SDD100.png" width="70%" class="cursor-pointer" alt="doserate">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Scp -->
                <div id="tabTSCF" ng-hide="sections.ptscf" class="ng-hide">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12" ng-show="selectedMLC.MLCModel_Name != 'Apex MLCi' &amp;&amp; selectedMLC.MLCModel_Name != 'Apex MLCi2' &amp;&amp; selectedMLC.MLCModel_Name != 'Apex Agility'">
                                <div class="alert alert-info alert-block" style="text-align:left;padding:10px 10%">
                                    <strong>Note!</strong>&nbsp;&nbsp;For the larger field sizes (maximum to 4x4cm), use an ionization
                                    chamber with a collection volume of ~0.125 cm
                                    <sup>3</sup>. For field sizes of 5x5 cm and smaller, use a micro-chamber.
                                </div>
                            </div>
                            <br>
                            <div class="col-md-3" ng-show="selectedMLC.MLCModel_Name != 'Apex MLCi' &amp;&amp; selectedMLC.MLCModel_Name != 'Apex MLCi2' &amp;&amp; selectedMLC.MLCModel_Name != 'Apex Agility'">
                                <label class="font1">Select the number of Detectors</label>
                                <div>
                                    <div class="btn-group" id="btn-detector" data-toggle="buttons-checkbox">
                                        <button type="button" id="detector1" class="btn btn-default width-78p" ng-click="checkRadio(&quot;detector1&quot;,&quot;detector2&quot;);iniTSCFTab(selectedMLC.MLCModel_Name); setTscfTabIndex();DrawTSCFChart(0);">1</button>
                                        <button type="button" id="detector2" class="btn btn-default active btn-primary width-78p" ng-click="checkRadio(&quot;detector2&quot;,&quot;detector1&quot;);iniTSCFTab(selectedMLC.MLCModel_Name);DrawTSCFChart(0);">2</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 ng-hide" ng-show="selectedMLC.MLCModel_Name != 'Apex MLCi' &amp;&amp; selectedMLC.MLCModel_Name != 'Apex MLCi2' &amp;&amp; selectedMLC.MLCModel_Name != 'Apex Agility' &amp;&amp; detectors == 1">
                                <label class="font1">Detector Name</label>
                                <div>
                                    <input type="text" id="detectorName" class="form-control ng-pristine ng-valid" tabindex="1" ng-change="checkString('detectorName')" ng-model="DetectorName">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12" ng-show="selectedMLC.MLCModel_Name != 'Apex MLCi' &amp;&amp; selectedMLC.MLCModel_Name != 'Apex MLCi2' &amp;&amp; selectedMLC.MLCModel_Name != 'Apex Agility' &amp;&amp; detectors == 2">
                                <label class="font1">Detector for Small Field</label>
                                <div>
                                    <input type="text" id="smallfield" class="form-control ng-pristine ng-valid" tabindex="1" ng-change="checkString('smallfield')" ng-model="DetectorForSmallField">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12" ng-show="selectedMLC.MLCModel_Name != 'Apex MLCi' &amp;&amp; selectedMLC.MLCModel_Name != 'Apex MLCi2' &amp;&amp; selectedMLC.MLCModel_Name != 'Apex Agility' &amp;&amp; detectors == 2">
                                <label class="font1">Detector for Large Field</label>
                                <div>
                                    <input type="text" id="largefield" class="form-control ng-pristine ng-valid" tabindex="2" ng-change="checkString('largefield')" ng-model="DetectorForLargeField">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <label class="font1">SSD (cm)</label>
                                <div>
                                    <select id="selectedTscfSDD" class="form-control ng-pristine ng-valid" ng-model="SSD_photonTSCF" tabindex="4" ng-options="XS for XS in phtSSDs" ng-change="check('selectedTscfSDD'); SetTSCFTab(selectedMLC.MLCModel_Name)"><option value="0" selected="selected">90</option><option value="1">100</option></select>
                                </div>
                            </div>
                            <div class="col-md-9 col-sm-12 ng-hide" ng-show="selectedMLC.MLCModel_Name == 'Apex MLCi' || selectedMLC.MLCModel_Name == 'Apex MLCi2' || selectedMLC.MLCModel_Name == 'Apex Agility'">
                                <label class="font1">Maximum Field Size</label>
                                <div>
                                    <input id="apexMaxFieldSizeA1" class="width-20 form-control ng-pristine ng-valid" ng-model="apexMaxFieldSizeA" ng-change="check('apexMaxFieldSizeA1')"> cm ×
                                    <input id="apexMaxFieldSizeB1" class="width-20 form-control ng-pristine ng-valid" ng-model="apexMaxFieldSizeB" ng-change="check('apexMaxFieldSizeB')"> cm
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="widget-box" style="margin-left:15px;margin-right:15px">
                            <div class="widget-title">
                                <ul class="nav nav-tabs">
                                    <!-- ngRepeat: photon in photons --><li ng-class="pStyle[$index]" ng-repeat="photon in photons" id="photonTSCFTab0" ng-click="setTscfTabIndex();activateTab('photonTSCFTab', 'tabenergy', $index);DrawTSCFChart($index);" class="ng-scope active">
                                        <a href="#tabenergy0" data-toggle="tab" class="ng-binding">Precise04x</a>
                                    </li><!-- end ngRepeat: photon in photons --><li ng-class="pStyle[$index]" ng-repeat="photon in photons" id="photonTSCFTab1" ng-click="setTscfTabIndex();activateTab('photonTSCFTab', 'tabenergy', $index);DrawTSCFChart($index);" class="ng-scope">
                                        <a href="#tabenergy1" data-toggle="tab" class="ng-binding">Precise06x</a>
                                    </li><!-- end ngRepeat: photon in photons -->
                                </ul>
                            </div>
                            <!-- ngIf: selectedMLC.MLCModel_Name != 'Apex MLCi' && selectedMLC.MLCModel_Name != 'Apex MLCi2' && selectedMLC.MLCModel_Name != 'Apex Agility' --><div class="widget-content tab-content ng-scope" ng-if="selectedMLC.MLCModel_Name != 'Apex MLCi' &amp;&amp; selectedMLC.MLCModel_Name != 'Apex MLCi2' &amp;&amp; selectedMLC.MLCModel_Name != 'Apex Agility'">
                                <!-- MachineID-->
                                <!-- ngRepeat: photon in photons --><div ng-class="divStyle[$index]" ng-repeat="photon in photons" id="tabenergy0" class="ng-scope tab-pane active">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12" ng-show="detectors == 2">
                                                <p class="top10p bot20p">
                                                    <span class="label label-info">Note !</span>
                                                    For 1x1, 3x3 and newly added field sizes, use the checkbox to include or exclude a measured value.
                                                </p>
                                            </div>
                                            <div class="col-md-12 ng-hide" ng-show="detectors == 1">
                                                <p class="top10p">
                                                    <span class="label label-info">Note !</span>
                                                    For 1x1 and newly added field sizes, use the checkbox to include or exclude a measured value.
                                                </p>
                                            </div>
                                            <div class="col-md-12 bot20p">
                                                <!-- ngIf: detectors == 2 --><div ng-if="detectors == 2" class="ng-scope">
                                                    Choose the field size as normalization reference to normalize the Scps from the two detectors:&nbsp;
                                                    <select class="form-control width-10 ng-pristine ng-valid" id="normalization0" tabindex="3" ng-model="normalization[$index]" ng-options="s for s in normalStandard" ng-change="normalize($index);DrawTSCFChart($index);"><option value="0" selected="selected">4x4</option><option value="1">5x5</option></select>
                                                </div><!-- end ngIf: detectors == 2 -->
                                            </div>
                                            <div class="col-md-6" id="collapsedTscfTable">
                                                <div class="pull-right">
                                                    <button class="btn btn-primary btn-sm" ng-click="addTSCFField();">
                                                        <i class="icon-plus icon-white"></i> Add Row
                                                    </button>
                                                    <button type="button" class="btn btn-primary btn-sm" ng-show="!delete" ng-click="delete=true;">
                                                        <i class="icon-remove icon-white"></i> Delete Row
                                                    </button>
                                                    <button type="button" class="btn btn-primary btn-sm ng-hide" ng-show="delete" ng-click="delete=false">
                                                        <i class="icon-ok icon-white"></i> Exit Deletion
                                                    </button>
                                                </div>
                                                <!-- ngIf: detectors == 2 --><table class="table table-bordered widget-box ng-scope" id="photonTSCF20" ng-if="detectors == 2">
                                                    <tbody id="TSCFFieldSize20">
                                                    <tr>
                                                        <th class="width-30">Field Size (cm)
                                                            <a class="tooltip-demo" data-toggle="tooltip" data-placement="top" title="Field size is defined at surface when SSD = 100 cm; Field size is defined at isocenter distance when SSD = 90 cm ">&nbsp;
                                                                <i class="icon-exclamation-sign"></i>
                                                            </a>
                                                        </th>
                                                        <th class="width-20">Small Detector</th>
                                                        <th class="width-20">Large Detector</th>
                                                        <th class="width-10">Normalized</th>
                                                        <th class="width-20">Final Scp</th>
                                                    </tr>
                                                    <!-- ngRepeat: tscfTableRow in tscfTableRows[$index] --><tr ng-repeat="tscfTableRow in tscfTableRows[$index]" class="ng-scope">
                                                        <td>
                                                                <span class="padding-left-37 ng-binding">1×1
                                                                    <i class="icon-remove cursor-pointer ng-hide" ng-show="delete&amp;&amp;!tscfTableRow.deleteIcon" ng-click="deleteTscfRow($parent.$index, tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB);DrawTSCFChart($parent.$index);"></i>
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.small == "---" -->
                                                            <span class="padding-left-10">
                                                                    <!-- ngIf: tscfTableRow.small != "---" --><input class="form-control ng-scope ng-pristine ng-valid" ng-if="tscfTableRow.small != &quot;---&quot;" type="text" tabindex="4" id="tscfTabSmallA00" ng-model="tscfTableRow.small" onblur="keepDecimal(this.id, 3);" ng-disabled="(tscfTableRow.readOnly&amp;&amp;(!tscfTableRow.checkS))" ng-change="normalize($parent.$parent.$index);DrawTSCFChart($parent.$parent.$index);checkNonApexTSCFRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscfTabSmallA'+$parent.$parent.$index+$index);" ng-blur="checkLFDRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscfTabSmallA'+$parent.$parent.$index+$index);"><!-- end ngIf: tscfTableRow.small != "---" -->
                                                                <!-- ngIf: tscfTableRow.small != "---" --><input type="checkbox" ng-if="tscfTableRow.small != &quot;---&quot;" ng-show="tscfTableRow.switchSmall" id="aTablerow.checkS00" ng-model="tscfTableRow.checkS" ng-change="cancelTscfInput('smallcheckS', $index, $parent.$parent.$index,tscfTableRow.readOnly,'aTablerow.checkS'+$parent.$parent.$index+$index);DrawTSCFChart($parent.$parent.$index)" class="ng-scope ng-pristine ng-valid"><!-- end ngIf: tscfTableRow.small != "---" -->
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.large == "---" --><span class="padding-left-40 ng-binding ng-scope" ng-if="tscfTableRow.large == &quot;---&quot;">---</span><!-- end ngIf: tscfTableRow.large == "---" -->
                                                            <span class="padding-left-10">
                                                                    <!-- ngIf: tscfTableRow.large != "---" -->
                                                                <!-- ngIf: tscfTableRow.large != "---" -->
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.normalization != '' --><span ng-if="tscfTableRow.normalization != ''" class="ng-binding ng-scope">0.663</span><!-- end ngIf: tscfTableRow.normalization != '' -->
                                                        </td>
                                                        <td>
                                                                <span class="padding-left-10">
                                                                    <input class="form-control ng-pristine ng-valid" type="text" id="tscf200" tabindex="6" ng-model="tscfTableRow.tscf" onblur="keepDecimal(this.id, 3);" ng-disabled="(tscfTableRow.readOnly&amp;&amp;(!tscfTableRow.checkS))" ng-change="DrawTSCFChart($parent.$index);checkNonApexTSCFRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscf2'+$parent.$index+$index);" ng-blur="checkLFDRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscf2'+$parent.$index+$index);">
                                                                </span>
                                                        </td>
                                                    </tr><!-- end ngRepeat: tscfTableRow in tscfTableRows[$index] --><tr ng-repeat="tscfTableRow in tscfTableRows[$index]" class="ng-scope">
                                                        <td>
                                                                <span class="padding-left-37 ng-binding">2×2
                                                                    <i class="icon-remove cursor-pointer ng-hide" ng-show="delete&amp;&amp;!tscfTableRow.deleteIcon" ng-click="deleteTscfRow($parent.$index, tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB);DrawTSCFChart($parent.$index);"></i>
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.small == "---" -->
                                                            <span class="padding-left-10">
                                                                    <!-- ngIf: tscfTableRow.small != "---" --><input class="form-control ng-scope ng-pristine ng-valid" ng-if="tscfTableRow.small != &quot;---&quot;" type="text" tabindex="4" id="tscfTabSmallA01" ng-model="tscfTableRow.small" onblur="keepDecimal(this.id, 3);" ng-disabled="(tscfTableRow.readOnly&amp;&amp;(!tscfTableRow.checkS))" ng-change="normalize($parent.$parent.$index);DrawTSCFChart($parent.$parent.$index);checkNonApexTSCFRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscfTabSmallA'+$parent.$parent.$index+$index);" ng-blur="checkLFDRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscfTabSmallA'+$parent.$parent.$index+$index);"><!-- end ngIf: tscfTableRow.small != "---" -->
                                                                <!-- ngIf: tscfTableRow.small != "---" --><input type="checkbox" ng-if="tscfTableRow.small != &quot;---&quot;" ng-show="tscfTableRow.switchSmall" id="aTablerow.checkS01" ng-model="tscfTableRow.checkS" ng-change="cancelTscfInput('smallcheckS', $index, $parent.$parent.$index,tscfTableRow.readOnly,'aTablerow.checkS'+$parent.$parent.$index+$index);DrawTSCFChart($parent.$parent.$index)" class="ng-scope ng-pristine ng-valid ng-hide"><!-- end ngIf: tscfTableRow.small != "---" -->
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.large == "---" --><span class="padding-left-40 ng-binding ng-scope" ng-if="tscfTableRow.large == &quot;---&quot;">---</span><!-- end ngIf: tscfTableRow.large == "---" -->
                                                            <span class="padding-left-10">
                                                                    <!-- ngIf: tscfTableRow.large != "---" -->
                                                                <!-- ngIf: tscfTableRow.large != "---" -->
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.normalization != '' --><span ng-if="tscfTableRow.normalization != ''" class="ng-binding ng-scope">0.774</span><!-- end ngIf: tscfTableRow.normalization != '' -->
                                                        </td>
                                                        <td>
                                                                <span class="padding-left-10">
                                                                    <input class="form-control ng-pristine ng-valid" type="text" id="tscf201" tabindex="6" ng-model="tscfTableRow.tscf" onblur="keepDecimal(this.id, 3);" ng-disabled="(tscfTableRow.readOnly&amp;&amp;(!tscfTableRow.checkS))" ng-change="DrawTSCFChart($parent.$index);checkNonApexTSCFRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscf2'+$parent.$index+$index);" ng-blur="checkLFDRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscf2'+$parent.$index+$index);">
                                                                </span>
                                                        </td>
                                                    </tr><!-- end ngRepeat: tscfTableRow in tscfTableRows[$index] --><tr ng-repeat="tscfTableRow in tscfTableRows[$index]" class="ng-scope">
                                                        <td>
                                                                <span class="padding-left-37 ng-binding">3×3
                                                                    <i class="icon-remove cursor-pointer ng-hide" ng-show="delete&amp;&amp;!tscfTableRow.deleteIcon" ng-click="deleteTscfRow($parent.$index, tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB);DrawTSCFChart($parent.$index);"></i>
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.small == "---" -->
                                                            <span class="padding-left-10">
                                                                    <!-- ngIf: tscfTableRow.small != "---" --><input class="form-control ng-scope ng-pristine ng-valid" ng-if="tscfTableRow.small != &quot;---&quot;" type="text" tabindex="4" id="tscfTabSmallA02" ng-model="tscfTableRow.small" onblur="keepDecimal(this.id, 3);" ng-disabled="(tscfTableRow.readOnly&amp;&amp;(!tscfTableRow.checkS))" ng-change="normalize($parent.$parent.$index);DrawTSCFChart($parent.$parent.$index);checkNonApexTSCFRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscfTabSmallA'+$parent.$parent.$index+$index);" ng-blur="checkLFDRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscfTabSmallA'+$parent.$parent.$index+$index);"><!-- end ngIf: tscfTableRow.small != "---" -->
                                                                <!-- ngIf: tscfTableRow.small != "---" --><input type="checkbox" ng-if="tscfTableRow.small != &quot;---&quot;" ng-show="tscfTableRow.switchSmall" id="aTablerow.checkS02" ng-model="tscfTableRow.checkS" ng-change="cancelTscfInput('smallcheckS', $index, $parent.$parent.$index,tscfTableRow.readOnly,'aTablerow.checkS'+$parent.$parent.$index+$index);DrawTSCFChart($parent.$parent.$index)" class="ng-scope ng-pristine ng-valid ng-hide"><!-- end ngIf: tscfTableRow.small != "---" -->
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.large == "---" -->
                                                            <span class="padding-left-10">
                                                                    <!-- ngIf: tscfTableRow.large != "---" --><input class="form-control ng-scope ng-pristine ng-valid" ng-if="tscfTableRow.large != &quot;---&quot;" type="text" ng-model="tscfTableRow.large" tabindex="5" id="tscfTabLargeA02" onblur="keepDecimal(this.id, 3);" ng-disabled="(tscfTableRow.readOnly&amp;&amp;(!tscfTableRow.checkL)) " ng-change="normalize($parent.$parent.$index);checkNonApexTSCFRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscfTabLargeA'+$parent.$parent.$index+$index);DrawTSCFChart($parent.$parent.$index);" ng-blur="checkLFDRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscfTabLargeA'+$parent.$parent.$index+$index);"><!-- end ngIf: tscfTableRow.large != "---" -->
                                                                <!-- ngIf: tscfTableRow.large != "---" --><input ng-if="tscfTableRow.large != &quot;---&quot;" type="checkbox" ng-show="tscfTableRow.switchLarge" id="aTablerow.checkL02" ng-model="tscfTableRow.checkL" ng-change="cancelTscfInput('largecheckL',$index, $parent.$parent.$index,tscfTableRow.readOnly,'aTablerow.checkL'+$parent.$parent.$index+$index);DrawTSCFChart($parent.$parent.$index);" class="ng-scope ng-pristine ng-valid"><!-- end ngIf: tscfTableRow.large != "---" -->
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.normalization != '' --><span ng-if="tscfTableRow.normalization != ''" class="ng-binding ng-scope">0.816</span><!-- end ngIf: tscfTableRow.normalization != '' -->
                                                        </td>
                                                        <td>
                                                                <span class="padding-left-10">
                                                                    <input class="form-control ng-pristine ng-valid" type="text" id="tscf202" tabindex="6" ng-model="tscfTableRow.tscf" onblur="keepDecimal(this.id, 3);" ng-disabled="(tscfTableRow.readOnly&amp;&amp;(!tscfTableRow.checkS))" ng-change="DrawTSCFChart($parent.$index);checkNonApexTSCFRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscf2'+$parent.$index+$index);" ng-blur="checkLFDRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscf2'+$parent.$index+$index);">
                                                                </span>
                                                        </td>
                                                    </tr><!-- end ngRepeat: tscfTableRow in tscfTableRows[$index] --><tr ng-repeat="tscfTableRow in tscfTableRows[$index]" class="ng-scope">
                                                        <td>
                                                                <span class="padding-left-37 ng-binding">4×4
                                                                    <i class="icon-remove cursor-pointer ng-hide" ng-show="delete&amp;&amp;!tscfTableRow.deleteIcon" ng-click="deleteTscfRow($parent.$index, tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB);DrawTSCFChart($parent.$index);"></i>
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.small == "---" -->
                                                            <span class="padding-left-10">
                                                                    <!-- ngIf: tscfTableRow.small != "---" --><input class="form-control ng-scope ng-pristine ng-valid" ng-if="tscfTableRow.small != &quot;---&quot;" type="text" tabindex="4" id="tscfTabSmallA03" ng-model="tscfTableRow.small" onblur="keepDecimal(this.id, 3);" ng-disabled="(tscfTableRow.readOnly&amp;&amp;(!tscfTableRow.checkS))" ng-change="normalize($parent.$parent.$index);DrawTSCFChart($parent.$parent.$index);checkNonApexTSCFRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscfTabSmallA'+$parent.$parent.$index+$index);" ng-blur="checkLFDRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscfTabSmallA'+$parent.$parent.$index+$index);"><!-- end ngIf: tscfTableRow.small != "---" -->
                                                                <!-- ngIf: tscfTableRow.small != "---" --><input type="checkbox" ng-if="tscfTableRow.small != &quot;---&quot;" ng-show="tscfTableRow.switchSmall" id="aTablerow.checkS03" ng-model="tscfTableRow.checkS" ng-change="cancelTscfInput('smallcheckS', $index, $parent.$parent.$index,tscfTableRow.readOnly,'aTablerow.checkS'+$parent.$parent.$index+$index);DrawTSCFChart($parent.$parent.$index)" class="ng-scope ng-pristine ng-valid ng-hide"><!-- end ngIf: tscfTableRow.small != "---" -->
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.large == "---" -->
                                                            <span class="padding-left-10">
                                                                    <!-- ngIf: tscfTableRow.large != "---" --><input class="form-control ng-scope ng-pristine ng-valid" ng-if="tscfTableRow.large != &quot;---&quot;" type="text" ng-model="tscfTableRow.large" tabindex="5" id="tscfTabLargeA03" onblur="keepDecimal(this.id, 3);" ng-disabled="(tscfTableRow.readOnly&amp;&amp;(!tscfTableRow.checkL)) " ng-change="normalize($parent.$parent.$index);checkNonApexTSCFRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscfTabLargeA'+$parent.$parent.$index+$index);DrawTSCFChart($parent.$parent.$index);" ng-blur="checkLFDRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscfTabLargeA'+$parent.$parent.$index+$index);"><!-- end ngIf: tscfTableRow.large != "---" -->
                                                                <!-- ngIf: tscfTableRow.large != "---" --><input ng-if="tscfTableRow.large != &quot;---&quot;" type="checkbox" ng-show="tscfTableRow.switchLarge" id="aTablerow.checkL03" ng-model="tscfTableRow.checkL" ng-change="cancelTscfInput('largecheckL',$index, $parent.$parent.$index,tscfTableRow.readOnly,'aTablerow.checkL'+$parent.$parent.$index+$index);DrawTSCFChart($parent.$parent.$index);" class="ng-scope ng-pristine ng-valid ng-hide"><!-- end ngIf: tscfTableRow.large != "---" -->
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.normalization != '' --><span ng-if="tscfTableRow.normalization != ''" class="ng-binding ng-scope">0.854</span><!-- end ngIf: tscfTableRow.normalization != '' -->
                                                        </td>
                                                        <td>
                                                                <span class="padding-left-10">
                                                                    <input class="form-control ng-pristine ng-valid" type="text" id="tscf203" tabindex="6" ng-model="tscfTableRow.tscf" onblur="keepDecimal(this.id, 3);" ng-disabled="(tscfTableRow.readOnly&amp;&amp;(!tscfTableRow.checkS))" ng-change="DrawTSCFChart($parent.$index);checkNonApexTSCFRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscf2'+$parent.$index+$index);" ng-blur="checkLFDRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscf2'+$parent.$index+$index);">
                                                                </span>
                                                        </td>
                                                    </tr><!-- end ngRepeat: tscfTableRow in tscfTableRows[$index] --><tr ng-repeat="tscfTableRow in tscfTableRows[$index]" class="ng-scope">
                                                        <td>
                                                                <span class="padding-left-37 ng-binding">5×5
                                                                    <i class="icon-remove cursor-pointer ng-hide" ng-show="delete&amp;&amp;!tscfTableRow.deleteIcon" ng-click="deleteTscfRow($parent.$index, tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB);DrawTSCFChart($parent.$index);"></i>
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.small == "---" -->
                                                            <span class="padding-left-10">
                                                                    <!-- ngIf: tscfTableRow.small != "---" --><input class="form-control ng-scope ng-pristine ng-valid" ng-if="tscfTableRow.small != &quot;---&quot;" type="text" tabindex="4" id="tscfTabSmallA04" ng-model="tscfTableRow.small" onblur="keepDecimal(this.id, 3);" ng-disabled="(tscfTableRow.readOnly&amp;&amp;(!tscfTableRow.checkS))" ng-change="normalize($parent.$parent.$index);DrawTSCFChart($parent.$parent.$index);checkNonApexTSCFRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscfTabSmallA'+$parent.$parent.$index+$index);" ng-blur="checkLFDRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscfTabSmallA'+$parent.$parent.$index+$index);"><!-- end ngIf: tscfTableRow.small != "---" -->
                                                                <!-- ngIf: tscfTableRow.small != "---" --><input type="checkbox" ng-if="tscfTableRow.small != &quot;---&quot;" ng-show="tscfTableRow.switchSmall" id="aTablerow.checkS04" ng-model="tscfTableRow.checkS" ng-change="cancelTscfInput('smallcheckS', $index, $parent.$parent.$index,tscfTableRow.readOnly,'aTablerow.checkS'+$parent.$parent.$index+$index);DrawTSCFChart($parent.$parent.$index)" class="ng-scope ng-pristine ng-valid ng-hide"><!-- end ngIf: tscfTableRow.small != "---" -->
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.large == "---" -->
                                                            <span class="padding-left-10">
                                                                    <!-- ngIf: tscfTableRow.large != "---" --><input class="form-control ng-scope ng-pristine ng-valid" ng-if="tscfTableRow.large != &quot;---&quot;" type="text" ng-model="tscfTableRow.large" tabindex="5" id="tscfTabLargeA04" onblur="keepDecimal(this.id, 3);" ng-disabled="(tscfTableRow.readOnly&amp;&amp;(!tscfTableRow.checkL)) " ng-change="normalize($parent.$parent.$index);checkNonApexTSCFRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscfTabLargeA'+$parent.$parent.$index+$index);DrawTSCFChart($parent.$parent.$index);" ng-blur="checkLFDRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscfTabLargeA'+$parent.$parent.$index+$index);"><!-- end ngIf: tscfTableRow.large != "---" -->
                                                                <!-- ngIf: tscfTableRow.large != "---" --><input ng-if="tscfTableRow.large != &quot;---&quot;" type="checkbox" ng-show="tscfTableRow.switchLarge" id="aTablerow.checkL04" ng-model="tscfTableRow.checkL" ng-change="cancelTscfInput('largecheckL',$index, $parent.$parent.$index,tscfTableRow.readOnly,'aTablerow.checkL'+$parent.$parent.$index+$index);DrawTSCFChart($parent.$parent.$index);" class="ng-scope ng-pristine ng-valid ng-hide"><!-- end ngIf: tscfTableRow.large != "---" -->
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.normalization != '' --><span ng-if="tscfTableRow.normalization != ''" class="ng-binding ng-scope">0.885</span><!-- end ngIf: tscfTableRow.normalization != '' -->
                                                        </td>
                                                        <td>
                                                                <span class="padding-left-10">
                                                                    <input class="form-control ng-pristine ng-valid" type="text" id="tscf204" tabindex="6" ng-model="tscfTableRow.tscf" onblur="keepDecimal(this.id, 3);" ng-disabled="(tscfTableRow.readOnly&amp;&amp;(!tscfTableRow.checkS))" ng-change="DrawTSCFChart($parent.$index);checkNonApexTSCFRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscf2'+$parent.$index+$index);" ng-blur="checkLFDRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscf2'+$parent.$index+$index);">
                                                                </span>
                                                        </td>
                                                    </tr><!-- end ngRepeat: tscfTableRow in tscfTableRows[$index] --><tr ng-repeat="tscfTableRow in tscfTableRows[$index]" class="ng-scope">
                                                        <td>
                                                                <span class="padding-left-37 ng-binding">7×7
                                                                    <i class="icon-remove cursor-pointer ng-hide" ng-show="delete&amp;&amp;!tscfTableRow.deleteIcon" ng-click="deleteTscfRow($parent.$index, tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB);DrawTSCFChart($parent.$index);"></i>
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.small == "---" --><span class="padding-left-40 ng-binding ng-scope" ng-if="tscfTableRow.small == &quot;---&quot;">---</span><!-- end ngIf: tscfTableRow.small == "---" -->
                                                            <span class="padding-left-10">
                                                                    <!-- ngIf: tscfTableRow.small != "---" -->
                                                                <!-- ngIf: tscfTableRow.small != "---" -->
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.large == "---" -->
                                                            <span class="padding-left-10">
                                                                    <!-- ngIf: tscfTableRow.large != "---" --><input class="form-control ng-scope ng-pristine ng-valid" ng-if="tscfTableRow.large != &quot;---&quot;" type="text" ng-model="tscfTableRow.large" tabindex="5" id="tscfTabLargeA05" onblur="keepDecimal(this.id, 3);" ng-disabled="(tscfTableRow.readOnly&amp;&amp;(!tscfTableRow.checkL)) " ng-change="normalize($parent.$parent.$index);checkNonApexTSCFRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscfTabLargeA'+$parent.$parent.$index+$index);DrawTSCFChart($parent.$parent.$index);" ng-blur="checkLFDRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscfTabLargeA'+$parent.$parent.$index+$index);"><!-- end ngIf: tscfTableRow.large != "---" -->
                                                                <!-- ngIf: tscfTableRow.large != "---" --><input ng-if="tscfTableRow.large != &quot;---&quot;" type="checkbox" ng-show="tscfTableRow.switchLarge" id="aTablerow.checkL05" ng-model="tscfTableRow.checkL" ng-change="cancelTscfInput('largecheckL',$index, $parent.$parent.$index,tscfTableRow.readOnly,'aTablerow.checkL'+$parent.$parent.$index+$index);DrawTSCFChart($parent.$parent.$index);" class="ng-scope ng-pristine ng-valid ng-hide"><!-- end ngIf: tscfTableRow.large != "---" -->
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.normalization != '' --><span ng-if="tscfTableRow.normalization != ''" class="ng-binding ng-scope">0.937</span><!-- end ngIf: tscfTableRow.normalization != '' -->
                                                        </td>
                                                        <td>
                                                                <span class="padding-left-10">
                                                                    <input class="form-control ng-pristine ng-valid" type="text" id="tscf205" tabindex="6" ng-model="tscfTableRow.tscf" onblur="keepDecimal(this.id, 3);" ng-disabled="(tscfTableRow.readOnly&amp;&amp;(!tscfTableRow.checkS))" ng-change="DrawTSCFChart($parent.$index);checkNonApexTSCFRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscf2'+$parent.$index+$index);" ng-blur="checkLFDRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscf2'+$parent.$index+$index);">
                                                                </span>
                                                        </td>
                                                    </tr><!-- end ngRepeat: tscfTableRow in tscfTableRows[$index] --><tr ng-repeat="tscfTableRow in tscfTableRows[$index]" class="ng-scope">
                                                        <td>
                                                                <span class="padding-left-37 ng-binding">10×10
                                                                    <i class="icon-remove cursor-pointer ng-hide" ng-show="delete&amp;&amp;!tscfTableRow.deleteIcon" ng-click="deleteTscfRow($parent.$index, tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB);DrawTSCFChart($parent.$index);"></i>
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.small == "---" -->
                                                            <span class="padding-left-10">
                                                                    <!-- ngIf: tscfTableRow.small != "---" --><input class="form-control ng-scope ng-pristine ng-valid" ng-if="tscfTableRow.small != &quot;---&quot;" type="text" tabindex="4" id="tscfTabSmallA06" ng-model="tscfTableRow.small" onblur="keepDecimal(this.id, 3);" ng-disabled="(tscfTableRow.readOnly&amp;&amp;(!tscfTableRow.checkS))" ng-change="normalize($parent.$parent.$index);DrawTSCFChart($parent.$parent.$index);checkNonApexTSCFRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscfTabSmallA'+$parent.$parent.$index+$index);" ng-blur="checkLFDRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscfTabSmallA'+$parent.$parent.$index+$index);" disabled="disabled"><!-- end ngIf: tscfTableRow.small != "---" -->
                                                                <!-- ngIf: tscfTableRow.small != "---" --><input type="checkbox" ng-if="tscfTableRow.small != &quot;---&quot;" ng-show="tscfTableRow.switchSmall" id="aTablerow.checkS06" ng-model="tscfTableRow.checkS" ng-change="cancelTscfInput('smallcheckS', $index, $parent.$parent.$index,tscfTableRow.readOnly,'aTablerow.checkS'+$parent.$parent.$index+$index);DrawTSCFChart($parent.$parent.$index)" class="ng-scope ng-pristine ng-valid ng-hide"><!-- end ngIf: tscfTableRow.small != "---" -->
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.large == "---" -->
                                                            <span class="padding-left-10">
                                                                    <!-- ngIf: tscfTableRow.large != "---" --><input class="form-control ng-scope ng-pristine ng-valid" ng-if="tscfTableRow.large != &quot;---&quot;" type="text" ng-model="tscfTableRow.large" tabindex="5" id="tscfTabLargeA06" onblur="keepDecimal(this.id, 3);" ng-disabled="(tscfTableRow.readOnly&amp;&amp;(!tscfTableRow.checkL)) " ng-change="normalize($parent.$parent.$index);checkNonApexTSCFRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscfTabLargeA'+$parent.$parent.$index+$index);DrawTSCFChart($parent.$parent.$index);" ng-blur="checkLFDRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscfTabLargeA'+$parent.$parent.$index+$index);" disabled="disabled"><!-- end ngIf: tscfTableRow.large != "---" -->
                                                                <!-- ngIf: tscfTableRow.large != "---" --><input ng-if="tscfTableRow.large != &quot;---&quot;" type="checkbox" ng-show="tscfTableRow.switchLarge" id="aTablerow.checkL06" ng-model="tscfTableRow.checkL" ng-change="cancelTscfInput('largecheckL',$index, $parent.$parent.$index,tscfTableRow.readOnly,'aTablerow.checkL'+$parent.$parent.$index+$index);DrawTSCFChart($parent.$parent.$index);" class="ng-scope ng-pristine ng-valid ng-hide"><!-- end ngIf: tscfTableRow.large != "---" -->
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.normalization != '' --><span ng-if="tscfTableRow.normalization != ''" class="ng-binding ng-scope">1.000</span><!-- end ngIf: tscfTableRow.normalization != '' -->
                                                        </td>
                                                        <td>
                                                                <span class="padding-left-10">
                                                                    <input class="form-control ng-pristine ng-valid" type="text" id="tscf206" tabindex="6" ng-model="tscfTableRow.tscf" onblur="keepDecimal(this.id, 3);" ng-disabled="(tscfTableRow.readOnly&amp;&amp;(!tscfTableRow.checkS))" ng-change="DrawTSCFChart($parent.$index);checkNonApexTSCFRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscf2'+$parent.$index+$index);" ng-blur="checkLFDRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscf2'+$parent.$index+$index);" disabled="disabled">
                                                                </span>
                                                        </td>
                                                    </tr><!-- end ngRepeat: tscfTableRow in tscfTableRows[$index] --><tr ng-repeat="tscfTableRow in tscfTableRows[$index]" class="ng-scope">
                                                        <td>
                                                                <span class="padding-left-37 ng-binding">15×15
                                                                    <i class="icon-remove cursor-pointer ng-hide" ng-show="delete&amp;&amp;!tscfTableRow.deleteIcon" ng-click="deleteTscfRow($parent.$index, tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB);DrawTSCFChart($parent.$index);"></i>
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.small == "---" --><span class="padding-left-40 ng-binding ng-scope" ng-if="tscfTableRow.small == &quot;---&quot;">---</span><!-- end ngIf: tscfTableRow.small == "---" -->
                                                            <span class="padding-left-10">
                                                                    <!-- ngIf: tscfTableRow.small != "---" -->
                                                                <!-- ngIf: tscfTableRow.small != "---" -->
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.large == "---" -->
                                                            <span class="padding-left-10">
                                                                    <!-- ngIf: tscfTableRow.large != "---" --><input class="form-control ng-scope ng-pristine ng-valid" ng-if="tscfTableRow.large != &quot;---&quot;" type="text" ng-model="tscfTableRow.large" tabindex="5" id="tscfTabLargeA07" onblur="keepDecimal(this.id, 3);" ng-disabled="(tscfTableRow.readOnly&amp;&amp;(!tscfTableRow.checkL)) " ng-change="normalize($parent.$parent.$index);checkNonApexTSCFRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscfTabLargeA'+$parent.$parent.$index+$index);DrawTSCFChart($parent.$parent.$index);" ng-blur="checkLFDRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscfTabLargeA'+$parent.$parent.$index+$index);"><!-- end ngIf: tscfTableRow.large != "---" -->
                                                                <!-- ngIf: tscfTableRow.large != "---" --><input ng-if="tscfTableRow.large != &quot;---&quot;" type="checkbox" ng-show="tscfTableRow.switchLarge" id="aTablerow.checkL07" ng-model="tscfTableRow.checkL" ng-change="cancelTscfInput('largecheckL',$index, $parent.$parent.$index,tscfTableRow.readOnly,'aTablerow.checkL'+$parent.$parent.$index+$index);DrawTSCFChart($parent.$parent.$index);" class="ng-scope ng-pristine ng-valid ng-hide"><!-- end ngIf: tscfTableRow.large != "---" -->
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.normalization != '' --><span ng-if="tscfTableRow.normalization != ''" class="ng-binding ng-scope">1.068</span><!-- end ngIf: tscfTableRow.normalization != '' -->
                                                        </td>
                                                        <td>
                                                                <span class="padding-left-10">
                                                                    <input class="form-control ng-pristine ng-valid" type="text" id="tscf207" tabindex="6" ng-model="tscfTableRow.tscf" onblur="keepDecimal(this.id, 3);" ng-disabled="(tscfTableRow.readOnly&amp;&amp;(!tscfTableRow.checkS))" ng-change="DrawTSCFChart($parent.$index);checkNonApexTSCFRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscf2'+$parent.$index+$index);" ng-blur="checkLFDRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscf2'+$parent.$index+$index);">
                                                                </span>
                                                        </td>
                                                    </tr><!-- end ngRepeat: tscfTableRow in tscfTableRows[$index] --><tr ng-repeat="tscfTableRow in tscfTableRows[$index]" class="ng-scope">
                                                        <td>
                                                                <span class="padding-left-37 ng-binding">20×20
                                                                    <i class="icon-remove cursor-pointer ng-hide" ng-show="delete&amp;&amp;!tscfTableRow.deleteIcon" ng-click="deleteTscfRow($parent.$index, tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB);DrawTSCFChart($parent.$index);"></i>
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.small == "---" --><span class="padding-left-40 ng-binding ng-scope" ng-if="tscfTableRow.small == &quot;---&quot;">---</span><!-- end ngIf: tscfTableRow.small == "---" -->
                                                            <span class="padding-left-10">
                                                                    <!-- ngIf: tscfTableRow.small != "---" -->
                                                                <!-- ngIf: tscfTableRow.small != "---" -->
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.large == "---" -->
                                                            <span class="padding-left-10">
                                                                    <!-- ngIf: tscfTableRow.large != "---" --><input class="form-control ng-scope ng-pristine ng-valid" ng-if="tscfTableRow.large != &quot;---&quot;" type="text" ng-model="tscfTableRow.large" tabindex="5" id="tscfTabLargeA08" onblur="keepDecimal(this.id, 3);" ng-disabled="(tscfTableRow.readOnly&amp;&amp;(!tscfTableRow.checkL)) " ng-change="normalize($parent.$parent.$index);checkNonApexTSCFRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscfTabLargeA'+$parent.$parent.$index+$index);DrawTSCFChart($parent.$parent.$index);" ng-blur="checkLFDRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscfTabLargeA'+$parent.$parent.$index+$index);"><!-- end ngIf: tscfTableRow.large != "---" -->
                                                                <!-- ngIf: tscfTableRow.large != "---" --><input ng-if="tscfTableRow.large != &quot;---&quot;" type="checkbox" ng-show="tscfTableRow.switchLarge" id="aTablerow.checkL08" ng-model="tscfTableRow.checkL" ng-change="cancelTscfInput('largecheckL',$index, $parent.$parent.$index,tscfTableRow.readOnly,'aTablerow.checkL'+$parent.$parent.$index+$index);DrawTSCFChart($parent.$parent.$index);" class="ng-scope ng-pristine ng-valid ng-hide"><!-- end ngIf: tscfTableRow.large != "---" -->
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.normalization != '' --><span ng-if="tscfTableRow.normalization != ''" class="ng-binding ng-scope">1.118</span><!-- end ngIf: tscfTableRow.normalization != '' -->
                                                        </td>
                                                        <td>
                                                                <span class="padding-left-10">
                                                                    <input class="form-control ng-pristine ng-valid" type="text" id="tscf208" tabindex="6" ng-model="tscfTableRow.tscf" onblur="keepDecimal(this.id, 3);" ng-disabled="(tscfTableRow.readOnly&amp;&amp;(!tscfTableRow.checkS))" ng-change="DrawTSCFChart($parent.$index);checkNonApexTSCFRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscf2'+$parent.$index+$index);" ng-blur="checkLFDRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscf2'+$parent.$index+$index);">
                                                                </span>
                                                        </td>
                                                    </tr><!-- end ngRepeat: tscfTableRow in tscfTableRows[$index] --><tr ng-repeat="tscfTableRow in tscfTableRows[$index]" class="ng-scope">
                                                        <td>
                                                                <span class="padding-left-37 ng-binding">30×30
                                                                    <i class="icon-remove cursor-pointer ng-hide" ng-show="delete&amp;&amp;!tscfTableRow.deleteIcon" ng-click="deleteTscfRow($parent.$index, tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB);DrawTSCFChart($parent.$index);"></i>
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.small == "---" --><span class="padding-left-40 ng-binding ng-scope" ng-if="tscfTableRow.small == &quot;---&quot;">---</span><!-- end ngIf: tscfTableRow.small == "---" -->
                                                            <span class="padding-left-10">
                                                                    <!-- ngIf: tscfTableRow.small != "---" -->
                                                                <!-- ngIf: tscfTableRow.small != "---" -->
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.large == "---" -->
                                                            <span class="padding-left-10">
                                                                    <!-- ngIf: tscfTableRow.large != "---" --><input class="form-control ng-scope ng-pristine ng-valid" ng-if="tscfTableRow.large != &quot;---&quot;" type="text" ng-model="tscfTableRow.large" tabindex="5" id="tscfTabLargeA09" onblur="keepDecimal(this.id, 3);" ng-disabled="(tscfTableRow.readOnly&amp;&amp;(!tscfTableRow.checkL)) " ng-change="normalize($parent.$parent.$index);checkNonApexTSCFRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscfTabLargeA'+$parent.$parent.$index+$index);DrawTSCFChart($parent.$parent.$index);" ng-blur="checkLFDRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscfTabLargeA'+$parent.$parent.$index+$index);"><!-- end ngIf: tscfTableRow.large != "---" -->
                                                                <!-- ngIf: tscfTableRow.large != "---" --><input ng-if="tscfTableRow.large != &quot;---&quot;" type="checkbox" ng-show="tscfTableRow.switchLarge" id="aTablerow.checkL09" ng-model="tscfTableRow.checkL" ng-change="cancelTscfInput('largecheckL',$index, $parent.$parent.$index,tscfTableRow.readOnly,'aTablerow.checkL'+$parent.$parent.$index+$index);DrawTSCFChart($parent.$parent.$index);" class="ng-scope ng-pristine ng-valid ng-hide"><!-- end ngIf: tscfTableRow.large != "---" -->
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.normalization != '' --><span ng-if="tscfTableRow.normalization != ''" class="ng-binding ng-scope">1.175</span><!-- end ngIf: tscfTableRow.normalization != '' -->
                                                        </td>
                                                        <td>
                                                                <span class="padding-left-10">
                                                                    <input class="form-control ng-pristine ng-valid" type="text" id="tscf209" tabindex="6" ng-model="tscfTableRow.tscf" onblur="keepDecimal(this.id, 3);" ng-disabled="(tscfTableRow.readOnly&amp;&amp;(!tscfTableRow.checkS))" ng-change="DrawTSCFChart($parent.$index);checkNonApexTSCFRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscf2'+$parent.$index+$index);" ng-blur="checkLFDRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscf2'+$parent.$index+$index);">
                                                                </span>
                                                        </td>
                                                    </tr><!-- end ngRepeat: tscfTableRow in tscfTableRows[$index] --><tr ng-repeat="tscfTableRow in tscfTableRows[$index]" class="ng-scope">
                                                        <td>
                                                                <span class="padding-left-37 ng-binding">40×40
                                                                    <i class="icon-remove cursor-pointer ng-hide" ng-show="delete&amp;&amp;!tscfTableRow.deleteIcon" ng-click="deleteTscfRow($parent.$index, tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB);DrawTSCFChart($parent.$index);"></i>
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.small == "---" --><span class="padding-left-40 ng-binding ng-scope" ng-if="tscfTableRow.small == &quot;---&quot;">---</span><!-- end ngIf: tscfTableRow.small == "---" -->
                                                            <span class="padding-left-10">
                                                                    <!-- ngIf: tscfTableRow.small != "---" -->
                                                                <!-- ngIf: tscfTableRow.small != "---" -->
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.large == "---" -->
                                                            <span class="padding-left-10">
                                                                    <!-- ngIf: tscfTableRow.large != "---" --><input class="form-control ng-scope ng-pristine ng-valid" ng-if="tscfTableRow.large != &quot;---&quot;" type="text" ng-model="tscfTableRow.large" tabindex="5" id="tscfTabLargeA010" onblur="keepDecimal(this.id, 3);" ng-disabled="(tscfTableRow.readOnly&amp;&amp;(!tscfTableRow.checkL)) " ng-change="normalize($parent.$parent.$index);checkNonApexTSCFRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscfTabLargeA'+$parent.$parent.$index+$index);DrawTSCFChart($parent.$parent.$index);" ng-blur="checkLFDRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscfTabLargeA'+$parent.$parent.$index+$index);"><!-- end ngIf: tscfTableRow.large != "---" -->
                                                                <!-- ngIf: tscfTableRow.large != "---" --><input ng-if="tscfTableRow.large != &quot;---&quot;" type="checkbox" ng-show="tscfTableRow.switchLarge" id="aTablerow.checkL010" ng-model="tscfTableRow.checkL" ng-change="cancelTscfInput('largecheckL',$index, $parent.$parent.$index,tscfTableRow.readOnly,'aTablerow.checkL'+$parent.$parent.$index+$index);DrawTSCFChart($parent.$parent.$index);" class="ng-scope ng-pristine ng-valid ng-hide"><!-- end ngIf: tscfTableRow.large != "---" -->
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.normalization != '' --><span ng-if="tscfTableRow.normalization != ''" class="ng-binding ng-scope">1.201</span><!-- end ngIf: tscfTableRow.normalization != '' -->
                                                        </td>
                                                        <td>
                                                                <span class="padding-left-10">
                                                                    <input class="form-control ng-pristine ng-valid" type="text" id="tscf2010" tabindex="6" ng-model="tscfTableRow.tscf" onblur="keepDecimal(this.id, 3);" ng-disabled="(tscfTableRow.readOnly&amp;&amp;(!tscfTableRow.checkS))" ng-change="DrawTSCFChart($parent.$index);checkNonApexTSCFRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscf2'+$parent.$index+$index);" ng-blur="checkLFDRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscf2'+$parent.$index+$index);">
                                                                </span>
                                                        </td>
                                                    </tr><!-- end ngRepeat: tscfTableRow in tscfTableRows[$index] --><tr ng-repeat="tscfTableRow in tscfTableRows[$index]" class="ng-scope">
                                                        <td>
                                                                <span class="padding-left-37 ng-binding">5×40
                                                                    <i class="icon-remove cursor-pointer ng-hide" ng-show="delete&amp;&amp;!tscfTableRow.deleteIcon" ng-click="deleteTscfRow($parent.$index, tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB);DrawTSCFChart($parent.$index);"></i>
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.small == "---" --><span class="padding-left-40 ng-binding ng-scope" ng-if="tscfTableRow.small == &quot;---&quot;">---</span><!-- end ngIf: tscfTableRow.small == "---" -->
                                                            <span class="padding-left-10">
                                                                    <!-- ngIf: tscfTableRow.small != "---" -->
                                                                <!-- ngIf: tscfTableRow.small != "---" -->
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.large == "---" -->
                                                            <span class="padding-left-10">
                                                                    <!-- ngIf: tscfTableRow.large != "---" --><input class="form-control ng-scope ng-pristine ng-valid" ng-if="tscfTableRow.large != &quot;---&quot;" type="text" ng-model="tscfTableRow.large" tabindex="5" id="tscfTabLargeA011" onblur="keepDecimal(this.id, 3);" ng-disabled="(tscfTableRow.readOnly&amp;&amp;(!tscfTableRow.checkL)) " ng-change="normalize($parent.$parent.$index);checkNonApexTSCFRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscfTabLargeA'+$parent.$parent.$index+$index);DrawTSCFChart($parent.$parent.$index);" ng-blur="checkLFDRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscfTabLargeA'+$parent.$parent.$index+$index);"><!-- end ngIf: tscfTableRow.large != "---" -->
                                                                <!-- ngIf: tscfTableRow.large != "---" --><input ng-if="tscfTableRow.large != &quot;---&quot;" type="checkbox" ng-show="tscfTableRow.switchLarge" id="aTablerow.checkL011" ng-model="tscfTableRow.checkL" ng-change="cancelTscfInput('largecheckL',$index, $parent.$parent.$index,tscfTableRow.readOnly,'aTablerow.checkL'+$parent.$parent.$index+$index);DrawTSCFChart($parent.$parent.$index);" class="ng-scope ng-pristine ng-valid ng-hide"><!-- end ngIf: tscfTableRow.large != "---" -->
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.normalization != '' --><span ng-if="tscfTableRow.normalization != ''" class="ng-binding ng-scope">0.969</span><!-- end ngIf: tscfTableRow.normalization != '' -->
                                                        </td>
                                                        <td>
                                                                <span class="padding-left-10">
                                                                    <input class="form-control ng-pristine ng-valid" type="text" id="tscf2011" tabindex="6" ng-model="tscfTableRow.tscf" onblur="keepDecimal(this.id, 3);" ng-disabled="(tscfTableRow.readOnly&amp;&amp;(!tscfTableRow.checkS))" ng-change="DrawTSCFChart($parent.$index);checkNonApexTSCFRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscf2'+$parent.$index+$index);" ng-blur="checkLFDRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscf2'+$parent.$index+$index);">
                                                                </span>
                                                        </td>
                                                    </tr><!-- end ngRepeat: tscfTableRow in tscfTableRows[$index] --><tr ng-repeat="tscfTableRow in tscfTableRows[$index]" class="ng-scope">
                                                        <td>
                                                                <span class="padding-left-37 ng-binding">40×5
                                                                    <i class="icon-remove cursor-pointer ng-hide" ng-show="delete&amp;&amp;!tscfTableRow.deleteIcon" ng-click="deleteTscfRow($parent.$index, tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB);DrawTSCFChart($parent.$index);"></i>
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.small == "---" --><span class="padding-left-40 ng-binding ng-scope" ng-if="tscfTableRow.small == &quot;---&quot;">---</span><!-- end ngIf: tscfTableRow.small == "---" -->
                                                            <span class="padding-left-10">
                                                                    <!-- ngIf: tscfTableRow.small != "---" -->
                                                                <!-- ngIf: tscfTableRow.small != "---" -->
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.large == "---" -->
                                                            <span class="padding-left-10">
                                                                    <!-- ngIf: tscfTableRow.large != "---" --><input class="form-control ng-scope ng-pristine ng-valid" ng-if="tscfTableRow.large != &quot;---&quot;" type="text" ng-model="tscfTableRow.large" tabindex="5" id="tscfTabLargeA012" onblur="keepDecimal(this.id, 3);" ng-disabled="(tscfTableRow.readOnly&amp;&amp;(!tscfTableRow.checkL)) " ng-change="normalize($parent.$parent.$index);checkNonApexTSCFRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscfTabLargeA'+$parent.$parent.$index+$index);DrawTSCFChart($parent.$parent.$index);" ng-blur="checkLFDRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscfTabLargeA'+$parent.$parent.$index+$index);"><!-- end ngIf: tscfTableRow.large != "---" -->
                                                                <!-- ngIf: tscfTableRow.large != "---" --><input ng-if="tscfTableRow.large != &quot;---&quot;" type="checkbox" ng-show="tscfTableRow.switchLarge" id="aTablerow.checkL012" ng-model="tscfTableRow.checkL" ng-change="cancelTscfInput('largecheckL',$index, $parent.$parent.$index,tscfTableRow.readOnly,'aTablerow.checkL'+$parent.$parent.$index+$index);DrawTSCFChart($parent.$parent.$index);" class="ng-scope ng-pristine ng-valid ng-hide"><!-- end ngIf: tscfTableRow.large != "---" -->
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.normalization != '' --><span ng-if="tscfTableRow.normalization != ''" class="ng-binding ng-scope">0.963</span><!-- end ngIf: tscfTableRow.normalization != '' -->
                                                        </td>
                                                        <td>
                                                                <span class="padding-left-10">
                                                                    <input class="form-control ng-pristine ng-valid" type="text" id="tscf2012" tabindex="6" ng-model="tscfTableRow.tscf" onblur="keepDecimal(this.id, 3);" ng-disabled="(tscfTableRow.readOnly&amp;&amp;(!tscfTableRow.checkS))" ng-change="DrawTSCFChart($parent.$index);checkNonApexTSCFRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscf2'+$parent.$index+$index);" ng-blur="checkLFDRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscf2'+$parent.$index+$index);">
                                                                </span>
                                                        </td>
                                                    </tr><!-- end ngRepeat: tscfTableRow in tscfTableRows[$index] -->
                                                    <!-- ngRepeat: newRow in tscfTableNew[$index] -->
                                                    </tbody>
                                                </table><!-- end ngIf: detectors == 2 -->
                                                <!-- ngIf: detectors == 1 -->
                                            </div>
                                            <div class="col-md-6">
                                                <div class="widget-box">
                                                    <div class="widget-title">
                                                        <span class="icon">
                                                            <i class="icon-align-justify"></i>
                                                        </span>
                                                        <h5>Graph</h5>
                                                    </div>
                                                    <div class="pull-left top15">
                                                        <img src="img\OF at Ref Depth.png">
                                                    </div>
                                                    <div class="widget-content">
                                                        <div class="chart-500" id="tscfChart0"></div>
                                                    </div>
                                                    <div class="col-md-12 padding-left-50">
                                                        <div class="font1">Field Size (cm)</div>
                                                        <br>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end ngRepeat: photon in photons --><div ng-class="divStyle[$index]" ng-repeat="photon in photons" id="tabenergy1" class="ng-scope tab-pane">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12" ng-show="detectors == 2">
                                                <p class="top10p bot20p">
                                                    <span class="label label-info">Note !</span>
                                                    For 1x1, 3x3 and newly added field sizes, use the checkbox to include or exclude a measured value.
                                                </p>
                                            </div>
                                            <div class="col-md-12 ng-hide" ng-show="detectors == 1">
                                                <p class="top10p">
                                                    <span class="label label-info">Note !</span>
                                                    For 1x1 and newly added field sizes, use the checkbox to include or exclude a measured value.
                                                </p>
                                            </div>
                                            <div class="col-md-12 bot20p">
                                                <!-- ngIf: detectors == 2 --><div ng-if="detectors == 2" class="ng-scope">
                                                    Choose the field size as normalization reference to normalize the Scps from the two detectors:&nbsp;
                                                    <select class="form-control width-10 ng-pristine ng-valid" id="normalization1" tabindex="3" ng-model="normalization[$index]" ng-options="s for s in normalStandard" ng-change="normalize($index);DrawTSCFChart($index);"><option value="0" selected="selected">4x4</option><option value="1">5x5</option></select>
                                                </div><!-- end ngIf: detectors == 2 -->
                                            </div>
                                            <div class="col-md-6" id="collapsedTscfTable">
                                                <div class="pull-right">
                                                    <button class="btn btn-primary btn-sm" ng-click="addTSCFField();">
                                                        <i class="icon-plus icon-white"></i> Add Row
                                                    </button>
                                                    <button type="button" class="btn btn-primary btn-sm" ng-show="!delete" ng-click="delete=true;">
                                                        <i class="icon-remove icon-white"></i> Delete Row
                                                    </button>
                                                    <button type="button" class="btn btn-primary btn-sm ng-hide" ng-show="delete" ng-click="delete=false">
                                                        <i class="icon-ok icon-white"></i> Exit Deletion
                                                    </button>
                                                </div>
                                                <!-- ngIf: detectors == 2 --><table class="table table-bordered widget-box ng-scope" id="photonTSCF21" ng-if="detectors == 2">
                                                    <tbody id="TSCFFieldSize21">
                                                    <tr>
                                                        <th class="width-30">Field Size (cm)
                                                            <a class="tooltip-demo" data-toggle="tooltip" data-placement="top" title="Field size is defined at surface when SSD = 100 cm; Field size is defined at isocenter distance when SSD = 90 cm ">&nbsp;
                                                                <i class="icon-exclamation-sign"></i>
                                                            </a>
                                                        </th>
                                                        <th class="width-20">Small Detector</th>
                                                        <th class="width-20">Large Detector</th>
                                                        <th class="width-10">Normalized</th>
                                                        <th class="width-20">Final Scp</th>
                                                    </tr>
                                                    <!-- ngRepeat: tscfTableRow in tscfTableRows[$index] --><tr ng-repeat="tscfTableRow in tscfTableRows[$index]" class="ng-scope">
                                                        <td>
                                                                <span class="padding-left-37 ng-binding">1×1
                                                                    <i class="icon-remove cursor-pointer ng-hide" ng-show="delete&amp;&amp;!tscfTableRow.deleteIcon" ng-click="deleteTscfRow($parent.$index, tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB);DrawTSCFChart($parent.$index);"></i>
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.small == "---" -->
                                                            <span class="padding-left-10">
                                                                    <!-- ngIf: tscfTableRow.small != "---" --><input class="form-control ng-scope ng-pristine ng-valid" ng-if="tscfTableRow.small != &quot;---&quot;" type="text" tabindex="4" id="tscfTabSmallA10" ng-model="tscfTableRow.small" onblur="keepDecimal(this.id, 3);" ng-disabled="(tscfTableRow.readOnly&amp;&amp;(!tscfTableRow.checkS))" ng-change="normalize($parent.$parent.$index);DrawTSCFChart($parent.$parent.$index);checkNonApexTSCFRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscfTabSmallA'+$parent.$parent.$index+$index);" ng-blur="checkLFDRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscfTabSmallA'+$parent.$parent.$index+$index);"><!-- end ngIf: tscfTableRow.small != "---" -->
                                                                <!-- ngIf: tscfTableRow.small != "---" --><input type="checkbox" ng-if="tscfTableRow.small != &quot;---&quot;" ng-show="tscfTableRow.switchSmall" id="aTablerow.checkS10" ng-model="tscfTableRow.checkS" ng-change="cancelTscfInput('smallcheckS', $index, $parent.$parent.$index,tscfTableRow.readOnly,'aTablerow.checkS'+$parent.$parent.$index+$index);DrawTSCFChart($parent.$parent.$index)" class="ng-scope ng-pristine ng-valid"><!-- end ngIf: tscfTableRow.small != "---" -->
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.large == "---" --><span class="padding-left-40 ng-binding ng-scope" ng-if="tscfTableRow.large == &quot;---&quot;">---</span><!-- end ngIf: tscfTableRow.large == "---" -->
                                                            <span class="padding-left-10">
                                                                    <!-- ngIf: tscfTableRow.large != "---" -->
                                                                <!-- ngIf: tscfTableRow.large != "---" -->
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.normalization != '' --><span ng-if="tscfTableRow.normalization != ''" class="ng-binding ng-scope">0.653</span><!-- end ngIf: tscfTableRow.normalization != '' -->
                                                        </td>
                                                        <td>
                                                                <span class="padding-left-10">
                                                                    <input class="form-control ng-pristine ng-valid" type="text" id="tscf210" tabindex="6" ng-model="tscfTableRow.tscf" onblur="keepDecimal(this.id, 3);" ng-disabled="(tscfTableRow.readOnly&amp;&amp;(!tscfTableRow.checkS))" ng-change="DrawTSCFChart($parent.$index);checkNonApexTSCFRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscf2'+$parent.$index+$index);" ng-blur="checkLFDRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscf2'+$parent.$index+$index);">
                                                                </span>
                                                        </td>
                                                    </tr><!-- end ngRepeat: tscfTableRow in tscfTableRows[$index] --><tr ng-repeat="tscfTableRow in tscfTableRows[$index]" class="ng-scope">
                                                        <td>
                                                                <span class="padding-left-37 ng-binding">2×2
                                                                    <i class="icon-remove cursor-pointer ng-hide" ng-show="delete&amp;&amp;!tscfTableRow.deleteIcon" ng-click="deleteTscfRow($parent.$index, tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB);DrawTSCFChart($parent.$index);"></i>
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.small == "---" -->
                                                            <span class="padding-left-10">
                                                                    <!-- ngIf: tscfTableRow.small != "---" --><input class="form-control ng-scope ng-pristine ng-valid" ng-if="tscfTableRow.small != &quot;---&quot;" type="text" tabindex="4" id="tscfTabSmallA11" ng-model="tscfTableRow.small" onblur="keepDecimal(this.id, 3);" ng-disabled="(tscfTableRow.readOnly&amp;&amp;(!tscfTableRow.checkS))" ng-change="normalize($parent.$parent.$index);DrawTSCFChart($parent.$parent.$index);checkNonApexTSCFRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscfTabSmallA'+$parent.$parent.$index+$index);" ng-blur="checkLFDRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscfTabSmallA'+$parent.$parent.$index+$index);"><!-- end ngIf: tscfTableRow.small != "---" -->
                                                                <!-- ngIf: tscfTableRow.small != "---" --><input type="checkbox" ng-if="tscfTableRow.small != &quot;---&quot;" ng-show="tscfTableRow.switchSmall" id="aTablerow.checkS11" ng-model="tscfTableRow.checkS" ng-change="cancelTscfInput('smallcheckS', $index, $parent.$parent.$index,tscfTableRow.readOnly,'aTablerow.checkS'+$parent.$parent.$index+$index);DrawTSCFChart($parent.$parent.$index)" class="ng-scope ng-pristine ng-valid ng-hide"><!-- end ngIf: tscfTableRow.small != "---" -->
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.large == "---" --><span class="padding-left-40 ng-binding ng-scope" ng-if="tscfTableRow.large == &quot;---&quot;">---</span><!-- end ngIf: tscfTableRow.large == "---" -->
                                                            <span class="padding-left-10">
                                                                    <!-- ngIf: tscfTableRow.large != "---" -->
                                                                <!-- ngIf: tscfTableRow.large != "---" -->
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.normalization != '' --><span ng-if="tscfTableRow.normalization != ''" class="ng-binding ng-scope">0.800</span><!-- end ngIf: tscfTableRow.normalization != '' -->
                                                        </td>
                                                        <td>
                                                                <span class="padding-left-10">
                                                                    <input class="form-control ng-pristine ng-valid" type="text" id="tscf211" tabindex="6" ng-model="tscfTableRow.tscf" onblur="keepDecimal(this.id, 3);" ng-disabled="(tscfTableRow.readOnly&amp;&amp;(!tscfTableRow.checkS))" ng-change="DrawTSCFChart($parent.$index);checkNonApexTSCFRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscf2'+$parent.$index+$index);" ng-blur="checkLFDRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscf2'+$parent.$index+$index);">
                                                                </span>
                                                        </td>
                                                    </tr><!-- end ngRepeat: tscfTableRow in tscfTableRows[$index] --><tr ng-repeat="tscfTableRow in tscfTableRows[$index]" class="ng-scope">
                                                        <td>
                                                                <span class="padding-left-37 ng-binding">3×3
                                                                    <i class="icon-remove cursor-pointer ng-hide" ng-show="delete&amp;&amp;!tscfTableRow.deleteIcon" ng-click="deleteTscfRow($parent.$index, tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB);DrawTSCFChart($parent.$index);"></i>
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.small == "---" -->
                                                            <span class="padding-left-10">
                                                                    <!-- ngIf: tscfTableRow.small != "---" --><input class="form-control ng-scope ng-pristine ng-valid" ng-if="tscfTableRow.small != &quot;---&quot;" type="text" tabindex="4" id="tscfTabSmallA12" ng-model="tscfTableRow.small" onblur="keepDecimal(this.id, 3);" ng-disabled="(tscfTableRow.readOnly&amp;&amp;(!tscfTableRow.checkS))" ng-change="normalize($parent.$parent.$index);DrawTSCFChart($parent.$parent.$index);checkNonApexTSCFRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscfTabSmallA'+$parent.$parent.$index+$index);" ng-blur="checkLFDRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscfTabSmallA'+$parent.$parent.$index+$index);"><!-- end ngIf: tscfTableRow.small != "---" -->
                                                                <!-- ngIf: tscfTableRow.small != "---" --><input type="checkbox" ng-if="tscfTableRow.small != &quot;---&quot;" ng-show="tscfTableRow.switchSmall" id="aTablerow.checkS12" ng-model="tscfTableRow.checkS" ng-change="cancelTscfInput('smallcheckS', $index, $parent.$parent.$index,tscfTableRow.readOnly,'aTablerow.checkS'+$parent.$parent.$index+$index);DrawTSCFChart($parent.$parent.$index)" class="ng-scope ng-pristine ng-valid ng-hide"><!-- end ngIf: tscfTableRow.small != "---" -->
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.large == "---" -->
                                                            <span class="padding-left-10">
                                                                    <!-- ngIf: tscfTableRow.large != "---" --><input class="form-control ng-scope ng-pristine ng-valid" ng-if="tscfTableRow.large != &quot;---&quot;" type="text" ng-model="tscfTableRow.large" tabindex="5" id="tscfTabLargeA12" onblur="keepDecimal(this.id, 3);" ng-disabled="(tscfTableRow.readOnly&amp;&amp;(!tscfTableRow.checkL)) " ng-change="normalize($parent.$parent.$index);checkNonApexTSCFRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscfTabLargeA'+$parent.$parent.$index+$index);DrawTSCFChart($parent.$parent.$index);" ng-blur="checkLFDRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscfTabLargeA'+$parent.$parent.$index+$index);"><!-- end ngIf: tscfTableRow.large != "---" -->
                                                                <!-- ngIf: tscfTableRow.large != "---" --><input ng-if="tscfTableRow.large != &quot;---&quot;" type="checkbox" ng-show="tscfTableRow.switchLarge" id="aTablerow.checkL12" ng-model="tscfTableRow.checkL" ng-change="cancelTscfInput('largecheckL',$index, $parent.$parent.$index,tscfTableRow.readOnly,'aTablerow.checkL'+$parent.$parent.$index+$index);DrawTSCFChart($parent.$parent.$index);" class="ng-scope ng-pristine ng-valid"><!-- end ngIf: tscfTableRow.large != "---" -->
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.normalization != '' --><span ng-if="tscfTableRow.normalization != ''" class="ng-binding ng-scope">0.843</span><!-- end ngIf: tscfTableRow.normalization != '' -->
                                                        </td>
                                                        <td>
                                                                <span class="padding-left-10">
                                                                    <input class="form-control ng-pristine ng-valid" type="text" id="tscf212" tabindex="6" ng-model="tscfTableRow.tscf" onblur="keepDecimal(this.id, 3);" ng-disabled="(tscfTableRow.readOnly&amp;&amp;(!tscfTableRow.checkS))" ng-change="DrawTSCFChart($parent.$index);checkNonApexTSCFRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscf2'+$parent.$index+$index);" ng-blur="checkLFDRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscf2'+$parent.$index+$index);">
                                                                </span>
                                                        </td>
                                                    </tr><!-- end ngRepeat: tscfTableRow in tscfTableRows[$index] --><tr ng-repeat="tscfTableRow in tscfTableRows[$index]" class="ng-scope">
                                                        <td>
                                                                <span class="padding-left-37 ng-binding">4×4
                                                                    <i class="icon-remove cursor-pointer ng-hide" ng-show="delete&amp;&amp;!tscfTableRow.deleteIcon" ng-click="deleteTscfRow($parent.$index, tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB);DrawTSCFChart($parent.$index);"></i>
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.small == "---" -->
                                                            <span class="padding-left-10">
                                                                    <!-- ngIf: tscfTableRow.small != "---" --><input class="form-control ng-scope ng-pristine ng-valid" ng-if="tscfTableRow.small != &quot;---&quot;" type="text" tabindex="4" id="tscfTabSmallA13" ng-model="tscfTableRow.small" onblur="keepDecimal(this.id, 3);" ng-disabled="(tscfTableRow.readOnly&amp;&amp;(!tscfTableRow.checkS))" ng-change="normalize($parent.$parent.$index);DrawTSCFChart($parent.$parent.$index);checkNonApexTSCFRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscfTabSmallA'+$parent.$parent.$index+$index);" ng-blur="checkLFDRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscfTabSmallA'+$parent.$parent.$index+$index);"><!-- end ngIf: tscfTableRow.small != "---" -->
                                                                <!-- ngIf: tscfTableRow.small != "---" --><input type="checkbox" ng-if="tscfTableRow.small != &quot;---&quot;" ng-show="tscfTableRow.switchSmall" id="aTablerow.checkS13" ng-model="tscfTableRow.checkS" ng-change="cancelTscfInput('smallcheckS', $index, $parent.$parent.$index,tscfTableRow.readOnly,'aTablerow.checkS'+$parent.$parent.$index+$index);DrawTSCFChart($parent.$parent.$index)" class="ng-scope ng-pristine ng-valid ng-hide"><!-- end ngIf: tscfTableRow.small != "---" -->
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.large == "---" -->
                                                            <span class="padding-left-10">
                                                                    <!-- ngIf: tscfTableRow.large != "---" --><input class="form-control ng-scope ng-pristine ng-valid" ng-if="tscfTableRow.large != &quot;---&quot;" type="text" ng-model="tscfTableRow.large" tabindex="5" id="tscfTabLargeA13" onblur="keepDecimal(this.id, 3);" ng-disabled="(tscfTableRow.readOnly&amp;&amp;(!tscfTableRow.checkL)) " ng-change="normalize($parent.$parent.$index);checkNonApexTSCFRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscfTabLargeA'+$parent.$parent.$index+$index);DrawTSCFChart($parent.$parent.$index);" ng-blur="checkLFDRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscfTabLargeA'+$parent.$parent.$index+$index);"><!-- end ngIf: tscfTableRow.large != "---" -->
                                                                <!-- ngIf: tscfTableRow.large != "---" --><input ng-if="tscfTableRow.large != &quot;---&quot;" type="checkbox" ng-show="tscfTableRow.switchLarge" id="aTablerow.checkL13" ng-model="tscfTableRow.checkL" ng-change="cancelTscfInput('largecheckL',$index, $parent.$parent.$index,tscfTableRow.readOnly,'aTablerow.checkL'+$parent.$parent.$index+$index);DrawTSCFChart($parent.$parent.$index);" class="ng-scope ng-pristine ng-valid ng-hide"><!-- end ngIf: tscfTableRow.large != "---" -->
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.normalization != '' --><span ng-if="tscfTableRow.normalization != ''" class="ng-binding ng-scope">0.877</span><!-- end ngIf: tscfTableRow.normalization != '' -->
                                                        </td>
                                                        <td>
                                                                <span class="padding-left-10">
                                                                    <input class="form-control ng-pristine ng-valid" type="text" id="tscf213" tabindex="6" ng-model="tscfTableRow.tscf" onblur="keepDecimal(this.id, 3);" ng-disabled="(tscfTableRow.readOnly&amp;&amp;(!tscfTableRow.checkS))" ng-change="DrawTSCFChart($parent.$index);checkNonApexTSCFRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscf2'+$parent.$index+$index);" ng-blur="checkLFDRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscf2'+$parent.$index+$index);">
                                                                </span>
                                                        </td>
                                                    </tr><!-- end ngRepeat: tscfTableRow in tscfTableRows[$index] --><tr ng-repeat="tscfTableRow in tscfTableRows[$index]" class="ng-scope">
                                                        <td>
                                                                <span class="padding-left-37 ng-binding">5×5
                                                                    <i class="icon-remove cursor-pointer ng-hide" ng-show="delete&amp;&amp;!tscfTableRow.deleteIcon" ng-click="deleteTscfRow($parent.$index, tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB);DrawTSCFChart($parent.$index);"></i>
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.small == "---" -->
                                                            <span class="padding-left-10">
                                                                    <!-- ngIf: tscfTableRow.small != "---" --><input class="form-control ng-scope ng-pristine ng-valid" ng-if="tscfTableRow.small != &quot;---&quot;" type="text" tabindex="4" id="tscfTabSmallA14" ng-model="tscfTableRow.small" onblur="keepDecimal(this.id, 3);" ng-disabled="(tscfTableRow.readOnly&amp;&amp;(!tscfTableRow.checkS))" ng-change="normalize($parent.$parent.$index);DrawTSCFChart($parent.$parent.$index);checkNonApexTSCFRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscfTabSmallA'+$parent.$parent.$index+$index);" ng-blur="checkLFDRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscfTabSmallA'+$parent.$parent.$index+$index);"><!-- end ngIf: tscfTableRow.small != "---" -->
                                                                <!-- ngIf: tscfTableRow.small != "---" --><input type="checkbox" ng-if="tscfTableRow.small != &quot;---&quot;" ng-show="tscfTableRow.switchSmall" id="aTablerow.checkS14" ng-model="tscfTableRow.checkS" ng-change="cancelTscfInput('smallcheckS', $index, $parent.$parent.$index,tscfTableRow.readOnly,'aTablerow.checkS'+$parent.$parent.$index+$index);DrawTSCFChart($parent.$parent.$index)" class="ng-scope ng-pristine ng-valid ng-hide"><!-- end ngIf: tscfTableRow.small != "---" -->
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.large == "---" -->
                                                            <span class="padding-left-10">
                                                                    <!-- ngIf: tscfTableRow.large != "---" --><input class="form-control ng-scope ng-pristine ng-valid" ng-if="tscfTableRow.large != &quot;---&quot;" type="text" ng-model="tscfTableRow.large" tabindex="5" id="tscfTabLargeA14" onblur="keepDecimal(this.id, 3);" ng-disabled="(tscfTableRow.readOnly&amp;&amp;(!tscfTableRow.checkL)) " ng-change="normalize($parent.$parent.$index);checkNonApexTSCFRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscfTabLargeA'+$parent.$parent.$index+$index);DrawTSCFChart($parent.$parent.$index);" ng-blur="checkLFDRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscfTabLargeA'+$parent.$parent.$index+$index);"><!-- end ngIf: tscfTableRow.large != "---" -->
                                                                <!-- ngIf: tscfTableRow.large != "---" --><input ng-if="tscfTableRow.large != &quot;---&quot;" type="checkbox" ng-show="tscfTableRow.switchLarge" id="aTablerow.checkL14" ng-model="tscfTableRow.checkL" ng-change="cancelTscfInput('largecheckL',$index, $parent.$parent.$index,tscfTableRow.readOnly,'aTablerow.checkL'+$parent.$parent.$index+$index);DrawTSCFChart($parent.$parent.$index);" class="ng-scope ng-pristine ng-valid ng-hide"><!-- end ngIf: tscfTableRow.large != "---" -->
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.normalization != '' --><span ng-if="tscfTableRow.normalization != ''" class="ng-binding ng-scope">0.902</span><!-- end ngIf: tscfTableRow.normalization != '' -->
                                                        </td>
                                                        <td>
                                                                <span class="padding-left-10">
                                                                    <input class="form-control ng-pristine ng-valid" type="text" id="tscf214" tabindex="6" ng-model="tscfTableRow.tscf" onblur="keepDecimal(this.id, 3);" ng-disabled="(tscfTableRow.readOnly&amp;&amp;(!tscfTableRow.checkS))" ng-change="DrawTSCFChart($parent.$index);checkNonApexTSCFRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscf2'+$parent.$index+$index);" ng-blur="checkLFDRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscf2'+$parent.$index+$index);">
                                                                </span>
                                                        </td>
                                                    </tr><!-- end ngRepeat: tscfTableRow in tscfTableRows[$index] --><tr ng-repeat="tscfTableRow in tscfTableRows[$index]" class="ng-scope">
                                                        <td>
                                                                <span class="padding-left-37 ng-binding">7×7
                                                                    <i class="icon-remove cursor-pointer ng-hide" ng-show="delete&amp;&amp;!tscfTableRow.deleteIcon" ng-click="deleteTscfRow($parent.$index, tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB);DrawTSCFChart($parent.$index);"></i>
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.small == "---" --><span class="padding-left-40 ng-binding ng-scope" ng-if="tscfTableRow.small == &quot;---&quot;">---</span><!-- end ngIf: tscfTableRow.small == "---" -->
                                                            <span class="padding-left-10">
                                                                    <!-- ngIf: tscfTableRow.small != "---" -->
                                                                <!-- ngIf: tscfTableRow.small != "---" -->
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.large == "---" -->
                                                            <span class="padding-left-10">
                                                                    <!-- ngIf: tscfTableRow.large != "---" --><input class="form-control ng-scope ng-pristine ng-valid" ng-if="tscfTableRow.large != &quot;---&quot;" type="text" ng-model="tscfTableRow.large" tabindex="5" id="tscfTabLargeA15" onblur="keepDecimal(this.id, 3);" ng-disabled="(tscfTableRow.readOnly&amp;&amp;(!tscfTableRow.checkL)) " ng-change="normalize($parent.$parent.$index);checkNonApexTSCFRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscfTabLargeA'+$parent.$parent.$index+$index);DrawTSCFChart($parent.$parent.$index);" ng-blur="checkLFDRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscfTabLargeA'+$parent.$parent.$index+$index);"><!-- end ngIf: tscfTableRow.large != "---" -->
                                                                <!-- ngIf: tscfTableRow.large != "---" --><input ng-if="tscfTableRow.large != &quot;---&quot;" type="checkbox" ng-show="tscfTableRow.switchLarge" id="aTablerow.checkL15" ng-model="tscfTableRow.checkL" ng-change="cancelTscfInput('largecheckL',$index, $parent.$parent.$index,tscfTableRow.readOnly,'aTablerow.checkL'+$parent.$parent.$index+$index);DrawTSCFChart($parent.$parent.$index);" class="ng-scope ng-pristine ng-valid ng-hide"><!-- end ngIf: tscfTableRow.large != "---" -->
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.normalization != '' --><span ng-if="tscfTableRow.normalization != ''" class="ng-binding ng-scope">0.947</span><!-- end ngIf: tscfTableRow.normalization != '' -->
                                                        </td>
                                                        <td>
                                                                <span class="padding-left-10">
                                                                    <input class="form-control ng-pristine ng-valid" type="text" id="tscf215" tabindex="6" ng-model="tscfTableRow.tscf" onblur="keepDecimal(this.id, 3);" ng-disabled="(tscfTableRow.readOnly&amp;&amp;(!tscfTableRow.checkS))" ng-change="DrawTSCFChart($parent.$index);checkNonApexTSCFRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscf2'+$parent.$index+$index);" ng-blur="checkLFDRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscf2'+$parent.$index+$index);">
                                                                </span>
                                                        </td>
                                                    </tr><!-- end ngRepeat: tscfTableRow in tscfTableRows[$index] --><tr ng-repeat="tscfTableRow in tscfTableRows[$index]" class="ng-scope">
                                                        <td>
                                                                <span class="padding-left-37 ng-binding">10×10
                                                                    <i class="icon-remove cursor-pointer ng-hide" ng-show="delete&amp;&amp;!tscfTableRow.deleteIcon" ng-click="deleteTscfRow($parent.$index, tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB);DrawTSCFChart($parent.$index);"></i>
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.small == "---" -->
                                                            <span class="padding-left-10">
                                                                    <!-- ngIf: tscfTableRow.small != "---" --><input class="form-control ng-scope ng-pristine ng-valid" ng-if="tscfTableRow.small != &quot;---&quot;" type="text" tabindex="4" id="tscfTabSmallA16" ng-model="tscfTableRow.small" onblur="keepDecimal(this.id, 3);" ng-disabled="(tscfTableRow.readOnly&amp;&amp;(!tscfTableRow.checkS))" ng-change="normalize($parent.$parent.$index);DrawTSCFChart($parent.$parent.$index);checkNonApexTSCFRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscfTabSmallA'+$parent.$parent.$index+$index);" ng-blur="checkLFDRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscfTabSmallA'+$parent.$parent.$index+$index);" disabled="disabled"><!-- end ngIf: tscfTableRow.small != "---" -->
                                                                <!-- ngIf: tscfTableRow.small != "---" --><input type="checkbox" ng-if="tscfTableRow.small != &quot;---&quot;" ng-show="tscfTableRow.switchSmall" id="aTablerow.checkS16" ng-model="tscfTableRow.checkS" ng-change="cancelTscfInput('smallcheckS', $index, $parent.$parent.$index,tscfTableRow.readOnly,'aTablerow.checkS'+$parent.$parent.$index+$index);DrawTSCFChart($parent.$parent.$index)" class="ng-scope ng-pristine ng-valid ng-hide"><!-- end ngIf: tscfTableRow.small != "---" -->
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.large == "---" -->
                                                            <span class="padding-left-10">
                                                                    <!-- ngIf: tscfTableRow.large != "---" --><input class="form-control ng-scope ng-pristine ng-valid" ng-if="tscfTableRow.large != &quot;---&quot;" type="text" ng-model="tscfTableRow.large" tabindex="5" id="tscfTabLargeA16" onblur="keepDecimal(this.id, 3);" ng-disabled="(tscfTableRow.readOnly&amp;&amp;(!tscfTableRow.checkL)) " ng-change="normalize($parent.$parent.$index);checkNonApexTSCFRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscfTabLargeA'+$parent.$parent.$index+$index);DrawTSCFChart($parent.$parent.$index);" ng-blur="checkLFDRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscfTabLargeA'+$parent.$parent.$index+$index);" disabled="disabled"><!-- end ngIf: tscfTableRow.large != "---" -->
                                                                <!-- ngIf: tscfTableRow.large != "---" --><input ng-if="tscfTableRow.large != &quot;---&quot;" type="checkbox" ng-show="tscfTableRow.switchLarge" id="aTablerow.checkL16" ng-model="tscfTableRow.checkL" ng-change="cancelTscfInput('largecheckL',$index, $parent.$parent.$index,tscfTableRow.readOnly,'aTablerow.checkL'+$parent.$parent.$index+$index);DrawTSCFChart($parent.$parent.$index);" class="ng-scope ng-pristine ng-valid ng-hide"><!-- end ngIf: tscfTableRow.large != "---" -->
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.normalization != '' --><span ng-if="tscfTableRow.normalization != ''" class="ng-binding ng-scope">1.000</span><!-- end ngIf: tscfTableRow.normalization != '' -->
                                                        </td>
                                                        <td>
                                                                <span class="padding-left-10">
                                                                    <input class="form-control ng-pristine ng-valid" type="text" id="tscf216" tabindex="6" ng-model="tscfTableRow.tscf" onblur="keepDecimal(this.id, 3);" ng-disabled="(tscfTableRow.readOnly&amp;&amp;(!tscfTableRow.checkS))" ng-change="DrawTSCFChart($parent.$index);checkNonApexTSCFRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscf2'+$parent.$index+$index);" ng-blur="checkLFDRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscf2'+$parent.$index+$index);" disabled="disabled">
                                                                </span>
                                                        </td>
                                                    </tr><!-- end ngRepeat: tscfTableRow in tscfTableRows[$index] --><tr ng-repeat="tscfTableRow in tscfTableRows[$index]" class="ng-scope">
                                                        <td>
                                                                <span class="padding-left-37 ng-binding">15×15
                                                                    <i class="icon-remove cursor-pointer ng-hide" ng-show="delete&amp;&amp;!tscfTableRow.deleteIcon" ng-click="deleteTscfRow($parent.$index, tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB);DrawTSCFChart($parent.$index);"></i>
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.small == "---" --><span class="padding-left-40 ng-binding ng-scope" ng-if="tscfTableRow.small == &quot;---&quot;">---</span><!-- end ngIf: tscfTableRow.small == "---" -->
                                                            <span class="padding-left-10">
                                                                    <!-- ngIf: tscfTableRow.small != "---" -->
                                                                <!-- ngIf: tscfTableRow.small != "---" -->
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.large == "---" -->
                                                            <span class="padding-left-10">
                                                                    <!-- ngIf: tscfTableRow.large != "---" --><input class="form-control ng-scope ng-pristine ng-valid" ng-if="tscfTableRow.large != &quot;---&quot;" type="text" ng-model="tscfTableRow.large" tabindex="5" id="tscfTabLargeA17" onblur="keepDecimal(this.id, 3);" ng-disabled="(tscfTableRow.readOnly&amp;&amp;(!tscfTableRow.checkL)) " ng-change="normalize($parent.$parent.$index);checkNonApexTSCFRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscfTabLargeA'+$parent.$parent.$index+$index);DrawTSCFChart($parent.$parent.$index);" ng-blur="checkLFDRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscfTabLargeA'+$parent.$parent.$index+$index);"><!-- end ngIf: tscfTableRow.large != "---" -->
                                                                <!-- ngIf: tscfTableRow.large != "---" --><input ng-if="tscfTableRow.large != &quot;---&quot;" type="checkbox" ng-show="tscfTableRow.switchLarge" id="aTablerow.checkL17" ng-model="tscfTableRow.checkL" ng-change="cancelTscfInput('largecheckL',$index, $parent.$parent.$index,tscfTableRow.readOnly,'aTablerow.checkL'+$parent.$parent.$index+$index);DrawTSCFChart($parent.$parent.$index);" class="ng-scope ng-pristine ng-valid ng-hide"><!-- end ngIf: tscfTableRow.large != "---" -->
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.normalization != '' --><span ng-if="tscfTableRow.normalization != ''" class="ng-binding ng-scope">1.056</span><!-- end ngIf: tscfTableRow.normalization != '' -->
                                                        </td>
                                                        <td>
                                                                <span class="padding-left-10">
                                                                    <input class="form-control ng-pristine ng-valid" type="text" id="tscf217" tabindex="6" ng-model="tscfTableRow.tscf" onblur="keepDecimal(this.id, 3);" ng-disabled="(tscfTableRow.readOnly&amp;&amp;(!tscfTableRow.checkS))" ng-change="DrawTSCFChart($parent.$index);checkNonApexTSCFRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscf2'+$parent.$index+$index);" ng-blur="checkLFDRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscf2'+$parent.$index+$index);">
                                                                </span>
                                                        </td>
                                                    </tr><!-- end ngRepeat: tscfTableRow in tscfTableRows[$index] --><tr ng-repeat="tscfTableRow in tscfTableRows[$index]" class="ng-scope">
                                                        <td>
                                                                <span class="padding-left-37 ng-binding">20×20
                                                                    <i class="icon-remove cursor-pointer ng-hide" ng-show="delete&amp;&amp;!tscfTableRow.deleteIcon" ng-click="deleteTscfRow($parent.$index, tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB);DrawTSCFChart($parent.$index);"></i>
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.small == "---" --><span class="padding-left-40 ng-binding ng-scope" ng-if="tscfTableRow.small == &quot;---&quot;">---</span><!-- end ngIf: tscfTableRow.small == "---" -->
                                                            <span class="padding-left-10">
                                                                    <!-- ngIf: tscfTableRow.small != "---" -->
                                                                <!-- ngIf: tscfTableRow.small != "---" -->
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.large == "---" -->
                                                            <span class="padding-left-10">
                                                                    <!-- ngIf: tscfTableRow.large != "---" --><input class="form-control ng-scope ng-pristine ng-valid" ng-if="tscfTableRow.large != &quot;---&quot;" type="text" ng-model="tscfTableRow.large" tabindex="5" id="tscfTabLargeA18" onblur="keepDecimal(this.id, 3);" ng-disabled="(tscfTableRow.readOnly&amp;&amp;(!tscfTableRow.checkL)) " ng-change="normalize($parent.$parent.$index);checkNonApexTSCFRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscfTabLargeA'+$parent.$parent.$index+$index);DrawTSCFChart($parent.$parent.$index);" ng-blur="checkLFDRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscfTabLargeA'+$parent.$parent.$index+$index);"><!-- end ngIf: tscfTableRow.large != "---" -->
                                                                <!-- ngIf: tscfTableRow.large != "---" --><input ng-if="tscfTableRow.large != &quot;---&quot;" type="checkbox" ng-show="tscfTableRow.switchLarge" id="aTablerow.checkL18" ng-model="tscfTableRow.checkL" ng-change="cancelTscfInput('largecheckL',$index, $parent.$parent.$index,tscfTableRow.readOnly,'aTablerow.checkL'+$parent.$parent.$index+$index);DrawTSCFChart($parent.$parent.$index);" class="ng-scope ng-pristine ng-valid ng-hide"><!-- end ngIf: tscfTableRow.large != "---" -->
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.normalization != '' --><span ng-if="tscfTableRow.normalization != ''" class="ng-binding ng-scope">1.098</span><!-- end ngIf: tscfTableRow.normalization != '' -->
                                                        </td>
                                                        <td>
                                                                <span class="padding-left-10">
                                                                    <input class="form-control ng-pristine ng-valid" type="text" id="tscf218" tabindex="6" ng-model="tscfTableRow.tscf" onblur="keepDecimal(this.id, 3);" ng-disabled="(tscfTableRow.readOnly&amp;&amp;(!tscfTableRow.checkS))" ng-change="DrawTSCFChart($parent.$index);checkNonApexTSCFRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscf2'+$parent.$index+$index);" ng-blur="checkLFDRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscf2'+$parent.$index+$index);">
                                                                </span>
                                                        </td>
                                                    </tr><!-- end ngRepeat: tscfTableRow in tscfTableRows[$index] --><tr ng-repeat="tscfTableRow in tscfTableRows[$index]" class="ng-scope">
                                                        <td>
                                                                <span class="padding-left-37 ng-binding">30×30
                                                                    <i class="icon-remove cursor-pointer ng-hide" ng-show="delete&amp;&amp;!tscfTableRow.deleteIcon" ng-click="deleteTscfRow($parent.$index, tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB);DrawTSCFChart($parent.$index);"></i>
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.small == "---" --><span class="padding-left-40 ng-binding ng-scope" ng-if="tscfTableRow.small == &quot;---&quot;">---</span><!-- end ngIf: tscfTableRow.small == "---" -->
                                                            <span class="padding-left-10">
                                                                    <!-- ngIf: tscfTableRow.small != "---" -->
                                                                <!-- ngIf: tscfTableRow.small != "---" -->
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.large == "---" -->
                                                            <span class="padding-left-10">
                                                                    <!-- ngIf: tscfTableRow.large != "---" --><input class="form-control ng-scope ng-pristine ng-valid" ng-if="tscfTableRow.large != &quot;---&quot;" type="text" ng-model="tscfTableRow.large" tabindex="5" id="tscfTabLargeA19" onblur="keepDecimal(this.id, 3);" ng-disabled="(tscfTableRow.readOnly&amp;&amp;(!tscfTableRow.checkL)) " ng-change="normalize($parent.$parent.$index);checkNonApexTSCFRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscfTabLargeA'+$parent.$parent.$index+$index);DrawTSCFChart($parent.$parent.$index);" ng-blur="checkLFDRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscfTabLargeA'+$parent.$parent.$index+$index);"><!-- end ngIf: tscfTableRow.large != "---" -->
                                                                <!-- ngIf: tscfTableRow.large != "---" --><input ng-if="tscfTableRow.large != &quot;---&quot;" type="checkbox" ng-show="tscfTableRow.switchLarge" id="aTablerow.checkL19" ng-model="tscfTableRow.checkL" ng-change="cancelTscfInput('largecheckL',$index, $parent.$parent.$index,tscfTableRow.readOnly,'aTablerow.checkL'+$parent.$parent.$index+$index);DrawTSCFChart($parent.$parent.$index);" class="ng-scope ng-pristine ng-valid ng-hide"><!-- end ngIf: tscfTableRow.large != "---" -->
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.normalization != '' --><span ng-if="tscfTableRow.normalization != ''" class="ng-binding ng-scope">1.144</span><!-- end ngIf: tscfTableRow.normalization != '' -->
                                                        </td>
                                                        <td>
                                                                <span class="padding-left-10">
                                                                    <input class="form-control ng-pristine ng-valid" type="text" id="tscf219" tabindex="6" ng-model="tscfTableRow.tscf" onblur="keepDecimal(this.id, 3);" ng-disabled="(tscfTableRow.readOnly&amp;&amp;(!tscfTableRow.checkS))" ng-change="DrawTSCFChart($parent.$index);checkNonApexTSCFRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscf2'+$parent.$index+$index);" ng-blur="checkLFDRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscf2'+$parent.$index+$index);">
                                                                </span>
                                                        </td>
                                                    </tr><!-- end ngRepeat: tscfTableRow in tscfTableRows[$index] --><tr ng-repeat="tscfTableRow in tscfTableRows[$index]" class="ng-scope">
                                                        <td>
                                                                <span class="padding-left-37 ng-binding">40×40
                                                                    <i class="icon-remove cursor-pointer ng-hide" ng-show="delete&amp;&amp;!tscfTableRow.deleteIcon" ng-click="deleteTscfRow($parent.$index, tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB);DrawTSCFChart($parent.$index);"></i>
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.small == "---" --><span class="padding-left-40 ng-binding ng-scope" ng-if="tscfTableRow.small == &quot;---&quot;">---</span><!-- end ngIf: tscfTableRow.small == "---" -->
                                                            <span class="padding-left-10">
                                                                    <!-- ngIf: tscfTableRow.small != "---" -->
                                                                <!-- ngIf: tscfTableRow.small != "---" -->
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.large == "---" -->
                                                            <span class="padding-left-10">
                                                                    <!-- ngIf: tscfTableRow.large != "---" --><input class="form-control ng-scope ng-pristine ng-valid" ng-if="tscfTableRow.large != &quot;---&quot;" type="text" ng-model="tscfTableRow.large" tabindex="5" id="tscfTabLargeA110" onblur="keepDecimal(this.id, 3);" ng-disabled="(tscfTableRow.readOnly&amp;&amp;(!tscfTableRow.checkL)) " ng-change="normalize($parent.$parent.$index);checkNonApexTSCFRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscfTabLargeA'+$parent.$parent.$index+$index);DrawTSCFChart($parent.$parent.$index);" ng-blur="checkLFDRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscfTabLargeA'+$parent.$parent.$index+$index);"><!-- end ngIf: tscfTableRow.large != "---" -->
                                                                <!-- ngIf: tscfTableRow.large != "---" --><input ng-if="tscfTableRow.large != &quot;---&quot;" type="checkbox" ng-show="tscfTableRow.switchLarge" id="aTablerow.checkL110" ng-model="tscfTableRow.checkL" ng-change="cancelTscfInput('largecheckL',$index, $parent.$parent.$index,tscfTableRow.readOnly,'aTablerow.checkL'+$parent.$parent.$index+$index);DrawTSCFChart($parent.$parent.$index);" class="ng-scope ng-pristine ng-valid ng-hide"><!-- end ngIf: tscfTableRow.large != "---" -->
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.normalization != '' --><span ng-if="tscfTableRow.normalization != ''" class="ng-binding ng-scope">1.164</span><!-- end ngIf: tscfTableRow.normalization != '' -->
                                                        </td>
                                                        <td>
                                                                <span class="padding-left-10">
                                                                    <input class="form-control ng-pristine ng-valid" type="text" id="tscf2110" tabindex="6" ng-model="tscfTableRow.tscf" onblur="keepDecimal(this.id, 3);" ng-disabled="(tscfTableRow.readOnly&amp;&amp;(!tscfTableRow.checkS))" ng-change="DrawTSCFChart($parent.$index);checkNonApexTSCFRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscf2'+$parent.$index+$index);" ng-blur="checkLFDRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscf2'+$parent.$index+$index);">
                                                                </span>
                                                        </td>
                                                    </tr><!-- end ngRepeat: tscfTableRow in tscfTableRows[$index] --><tr ng-repeat="tscfTableRow in tscfTableRows[$index]" class="ng-scope">
                                                        <td>
                                                                <span class="padding-left-37 ng-binding">5×40
                                                                    <i class="icon-remove cursor-pointer ng-hide" ng-show="delete&amp;&amp;!tscfTableRow.deleteIcon" ng-click="deleteTscfRow($parent.$index, tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB);DrawTSCFChart($parent.$index);"></i>
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.small == "---" --><span class="padding-left-40 ng-binding ng-scope" ng-if="tscfTableRow.small == &quot;---&quot;">---</span><!-- end ngIf: tscfTableRow.small == "---" -->
                                                            <span class="padding-left-10">
                                                                    <!-- ngIf: tscfTableRow.small != "---" -->
                                                                <!-- ngIf: tscfTableRow.small != "---" -->
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.large == "---" -->
                                                            <span class="padding-left-10">
                                                                    <!-- ngIf: tscfTableRow.large != "---" --><input class="form-control ng-scope ng-pristine ng-valid" ng-if="tscfTableRow.large != &quot;---&quot;" type="text" ng-model="tscfTableRow.large" tabindex="5" id="tscfTabLargeA111" onblur="keepDecimal(this.id, 3);" ng-disabled="(tscfTableRow.readOnly&amp;&amp;(!tscfTableRow.checkL)) " ng-change="normalize($parent.$parent.$index);checkNonApexTSCFRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscfTabLargeA'+$parent.$parent.$index+$index);DrawTSCFChart($parent.$parent.$index);" ng-blur="checkLFDRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscfTabLargeA'+$parent.$parent.$index+$index);"><!-- end ngIf: tscfTableRow.large != "---" -->
                                                                <!-- ngIf: tscfTableRow.large != "---" --><input ng-if="tscfTableRow.large != &quot;---&quot;" type="checkbox" ng-show="tscfTableRow.switchLarge" id="aTablerow.checkL111" ng-model="tscfTableRow.checkL" ng-change="cancelTscfInput('largecheckL',$index, $parent.$parent.$index,tscfTableRow.readOnly,'aTablerow.checkL'+$parent.$parent.$index+$index);DrawTSCFChart($parent.$parent.$index);" class="ng-scope ng-pristine ng-valid ng-hide"><!-- end ngIf: tscfTableRow.large != "---" -->
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.normalization != '' --><span ng-if="tscfTableRow.normalization != ''" class="ng-binding ng-scope">0.973</span><!-- end ngIf: tscfTableRow.normalization != '' -->
                                                        </td>
                                                        <td>
                                                                <span class="padding-left-10">
                                                                    <input class="form-control ng-pristine ng-valid" type="text" id="tscf2111" tabindex="6" ng-model="tscfTableRow.tscf" onblur="keepDecimal(this.id, 3);" ng-disabled="(tscfTableRow.readOnly&amp;&amp;(!tscfTableRow.checkS))" ng-change="DrawTSCFChart($parent.$index);checkNonApexTSCFRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscf2'+$parent.$index+$index);" ng-blur="checkLFDRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscf2'+$parent.$index+$index);">
                                                                </span>
                                                        </td>
                                                    </tr><!-- end ngRepeat: tscfTableRow in tscfTableRows[$index] --><tr ng-repeat="tscfTableRow in tscfTableRows[$index]" class="ng-scope">
                                                        <td>
                                                                <span class="padding-left-37 ng-binding">40×5
                                                                    <i class="icon-remove cursor-pointer ng-hide" ng-show="delete&amp;&amp;!tscfTableRow.deleteIcon" ng-click="deleteTscfRow($parent.$index, tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB);DrawTSCFChart($parent.$index);"></i>
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.small == "---" --><span class="padding-left-40 ng-binding ng-scope" ng-if="tscfTableRow.small == &quot;---&quot;">---</span><!-- end ngIf: tscfTableRow.small == "---" -->
                                                            <span class="padding-left-10">
                                                                    <!-- ngIf: tscfTableRow.small != "---" -->
                                                                <!-- ngIf: tscfTableRow.small != "---" -->
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.large == "---" -->
                                                            <span class="padding-left-10">
                                                                    <!-- ngIf: tscfTableRow.large != "---" --><input class="form-control ng-scope ng-pristine ng-valid" ng-if="tscfTableRow.large != &quot;---&quot;" type="text" ng-model="tscfTableRow.large" tabindex="5" id="tscfTabLargeA112" onblur="keepDecimal(this.id, 3);" ng-disabled="(tscfTableRow.readOnly&amp;&amp;(!tscfTableRow.checkL)) " ng-change="normalize($parent.$parent.$index);checkNonApexTSCFRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscfTabLargeA'+$parent.$parent.$index+$index);DrawTSCFChart($parent.$parent.$index);" ng-blur="checkLFDRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscfTabLargeA'+$parent.$parent.$index+$index);"><!-- end ngIf: tscfTableRow.large != "---" -->
                                                                <!-- ngIf: tscfTableRow.large != "---" --><input ng-if="tscfTableRow.large != &quot;---&quot;" type="checkbox" ng-show="tscfTableRow.switchLarge" id="aTablerow.checkL112" ng-model="tscfTableRow.checkL" ng-change="cancelTscfInput('largecheckL',$index, $parent.$parent.$index,tscfTableRow.readOnly,'aTablerow.checkL'+$parent.$parent.$index+$index);DrawTSCFChart($parent.$parent.$index);" class="ng-scope ng-pristine ng-valid ng-hide"><!-- end ngIf: tscfTableRow.large != "---" -->
                                                                </span>
                                                        </td>
                                                        <td>
                                                            <!-- ngIf: tscfTableRow.normalization != '' --><span ng-if="tscfTableRow.normalization != ''" class="ng-binding ng-scope">0.966</span><!-- end ngIf: tscfTableRow.normalization != '' -->
                                                        </td>
                                                        <td>
                                                                <span class="padding-left-10">
                                                                    <input class="form-control ng-pristine ng-valid" type="text" id="tscf2112" tabindex="6" ng-model="tscfTableRow.tscf" onblur="keepDecimal(this.id, 3);" ng-disabled="(tscfTableRow.readOnly&amp;&amp;(!tscfTableRow.checkS))" ng-change="DrawTSCFChart($parent.$index);checkNonApexTSCFRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscf2'+$parent.$index+$index);" ng-blur="checkLFDRange(tscfTableRow.fieldsizeA,tscfTableRow.fieldsizeB,'tscf2'+$parent.$index+$index);">
                                                                </span>
                                                        </td>
                                                    </tr><!-- end ngRepeat: tscfTableRow in tscfTableRows[$index] -->
                                                    <!-- ngRepeat: newRow in tscfTableNew[$index] -->
                                                    </tbody>
                                                </table><!-- end ngIf: detectors == 2 -->
                                                <!-- ngIf: detectors == 1 -->
                                            </div>
                                            <div class="col-md-6">
                                                <div class="widget-box">
                                                    <div class="widget-title">
                                                        <span class="icon">
                                                            <i class="icon-align-justify"></i>
                                                        </span>
                                                        <h5>Graph</h5>
                                                    </div>
                                                    <div class="pull-left top15">
                                                        <img src="img\OF at Ref Depth.png">
                                                    </div>
                                                    <div class="widget-content">
                                                        <div class="chart-500" id="tscfChart1"></div>
                                                    </div>
                                                    <div class="col-md-12 padding-left-50">
                                                        <div class="font1">Field Size (cm)</div>
                                                        <br>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end ngRepeat: photon in photons -->
                            </div><!-- end ngIf: selectedMLC.MLCModel_Name != 'Apex MLCi' && selectedMLC.MLCModel_Name != 'Apex MLCi2' && selectedMLC.MLCModel_Name != 'Apex Agility' -->
                            <!-- ngIf: selectedMLC.MLCModel_Name == 'Apex MLCi' || selectedMLC.MLCModel_Name == 'Apex MLCi2' || selectedMLC.MLCModel_Name == 'Apex Agility' -->
                        </div>
                    </div>
                </div>

                <!-- Sc -->
                <div id="tabsc" ng-hide="sections.psc" class="widget-box ng-hide">
                    <!-- ngIf: selectedMLC.MLCModel_Name=='Apex MLCi' || selectedMLC.MLCModel_Name=='Apex MLCi2' || selectedMLC.MLCModel_Name=='Apex Agility' -->
                    <div class="tabbable widget-title">
                        <ul class="nav nav-tabs">
                            <!-- ngRepeat: photon in photons --><li ng-class="pStyle[$index]" ng-repeat="photon in photons" id="photonSCTab0" ng-click="activateTab('photonSCtab', 'tabscenergy', $index);DrawScChart($index);" class="ng-scope active">
                                <a href="#tabscenergy0" data-toggle="tab" class="ng-binding">Precise04x</a>
                            </li><!-- end ngRepeat: photon in photons --><li ng-class="pStyle[$index]" ng-repeat="photon in photons" id="photonSCTab1" ng-click="activateTab('photonSCtab', 'tabscenergy', $index);DrawScChart($index);" class="ng-scope">
                                <a href="#tabscenergy1" data-toggle="tab" class="ng-binding">Precise06x</a>
                            </li><!-- end ngRepeat: photon in photons -->
                        </ul>
                    </div>
                    <!-- ngIf: selectedMLC.MLCModel_Name!='Apex MLCi' && selectedMLC.MLCModel_Name!='Apex MLCi2' && selectedMLC.MLCModel_Name!='Apex Agility' --><div class="widget-content tab-content ng-scope" ng-if="selectedMLC.MLCModel_Name!='Apex MLCi' &amp;&amp; selectedMLC.MLCModel_Name!='Apex MLCi2' &amp;&amp; selectedMLC.MLCModel_Name!='Apex Agility'">

                        <!-- MachineID -->
                        <!-- ngRepeat: photon in photons --><div ng-class="divStyle[$index]" ng-repeat="photon in photons" id="tabscenergy0" class="ng-scope tab-pane active">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12">
                                    <p class="font1">It is required to measure the Head Scatter Correction Factor at 100 cm SDD (Source to
                                        Detector Distance).</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-lg-4" id="tablesc">
                                    <table class="table table-bordered widget-box" id="tablesc1">
                                        <tbody>
                                        <tr>
                                            <th class="width-60">Field Size (Outer × Inner) (cm)&nbsp;
                                                <a class="tooltip-demo" href="img/Jaw and MLC specification.png" data-lightbox="example-set10" title="">
                                                    <i class="icon-exclamation-sign"></i>
                                                </a>
                                            </th>
                                            <th class="width-40">Sc</th>
                                        </tr>
                                        <!-- ngRepeat: scTableSmallRow in scTableSmallRows[$index] --><tr ng-repeat="scTableSmallRow in scTableSmallRows[$index]" class="ng-scope">
                                            <td class="ng-binding">5×5</td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="3" id="scSmallRows00" ng-readonly="scTableSmallRow.scReadOnly" ng-model="scTableSmallRow.sc" ng-change="checkNumber('scSmallRows00');DrawScChart($parent.$index);" ng-blur="checkRange('scSmallRows'+$parent.$index+$index,0.001,1.500,'numeric')" onblur="keepDecimal(this.id, 3);">
                                            </td>
                                        </tr><!-- end ngRepeat: scTableSmallRow in scTableSmallRows[$index] --><tr ng-repeat="scTableSmallRow in scTableSmallRows[$index]" class="ng-scope">
                                            <td class="ng-binding">10×10</td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="3" id="scSmallRows01" ng-readonly="scTableSmallRow.scReadOnly" ng-model="scTableSmallRow.sc" ng-change="checkNumber('scSmallRows01');DrawScChart($parent.$index);" ng-blur="checkRange('scSmallRows'+$parent.$index+$index,0.001,1.500,'numeric')" onblur="keepDecimal(this.id, 3);" readonly="readonly">
                                            </td>
                                        </tr><!-- end ngRepeat: scTableSmallRow in scTableSmallRows[$index] --><tr ng-repeat="scTableSmallRow in scTableSmallRows[$index]" class="ng-scope">
                                            <td class="ng-binding">15×15</td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="3" id="scSmallRows02" ng-readonly="scTableSmallRow.scReadOnly" ng-model="scTableSmallRow.sc" ng-change="checkNumber('scSmallRows02');DrawScChart($parent.$index);" ng-blur="checkRange('scSmallRows'+$parent.$index+$index,0.001,1.500,'numeric')" onblur="keepDecimal(this.id, 3);">
                                            </td>
                                        </tr><!-- end ngRepeat: scTableSmallRow in scTableSmallRows[$index] --><tr ng-repeat="scTableSmallRow in scTableSmallRows[$index]" class="ng-scope">
                                            <td class="ng-binding">20×20</td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="3" id="scSmallRows03" ng-readonly="scTableSmallRow.scReadOnly" ng-model="scTableSmallRow.sc" ng-change="checkNumber('scSmallRows03');DrawScChart($parent.$index);" ng-blur="checkRange('scSmallRows'+$parent.$index+$index,0.001,1.500,'numeric')" onblur="keepDecimal(this.id, 3);">
                                            </td>
                                        </tr><!-- end ngRepeat: scTableSmallRow in scTableSmallRows[$index] -->
                                        <tr>
                                            <!-- ngIf: selectedMLC.MLCModel_Name !== 'Beam Modulator' --><td ng-if="selectedMLC.MLCModel_Name !== 'Beam Modulator'" class="ng-scope">
                                                    <span>
                                                        <input type="text" class="form-control width-40 ng-pristine ng-valid" tabindex="1" placeholder="Max" id="scMax0" ng-model="photon.scMax" ng-change="DrawScChart($index);" ng-blur="checkRange('scMax'+$index,1,40,'int')">
                                                    </span>×
                                                <span>
                                                        <input type="text" class="form-control width-40 ng-pristine ng-valid" tabindex="2" id="scMax20" placeholder="Max" ng-model="photon.scMax2" ng-change="DrawScChart($index);" ng-blur="checkRange('scMax2'+$index,1,40,'int')">
                                                    </span>
                                            </td><!-- end ngIf: selectedMLC.MLCModel_Name !== 'Beam Modulator' -->
                                            <!-- ngIf: selectedMLC.MLCModel_Name == 'Beam Modulator' -->
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="4" id="scMaxByMax0" ng-model="photon.scMaxByMax" ng-change="DrawScChart($index);" onblur="keepDecimal(this.id, 3);" ng-blur="checkRange('scMaxByMax'+$index,0.001,1.500,numeric);">
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <table class="table table-bordered widget-box" id="tablesc2">
                                        <tbody>
                                        <tr>
                                            <th class="width-60">Field Size (Outer × Inner) (cm)&nbsp;
                                                <a class="tooltip-demo" href="img/Jaw and MLC specification.png" data-lightbox="example-set11" title="">
                                                    <i class="icon-exclamation-sign"></i>
                                                </a>
                                            </th>
                                            <th class="width-40">Sc</th>
                                        </tr>
                                        <!-- ngRepeat: scTableRowMax in scTableRowsMax[$index] --><tr ng-repeat="scTableRowMax in scTableRowsMax[$index]" class="ng-scope">
                                            <td style="text-align:right;padding-right:10%" class="ng-binding">3 ×
                                                <input type="text" id="scMax200" class="width-40 form-control ng-pristine ng-valid" placeholder="Max" ng-model="photon.scMax2" disabled="">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="5" id="scThreeByMax03" ng-change="DrawScChart($parent.$index);" ng-model="scTableRowMax.sc" onblur="keepDecimal(this.id, 3);" ng-blur="checkRange('scThreeByMax'+$parent.$index+scTableRowMax.fieldsizeA,0.001,1.500,numeric);">
                                            </td>
                                        </tr><!-- end ngRepeat: scTableRowMax in scTableRowsMax[$index] --><tr ng-repeat="scTableRowMax in scTableRowsMax[$index]" class="ng-scope">
                                            <td style="text-align:right;padding-right:10%" class="ng-binding">5 ×
                                                <input type="text" id="scMax201" class="width-40 form-control ng-pristine ng-valid" placeholder="Max" ng-model="photon.scMax2" disabled="">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="5" id="scThreeByMax05" ng-change="DrawScChart($parent.$index);" ng-model="scTableRowMax.sc" onblur="keepDecimal(this.id, 3);" ng-blur="checkRange('scThreeByMax'+$parent.$index+scTableRowMax.fieldsizeA,0.001,1.500,numeric);">
                                            </td>
                                        </tr><!-- end ngRepeat: scTableRowMax in scTableRowsMax[$index] --><tr ng-repeat="scTableRowMax in scTableRowsMax[$index]" class="ng-scope">
                                            <td style="text-align:right;padding-right:10%" class="ng-binding">8 ×
                                                <input type="text" id="scMax202" class="width-40 form-control ng-pristine ng-valid" placeholder="Max" ng-model="photon.scMax2" disabled="">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="5" id="scThreeByMax08" ng-change="DrawScChart($parent.$index);" ng-model="scTableRowMax.sc" onblur="keepDecimal(this.id, 3);" ng-blur="checkRange('scThreeByMax'+$parent.$index+scTableRowMax.fieldsizeA,0.001,1.500,numeric);">
                                            </td>
                                        </tr><!-- end ngRepeat: scTableRowMax in scTableRowsMax[$index] --><tr ng-repeat="scTableRowMax in scTableRowsMax[$index]" class="ng-scope">
                                            <td style="text-align:right;padding-right:10%" class="ng-binding">10 ×
                                                <input type="text" id="scMax203" class="width-40 form-control ng-pristine ng-valid" placeholder="Max" ng-model="photon.scMax2" disabled="">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="5" id="scThreeByMax010" ng-change="DrawScChart($parent.$index);" ng-model="scTableRowMax.sc" onblur="keepDecimal(this.id, 3);" ng-blur="checkRange('scThreeByMax'+$parent.$index+scTableRowMax.fieldsizeA,0.001,1.500,numeric);">
                                            </td>
                                        </tr><!-- end ngRepeat: scTableRowMax in scTableRowsMax[$index] --><tr ng-repeat="scTableRowMax in scTableRowsMax[$index]" class="ng-scope">
                                            <td style="text-align:right;padding-right:10%" class="ng-binding">15 ×
                                                <input type="text" id="scMax204" class="width-40 form-control ng-pristine ng-valid" placeholder="Max" ng-model="photon.scMax2" disabled="">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="5" id="scThreeByMax015" ng-change="DrawScChart($parent.$index);" ng-model="scTableRowMax.sc" onblur="keepDecimal(this.id, 3);" ng-blur="checkRange('scThreeByMax'+$parent.$index+scTableRowMax.fieldsizeA,0.001,1.500,numeric);">
                                            </td>
                                        </tr><!-- end ngRepeat: scTableRowMax in scTableRowsMax[$index] --><tr ng-repeat="scTableRowMax in scTableRowsMax[$index]" class="ng-scope">
                                            <td style="text-align:right;padding-right:10%" class="ng-binding">20 ×
                                                <input type="text" id="scMax205" class="width-40 form-control ng-pristine ng-valid" placeholder="Max" ng-model="photon.scMax2" disabled="">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="5" id="scThreeByMax020" ng-change="DrawScChart($parent.$index);" ng-model="scTableRowMax.sc" onblur="keepDecimal(this.id, 3);" ng-blur="checkRange('scThreeByMax'+$parent.$index+scTableRowMax.fieldsizeA,0.001,1.500,numeric);">
                                            </td>
                                        </tr><!-- end ngRepeat: scTableRowMax in scTableRowsMax[$index] --><tr ng-repeat="scTableRowMax in scTableRowsMax[$index]" class="ng-scope">
                                            <td style="text-align:right;padding-right:10%" class="ng-binding">30 ×
                                                <input type="text" id="scMax206" class="width-40 form-control ng-pristine ng-valid" placeholder="Max" ng-model="photon.scMax2" disabled="">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="5" id="scThreeByMax030" ng-change="DrawScChart($parent.$index);" ng-model="scTableRowMax.sc" onblur="keepDecimal(this.id, 3);" ng-blur="checkRange('scThreeByMax'+$parent.$index+scTableRowMax.fieldsizeA,0.001,1.500,numeric);">
                                            </td>
                                        </tr><!-- end ngRepeat: scTableRowMax in scTableRowsMax[$index] -->
                                        </tbody>
                                    </table>
                                    <table class="table table-bordered widget-box" id="tablesc3">
                                        <tbody>
                                        <tr>
                                            <th class="width-60">Field Size (Outer × Inner) (cm)&nbsp;
                                                <a class="tooltip-demo" href="img/Jaw and MLC specification.png" data-lightbox="example-set12" title="">
                                                    <i class="icon-exclamation-sign"></i>
                                                </a>
                                            </th>
                                            <th class="width-40">Sc</th>
                                        </tr>
                                        <!-- ngRepeat: scTableMaxRow in scTableMaxRows[$index] --><tr ng-repeat="scTableMaxRow in scTableMaxRows[$index]" class="ng-scope">
                                            <td style="text-align:left;padding-left:10%" class="ng-binding">
                                                <input type="text" class="width-40 form-control ng-pristine ng-valid" placeholder="Max" id="scMax00" ng-model="photon.scMax" disabled=""> × 3
                                            </td>
                                            <td>
                                                <input type="text" tabindex="6" class="form-control ng-pristine ng-valid" id="scMaxByThree03" ng-change="DrawScChart($parent.$index);" ng-model="scTableMaxRow.sc" onblur="keepDecimal(this.id, 3);" ng-blur="checkRange('scMaxByThree'+$parent.$index+scTableMaxRow.fieldsizeB,0.001,1.500,numeric);">
                                            </td>
                                        </tr><!-- end ngRepeat: scTableMaxRow in scTableMaxRows[$index] --><tr ng-repeat="scTableMaxRow in scTableMaxRows[$index]" class="ng-scope">
                                            <td style="text-align:left;padding-left:10%" class="ng-binding">
                                                <input type="text" class="width-40 form-control ng-pristine ng-valid" placeholder="Max" id="scMax01" ng-model="photon.scMax" disabled=""> × 5
                                            </td>
                                            <td>
                                                <input type="text" tabindex="6" class="form-control ng-pristine ng-valid" id="scMaxByThree05" ng-change="DrawScChart($parent.$index);" ng-model="scTableMaxRow.sc" onblur="keepDecimal(this.id, 3);" ng-blur="checkRange('scMaxByThree'+$parent.$index+scTableMaxRow.fieldsizeB,0.001,1.500,numeric);">
                                            </td>
                                        </tr><!-- end ngRepeat: scTableMaxRow in scTableMaxRows[$index] --><tr ng-repeat="scTableMaxRow in scTableMaxRows[$index]" class="ng-scope">
                                            <td style="text-align:left;padding-left:10%" class="ng-binding">
                                                <input type="text" class="width-40 form-control ng-pristine ng-valid" placeholder="Max" id="scMax02" ng-model="photon.scMax" disabled=""> × 8
                                            </td>
                                            <td>
                                                <input type="text" tabindex="6" class="form-control ng-pristine ng-valid" id="scMaxByThree08" ng-change="DrawScChart($parent.$index);" ng-model="scTableMaxRow.sc" onblur="keepDecimal(this.id, 3);" ng-blur="checkRange('scMaxByThree'+$parent.$index+scTableMaxRow.fieldsizeB,0.001,1.500,numeric);">
                                            </td>
                                        </tr><!-- end ngRepeat: scTableMaxRow in scTableMaxRows[$index] --><tr ng-repeat="scTableMaxRow in scTableMaxRows[$index]" class="ng-scope">
                                            <td style="text-align:left;padding-left:10%" class="ng-binding">
                                                <input type="text" class="width-40 form-control ng-pristine ng-valid" placeholder="Max" id="scMax03" ng-model="photon.scMax" disabled=""> × 10
                                            </td>
                                            <td>
                                                <input type="text" tabindex="6" class="form-control ng-pristine ng-valid" id="scMaxByThree010" ng-change="DrawScChart($parent.$index);" ng-model="scTableMaxRow.sc" onblur="keepDecimal(this.id, 3);" ng-blur="checkRange('scMaxByThree'+$parent.$index+scTableMaxRow.fieldsizeB,0.001,1.500,numeric);">
                                            </td>
                                        </tr><!-- end ngRepeat: scTableMaxRow in scTableMaxRows[$index] --><tr ng-repeat="scTableMaxRow in scTableMaxRows[$index]" class="ng-scope">
                                            <td style="text-align:left;padding-left:10%" class="ng-binding">
                                                <input type="text" class="width-40 form-control ng-pristine ng-valid" placeholder="Max" id="scMax04" ng-model="photon.scMax" disabled=""> × 15
                                            </td>
                                            <td>
                                                <input type="text" tabindex="6" class="form-control ng-pristine ng-valid" id="scMaxByThree015" ng-change="DrawScChart($parent.$index);" ng-model="scTableMaxRow.sc" onblur="keepDecimal(this.id, 3);" ng-blur="checkRange('scMaxByThree'+$parent.$index+scTableMaxRow.fieldsizeB,0.001,1.500,numeric);">
                                            </td>
                                        </tr><!-- end ngRepeat: scTableMaxRow in scTableMaxRows[$index] --><tr ng-repeat="scTableMaxRow in scTableMaxRows[$index]" class="ng-scope">
                                            <td style="text-align:left;padding-left:10%" class="ng-binding">
                                                <input type="text" class="width-40 form-control ng-pristine ng-valid" placeholder="Max" id="scMax05" ng-model="photon.scMax" disabled=""> × 20
                                            </td>
                                            <td>
                                                <input type="text" tabindex="6" class="form-control ng-pristine ng-valid" id="scMaxByThree020" ng-change="DrawScChart($parent.$index);" ng-model="scTableMaxRow.sc" onblur="keepDecimal(this.id, 3);" ng-blur="checkRange('scMaxByThree'+$parent.$index+scTableMaxRow.fieldsizeB,0.001,1.500,numeric);">
                                            </td>
                                        </tr><!-- end ngRepeat: scTableMaxRow in scTableMaxRows[$index] --><tr ng-repeat="scTableMaxRow in scTableMaxRows[$index]" class="ng-scope">
                                            <td style="text-align:left;padding-left:10%" class="ng-binding">
                                                <input type="text" class="width-40 form-control ng-pristine ng-valid" placeholder="Max" id="scMax06" ng-model="photon.scMax" disabled=""> × 30
                                            </td>
                                            <td>
                                                <input type="text" tabindex="6" class="form-control ng-pristine ng-valid" id="scMaxByThree030" ng-change="DrawScChart($parent.$index);" ng-model="scTableMaxRow.sc" onblur="keepDecimal(this.id, 3);" ng-blur="checkRange('scMaxByThree'+$parent.$index+scTableMaxRow.fieldsizeB,0.001,1.500,numeric);">
                                            </td>
                                        </tr><!-- end ngRepeat: scTableMaxRow in scTableMaxRows[$index] -->
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-12 col-lg-8">
                                    <div class="widget-box">
                                        <div class="widget-title">
                                            <span class="icon">
                                                <i class="icon-align-justify"></i>
                                            </span>
                                            <h5>Graph</h5>
                                        </div>
                                        <div class="widget-content">
                                            <div class="chart-620" id="scChart0"></div>
                                        </div>
                                        <div class="col-md-12 padding-left-50">
                                            <div class="font1">Field Size (cm)</div>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end ngRepeat: photon in photons --><div ng-class="divStyle[$index]" ng-repeat="photon in photons" id="tabscenergy1" class="ng-scope tab-pane">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12">
                                    <p class="font1">It is required to measure the Head Scatter Correction Factor at 100 cm SDD (Source to
                                        Detector Distance).</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-lg-4" id="tablesc">
                                    <table class="table table-bordered widget-box" id="tablesc1">
                                        <tbody>
                                        <tr>
                                            <th class="width-60">Field Size (Outer × Inner) (cm)&nbsp;
                                                <a class="tooltip-demo" href="img/Jaw and MLC specification.png" data-lightbox="example-set10" title="">
                                                    <i class="icon-exclamation-sign"></i>
                                                </a>
                                            </th>
                                            <th class="width-40">Sc</th>
                                        </tr>
                                        <!-- ngRepeat: scTableSmallRow in scTableSmallRows[$index] --><tr ng-repeat="scTableSmallRow in scTableSmallRows[$index]" class="ng-scope">
                                            <td class="ng-binding">5×5</td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="3" id="scSmallRows10" ng-readonly="scTableSmallRow.scReadOnly" ng-model="scTableSmallRow.sc" ng-change="checkNumber('scSmallRows10');DrawScChart($parent.$index);" ng-blur="checkRange('scSmallRows'+$parent.$index+$index,0.001,1.500,'numeric')" onblur="keepDecimal(this.id, 3);">
                                            </td>
                                        </tr><!-- end ngRepeat: scTableSmallRow in scTableSmallRows[$index] --><tr ng-repeat="scTableSmallRow in scTableSmallRows[$index]" class="ng-scope">
                                            <td class="ng-binding">10×10</td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="3" id="scSmallRows11" ng-readonly="scTableSmallRow.scReadOnly" ng-model="scTableSmallRow.sc" ng-change="checkNumber('scSmallRows11');DrawScChart($parent.$index);" ng-blur="checkRange('scSmallRows'+$parent.$index+$index,0.001,1.500,'numeric')" onblur="keepDecimal(this.id, 3);" readonly="readonly">
                                            </td>
                                        </tr><!-- end ngRepeat: scTableSmallRow in scTableSmallRows[$index] --><tr ng-repeat="scTableSmallRow in scTableSmallRows[$index]" class="ng-scope">
                                            <td class="ng-binding">15×15</td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="3" id="scSmallRows12" ng-readonly="scTableSmallRow.scReadOnly" ng-model="scTableSmallRow.sc" ng-change="checkNumber('scSmallRows12');DrawScChart($parent.$index);" ng-blur="checkRange('scSmallRows'+$parent.$index+$index,0.001,1.500,'numeric')" onblur="keepDecimal(this.id, 3);">
                                            </td>
                                        </tr><!-- end ngRepeat: scTableSmallRow in scTableSmallRows[$index] --><tr ng-repeat="scTableSmallRow in scTableSmallRows[$index]" class="ng-scope">
                                            <td class="ng-binding">20×20</td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="3" id="scSmallRows13" ng-readonly="scTableSmallRow.scReadOnly" ng-model="scTableSmallRow.sc" ng-change="checkNumber('scSmallRows13');DrawScChart($parent.$index);" ng-blur="checkRange('scSmallRows'+$parent.$index+$index,0.001,1.500,'numeric')" onblur="keepDecimal(this.id, 3);">
                                            </td>
                                        </tr><!-- end ngRepeat: scTableSmallRow in scTableSmallRows[$index] -->
                                        <tr>
                                            <!-- ngIf: selectedMLC.MLCModel_Name !== 'Beam Modulator' --><td ng-if="selectedMLC.MLCModel_Name !== 'Beam Modulator'" class="ng-scope">
                                                    <span>
                                                        <input type="text" class="form-control width-40 ng-pristine ng-valid" tabindex="1" placeholder="Max" id="scMax1" ng-model="photon.scMax" ng-change="DrawScChart($index);" ng-blur="checkRange('scMax'+$index,1,40,'int')">
                                                    </span>×
                                                <span>
                                                        <input type="text" class="form-control width-40 ng-pristine ng-valid" tabindex="2" id="scMax21" placeholder="Max" ng-model="photon.scMax2" ng-change="DrawScChart($index);" ng-blur="checkRange('scMax2'+$index,1,40,'int')">
                                                    </span>
                                            </td><!-- end ngIf: selectedMLC.MLCModel_Name !== 'Beam Modulator' -->
                                            <!-- ngIf: selectedMLC.MLCModel_Name == 'Beam Modulator' -->
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="4" id="scMaxByMax1" ng-model="photon.scMaxByMax" ng-change="DrawScChart($index);" onblur="keepDecimal(this.id, 3);" ng-blur="checkRange('scMaxByMax'+$index,0.001,1.500,numeric);">
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <table class="table table-bordered widget-box" id="tablesc2">
                                        <tbody>
                                        <tr>
                                            <th class="width-60">Field Size (Outer × Inner) (cm)&nbsp;
                                                <a class="tooltip-demo" href="img/Jaw and MLC specification.png" data-lightbox="example-set11" title="">
                                                    <i class="icon-exclamation-sign"></i>
                                                </a>
                                            </th>
                                            <th class="width-40">Sc</th>
                                        </tr>
                                        <!-- ngRepeat: scTableRowMax in scTableRowsMax[$index] --><tr ng-repeat="scTableRowMax in scTableRowsMax[$index]" class="ng-scope">
                                            <td style="text-align:right;padding-right:10%" class="ng-binding">3 ×
                                                <input type="text" id="scMax210" class="width-40 form-control ng-pristine ng-valid" placeholder="Max" ng-model="photon.scMax2" disabled="">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="5" id="scThreeByMax13" ng-change="DrawScChart($parent.$index);" ng-model="scTableRowMax.sc" onblur="keepDecimal(this.id, 3);" ng-blur="checkRange('scThreeByMax'+$parent.$index+scTableRowMax.fieldsizeA,0.001,1.500,numeric);">
                                            </td>
                                        </tr><!-- end ngRepeat: scTableRowMax in scTableRowsMax[$index] --><tr ng-repeat="scTableRowMax in scTableRowsMax[$index]" class="ng-scope">
                                            <td style="text-align:right;padding-right:10%" class="ng-binding">5 ×
                                                <input type="text" id="scMax211" class="width-40 form-control ng-pristine ng-valid" placeholder="Max" ng-model="photon.scMax2" disabled="">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="5" id="scThreeByMax15" ng-change="DrawScChart($parent.$index);" ng-model="scTableRowMax.sc" onblur="keepDecimal(this.id, 3);" ng-blur="checkRange('scThreeByMax'+$parent.$index+scTableRowMax.fieldsizeA,0.001,1.500,numeric);">
                                            </td>
                                        </tr><!-- end ngRepeat: scTableRowMax in scTableRowsMax[$index] --><tr ng-repeat="scTableRowMax in scTableRowsMax[$index]" class="ng-scope">
                                            <td style="text-align:right;padding-right:10%" class="ng-binding">8 ×
                                                <input type="text" id="scMax212" class="width-40 form-control ng-pristine ng-valid" placeholder="Max" ng-model="photon.scMax2" disabled="">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="5" id="scThreeByMax18" ng-change="DrawScChart($parent.$index);" ng-model="scTableRowMax.sc" onblur="keepDecimal(this.id, 3);" ng-blur="checkRange('scThreeByMax'+$parent.$index+scTableRowMax.fieldsizeA,0.001,1.500,numeric);">
                                            </td>
                                        </tr><!-- end ngRepeat: scTableRowMax in scTableRowsMax[$index] --><tr ng-repeat="scTableRowMax in scTableRowsMax[$index]" class="ng-scope">
                                            <td style="text-align:right;padding-right:10%" class="ng-binding">10 ×
                                                <input type="text" id="scMax213" class="width-40 form-control ng-pristine ng-valid" placeholder="Max" ng-model="photon.scMax2" disabled="">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="5" id="scThreeByMax110" ng-change="DrawScChart($parent.$index);" ng-model="scTableRowMax.sc" onblur="keepDecimal(this.id, 3);" ng-blur="checkRange('scThreeByMax'+$parent.$index+scTableRowMax.fieldsizeA,0.001,1.500,numeric);">
                                            </td>
                                        </tr><!-- end ngRepeat: scTableRowMax in scTableRowsMax[$index] --><tr ng-repeat="scTableRowMax in scTableRowsMax[$index]" class="ng-scope">
                                            <td style="text-align:right;padding-right:10%" class="ng-binding">15 ×
                                                <input type="text" id="scMax214" class="width-40 form-control ng-pristine ng-valid" placeholder="Max" ng-model="photon.scMax2" disabled="">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="5" id="scThreeByMax115" ng-change="DrawScChart($parent.$index);" ng-model="scTableRowMax.sc" onblur="keepDecimal(this.id, 3);" ng-blur="checkRange('scThreeByMax'+$parent.$index+scTableRowMax.fieldsizeA,0.001,1.500,numeric);">
                                            </td>
                                        </tr><!-- end ngRepeat: scTableRowMax in scTableRowsMax[$index] --><tr ng-repeat="scTableRowMax in scTableRowsMax[$index]" class="ng-scope">
                                            <td style="text-align:right;padding-right:10%" class="ng-binding">20 ×
                                                <input type="text" id="scMax215" class="width-40 form-control ng-pristine ng-valid" placeholder="Max" ng-model="photon.scMax2" disabled="">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="5" id="scThreeByMax120" ng-change="DrawScChart($parent.$index);" ng-model="scTableRowMax.sc" onblur="keepDecimal(this.id, 3);" ng-blur="checkRange('scThreeByMax'+$parent.$index+scTableRowMax.fieldsizeA,0.001,1.500,numeric);">
                                            </td>
                                        </tr><!-- end ngRepeat: scTableRowMax in scTableRowsMax[$index] --><tr ng-repeat="scTableRowMax in scTableRowsMax[$index]" class="ng-scope">
                                            <td style="text-align:right;padding-right:10%" class="ng-binding">30 ×
                                                <input type="text" id="scMax216" class="width-40 form-control ng-pristine ng-valid" placeholder="Max" ng-model="photon.scMax2" disabled="">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="5" id="scThreeByMax130" ng-change="DrawScChart($parent.$index);" ng-model="scTableRowMax.sc" onblur="keepDecimal(this.id, 3);" ng-blur="checkRange('scThreeByMax'+$parent.$index+scTableRowMax.fieldsizeA,0.001,1.500,numeric);">
                                            </td>
                                        </tr><!-- end ngRepeat: scTableRowMax in scTableRowsMax[$index] -->
                                        </tbody>
                                    </table>
                                    <table class="table table-bordered widget-box" id="tablesc3">
                                        <tbody>
                                        <tr>
                                            <th class="width-60">Field Size (Outer × Inner) (cm)&nbsp;
                                                <a class="tooltip-demo" href="img/Jaw and MLC specification.png" data-lightbox="example-set12" title="">
                                                    <i class="icon-exclamation-sign"></i>
                                                </a>
                                            </th>
                                            <th class="width-40">Sc</th>
                                        </tr>
                                        <!-- ngRepeat: scTableMaxRow in scTableMaxRows[$index] --><tr ng-repeat="scTableMaxRow in scTableMaxRows[$index]" class="ng-scope">
                                            <td style="text-align:left;padding-left:10%" class="ng-binding">
                                                <input type="text" class="width-40 form-control ng-pristine ng-valid" placeholder="Max" id="scMax10" ng-model="photon.scMax" disabled=""> × 3
                                            </td>
                                            <td>
                                                <input type="text" tabindex="6" class="form-control ng-pristine ng-valid" id="scMaxByThree13" ng-change="DrawScChart($parent.$index);" ng-model="scTableMaxRow.sc" onblur="keepDecimal(this.id, 3);" ng-blur="checkRange('scMaxByThree'+$parent.$index+scTableMaxRow.fieldsizeB,0.001,1.500,numeric);">
                                            </td>
                                        </tr><!-- end ngRepeat: scTableMaxRow in scTableMaxRows[$index] --><tr ng-repeat="scTableMaxRow in scTableMaxRows[$index]" class="ng-scope">
                                            <td style="text-align:left;padding-left:10%" class="ng-binding">
                                                <input type="text" class="width-40 form-control ng-pristine ng-valid" placeholder="Max" id="scMax11" ng-model="photon.scMax" disabled=""> × 5
                                            </td>
                                            <td>
                                                <input type="text" tabindex="6" class="form-control ng-pristine ng-valid" id="scMaxByThree15" ng-change="DrawScChart($parent.$index);" ng-model="scTableMaxRow.sc" onblur="keepDecimal(this.id, 3);" ng-blur="checkRange('scMaxByThree'+$parent.$index+scTableMaxRow.fieldsizeB,0.001,1.500,numeric);">
                                            </td>
                                        </tr><!-- end ngRepeat: scTableMaxRow in scTableMaxRows[$index] --><tr ng-repeat="scTableMaxRow in scTableMaxRows[$index]" class="ng-scope">
                                            <td style="text-align:left;padding-left:10%" class="ng-binding">
                                                <input type="text" class="width-40 form-control ng-pristine ng-valid" placeholder="Max" id="scMax12" ng-model="photon.scMax" disabled=""> × 8
                                            </td>
                                            <td>
                                                <input type="text" tabindex="6" class="form-control ng-pristine ng-valid" id="scMaxByThree18" ng-change="DrawScChart($parent.$index);" ng-model="scTableMaxRow.sc" onblur="keepDecimal(this.id, 3);" ng-blur="checkRange('scMaxByThree'+$parent.$index+scTableMaxRow.fieldsizeB,0.001,1.500,numeric);">
                                            </td>
                                        </tr><!-- end ngRepeat: scTableMaxRow in scTableMaxRows[$index] --><tr ng-repeat="scTableMaxRow in scTableMaxRows[$index]" class="ng-scope">
                                            <td style="text-align:left;padding-left:10%" class="ng-binding">
                                                <input type="text" class="width-40 form-control ng-pristine ng-valid" placeholder="Max" id="scMax13" ng-model="photon.scMax" disabled=""> × 10
                                            </td>
                                            <td>
                                                <input type="text" tabindex="6" class="form-control ng-pristine ng-valid" id="scMaxByThree110" ng-change="DrawScChart($parent.$index);" ng-model="scTableMaxRow.sc" onblur="keepDecimal(this.id, 3);" ng-blur="checkRange('scMaxByThree'+$parent.$index+scTableMaxRow.fieldsizeB,0.001,1.500,numeric);">
                                            </td>
                                        </tr><!-- end ngRepeat: scTableMaxRow in scTableMaxRows[$index] --><tr ng-repeat="scTableMaxRow in scTableMaxRows[$index]" class="ng-scope">
                                            <td style="text-align:left;padding-left:10%" class="ng-binding">
                                                <input type="text" class="width-40 form-control ng-pristine ng-valid" placeholder="Max" id="scMax14" ng-model="photon.scMax" disabled=""> × 15
                                            </td>
                                            <td>
                                                <input type="text" tabindex="6" class="form-control ng-pristine ng-valid" id="scMaxByThree115" ng-change="DrawScChart($parent.$index);" ng-model="scTableMaxRow.sc" onblur="keepDecimal(this.id, 3);" ng-blur="checkRange('scMaxByThree'+$parent.$index+scTableMaxRow.fieldsizeB,0.001,1.500,numeric);">
                                            </td>
                                        </tr><!-- end ngRepeat: scTableMaxRow in scTableMaxRows[$index] --><tr ng-repeat="scTableMaxRow in scTableMaxRows[$index]" class="ng-scope">
                                            <td style="text-align:left;padding-left:10%" class="ng-binding">
                                                <input type="text" class="width-40 form-control ng-pristine ng-valid" placeholder="Max" id="scMax15" ng-model="photon.scMax" disabled=""> × 20
                                            </td>
                                            <td>
                                                <input type="text" tabindex="6" class="form-control ng-pristine ng-valid" id="scMaxByThree120" ng-change="DrawScChart($parent.$index);" ng-model="scTableMaxRow.sc" onblur="keepDecimal(this.id, 3);" ng-blur="checkRange('scMaxByThree'+$parent.$index+scTableMaxRow.fieldsizeB,0.001,1.500,numeric);">
                                            </td>
                                        </tr><!-- end ngRepeat: scTableMaxRow in scTableMaxRows[$index] --><tr ng-repeat="scTableMaxRow in scTableMaxRows[$index]" class="ng-scope">
                                            <td style="text-align:left;padding-left:10%" class="ng-binding">
                                                <input type="text" class="width-40 form-control ng-pristine ng-valid" placeholder="Max" id="scMax16" ng-model="photon.scMax" disabled=""> × 30
                                            </td>
                                            <td>
                                                <input type="text" tabindex="6" class="form-control ng-pristine ng-valid" id="scMaxByThree130" ng-change="DrawScChart($parent.$index);" ng-model="scTableMaxRow.sc" onblur="keepDecimal(this.id, 3);" ng-blur="checkRange('scMaxByThree'+$parent.$index+scTableMaxRow.fieldsizeB,0.001,1.500,numeric);">
                                            </td>
                                        </tr><!-- end ngRepeat: scTableMaxRow in scTableMaxRows[$index] -->
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-12 col-lg-8">
                                    <div class="widget-box">
                                        <div class="widget-title">
                                            <span class="icon">
                                                <i class="icon-align-justify"></i>
                                            </span>
                                            <h5>Graph</h5>
                                        </div>
                                        <div class="widget-content">
                                            <div class="chart-620" id="scChart1"></div>
                                        </div>
                                        <div class="col-md-12 padding-left-50">
                                            <div class="font1">Field Size (cm)</div>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end ngRepeat: photon in photons -->
                    </div><!-- end ngIf: selectedMLC.MLCModel_Name!='Apex MLCi' && selectedMLC.MLCModel_Name!='Apex MLCi2' && selectedMLC.MLCModel_Name!='Apex Agility' -->
                </div>
            </section>

            <!-- Wedge -->
            <section id="wedge">

                <!--     General -->
                <div id="tabwedgeneral" ng-hide="sections.wge" class="ng-hide">
                    <div class="row">
                        <div class="widget-box">
                            <div class="widget-title">
                                <ul class="nav nav-tabs">
                                    <!-- ngRepeat: wedgeNumber in wedgeNumbers --><li ng-class="wStyle[$index]" ng-repeat="wedgeNumber in wedgeNumbers" id="wedgeGeneralTab0" ng-click="activateTab('wedgeGeneralTab', 'wedgeGeneral', wedgeNumber-1);setWdgTabIndex();" class="ng-scope active">
                                        <a href="#wedgeGeneral0" data-toggle="tab" class="width-78p ng-binding">W1&nbsp;&nbsp;&nbsp;
                                            <!-- ngIf: deleteIcon[$index] -->
                                        </a>
                                    </li><!-- end ngRepeat: wedgeNumber in wedgeNumbers -->
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <button type="button" class="btn btn-sm btn-primary" ng-click="addWedges();">
                                        <i class="icon-plus icon-white"></i> Wedge
                                    </button>
                                </ul>
                            </div>
                            <div class="tab-content widget-content">
                                <!-- ngRepeat: wedgeNumber in wedgeNumbers --><div ng-class="divStyle[$index]" id="wedgeGeneral0" ng-repeat="wedgeNumber in wedgeNumbers" class="ng-scope tab-pane active">
                                    <div class="row" id="wedgeo">
                                        <div class="col-xs-12 col-sm-12">
                                            <div class="widget-box">
                                                <div class="widget-title">
                                                    <span class="icon">
                                                        <i class="icon-align-justify"></i>
                                                    </span>
                                                    <h5>Geometry</h5>
                                                </div>
                                                <div class="widget-content nopadding">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <br>
                                                                <label class="font1">Set</label>
                                                                <div>
                                                                    <select class="form-control ng-pristine ng-valid" ng-model="selectedWedgeSet[wedgeNumber-1]" tabindex="1" id="selectedWedgeSet0" ng-options="WedgeGeometry.WedgeSet for WedgeGeometry in WedgeGeometrys[wedgeNumber-1]" ng-change="changeWedgeSet(wedgeNumber-1)"><option value="0" selected="selected">Elekta Wedge</option></select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <br>
                                                                <label class="font1">Specification</label>
                                                                <div>
                                                                    <select class="form-control ng-pristine ng-valid" tabindex="3" ng-change="updateNoneScanningTableBySpec(0)" ng-model="selectedWedgeSetSpecification[wedgeNumber-1]" id="selectedWedgeSetSpecification0" ng-options="WSS.SpecificationName for WSS in WedgeSetSpecifications[wedgeNumber-1]"><option value="0" selected="selected">Large</option><option value="1">Standard</option></select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <br>
                                                                <label class="font1">Source-to-Wedge Distance (cm)</label>
                                                                <div>
                                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="2" id="stwdis0" ng-model="SourceToWedgeDistance[wedgeNumber-1]" ng-change="checkNumber('stwdis0');">&nbsp;
                                                                    <a class="tooltip-demo" data-toggle="tooltip" data-placement="top" title="You are changing the default template value for the selected Linac and MLC">
                                                                        <!-- ngIf: templateVal[wedgeNumber-1][0].flag -->
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <br>
                                                                <label class="font1">Material</label>
                                                                <div>
                                                                    <input type="text" class="form-control ng-pristine ng-valid" id="WedgeMaterial0" ng-model="selectedWedgeSetSpecification[wedgeNumber-1].WedgeMaterial" readonly="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <br>
                                                                <label class="font1">Max Field Size in Wedge Direction (cm)</label>
                                                                <div>
                                                                    <input type="text" class="form-control ng-pristine ng-valid" id="MaxFieldSizeInWedgeDirection0" ng-model="selectedWedgeSetSpecification[wedgeNumber-1].MaxFieldSizeInWedgeDirection" readonly="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <br>
                                                                <label class="font1">Max Field Size in Non-wedge Direction (cm)</label>
                                                                <div>
                                                                    <input type="text" class="form-control ng-pristine ng-valid" id="MaxFieldSizeInNonWedgeDirection0" ng-model="selectedWedgeSetSpecification[wedgeNumber-1].MaxFieldSizeInNonWedgeDirection" readonly="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <br>
                                                                <label class="font1">Type</label>
                                                                <div>
                                                                    <input type="text" class="form-control ng-pristine ng-valid" id="wedgeType0" ng-model="selectedvendor.WedgeType" readonly="">
                                                                </div>
                                                            </div>
                                                            <!-- ngIf: selectedvendor.Vendor_Name == 'Elekta' --><div class="col-md-6 ng-scope" ng-if="selectedvendor.Vendor_Name == 'Elekta'">
                                                                <br>
                                                                <label class="font1">Nominal Wedge Angle (°)</label>
                                                                <div>
                                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="4" id="NorminalWedgeAngle0" ng-model="NominalWedgeAngle[wedgeNumber-1]" ng-blur="checkRange('NorminalWedgeAngle'+(wedgeNumber-1),15,80,'int')">
                                                                </div>
                                                            </div><!-- end ngIf: selectedvendor.Vendor_Name == 'Elekta' -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="widget-box">
                                                <div class="widget-title">
                                                    <span class="icon">
                                                        <i class="icon-align-justify"></i>
                                                    </span>
                                                    <h5>Orientation</h5>
                                                </div>
                                                <div class="widget-content nopadding">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-6 top20">
                                                                <p class="font1">Mark the wedge direction for the wedge, with a collimator
                                                                    angle of 0°. Possible insertion directions for the
                                                                    wedge (gantry seen from the front).</p>
                                                                <div class="col-md-2">
                                                                    <a href="img/wedge_zoom.jpg" data-lightbox="example-set8" title="wedge orientation">
                                                                        <img type="text/javascript" src="img/30wedge.jpg" alt="wedgeorientation">
                                                                    </a>
                                                                </div>
                                                                <div class="col-md-7">
                                                                    <div class="col-md-1">
                                                                        <br>
                                                                        <label class="font1">&nbsp;a</label>
                                                                        <label>
                                                                            <input type="radio" id="row1a0" ng-model="wdgDirec[wedgeNumber-1].row0" value="a" ng-change="setWdgDirect(wedgeNumber-1, 0, 'a');" class="ng-pristine ng-valid" name="00Z">
                                                                        </label>
                                                                        <label>
                                                                            <input type="radio" ng-model="wdgDirec[wedgeNumber-1].row1" value="a" id="row2a0" ng-change="setWdgDirect(wedgeNumber-1, 1, 'a');" class="ng-pristine ng-valid" name="010">
                                                                        </label>
                                                                        <label>
                                                                            <input type="radio" ng-model="wdgDirec[wedgeNumber-1].row2" value="a" id="row3a0" ng-change="setWdgDirect(wedgeNumber-1, 2, 'a');" class="ng-pristine ng-valid" name="011">
                                                                        </label>
                                                                        <label>
                                                                            <input type="radio" ng-model="wdgDirec[wedgeNumber-1].row3" value="a" id="row4a0" ng-change="setWdgDirect(wedgeNumber-1, 3, 'a');" class="ng-pristine ng-valid" name="012">
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <br>
                                                                        <label class="font1">&nbsp;b</label>
                                                                        <label>
                                                                            <input type="radio" ng-model="wdgDirec[wedgeNumber-1].row0" value="b" id="row1b0" ng-change="setWdgDirect(wedgeNumber-1, 0, 'b');" class="ng-pristine ng-valid" name="013">
                                                                        </label>
                                                                        <label>
                                                                            <input type="radio" ng-model="wdgDirec[wedgeNumber-1].row1" value="b" id="row2b0" ng-change="setWdgDirect(wedgeNumber-1, 1, 'b');" class="ng-pristine ng-valid" name="014">
                                                                        </label>
                                                                        <label>
                                                                            <input type="radio" ng-model="wdgDirec[wedgeNumber-1].row2" value="b" id="row3b0" ng-change="setWdgDirect(wedgeNumber-1, 2, 'b');" class="ng-pristine ng-valid" name="015">
                                                                        </label>
                                                                        <label>
                                                                            <input type="radio" ng-model="wdgDirec[wedgeNumber-1].row3" value="b" id="row4b0" ng-change="setWdgDirect(wedgeNumber-1, 3, 'b');" class="ng-pristine ng-valid" name="016">
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <br>
                                                                        <label class="font1">&nbsp;c</label>
                                                                        <label>
                                                                            <input type="radio" ng-model="wdgDirec[wedgeNumber-1].row0" value="c" id="row1c0" ng-change="setWdgDirect(wedgeNumber-1, 0, 'c');" class="ng-pristine ng-valid" name="017">
                                                                        </label>
                                                                        <label>
                                                                            <input type="radio" ng-model="wdgDirec[wedgeNumber-1].row1" value="c" id="row2c0" ng-change="setWdgDirect(wedgeNumber-1, 1, 'c');" class="ng-pristine ng-valid" name="018">
                                                                        </label>
                                                                        <label>
                                                                            <input type="radio" ng-model="wdgDirec[wedgeNumber-1].row2" value="c" id="row3c0" ng-change="setWdgDirect(wedgeNumber-1, 2, 'c');" class="ng-pristine ng-valid" name="019">
                                                                        </label>
                                                                        <label>
                                                                            <input type="radio" ng-model="wdgDirec[wedgeNumber-1].row3" value="c" id="row4c0" ng-change="setWdgDirect(wedgeNumber-1, 3, 'c');" class="ng-pristine ng-valid" name="01A">
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <br>
                                                                        <label class="font1">&nbsp;d</label>
                                                                        <label>
                                                                            <input type="radio" ng-model="wdgDirec[wedgeNumber-1].row0" value="d" id="row1d0" ng-change="setWdgDirect(wedgeNumber-1, 0, 'd');" class="ng-pristine ng-valid" name="01B">
                                                                        </label>
                                                                        <label>
                                                                            <input type="radio" ng-model="wdgDirec[wedgeNumber-1].row1" value="d" id="row2d0" ng-change="setWdgDirect(wedgeNumber-1, 1, 'd');" class="ng-pristine ng-valid" name="01C">
                                                                        </label>
                                                                        <label>
                                                                            <input type="radio" ng-model="wdgDirec[wedgeNumber-1].row2" value="d" id="row3d0" ng-change="setWdgDirect(wedgeNumber-1, 2, 'd');" class="ng-pristine ng-valid" name="01D">
                                                                        </label>
                                                                        <label>
                                                                            <input type="radio" ng-model="wdgDirec[wedgeNumber-1].row3" value="d" id="row4d0" ng-change="setWdgDirect(wedgeNumber-1, 3, 'd');" class="ng-pristine ng-valid" name="01E">
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <br>
                                                                        <label class="font1">N/A</label>
                                                                        <label>
                                                                            <input type="radio" ng-model="wdgDirec[wedgeNumber-1].row0" value="N/A" id="row1n0" ng-change="setWdgDirect(wedgeNumber-1, 0, 'N/A');" class="ng-pristine ng-valid" name="01F">
                                                                        </label>
                                                                        <label>
                                                                            <input type="radio" ng-model="wdgDirec[wedgeNumber-1].row1" value="N/A" id="row2n0" ng-change="setWdgDirect(wedgeNumber-1, 1, 'N/A');" class="ng-pristine ng-valid" name="01G">
                                                                        </label>
                                                                        <label>
                                                                            <input type="radio" ng-model="wdgDirec[wedgeNumber-1].row2" value="N/A" id="row3n0" ng-change="setWdgDirect(wedgeNumber-1, 2, 'N/A');" class="ng-pristine ng-valid" name="01H">
                                                                        </label>
                                                                        <label>
                                                                            <input type="radio" ng-model="wdgDirec[wedgeNumber-1].row3" value="N/A" id="row4n0" ng-change="setWdgDirect(wedgeNumber-1, 3, 'N/A');" class="ng-pristine ng-valid" name="01I">
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 top20">
                                                                <p class="font1">Short label to identify the wedge and the insert position.
                                                                    Example: 3RW15M</p>
                                                                <div class="row">
                                                                    <div class="col-md-5 top10p">
                                                                        <label class="font1">a)&nbsp;</label>
                                                                        <span>
                                                                            <input type="text" class="form-control ng-pristine ng-valid" tabindex="6" id="a0" ng-readonly="wdgDirInput[wedgeNumber-1][0].read" ng-model="wdgDirInput[wedgeNumber-1][0].val" ng-change="CheckSpecCharacters('a0');updateWedgeDirsLabel(wedgeNumber, 'a', wdgDirInput[wedgeNumber-1][0].val)">
                                                                        </span>
                                                                    </div>
                                                                    <div class="col-md-5 top10p">
                                                                        <label class="font1">b)&nbsp;</label>
                                                                        <span>
                                                                            <input type="text" class="form-control ng-pristine ng-valid" id="b0" ng-readonly="wdgDirInput[wedgeNumber-1][1].read" ng-model="wdgDirInput[wedgeNumber-1][1].val" ng-change="CheckSpecCharacters('b0');updateWedgeDirsLabel(wedgeNumber, 'b', wdgDirInput[wedgeNumber-1][1].val)" readonly="readonly">
                                                                        </span>
                                                                    </div>
                                                                    <div class="col-md-5 top10p bot20p">
                                                                        <label class="font1">c)&nbsp;</label>
                                                                        <span>
                                                                            <input type="text" class="form-control ng-pristine ng-valid" id="c0" ng-readonly="wdgDirInput[wedgeNumber-1][2].read" ng-model="wdgDirInput[wedgeNumber-1][2].val" ng-change="CheckSpecCharacters('c0');updateWedgeDirsLabel(wedgeNumber, 'c', wdgDirInput[wedgeNumber-1][2].val)" readonly="readonly">
                                                                        </span>
                                                                    </div>
                                                                    <div class="col-md-5 top10p bot20p">
                                                                        <label class="font1">d)&nbsp;</label>
                                                                        <span>
                                                                            <input type="text" class="form-control ng-pristine ng-valid" id="d0" ng-readonly="wdgDirInput[wedgeNumber-1][3].read" ng-model="wdgDirInput[wedgeNumber-1][3].val" ng-change="CheckSpecCharacters('d0');updateWedgeDirsLabel(wedgeNumber, 'd', wdgDirInput[wedgeNumber-1][3].val)" readonly="readonly">
                                                                        </span>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label class="font1">Wedge Insertion Direction</label>
                                                                        <a class="tooltip-demo" data-toggle="tooltip" data-placement="top" title="Please provide the wedge insertion direction used for acquiring wedge water scan measurements">
                                                                            <i class="icon-exclamation-sign"></i>
                                                                        </a>
                                                                        <div>
                                                                            <select class="form-control width-67 ng-pristine ng-valid" id="wdgInsDir0" ng-model="wdgInsDir[wedgeNumber-1]" ng-options="dir.dirName for dir in wedgeDirs['wdg' + wedgeNumber]" ng-change="check('wdgInsDir0')"><option value="0" selected="selected">a</option></select>
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
                                </div><!-- end ngRepeat: wedgeNumber in wedgeNumbers -->
                            </div>
                        </div>
                    </div>
                </div>
                <!--     Non-scanning data-->
                <div id="tablewedout" ng-hide="sections.wou" class="ng-hide">
                    <div class="row">
                        <div class="widget-box">
                            <div class="widget-title" id="tablewedout1">
                                <ul class="nav nav-tabs">
                                    <!-- ngRepeat: machineWedge in machineWedges --><li ng-class="style[$index]" id="wdgOfTab0" ng-repeat="machineWedge in machineWedges" ng-click="DrawOutputFacChart($index);activateTab('wdgOfTab','outputFactorsTable', $index);" class="ng-scope active">
                                        <a href="#outputFactorsTable0" data-toggle="tab" class="ng-binding">Precise04xW1</a>
                                    </li><!-- end ngRepeat: machineWedge in machineWedges --><li ng-class="style[$index]" id="wdgOfTab1" ng-repeat="machineWedge in machineWedges" ng-click="DrawOutputFacChart($index);activateTab('wdgOfTab','outputFactorsTable', $index);" class="ng-scope">
                                        <a href="#outputFactorsTable1" data-toggle="tab" class="ng-binding">Precise06xW1</a>
                                    </li><!-- end ngRepeat: machineWedge in machineWedges -->
                                </ul>
                            </div>
                            <div class="widget-content tab-content">
                                <!-- ngRepeat: machineWedge in machineWedges --><div ng-class="divStyle[$index]" id="outputFactorsTable0" ng-repeat="machineWedge in machineWedges" class="ng-scope tab-pane active">
                                    <div class="row">
                                        <div class="col-md-12 bot20p">
                                            <button class="btn btn-block btn-primary width-30" ng-show="wedgeDis.0.0" ng-click="disWedgeNonSD($index,machineWedge.photonID,machineWedge.wedgeID-1)">Disable</button>
                                            <button class="btn btn-block btn-primary width-30 ng-hide" ng-show="!wedgeDis.0.0" ng-click="disWedgeNonSD($index,machineWedge.photonID,machineWedge.wedgeID-1)">Activate</button>
                                        </div>
                                        <div class="col-md-6">
                                            <p>
                                                <span class="font1">Total Scatter Correction Factors(Scp)</span>
                                                in water at isocenter point, 10 cm Depth (90 cm SSD):
                                            </p>
                                            <table class="table table-bordered widget-box">
                                                <thead>
                                                <tr><th>Field Size (cm)
                                                        <a class="tooltip-demo" data-toggle="tooltip" data-placement="top" title="Field size is defined at isocenter distance">&nbsp;
                                                            <i class="icon-exclamation-sign"></i>
                                                        </a>
                                                    </th>
                                                    <th class="ng-hide">Output Factor in Air
                                                        <a class="tooltip-demo" data-toggle="tooltip" data-placement="top" title="The output factor is normalized to 1 for the nominal field size of 10x10 cm at the nominal SSD for the treatment machine.">&nbsp;
                                                            <i class="icon-exclamation-sign"></i>
                                                        </a>
                                                    </th>
                                                    <th>Output Factor in Water
                                                        <a class="tooltip-demo" data-toggle="tooltip" data-placement="top" title="The output factor is normalized to 1 for the nominal field size of 10x10 cm at the nominal SSD for the treatment machine.">&nbsp;
                                                            <i class="icon-exclamation-sign"></i>
                                                        </a>
                                                    </th>
                                                </tr></thead>
                                                <tbody>
                                                <!-- ngRepeat: wedgeTableRow in wedgeTableRows[$index] --><tr ng-repeat="wedgeTableRow in wedgeTableRows[$index]" class="ng-scope">
                                                    <td class="ng-binding">5×5</td>
                                                    <td class="ng-hide">
                                                        <input class="form-control ng-pristine ng-valid" tabindex="3" type="text" id="FiveInAir00" ng-change="DrawOutputFacChart($parent.$index)" ng-readonly="wedgeTableRow.wedgeReadOnly || !wedgeDis[0][0]" ng-model="wedgeTableRow.air" onblur="keepDecimal(this.id, 3);" ng-blur="checkRange('FiveInAir'+ $parent.$index + $index,0.001,1.500,numeric)">
                                                    </td>
                                                    <td>
                                                        <input class="form-control ng-pristine ng-valid" tabindex="5" type="text" id="FiveInWater00" ng-change="DrawOutputFacChart($parent.$index)" ng-readonly="wedgeTableRow.wedgeReadOnly || !wedgeDis[0][0]" ng-model="wedgeTableRow.water" onblur="keepDecimal(this.id, 3);" ng-blur="checkRange('FiveInWater'+ $parent.$index + $index,0.001,1.500,numeric);">
                                                    </td>
                                                </tr><!-- end ngRepeat: wedgeTableRow in wedgeTableRows[$index] --><tr ng-repeat="wedgeTableRow in wedgeTableRows[$index]" class="ng-scope">
                                                    <td class="ng-binding">10×10</td>
                                                    <td class="ng-hide">
                                                        <input class="form-control ng-pristine ng-valid" tabindex="3" type="text" id="FiveInAir01" ng-change="DrawOutputFacChart($parent.$index)" ng-readonly="wedgeTableRow.wedgeReadOnly || !wedgeDis[0][0]" ng-model="wedgeTableRow.air" onblur="keepDecimal(this.id, 3);" ng-blur="checkRange('FiveInAir'+ $parent.$index + $index,0.001,1.500,numeric)" readonly="readonly">
                                                    </td>
                                                    <td>
                                                        <input class="form-control ng-pristine ng-valid" tabindex="5" type="text" id="FiveInWater01" ng-change="DrawOutputFacChart($parent.$index)" ng-readonly="wedgeTableRow.wedgeReadOnly || !wedgeDis[0][0]" ng-model="wedgeTableRow.water" onblur="keepDecimal(this.id, 3);" ng-blur="checkRange('FiveInWater'+ $parent.$index + $index,0.001,1.500,numeric);" readonly="readonly">
                                                    </td>
                                                </tr><!-- end ngRepeat: wedgeTableRow in wedgeTableRows[$index] --><tr ng-repeat="wedgeTableRow in wedgeTableRows[$index]" class="ng-scope">
                                                    <td class="ng-binding">15×15</td>
                                                    <td class="ng-hide">
                                                        <input class="form-control ng-pristine ng-valid" tabindex="3" type="text" id="FiveInAir02" ng-change="DrawOutputFacChart($parent.$index)" ng-readonly="wedgeTableRow.wedgeReadOnly || !wedgeDis[0][0]" ng-model="wedgeTableRow.air" onblur="keepDecimal(this.id, 3);" ng-blur="checkRange('FiveInAir'+ $parent.$index + $index,0.001,1.500,numeric)">
                                                    </td>
                                                    <td>
                                                        <input class="form-control ng-pristine ng-valid" tabindex="5" type="text" id="FiveInWater02" ng-change="DrawOutputFacChart($parent.$index)" ng-readonly="wedgeTableRow.wedgeReadOnly || !wedgeDis[0][0]" ng-model="wedgeTableRow.water" onblur="keepDecimal(this.id, 3);" ng-blur="checkRange('FiveInWater'+ $parent.$index + $index,0.001,1.500,numeric);">
                                                    </td>
                                                </tr><!-- end ngRepeat: wedgeTableRow in wedgeTableRows[$index] --><tr ng-repeat="wedgeTableRow in wedgeTableRows[$index]" class="ng-scope">
                                                    <td class="ng-binding">20×20</td>
                                                    <td class="ng-hide">
                                                        <input class="form-control ng-pristine ng-valid" tabindex="3" type="text" id="FiveInAir03" ng-change="DrawOutputFacChart($parent.$index)" ng-readonly="wedgeTableRow.wedgeReadOnly || !wedgeDis[0][0]" ng-model="wedgeTableRow.air" onblur="keepDecimal(this.id, 3);" ng-blur="checkRange('FiveInAir'+ $parent.$index + $index,0.001,1.500,numeric)">
                                                    </td>
                                                    <td>
                                                        <input class="form-control ng-pristine ng-valid" tabindex="5" type="text" id="FiveInWater03" ng-change="DrawOutputFacChart($parent.$index)" ng-readonly="wedgeTableRow.wedgeReadOnly || !wedgeDis[0][0]" ng-model="wedgeTableRow.water" onblur="keepDecimal(this.id, 3);" ng-blur="checkRange('FiveInWater'+ $parent.$index + $index,0.001,1.500,numeric);">
                                                    </td>
                                                </tr><!-- end ngRepeat: wedgeTableRow in wedgeTableRows[$index] -->
                                                <tr>
                                                    <td>
                                                        <input class="width-30 form-control ng-pristine ng-valid" type="text" tabindex="1" placeholder="Max" id="WedgeMax0" ng-model="wdgOfArray[$index].WedgeMax" ng-change="check('WedgeMax' + 0);" ng-blur="checkRange('WedgeMax'+$index,10,80,int);DrawOutputFacChart($index);" ng-readonly="!wedgeDis[0][0]"> ×
                                                        <input class="width-30 form-control ng-pristine ng-valid" id="WedgeMax20" tabindex="2" type="text" placeholder="Max" ng-model="wdgOfArray[$index].WedgeMax2" ng-blur="checkRange('WedgeMax2'+$index,10,80,int);DrawOutputFacChart($index);" onblur="keepDecimal(this.id, 0);" ng-readonly="!wedgeDis[0][0]">
                                                    </td>
                                                    <td class="ng-hide">
                                                        <input class="form-control  ng-pristine ng-valid" tabindex="4" type="text" id="MaxInAir0" ng-model="wdgOfArray[$index].MaxInAir" ng-change="check('MaxInAir' + 0);DrawOutputFacChart(0)" onblur="keepDecimal(this.id, 3);" ng-blur="checkRange('MaxInAir'+$index,0.001,1.500,numeric);" ng-readonly="!wedgeDis[0][0]">
                                                    </td>
                                                    <td>
                                                        <input class="form-control  ng-pristine ng-valid" tabindex="6" type="text" id="MaxInWater0" ng-model="wdgOfArray[$index].MaxInWater" ng-change="check('MaxInWater' + 0);DrawOutputFacChart(0)" onblur="keepDecimal(this.id, 3);" ng-blur="checkRange('MaxInWater'+$index,0.001,1.500,numeric);" ng-readonly="!wedgeDis[0][0]">
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <p>
                                                <span class="font1">Absolute Dose Calibration</span>
                                                in water at isocenter point, 10 cm Depth (90 cm SSD), when delivering a fixed number of MU for the reference field size:
                                            </p>
                                            <table class="table table-striped table-bordered condensed" id="tablewedgeout3">
                                                <tbody>
                                                <tr><th class="width-30">Reference Field Size (cm)&nbsp;
                                                        <a class="tooltip-demo" data-toggle="tooltip" data-placement="top" title="Field size is defined at isocenter distance">
                                                            <i class="icon-exclamation-sign"></i>
                                                        </a>
                                                    </th>
                                                    <th>SSD (cm)</th>
                                                    <th>MU</th>
                                                    <th>Absolute Dose (Gy)</th>
                                                    <td class="width-15" rowspan="2">
                                                        <a href="img/Wedge Field Absolute Dose at SDD100.png" data-lightbox="example-set7" title="Wedge Field Absolute Dose at SDD100">
                                                            <img type="text/javascript" src="img/Wedge Field Absolute Dose at SDD100.png" class="cursor-pointer width-67" alt="wedgedoserate">
                                                        </a>
                                                    </td>
                                                </tr><tr>
                                                    <td class="ng-binding">10x10</td>
                                                    <td>
                                                        <input id="wdgOfSdd" class="form-control ng-pristine ng-valid" type="text" ng-model="wdgOfArray[$index].wdgOfSdd" disabled="">
                                                    </td>
                                                    <td>
                                                        <input id="wdgOfMu" class="form-control ng-pristine ng-valid" type="text" ng-model="wdgOfArray[$index].wdgOfMu" disabled="">
                                                    </td>
                                                    <td>
                                                        <input class="form-control ng-pristine ng-valid" type="text" tabindex="8" id="absdoseforoutput0" ng-model="wdgOfArray[$index].WedgeAbsoluteDose" ng-change="checkWedgeAbsoluteDose90('absdoseforoutput0', machineWedge.photonID, $index);" ng-blur="checkRange('absdoseforoutput'+ $index,0.001,10.000,'numeric');" onblur="keepDecimal(this.id, 3);" ng-readonly="!wedgeDis.0.0">
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <p>
                                                <span class="font1">Wedge Transmission Factor (WF)</span>
                                                <a class="tooltip-demo" data-toggle="tooltip" data-placement="top" title="The WF is defined as 10cm depth (90cm SSD) in a water phantom on the beam central axis with and without the wedge.">
                                                    <i class="icon-exclamation-sign"></i>
                                                </a>
                                                in water at isocenter point, 10 cm Depth (90 cm SSD), for the reference field size:
                                            </p>
                                            <table class="table table-bordered widget-box" id="tableWdgoutput3">
                                                <tbody>
                                                <tr>
                                                    <th>Reference Field Size (cm)&nbsp;
                                                        <a class="tooltip-demo" data-toggle="tooltip" data-placement="top" title="Field size is defined at isocenter distance">
                                                            <i class="icon-exclamation-sign"></i>
                                                        </a>
                                                    </th>
                                                    <th>Dose Wedge / Open</th>
                                                </tr>
                                                <tr>
                                                    <td class="ng-binding">10x10</td>
                                                    <td>
                                                        <input id="wedgeopendose0" type="text" tabindex="7" class="width-30 form-control ng-pristine ng-valid" ng-model="wdgOfArray[$index].DoseWedgeOpen" ng-disabled="true" disabled="disabled">
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-6 top20">
                                            <div class="widget-box">
                                                <div class="widget-title">
                                                    <span class="icon">
                                                        <i class="icon-align-justify"></i>
                                                    </span>
                                                    <h5>Graph</h5>
                                                </div>
                                                <div class="widget-content">
                                                    <div class="chart-500" id="ofChart0"></div>
                                                </div>
                                                <div class="col-md-12 padding-left-50">
                                                    <div class="font1">Field Size (cm)</div>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end ngRepeat: machineWedge in machineWedges --><div ng-class="divStyle[$index]" id="outputFactorsTable1" ng-repeat="machineWedge in machineWedges" class="ng-scope tab-pane">
                                    <div class="row">
                                        <div class="col-md-12 bot20p">
                                            <button class="btn btn-block btn-primary width-30" ng-show="wedgeDis.1.0" ng-click="disWedgeNonSD($index,machineWedge.photonID,machineWedge.wedgeID-1)">Disable</button>
                                            <button class="btn btn-block btn-primary width-30 ng-hide" ng-show="!wedgeDis.1.0" ng-click="disWedgeNonSD($index,machineWedge.photonID,machineWedge.wedgeID-1)">Activate</button>
                                        </div>
                                        <div class="col-md-6">
                                            <p>
                                                <span class="font1">Total Scatter Correction Factors(Scp)</span>
                                                in water at isocenter point, 10 cm Depth (90 cm SSD):
                                            </p>
                                            <table class="table table-bordered widget-box">
                                                <thead>
                                                <tr><th>Field Size (cm)
                                                        <a class="tooltip-demo" data-toggle="tooltip" data-placement="top" title="Field size is defined at isocenter distance">&nbsp;
                                                            <i class="icon-exclamation-sign"></i>
                                                        </a>
                                                    </th>
                                                    <th class="ng-hide">Output Factor in Air
                                                        <a class="tooltip-demo" data-toggle="tooltip" data-placement="top" title="The output factor is normalized to 1 for the nominal field size of 10x10 cm at the nominal SSD for the treatment machine.">&nbsp;
                                                            <i class="icon-exclamation-sign"></i>
                                                        </a>
                                                    </th>
                                                    <th>Output Factor in Water
                                                        <a class="tooltip-demo" data-toggle="tooltip" data-placement="top" title="The output factor is normalized to 1 for the nominal field size of 10x10 cm at the nominal SSD for the treatment machine.">&nbsp;
                                                            <i class="icon-exclamation-sign"></i>
                                                        </a>
                                                    </th>
                                                </tr></thead>
                                                <tbody>
                                                <!-- ngRepeat: wedgeTableRow in wedgeTableRows[$index] --><tr ng-repeat="wedgeTableRow in wedgeTableRows[$index]" class="ng-scope">
                                                    <td class="ng-binding">5×5</td>
                                                    <td class="ng-hide">
                                                        <input class="form-control ng-pristine ng-valid" tabindex="3" type="text" id="FiveInAir10" ng-change="DrawOutputFacChart($parent.$index)" ng-readonly="wedgeTableRow.wedgeReadOnly || !wedgeDis[1][0]" ng-model="wedgeTableRow.air" onblur="keepDecimal(this.id, 3);" ng-blur="checkRange('FiveInAir'+ $parent.$index + $index,0.001,1.500,numeric)">
                                                    </td>
                                                    <td>
                                                        <input class="form-control ng-pristine ng-valid" tabindex="5" type="text" id="FiveInWater10" ng-change="DrawOutputFacChart($parent.$index)" ng-readonly="wedgeTableRow.wedgeReadOnly || !wedgeDis[1][0]" ng-model="wedgeTableRow.water" onblur="keepDecimal(this.id, 3);" ng-blur="checkRange('FiveInWater'+ $parent.$index + $index,0.001,1.500,numeric);">
                                                    </td>
                                                </tr><!-- end ngRepeat: wedgeTableRow in wedgeTableRows[$index] --><tr ng-repeat="wedgeTableRow in wedgeTableRows[$index]" class="ng-scope">
                                                    <td class="ng-binding">10×10</td>
                                                    <td class="ng-hide">
                                                        <input class="form-control ng-pristine ng-valid" tabindex="3" type="text" id="FiveInAir11" ng-change="DrawOutputFacChart($parent.$index)" ng-readonly="wedgeTableRow.wedgeReadOnly || !wedgeDis[1][0]" ng-model="wedgeTableRow.air" onblur="keepDecimal(this.id, 3);" ng-blur="checkRange('FiveInAir'+ $parent.$index + $index,0.001,1.500,numeric)" readonly="readonly">
                                                    </td>
                                                    <td>
                                                        <input class="form-control ng-pristine ng-valid" tabindex="5" type="text" id="FiveInWater11" ng-change="DrawOutputFacChart($parent.$index)" ng-readonly="wedgeTableRow.wedgeReadOnly || !wedgeDis[1][0]" ng-model="wedgeTableRow.water" onblur="keepDecimal(this.id, 3);" ng-blur="checkRange('FiveInWater'+ $parent.$index + $index,0.001,1.500,numeric);" readonly="readonly">
                                                    </td>
                                                </tr><!-- end ngRepeat: wedgeTableRow in wedgeTableRows[$index] --><tr ng-repeat="wedgeTableRow in wedgeTableRows[$index]" class="ng-scope">
                                                    <td class="ng-binding">15×15</td>
                                                    <td class="ng-hide">
                                                        <input class="form-control ng-pristine ng-valid" tabindex="3" type="text" id="FiveInAir12" ng-change="DrawOutputFacChart($parent.$index)" ng-readonly="wedgeTableRow.wedgeReadOnly || !wedgeDis[1][0]" ng-model="wedgeTableRow.air" onblur="keepDecimal(this.id, 3);" ng-blur="checkRange('FiveInAir'+ $parent.$index + $index,0.001,1.500,numeric)">
                                                    </td>
                                                    <td>
                                                        <input class="form-control ng-pristine ng-valid" tabindex="5" type="text" id="FiveInWater12" ng-change="DrawOutputFacChart($parent.$index)" ng-readonly="wedgeTableRow.wedgeReadOnly || !wedgeDis[1][0]" ng-model="wedgeTableRow.water" onblur="keepDecimal(this.id, 3);" ng-blur="checkRange('FiveInWater'+ $parent.$index + $index,0.001,1.500,numeric);">
                                                    </td>
                                                </tr><!-- end ngRepeat: wedgeTableRow in wedgeTableRows[$index] --><tr ng-repeat="wedgeTableRow in wedgeTableRows[$index]" class="ng-scope">
                                                    <td class="ng-binding">20×20</td>
                                                    <td class="ng-hide">
                                                        <input class="form-control ng-pristine ng-valid" tabindex="3" type="text" id="FiveInAir13" ng-change="DrawOutputFacChart($parent.$index)" ng-readonly="wedgeTableRow.wedgeReadOnly || !wedgeDis[1][0]" ng-model="wedgeTableRow.air" onblur="keepDecimal(this.id, 3);" ng-blur="checkRange('FiveInAir'+ $parent.$index + $index,0.001,1.500,numeric)">
                                                    </td>
                                                    <td>
                                                        <input class="form-control ng-pristine ng-valid" tabindex="5" type="text" id="FiveInWater13" ng-change="DrawOutputFacChart($parent.$index)" ng-readonly="wedgeTableRow.wedgeReadOnly || !wedgeDis[1][0]" ng-model="wedgeTableRow.water" onblur="keepDecimal(this.id, 3);" ng-blur="checkRange('FiveInWater'+ $parent.$index + $index,0.001,1.500,numeric);">
                                                    </td>
                                                </tr><!-- end ngRepeat: wedgeTableRow in wedgeTableRows[$index] -->
                                                <tr>
                                                    <td>
                                                        <input class="width-30 form-control ng-pristine ng-valid" type="text" tabindex="1" placeholder="Max" id="WedgeMax1" ng-model="wdgOfArray[$index].WedgeMax" ng-change="check('WedgeMax' + 1);" ng-blur="checkRange('WedgeMax'+$index,10,80,int);DrawOutputFacChart($index);" ng-readonly="!wedgeDis[1][0]"> ×
                                                        <input class="width-30 form-control ng-pristine ng-valid" id="WedgeMax21" tabindex="2" type="text" placeholder="Max" ng-model="wdgOfArray[$index].WedgeMax2" ng-blur="checkRange('WedgeMax2'+$index,10,80,int);DrawOutputFacChart($index);" onblur="keepDecimal(this.id, 0);" ng-readonly="!wedgeDis[1][0]">
                                                    </td>
                                                    <td class="ng-hide">
                                                        <input class="form-control  ng-pristine ng-valid" tabindex="4" type="text" id="MaxInAir1" ng-model="wdgOfArray[$index].MaxInAir" ng-change="check('MaxInAir' + 1);DrawOutputFacChart(1)" onblur="keepDecimal(this.id, 3);" ng-blur="checkRange('MaxInAir'+$index,0.001,1.500,numeric);" ng-readonly="!wedgeDis[1][0]">
                                                    </td>
                                                    <td>
                                                        <input class="form-control  ng-pristine ng-valid" tabindex="6" type="text" id="MaxInWater1" ng-model="wdgOfArray[$index].MaxInWater" ng-change="check('MaxInWater' + 1);DrawOutputFacChart(1)" onblur="keepDecimal(this.id, 3);" ng-blur="checkRange('MaxInWater'+$index,0.001,1.500,numeric);" ng-readonly="!wedgeDis[1][0]">
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <p>
                                                <span class="font1">Absolute Dose Calibration</span>
                                                in water at isocenter point, 10 cm Depth (90 cm SSD), when delivering a fixed number of MU for the reference field size:
                                            </p>
                                            <table class="table table-striped table-bordered condensed" id="tablewedgeout3">
                                                <tbody>
                                                <tr><th class="width-30">Reference Field Size (cm)&nbsp;
                                                        <a class="tooltip-demo" data-toggle="tooltip" data-placement="top" title="Field size is defined at isocenter distance">
                                                            <i class="icon-exclamation-sign"></i>
                                                        </a>
                                                    </th>
                                                    <th>SSD (cm)</th>
                                                    <th>MU</th>
                                                    <th>Absolute Dose (Gy)</th>
                                                    <td class="width-15" rowspan="2">
                                                        <a href="img/Wedge Field Absolute Dose at SDD100.png" data-lightbox="example-set7" title="Wedge Field Absolute Dose at SDD100">
                                                            <img type="text/javascript" src="img/Wedge Field Absolute Dose at SDD100.png" class="cursor-pointer width-67" alt="wedgedoserate">
                                                        </a>
                                                    </td>
                                                </tr><tr>
                                                    <td class="ng-binding">10x10</td>
                                                    <td>
                                                        <input id="wdgOfSdd" class="form-control ng-pristine ng-valid" type="text" ng-model="wdgOfArray[$index].wdgOfSdd" disabled="">
                                                    </td>
                                                    <td>
                                                        <input id="wdgOfMu" class="form-control ng-pristine ng-valid" type="text" ng-model="wdgOfArray[$index].wdgOfMu" disabled="">
                                                    </td>
                                                    <td>
                                                        <input class="form-control ng-pristine ng-valid" type="text" tabindex="8" id="absdoseforoutput1" ng-model="wdgOfArray[$index].WedgeAbsoluteDose" ng-change="checkWedgeAbsoluteDose90('absdoseforoutput1', machineWedge.photonID, $index);" ng-blur="checkRange('absdoseforoutput'+ $index,0.001,10.000,'numeric');" onblur="keepDecimal(this.id, 3);" ng-readonly="!wedgeDis.1.0">
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <p>
                                                <span class="font1">Wedge Transmission Factor (WF)</span>
                                                <a class="tooltip-demo" data-toggle="tooltip" data-placement="top" title="The WF is defined as 10cm depth (90cm SSD) in a water phantom on the beam central axis with and without the wedge.">
                                                    <i class="icon-exclamation-sign"></i>
                                                </a>
                                                in water at isocenter point, 10 cm Depth (90 cm SSD), for the reference field size:
                                            </p>
                                            <table class="table table-bordered widget-box" id="tableWdgoutput3">
                                                <tbody>
                                                <tr>
                                                    <th>Reference Field Size (cm)&nbsp;
                                                        <a class="tooltip-demo" data-toggle="tooltip" data-placement="top" title="Field size is defined at isocenter distance">
                                                            <i class="icon-exclamation-sign"></i>
                                                        </a>
                                                    </th>
                                                    <th>Dose Wedge / Open</th>
                                                </tr>
                                                <tr>
                                                    <td class="ng-binding">10x10</td>
                                                    <td>
                                                        <input id="wedgeopendose1" type="text" tabindex="7" class="width-30 form-control ng-pristine ng-valid" ng-model="wdgOfArray[$index].DoseWedgeOpen" ng-disabled="true" disabled="disabled">
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-6 top20">
                                            <div class="widget-box">
                                                <div class="widget-title">
                                                    <span class="icon">
                                                        <i class="icon-align-justify"></i>
                                                    </span>
                                                    <h5>Graph</h5>
                                                </div>
                                                <div class="widget-content">
                                                    <div class="chart-500" id="ofChart1"></div>
                                                </div>
                                                <div class="col-md-12 padding-left-50">
                                                    <div class="font1">Field Size (cm)</div>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end ngRepeat: machineWedge in machineWedges -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--     Stereotactic Cones parameters
        ================================================== -->
            <section id="coneSe">

                <!--       General -->
                <div id="sGen" ng-hide="sections.sgeneral" class="ng-hide">
                    <div class="col-xs-12 col-sm-12">
                        <div class="pull-right">
                            <button class="btn btn-primary width-120p" ng-click="addStereoCone();">
                                <i class="icon-plus icon-white"></i> Add Row
                            </button>
                            <button type="button" class="btn btn-primary width-120p" ng-show="!delStereo" ng-click="delStereo=true;" ng-disabled="stereoCones.length == 1" disabled="disabled">
                                <i class="icon-remove icon-white"></i> Delete Row
                            </button>
                            <button type="button" class="btn btn-primary width-120p ng-hide" ng-show="delStereo" ng-click="delStereo=false;">
                                <i class="icon-ok icon-white"></i> Exit Deletion
                            </button>
                        </div>
                        <table class="table table-bordered widget-box" id="tableconegen">
                            <thead>
                            <tr>
                                <th>Cone No.</th>
                                <th>Cone ID</th>
                                <th>Nominal Cone Size <br>(Diameter) (mm)</th>
                                <th>Cone Serial No.</th>
                                <th>Host Field Size (cm)</th>
                                <th>Host Machine Serial No.
                                    <span class="color-ff0711">∗</span>
                                    <a class="tooltip-demo" data-toggle="tooltip" data-placement="top" title="Machine Serial No. will be given after users input the following information on General Information Section.">&nbsp;
                                        <i class="icon-exclamation-sign"></i>
                                    </a>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <!-- ngRepeat: stereoC in stereoCones --><tr ng-repeat="stereoC in stereoCones" class="ng-scope">
                                <td class="ng-binding">#1
                                    <i class="icon-remove cursor-pointer ng-hide" ng-show="delStereo" ng-click="delStereoCone($index);"></i>
                                </td>
                                <td>
                                    <input type="text" id="stereoC0coneIdInput" class="form-control width-60 ng-pristine ng-valid" ng-model="stereoC.coneId" ng-blur="changeCone($index, stereoC.coneId)" ng-change="check('stereoC' + $index + 'coneIdInput')">
                                </td>
                                <td>
                                    <select type="text" id="stereoC0size" class="form-control ng-pristine ng-valid" ng-model="stereoC.size" ng-options="coneSize for coneSize in coneSizes"><option value="0" selected="selected">5.0</option><option value="1">7.5</option><option value="2">10.0</option><option value="3">12.5</option><option value="4">15.0</option><option value="5">17.5</option><option value="6">20.0</option><option value="7">25.0</option><option value="8">30.0</option><option value="9">35.0</option></select>
                                </td>
                                <td>
                                    <input type="text" id="stereoC0serialNo" class="form-control ng-pristine ng-valid" ng-model="stereoC.serialNo" ng-change="CheckSpecCharacters('stereoC0serialNo')">
                                </td>
                                <td>
                                        <span>
                                            <input type="text" id="hostFieldSizeA0" class="width-30 form-control ng-pristine ng-valid" ng-change="check('hostFieldSizeA' + $index)" ng-model="stereoC.hostFieldSize">
                                        </span> ×
                                    <span>
                                            <input type="text" id="hostFieldSizeB0" class="width-30 form-control ng-pristine ng-valid" ng-model="stereoC.hostFieldSize" disabled="">
                                        </span>
                                </td>
                                <td>
                                    <input type="text" id="MachineSerialNumber0" class="form-control ng-pristine ng-valid" ng-model="MachineSerialNumber" disabled="">
                                </td>
                            </tr><!-- end ngRepeat: stereoC in stereoCones -->
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Absolute dose calibration -->
                <div id="sabCal" ng-hide="sections.sab" class="ng-hide">
                    <div class="row">
                        <div class="widget-box" style="margin-left:15px;margin-right:15px">
                            <div class="ng-isolate-scope">
                                <ul class="nav nav-tabs" ng-class="{'nav-stacked': vertical, 'nav-justified': justified}" ng-transclude="">
                                    <!-- ngRepeat: machine in coneAbsDs --><li ng-class="{active: active, disabled: disabled}" heading="P1" active="machine.tabActive" ng-repeat="machine in coneAbsDs" class="ng-isolate-scope active">
                                        <a href="" ng-click="select()" tab-heading-transclude="" class="ng-binding">P1</a>
                                    </li><!-- end ngRepeat: machine in coneAbsDs --><li ng-class="{active: active, disabled: disabled}" heading="P2" active="machine.tabActive" ng-repeat="machine in coneAbsDs" class="ng-isolate-scope">
                                        <a href="" ng-click="select()" tab-heading-transclude="" class="ng-binding">P2</a>
                                    </li><!-- end ngRepeat: machine in coneAbsDs -->
                                </ul>
                                <div class="tab-content">
                                    <!-- ngRepeat: tab in tabs --><div class="tab-pane ng-scope active" ng-repeat="tab in tabs" ng-class="{active: tab.active}" tab-content-transclude="tab">

                                        <div class="row ng-scope" id="coneAbsDsTab0">
                                            <div class="col-md-12 bot20p margin10">
                                                <!-- ngIf: !machine.disableTab --><button class="btn btn-block btn-primary width-50 ng-scope" ng-if="!machine.disableTab" ng-click="disableConeAbsDsPage($index)">Disable</button><!-- end ngIf: !machine.disableTab -->
                                                <!-- ngIf: machine.disableTab -->
                                            </div>
                                            <div class="col-md-12">
                                                <!-- ngIf: type !='xio' --><div ng-if="type !='xio'" class="ng-scope">
                                                    <p>
                                                        <span class="font1">The absolute dose (Gy) of the host LINAC reference field, calibrated at 10cm depth, 90cm SSD.</span>
                                                    </p>
                                                    <table class="table table-bordered widget-box" id="tableConeFirst0">
                                                        <thead>
                                                        <tr>
                                                            <th style="width:50%">Host Machine ID</th>
                                                            <th style="width:50%">Absolute dose （Gy/100MU）</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>
                                            <span>
                                                <input type="text" class="form-control width-50 ng-pristine ng-valid" ng-model="machine.tabName" disabled="">
                                            </span>
                                                            </td>
                                                            <td>
                                            <span>
                                                <input type="text" class="form-control width-50 ng-pristine ng-valid" id="doseRate900" ng-disabled="machine.disableTab" ng-model="machine.doseRate90" ng-blur="checkAbsoluteDose('doseRate90' + $index, $index);">
                                            </span>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table><br>
                                                </div><!-- end ngIf: type !='xio' -->

                                                <!-- ngIf: type =='xio' -->

                                                <label class="font1">
                                                    "Daisy Chain" Normalization &nbsp;
                                                    <a class="tooltip-demo" ng-click="toggleConeDetectorTip()">
                                                        <i class="icon-question-sign"></i>
                                                    </a>
                                                </label>
                                                <p class="cone-help-tip" ng-class="{open: showConeDetectorTip}">
                                <span>Due to the small dimensions and steep dose gradients of cone based SRS/SRT photon beams,
                                    an appropriate dosimeter with dedicated stereotactic detectors of spatial resolution of approximately 1 mm
                                    or better is required to measure the basic dosimetry data. Especially, when one measures the total scatter factor (Scp),
                                    it is important to use an intermediate reference field appropriate for both the dedicated detector and ion chamber and apply the so-called "Daisy Chain" normalization.
                                    Record the following information correctly:
                                </span>
                                                </p>
                                                <table class="table table-bordered widget-box" id="tableConeSecond0">
                                                    <thead>
                                                    <tr>
                                                        <th style="width:50%">Reference Detector</th>
                                                        <th style="width:50%">Measurement Detector</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>
                                        <span>
                                            <input type="text" id="refDetectorModel0" class="form-control width-50 ng-pristine ng-valid" ng-disabled="machine.disableTab" ng-model="machine.refDetectorModel" ng-change="check('refDetectorModel' + $index)">
                                        </span>
                                                        </td>
                                                        <td>
                                        <span>
                                            <input type="text" id="srsDetectorModel0" class="form-control width-50 ng-pristine ng-valid" ng-disabled="machine.disableTab" ng-model="machine.srsDetectorModel" ng-change="check('srsDetectorModel' + $index)">
                                        </span>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                Intermediate field size used for "Daisy Chain" Normalization (cm):
                                                <input type="text" id="intermediateFldSz0" class="form-control width-20 ng-pristine ng-valid" ng-disabled="machine.disableTab" ng-model="machine.intermediateFldSz" ng-change="check('intermediateFldSz' +  $index)"><br><br>
                                                <br>
                                                <label class="cone-help-label">
                                                    Calibration dose per MU for each cone: verify the Scp and absolute dose. &nbsp;
                                                    <a class="tooltip-demo" ng-click="toggleConeTscfTip()">
                                                        <i class="icon-question-sign"></i>
                                                    </a>
                                                </label>
                                                <div class="cone-help-tip" ng-class="{open: showConeTscfTip}">
                                                    <p>
                                    <span>
                                        Assume a diode detector is used for 10 mm cone measurement, and an Ion Chamber is used for 100 x 100 mm (10 x10 cm) measurement, and 30 x 30 mm (3 x 3 cm) is the intermediate field size used, then the output factor of this 10 mm cone is calculated as:
                                    </span>
                                                    </p>
                                                    <br>
                                                    <img type="text/javascript" src="img\coneFormula.png">
                                                    <br><br><br>
                                                </div>
                                                <table class="table table-bordered widget-box" id="tableConeThird0">
                                                    <thead>
                                                    <tr>
                                                        <th style="width:25%">Cone ID</th>
                                                        <th style="width:25%">MU</th>
                                                        <th style="width:25%">Scp</th>
                                                        <th style="width:25%">Absolute Dose (Gy)</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <!-- ngRepeat: cone in machine.tableRows --><tr ng-repeat="cone in machine.tableRows" class="ng-scope">
                                                        <!-- ngIf: !cone.customizedConeId --><td ng-if="!cone.customizedConeId" class="ng-binding ng-scope">Cone1</td><!-- end ngIf: !cone.customizedConeId -->
                                                        <!-- ngIf: cone.customizedConeId -->
                                                        <td>
                                                            <input type="text" id="MU10000" class="form-control" value="100" disabled="">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="tscf00" class="form-control ng-pristine ng-valid" ng-disabled="machine.disableTab || !machine.refDetectorModel || !machine.intermediateFldSz || !machine.srsDetectorModel" ng-model="cone.tscf" ng-change="check('tscf' + $parent.$index + $index)" ng-blur="changeConeTscf($parent.$index, $index)" disabled="disabled">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control ng-pristine ng-valid" id="absDs00" ng-model="cone.absDs" disabled="">
                                                        </td>
                                                    </tr><!-- end ngRepeat: cone in machine.tableRows -->
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div><!-- end ngRepeat: tab in tabs --><div class="tab-pane ng-scope" ng-repeat="tab in tabs" ng-class="{active: tab.active}" tab-content-transclude="tab">

                                        <div class="row ng-scope" id="coneAbsDsTab1">
                                            <div class="col-md-12 bot20p margin10">
                                                <!-- ngIf: !machine.disableTab --><button class="btn btn-block btn-primary width-50 ng-scope" ng-if="!machine.disableTab" ng-click="disableConeAbsDsPage($index)">Disable</button><!-- end ngIf: !machine.disableTab -->
                                                <!-- ngIf: machine.disableTab -->
                                            </div>
                                            <div class="col-md-12">
                                                <!-- ngIf: type !='xio' --><div ng-if="type !='xio'" class="ng-scope">
                                                    <p>
                                                        <span class="font1">The absolute dose (Gy) of the host LINAC reference field, calibrated at 10cm depth, 90cm SSD.</span>
                                                    </p>
                                                    <table class="table table-bordered widget-box" id="tableConeFirst1">
                                                        <thead>
                                                        <tr>
                                                            <th style="width:50%">Host Machine ID</th>
                                                            <th style="width:50%">Absolute dose （Gy/100MU）</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>
                                            <span>
                                                <input type="text" class="form-control width-50 ng-pristine ng-valid" ng-model="machine.tabName" disabled="">
                                            </span>
                                                            </td>
                                                            <td>
                                            <span>
                                                <input type="text" class="form-control width-50 ng-pristine ng-valid" id="doseRate901" ng-disabled="machine.disableTab" ng-model="machine.doseRate90" ng-blur="checkAbsoluteDose('doseRate90' + $index, $index);">
                                            </span>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table><br>
                                                </div><!-- end ngIf: type !='xio' -->

                                                <!-- ngIf: type =='xio' -->

                                                <label class="font1">
                                                    "Daisy Chain" Normalization &nbsp;
                                                    <a class="tooltip-demo" ng-click="toggleConeDetectorTip()">
                                                        <i class="icon-question-sign"></i>
                                                    </a>
                                                </label>
                                                <p class="cone-help-tip" ng-class="{open: showConeDetectorTip}">
                                <span>Due to the small dimensions and steep dose gradients of cone based SRS/SRT photon beams,
                                    an appropriate dosimeter with dedicated stereotactic detectors of spatial resolution of approximately 1 mm
                                    or better is required to measure the basic dosimetry data. Especially, when one measures the total scatter factor (Scp),
                                    it is important to use an intermediate reference field appropriate for both the dedicated detector and ion chamber and apply the so-called "Daisy Chain" normalization.
                                    Record the following information correctly:
                                </span>
                                                </p>
                                                <table class="table table-bordered widget-box" id="tableConeSecond1">
                                                    <thead>
                                                    <tr>
                                                        <th style="width:50%">Reference Detector</th>
                                                        <th style="width:50%">Measurement Detector</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>
                                        <span>
                                            <input type="text" id="refDetectorModel1" class="form-control width-50 ng-pristine ng-valid" ng-disabled="machine.disableTab" ng-model="machine.refDetectorModel" ng-change="check('refDetectorModel' + $index)">
                                        </span>
                                                        </td>
                                                        <td>
                                        <span>
                                            <input type="text" id="srsDetectorModel1" class="form-control width-50 ng-pristine ng-valid" ng-disabled="machine.disableTab" ng-model="machine.srsDetectorModel" ng-change="check('srsDetectorModel' + $index)">
                                        </span>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                Intermediate field size used for "Daisy Chain" Normalization (cm):
                                                <input type="text" id="intermediateFldSz1" class="form-control width-20 ng-pristine ng-valid" ng-disabled="machine.disableTab" ng-model="machine.intermediateFldSz" ng-change="check('intermediateFldSz' +  $index)"><br><br>
                                                <br>
                                                <label class="cone-help-label">
                                                    Calibration dose per MU for each cone: verify the Scp and absolute dose. &nbsp;
                                                    <a class="tooltip-demo" ng-click="toggleConeTscfTip()">
                                                        <i class="icon-question-sign"></i>
                                                    </a>
                                                </label>
                                                <div class="cone-help-tip" ng-class="{open: showConeTscfTip}">
                                                    <p>
                                    <span>
                                        Assume a diode detector is used for 10 mm cone measurement, and an Ion Chamber is used for 100 x 100 mm (10 x10 cm) measurement, and 30 x 30 mm (3 x 3 cm) is the intermediate field size used, then the output factor of this 10 mm cone is calculated as:
                                    </span>
                                                    </p>
                                                    <br>
                                                    <img type="text/javascript" src="img\coneFormula.png">
                                                    <br><br><br>
                                                </div>
                                                <table class="table table-bordered widget-box" id="tableConeThird1">
                                                    <thead>
                                                    <tr>
                                                        <th style="width:25%">Cone ID</th>
                                                        <th style="width:25%">MU</th>
                                                        <th style="width:25%">Scp</th>
                                                        <th style="width:25%">Absolute Dose (Gy)</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <!-- ngRepeat: cone in machine.tableRows --><tr ng-repeat="cone in machine.tableRows" class="ng-scope">
                                                        <!-- ngIf: !cone.customizedConeId --><td ng-if="!cone.customizedConeId" class="ng-binding ng-scope"></td><!-- end ngIf: !cone.customizedConeId -->
                                                        <!-- ngIf: cone.customizedConeId -->
                                                        <td>
                                                            <input type="text" id="MU10010" class="form-control" value="100" disabled="">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="tscf10" class="form-control ng-pristine ng-valid" ng-disabled="machine.disableTab || !machine.refDetectorModel || !machine.intermediateFldSz || !machine.srsDetectorModel" ng-model="cone.tscf" ng-change="check('tscf' + $parent.$index + $index)" ng-blur="changeConeTscf($parent.$index, $index)" disabled="disabled">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control ng-pristine ng-valid" id="absDs10" ng-model="cone.absDs" disabled="">
                                                        </td>
                                                    </tr><!-- end ngRepeat: cone in machine.tableRows -->
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div><!-- end ngRepeat: tab in tabs -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--     Electron machine parameters
        ================================================== -->
            <section id="electronSct">
                <!--       General -->
                <div id="tabelgen" ng-hide="sections.ege" class="ng-hide">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <div class="pull-right">
                                <button class="btn btn-primary width-120p" ng-click="addElectronMachine();">
                                    <i class="icon-plus icon-white"></i> Add Row
                                </button>
                                <button type="button" class="btn btn-primary width-120p" ng-show="!dele" ng-click="dele=true" ng-disabled="electronNumbers.length == 1">
                                    <i class="icon-remove icon-white"></i> Delete Row
                                </button>
                                <button type="button" class="btn btn-primary width-120p ng-hide" ng-show="dele" ng-click="dele=false">
                                    <i class="icon-ok icon-white"></i> Exit Deletion
                                </button>
                            </div>
                            <table class="table table-bordered widget-box" id="tableelegen">
                                <thead>
                                <tr>
                                    <th>Machine No.</th>
                                    <th>Machine ID
                                        <a class="tooltip-demo" data-toggle="tooltip" data-placement="top" title="no spaces, up to 20 characters, typical name might be '06e2100C', 'Agility6MeV', etc..">&nbsp;
                                            <i class="icon-exclamation-sign"></i>
                                        </a>
                                    </th>
                                    <th>Description (optional)
                                        <a class="tooltip-demo" data-toggle="tooltip" data-placement="top" title="up to 24 characters, spaces acceptable, typical entry might be 'Elekta Agility6E Room#1'">&nbsp;
                                            <i class="icon-exclamation-sign"></i>
                                        </a>
                                    </th>
                                    <th>Energy (MeV)</th>
                                    <th>Reference Dose Depth (cm)</th>
                                    <th>Reference Dose SSD (cm)</th>
                                </tr>
                                </thead>
                                <tbody>
                                <!-- ngRepeat: electronNumber in electronNumbers --><tr ng-repeat="electronNumber in electronNumbers" class="ng-scope">
                                    <td class="ng-binding">#1&nbsp;&nbsp;
                                        <i class="icon-remove cursor-pointer ng-hide" ng-show="dele &amp;&amp; $index==electronNumbers.length-1 &amp;&amp;$index !==0" ng-click="deleteElectronMachine(electronNumber);"></i>
                                    </td>
                                    <td>
                                        <input class="form-control ng-pristine ng-valid" type="text" tabindex="1" id="electronID0" name="electronID0" maxlength="20" ng-model="electrons[electronNumber-1].MachineID" ng-keyup="checkMacID('electronID'+ (electronNumber-1),electronNumber-1, 'elect', 'Machine ID')" ng-change="check('electronID0');">
                                    </td>
                                    <td>
                                        <input class="form-control ng-pristine ng-valid" type="text" tabindex="2" maxlength="24" id="eDescription0" ng-model="electrons[electronNumber-1].Description" ng-keyup="checkDescription('eDescription'+ (electronNumber-1))">
                                    </td>
                                    <td>
                                        <input class="form-control ng-pristine ng-valid" tabindex="3" id="eEnergy0" type="text" ng-model="electrons[electronNumber-1].Energy" ng-change="checkRange('eEnergy'+(electronNumber-1),0.10,60.00,numeric)" onblur="keepDecimal(this.id, 2);">
                                    </td>
                                    <td>
                                        <input class="form-control ng-pristine ng-valid" tabindex="4" id="eDepth0" type="text" ng-model="electrons[electronNumber-1].Depth" ng-blur="checkRange('eDepth'+(electronNumber-1),0.01,5.00,'numeric')" onblur="keepDecimal(this.id, 2);">
                                    </td>
                                    <td>
                                        <input class="form-control ng-pristine ng-valid" tabindex="5" id="eSsd0" type="text" ng-model="electrons[electronNumber-1].Ssd" ng-change="check('eSsd0')" ng-blur="checkElectronSSDIsConsistent(electronNumber, null)">
                                    </td>
                                </tr><!-- end ngRepeat: electronNumber in electronNumbers --><tr ng-repeat="electronNumber in electronNumbers" class="ng-scope">
                                    <td class="ng-binding">#2&nbsp;&nbsp;
                                        <i class="icon-remove cursor-pointer ng-hide" ng-show="dele &amp;&amp; $index==electronNumbers.length-1 &amp;&amp;$index !==0" ng-click="deleteElectronMachine(electronNumber);"></i>
                                    </td>
                                    <td>
                                        <input class="form-control ng-pristine ng-valid" type="text" tabindex="1" id="electronID1" name="electronID1" maxlength="20" ng-model="electrons[electronNumber-1].MachineID" ng-keyup="checkMacID('electronID'+ (electronNumber-1),electronNumber-1, 'elect', 'Machine ID')" ng-change="check('electronID1');">
                                    </td>
                                    <td>
                                        <input class="form-control ng-pristine ng-valid" type="text" tabindex="2" maxlength="24" id="eDescription1" ng-model="electrons[electronNumber-1].Description" ng-keyup="checkDescription('eDescription'+ (electronNumber-1))">
                                    </td>
                                    <td>
                                        <input class="form-control ng-pristine ng-valid" tabindex="3" id="eEnergy1" type="text" ng-model="electrons[electronNumber-1].Energy" ng-change="checkRange('eEnergy'+(electronNumber-1),0.10,60.00,numeric)" onblur="keepDecimal(this.id, 2);">
                                    </td>
                                    <td>
                                        <input class="form-control ng-pristine ng-valid" tabindex="4" id="eDepth1" type="text" ng-model="electrons[electronNumber-1].Depth" ng-blur="checkRange('eDepth'+(electronNumber-1),0.01,5.00,'numeric')" onblur="keepDecimal(this.id, 2);">
                                    </td>
                                    <td>
                                        <input class="form-control ng-pristine ng-valid" tabindex="5" id="eSsd1" type="text" ng-model="electrons[electronNumber-1].Ssd" ng-change="check('eSsd1')" ng-blur="checkElectronSSDIsConsistent(electronNumber, null)">
                                    </td>
                                </tr><!-- end ngRepeat: electronNumber in electronNumbers --><tr ng-repeat="electronNumber in electronNumbers" class="ng-scope">
                                    <td class="ng-binding">#3&nbsp;&nbsp;
                                        <i class="icon-remove cursor-pointer ng-hide" ng-show="dele &amp;&amp; $index==electronNumbers.length-1 &amp;&amp;$index !==0" ng-click="deleteElectronMachine(electronNumber);"></i>
                                    </td>
                                    <td>
                                        <input class="form-control ng-pristine ng-valid" type="text" tabindex="1" id="electronID2" name="electronID2" maxlength="20" ng-model="electrons[electronNumber-1].MachineID" ng-keyup="checkMacID('electronID'+ (electronNumber-1),electronNumber-1, 'elect', 'Machine ID')" ng-change="check('electronID2');">
                                    </td>
                                    <td>
                                        <input class="form-control ng-pristine ng-valid" type="text" tabindex="2" maxlength="24" id="eDescription2" ng-model="electrons[electronNumber-1].Description" ng-keyup="checkDescription('eDescription'+ (electronNumber-1))">
                                    </td>
                                    <td>
                                        <input class="form-control ng-pristine ng-valid" tabindex="3" id="eEnergy2" type="text" ng-model="electrons[electronNumber-1].Energy" ng-change="checkRange('eEnergy'+(electronNumber-1),0.10,60.00,numeric)" onblur="keepDecimal(this.id, 2);">
                                    </td>
                                    <td>
                                        <input class="form-control ng-pristine ng-valid" tabindex="4" id="eDepth2" type="text" ng-model="electrons[electronNumber-1].Depth" ng-blur="checkRange('eDepth'+(electronNumber-1),0.01,5.00,'numeric')" onblur="keepDecimal(this.id, 2);">
                                    </td>
                                    <td>
                                        <input class="form-control ng-pristine ng-valid" tabindex="5" id="eSsd2" type="text" ng-model="electrons[electronNumber-1].Ssd" ng-change="check('eSsd2')" ng-blur="checkElectronSSDIsConsistent(electronNumber, null)">
                                    </td>
                                </tr><!-- end ngRepeat: electronNumber in electronNumbers -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="font1">Machine Reference Distance (cm)</label>
                            <div>
                                <input type="text" class="form-control width-60 ng-pristine ng-valid" tabindex="6" ng-init="ElectronMachineReferenceDistance='100'" ng-model="ElectronMachineReferenceDistance" id="ElecMacRefDis" ng-blur="checkRange('ElecMacRefDis',40.0,200.0,numeric)" onblur="keepDecimal(this.id, 1);">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="widget-box">
                                <div class="widget-title">
                                    <span class="icon">
                                        <i class="icon-align-justify"></i>
                                    </span>
                                    <h5>Available Setups</h5>
                                </div>
                                <div class="widget-content nopadding">
                                    <div class="row">
                                        <div class="col-md-6 bot10p">
                                            <br>
                                            <label class="font1">Min SSD Limit (cm)</label>
                                            <div>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="7" id="min_ssd_limit2" ng-model="minssdlimit2" name="Min SSD Limit" ng-init="minssdlimit2='95.0'" ng-blur="checkRange('min_ssd_limit2',30.0, maxssdlimit2 , 'numeric');" onblur="keepDecimal(this.id, 1);">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <br>
                                            <label class="font1">Max SSD Limit (cm)</label>
                                            <div class="padding-bottom-10p">
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="8" id="max_ssd_limit2" name="Max SSD Limit" ng-init="maxssdlimit2='120.0'" ng-model="maxssdlimit2" ng-blur="checkRange('max_ssd_limit2',95.0,750.0,'numeric');" onblur="keepDecimal(this.id, 1);">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="widget-box">
                                <div class="widget-title">
                                    <span class="icon">
                                        <i class="icon-align-justify"></i>
                                    </span>
                                    <h5>Dose Calculation Algorithm</h5>
                                </div>
                                <div class="widget-content nopadding">
                                    <div class="row">
                                        <div class="col-md-6 margin10">
                                            <label class="font1">Electrons</label>
                                            <br>
                                            <div class="btn-group" id="btn-group4" bs-buttons-checkbox="" data-toggle="buttons-checkbox">
                                                <button type="button" id="eleAlgo1" class="btn btn-default btn-default" bs-button="" ng-click="checkBox('eleAlgo1','elePb');" ng-disabled="disAlgo.eleAlgo1" disabled="disabled">PB</button>
                                                <button type="button" id="eleAlgo2" class="btn btn-default btn-default" bs-button="" ng-click="checkBox('eleAlgo2','eleXio');" disabled="">XiO-eMC</button>
                                                <button type="button" id="eleAlgo3" class="btn btn-default btn-default btn-primary" bs-button="" ng-click="checkBox('eleAlgo3','eleMonac');" ng-disabled="disAlgo.eleAlgo3">Monaco-eMC</button>
                                            </div>
                                            <br>
                                            <br>
                                            <p class="font1">This version of the system does not support XiO-eMC data submission</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--  Applicator -->
                <div id="tableapp" ng-hide="sections.eapp" class="ng-hide">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <div class="pull-right">
                                <button class="btn btn-primary width-120p" ng-click="addApplicators()">
                                    <i class="icon-plus icon-white"></i> Add Row
                                </button>
                                <button type="button" class="btn btn-primary width-120p" ng-show="!deleapp" ng-click="deleapp=true" ng-disabled="applicatorNumbers.length == 1">
                                    <i class="icon-remove icon-white"></i> Delete Row
                                </button>
                                <button type="button" class="btn btn-primary width-120p ng-hide" ng-show="deleapp" ng-click="deleapp=false">
                                    <i class="icon-ok icon-white"></i> Exit Deletion
                                </button>
                            </div>
                            <table class="table table-bordered widget-box" id="tableappgen">
                                <thead>
                                <tr>
                                    <th>Applicator No.</th>
                                    <th>Applicator ID&nbsp;
                                        <a class="tooltip-demo" data-toggle="tooltip" data-placement="top" title="no spaces, up to 20 characters, typical name might be 'app10x10', etc..">
                                            <i class="icon-exclamation-sign"></i>
                                        </a>
                                    </th>
                                    <th>Nominal Applicator Size (X x Y) (cm)</th>
                                    <th>Applicator Shape</th>
                                    <th>Applicator Type</th>
                                </tr>
                                </thead>
                                <tbody>
                                <!-- ngRepeat: applicatorNumber in applicatorNumbers --><tr ng-repeat="applicatorNumber in applicatorNumbers" class="ng-scope">
                                    <td class="ng-binding">1&nbsp;&nbsp;
                                        <i class="icon-remove cursor-pointer ng-hide" ng-show="deleapp" ng-click="deleteApplicator(applicatorNumber);"></i>
                                    </td>
                                    <td>
                                        <input class="form-control ng-pristine ng-valid" type="text" tabindex="1" id="applicatorID0" ng-model="applicatorID[applicatorNumber-1]" ng-change="check('applicatorID0')" ng-keyup="checkMacID('applicatorID'+(applicatorNumber-1), $index, 'app', 'Applicator ID')">
                                    </td>
                                    <td>
                                        <input class="form-control width-30 ng-pristine ng-valid" type="text" tabindex="1" ng-model="appX[applicatorNumber-1]" id="NominalAppSizeX0" ng-change="clearJawOpeningValue('X', applicatorNumber-1)" ng-blur="checkRange('NominalAppSizeX'+ (applicatorNumber-1),1.0,80.0,'numeric')" onblur="keepDecimal(this.id, 1, this.id + 'cp');"> ×
                                        <input type="text" class="form-control width-30 ng-pristine ng-valid" tabindex="1" ng-model="appY[applicatorNumber-1]" id="NominalAppSizeY0" ng-change="clearJawOpeningValue('Y', applicatorNumber-1)" ng-blur="checkRange('NominalAppSizeY'+ (applicatorNumber-1),1.0,80.0,'numeric')" onblur="keepDecimal(this.id, 1, this.id + 'cp');">
                                    </td>
                                    <td class="color-grey" style="text-align: left">
                                        <input type="radio" id="ApplicatorShape0" ng-model="ApplicatorShape[applicatorNumber-1]" value="Rectangular" class="ng-pristine ng-valid" name="01Q"> Rectangular
                                        <br>
                                        <input type="radio" id="ApplicatorShape1" ng-model="ApplicatorShape[applicatorNumber-1]" value="Round" disabled="" class="ng-pristine ng-valid" name="01R"> Round
                                    </td>
                                    <td class="color-grey" style="text-align: left">
                                        <input type="radio" id="ApplicatorType0" ng-model="ApplicatorType[applicatorNumber-1]" value="Standard" class="ng-pristine ng-valid" name="01S">Standard
                                        <br>
                                        <input type="radio" id="ApplicatorType1" ng-model="ApplicatorType[applicatorNumber-1]" value="Modified" disabled="" class="ng-pristine ng-valid" name="01T">Modified
                                    </td>
                                </tr><!-- end ngRepeat: applicatorNumber in applicatorNumbers --><tr ng-repeat="applicatorNumber in applicatorNumbers" class="ng-scope">
                                    <td class="ng-binding">2&nbsp;&nbsp;
                                        <i class="icon-remove cursor-pointer ng-hide" ng-show="deleapp" ng-click="deleteApplicator(applicatorNumber);"></i>
                                    </td>
                                    <td>
                                        <input class="form-control ng-pristine ng-valid" type="text" tabindex="2" id="applicatorID1" ng-model="applicatorID[applicatorNumber-1]" ng-change="check('applicatorID1')" ng-keyup="checkMacID('applicatorID'+(applicatorNumber-1), $index, 'app', 'Applicator ID')">
                                    </td>
                                    <td>
                                        <input class="form-control width-30 ng-pristine ng-valid" type="text" tabindex="2" ng-model="appX[applicatorNumber-1]" id="NominalAppSizeX1" ng-change="clearJawOpeningValue('X', applicatorNumber-1)" ng-blur="checkRange('NominalAppSizeX'+ (applicatorNumber-1),1.0,80.0,'numeric')" onblur="keepDecimal(this.id, 1, this.id + 'cp');"> ×
                                        <input type="text" class="form-control width-30 ng-pristine ng-valid" tabindex="2" ng-model="appY[applicatorNumber-1]" id="NominalAppSizeY1" ng-change="clearJawOpeningValue('Y', applicatorNumber-1)" ng-blur="checkRange('NominalAppSizeY'+ (applicatorNumber-1),1.0,80.0,'numeric')" onblur="keepDecimal(this.id, 1, this.id + 'cp');">
                                    </td>
                                    <td class="color-grey" style="text-align: left">
                                        <input type="radio" id="ApplicatorShape1" ng-model="ApplicatorShape[applicatorNumber-1]" value="Rectangular" class="ng-pristine ng-valid" name="07I"> Rectangular
                                        <br>
                                        <input type="radio" id="ApplicatorShape2" ng-model="ApplicatorShape[applicatorNumber-1]" value="Round" disabled="" class="ng-pristine ng-valid" name="07J"> Round
                                    </td>
                                    <td class="color-grey" style="text-align: left">
                                        <input type="radio" id="ApplicatorType1" ng-model="ApplicatorType[applicatorNumber-1]" value="Standard" class="ng-pristine ng-valid" name="07K">Standard
                                        <br>
                                        <input type="radio" id="ApplicatorType2" ng-model="ApplicatorType[applicatorNumber-1]" value="Modified" disabled="" class="ng-pristine ng-valid" name="07L">Modified
                                    </td>
                                </tr><!-- end ngRepeat: applicatorNumber in applicatorNumbers --><tr ng-repeat="applicatorNumber in applicatorNumbers" class="ng-scope">
                                    <td class="ng-binding">3&nbsp;&nbsp;
                                        <i class="icon-remove cursor-pointer ng-hide" ng-show="deleapp" ng-click="deleteApplicator(applicatorNumber);"></i>
                                    </td>
                                    <td>
                                        <input class="form-control ng-pristine ng-valid" type="text" tabindex="3" id="applicatorID2" ng-model="applicatorID[applicatorNumber-1]" ng-change="check('applicatorID2')" ng-keyup="checkMacID('applicatorID'+(applicatorNumber-1), $index, 'app', 'Applicator ID')">
                                    </td>
                                    <td>
                                        <input class="form-control width-30 ng-pristine ng-valid" type="text" tabindex="3" ng-model="appX[applicatorNumber-1]" id="NominalAppSizeX2" ng-change="clearJawOpeningValue('X', applicatorNumber-1)" ng-blur="checkRange('NominalAppSizeX'+ (applicatorNumber-1),1.0,80.0,'numeric')" onblur="keepDecimal(this.id, 1, this.id + 'cp');"> ×
                                        <input type="text" class="form-control width-30 ng-pristine ng-valid" tabindex="3" ng-model="appY[applicatorNumber-1]" id="NominalAppSizeY2" ng-change="clearJawOpeningValue('Y', applicatorNumber-1)" ng-blur="checkRange('NominalAppSizeY'+ (applicatorNumber-1),1.0,80.0,'numeric')" onblur="keepDecimal(this.id, 1, this.id + 'cp');">
                                    </td>
                                    <td class="color-grey" style="text-align: left">
                                        <input type="radio" id="ApplicatorShape2" ng-model="ApplicatorShape[applicatorNumber-1]" value="Rectangular" class="ng-pristine ng-valid" name="07N"> Rectangular
                                        <br>
                                        <input type="radio" id="ApplicatorShape3" ng-model="ApplicatorShape[applicatorNumber-1]" value="Round" disabled="" class="ng-pristine ng-valid" name="07O"> Round
                                    </td>
                                    <td class="color-grey" style="text-align: left">
                                        <input type="radio" id="ApplicatorType2" ng-model="ApplicatorType[applicatorNumber-1]" value="Standard" class="ng-pristine ng-valid" name="07P">Standard
                                        <br>
                                        <input type="radio" id="ApplicatorType3" ng-model="ApplicatorType[applicatorNumber-1]" value="Modified" disabled="" class="ng-pristine ng-valid" name="07Q">Modified
                                    </td>
                                </tr><!-- end ngRepeat: applicatorNumber in applicatorNumbers --><tr ng-repeat="applicatorNumber in applicatorNumbers" class="ng-scope">
                                    <td class="ng-binding">4&nbsp;&nbsp;
                                        <i class="icon-remove cursor-pointer ng-hide" ng-show="deleapp" ng-click="deleteApplicator(applicatorNumber);"></i>
                                    </td>
                                    <td>
                                        <input class="form-control ng-pristine ng-valid" type="text" tabindex="4" id="applicatorID3" ng-model="applicatorID[applicatorNumber-1]" ng-change="check('applicatorID3')" ng-keyup="checkMacID('applicatorID'+(applicatorNumber-1), $index, 'app', 'Applicator ID')">
                                    </td>
                                    <td>
                                        <input class="form-control width-30 ng-pristine ng-valid" type="text" tabindex="4" ng-model="appX[applicatorNumber-1]" id="NominalAppSizeX3" ng-change="clearJawOpeningValue('X', applicatorNumber-1)" ng-blur="checkRange('NominalAppSizeX'+ (applicatorNumber-1),1.0,80.0,'numeric')" onblur="keepDecimal(this.id, 1, this.id + 'cp');"> ×
                                        <input type="text" class="form-control width-30 ng-pristine ng-valid" tabindex="4" ng-model="appY[applicatorNumber-1]" id="NominalAppSizeY3" ng-change="clearJawOpeningValue('Y', applicatorNumber-1)" ng-blur="checkRange('NominalAppSizeY'+ (applicatorNumber-1),1.0,80.0,'numeric')" onblur="keepDecimal(this.id, 1, this.id + 'cp');">
                                    </td>
                                    <td class="color-grey" style="text-align: left">
                                        <input type="radio" id="ApplicatorShape3" ng-model="ApplicatorShape[applicatorNumber-1]" value="Rectangular" class="ng-pristine ng-valid" name="07S"> Rectangular
                                        <br>
                                        <input type="radio" id="ApplicatorShape4" ng-model="ApplicatorShape[applicatorNumber-1]" value="Round" disabled="" class="ng-pristine ng-valid" name="07T"> Round
                                    </td>
                                    <td class="color-grey" style="text-align: left">
                                        <input type="radio" id="ApplicatorType3" ng-model="ApplicatorType[applicatorNumber-1]" value="Standard" class="ng-pristine ng-valid" name="07U">Standard
                                        <br>
                                        <input type="radio" id="ApplicatorType4" ng-model="ApplicatorType[applicatorNumber-1]" value="Modified" disabled="" class="ng-pristine ng-valid" name="07V">Modified
                                    </td>
                                </tr><!-- end ngRepeat: applicatorNumber in applicatorNumbers -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row" id="elapprow">
                        <div class="col-md-6">
                            <br>
                            <label class="font1">Custom Insert Material</label>
                            <div>
                                <select class="form-control ng-pristine ng-valid" id="Custominsertmaterial" ng-model="Custominsertmaterial" ng-options="M for M in Custominsertmaterials" ng-change="check('Custominsertmaterial')"><option value="0" selected="selected">Cerrobend</option><option value="1">MCP96</option><option value="2">MCP70</option><option value="3">Lead</option><option value="4">Copper</option></select>
                            </div>
                        </div>
                        <div class="col-md-6 bot20p" ng-class="{'bot20p': !(selectedvendor.Vendor_Name == 'Siemens' &amp;&amp; selectedLinac.LinacModel_Name != 'Artiste')}">
                            <br>
                            <label class="font1">Custom Insert Thickness (cm)</label>
                            <div>
                                <input type="text" class="form-control ng-pristine ng-valid" value="1.5" ng-init="Custominsertthickness='1.5'" ng-model="Custominsertthickness" id="CusInsertThick" ng-change="checkRange('CusInsertThick',0.1,2.0,numeric)" onblur="keepDecimal(this.id, 1)">
                            </div>
                        </div>
                        <div class="col-md-6 bot20p ng-hide" ng-show="selectedvendor.Vendor_Name == 'Siemens' &amp;&amp; selectedLinac.LinacModel_Name != 'Artiste'">
                            <br>
                            <label class="font1">Siemens Applicator Type</label>
                            <div>
                                <select class="form-control ng-pristine ng-valid" id="SiemensAppType" ng-model="SiemensAppType" ng-options="M for M in SiemensAppTypes" ng-change="check('SiemensAppType')"><option value="0" selected="selected">SSD 100 cm</option><option value="1">SSD 95 cm</option></select>
                            </div>
                        </div>
                    </div>
                </div>

                <!--       Absolute Dose -->
                <div id="tabelabs" class="widget-box ng-hide" ng-hide="sections.eab">
                    <div class="tabbable widget-title">
                        <ul class="nav nav-tabs">
                            <!-- ngRepeat: electronNumber in electronNumbers --><li ng-class="eStyle[$index]" ng-repeat="electronNumber in electronNumbers" id="electronADTab0" ng-click="activateTab('electronADTab', 'tableeldose', electronNumber-1);" class="ng-scope active">
                                <a href="#tableeldose1" data-toggle="tab" class="ng-binding">Precise06e</a>
                            </li><!-- end ngRepeat: electronNumber in electronNumbers --><li ng-class="eStyle[$index]" ng-repeat="electronNumber in electronNumbers" id="electronADTab1" ng-click="activateTab('electronADTab', 'tableeldose', electronNumber-1);" class="ng-scope">
                                <a href="#tableeldose2" data-toggle="tab" class="ng-binding">Precise09e</a>
                            </li><!-- end ngRepeat: electronNumber in electronNumbers --><li ng-class="eStyle[$index]" ng-repeat="electronNumber in electronNumbers" id="electronADTab2" ng-click="activateTab('electronADTab', 'tableeldose', electronNumber-1);" class="ng-scope">
                                <a href="#tableeldose3" data-toggle="tab" class="ng-binding">Precise12e</a>
                            </li><!-- end ngRepeat: electronNumber in electronNumbers -->
                        </ul>
                    </div>
                    <div class="widget-content tab-content">
                        <!-- ngRepeat: electronNumber in electronNumbers --><div ng-class="divStyle[$index]" ng-repeat="electronNumber in electronNumbers" id="tableeldose0" class="ng-scope tab-pane active">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12">
                                    <p>Absolute dose calibration in water at the specified SSD and depth when delivering
                                        a fixed number of MU.</p>
                                    <table class="table table-bordered widget-box">
                                        <tbody>
                                        <tr>
                                            <th class="width-10">Applicator ID</th>
                                            <th class="width-20">Nominal Applicator Size (cm)</th>
                                            <th class="width-12">Jaw Opening Crossplane (cm)</th>
                                            <th class="width-12">Jaw Opening Inplane (cm)</th>
                                            <th class="width-12">SSD (cm)</th>
                                            <th class="width-12">Depth (cm)</th>
                                            <th class="width-11">MU</th>
                                            <th class="width-12">Absolute Dose (Gy)</th>
                                        </tr>
                                        <!-- ngRepeat: applicatorNumber in applicatorNumbers --><tr ng-repeat="applicatorNumber in applicatorNumbers" class="ng-scope">
                                            <td class="ng-binding">app6x6</td>
                                            <td>
                                                    <span>
                                                        <input type="text" class="form-control width-35 ng-pristine ng-valid" id="NominalAppSizeX0cp" ng-model="appX[applicatorNumber-1]" readonly="">
                                                    </span> ×
                                                <span>
                                                        <input type="text" class="form-control width-35 ng-pristine ng-valid" id="NominalAppSizeY0cp" ng-model="appY[applicatorNumber-1]" readonly="">
                                                    </span>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="1" id="JawWidthCrossplane00" ng-model="JawWidthCrossplane[electronNumber-1][applicatorNumber-1]" onblur="keepDecimal(this.id, 1);" ng-blur="checkJawWidthRange('JawWidthCrossplane'+(electronNumber-1)+(applicatorNumber-1), appX[applicatorNumber-1], appY[applicatorNumber-1], 'X', 'JawWidthInplane'+(electronNumber-1)+(applicatorNumber-1),electrons[electronNumber-1].Energy);">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="2" id="JawWidthInplane00" ng-model="JawWidthInplane[electronNumber-1][applicatorNumber-1]" onblur="keepDecimal(this.id, 1);" ng-blur="checkJawWidthRange('JawWidthInplane'+(electronNumber-1)+(applicatorNumber-1), appX[applicatorNumber-1], appY[applicatorNumber-1], 'Y', 'JawWidthCrossplane'+(electronNumber-1)+(applicatorNumber-1),electrons[electronNumber-1].Energy);">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" id="ApSSD00" ng-model="ApSSD[electronNumber-1][applicatorNumber-1]" onblur="keepDecimal(this.id, 1);" ng-blur="checkElectronSSDIsConsistent(electronNumber, applicatorNumber)">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="3" id="eleDoseDepth00" ng-model="eleDoseDepth[electronNumber-1][applicatorNumber-1]" onblur="keepDecimal(this.id, 2);" ng-blur="checkRange('eleDoseDepth'+(electronNumber-1)+(applicatorNumber-1),0.01,5.00,numeric)">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" id="MU00" ng-model="MU[electronNumber-1][applicatorNumber-1]">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="4" id="eleDoseAD00" ng-model="eleDoseAD[electronNumber-1][applicatorNumber-1]" ng-blur="checkRange('eleDoseAD'+(electronNumber-1)+(applicatorNumber-1),0.001,10.000,numeric)" onblur="keepDecimal(this.id, 3);">
                                            </td>
                                        </tr><!-- end ngRepeat: applicatorNumber in applicatorNumbers --><tr ng-repeat="applicatorNumber in applicatorNumbers" class="ng-scope">
                                            <td class="ng-binding">app10x10</td>
                                            <td>
                                                    <span>
                                                        <input type="text" class="form-control width-35 ng-pristine ng-valid" id="NominalAppSizeX1cp" ng-model="appX[applicatorNumber-1]" readonly="">
                                                    </span> ×
                                                <span>
                                                        <input type="text" class="form-control width-35 ng-pristine ng-valid" id="NominalAppSizeY1cp" ng-model="appY[applicatorNumber-1]" readonly="">
                                                    </span>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="1" id="JawWidthCrossplane01" ng-model="JawWidthCrossplane[electronNumber-1][applicatorNumber-1]" onblur="keepDecimal(this.id, 1);" ng-blur="checkJawWidthRange('JawWidthCrossplane'+(electronNumber-1)+(applicatorNumber-1), appX[applicatorNumber-1], appY[applicatorNumber-1], 'X', 'JawWidthInplane'+(electronNumber-1)+(applicatorNumber-1),electrons[electronNumber-1].Energy);">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="2" id="JawWidthInplane01" ng-model="JawWidthInplane[electronNumber-1][applicatorNumber-1]" onblur="keepDecimal(this.id, 1);" ng-blur="checkJawWidthRange('JawWidthInplane'+(electronNumber-1)+(applicatorNumber-1), appX[applicatorNumber-1], appY[applicatorNumber-1], 'Y', 'JawWidthCrossplane'+(electronNumber-1)+(applicatorNumber-1),electrons[electronNumber-1].Energy);">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" id="ApSSD01" ng-model="ApSSD[electronNumber-1][applicatorNumber-1]" onblur="keepDecimal(this.id, 1);" ng-blur="checkElectronSSDIsConsistent(electronNumber, applicatorNumber)" data-original-title="" title="">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="3" id="eleDoseDepth01" ng-model="eleDoseDepth[electronNumber-1][applicatorNumber-1]" onblur="keepDecimal(this.id, 2);" ng-blur="checkRange('eleDoseDepth'+(electronNumber-1)+(applicatorNumber-1),0.01,5.00,numeric)">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" id="MU01" ng-model="MU[electronNumber-1][applicatorNumber-1]">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="4" id="eleDoseAD01" ng-model="eleDoseAD[electronNumber-1][applicatorNumber-1]" ng-blur="checkRange('eleDoseAD'+(electronNumber-1)+(applicatorNumber-1),0.001,10.000,numeric)" onblur="keepDecimal(this.id, 3);">
                                            </td>
                                        </tr><!-- end ngRepeat: applicatorNumber in applicatorNumbers --><tr ng-repeat="applicatorNumber in applicatorNumbers" class="ng-scope">
                                            <td class="ng-binding">app14x14</td>
                                            <td>
                                                    <span>
                                                        <input type="text" class="form-control width-35 ng-pristine ng-valid" id="NominalAppSizeX2cp" ng-model="appX[applicatorNumber-1]" readonly="">
                                                    </span> ×
                                                <span>
                                                        <input type="text" class="form-control width-35 ng-pristine ng-valid" id="NominalAppSizeY2cp" ng-model="appY[applicatorNumber-1]" readonly="">
                                                    </span>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="1" id="JawWidthCrossplane02" ng-model="JawWidthCrossplane[electronNumber-1][applicatorNumber-1]" onblur="keepDecimal(this.id, 1);" ng-blur="checkJawWidthRange('JawWidthCrossplane'+(electronNumber-1)+(applicatorNumber-1), appX[applicatorNumber-1], appY[applicatorNumber-1], 'X', 'JawWidthInplane'+(electronNumber-1)+(applicatorNumber-1),electrons[electronNumber-1].Energy);">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="2" id="JawWidthInplane02" ng-model="JawWidthInplane[electronNumber-1][applicatorNumber-1]" onblur="keepDecimal(this.id, 1);" ng-blur="checkJawWidthRange('JawWidthInplane'+(electronNumber-1)+(applicatorNumber-1), appX[applicatorNumber-1], appY[applicatorNumber-1], 'Y', 'JawWidthCrossplane'+(electronNumber-1)+(applicatorNumber-1),electrons[electronNumber-1].Energy);">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" id="ApSSD02" ng-model="ApSSD[electronNumber-1][applicatorNumber-1]" onblur="keepDecimal(this.id, 1);" ng-blur="checkElectronSSDIsConsistent(electronNumber, applicatorNumber)" data-original-title="" title="">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="3" id="eleDoseDepth02" ng-model="eleDoseDepth[electronNumber-1][applicatorNumber-1]" onblur="keepDecimal(this.id, 2);" ng-blur="checkRange('eleDoseDepth'+(electronNumber-1)+(applicatorNumber-1),0.01,5.00,numeric)">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" id="MU02" ng-model="MU[electronNumber-1][applicatorNumber-1]">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="4" id="eleDoseAD02" ng-model="eleDoseAD[electronNumber-1][applicatorNumber-1]" ng-blur="checkRange('eleDoseAD'+(electronNumber-1)+(applicatorNumber-1),0.001,10.000,numeric)" onblur="keepDecimal(this.id, 3);">
                                            </td>
                                        </tr><!-- end ngRepeat: applicatorNumber in applicatorNumbers --><tr ng-repeat="applicatorNumber in applicatorNumbers" class="ng-scope">
                                            <td class="ng-binding">app20x20</td>
                                            <td>
                                                    <span>
                                                        <input type="text" class="form-control width-35 ng-pristine ng-valid" id="NominalAppSizeX3cp" ng-model="appX[applicatorNumber-1]" readonly="">
                                                    </span> ×
                                                <span>
                                                        <input type="text" class="form-control width-35 ng-pristine ng-valid" id="NominalAppSizeY3cp" ng-model="appY[applicatorNumber-1]" readonly="">
                                                    </span>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="1" id="JawWidthCrossplane03" ng-model="JawWidthCrossplane[electronNumber-1][applicatorNumber-1]" onblur="keepDecimal(this.id, 1);" ng-blur="checkJawWidthRange('JawWidthCrossplane'+(electronNumber-1)+(applicatorNumber-1), appX[applicatorNumber-1], appY[applicatorNumber-1], 'X', 'JawWidthInplane'+(electronNumber-1)+(applicatorNumber-1),electrons[electronNumber-1].Energy);">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="2" id="JawWidthInplane03" ng-model="JawWidthInplane[electronNumber-1][applicatorNumber-1]" onblur="keepDecimal(this.id, 1);" ng-blur="checkJawWidthRange('JawWidthInplane'+(electronNumber-1)+(applicatorNumber-1), appX[applicatorNumber-1], appY[applicatorNumber-1], 'Y', 'JawWidthCrossplane'+(electronNumber-1)+(applicatorNumber-1),electrons[electronNumber-1].Energy);">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" id="ApSSD03" ng-model="ApSSD[electronNumber-1][applicatorNumber-1]" onblur="keepDecimal(this.id, 1);" ng-blur="checkElectronSSDIsConsistent(electronNumber, applicatorNumber)" data-original-title="" title="">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="3" id="eleDoseDepth03" ng-model="eleDoseDepth[electronNumber-1][applicatorNumber-1]" onblur="keepDecimal(this.id, 2);" ng-blur="checkRange('eleDoseDepth'+(electronNumber-1)+(applicatorNumber-1),0.01,5.00,numeric)">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" id="MU03" ng-model="MU[electronNumber-1][applicatorNumber-1]">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="4" id="eleDoseAD03" ng-model="eleDoseAD[electronNumber-1][applicatorNumber-1]" ng-blur="checkRange('eleDoseAD'+(electronNumber-1)+(applicatorNumber-1),0.001,10.000,numeric)" onblur="keepDecimal(this.id, 3);">
                                            </td>
                                        </tr><!-- end ngRepeat: applicatorNumber in applicatorNumbers -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!-- end ngRepeat: electronNumber in electronNumbers --><div ng-class="divStyle[$index]" ng-repeat="electronNumber in electronNumbers" id="tableeldose1" class="ng-scope tab-pane">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12">
                                    <p>Absolute dose calibration in water at the specified SSD and depth when delivering
                                        a fixed number of MU.</p>
                                    <table class="table table-bordered widget-box">
                                        <tbody>
                                        <tr>
                                            <th class="width-10">Applicator ID</th>
                                            <th class="width-20">Nominal Applicator Size (cm)</th>
                                            <th class="width-12">Jaw Opening Crossplane (cm)</th>
                                            <th class="width-12">Jaw Opening Inplane (cm)</th>
                                            <th class="width-12">SSD (cm)</th>
                                            <th class="width-12">Depth (cm)</th>
                                            <th class="width-11">MU</th>
                                            <th class="width-12">Absolute Dose (Gy)</th>
                                        </tr>
                                        <!-- ngRepeat: applicatorNumber in applicatorNumbers --><tr ng-repeat="applicatorNumber in applicatorNumbers" class="ng-scope">
                                            <td class="ng-binding">app6x6</td>
                                            <td>
                                                    <span>
                                                        <input type="text" class="form-control width-35 ng-pristine ng-valid" id="NominalAppSizeX0cp" ng-model="appX[applicatorNumber-1]" readonly="">
                                                    </span> ×
                                                <span>
                                                        <input type="text" class="form-control width-35 ng-pristine ng-valid" id="NominalAppSizeY0cp" ng-model="appY[applicatorNumber-1]" readonly="">
                                                    </span>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="1" id="JawWidthCrossplane10" ng-model="JawWidthCrossplane[electronNumber-1][applicatorNumber-1]" onblur="keepDecimal(this.id, 1);" ng-blur="checkJawWidthRange('JawWidthCrossplane'+(electronNumber-1)+(applicatorNumber-1), appX[applicatorNumber-1], appY[applicatorNumber-1], 'X', 'JawWidthInplane'+(electronNumber-1)+(applicatorNumber-1),electrons[electronNumber-1].Energy);">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="2" id="JawWidthInplane10" ng-model="JawWidthInplane[electronNumber-1][applicatorNumber-1]" onblur="keepDecimal(this.id, 1);" ng-blur="checkJawWidthRange('JawWidthInplane'+(electronNumber-1)+(applicatorNumber-1), appX[applicatorNumber-1], appY[applicatorNumber-1], 'Y', 'JawWidthCrossplane'+(electronNumber-1)+(applicatorNumber-1),electrons[electronNumber-1].Energy);">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" id="ApSSD10" ng-model="ApSSD[electronNumber-1][applicatorNumber-1]" onblur="keepDecimal(this.id, 1);" ng-blur="checkElectronSSDIsConsistent(electronNumber, applicatorNumber)">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="3" id="eleDoseDepth10" ng-model="eleDoseDepth[electronNumber-1][applicatorNumber-1]" onblur="keepDecimal(this.id, 2);" ng-blur="checkRange('eleDoseDepth'+(electronNumber-1)+(applicatorNumber-1),0.01,5.00,numeric)">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" id="MU10" ng-model="MU[electronNumber-1][applicatorNumber-1]">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="4" id="eleDoseAD10" ng-model="eleDoseAD[electronNumber-1][applicatorNumber-1]" ng-blur="checkRange('eleDoseAD'+(electronNumber-1)+(applicatorNumber-1),0.001,10.000,numeric)" onblur="keepDecimal(this.id, 3);">
                                            </td>
                                        </tr><!-- end ngRepeat: applicatorNumber in applicatorNumbers --><tr ng-repeat="applicatorNumber in applicatorNumbers" class="ng-scope">
                                            <td class="ng-binding">app10x10</td>
                                            <td>
                                                    <span>
                                                        <input type="text" class="form-control width-35 ng-pristine ng-valid" id="NominalAppSizeX1cp" ng-model="appX[applicatorNumber-1]" readonly="">
                                                    </span> ×
                                                <span>
                                                        <input type="text" class="form-control width-35 ng-pristine ng-valid" id="NominalAppSizeY1cp" ng-model="appY[applicatorNumber-1]" readonly="">
                                                    </span>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="1" id="JawWidthCrossplane11" ng-model="JawWidthCrossplane[electronNumber-1][applicatorNumber-1]" onblur="keepDecimal(this.id, 1);" ng-blur="checkJawWidthRange('JawWidthCrossplane'+(electronNumber-1)+(applicatorNumber-1), appX[applicatorNumber-1], appY[applicatorNumber-1], 'X', 'JawWidthInplane'+(electronNumber-1)+(applicatorNumber-1),electrons[electronNumber-1].Energy);">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="2" id="JawWidthInplane11" ng-model="JawWidthInplane[electronNumber-1][applicatorNumber-1]" onblur="keepDecimal(this.id, 1);" ng-blur="checkJawWidthRange('JawWidthInplane'+(electronNumber-1)+(applicatorNumber-1), appX[applicatorNumber-1], appY[applicatorNumber-1], 'Y', 'JawWidthCrossplane'+(electronNumber-1)+(applicatorNumber-1),electrons[electronNumber-1].Energy);">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" id="ApSSD11" ng-model="ApSSD[electronNumber-1][applicatorNumber-1]" onblur="keepDecimal(this.id, 1);" ng-blur="checkElectronSSDIsConsistent(electronNumber, applicatorNumber)" data-original-title="" title="">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="3" id="eleDoseDepth11" ng-model="eleDoseDepth[electronNumber-1][applicatorNumber-1]" onblur="keepDecimal(this.id, 2);" ng-blur="checkRange('eleDoseDepth'+(electronNumber-1)+(applicatorNumber-1),0.01,5.00,numeric)">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" id="MU11" ng-model="MU[electronNumber-1][applicatorNumber-1]">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="4" id="eleDoseAD11" ng-model="eleDoseAD[electronNumber-1][applicatorNumber-1]" ng-blur="checkRange('eleDoseAD'+(electronNumber-1)+(applicatorNumber-1),0.001,10.000,numeric)" onblur="keepDecimal(this.id, 3);">
                                            </td>
                                        </tr><!-- end ngRepeat: applicatorNumber in applicatorNumbers --><tr ng-repeat="applicatorNumber in applicatorNumbers" class="ng-scope">
                                            <td class="ng-binding">app14x14</td>
                                            <td>
                                                    <span>
                                                        <input type="text" class="form-control width-35 ng-pristine ng-valid" id="NominalAppSizeX2cp" ng-model="appX[applicatorNumber-1]" readonly="">
                                                    </span> ×
                                                <span>
                                                        <input type="text" class="form-control width-35 ng-pristine ng-valid" id="NominalAppSizeY2cp" ng-model="appY[applicatorNumber-1]" readonly="">
                                                    </span>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="1" id="JawWidthCrossplane12" ng-model="JawWidthCrossplane[electronNumber-1][applicatorNumber-1]" onblur="keepDecimal(this.id, 1);" ng-blur="checkJawWidthRange('JawWidthCrossplane'+(electronNumber-1)+(applicatorNumber-1), appX[applicatorNumber-1], appY[applicatorNumber-1], 'X', 'JawWidthInplane'+(electronNumber-1)+(applicatorNumber-1),electrons[electronNumber-1].Energy);">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="2" id="JawWidthInplane12" ng-model="JawWidthInplane[electronNumber-1][applicatorNumber-1]" onblur="keepDecimal(this.id, 1);" ng-blur="checkJawWidthRange('JawWidthInplane'+(electronNumber-1)+(applicatorNumber-1), appX[applicatorNumber-1], appY[applicatorNumber-1], 'Y', 'JawWidthCrossplane'+(electronNumber-1)+(applicatorNumber-1),electrons[electronNumber-1].Energy);">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" id="ApSSD12" ng-model="ApSSD[electronNumber-1][applicatorNumber-1]" onblur="keepDecimal(this.id, 1);" ng-blur="checkElectronSSDIsConsistent(electronNumber, applicatorNumber)" data-original-title="" title="">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="3" id="eleDoseDepth12" ng-model="eleDoseDepth[electronNumber-1][applicatorNumber-1]" onblur="keepDecimal(this.id, 2);" ng-blur="checkRange('eleDoseDepth'+(electronNumber-1)+(applicatorNumber-1),0.01,5.00,numeric)">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" id="MU12" ng-model="MU[electronNumber-1][applicatorNumber-1]">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="4" id="eleDoseAD12" ng-model="eleDoseAD[electronNumber-1][applicatorNumber-1]" ng-blur="checkRange('eleDoseAD'+(electronNumber-1)+(applicatorNumber-1),0.001,10.000,numeric)" onblur="keepDecimal(this.id, 3);">
                                            </td>
                                        </tr><!-- end ngRepeat: applicatorNumber in applicatorNumbers --><tr ng-repeat="applicatorNumber in applicatorNumbers" class="ng-scope">
                                            <td class="ng-binding">app20x20</td>
                                            <td>
                                                    <span>
                                                        <input type="text" class="form-control width-35 ng-pristine ng-valid" id="NominalAppSizeX3cp" ng-model="appX[applicatorNumber-1]" readonly="">
                                                    </span> ×
                                                <span>
                                                        <input type="text" class="form-control width-35 ng-pristine ng-valid" id="NominalAppSizeY3cp" ng-model="appY[applicatorNumber-1]" readonly="">
                                                    </span>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="1" id="JawWidthCrossplane13" ng-model="JawWidthCrossplane[electronNumber-1][applicatorNumber-1]" onblur="keepDecimal(this.id, 1);" ng-blur="checkJawWidthRange('JawWidthCrossplane'+(electronNumber-1)+(applicatorNumber-1), appX[applicatorNumber-1], appY[applicatorNumber-1], 'X', 'JawWidthInplane'+(electronNumber-1)+(applicatorNumber-1),electrons[electronNumber-1].Energy);">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="2" id="JawWidthInplane13" ng-model="JawWidthInplane[electronNumber-1][applicatorNumber-1]" onblur="keepDecimal(this.id, 1);" ng-blur="checkJawWidthRange('JawWidthInplane'+(electronNumber-1)+(applicatorNumber-1), appX[applicatorNumber-1], appY[applicatorNumber-1], 'Y', 'JawWidthCrossplane'+(electronNumber-1)+(applicatorNumber-1),electrons[electronNumber-1].Energy);">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" id="ApSSD13" ng-model="ApSSD[electronNumber-1][applicatorNumber-1]" onblur="keepDecimal(this.id, 1);" ng-blur="checkElectronSSDIsConsistent(electronNumber, applicatorNumber)" data-original-title="" title="">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="3" id="eleDoseDepth13" ng-model="eleDoseDepth[electronNumber-1][applicatorNumber-1]" onblur="keepDecimal(this.id, 2);" ng-blur="checkRange('eleDoseDepth'+(electronNumber-1)+(applicatorNumber-1),0.01,5.00,numeric)">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" id="MU13" ng-model="MU[electronNumber-1][applicatorNumber-1]">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="4" id="eleDoseAD13" ng-model="eleDoseAD[electronNumber-1][applicatorNumber-1]" ng-blur="checkRange('eleDoseAD'+(electronNumber-1)+(applicatorNumber-1),0.001,10.000,numeric)" onblur="keepDecimal(this.id, 3);">
                                            </td>
                                        </tr><!-- end ngRepeat: applicatorNumber in applicatorNumbers -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!-- end ngRepeat: electronNumber in electronNumbers --><div ng-class="divStyle[$index]" ng-repeat="electronNumber in electronNumbers" id="tableeldose2" class="ng-scope tab-pane">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12">
                                    <p>Absolute dose calibration in water at the specified SSD and depth when delivering
                                        a fixed number of MU.</p>
                                    <table class="table table-bordered widget-box">
                                        <tbody>
                                        <tr>
                                            <th class="width-10">Applicator ID</th>
                                            <th class="width-20">Nominal Applicator Size (cm)</th>
                                            <th class="width-12">Jaw Opening Crossplane (cm)</th>
                                            <th class="width-12">Jaw Opening Inplane (cm)</th>
                                            <th class="width-12">SSD (cm)</th>
                                            <th class="width-12">Depth (cm)</th>
                                            <th class="width-11">MU</th>
                                            <th class="width-12">Absolute Dose (Gy)</th>
                                        </tr>
                                        <!-- ngRepeat: applicatorNumber in applicatorNumbers --><tr ng-repeat="applicatorNumber in applicatorNumbers" class="ng-scope">
                                            <td class="ng-binding">app6x6</td>
                                            <td>
                                                    <span>
                                                        <input type="text" class="form-control width-35 ng-pristine ng-valid" id="NominalAppSizeX0cp" ng-model="appX[applicatorNumber-1]" readonly="">
                                                    </span> ×
                                                <span>
                                                        <input type="text" class="form-control width-35 ng-pristine ng-valid" id="NominalAppSizeY0cp" ng-model="appY[applicatorNumber-1]" readonly="">
                                                    </span>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="1" id="JawWidthCrossplane20" ng-model="JawWidthCrossplane[electronNumber-1][applicatorNumber-1]" onblur="keepDecimal(this.id, 1);" ng-blur="checkJawWidthRange('JawWidthCrossplane'+(electronNumber-1)+(applicatorNumber-1), appX[applicatorNumber-1], appY[applicatorNumber-1], 'X', 'JawWidthInplane'+(electronNumber-1)+(applicatorNumber-1),electrons[electronNumber-1].Energy);">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="2" id="JawWidthInplane20" ng-model="JawWidthInplane[electronNumber-1][applicatorNumber-1]" onblur="keepDecimal(this.id, 1);" ng-blur="checkJawWidthRange('JawWidthInplane'+(electronNumber-1)+(applicatorNumber-1), appX[applicatorNumber-1], appY[applicatorNumber-1], 'Y', 'JawWidthCrossplane'+(electronNumber-1)+(applicatorNumber-1),electrons[electronNumber-1].Energy);">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" id="ApSSD20" ng-model="ApSSD[electronNumber-1][applicatorNumber-1]" onblur="keepDecimal(this.id, 1);" ng-blur="checkElectronSSDIsConsistent(electronNumber, applicatorNumber)">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="3" id="eleDoseDepth20" ng-model="eleDoseDepth[electronNumber-1][applicatorNumber-1]" onblur="keepDecimal(this.id, 2);" ng-blur="checkRange('eleDoseDepth'+(electronNumber-1)+(applicatorNumber-1),0.01,5.00,numeric)">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" id="MU20" ng-model="MU[electronNumber-1][applicatorNumber-1]">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="4" id="eleDoseAD20" ng-model="eleDoseAD[electronNumber-1][applicatorNumber-1]" ng-blur="checkRange('eleDoseAD'+(electronNumber-1)+(applicatorNumber-1),0.001,10.000,numeric)" onblur="keepDecimal(this.id, 3);">
                                            </td>
                                        </tr><!-- end ngRepeat: applicatorNumber in applicatorNumbers --><tr ng-repeat="applicatorNumber in applicatorNumbers" class="ng-scope">
                                            <td class="ng-binding">app10x10</td>
                                            <td>
                                                    <span>
                                                        <input type="text" class="form-control width-35 ng-pristine ng-valid" id="NominalAppSizeX1cp" ng-model="appX[applicatorNumber-1]" readonly="">
                                                    </span> ×
                                                <span>
                                                        <input type="text" class="form-control width-35 ng-pristine ng-valid" id="NominalAppSizeY1cp" ng-model="appY[applicatorNumber-1]" readonly="">
                                                    </span>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="1" id="JawWidthCrossplane21" ng-model="JawWidthCrossplane[electronNumber-1][applicatorNumber-1]" onblur="keepDecimal(this.id, 1);" ng-blur="checkJawWidthRange('JawWidthCrossplane'+(electronNumber-1)+(applicatorNumber-1), appX[applicatorNumber-1], appY[applicatorNumber-1], 'X', 'JawWidthInplane'+(electronNumber-1)+(applicatorNumber-1),electrons[electronNumber-1].Energy);">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="2" id="JawWidthInplane21" ng-model="JawWidthInplane[electronNumber-1][applicatorNumber-1]" onblur="keepDecimal(this.id, 1);" ng-blur="checkJawWidthRange('JawWidthInplane'+(electronNumber-1)+(applicatorNumber-1), appX[applicatorNumber-1], appY[applicatorNumber-1], 'Y', 'JawWidthCrossplane'+(electronNumber-1)+(applicatorNumber-1),electrons[electronNumber-1].Energy);">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" id="ApSSD21" ng-model="ApSSD[electronNumber-1][applicatorNumber-1]" onblur="keepDecimal(this.id, 1);" ng-blur="checkElectronSSDIsConsistent(electronNumber, applicatorNumber)" data-original-title="" title="">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="3" id="eleDoseDepth21" ng-model="eleDoseDepth[electronNumber-1][applicatorNumber-1]" onblur="keepDecimal(this.id, 2);" ng-blur="checkRange('eleDoseDepth'+(electronNumber-1)+(applicatorNumber-1),0.01,5.00,numeric)">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" id="MU21" ng-model="MU[electronNumber-1][applicatorNumber-1]">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="4" id="eleDoseAD21" ng-model="eleDoseAD[electronNumber-1][applicatorNumber-1]" ng-blur="checkRange('eleDoseAD'+(electronNumber-1)+(applicatorNumber-1),0.001,10.000,numeric)" onblur="keepDecimal(this.id, 3);">
                                            </td>
                                        </tr><!-- end ngRepeat: applicatorNumber in applicatorNumbers --><tr ng-repeat="applicatorNumber in applicatorNumbers" class="ng-scope">
                                            <td class="ng-binding">app14x14</td>
                                            <td>
                                                    <span>
                                                        <input type="text" class="form-control width-35 ng-pristine ng-valid" id="NominalAppSizeX2cp" ng-model="appX[applicatorNumber-1]" readonly="">
                                                    </span> ×
                                                <span>
                                                        <input type="text" class="form-control width-35 ng-pristine ng-valid" id="NominalAppSizeY2cp" ng-model="appY[applicatorNumber-1]" readonly="">
                                                    </span>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="1" id="JawWidthCrossplane22" ng-model="JawWidthCrossplane[electronNumber-1][applicatorNumber-1]" onblur="keepDecimal(this.id, 1);" ng-blur="checkJawWidthRange('JawWidthCrossplane'+(electronNumber-1)+(applicatorNumber-1), appX[applicatorNumber-1], appY[applicatorNumber-1], 'X', 'JawWidthInplane'+(electronNumber-1)+(applicatorNumber-1),electrons[electronNumber-1].Energy);">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="2" id="JawWidthInplane22" ng-model="JawWidthInplane[electronNumber-1][applicatorNumber-1]" onblur="keepDecimal(this.id, 1);" ng-blur="checkJawWidthRange('JawWidthInplane'+(electronNumber-1)+(applicatorNumber-1), appX[applicatorNumber-1], appY[applicatorNumber-1], 'Y', 'JawWidthCrossplane'+(electronNumber-1)+(applicatorNumber-1),electrons[electronNumber-1].Energy);">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" id="ApSSD22" ng-model="ApSSD[electronNumber-1][applicatorNumber-1]" onblur="keepDecimal(this.id, 1);" ng-blur="checkElectronSSDIsConsistent(electronNumber, applicatorNumber)" data-original-title="" title="">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="3" id="eleDoseDepth22" ng-model="eleDoseDepth[electronNumber-1][applicatorNumber-1]" onblur="keepDecimal(this.id, 2);" ng-blur="checkRange('eleDoseDepth'+(electronNumber-1)+(applicatorNumber-1),0.01,5.00,numeric)">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" id="MU22" ng-model="MU[electronNumber-1][applicatorNumber-1]">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="4" id="eleDoseAD22" ng-model="eleDoseAD[electronNumber-1][applicatorNumber-1]" ng-blur="checkRange('eleDoseAD'+(electronNumber-1)+(applicatorNumber-1),0.001,10.000,numeric)" onblur="keepDecimal(this.id, 3);">
                                            </td>
                                        </tr><!-- end ngRepeat: applicatorNumber in applicatorNumbers --><tr ng-repeat="applicatorNumber in applicatorNumbers" class="ng-scope">
                                            <td class="ng-binding">app20x20</td>
                                            <td>
                                                    <span>
                                                        <input type="text" class="form-control width-35 ng-pristine ng-valid" id="NominalAppSizeX3cp" ng-model="appX[applicatorNumber-1]" readonly="">
                                                    </span> ×
                                                <span>
                                                        <input type="text" class="form-control width-35 ng-pristine ng-valid" id="NominalAppSizeY3cp" ng-model="appY[applicatorNumber-1]" readonly="">
                                                    </span>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="1" id="JawWidthCrossplane23" ng-model="JawWidthCrossplane[electronNumber-1][applicatorNumber-1]" onblur="keepDecimal(this.id, 1);" ng-blur="checkJawWidthRange('JawWidthCrossplane'+(electronNumber-1)+(applicatorNumber-1), appX[applicatorNumber-1], appY[applicatorNumber-1], 'X', 'JawWidthInplane'+(electronNumber-1)+(applicatorNumber-1),electrons[electronNumber-1].Energy);">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="2" id="JawWidthInplane23" ng-model="JawWidthInplane[electronNumber-1][applicatorNumber-1]" onblur="keepDecimal(this.id, 1);" ng-blur="checkJawWidthRange('JawWidthInplane'+(electronNumber-1)+(applicatorNumber-1), appX[applicatorNumber-1], appY[applicatorNumber-1], 'Y', 'JawWidthCrossplane'+(electronNumber-1)+(applicatorNumber-1),electrons[electronNumber-1].Energy);">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" id="ApSSD23" ng-model="ApSSD[electronNumber-1][applicatorNumber-1]" onblur="keepDecimal(this.id, 1);" ng-blur="checkElectronSSDIsConsistent(electronNumber, applicatorNumber)" data-original-title="" title="">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="3" id="eleDoseDepth23" ng-model="eleDoseDepth[electronNumber-1][applicatorNumber-1]" onblur="keepDecimal(this.id, 2);" ng-blur="checkRange('eleDoseDepth'+(electronNumber-1)+(applicatorNumber-1),0.01,5.00,numeric)">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" id="MU23" ng-model="MU[electronNumber-1][applicatorNumber-1]">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control ng-pristine ng-valid" tabindex="4" id="eleDoseAD23" ng-model="eleDoseAD[electronNumber-1][applicatorNumber-1]" ng-blur="checkRange('eleDoseAD'+(electronNumber-1)+(applicatorNumber-1),0.001,10.000,numeric)" onblur="keepDecimal(this.id, 3);">
                                            </td>
                                        </tr><!-- end ngRepeat: applicatorNumber in applicatorNumbers -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!-- end ngRepeat: electronNumber in electronNumbers -->
                    </div>
                </div>

                <!--       Electron Sc -->
                <div id="tableelsc" class="widget-box ng-hide" ng-hide="sections.esc">
                    <div class="widget-title tabbable">
                        <ul class="nav nav-tabs">
                            <!-- ngRepeat: electronNumber in electronNumbers --><li ng-class="eStyle[$index]" ng-repeat="electronNumber in electronNumbers" id="electronSCTab0" ng-click="activateTab('electronSCTab', 'tablescen', electronNumber-1);" class="ng-scope active">
                                <a href="#tablescen0" data-toggle="tab" class="ng-binding">Precise06e</a>
                            </li><!-- end ngRepeat: electronNumber in electronNumbers --><li ng-class="eStyle[$index]" ng-repeat="electronNumber in electronNumbers" id="electronSCTab1" ng-click="activateTab('electronSCTab', 'tablescen', electronNumber-1);" class="ng-scope">
                                <a href="#tablescen1" data-toggle="tab" class="ng-binding">Precise09e</a>
                            </li><!-- end ngRepeat: electronNumber in electronNumbers --><li ng-class="eStyle[$index]" ng-repeat="electronNumber in electronNumbers" id="electronSCTab2" ng-click="activateTab('electronSCTab', 'tablescen', electronNumber-1);" class="ng-scope">
                                <a href="#tablescen2" data-toggle="tab" class="ng-binding">Precise12e</a>
                            </li><!-- end ngRepeat: electronNumber in electronNumbers -->
                        </ul>
                    </div>
                    <div class="widget-content tab-content">
                        <!-- ngRepeat: electronNumber in electronNumbers --><div ng-class="divStyle[$index]" ng-repeat="electronNumber in electronNumbers" id="tablescen0" class="ng-scope tab-pane active">
                            <div class="row">
                                <div class="col-lg-8 col-md-12 col-xs-12 col-sm-12">
                                    <table class="table table-bordered widget-box">
                                        <thead id="electronFieldSize">
                                        <tr>
                                            <th rowspan="2">Field Size (Inner × Outer) (cm)&nbsp;
                                                <a class="tooltip-demo" href="img/Jaw and MLC specification.png" data-lightbox="example-set13" title="">
                                                    <i class="icon-exclamation-sign"></i>
                                                </a>
                                            </th>
                                            <th colspan="2">Source-to-Detector Distance (cm)</th>
                                        </tr>
                                        <tr>
                                            <th>
                                                &nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="text" class="form-control width-50 font1 ng-pristine ng-valid" tabindex="2" id="SDD10" ng-model="electrons[electronNumber-1].Sc.SDD1" ng-blur="checkElectronSSDRange('SDD1'+(electronNumber-1), 'SDD2'+ (electronNumber-1))">
                                                <span class="color-ff0711">∗</span>
                                            </th>
                                            <th>
                                                &nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="text" class="form-control width-50 font1 ng-pristine ng-valid" tabindex="6" id="SDD20" ng-model="electrons[electronNumber-1].Sc.SDD2" ng-blur="checkElectronSSDRange('SDD1'+(electronNumber-1), 'SDD2'+ (electronNumber-1))">
                                                <span class="color-ff0711">∗</span>
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>8 × 8</td>
                                            <td>
                                                <input type="text" class="form-control width-50 ng-pristine ng-valid" tabindex="3" ng-model="electrons[electronNumber-1].Sc.EightByEight1" id="eleSDD1EightbyEight0" ng-change="check('eleSDD1EightbyEight0')" onblur="keepDecimal(this.id, 3);" ng-blur="checkRange('eleSDD1EightbyEight'+(electronNumber-1),0.1,180.0,numeric);">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control width-50 ng-pristine ng-valid" tabindex="7" ng-model="electrons[electronNumber-1].Sc.EightByEight2" id="eleSDD2EightbyEight0" ng-change="check('eleSDD2EightbyEight0')" onblur="keepDecimal(this.id, 3);" ng-blur="checkRange('eleSDD2EightbyEight'+(electronNumber-1),0.1,180.00,numeric);">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>8 × 20</td>
                                            <td>
                                                <input type="text" class="form-control width-50 ng-pristine ng-valid" id="eleSSD1EightbyTwenty0" ng-model="electrons[electronNumber-1].Sc.EightByTwenty1" readonly="">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control width-50 ng-pristine ng-valid" id="eleSSD2EightbyTwenty0" tabindex="9" ng-model="electrons[electronNumber-1].Sc.EightByTwenty2" ng-change="check('eleSSD2EightbyTwenty0')" onblur="keepDecimal(this.id, 3);" ng-blur="checkRange('eleSSD2EightbyTwenty'+(electronNumber-1),0.1,180.0,numeric);">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>8 ×
                                                <input type="text" tabindex="1" class="form-control width-40 ng-pristine ng-valid" ng-model="electrons[electronNumber-1].Sc.Max" placeholder="Max" id="eleScMax0" ng-blur="checkRange('eleScMax'+(electronNumber-1),21,40,'int');">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control width-50 ng-pristine ng-valid" tabindex="4" ng-model="electrons[electronNumber-1].Sc.EightByMax1" id="eleSDD1EightbyMax0" onblur="keepDecimal(this.id, 3);" ng-blur="checkRange('eleSDD1EightbyMax'+(electronNumber-1),0.1,180.0,'numeric');">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control width-50 ng-pristine ng-valid" tabindex="9" ng-model="electrons[electronNumber-1].Sc.EightByMax2" id="eleSDD2EightbyMax0" onblur="keepDecimal(this.id, 3);" ng-blur="checkRange('eleSDD2EightbyMax'+(electronNumber-1),0.1,180.0,'numeric');">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="text" class="form-control width-40 ng-pristine ng-valid" ng-model="electrons[electronNumber-1].Sc.Max" placeholder="Max" id="eleScMax10" readonly=""> ×
                                                <input type="text" class="width-40 form-control ng-pristine ng-valid" id="eleScMax20" ng-model="electrons[electronNumber-1].Sc.Max" placeholder="Max" readonly="">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control width-50 ng-pristine ng-valid" tabindex="5" ng-model="electrons[electronNumber-1].Sc.MaxByMax1" id="eleSDD1MaxbyMax0" onblur="keepDecimal(this.id, 3);" ng-blur="checkRange('eleSDD1MaxbyMax'+(electronNumber-1),0.1,180.0,'numeric');">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control width-50 ng-pristine ng-valid" tabindex="10" ng-model="electrons[electronNumber-1].Sc.MaxByMax2" id="eleSDD2MaxbyMax0" onblur="keepDecimal(this.id, 3);" ng-blur="checkRange('eleSDD2MaxbyMax'+(electronNumber-1),0.1,180.0,'numeric');">
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <label>&nbsp;&nbsp;&nbsp;&nbsp;
                                <span class="color-red size-20p">∗</span>&nbsp;
                                <span class="font1">The separation between two SDDs should be 20 cm.</span>
                            </label>
                        </div><!-- end ngRepeat: electronNumber in electronNumbers --><div ng-class="divStyle[$index]" ng-repeat="electronNumber in electronNumbers" id="tablescen1" class="ng-scope tab-pane">
                            <div class="row">
                                <div class="col-lg-8 col-md-12 col-xs-12 col-sm-12">
                                    <table class="table table-bordered widget-box">
                                        <thead id="electronFieldSize">
                                        <tr>
                                            <th rowspan="2">Field Size (Inner × Outer) (cm)&nbsp;
                                                <a class="tooltip-demo" href="img/Jaw and MLC specification.png" data-lightbox="example-set13" title="">
                                                    <i class="icon-exclamation-sign"></i>
                                                </a>
                                            </th>
                                            <th colspan="2">Source-to-Detector Distance (cm)</th>
                                        </tr>
                                        <tr>
                                            <th>
                                                &nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="text" class="form-control width-50 font1 ng-pristine ng-valid" tabindex="2" id="SDD11" ng-model="electrons[electronNumber-1].Sc.SDD1" ng-blur="checkElectronSSDRange('SDD1'+(electronNumber-1), 'SDD2'+ (electronNumber-1))">
                                                <span class="color-ff0711">∗</span>
                                            </th>
                                            <th>
                                                &nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="text" class="form-control width-50 font1 ng-pristine ng-valid" tabindex="6" id="SDD21" ng-model="electrons[electronNumber-1].Sc.SDD2" ng-blur="checkElectronSSDRange('SDD1'+(electronNumber-1), 'SDD2'+ (electronNumber-1))">
                                                <span class="color-ff0711">∗</span>
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>8 × 8</td>
                                            <td>
                                                <input type="text" class="form-control width-50 ng-pristine ng-valid" tabindex="3" ng-model="electrons[electronNumber-1].Sc.EightByEight1" id="eleSDD1EightbyEight1" ng-change="check('eleSDD1EightbyEight1')" onblur="keepDecimal(this.id, 3);" ng-blur="checkRange('eleSDD1EightbyEight'+(electronNumber-1),0.1,180.0,numeric);">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control width-50 ng-pristine ng-valid" tabindex="7" ng-model="electrons[electronNumber-1].Sc.EightByEight2" id="eleSDD2EightbyEight1" ng-change="check('eleSDD2EightbyEight1')" onblur="keepDecimal(this.id, 3);" ng-blur="checkRange('eleSDD2EightbyEight'+(electronNumber-1),0.1,180.00,numeric);">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>8 × 20</td>
                                            <td>
                                                <input type="text" class="form-control width-50 ng-pristine ng-valid" id="eleSSD1EightbyTwenty1" ng-model="electrons[electronNumber-1].Sc.EightByTwenty1" readonly="">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control width-50 ng-pristine ng-valid" id="eleSSD2EightbyTwenty1" tabindex="9" ng-model="electrons[electronNumber-1].Sc.EightByTwenty2" ng-change="check('eleSSD2EightbyTwenty1')" onblur="keepDecimal(this.id, 3);" ng-blur="checkRange('eleSSD2EightbyTwenty'+(electronNumber-1),0.1,180.0,numeric);">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>8 ×
                                                <input type="text" tabindex="1" class="form-control width-40 ng-pristine ng-valid" ng-model="electrons[electronNumber-1].Sc.Max" placeholder="Max" id="eleScMax1" ng-blur="checkRange('eleScMax'+(electronNumber-1),21,40,'int');">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control width-50 ng-pristine ng-valid" tabindex="4" ng-model="electrons[electronNumber-1].Sc.EightByMax1" id="eleSDD1EightbyMax1" onblur="keepDecimal(this.id, 3);" ng-blur="checkRange('eleSDD1EightbyMax'+(electronNumber-1),0.1,180.0,'numeric');">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control width-50 ng-pristine ng-valid" tabindex="9" ng-model="electrons[electronNumber-1].Sc.EightByMax2" id="eleSDD2EightbyMax1" onblur="keepDecimal(this.id, 3);" ng-blur="checkRange('eleSDD2EightbyMax'+(electronNumber-1),0.1,180.0,'numeric');">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="text" class="form-control width-40 ng-pristine ng-valid" ng-model="electrons[electronNumber-1].Sc.Max" placeholder="Max" id="eleScMax11" readonly=""> ×
                                                <input type="text" class="width-40 form-control ng-pristine ng-valid" id="eleScMax21" ng-model="electrons[electronNumber-1].Sc.Max" placeholder="Max" readonly="">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control width-50 ng-pristine ng-valid" tabindex="5" ng-model="electrons[electronNumber-1].Sc.MaxByMax1" id="eleSDD1MaxbyMax1" onblur="keepDecimal(this.id, 3);" ng-blur="checkRange('eleSDD1MaxbyMax'+(electronNumber-1),0.1,180.0,'numeric');">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control width-50 ng-pristine ng-valid" tabindex="10" ng-model="electrons[electronNumber-1].Sc.MaxByMax2" id="eleSDD2MaxbyMax1" onblur="keepDecimal(this.id, 3);" ng-blur="checkRange('eleSDD2MaxbyMax'+(electronNumber-1),0.1,180.0,'numeric');">
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <label>&nbsp;&nbsp;&nbsp;&nbsp;
                                <span class="color-red size-20p">∗</span>&nbsp;
                                <span class="font1">The separation between two SDDs should be 20 cm.</span>
                            </label>
                        </div><!-- end ngRepeat: electronNumber in electronNumbers --><div ng-class="divStyle[$index]" ng-repeat="electronNumber in electronNumbers" id="tablescen2" class="ng-scope tab-pane">
                            <div class="row">
                                <div class="col-lg-8 col-md-12 col-xs-12 col-sm-12">
                                    <table class="table table-bordered widget-box">
                                        <thead id="electronFieldSize">
                                        <tr>
                                            <th rowspan="2">Field Size (Inner × Outer) (cm)&nbsp;
                                                <a class="tooltip-demo" href="img/Jaw and MLC specification.png" data-lightbox="example-set13" title="">
                                                    <i class="icon-exclamation-sign"></i>
                                                </a>
                                            </th>
                                            <th colspan="2">Source-to-Detector Distance (cm)</th>
                                        </tr>
                                        <tr>
                                            <th>
                                                &nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="text" class="form-control width-50 font1 ng-pristine ng-valid" tabindex="2" id="SDD12" ng-model="electrons[electronNumber-1].Sc.SDD1" ng-blur="checkElectronSSDRange('SDD1'+(electronNumber-1), 'SDD2'+ (electronNumber-1))">
                                                <span class="color-ff0711">∗</span>
                                            </th>
                                            <th>
                                                &nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="text" class="form-control width-50 font1 ng-pristine ng-valid" tabindex="6" id="SDD22" ng-model="electrons[electronNumber-1].Sc.SDD2" ng-blur="checkElectronSSDRange('SDD1'+(electronNumber-1), 'SDD2'+ (electronNumber-1))">
                                                <span class="color-ff0711">∗</span>
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>8 × 8</td>
                                            <td>
                                                <input type="text" class="form-control width-50 ng-pristine ng-valid" tabindex="3" ng-model="electrons[electronNumber-1].Sc.EightByEight1" id="eleSDD1EightbyEight2" ng-change="check('eleSDD1EightbyEight2')" onblur="keepDecimal(this.id, 3);" ng-blur="checkRange('eleSDD1EightbyEight'+(electronNumber-1),0.1,180.0,numeric);">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control width-50 ng-pristine ng-valid" tabindex="7" ng-model="electrons[electronNumber-1].Sc.EightByEight2" id="eleSDD2EightbyEight2" ng-change="check('eleSDD2EightbyEight2')" onblur="keepDecimal(this.id, 3);" ng-blur="checkRange('eleSDD2EightbyEight'+(electronNumber-1),0.1,180.00,numeric);">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>8 × 20</td>
                                            <td>
                                                <input type="text" class="form-control width-50 ng-pristine ng-valid" id="eleSSD1EightbyTwenty2" ng-model="electrons[electronNumber-1].Sc.EightByTwenty1" readonly="">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control width-50 ng-pristine ng-valid" id="eleSSD2EightbyTwenty2" tabindex="9" ng-model="electrons[electronNumber-1].Sc.EightByTwenty2" ng-change="check('eleSSD2EightbyTwenty2')" onblur="keepDecimal(this.id, 3);" ng-blur="checkRange('eleSSD2EightbyTwenty'+(electronNumber-1),0.1,180.0,numeric);">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>8 ×
                                                <input type="text" tabindex="1" class="form-control width-40 ng-pristine ng-valid" ng-model="electrons[electronNumber-1].Sc.Max" placeholder="Max" id="eleScMax2" ng-blur="checkRange('eleScMax'+(electronNumber-1),21,40,'int');">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control width-50 ng-pristine ng-valid" tabindex="4" ng-model="electrons[electronNumber-1].Sc.EightByMax1" id="eleSDD1EightbyMax2" onblur="keepDecimal(this.id, 3);" ng-blur="checkRange('eleSDD1EightbyMax'+(electronNumber-1),0.1,180.0,'numeric');">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control width-50 ng-pristine ng-valid" tabindex="9" ng-model="electrons[electronNumber-1].Sc.EightByMax2" id="eleSDD2EightbyMax2" onblur="keepDecimal(this.id, 3);" ng-blur="checkRange('eleSDD2EightbyMax'+(electronNumber-1),0.1,180.0,'numeric');">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="text" class="form-control width-40 ng-pristine ng-valid" ng-model="electrons[electronNumber-1].Sc.Max" placeholder="Max" id="eleScMax12" readonly=""> ×
                                                <input type="text" class="width-40 form-control ng-pristine ng-valid" id="eleScMax22" ng-model="electrons[electronNumber-1].Sc.Max" placeholder="Max" readonly="">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control width-50 ng-pristine ng-valid" tabindex="5" ng-model="electrons[electronNumber-1].Sc.MaxByMax1" id="eleSDD1MaxbyMax2" onblur="keepDecimal(this.id, 3);" ng-blur="checkRange('eleSDD1MaxbyMax'+(electronNumber-1),0.1,180.0,'numeric');">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control width-50 ng-pristine ng-valid" tabindex="10" ng-model="electrons[electronNumber-1].Sc.MaxByMax2" id="eleSDD2MaxbyMax2" onblur="keepDecimal(this.id, 3);" ng-blur="checkRange('eleSDD2MaxbyMax'+(electronNumber-1),0.1,180.0,'numeric');">
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <label>&nbsp;&nbsp;&nbsp;&nbsp;
                                <span class="color-red size-20p">∗</span>&nbsp;
                                <span class="font1">The separation between two SDDs should be 20 cm.</span>
                            </label>
                        </div><!-- end ngRepeat: electronNumber in electronNumbers -->
                    </div>
                </div>
            </section>

            <!--     Additional XiO
        ================================================== -->
            <section>

                <!--       Wedge Factor -->
                <div id="tabwedgefac" ng-hide="sections.xwf" class="ng-hide">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 padding-left-50p">
                            <p class="font1">Wedge Transmission Factors (WF) is recommended to measure at CAX, 100cm SSD, Reference depth.</p>
                            <p class="font1">SSD (cm):&nbsp;&nbsp;&nbsp;
                                <select id="xioWFSDD" tabindex="1" class="form-control width-18 ng-pristine ng-valid" ng-model="xioWFSSD" ng-options="XS for XS in phtSSDs"><option value="0" selected="selected">90</option><option value="1">100</option></select>
                            </p>
                        </div>
                        <div class="row">
                            <div class="widget-box ">
                                <div class="widget-title">
                                    <ul class="nav nav-tabs">
                                        <!-- ngRepeat: machineWedge in machineWedges --><li ng-class="style[$index]" ng-repeat="machineWedge in machineWedges" id="xioWfTab0" ng-click="activateTab('xioWfTab', 'tablexwf', $index);" class="ng-scope active">
                                            <a data-toggle="tab" href="#tablexwf0" class="ng-binding">Precise04xW1</a>
                                        </li><!-- end ngRepeat: machineWedge in machineWedges --><li ng-class="style[$index]" ng-repeat="machineWedge in machineWedges" id="xioWfTab1" ng-click="activateTab('xioWfTab', 'tablexwf', $index);" class="ng-scope">
                                            <a data-toggle="tab" href="#tablexwf1" class="ng-binding">Precise06xW1</a>
                                        </li><!-- end ngRepeat: machineWedge in machineWedges -->
                                    </ul>
                                </div>
                                <div class="widget-content tab-content ">
                                    <!-- ngRepeat: machineWedge in machineWedges --><div ng-class="divStyle[$index]" ng-repeat="machineWedge in machineWedges" id="tablexwf0" class="ng-scope tab-pane active">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12">
                                                <div class="pull-right">
                                                    <button type="button" class="btn btn-primary btn-sm" ng-click="addWFRow($index);">
                                                        <i class="icon-plus icon-white"></i> Add Field Size
                                                    </button>
                                                    <button type="button" class="btn btn-primary btn-sm" ng-show="!delWF" ng-click="delWF=true" ng-disabled="delFSflag == true" disabled="disabled">
                                                        <i class="icon-remove icon-white"></i> Delete Field Size
                                                    </button>
                                                    <button type="button" class="btn btn-primary btn-sm ng-hide" ng-show="delWF" ng-click="delWF=false">
                                                        <i class="icon-ok icon-white"></i> Exit Deletion
                                                    </button>
                                                </div>
                                                <table class="table table-bordered widget-box" id="tablexwf">
                                                    <thead>
                                                    <tr>
                                                        <th>Square Field Size (cm)&nbsp;
                                                            <a class="tooltip-demo" data-toggle="tooltip" data-placement="top" title="Field size is defined at surface">&nbsp;
                                                                <i class="icon-exclamation-sign"></i>
                                                            </a>
                                                        </th>
                                                        <th>Wedge Factor</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <!-- ngRepeat: WF in xioPraTables[$index].WedgeFactors --><tr ng-repeat="WF in xioPraTables[$index].WedgeFactors" class="ng-scope">
                                                        <td class="ng-binding">5 × 5
                                                            <i class="icon-remove cursor-pointer ng-hide" ng-show="delWF &amp;&amp; WF.ifDelete" ng-click="deleteWFRow(WF.WFFieldSize, $parent.$index);"></i>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control ng-pristine ng-valid" tabindex="4" id="WF00WedgeFactor" ng-model="WF.WedgeFactor" ng-change="check('WF00WedgeFactor');" ng-blur="checkRange('WF'+$parent.$index+$index+'WedgeFactor',0.100,1.000,'numeric')" onblur="keepDecimal(this.id, 3);" ng-readonly="!wedgeDis.0.0">
                                                        </td>
                                                    </tr><!-- end ngRepeat: WF in xioPraTables[$index].WedgeFactors --><tr ng-repeat="WF in xioPraTables[$index].WedgeFactors" class="ng-scope">
                                                        <td class="ng-binding">10 × 10
                                                            <i class="icon-remove cursor-pointer ng-hide" ng-show="delWF &amp;&amp; WF.ifDelete" ng-click="deleteWFRow(WF.WFFieldSize, $parent.$index);"></i>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control ng-pristine ng-valid" tabindex="4" id="WF01WedgeFactor" ng-model="WF.WedgeFactor" ng-change="check('WF01WedgeFactor');" ng-blur="checkRange('WF'+$parent.$index+$index+'WedgeFactor',0.100,1.000,'numeric')" onblur="keepDecimal(this.id, 3);" ng-readonly="!wedgeDis.0.0">
                                                        </td>
                                                    </tr><!-- end ngRepeat: WF in xioPraTables[$index].WedgeFactors --><tr ng-repeat="WF in xioPraTables[$index].WedgeFactors" class="ng-scope">
                                                        <td class="ng-binding">15 × 15
                                                            <i class="icon-remove cursor-pointer ng-hide" ng-show="delWF &amp;&amp; WF.ifDelete" ng-click="deleteWFRow(WF.WFFieldSize, $parent.$index);"></i>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control ng-pristine ng-valid" tabindex="4" id="WF02WedgeFactor" ng-model="WF.WedgeFactor" ng-change="check('WF02WedgeFactor');" ng-blur="checkRange('WF'+$parent.$index+$index+'WedgeFactor',0.100,1.000,'numeric')" onblur="keepDecimal(this.id, 3);" ng-readonly="!wedgeDis.0.0">
                                                        </td>
                                                    </tr><!-- end ngRepeat: WF in xioPraTables[$index].WedgeFactors --><tr ng-repeat="WF in xioPraTables[$index].WedgeFactors" class="ng-scope">
                                                        <td class="ng-binding">20 × 20
                                                            <i class="icon-remove cursor-pointer ng-hide" ng-show="delWF &amp;&amp; WF.ifDelete" ng-click="deleteWFRow(WF.WFFieldSize, $parent.$index);"></i>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control ng-pristine ng-valid" tabindex="4" id="WF03WedgeFactor" ng-model="WF.WedgeFactor" ng-change="check('WF03WedgeFactor');" ng-blur="checkRange('WF'+$parent.$index+$index+'WedgeFactor',0.100,1.000,'numeric')" onblur="keepDecimal(this.id, 3);" ng-readonly="!wedgeDis.0.0">
                                                        </td>
                                                    </tr><!-- end ngRepeat: WF in xioPraTables[$index].WedgeFactors -->
                                                    <!-- ngRepeat: nWF in xioPraTables[$index].nWedgeFactors -->
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control width-30 ng-pristine ng-valid" placeholder="max" tabindex="2" id="xioPraTables0WfMaxBy1" ng-model="xioPraTables[$index].WfMaxBy1" ng-blur="check('xioPraTables'+$index+'WfMaxBy1'); checkWFMax('xioPraTables'+$index+'WfMaxBy1', $index);" onblur="keepDecimal(this.id, 0, this.nextSibling.nextSibling.id);" ng-readonly="!wedgeDis.0.0"> ×
                                                            <input type="text" class="form-control width-30 ng-pristine ng-valid" placeholder="max" tabindex="3" id="xioPraTables0WfMaxBy2" ng-blur="checkWFMax('xioPraTables'+$index+'WfMaxBy2', $index);" ng-model="xioPraTables[$index].WfMaxBy1" disabled="">
                                                            <a class="tooltip-demo" data-toggle="tooltip" data-placement="top" title="the maximum wedged square field size">&nbsp;
                                                                <i class="icon-exclamation-sign"></i>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control ng-pristine ng-valid" tabindex="5" id="xioPraTables0WfMax" ng-model="xioPraTables[$index].WfMax" ng-change="check('xioPraTables0WfMax');" ng-blur="checkRange('xioPraTables'+$index+'WfMax',0.001,1.000,'numeric')" onblur="keepDecimal(this.id, 3);" ng-readonly="!wedgeDis.0.0">
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div><!-- end ngRepeat: machineWedge in machineWedges --><div ng-class="divStyle[$index]" ng-repeat="machineWedge in machineWedges" id="tablexwf1" class="ng-scope tab-pane">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12">
                                                <div class="pull-right">
                                                    <button type="button" class="btn btn-primary btn-sm" ng-click="addWFRow($index);">
                                                        <i class="icon-plus icon-white"></i> Add Field Size
                                                    </button>
                                                    <button type="button" class="btn btn-primary btn-sm" ng-show="!delWF" ng-click="delWF=true" ng-disabled="delFSflag == true" disabled="disabled">
                                                        <i class="icon-remove icon-white"></i> Delete Field Size
                                                    </button>
                                                    <button type="button" class="btn btn-primary btn-sm ng-hide" ng-show="delWF" ng-click="delWF=false">
                                                        <i class="icon-ok icon-white"></i> Exit Deletion
                                                    </button>
                                                </div>
                                                <table class="table table-bordered widget-box" id="tablexwf">
                                                    <thead>
                                                    <tr>
                                                        <th>Square Field Size (cm)&nbsp;
                                                            <a class="tooltip-demo" data-toggle="tooltip" data-placement="top" title="Field size is defined at surface">&nbsp;
                                                                <i class="icon-exclamation-sign"></i>
                                                            </a>
                                                        </th>
                                                        <th>Wedge Factor</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <!-- ngRepeat: WF in xioPraTables[$index].WedgeFactors --><tr ng-repeat="WF in xioPraTables[$index].WedgeFactors" class="ng-scope">
                                                        <td class="ng-binding">5 × 5
                                                            <i class="icon-remove cursor-pointer ng-hide" ng-show="delWF &amp;&amp; WF.ifDelete" ng-click="deleteWFRow(WF.WFFieldSize, $parent.$index);"></i>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control ng-pristine ng-valid" tabindex="4" id="WF10WedgeFactor" ng-model="WF.WedgeFactor" ng-change="check('WF10WedgeFactor');" ng-blur="checkRange('WF'+$parent.$index+$index+'WedgeFactor',0.100,1.000,'numeric')" onblur="keepDecimal(this.id, 3);" ng-readonly="!wedgeDis.1.0">
                                                        </td>
                                                    </tr><!-- end ngRepeat: WF in xioPraTables[$index].WedgeFactors --><tr ng-repeat="WF in xioPraTables[$index].WedgeFactors" class="ng-scope">
                                                        <td class="ng-binding">10 × 10
                                                            <i class="icon-remove cursor-pointer ng-hide" ng-show="delWF &amp;&amp; WF.ifDelete" ng-click="deleteWFRow(WF.WFFieldSize, $parent.$index);"></i>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control ng-pristine ng-valid" tabindex="4" id="WF11WedgeFactor" ng-model="WF.WedgeFactor" ng-change="check('WF11WedgeFactor');" ng-blur="checkRange('WF'+$parent.$index+$index+'WedgeFactor',0.100,1.000,'numeric')" onblur="keepDecimal(this.id, 3);" ng-readonly="!wedgeDis.1.0">
                                                        </td>
                                                    </tr><!-- end ngRepeat: WF in xioPraTables[$index].WedgeFactors --><tr ng-repeat="WF in xioPraTables[$index].WedgeFactors" class="ng-scope">
                                                        <td class="ng-binding">15 × 15
                                                            <i class="icon-remove cursor-pointer ng-hide" ng-show="delWF &amp;&amp; WF.ifDelete" ng-click="deleteWFRow(WF.WFFieldSize, $parent.$index);"></i>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control ng-pristine ng-valid" tabindex="4" id="WF12WedgeFactor" ng-model="WF.WedgeFactor" ng-change="check('WF12WedgeFactor');" ng-blur="checkRange('WF'+$parent.$index+$index+'WedgeFactor',0.100,1.000,'numeric')" onblur="keepDecimal(this.id, 3);" ng-readonly="!wedgeDis.1.0">
                                                        </td>
                                                    </tr><!-- end ngRepeat: WF in xioPraTables[$index].WedgeFactors --><tr ng-repeat="WF in xioPraTables[$index].WedgeFactors" class="ng-scope">
                                                        <td class="ng-binding">20 × 20
                                                            <i class="icon-remove cursor-pointer ng-hide" ng-show="delWF &amp;&amp; WF.ifDelete" ng-click="deleteWFRow(WF.WFFieldSize, $parent.$index);"></i>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control ng-pristine ng-valid" tabindex="4" id="WF13WedgeFactor" ng-model="WF.WedgeFactor" ng-change="check('WF13WedgeFactor');" ng-blur="checkRange('WF'+$parent.$index+$index+'WedgeFactor',0.100,1.000,'numeric')" onblur="keepDecimal(this.id, 3);" ng-readonly="!wedgeDis.1.0">
                                                        </td>
                                                    </tr><!-- end ngRepeat: WF in xioPraTables[$index].WedgeFactors -->
                                                    <!-- ngRepeat: nWF in xioPraTables[$index].nWedgeFactors -->
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control width-30 ng-pristine ng-valid" placeholder="max" tabindex="2" id="xioPraTables1WfMaxBy1" ng-model="xioPraTables[$index].WfMaxBy1" ng-blur="check('xioPraTables'+$index+'WfMaxBy1'); checkWFMax('xioPraTables'+$index+'WfMaxBy1', $index);" onblur="keepDecimal(this.id, 0, this.nextSibling.nextSibling.id);" ng-readonly="!wedgeDis.1.0"> ×
                                                            <input type="text" class="form-control width-30 ng-pristine ng-valid" placeholder="max" tabindex="3" id="xioPraTables1WfMaxBy2" ng-blur="checkWFMax('xioPraTables'+$index+'WfMaxBy2', $index);" ng-model="xioPraTables[$index].WfMaxBy1" disabled="">
                                                            <a class="tooltip-demo" data-toggle="tooltip" data-placement="top" title="the maximum wedged square field size">&nbsp;
                                                                <i class="icon-exclamation-sign"></i>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control ng-pristine ng-valid" tabindex="5" id="xioPraTables1WfMax" ng-model="xioPraTables[$index].WfMax" ng-change="check('xioPraTables1WfMax');" ng-blur="checkRange('xioPraTables'+$index+'WfMax',0.001,1.000,'numeric')" onblur="keepDecimal(this.id, 3);" ng-readonly="!wedgeDis.1.0">
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div><!-- end ngRepeat: machineWedge in machineWedges -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--  Block & Tray Transmission -->
                <div id="tabblocktray" ng-hide="sections.xbt" class="ng-hide">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <label class="font1">Source-to-Blocking Tray Distance (cm)</label>
                                <div>
                                    <input type="text" tabindex="1" id="stbtd" class="form-control ng-pristine ng-valid" ng-model="SourceToBlockingTrayDistance" ng-blur="checkRange('stbtd',20.0,100.0,'numeric');" onblur="keepDecimal(this.id, 1);">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="font1">Max Blocking Tray Distance (cm)</label>
                                <div>
                                    <input type="text" tabindex="2" id="maxbtraydis" class="form-control ng-pristine ng-valid" name="Max Blocking tray distance" ng-model="MaxBlockingTrayDistance" ng-blur="checkRange('maxbtraydis',20.0,100.0,'numeric')" onblur="keepDecimal(this.id, 1);">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="font1">Min Blocking Tray Distance (cm)</label>
                                <div>
                                    <input type="text" tabindex="3" id="minbtraydis" class="form-control ng-pristine ng-valid" name="Min Blocking tray distance" ng-model="MinBlockingTrayDistance" ng-blur="checkRange('minbtraydis',20.0,100.0,'numeric')" onblur="keepDecimal(this.id, 1);">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <table class="table table-bordered widget-box" id="tablexbt">
                                <thead>
                                <tr>
                                    <th>Machine ID</th>
                                    <th>Reference Field Size (cm)</th>
                                    <th>Block Factor (optional)</th>
                                    <th>Tray Factor (optional)</th>
                                </tr>
                                </thead>
                                <tbody>
                                <!-- ngRepeat: photon in photons --><tr ng-repeat="photon in photons" class="ng-scope">
                                    <td class="ng-binding">Precise04x</td>
                                    <td ng-show="SSD_photonTSCF == 100" class="ng-binding ng-hide">10 × 10 </td>
                                    <td ng-show="SSD_photonTSCF == 90" class="ng-binding">10 × 10 </td>
                                    <td>
                                        <input type="text" class="form-control ng-pristine ng-valid" tabindex="4" id="xioPra0BlockFac" ng-model="xioPra[$index].BlockFac" ng-blur="checkRange('xioPra'+$index+'BlockFac',0.100,1.999,'numeric')" onblur="keepDecimal(this.id, 3);">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control ng-pristine ng-valid" tabindex="5" id="xioPra0TrayFac" ng-model="xioPra[$index].TrayFac" ng-blur="checkRange('xioPra'+$index+'TrayFac',0.100,1.999,'numeric')" onblur="keepDecimal(this.id, 3);">
                                    </td>
                                </tr><!-- end ngRepeat: photon in photons --><tr ng-repeat="photon in photons" class="ng-scope">
                                    <td class="ng-binding">Precise06x</td>
                                    <td ng-show="SSD_photonTSCF == 100" class="ng-binding ng-hide">10 × 10 </td>
                                    <td ng-show="SSD_photonTSCF == 90" class="ng-binding">10 × 10 </td>
                                    <td>
                                        <input type="text" class="form-control ng-pristine ng-valid" tabindex="4" id="xioPra1BlockFac" ng-model="xioPra[$index].BlockFac" ng-blur="checkRange('xioPra'+$index+'BlockFac',0.100,1.999,'numeric')" onblur="keepDecimal(this.id, 3);">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control ng-pristine ng-valid" tabindex="5" id="xioPra1TrayFac" ng-model="xioPra[$index].TrayFac" ng-blur="checkRange('xioPra'+$index+'TrayFac',0.100,1.999,'numeric')" onblur="keepDecimal(this.id, 3);">
                                    </td>
                                </tr><!-- end ngRepeat: photon in photons -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!--  Quality Index -->
                <div id="tabqualindex" ng-hide="sections.xqi" class="ng-hide">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <table class="table table-bordered widget-box" id="tablexqi">
                                <thead>
                                <tr>
                                    <th>Machine ID</th>
                                    <th>SSD (cm)</th>
                                    <th>Reference Field Size (cm)&nbsp;
                                        <a class="tooltip-demo" data-toggle="tooltip" data-placement="top" title="Field size is defined at surface when SSD=100cm; Field size is defined at isocenter distance when SSD=90cm">
                                            <i class="icon-exclamation-sign"></i>
                                        </a>
                                    </th>
                                    <th>Quality Index&nbsp;
                                        <a class="tooltip-demo" data-toggle="tooltip" data-placement="top" title="Quality Index is defined as the ratio of TPR(20)/TPR(10) for a 10x10 field.">
                                            <i class="icon-exclamation-sign"></i>
                                        </a>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <!-- ngRepeat: photon in photons --><tr ng-repeat="photon in photons" class="ng-scope">
                                    <td class="ng-binding">Precise04x</td>
                                    <td>
                                        <select class="form-control ng-pristine ng-valid" tabindex="1" id="selectedXioSSD0" ng-model="selectedXioSSD[$index]" ng-options="XS for XS in phtSSDs"><option value="0" selected="selected">90</option><option value="1">100</option></select>
                                    </td>
                                    <td ng-show="selectedXioSSD[$index] == 100" class="ng-binding ng-hide">10 × 10 </td>
                                    <td ng-show="selectedXioSSD[$index] == 90" class="ng-binding">10 × 10 </td>
                                    <td>
                                        <input type="text" class="form-control ng-pristine ng-valid" tabindex="2" id="xioPra0Qi" ng-model="xioPra[$index].Qi" ng-blur="checkRange('xioPra'+$index+'Qi',0.100,1.000,'numeric')" onblur="keepDecimal(this.id, 3);">
                                    </td>
                                </tr><!-- end ngRepeat: photon in photons --><tr ng-repeat="photon in photons" class="ng-scope">
                                    <td class="ng-binding">Precise06x</td>
                                    <td>
                                        <select class="form-control ng-pristine ng-valid" tabindex="1" id="selectedXioSSD1" ng-model="selectedXioSSD[$index]" ng-options="XS for XS in phtSSDs"><option value="0" selected="selected">90</option><option value="1">100</option></select>
                                    </td>
                                    <td ng-show="selectedXioSSD[$index] == 100" class="ng-binding ng-hide">10 × 10 </td>
                                    <td ng-show="selectedXioSSD[$index] == 90" class="ng-binding">10 × 10 </td>
                                    <td>
                                        <input type="text" class="form-control ng-pristine ng-valid" tabindex="2" id="xioPra1Qi" ng-model="xioPra[$index].Qi" ng-blur="checkRange('xioPra'+$index+'Qi',0.100,1.000,'numeric')" onblur="keepDecimal(this.id, 3);">
                                    </td>
                                </tr><!-- end ngRepeat: photon in photons -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!--  Electron Output Factors -->
                <div id="tabelecoutfac" ng-hide="sections.xeof" class="ng-hide">
                    <div class="widget-box">
                        <div class="widget-title">
                            <ul class="nav nav-tabs">
                                <!-- ngRepeat: electronNumber in electronNumbers --><li ng-class="eStyle[$index]" ng-repeat="electronNumber in electronNumbers" id="electronOFTab0" ng-click="activateTab('electronOFTab', 'tableeloutput', electronNumber-1);" class="ng-scope active">
                                    <a href="#tableeloutput0" data-toggle="tab" class="ng-binding">Precise06e</a>
                                </li><!-- end ngRepeat: electronNumber in electronNumbers --><li ng-class="eStyle[$index]" ng-repeat="electronNumber in electronNumbers" id="electronOFTab1" ng-click="activateTab('electronOFTab', 'tableeloutput', electronNumber-1);" class="ng-scope">
                                    <a href="#tableeloutput1" data-toggle="tab" class="ng-binding">Precise09e</a>
                                </li><!-- end ngRepeat: electronNumber in electronNumbers --><li ng-class="eStyle[$index]" ng-repeat="electronNumber in electronNumbers" id="electronOFTab2" ng-click="activateTab('electronOFTab', 'tableeloutput', electronNumber-1);" class="ng-scope">
                                    <a href="#tableeloutput2" data-toggle="tab" class="ng-binding">Precise12e</a>
                                </li><!-- end ngRepeat: electronNumber in electronNumbers -->
                            </ul>
                        </div>
                        <div class="tab-content widget-content">
                            <!-- ngRepeat: electronNumber in electronNumbers --><div class="divStyle[$index] ng-scope" ng-repeat="electronNumber in electronNumbers" id="tableeloutput0">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                        <span class="label label-info">Note !</span>&nbsp;
                                        <span class="font1">Please activate/disable the corresponding columns according to how many SSD you need
                                            to input</span>
                                        <table class="table table-bordered widget-box" id="tablexeof">
                                            <thead>
                                            <tr>
                                                <th rowspan="3">Nominal Applicator Size (width × length) (cm)</th>
                                                <th rowspan="3" class="width-12">Dmax (cm)</th>
                                                <th colspan="5">Relative Output Factors (cGy/MU)</th>
                                                <th rowspan="3" class="width-12">Effective SSD (cm)
                                                    <a class="tooltip-demo" data-toggle="tooltip" data-placement="top" title="Method described according to Khan, Physics of Radiation Therapy, 2nd ed., P. 373.">
                                                        <i class="icon-exclamation-sign"></i>
                                                    </a>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>#1&nbsp;</th>
                                                <th>#2&nbsp;</th>
                                                <th>#3&nbsp;
                                                    <button class="btn btn-xs btn-info" ng-show="!xioDisCol.col3" ng-click="disXioEleCol('col3',electronNumber-1,'Ssd3')">Disable</button>
                                                    <button class="btn btn-xs btn-info ng-hide" ng-show="xioDisCol.col3" ng-click="disXioEleCol('col3',electronNumber-1,'Ssd3')">Activate</button>
                                                </th>
                                                <th>#4&nbsp;
                                                    <button class="btn btn-xs btn-info" ng-show="!xioDisCol.col4" ng-click="disXioEleCol('col4',electronNumber-1,'Ssd4')">Disable</button>
                                                    <button class="btn btn-xs btn-info ng-hide" ng-show="xioDisCol.col4" ng-click="disXioEleCol('col4',electronNumber-1,'Ssd4')">Activate</button>
                                                </th>
                                                <th>#5&nbsp;
                                                    <button class="btn btn-xs btn-info" ng-show="!xioDisCol.col5" ng-click="disXioEleCol('col5',electronNumber-1,'Ssd5')">Disable</button>
                                                    <button class="btn btn-xs btn-info ng-hide" ng-show="xioDisCol.col5" ng-click="disXioEleCol('col5',electronNumber-1,'Ssd5')">Activate</button>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>SSD
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="2" id="XioSsd10" ng-model="xioEleSsd.Ssd1" ng-change="setEffectiveSDD(electronNumber-1,'null');" ng-blur="checkSsdRange(electronNumber-1,'Ssd1');" onblur="keepDecimal(this.id, 1);"> cm
                                                </th>
                                                <th>SSD
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="3" id="XioSsd20" ng-model="xioEleSsd.Ssd2" ng-change="setEffectiveSDD(electronNumber-1,'null');" ng-blur="checkSsdRange(electronNumber-1,'Ssd2');" onblur="keepDecimal(this.id, 1);"> cm
                                                </th>
                                                <th>SSD
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="4" id="XioSsd30" ng-model="xioEleSsd.Ssd3" ng-readonly="xioDisCol.col3" ng-change="setEffectiveSDD(electronNumber-1,'null');" ng-blur="checkSsdRange(electronNumber-1,'Ssd3');" onblur="keepDecimal(this.id, 1);"> cm
                                                </th>
                                                <th>SSD
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="5" id="XioSsd40" ng-model="xioEleSsd.Ssd4" ng-readonly="xioDisCol.col4" ng-change="setEffectiveSDD(electronNumber-1,'null');" ng-blur="checkSsdRange(electronNumber-1,'Ssd4');" onblur="keepDecimal(this.id, 1);"> cm
                                                </th>
                                                <th>SSD
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="6" id="XioSsd50" ng-model="xioEleSsd.Ssd5" ng-readonly="xioDisCol.col5" ng-change="setEffectiveSDD(electronNumber-1,'null');" ng-blur="checkSsdRange(electronNumber-1,'Ssd5');" onblur="keepDecimal(this.id, 1);"> cm
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <!-- ngRepeat: applicatorNumber in applicatorNumbers --><tr ng-repeat="applicatorNumber in applicatorNumbers" class="ng-scope">
                                                <td>
                                                    <input class="form-control width-35 ng-pristine ng-valid" type="text" id="ScAppX00" ng-model="appX[applicatorNumber-1]" readonly="">&nbsp;×&nbsp;
                                                    <input class="form-control width-35 ng-pristine ng-valid" type="text" id="ScappY0" ng-model="appY[applicatorNumber-1]" readonly="">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="1" id="elecOutputFacDmax00" ng-model="xioEleSsd.Dmax[electronNumber-1]" ng-change="setEffectiveSDD(electronNumber-1,'null');" ng-blur="checkDmaxRange(electronNumber-1,applicatorNumber-1)" onblur="keepDecimal(this.id, 1);">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="2" id="XioSsd100" ng-model="xioEle[electronNumber-1][applicatorNumber-1].Ssd1I" ng-change="setEffectiveSDD(electronNumber-1,applicatorNumber-1);" ng-blur="checkRange('XioSsd1'+(electronNumber-1)+(applicatorNumber-1),0.001,15.000,'numeric')" onblur="keepDecimal(this.id, 3);">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="3" id="XioSsd200" ng-model="xioEle[electronNumber-1][applicatorNumber-1].Ssd2I" ng-change="setEffectiveSDD(electronNumber-1,applicatorNumber-1);" ng-blur="checkRange('XioSsd2'+(electronNumber-1)+(applicatorNumber-1),0.001,15.000,'numeric')" onblur="keepDecimal(this.id, 3);">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="4" id="XioSsd300" ng-readonly="xioDisCol.col3" ng-model="xioEle[electronNumber-1][applicatorNumber-1].Ssd3I" ng-change="setEffectiveSDD(electronNumber-1,applicatorNumber-1);" ng-blur="checkRange('XioSsd3'+(electronNumber-1)+(applicatorNumber-1),0.001,15.000,'numeric')" onblur="keepDecimal(this.id, 3);">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="5" id="XioSsd400" ng-readonly="xioDisCol.col4" ng-model="xioEle[electronNumber-1][applicatorNumber-1].Ssd4I" ng-change="setEffectiveSDD(electronNumber-1,applicatorNumber-1);" ng-blur="checkRange('XioSsd4'+(electronNumber-1)+(applicatorNumber-1),0.001,15.000,'numeric')" onblur="keepDecimal(this.id, 3);">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="6" id="XioSsd500" ng-readonly="xioDisCol.col5" ng-model="xioEle[electronNumber-1][applicatorNumber-1].Ssd5I" ng-change="setEffectiveSDD(electronNumber-1,applicatorNumber-1);" ng-blur="checkRange('XioSsd5'+(electronNumber-1)+(applicatorNumber-1),0.001,15.000,'numeric')" onblur="keepDecimal(this.id, 3);">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" id="xioEleEsd00" ng-model="xioEle[electronNumber-1][applicatorNumber-1].Esd" readonly="">
                                                </td>
                                            </tr><!-- end ngRepeat: applicatorNumber in applicatorNumbers --><tr ng-repeat="applicatorNumber in applicatorNumbers" class="ng-scope">
                                                <td>
                                                    <input class="form-control width-35 ng-pristine ng-valid" type="text" id="ScAppX01" ng-model="appX[applicatorNumber-1]" readonly="">&nbsp;×&nbsp;
                                                    <input class="form-control width-35 ng-pristine ng-valid" type="text" id="ScappY1" ng-model="appY[applicatorNumber-1]" readonly="">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="1" id="elecOutputFacDmax01" ng-model="xioEleSsd.Dmax[electronNumber-1]" ng-change="setEffectiveSDD(electronNumber-1,'null');" ng-blur="checkDmaxRange(electronNumber-1,applicatorNumber-1)" onblur="keepDecimal(this.id, 1);">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="2" id="XioSsd101" ng-model="xioEle[electronNumber-1][applicatorNumber-1].Ssd1I" ng-change="setEffectiveSDD(electronNumber-1,applicatorNumber-1);" ng-blur="checkRange('XioSsd1'+(electronNumber-1)+(applicatorNumber-1),0.001,15.000,'numeric')" onblur="keepDecimal(this.id, 3);">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="3" id="XioSsd201" ng-model="xioEle[electronNumber-1][applicatorNumber-1].Ssd2I" ng-change="setEffectiveSDD(electronNumber-1,applicatorNumber-1);" ng-blur="checkRange('XioSsd2'+(electronNumber-1)+(applicatorNumber-1),0.001,15.000,'numeric')" onblur="keepDecimal(this.id, 3);">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="4" id="XioSsd301" ng-readonly="xioDisCol.col3" ng-model="xioEle[electronNumber-1][applicatorNumber-1].Ssd3I" ng-change="setEffectiveSDD(electronNumber-1,applicatorNumber-1);" ng-blur="checkRange('XioSsd3'+(electronNumber-1)+(applicatorNumber-1),0.001,15.000,'numeric')" onblur="keepDecimal(this.id, 3);">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="5" id="XioSsd401" ng-readonly="xioDisCol.col4" ng-model="xioEle[electronNumber-1][applicatorNumber-1].Ssd4I" ng-change="setEffectiveSDD(electronNumber-1,applicatorNumber-1);" ng-blur="checkRange('XioSsd4'+(electronNumber-1)+(applicatorNumber-1),0.001,15.000,'numeric')" onblur="keepDecimal(this.id, 3);">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="6" id="XioSsd501" ng-readonly="xioDisCol.col5" ng-model="xioEle[electronNumber-1][applicatorNumber-1].Ssd5I" ng-change="setEffectiveSDD(electronNumber-1,applicatorNumber-1);" ng-blur="checkRange('XioSsd5'+(electronNumber-1)+(applicatorNumber-1),0.001,15.000,'numeric')" onblur="keepDecimal(this.id, 3);">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" id="xioEleEsd01" ng-model="xioEle[electronNumber-1][applicatorNumber-1].Esd" readonly="">
                                                </td>
                                            </tr><!-- end ngRepeat: applicatorNumber in applicatorNumbers --><tr ng-repeat="applicatorNumber in applicatorNumbers" class="ng-scope">
                                                <td>
                                                    <input class="form-control width-35 ng-pristine ng-valid" type="text" id="ScAppX02" ng-model="appX[applicatorNumber-1]" readonly="">&nbsp;×&nbsp;
                                                    <input class="form-control width-35 ng-pristine ng-valid" type="text" id="ScappY2" ng-model="appY[applicatorNumber-1]" readonly="">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="1" id="elecOutputFacDmax02" ng-model="xioEleSsd.Dmax[electronNumber-1]" ng-change="setEffectiveSDD(electronNumber-1,'null');" ng-blur="checkDmaxRange(electronNumber-1,applicatorNumber-1)" onblur="keepDecimal(this.id, 1);">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="2" id="XioSsd102" ng-model="xioEle[electronNumber-1][applicatorNumber-1].Ssd1I" ng-change="setEffectiveSDD(electronNumber-1,applicatorNumber-1);" ng-blur="checkRange('XioSsd1'+(electronNumber-1)+(applicatorNumber-1),0.001,15.000,'numeric')" onblur="keepDecimal(this.id, 3);">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="3" id="XioSsd202" ng-model="xioEle[electronNumber-1][applicatorNumber-1].Ssd2I" ng-change="setEffectiveSDD(electronNumber-1,applicatorNumber-1);" ng-blur="checkRange('XioSsd2'+(electronNumber-1)+(applicatorNumber-1),0.001,15.000,'numeric')" onblur="keepDecimal(this.id, 3);">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="4" id="XioSsd302" ng-readonly="xioDisCol.col3" ng-model="xioEle[electronNumber-1][applicatorNumber-1].Ssd3I" ng-change="setEffectiveSDD(electronNumber-1,applicatorNumber-1);" ng-blur="checkRange('XioSsd3'+(electronNumber-1)+(applicatorNumber-1),0.001,15.000,'numeric')" onblur="keepDecimal(this.id, 3);">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="5" id="XioSsd402" ng-readonly="xioDisCol.col4" ng-model="xioEle[electronNumber-1][applicatorNumber-1].Ssd4I" ng-change="setEffectiveSDD(electronNumber-1,applicatorNumber-1);" ng-blur="checkRange('XioSsd4'+(electronNumber-1)+(applicatorNumber-1),0.001,15.000,'numeric')" onblur="keepDecimal(this.id, 3);">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="6" id="XioSsd502" ng-readonly="xioDisCol.col5" ng-model="xioEle[electronNumber-1][applicatorNumber-1].Ssd5I" ng-change="setEffectiveSDD(electronNumber-1,applicatorNumber-1);" ng-blur="checkRange('XioSsd5'+(electronNumber-1)+(applicatorNumber-1),0.001,15.000,'numeric')" onblur="keepDecimal(this.id, 3);">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" id="xioEleEsd02" ng-model="xioEle[electronNumber-1][applicatorNumber-1].Esd" readonly="">
                                                </td>
                                            </tr><!-- end ngRepeat: applicatorNumber in applicatorNumbers --><tr ng-repeat="applicatorNumber in applicatorNumbers" class="ng-scope">
                                                <td>
                                                    <input class="form-control width-35 ng-pristine ng-valid" type="text" id="ScAppX03" ng-model="appX[applicatorNumber-1]" readonly="">&nbsp;×&nbsp;
                                                    <input class="form-control width-35 ng-pristine ng-valid" type="text" id="ScappY3" ng-model="appY[applicatorNumber-1]" readonly="">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="1" id="elecOutputFacDmax03" ng-model="xioEleSsd.Dmax[electronNumber-1]" ng-change="setEffectiveSDD(electronNumber-1,'null');" ng-blur="checkDmaxRange(electronNumber-1,applicatorNumber-1)" onblur="keepDecimal(this.id, 1);">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="2" id="XioSsd103" ng-model="xioEle[electronNumber-1][applicatorNumber-1].Ssd1I" ng-change="setEffectiveSDD(electronNumber-1,applicatorNumber-1);" ng-blur="checkRange('XioSsd1'+(electronNumber-1)+(applicatorNumber-1),0.001,15.000,'numeric')" onblur="keepDecimal(this.id, 3);">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="3" id="XioSsd203" ng-model="xioEle[electronNumber-1][applicatorNumber-1].Ssd2I" ng-change="setEffectiveSDD(electronNumber-1,applicatorNumber-1);" ng-blur="checkRange('XioSsd2'+(electronNumber-1)+(applicatorNumber-1),0.001,15.000,'numeric')" onblur="keepDecimal(this.id, 3);">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="4" id="XioSsd303" ng-readonly="xioDisCol.col3" ng-model="xioEle[electronNumber-1][applicatorNumber-1].Ssd3I" ng-change="setEffectiveSDD(electronNumber-1,applicatorNumber-1);" ng-blur="checkRange('XioSsd3'+(electronNumber-1)+(applicatorNumber-1),0.001,15.000,'numeric')" onblur="keepDecimal(this.id, 3);">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="5" id="XioSsd403" ng-readonly="xioDisCol.col4" ng-model="xioEle[electronNumber-1][applicatorNumber-1].Ssd4I" ng-change="setEffectiveSDD(electronNumber-1,applicatorNumber-1);" ng-blur="checkRange('XioSsd4'+(electronNumber-1)+(applicatorNumber-1),0.001,15.000,'numeric')" onblur="keepDecimal(this.id, 3);">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="6" id="XioSsd503" ng-readonly="xioDisCol.col5" ng-model="xioEle[electronNumber-1][applicatorNumber-1].Ssd5I" ng-change="setEffectiveSDD(electronNumber-1,applicatorNumber-1);" ng-blur="checkRange('XioSsd5'+(electronNumber-1)+(applicatorNumber-1),0.001,15.000,'numeric')" onblur="keepDecimal(this.id, 3);">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" id="xioEleEsd03" ng-model="xioEle[electronNumber-1][applicatorNumber-1].Esd" readonly="">
                                                </td>
                                            </tr><!-- end ngRepeat: applicatorNumber in applicatorNumbers -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div><!-- end ngRepeat: electronNumber in electronNumbers --><div class="divStyle[$index] ng-scope" ng-repeat="electronNumber in electronNumbers" id="tableeloutput1">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                        <span class="label label-info">Note !</span>&nbsp;
                                        <span class="font1">Please activate/disable the corresponding columns according to how many SSD you need
                                            to input</span>
                                        <table class="table table-bordered widget-box" id="tablexeof">
                                            <thead>
                                            <tr>
                                                <th rowspan="3">Nominal Applicator Size (width × length) (cm)</th>
                                                <th rowspan="3" class="width-12">Dmax (cm)</th>
                                                <th colspan="5">Relative Output Factors (cGy/MU)</th>
                                                <th rowspan="3" class="width-12">Effective SSD (cm)
                                                    <a class="tooltip-demo" data-toggle="tooltip" data-placement="top" title="Method described according to Khan, Physics of Radiation Therapy, 2nd ed., P. 373.">
                                                        <i class="icon-exclamation-sign"></i>
                                                    </a>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>#1&nbsp;</th>
                                                <th>#2&nbsp;</th>
                                                <th>#3&nbsp;
                                                    <button class="btn btn-xs btn-info" ng-show="!xioDisCol.col3" ng-click="disXioEleCol('col3',electronNumber-1,'Ssd3')">Disable</button>
                                                    <button class="btn btn-xs btn-info ng-hide" ng-show="xioDisCol.col3" ng-click="disXioEleCol('col3',electronNumber-1,'Ssd3')">Activate</button>
                                                </th>
                                                <th>#4&nbsp;
                                                    <button class="btn btn-xs btn-info" ng-show="!xioDisCol.col4" ng-click="disXioEleCol('col4',electronNumber-1,'Ssd4')">Disable</button>
                                                    <button class="btn btn-xs btn-info ng-hide" ng-show="xioDisCol.col4" ng-click="disXioEleCol('col4',electronNumber-1,'Ssd4')">Activate</button>
                                                </th>
                                                <th>#5&nbsp;
                                                    <button class="btn btn-xs btn-info" ng-show="!xioDisCol.col5" ng-click="disXioEleCol('col5',electronNumber-1,'Ssd5')">Disable</button>
                                                    <button class="btn btn-xs btn-info ng-hide" ng-show="xioDisCol.col5" ng-click="disXioEleCol('col5',electronNumber-1,'Ssd5')">Activate</button>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>SSD
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="2" id="XioSsd11" ng-model="xioEleSsd.Ssd1" ng-change="setEffectiveSDD(electronNumber-1,'null');" ng-blur="checkSsdRange(electronNumber-1,'Ssd1');" onblur="keepDecimal(this.id, 1);"> cm
                                                </th>
                                                <th>SSD
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="3" id="XioSsd21" ng-model="xioEleSsd.Ssd2" ng-change="setEffectiveSDD(electronNumber-1,'null');" ng-blur="checkSsdRange(electronNumber-1,'Ssd2');" onblur="keepDecimal(this.id, 1);"> cm
                                                </th>
                                                <th>SSD
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="4" id="XioSsd31" ng-model="xioEleSsd.Ssd3" ng-readonly="xioDisCol.col3" ng-change="setEffectiveSDD(electronNumber-1,'null');" ng-blur="checkSsdRange(electronNumber-1,'Ssd3');" onblur="keepDecimal(this.id, 1);"> cm
                                                </th>
                                                <th>SSD
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="5" id="XioSsd41" ng-model="xioEleSsd.Ssd4" ng-readonly="xioDisCol.col4" ng-change="setEffectiveSDD(electronNumber-1,'null');" ng-blur="checkSsdRange(electronNumber-1,'Ssd4');" onblur="keepDecimal(this.id, 1);"> cm
                                                </th>
                                                <th>SSD
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="6" id="XioSsd51" ng-model="xioEleSsd.Ssd5" ng-readonly="xioDisCol.col5" ng-change="setEffectiveSDD(electronNumber-1,'null');" ng-blur="checkSsdRange(electronNumber-1,'Ssd5');" onblur="keepDecimal(this.id, 1);"> cm
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <!-- ngRepeat: applicatorNumber in applicatorNumbers --><tr ng-repeat="applicatorNumber in applicatorNumbers" class="ng-scope">
                                                <td>
                                                    <input class="form-control width-35 ng-pristine ng-valid" type="text" id="ScAppX10" ng-model="appX[applicatorNumber-1]" readonly="">&nbsp;×&nbsp;
                                                    <input class="form-control width-35 ng-pristine ng-valid" type="text" id="ScappY0" ng-model="appY[applicatorNumber-1]" readonly="">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="1" id="elecOutputFacDmax10" ng-model="xioEleSsd.Dmax[electronNumber-1]" ng-change="setEffectiveSDD(electronNumber-1,'null');" ng-blur="checkDmaxRange(electronNumber-1,applicatorNumber-1)" onblur="keepDecimal(this.id, 1);">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="2" id="XioSsd110" ng-model="xioEle[electronNumber-1][applicatorNumber-1].Ssd1I" ng-change="setEffectiveSDD(electronNumber-1,applicatorNumber-1);" ng-blur="checkRange('XioSsd1'+(electronNumber-1)+(applicatorNumber-1),0.001,15.000,'numeric')" onblur="keepDecimal(this.id, 3);">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="3" id="XioSsd210" ng-model="xioEle[electronNumber-1][applicatorNumber-1].Ssd2I" ng-change="setEffectiveSDD(electronNumber-1,applicatorNumber-1);" ng-blur="checkRange('XioSsd2'+(electronNumber-1)+(applicatorNumber-1),0.001,15.000,'numeric')" onblur="keepDecimal(this.id, 3);">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="4" id="XioSsd310" ng-readonly="xioDisCol.col3" ng-model="xioEle[electronNumber-1][applicatorNumber-1].Ssd3I" ng-change="setEffectiveSDD(electronNumber-1,applicatorNumber-1);" ng-blur="checkRange('XioSsd3'+(electronNumber-1)+(applicatorNumber-1),0.001,15.000,'numeric')" onblur="keepDecimal(this.id, 3);">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="5" id="XioSsd410" ng-readonly="xioDisCol.col4" ng-model="xioEle[electronNumber-1][applicatorNumber-1].Ssd4I" ng-change="setEffectiveSDD(electronNumber-1,applicatorNumber-1);" ng-blur="checkRange('XioSsd4'+(electronNumber-1)+(applicatorNumber-1),0.001,15.000,'numeric')" onblur="keepDecimal(this.id, 3);">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="6" id="XioSsd510" ng-readonly="xioDisCol.col5" ng-model="xioEle[electronNumber-1][applicatorNumber-1].Ssd5I" ng-change="setEffectiveSDD(electronNumber-1,applicatorNumber-1);" ng-blur="checkRange('XioSsd5'+(electronNumber-1)+(applicatorNumber-1),0.001,15.000,'numeric')" onblur="keepDecimal(this.id, 3);">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" id="xioEleEsd10" ng-model="xioEle[electronNumber-1][applicatorNumber-1].Esd" readonly="">
                                                </td>
                                            </tr><!-- end ngRepeat: applicatorNumber in applicatorNumbers --><tr ng-repeat="applicatorNumber in applicatorNumbers" class="ng-scope">
                                                <td>
                                                    <input class="form-control width-35 ng-pristine ng-valid" type="text" id="ScAppX11" ng-model="appX[applicatorNumber-1]" readonly="">&nbsp;×&nbsp;
                                                    <input class="form-control width-35 ng-pristine ng-valid" type="text" id="ScappY1" ng-model="appY[applicatorNumber-1]" readonly="">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="1" id="elecOutputFacDmax11" ng-model="xioEleSsd.Dmax[electronNumber-1]" ng-change="setEffectiveSDD(electronNumber-1,'null');" ng-blur="checkDmaxRange(electronNumber-1,applicatorNumber-1)" onblur="keepDecimal(this.id, 1);">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="2" id="XioSsd111" ng-model="xioEle[electronNumber-1][applicatorNumber-1].Ssd1I" ng-change="setEffectiveSDD(electronNumber-1,applicatorNumber-1);" ng-blur="checkRange('XioSsd1'+(electronNumber-1)+(applicatorNumber-1),0.001,15.000,'numeric')" onblur="keepDecimal(this.id, 3);">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="3" id="XioSsd211" ng-model="xioEle[electronNumber-1][applicatorNumber-1].Ssd2I" ng-change="setEffectiveSDD(electronNumber-1,applicatorNumber-1);" ng-blur="checkRange('XioSsd2'+(electronNumber-1)+(applicatorNumber-1),0.001,15.000,'numeric')" onblur="keepDecimal(this.id, 3);">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="4" id="XioSsd311" ng-readonly="xioDisCol.col3" ng-model="xioEle[electronNumber-1][applicatorNumber-1].Ssd3I" ng-change="setEffectiveSDD(electronNumber-1,applicatorNumber-1);" ng-blur="checkRange('XioSsd3'+(electronNumber-1)+(applicatorNumber-1),0.001,15.000,'numeric')" onblur="keepDecimal(this.id, 3);">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="5" id="XioSsd411" ng-readonly="xioDisCol.col4" ng-model="xioEle[electronNumber-1][applicatorNumber-1].Ssd4I" ng-change="setEffectiveSDD(electronNumber-1,applicatorNumber-1);" ng-blur="checkRange('XioSsd4'+(electronNumber-1)+(applicatorNumber-1),0.001,15.000,'numeric')" onblur="keepDecimal(this.id, 3);">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="6" id="XioSsd511" ng-readonly="xioDisCol.col5" ng-model="xioEle[electronNumber-1][applicatorNumber-1].Ssd5I" ng-change="setEffectiveSDD(electronNumber-1,applicatorNumber-1);" ng-blur="checkRange('XioSsd5'+(electronNumber-1)+(applicatorNumber-1),0.001,15.000,'numeric')" onblur="keepDecimal(this.id, 3);">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" id="xioEleEsd11" ng-model="xioEle[electronNumber-1][applicatorNumber-1].Esd" readonly="">
                                                </td>
                                            </tr><!-- end ngRepeat: applicatorNumber in applicatorNumbers --><tr ng-repeat="applicatorNumber in applicatorNumbers" class="ng-scope">
                                                <td>
                                                    <input class="form-control width-35 ng-pristine ng-valid" type="text" id="ScAppX12" ng-model="appX[applicatorNumber-1]" readonly="">&nbsp;×&nbsp;
                                                    <input class="form-control width-35 ng-pristine ng-valid" type="text" id="ScappY2" ng-model="appY[applicatorNumber-1]" readonly="">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="1" id="elecOutputFacDmax12" ng-model="xioEleSsd.Dmax[electronNumber-1]" ng-change="setEffectiveSDD(electronNumber-1,'null');" ng-blur="checkDmaxRange(electronNumber-1,applicatorNumber-1)" onblur="keepDecimal(this.id, 1);">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="2" id="XioSsd112" ng-model="xioEle[electronNumber-1][applicatorNumber-1].Ssd1I" ng-change="setEffectiveSDD(electronNumber-1,applicatorNumber-1);" ng-blur="checkRange('XioSsd1'+(electronNumber-1)+(applicatorNumber-1),0.001,15.000,'numeric')" onblur="keepDecimal(this.id, 3);">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="3" id="XioSsd212" ng-model="xioEle[electronNumber-1][applicatorNumber-1].Ssd2I" ng-change="setEffectiveSDD(electronNumber-1,applicatorNumber-1);" ng-blur="checkRange('XioSsd2'+(electronNumber-1)+(applicatorNumber-1),0.001,15.000,'numeric')" onblur="keepDecimal(this.id, 3);">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="4" id="XioSsd312" ng-readonly="xioDisCol.col3" ng-model="xioEle[electronNumber-1][applicatorNumber-1].Ssd3I" ng-change="setEffectiveSDD(electronNumber-1,applicatorNumber-1);" ng-blur="checkRange('XioSsd3'+(electronNumber-1)+(applicatorNumber-1),0.001,15.000,'numeric')" onblur="keepDecimal(this.id, 3);">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="5" id="XioSsd412" ng-readonly="xioDisCol.col4" ng-model="xioEle[electronNumber-1][applicatorNumber-1].Ssd4I" ng-change="setEffectiveSDD(electronNumber-1,applicatorNumber-1);" ng-blur="checkRange('XioSsd4'+(electronNumber-1)+(applicatorNumber-1),0.001,15.000,'numeric')" onblur="keepDecimal(this.id, 3);">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="6" id="XioSsd512" ng-readonly="xioDisCol.col5" ng-model="xioEle[electronNumber-1][applicatorNumber-1].Ssd5I" ng-change="setEffectiveSDD(electronNumber-1,applicatorNumber-1);" ng-blur="checkRange('XioSsd5'+(electronNumber-1)+(applicatorNumber-1),0.001,15.000,'numeric')" onblur="keepDecimal(this.id, 3);">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" id="xioEleEsd12" ng-model="xioEle[electronNumber-1][applicatorNumber-1].Esd" readonly="">
                                                </td>
                                            </tr><!-- end ngRepeat: applicatorNumber in applicatorNumbers --><tr ng-repeat="applicatorNumber in applicatorNumbers" class="ng-scope">
                                                <td>
                                                    <input class="form-control width-35 ng-pristine ng-valid" type="text" id="ScAppX13" ng-model="appX[applicatorNumber-1]" readonly="">&nbsp;×&nbsp;
                                                    <input class="form-control width-35 ng-pristine ng-valid" type="text" id="ScappY3" ng-model="appY[applicatorNumber-1]" readonly="">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="1" id="elecOutputFacDmax13" ng-model="xioEleSsd.Dmax[electronNumber-1]" ng-change="setEffectiveSDD(electronNumber-1,'null');" ng-blur="checkDmaxRange(electronNumber-1,applicatorNumber-1)" onblur="keepDecimal(this.id, 1);">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="2" id="XioSsd113" ng-model="xioEle[electronNumber-1][applicatorNumber-1].Ssd1I" ng-change="setEffectiveSDD(electronNumber-1,applicatorNumber-1);" ng-blur="checkRange('XioSsd1'+(electronNumber-1)+(applicatorNumber-1),0.001,15.000,'numeric')" onblur="keepDecimal(this.id, 3);">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="3" id="XioSsd213" ng-model="xioEle[electronNumber-1][applicatorNumber-1].Ssd2I" ng-change="setEffectiveSDD(electronNumber-1,applicatorNumber-1);" ng-blur="checkRange('XioSsd2'+(electronNumber-1)+(applicatorNumber-1),0.001,15.000,'numeric')" onblur="keepDecimal(this.id, 3);">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="4" id="XioSsd313" ng-readonly="xioDisCol.col3" ng-model="xioEle[electronNumber-1][applicatorNumber-1].Ssd3I" ng-change="setEffectiveSDD(electronNumber-1,applicatorNumber-1);" ng-blur="checkRange('XioSsd3'+(electronNumber-1)+(applicatorNumber-1),0.001,15.000,'numeric')" onblur="keepDecimal(this.id, 3);">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="5" id="XioSsd413" ng-readonly="xioDisCol.col4" ng-model="xioEle[electronNumber-1][applicatorNumber-1].Ssd4I" ng-change="setEffectiveSDD(electronNumber-1,applicatorNumber-1);" ng-blur="checkRange('XioSsd4'+(electronNumber-1)+(applicatorNumber-1),0.001,15.000,'numeric')" onblur="keepDecimal(this.id, 3);">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="6" id="XioSsd513" ng-readonly="xioDisCol.col5" ng-model="xioEle[electronNumber-1][applicatorNumber-1].Ssd5I" ng-change="setEffectiveSDD(electronNumber-1,applicatorNumber-1);" ng-blur="checkRange('XioSsd5'+(electronNumber-1)+(applicatorNumber-1),0.001,15.000,'numeric')" onblur="keepDecimal(this.id, 3);">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" id="xioEleEsd13" ng-model="xioEle[electronNumber-1][applicatorNumber-1].Esd" readonly="">
                                                </td>
                                            </tr><!-- end ngRepeat: applicatorNumber in applicatorNumbers -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div><!-- end ngRepeat: electronNumber in electronNumbers --><div class="divStyle[$index] ng-scope" ng-repeat="electronNumber in electronNumbers" id="tableeloutput2">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                        <span class="label label-info">Note !</span>&nbsp;
                                        <span class="font1">Please activate/disable the corresponding columns according to how many SSD you need
                                            to input</span>
                                        <table class="table table-bordered widget-box" id="tablexeof">
                                            <thead>
                                            <tr>
                                                <th rowspan="3">Nominal Applicator Size (width × length) (cm)</th>
                                                <th rowspan="3" class="width-12">Dmax (cm)</th>
                                                <th colspan="5">Relative Output Factors (cGy/MU)</th>
                                                <th rowspan="3" class="width-12">Effective SSD (cm)
                                                    <a class="tooltip-demo" data-toggle="tooltip" data-placement="top" title="Method described according to Khan, Physics of Radiation Therapy, 2nd ed., P. 373.">
                                                        <i class="icon-exclamation-sign"></i>
                                                    </a>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>#1&nbsp;</th>
                                                <th>#2&nbsp;</th>
                                                <th>#3&nbsp;
                                                    <button class="btn btn-xs btn-info" ng-show="!xioDisCol.col3" ng-click="disXioEleCol('col3',electronNumber-1,'Ssd3')">Disable</button>
                                                    <button class="btn btn-xs btn-info ng-hide" ng-show="xioDisCol.col3" ng-click="disXioEleCol('col3',electronNumber-1,'Ssd3')">Activate</button>
                                                </th>
                                                <th>#4&nbsp;
                                                    <button class="btn btn-xs btn-info" ng-show="!xioDisCol.col4" ng-click="disXioEleCol('col4',electronNumber-1,'Ssd4')">Disable</button>
                                                    <button class="btn btn-xs btn-info ng-hide" ng-show="xioDisCol.col4" ng-click="disXioEleCol('col4',electronNumber-1,'Ssd4')">Activate</button>
                                                </th>
                                                <th>#5&nbsp;
                                                    <button class="btn btn-xs btn-info" ng-show="!xioDisCol.col5" ng-click="disXioEleCol('col5',electronNumber-1,'Ssd5')">Disable</button>
                                                    <button class="btn btn-xs btn-info ng-hide" ng-show="xioDisCol.col5" ng-click="disXioEleCol('col5',electronNumber-1,'Ssd5')">Activate</button>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>SSD
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="2" id="XioSsd12" ng-model="xioEleSsd.Ssd1" ng-change="setEffectiveSDD(electronNumber-1,'null');" ng-blur="checkSsdRange(electronNumber-1,'Ssd1');" onblur="keepDecimal(this.id, 1);"> cm
                                                </th>
                                                <th>SSD
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="3" id="XioSsd22" ng-model="xioEleSsd.Ssd2" ng-change="setEffectiveSDD(electronNumber-1,'null');" ng-blur="checkSsdRange(electronNumber-1,'Ssd2');" onblur="keepDecimal(this.id, 1);"> cm
                                                </th>
                                                <th>SSD
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="4" id="XioSsd32" ng-model="xioEleSsd.Ssd3" ng-readonly="xioDisCol.col3" ng-change="setEffectiveSDD(electronNumber-1,'null');" ng-blur="checkSsdRange(electronNumber-1,'Ssd3');" onblur="keepDecimal(this.id, 1);"> cm
                                                </th>
                                                <th>SSD
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="5" id="XioSsd42" ng-model="xioEleSsd.Ssd4" ng-readonly="xioDisCol.col4" ng-change="setEffectiveSDD(electronNumber-1,'null');" ng-blur="checkSsdRange(electronNumber-1,'Ssd4');" onblur="keepDecimal(this.id, 1);"> cm
                                                </th>
                                                <th>SSD
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="6" id="XioSsd52" ng-model="xioEleSsd.Ssd5" ng-readonly="xioDisCol.col5" ng-change="setEffectiveSDD(electronNumber-1,'null');" ng-blur="checkSsdRange(electronNumber-1,'Ssd5');" onblur="keepDecimal(this.id, 1);"> cm
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <!-- ngRepeat: applicatorNumber in applicatorNumbers --><tr ng-repeat="applicatorNumber in applicatorNumbers" class="ng-scope">
                                                <td>
                                                    <input class="form-control width-35 ng-pristine ng-valid" type="text" id="ScAppX20" ng-model="appX[applicatorNumber-1]" readonly="">&nbsp;×&nbsp;
                                                    <input class="form-control width-35 ng-pristine ng-valid" type="text" id="ScappY0" ng-model="appY[applicatorNumber-1]" readonly="">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="1" id="elecOutputFacDmax20" ng-model="xioEleSsd.Dmax[electronNumber-1]" ng-change="setEffectiveSDD(electronNumber-1,'null');" ng-blur="checkDmaxRange(electronNumber-1,applicatorNumber-1)" onblur="keepDecimal(this.id, 1);">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="2" id="XioSsd120" ng-model="xioEle[electronNumber-1][applicatorNumber-1].Ssd1I" ng-change="setEffectiveSDD(electronNumber-1,applicatorNumber-1);" ng-blur="checkRange('XioSsd1'+(electronNumber-1)+(applicatorNumber-1),0.001,15.000,'numeric')" onblur="keepDecimal(this.id, 3);">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="3" id="XioSsd220" ng-model="xioEle[electronNumber-1][applicatorNumber-1].Ssd2I" ng-change="setEffectiveSDD(electronNumber-1,applicatorNumber-1);" ng-blur="checkRange('XioSsd2'+(electronNumber-1)+(applicatorNumber-1),0.001,15.000,'numeric')" onblur="keepDecimal(this.id, 3);">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="4" id="XioSsd320" ng-readonly="xioDisCol.col3" ng-model="xioEle[electronNumber-1][applicatorNumber-1].Ssd3I" ng-change="setEffectiveSDD(electronNumber-1,applicatorNumber-1);" ng-blur="checkRange('XioSsd3'+(electronNumber-1)+(applicatorNumber-1),0.001,15.000,'numeric')" onblur="keepDecimal(this.id, 3);">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="5" id="XioSsd420" ng-readonly="xioDisCol.col4" ng-model="xioEle[electronNumber-1][applicatorNumber-1].Ssd4I" ng-change="setEffectiveSDD(electronNumber-1,applicatorNumber-1);" ng-blur="checkRange('XioSsd4'+(electronNumber-1)+(applicatorNumber-1),0.001,15.000,'numeric')" onblur="keepDecimal(this.id, 3);">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="6" id="XioSsd520" ng-readonly="xioDisCol.col5" ng-model="xioEle[electronNumber-1][applicatorNumber-1].Ssd5I" ng-change="setEffectiveSDD(electronNumber-1,applicatorNumber-1);" ng-blur="checkRange('XioSsd5'+(electronNumber-1)+(applicatorNumber-1),0.001,15.000,'numeric')" onblur="keepDecimal(this.id, 3);">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" id="xioEleEsd20" ng-model="xioEle[electronNumber-1][applicatorNumber-1].Esd" readonly="">
                                                </td>
                                            </tr><!-- end ngRepeat: applicatorNumber in applicatorNumbers --><tr ng-repeat="applicatorNumber in applicatorNumbers" class="ng-scope">
                                                <td>
                                                    <input class="form-control width-35 ng-pristine ng-valid" type="text" id="ScAppX21" ng-model="appX[applicatorNumber-1]" readonly="">&nbsp;×&nbsp;
                                                    <input class="form-control width-35 ng-pristine ng-valid" type="text" id="ScappY1" ng-model="appY[applicatorNumber-1]" readonly="">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="1" id="elecOutputFacDmax21" ng-model="xioEleSsd.Dmax[electronNumber-1]" ng-change="setEffectiveSDD(electronNumber-1,'null');" ng-blur="checkDmaxRange(electronNumber-1,applicatorNumber-1)" onblur="keepDecimal(this.id, 1);">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="2" id="XioSsd121" ng-model="xioEle[electronNumber-1][applicatorNumber-1].Ssd1I" ng-change="setEffectiveSDD(electronNumber-1,applicatorNumber-1);" ng-blur="checkRange('XioSsd1'+(electronNumber-1)+(applicatorNumber-1),0.001,15.000,'numeric')" onblur="keepDecimal(this.id, 3);">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="3" id="XioSsd221" ng-model="xioEle[electronNumber-1][applicatorNumber-1].Ssd2I" ng-change="setEffectiveSDD(electronNumber-1,applicatorNumber-1);" ng-blur="checkRange('XioSsd2'+(electronNumber-1)+(applicatorNumber-1),0.001,15.000,'numeric')" onblur="keepDecimal(this.id, 3);">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="4" id="XioSsd321" ng-readonly="xioDisCol.col3" ng-model="xioEle[electronNumber-1][applicatorNumber-1].Ssd3I" ng-change="setEffectiveSDD(electronNumber-1,applicatorNumber-1);" ng-blur="checkRange('XioSsd3'+(electronNumber-1)+(applicatorNumber-1),0.001,15.000,'numeric')" onblur="keepDecimal(this.id, 3);">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="5" id="XioSsd421" ng-readonly="xioDisCol.col4" ng-model="xioEle[electronNumber-1][applicatorNumber-1].Ssd4I" ng-change="setEffectiveSDD(electronNumber-1,applicatorNumber-1);" ng-blur="checkRange('XioSsd4'+(electronNumber-1)+(applicatorNumber-1),0.001,15.000,'numeric')" onblur="keepDecimal(this.id, 3);">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="6" id="XioSsd521" ng-readonly="xioDisCol.col5" ng-model="xioEle[electronNumber-1][applicatorNumber-1].Ssd5I" ng-change="setEffectiveSDD(electronNumber-1,applicatorNumber-1);" ng-blur="checkRange('XioSsd5'+(electronNumber-1)+(applicatorNumber-1),0.001,15.000,'numeric')" onblur="keepDecimal(this.id, 3);">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" id="xioEleEsd21" ng-model="xioEle[electronNumber-1][applicatorNumber-1].Esd" readonly="">
                                                </td>
                                            </tr><!-- end ngRepeat: applicatorNumber in applicatorNumbers --><tr ng-repeat="applicatorNumber in applicatorNumbers" class="ng-scope">
                                                <td>
                                                    <input class="form-control width-35 ng-pristine ng-valid" type="text" id="ScAppX22" ng-model="appX[applicatorNumber-1]" readonly="">&nbsp;×&nbsp;
                                                    <input class="form-control width-35 ng-pristine ng-valid" type="text" id="ScappY2" ng-model="appY[applicatorNumber-1]" readonly="">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="1" id="elecOutputFacDmax22" ng-model="xioEleSsd.Dmax[electronNumber-1]" ng-change="setEffectiveSDD(electronNumber-1,'null');" ng-blur="checkDmaxRange(electronNumber-1,applicatorNumber-1)" onblur="keepDecimal(this.id, 1);">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="2" id="XioSsd122" ng-model="xioEle[electronNumber-1][applicatorNumber-1].Ssd1I" ng-change="setEffectiveSDD(electronNumber-1,applicatorNumber-1);" ng-blur="checkRange('XioSsd1'+(electronNumber-1)+(applicatorNumber-1),0.001,15.000,'numeric')" onblur="keepDecimal(this.id, 3);">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="3" id="XioSsd222" ng-model="xioEle[electronNumber-1][applicatorNumber-1].Ssd2I" ng-change="setEffectiveSDD(electronNumber-1,applicatorNumber-1);" ng-blur="checkRange('XioSsd2'+(electronNumber-1)+(applicatorNumber-1),0.001,15.000,'numeric')" onblur="keepDecimal(this.id, 3);">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="4" id="XioSsd322" ng-readonly="xioDisCol.col3" ng-model="xioEle[electronNumber-1][applicatorNumber-1].Ssd3I" ng-change="setEffectiveSDD(electronNumber-1,applicatorNumber-1);" ng-blur="checkRange('XioSsd3'+(electronNumber-1)+(applicatorNumber-1),0.001,15.000,'numeric')" onblur="keepDecimal(this.id, 3);">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="5" id="XioSsd422" ng-readonly="xioDisCol.col4" ng-model="xioEle[electronNumber-1][applicatorNumber-1].Ssd4I" ng-change="setEffectiveSDD(electronNumber-1,applicatorNumber-1);" ng-blur="checkRange('XioSsd4'+(electronNumber-1)+(applicatorNumber-1),0.001,15.000,'numeric')" onblur="keepDecimal(this.id, 3);">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="6" id="XioSsd522" ng-readonly="xioDisCol.col5" ng-model="xioEle[electronNumber-1][applicatorNumber-1].Ssd5I" ng-change="setEffectiveSDD(electronNumber-1,applicatorNumber-1);" ng-blur="checkRange('XioSsd5'+(electronNumber-1)+(applicatorNumber-1),0.001,15.000,'numeric')" onblur="keepDecimal(this.id, 3);">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" id="xioEleEsd22" ng-model="xioEle[electronNumber-1][applicatorNumber-1].Esd" readonly="">
                                                </td>
                                            </tr><!-- end ngRepeat: applicatorNumber in applicatorNumbers --><tr ng-repeat="applicatorNumber in applicatorNumbers" class="ng-scope">
                                                <td>
                                                    <input class="form-control width-35 ng-pristine ng-valid" type="text" id="ScAppX23" ng-model="appX[applicatorNumber-1]" readonly="">&nbsp;×&nbsp;
                                                    <input class="form-control width-35 ng-pristine ng-valid" type="text" id="ScappY3" ng-model="appY[applicatorNumber-1]" readonly="">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="1" id="elecOutputFacDmax23" ng-model="xioEleSsd.Dmax[electronNumber-1]" ng-change="setEffectiveSDD(electronNumber-1,'null');" ng-blur="checkDmaxRange(electronNumber-1,applicatorNumber-1)" onblur="keepDecimal(this.id, 1);">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="2" id="XioSsd123" ng-model="xioEle[electronNumber-1][applicatorNumber-1].Ssd1I" ng-change="setEffectiveSDD(electronNumber-1,applicatorNumber-1);" ng-blur="checkRange('XioSsd1'+(electronNumber-1)+(applicatorNumber-1),0.001,15.000,'numeric')" onblur="keepDecimal(this.id, 3);">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="3" id="XioSsd223" ng-model="xioEle[electronNumber-1][applicatorNumber-1].Ssd2I" ng-change="setEffectiveSDD(electronNumber-1,applicatorNumber-1);" ng-blur="checkRange('XioSsd2'+(electronNumber-1)+(applicatorNumber-1),0.001,15.000,'numeric')" onblur="keepDecimal(this.id, 3);">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="4" id="XioSsd323" ng-readonly="xioDisCol.col3" ng-model="xioEle[electronNumber-1][applicatorNumber-1].Ssd3I" ng-change="setEffectiveSDD(electronNumber-1,applicatorNumber-1);" ng-blur="checkRange('XioSsd3'+(electronNumber-1)+(applicatorNumber-1),0.001,15.000,'numeric')" onblur="keepDecimal(this.id, 3);">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="5" id="XioSsd423" ng-readonly="xioDisCol.col4" ng-model="xioEle[electronNumber-1][applicatorNumber-1].Ssd4I" ng-change="setEffectiveSDD(electronNumber-1,applicatorNumber-1);" ng-blur="checkRange('XioSsd4'+(electronNumber-1)+(applicatorNumber-1),0.001,15.000,'numeric')" onblur="keepDecimal(this.id, 3);">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" tabindex="6" id="XioSsd523" ng-readonly="xioDisCol.col5" ng-model="xioEle[electronNumber-1][applicatorNumber-1].Ssd5I" ng-change="setEffectiveSDD(electronNumber-1,applicatorNumber-1);" ng-blur="checkRange('XioSsd5'+(electronNumber-1)+(applicatorNumber-1),0.001,15.000,'numeric')" onblur="keepDecimal(this.id, 3);">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control ng-pristine ng-valid" id="xioEleEsd23" ng-model="xioEle[electronNumber-1][applicatorNumber-1].Esd" readonly="">
                                                </td>
                                            </tr><!-- end ngRepeat: applicatorNumber in applicatorNumbers -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div><!-- end ngRepeat: electronNumber in electronNumbers -->
                        </div>
                    </div>
                </div>
            </section>

            <!-- Scanning data================================================== -->
            <section id="scanning" ng-hide="sections.sc" class="ng-hide">
                <div class="row ng-scope" ng-controller="scanningDataSelectCtrl">
                    <div class="col-md-12 padding-left-30p">
                        <div>
                            <span class="font1">Before uploading the scanning data, please click to view the </span>
                            <a class="mailAddress" style="font-weight:bold; cursor:pointer" ng-click="sectionSdSelectVM.openGuide()">
                                <u>Data Format Guide</u>
                            </a>
                        </div>

                        <div class="row top2">
                            <div class="col-md-5 top6p">
                                <span>Select one ZIP file that includes all scanning data (PDDs and Profiles)<i class="color-red">*</i></span>
                            </div>
                            <div class="col-md-7">
                                <button class="btn btn-primary btn-sm" id="btnSelectFile" onclick="document.getElementById('uploadScanningData').click(); return false; ">Select Scanning Data Zip File</button>
                                <input type="text" id="filename" class="form-control width-30 ng-pristine ng-valid" ng-model="fileName" disabled="">
                                <span id="zipFileName"></span>
                                <form id="formUpload" name="oForm" class="hidden ng-pristine ng-valid">
                                    <input type="file" name="file" id="uploadScanningData" onchange="angular.element(this).scope().sectionSdSelectVM.fileSelected(this);">
                                </form>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div id="error" class="color-red"></div>
                                <div class="padding-left-20p" id="warnning1" style="color: #43609C"></div>
                                <div class="padding-left-20p" id="warnning2" style="color: #43609C"><i>Your data format is not available for data comparison and analysis. But it does not influence you to submit the data.Currently we support data comparison for .mcc or .asc format data.</i></div>
                            </div>
                        </div>

                        <div class="row top2">
                            <div class="col-md-5 top6p">
                                <span>Select one ZIP file that includes all test beam files if needed</span>
                            </div>
                            <div class="col-md-7">
                                <button class="btn btn-primary btn-sm" style="width:183px" id="btnSelectTB" onclick="document.getElementById('uploadTestBeam').click(); return false; ">Select Test Beam Zip File</button>
                                <input type="text" id="testBeam" class="form-control width-30 ng-pristine ng-valid" ng-model="sectionSdSelectVM.testBeamName" disabled="">
                                <form id="formUploadTB" name="TBForm" class="hidden ng-pristine ng-valid">
                                    <input type="file" name="file" id="uploadTestBeam" onchange="angular.element(this).scope().sectionSdSelectVM.testBeamSelected(this);">
                                </form>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div id="error4TestBeam" class="color-red"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="scanZipTemplate" role="modal" aria-hidden="false" data-backdrop="static">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 class="modal-title">Data Format Guide</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Data comparison -->
                <div class="row" id="dataTableScan">
                    <div class="col-md-12">
                        <div class="widget-box">
                            <div class="widget-title">
                                <span class="icon">
                                    <i class="icon-align-justify"></i>
                                </span>
                                <h5>Compare your measured data with the Elekta Data Library</h5>
                            </div>
                            <!-- Data comparison content -->
                            <div>
                                <div class="ng-isolate-scope">
                                    <ul class="nav nav-tabs" ng-class="{'nav-stacked': vertical, 'nav-justified': justified}" ng-transclude="">
                                        <li ng-class="{active: active, disabled: disabled}" heading="Photon" disabled="disabled" ng-controller="photonScanningDataCtrl" active="activePhoton" data-ng-init="sectionSdVM.initialize()" class="ng-isolate-scope active">
                                            <a href="" ng-click="select()" tab-heading-transclude="" class="ng-binding">Photon</a>
                                        </li>
                                        <li ng-class="{active: active, disabled: disabled}" heading="Electron" disabled="disabled" ng-controller="electronScanningDataCtrl" active="activeElectron" class="ng-isolate-scope">
                                            <a href="" ng-click="select()" tab-heading-transclude="" class="ng-binding">Electron</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <!-- ngRepeat: tab in tabs --><div class="tab-pane ng-scope active" ng-repeat="tab in tabs" ng-class="{active: tab.active}" tab-content-transclude="tab">

                                            <div class="row margin10 ng-scope">
                                                <div class="col-md-12 margin10 font1">
                                                    Set options
                                                    <i>Current Machine ID</i>,
                                                    <i>Graph Type</i> and
                                                    <i>Normalized</i>, also check some machines from Data Library, field size and
                                                    depth, then select
                                                    <i>Compare Detail</i> or
                                                    <i>Compare Average</i> button to plot graph.
                                                </div>
                                                <div class="col-md-3 top20" style="font-size:12px;width:20%">
                                                    <div class="bot10p">
                                                        <label class="font1">Algorithm</label>
                                                        <div class="btn-group">
                                                            <label class="btn btn-sm btn-default ng-pristine ng-valid active btn-primary" ng-model="sectionSdVM.photonAlgorithm" ng-disabled="!sectionSdVM.pbMc" btn-radio="'PBMC'" ng-change="sectionSdVM.initOpenWedgeField(sectionSdVM.photonAlgorithm);sectionSdVM.setCriterionVisibility(sectionSdVM.selectedWedge)">PB MC</label>
                                                            <label class="btn btn-sm btn-default ng-pristine ng-valid" ng-model="sectionSdVM.photonAlgorithm" ng-disabled="!sectionSdVM.ccc" btn-radio="'CCC'" ng-change="sectionSdVM.initOpenWedgeField(sectionSdVM.photonAlgorithm);sectionSdVM.setCriterionVisibility(sectionSdVM.selectedWedge)">CCC</label>
                                                        </div>
                                                    </div>
                                                    <div class="bot10p">
                                                        <label class="font1">Current Machine ID</label>
                                                        <select class="form-control ng-pristine ng-valid" id="sdSlctMac" ng-change="sectionSdVM.setCriterionVisibility(sectionSdVM.selectedWedge);sectionSdVM.initOpenWedgeField(sectionSdVM.photonAlgorithm);" ng-options="machine.macId for machine in sectionSdVM.sdViewModel" ng-disabled="!sectionSdVM.isValidFile" ng-model="sectionSdVM.sdSelectedMac" disabled="disabled"><option value="?" selected="selected"></option></select>
                                                    </div>
                                                    <div class="bot10p">
                                                        <label class="font1">Open/Wedged</label>
                                                        <select class="form-control ng-pristine ng-valid" ng-options="WedgeAngle.angleText for WedgeAngle in sectionSdVM.sdSelectedMac.wedgeAngles[sectionSdVM.photonAlgorithm]" ng-model="sectionSdVM.selectedWedge"><option value="?" selected="selected"></option></select>
                                                    </div>
                                                    <div class="bot10p">
                                                        <label class="font1">Graph Type</label>
                                                        <select id="sdSlctType" class="form-control ng-pristine ng-valid" ng-change="sectionSdVM.clearStatisInfo();sectionSdVM.setCriterionVisibility(sectionSdVM.selectedWedge)" ng-options="obj.value as obj.text for obj in sectionSdVM.sdProfileType('Photon', sectionSdVM.selectedWedge.angleValue)" ng-model="sectionSdVM.selectedWedge.graphType"><option value="0" selected="selected">PDD</option><option value="1">AB Profile</option><option value="2">GT Profile</option><option value="3">Diagonal Profile</option><option value="4">Output Factor in Water</option></select>
                                                    </div>
                                                    <div class="bot10p" id="nomalized_toggle_switch">
                                                        <label class="font1">Normalized</label>
                                                        <div class="switch-small switch-primary ats-switch ng-isolate-scope" ng-click="toggle()" ng-class="{ 'disabled': disabled }" bootstrap-switch="" model="sectionSdVM.selectedWedge.normalized" ng-disabled="sectionSdVM.sdIsOP(sectionSdVM.selectedWedge.graphType)" on-label="Yes" off-label="No"><div class="switch-animate switch-on" ng-class="{'switch-off': !model, 'switch-on': model}"><span class="switch-left ng-binding ng-scope" ng-bind="onLabel">Yes</span><span class="knob ng-binding ng-scope" ng-bind="knobLabel">&nbsp;</span><span class="switch-right ng-binding ng-scope" ng-bind="offLabel">No</span></div></div>
                                                    </div>
                                                    <form id="photonCriterionForm" class="ng-pristine ng-valid">
                                                        <div class="bot10p">
                                                            <label class="font1">Pass Criterion % Diff (%)</label>
                                                            <input class="form-control ng-pristine ng-valid" type="text" name="percentDiff" ng-model="sectionSdVM.criterion.percent" ng-disabled="!sectionSdVM.displayCr || sectionSdVM.user.role === 'customer'" ng-change="sectionSdVM.updateDta(sectionSdVM.criterion.percent)" disabled="disabled">
                                                        </div>
                                                        <div class="bot10p">
                                                            <label class="font1">Pass Criterion DTA (mm)</label>
                                                            <input class="form-control width-20 ng-pristine ng-valid" type="text" name="DTAValue" ng-model="sectionSdVM.criterion.dta" ng-disabled="!sectionSdVM.displayCr || sectionSdVM.sdIsOP(sectionSdVM.selectedWedge.graphType) || sectionSdVM.user.role === 'customer'" ng-change="sectionSdVM.updatePercent(sectionSdVM.criterion.dta)" disabled="disabled">
                                                        </div>
                                                        <div class="bot10p">
                                                            <label class="font1">Lock the relationship of % Diff(%) and DTA(mm)</label>
                                                            <div class="switch-small switch-primary ats-switch ng-isolate-scope disabled" ng-click="toggle()" ng-class="{ 'disabled': disabled }" bootstrap-switch="" model="sectionSdVM.criterion.locked" ng-disabled="sectionSdVM.criterion.disableLock" on-label="Yes" off-label="No" disabled="disabled"><div class="switch-animate switch-off" ng-class="{'switch-off': !model, 'switch-on': model}"><span class="switch-left ng-binding ng-scope" ng-bind="onLabel">Yes</span><span class="knob ng-binding ng-scope" ng-bind="knobLabel">&nbsp;</span><span class="switch-right ng-binding ng-scope" ng-bind="offLabel">No</span></div></div>
                                                        </div>
                                                    </form>

                                                    <!-- Field table-->
                                                    <!-- if graph type is Output Factor -->
                                                    <!-- ngIf: sectionSdVM.sdIsOP(sectionSdVM.selectedWedge.graphType) -->
                                                    <!-- if graph type is NOT Output Factor -->
                                                    <!-- ngIf: !sectionSdVM.sdIsOP(sectionSdVM.selectedWedge.graphType) --><div class="widget-box ng-scope" ng-if="!sectionSdVM.sdIsOP(sectionSdVM.selectedWedge.graphType)">
                                                        <div class="table-head">
                                                            <table class="table table-bordered">
                                                                <thead>
                                                                <tr>
                                                                    <th style="width:23%">
                                                                        <input type="checkbox" ng-model="sectionSdVM.selectedWedge.selectAllfs" ng-change="sectionSdVM.updateChecked('fs',sectionSdVM.selectedWedge.selectAllfs,sectionSdVM.selectedWedge)" class="ng-pristine ng-valid">
                                                                    </th>
                                                                    <th style="width:42%">Field size
                                                                        <br> (cm&nbsp;×&nbsp;cm)
                                                                    </th>
                                                                    <th style="width:35%">SSD (cm)</th>
                                                                </tr>
                                                                </thead>
                                                            </table>
                                                        </div>
                                                        <div class="table-body">
                                                            <table class="table table-bordered">
                                                                <tbody>
                                                                <!-- ngRepeat: row in sectionSdVM.selectedWedge.fs -->
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div><!-- end ngIf: !sectionSdVM.sdIsOP(sectionSdVM.selectedWedge.graphType) -->

                                                    <!-- Depth table-->
                                                    <div class="widget-box">
                                                        <div class="table-head">
                                                            <table class="table table-bordered">
                                                                <thead>
                                                                <tr>
                                                                    <th style="width:40%">
                                                                        <input type="checkbox" ng-model="sectionSdVM.selectedWedge.selectAllDepth" ng-change="sectionSdVM.updateChecked('depths',sectionSdVM.selectedWedge.selectAllDepth,sectionSdVM.selectedWedge)" class="ng-pristine ng-valid">
                                                                    </th>
                                                                    <th style="width:60%">Depth (cm)</th>
                                                                </tr>
                                                                </thead>
                                                            </table>
                                                        </div>
                                                        <div class="table-body">
                                                            <table class="table table-bordered">
                                                                <tbody>
                                                                <!-- ngRepeat: depth in sectionSdVM.selectedWedge.depths -->
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Query table -->
                                                <div class="col-md-9" style="width:80%">
                                                    <div class="widget-box">
                                                        <div class="table-head">
                                                            <table class="table table-bordered">
                                                                <thead>
                                                                <tr>
                                                                    <th style="width:5%">
                                                                        <input type="checkbox" ng-model="sectionSdVM.selectedWedge.selectAllmac" ng-change="sectionSdVM.updateChecked('lib',sectionSdVM.selectedWedge.selectAllmac,sectionSdVM.selectedWedge);sectionSdVM.setCriterionVisibility(sectionSdVM.selectedWedge)" class="ng-pristine ng-valid">
                                                                    </th>
                                                                    <th style="width:26%">Machine ID
                                                                        <br>from Data Library</th>
                                                                    <th style="width:12%">Vendor</th>
                                                                    <th style="width:16%">MLC Type</th>
                                                                    <th style="width:13%">Modality</th>
                                                                    <th style="width:7%">Energy (MV)</th>
                                                                    <th style="width:7%">SSD (cm)</th>
                                                                    <th style="width:14%">Mode Type</th>
                                                                </tr>
                                                                </thead>
                                                            </table>
                                                        </div>
                                                        <div class="table-body">
                                                            <table class="table table-bordered">
                                                                <tbody>
                                                                <!-- ngRepeat: model in sectionSdVM.selectedWedge.lib -->
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>

                                                    <!--Graph-->
                                                    <div class="widget-box">
                                                        <div class="widget-content">
                                                            <!--Compare button-->
                                                            <div class="row padding-left-50p bot10p">
                                                                <div class="col-md-3">
                                                                    <button class="btn btn-block btn-primary" type="button" ng-disabled="!sectionSdVM.isDetail" ng-click="sectionSdVM.comparePhoton(sectionSdVM.selectedWedge, sectionSdVM.isRelative)" disabled="disabled">Compare Detail</button>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <button class="btn btn-block btn-primary" type="button" ng-disabled="!sectionSdVM.isAverage(sectionSdVM.selectedWedge)" ng-click="sectionSdVM.comparePhoton(sectionSdVM.selectedWedge, sectionSdVM.isRelative)" disabled="disabled">Compare Average</button>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <!-- ngIf: (sectionSdVM.isDetail || sectionSdVM.isAverage(sectionSdVM.selectedWedge)) && sectionSdVM.photonAlgorithm == 'CCC' -->
                                                                </div>
                                                                <!--<div id='loading' ng-if="sectionSdVM.isComparing || sectionSdVM.isInitialize"></div>-->
                                                            </div>
                                                            <div class="row">
                                                                <!-- ngIf: sectionSdVM.sdIsOP(sectionSdVM.selectedWedge.graphType) && sectionSdVM.isAverage(sectionSdVM.selectedWedge) -->
                                                                <!-- PDD vertical line-->
                                                                <div class="pull-left top15" ng-show="!(sectionSdVM.sdIsOP(sectionSdVM.selectedWedge.graphType) || sectionSdVM.isRelative)">
                                                                    <img type="text/javascript" src="img\Dose for 100 MU.png">
                                                                </div>

                                                                <div class="pull-left top15 ng-hide" ng-show="!sectionSdVM.sdIsOP(sectionSdVM.selectedWedge.graphType) &amp;&amp; sectionSdVM.isRelative">
                                                                    <img type="text/javascript" src="img\Relative Dose.png">
                                                                </div>


                                                                <!-- Output factor vertical line-->
                                                                <div class="pull-left top15 ng-hide" ng-show="sectionSdVM.sdIsOP(sectionSdVM.selectedWedge.graphType)">
                                                                    <img type="text/javascript" src="img\OF at Ref Depth.png">
                                                                </div>
                                                                <!-- end of op vertical line -->

                                                                <div class="bot10p col-md-10" style="padding-right: 0px">

                                                                    <!--<div class="chart-620" id="scanning_data_chart"></div>-->
                                                                    <div class="chart-620 ng-isolate-scope" id="scanning_data_chart" flot="" chart-data="sectionSdVM.comparedData.sdPlotData" chart-option="sectionSdVM.comparedData.options" on-click="sectionSdVM.iniConfidenceIntervalChart()" style="padding: 0px; position: relative;"><canvas class="flot-base" width="150" height="930" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 100px; height: 620px;"></canvas><canvas class="flot-overlay" width="150" height="930" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 100px; height: 620px;"></canvas></div>
                                                                </div>

                                                                <div class="legend" style="overflow-y: auto;overflow-x: hidden;height:600px;"></div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 padding-left-50">
                                                                    <div class="font1 ng-binding">Distance (cm)</div>
                                                                    <br>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <!-- ngIf: sectionSdVM.isAverage(sectionSdVM.selectedWedge) && sectionSdVM.sdIsOP(sectionSdVM.selectedWedge.graphType)&&sectionSdVM.displayCI -->
                                                            </div>
                                                            <div class="row">
                                                                <!-- ngIf: sectionSdVM.isAverage(sectionSdVM.selectedWedge) && sectionSdVM.sdIsOP(sectionSdVM.selectedWedge.graphType)&&sectionSdVM.displayCI -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Statistics Information -->
                                            <div class="row ng-scope" id="dataTableScanStat">
                                                <!-- Statistics display table-->
                                                <!-- ngIf: sectionSdVM.displayCr -->
                                                <!-- ngIf: !sectionSdVM.isRelative --><div ng-if="!sectionSdVM.isRelative" class="ng-scope">
                                                    <div class="col-md-12">
                                                        <!-- ngIf: sectionSdVM.sdIsPDD(sectionSdVM.selectedWedge.graphType) --><div class="widget-box ng-scope" ng-if="sectionSdVM.sdIsPDD(sectionSdVM.selectedWedge.graphType)">
                                                            <div class="table-head">
                                                                <table class="table table-bordered">
                                                                    <thead>
                                                                    <tr>
                                                                        <th style="width:28%">Machine ID</th>
                                                                        <th style="width:12%">Field size
                                                                            <br> (cm&nbsp;×&nbsp;cm)
                                                                        </th>
                                                                        <th style="width:12%">SSD (cm)</th>
                                                                        <th style="width:12%">Dmax Depth (cm)</th>
                                                                        <th style="width:12%">D10/Dmax (%)</th>
                                                                        <th style="width:12%">D20/D5 (%)</th>
                                                                        <th style="width:12%">D20/D10 (%)</th>
                                                                    </tr>
                                                                    </thead>
                                                                </table>
                                                            </div>
                                                            <div class="table-body">
                                                                <table class="table table-bordered">
                                                                    <tbody>
                                                                    <!-- ngRepeat: statis in sectionSdVM.comparedData.statisData.detail -->
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div><!-- end ngIf: sectionSdVM.sdIsPDD(sectionSdVM.selectedWedge.graphType) -->
                                                        <!-- ngIf: !sectionSdVM.sdIsOP(sectionSdVM.selectedWedge.graphType) && !sectionSdVM.sdIsPDD(sectionSdVM.selectedWedge.graphType) && sectionSdVM.sdSelectedMac.isFFF -->
                                                        <!-- ngIf: !sectionSdVM.sdIsOP(sectionSdVM.selectedWedge.graphType) && !sectionSdVM.sdIsPDD(sectionSdVM.selectedWedge.graphType) && !sectionSdVM.sdSelectedMac.isFFF -->
                                                    </div>

                                                    <!-- output factor -->
                                                    <!-- ngIf: sectionSdVM.isAverage(sectionSdVM.selectedWedge) && sectionSdVM.sdIsOP(sectionSdVM.selectedWedge.graphType) -->

                                                    <!-- pdd table -->
                                                    <!-- ngIf: sectionSdVM.isAverage(sectionSdVM.selectedWedge) && sectionSdVM.sdIsPDD(sectionSdVM.selectedWedge.graphType) -->

                                                    <!-- profile  -->
                                                    <!-- ngIf: sectionSdVM.isAverage(sectionSdVM.selectedWedge) && !sectionSdVM.sdIsOP(sectionSdVM.selectedWedge.graphType) && !sectionSdVM.sdIsPDD(sectionSdVM.selectedWedge.graphType) -->
                                                </div><!-- end ngIf: !sectionSdVM.isRelative -->
                                            </div>
                                        </div><!-- end ngRepeat: tab in tabs --><div class="tab-pane ng-scope" ng-repeat="tab in tabs" ng-class="{active: tab.active}" tab-content-transclude="tab">

                                            <div class="row margin10 ng-scope">
                                                <div class="col-md-12 margin10 font1">
                                                    Set options
                                                    <i>Current Machine ID</i> and
                                                    <i>Graph Type</i>, also check some machines from Data Library, field size and
                                                    depth, then select
                                                    <i>Compare Detail</i> or
                                                    <i>Compare Average</i> button to plot graph.
                                                </div>
                                                <div class="col-md-3 top20" style="font-size:12px;width:20%">

                                                    <div class="bot10p">
                                                        <label class="font1">Current Machine ID</label>
                                                        <select class="form-control ng-pristine ng-valid" ng-options="machine.macId for machine in sectionSdElctVM.electronViewModels" ng-model="sectionSdElctVM.selectedElectron"><option value="?" selected="selected"></option></select>
                                                    </div>
                                                    <div class="bot10p">
                                                        <label class="font1">Graph Type</label>
                                                        <select class="form-control ng-pristine ng-valid" ng-options="obj.value as obj.text for obj in sectionSdElctVM.sdProfileType('Electron', 'open')" ng-model="sectionSdElctVM.selectedElectron.graphType" ng-change="sectionSdElctVM.setCriterionVisibility(sectionSdElctVM.selectedElectron)"><option value="?" selected="selected"></option><option value="0">PDD in water</option><option value="1">AB Profile in air</option><option value="2">GT Profile in air</option></select>
                                                    </div>
                                                    <div class="bot10p">
                                                        <label class="font1">Normalized</label>
                                                        <div class="switch-small switch-primary ats-switch ng-isolate-scope" ng-click="toggle()" ng-class="{ 'disabled': disabled }" bootstrap-switch="" model="sectionSdElctVM.selectedElectron.normalized" on-label="Yes" off-label="No"><div class="switch-animate switch-off" ng-class="{'switch-off': !model, 'switch-on': model}"><span class="switch-left ng-binding ng-scope" ng-bind="onLabel">Yes</span><span class="knob ng-binding ng-scope" ng-bind="knobLabel">&nbsp;</span><span class="switch-right ng-binding ng-scope" ng-bind="offLabel">No</span></div></div>
                                                    </div>
                                                    <form id="electroncriterionForm" class="ng-pristine ng-valid">
                                                        <div class="bot10p">
                                                            <label class="font1">Pass Criterion % Diff (%)</label>
                                                            <input class="form-control ng-pristine ng-valid" type="text" name="percentDiff" ng-model="sectionSdElctVM.criterion.percent" ng-disabled="!sectionSdElctVM.displayCr || sectionSdElctVM.user.role === 'customer'" ng-change="sectionSdElctVM.updateDta(sectionSdElctVM.criterion.percent)" disabled="disabled">
                                                        </div>
                                                        <div class="bot10p">
                                                            <label class="font1">Pass Criterion DTA (mm)</label>
                                                            <input class="form-control width-20 ng-pristine ng-valid" type="text" name="DTAValue" ng-model="sectionSdElctVM.criterion.dta" ng-disabled="!sectionSdElctVM.displayCr || sectionSdElctVM.sdIsOP(sectionSdVM.selectedWedge.graphType) || sectionSdElctVM.user.role === 'customer'" ng-change="sectionSdElctVM.updatePercent(sectionSdElctVM.criterion.dta)" disabled="disabled">
                                                        </div>
                                                        <div class="bot10p">
                                                            <label class="font1">Lock the relationship of % Diff(%) and DTA(mm)</label>
                                                            <div class="switch-small switch-primary ats-switch ng-isolate-scope disabled" ng-click="toggle()" ng-class="{ 'disabled': disabled }" bootstrap-switch="" model="sectionSdElctVM.criterion.locked" ng-disabled="sectionSdElctVM.criterion.disableLock" on-label="Yes" off-label="No" disabled="disabled"><div class="switch-animate switch-off" ng-class="{'switch-off': !model, 'switch-on': model}"><span class="switch-left ng-binding ng-scope" ng-bind="onLabel">Yes</span><span class="knob ng-binding ng-scope" ng-bind="knobLabel">&nbsp;</span><span class="switch-right ng-binding ng-scope" ng-bind="offLabel">No</span></div></div>
                                                        </div>
                                                    </form>

                                                    <!-- Field table-->
                                                    <!-- if graph type is PDD -->
                                                    <!-- ngIf: sectionSdElctVM.selectedElectron.graphType === 'PDD' -->

                                                    <!-- if graph type is NOT PDD -->
                                                    <!-- ngIf: sectionSdElctVM.selectedElectron.graphType !== 'PDD' --><div class="widget-box ng-scope" ng-if="sectionSdElctVM.selectedElectron.graphType !== 'PDD'">
                                                        <div class="table-head">
                                                            <table class="table table-bordered">
                                                                <thead>
                                                                <tr>
                                                                    <th style="width:23%">
                                                                        <input type="checkbox" ng-model="sectionSdElctVM.selectedElectron.selectAllfs" ng-change="sectionSdElctVM.updateChecked('profileFs',sectionSdElctVM.selectedElectron.selectAllfs,sectionSdElctVM.selectedElectron)" class="ng-pristine ng-valid">
                                                                    </th>
                                                                    <th style="width:42%">Field size
                                                                        <br> (cm&nbsp;×&nbsp;cm)
                                                                    </th>
                                                                    <th style="width:35%">SDD (cm)</th>
                                                                </tr>
                                                                </thead>
                                                            </table>
                                                        </div>
                                                        <div class="table-body">
                                                            <table class="table table-bordered">
                                                                <tbody>
                                                                <!-- ngRepeat: row in sectionSdElctVM.selectedElectron.profileFs -->
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div><!-- end ngIf: sectionSdElctVM.selectedElectron.graphType !== 'PDD' -->

                                                    <!-- Depth table-->
                                                    <div class="widget-box">
                                                        <div class="table-head">
                                                            <table class="table table-bordered">
                                                                <thead>
                                                                <tr>
                                                                    <th style="width:40%">
                                                                        <input type="checkbox" ng-model="sectionSdElctVM.selectedElectron.selectAllDepth" ng-change="sectionSdElctVM.updateChecked('depths',sectionSdElctVM.selectedElectron.selectAllDepth,sectionSdElctVM.selectedElectron)" class="ng-pristine ng-valid">
                                                                    </th>
                                                                    <th style="width:60%">Depth (cm)</th>
                                                                </tr>
                                                                </thead>
                                                            </table>
                                                        </div>
                                                        <div class="table-body">
                                                            <table class="table table-bordered">
                                                                <tbody>
                                                                <!-- ngRepeat: depth in sectionSdElctVM.selectedElectron.depths -->
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Query table -->
                                                <div class="col-md-9" style="width:80%">
                                                    <div class="widget-box">
                                                        <div class="table-head">
                                                            <table class="table table-bordered">
                                                                <thead>
                                                                <tr>
                                                                    <th style="width:5%">
                                                                        <input type="checkbox" ng-model="sectionSdElctVM.selectedElectron.selectAllmac" ng-change="sectionSdElctVM.updateChecked('lib',sectionSdElctVM.selectedElectron.selectAllmac,sectionSdElctVM.selectedElectron);sectionSdElctVM.setCriterionVisibility(sectionSdElctVM.selectedElectron)" class="ng-pristine ng-valid">
                                                                    </th>
                                                                    <th style="width:26%">Machine ID
                                                                        <br>from Data Library</th>
                                                                    <th style="width:12%">Vendor</th>
                                                                    <th style="width:16%">MLC Type</th>
                                                                    <th style="width:13%">Modality</th>
                                                                    <th style="width:7%">Energy (MeV)</th>
                                                                    <th style="width:7%">SSD (cm)</th>
                                                                    <th style="width:14%">Mode Type</th>
                                                                </tr>
                                                                </thead>
                                                            </table>
                                                        </div>
                                                        <div class="table-body">
                                                            <table class="table table-bordered">
                                                                <tbody>
                                                                <!-- ngRepeat: model in sectionSdElctVM.selectedElectron.lib -->
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>

                                                    <!--Graph-->
                                                    <div class="widget-box">
                                                        <div class="widget-content">
                                                            <!--Compare button-->
                                                            <div class="row padding-left-50p bot10p">
                                                                <div class="col-md-3">
                                                                    <button class="btn btn-block btn-primary" type="button" ng-disabled="sectionSdElctVM.isAverage(sectionSdElctVM.selectedElectron)" ng-click="sectionSdElctVM.compareElectron(sectionSdElctVM.selectedElectron)">Compare Detail</button>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <button class="btn btn-block btn-primary" type="button" ng-disabled="!sectionSdElctVM.isAverage(sectionSdElctVM.selectedElectron)" ng-click="sectionSdElctVM.compareElectron(sectionSdElctVM.selectedElectron)" disabled="disabled">Compare Average</button>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <!-- ngIf: sectionSdVM.sdIsOP(sectionSdVM.selectedWedge.graphType) && sectionSdElctVM.isAverage(sectionSdElctVM.selectedElectron) -->

                                                                <div class="pull-left top15">
                                                                    <img type="text/javascript" src="img\Relative Dose.png">
                                                                </div>

                                                                <div class="bot10p col-md-10" style="padding-right: 0px">
                                                                    <div class="chart-620 ng-isolate-scope" flot="" chart-data="sectionSdElctVM.comparedData.sdPlotData" chart-option="sectionSdElctVM.comparedData.options" style="padding: 0px; position: relative;"><canvas class="flot-base" width="150" height="930" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 100px; height: 620px;"></canvas><canvas class="flot-overlay" width="150" height="930" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 100px; height: 620px;"></canvas></div>
                                                                </div>

                                                                <div class="legend" style="overflow-y: auto;overflow-x: hidden;height:600px;"></div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 padding-left-50">
                                                                    <div class="font1 ng-binding">Distance (cm)</div>
                                                                    <br>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row ng-scope" id="electronDataTableScanStat">
                                                <!-- ngIf: sectionSdElctVM.displayCr -->
                                            </div>
                                        </div><!-- end ngRepeat: tab in tabs -->
                                    </div>
                                </div>
                            </div>

                            <!--Modal -->
                            <div id="acknowledgeModal" class="modal fade" data-backdrop="static">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h3>Message</h3>
                                        </div>
                                        <div class="modal-body">
                                            <p>The machine data in the Data Library is sample data shown for comparison and
                                                for your reference only.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Acknowledge</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <!-- GoliveDate -->
            <section ng-hide="sections.golive" class="ng-hide">
                <div class="row">
                    <div class="col-md-12" id="golivedata">
                        <div class="widget-box">
                            <div class="widget-title">
                                <span class="icon">
                                    <i class="icon-align-justify"></i>
                                </span>
                                <h5>Go Live Date</h5>
                            </div>
                            <div class="widget-content nopadding">
                                <table class="table table-bordered" id="tabledate">
                                    <tbody id="datetbody">
                                    <tr>
                                        <th>Machine ID</th>
                                        <th>Expected Delivery Date&nbsp;
                                            <a class="tooltip-demo" data-toggle="tooltip" data-placement="top" title="deadline for model delivery">
                                                <i class="icon-exclamation-sign"></i>
                                            </a>
                                        </th>
                                        <th>Go Live Date&nbsp;
                                            <a class="tooltip-demo" data-toggle="tooltip" data-placement="top" title="start date for model applied to clinic practice">
                                                <i class="icon-exclamation-sign"></i>
                                            </a>
                                        </th>
                                    </tr>
                                    <!-- ngRepeat: pt in photons --><tr ng-show="photon" ng-repeat="pt in photons" class="ng-scope">
                                        <td>
                                            <input type="text" class="form-control width-35 ng-pristine ng-valid" id="machine_iddd" name="Machine IDdd0" ng-model="pt.MachineID" maxlength="20" placeholder="Photon" readonly="">
                                        </td>
                                        <td>
                                            <input type="date" data-date-format="dd-mm-yyyy" class="form-control width-67 ng-pristine ng-valid" tabindex="1" id="DeliveryDate0" ng-model="DeliveryDate[$index]" ng-blur="checkDate(DeliveryDate[$index],GoliveDate[$index],'DeliveryDate'+$index,'GoliveDate'+$index)" placeholder="YYYY-MM-DD">
                                        </td>
                                        <td>
                                            <input type="date" data-date-format="dd-mm-yyyy" class="form-control width-67 ng-pristine ng-valid" tabindex="2" id="GoliveDate0" ng-model="GoliveDate[$index]" ng-blur="checkDate(DeliveryDate[$index],GoliveDate[$index],'GoliveDate'+$index,'DeliveryDate'+$index)" placeholder="YYYY-MM-DD">
                                        </td>
                                    </tr><!-- end ngRepeat: pt in photons --><tr ng-show="photon" ng-repeat="pt in photons" class="ng-scope">
                                        <td>
                                            <input type="text" class="form-control width-35 ng-pristine ng-valid" id="machine_iddd" name="Machine IDdd1" ng-model="pt.MachineID" maxlength="20" placeholder="Photon" readonly="">
                                        </td>
                                        <td>
                                            <input type="date" data-date-format="dd-mm-yyyy" class="form-control width-67 ng-pristine ng-valid" tabindex="1" id="DeliveryDate1" ng-model="DeliveryDate[$index]" ng-blur="checkDate(DeliveryDate[$index],GoliveDate[$index],'DeliveryDate'+$index,'GoliveDate'+$index)" placeholder="YYYY-MM-DD">
                                        </td>
                                        <td>
                                            <input type="date" data-date-format="dd-mm-yyyy" class="form-control width-67 ng-pristine ng-valid" tabindex="2" id="GoliveDate1" ng-model="GoliveDate[$index]" ng-blur="checkDate(DeliveryDate[$index],GoliveDate[$index],'GoliveDate'+$index,'DeliveryDate'+$index)" placeholder="YYYY-MM-DD">
                                        </td>
                                    </tr><!-- end ngRepeat: pt in photons -->
                                    <tr ng-show="electron" class="">
                                        <td>
                                            <input type="text" data-date-format="dd-mm-yyyy" class="form-control width-35" id="Electron11" value="Electron" readonly="">
                                        </td>
                                        <td>
                                            <input type="date" data-date-format="dd-mm-yyyy" class="form-control width-67 ng-pristine ng-valid" tabindex="3" id="Deliverydate_electron" ng-model="DeliveryDate_electron" ng-blur="checkDate(DeliveryDate_electron,GoliveDate_electron,'Deliverydate_electron','Golivedate_electron')" placeholder="YYYY-MM-DD">
                                        </td>
                                        <td>
                                            <input type="date" data-date-format="dd-mm-yyyy" class="form-control width-67 ng-pristine ng-valid" tabindex="4" id="Golivedate_electron" ng-model="GoliveDate_electron" ng-blur="checkDate(DeliveryDate_electron,GoliveDate_electron,'Golivedate_electron','Deliverydate_electron')" placeholder="YYYY-MM-DD">
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="widget-box">
                            <div class="widget-title">
                                <span class="icon">
                                    <i class="icon-comment"></i>
                                </span>
                                <h5>Comment</h5>
                            </div>
                            <div class="widget-content nopadding">
                                <textarea rows="5" class="form-control width-100 ng-pristine ng-valid" tabindex="5" placeholder="Please write note here" ng-model="noteContent" id="noteContent" maxlength="1000" ng-change="CheckSpecCharacters('noteContent')"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End of GoLive Data -->

        </div>
    </div>
</div>
</body>
</html>