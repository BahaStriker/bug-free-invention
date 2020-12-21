@extends('layouts.master')
@section('content')


<section class="hero-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="hero-content">
                    <h1 class="hero__title">Fund it. Spend it. Live on crypto.</h1>
                    <p class="hero__desc">
                        Instantly reload your card with no conversion fee!*
                        <br />
                        <small>*Network fees and miner fees may apply</small>
                    </p>
                    <div class="hero-btn">
                        <a href="#" class="theme-btn">get started now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="hero-img-box">
                    <img src="{{ asset('assets/images/v2.png') }}" alt="vector image" class="hero__img" />
                </div>
            </div>
        </div>
    </div>
    <svg class="wave-svg-box" viewBox="0 0 120 28">
        <defs>
            <filter id="goo">
                <feGaussianBlur in="SourceGraphic" stdDeviation="1" result="blur" />
                <feColorMatrix in="blur" mode="matrix" values="
                    1 0 0 0 0
                    0 1 0 0 0
                    0 0 1 0 0
                    0 0 0 13 -9" result="goo" />
                <xfeBlend in="SourceGraphic" in2="goo" />
            </filter>
            <path id="wave"
                d="M 0,10 C 30,10 30,15 60,15 90,15 90,10 120,10 150,10 150,15 180,15 210,15 210,10 240,10 v 28 h -240 z" />
        </defs>

        <use id="wave3" class="wave" xlink:href="#wave" x="0" y="-2"></use>
        <use id="wave2" class="wave" xlink:href="#wave" x="0" y="0"></use>
        <g class="gooeff" filter="url(#goo)">
            <circle class="drop drop1" cx="20" cy="2" r="8.8" />
            <circle class="drop drop2" cx="25" cy="2.5" r="7.5" />
            <circle class="drop drop3" cx="16" cy="2.8" r="9.2" />
            <circle class="drop drop4" cx="18" cy="2" r="8.8" />
            <circle class="drop drop5" cx="22" cy="2.5" r="7.5" />
            <circle class="drop drop6" cx="26" cy="2.8" r="9.2" />
            <circle class="drop drop1" cx="5" cy="4.4" r="8.8" />
            <circle class="drop drop2" cx="5" cy="4.1" r="7.5" />
            <circle class="drop drop3" cx="8" cy="3.8" r="9.2" />
            <circle class="drop drop4" cx="3" cy="4.4" r="8.8" />
            <circle class="drop drop5" cx="7" cy="4.1" r="7.5" />
            <circle class="drop drop6" cx="10" cy="4.3" r="9.2" />
            <circle class="drop drop1" cx="1.2" cy="5.4" r="8.8" />
            <circle class="drop drop2" cx="5.2" cy="5.1" r="7.5" />
            <circle class="drop drop3" cx="10.2" cy="5.3" r="9.2" />
            <circle class="drop drop4" cx="3.2" cy="5.4" r="8.8" />
            <circle class="drop drop5" cx="14.2" cy="5.1" r="7.5" />
            <circle class="drop drop6" cx="17.2" cy="4.8" r="9.2" />
            <use id="wave1" class="wave" xlink:href="#wave" x="0" y="1" />
        </g>
    </svg>
</section>
<section class="feature-area">
    <div class="container">
        <div class="row feature-box">
            <div class="col-lg-3">
                <div class="feature-item">
                    <span class="feature__number">01</span>
                    <div class="feature__icon">
                        <i class="flaticon-027-bitcoin-8"></i>
                    </div>
                    <h3 class="feature__title">Register an Account</h3>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="feature-item">
                    <span class="feature__number">02</span>
                    <div class="feature__icon">
                        <i class="flaticon-001-bitcoin-20"></i>
                    </div>
                    <h3 class="feature__title">Link your Wallet</h3>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="feature-item">
                    <span class="feature__number">03</span>
                    <div class="feature__icon">
                        <i class="flaticon-028-bitcoin-7"></i>
                    </div>
                    <h3 class="feature__title">Load the Wallet</h3>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="feature-item">
                    <span class="feature__number">04</span>
                    <div class="feature__icon">
                        <i class="flaticon-012-bitcoin-15"></i>
                    </div>
                    <h3 class="feature__title">Order the Card</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="howitworks-area text-center" id="process">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sec-heading">
                    <div class="heading-circle m-x-auto"></div>
                    <p class="sec__meta">check our process</p>
                    <h2 class="sec__title">
                        Provide Awesome Service for this <br />
                        People Choose Us.
                    </h2>
                </div>
            </div>
        </div>
        <div class="row hiw-content">
            <div class="col-lg-3">
                <div class="hiw-item">
                    <div class="flaticon__icon">
                        <span class="flaticon-001-bitcoin-20"></span>
                    </div>
                    <h3 class="hiw__title">
                        <a href="service.html">Instant reloads</a>
                    </h3>
                    <p class="hiw__desc">
                        Reload your balance with no conversion fees* and spend. Powered by our competitive exchange
                        rates.
                        </br>
                        <small>*Network fees and miner fees may apply</small>
                    </p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="hiw-item">
                    <div class="flaticon__icon">
                        <span class="flaticon-002-bitcoin-19"></span>
                    </div>
                    <h3 class="hiw__title">
                        <a href="service.html">Flexibility</a>
                    </h3>
                    <p class="hiw__desc">
                        Designed for people who want to live life on crypto. View your balance, request a new PIN,
                        and reload instantly.
                    </p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="hiw-item">
                    <div class="flaticon__icon">
                        <span class="flaticon-014-bitcoin-13"></span>
                    </div>
                    <h3 class="hiw__title">
                        <a href="service.html">Enhanced security</a>
                    </h3>
                    <p class="hiw__desc">
                        Includes EMV chip and options to lock your card and control how you spend.
                    </p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="hiw-item">
                    <div class="flaticon__icon">
                        <span class="flaticon-031-bitcoin-4"></span>
                    </div>
                    <h3 class="hiw__title"><a href="service.html">Worldwide</a></h3>
                    <p class="hiw__desc">
                        Ready to use in millions of locations around the world. Pay with contactless, PIN or simply
                        withdraw cash from any compatible ATM.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="calculator-area text-center" id="calculator">
    <span class="howitworks-shape"></span>
    <span class="howitworks-shape"></span>
    <span class="howitworks-shape"></span>
    <span class="howitworks-shape"></span>
    <span class="howitworks-shape"></span>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sec-heading">
                    <div class="heading-circle m-x-auto"></div>
                    <p class="sec__meta">with all cryptocurrency values</p>
                    <h2 class="sec__title">Calculate Live Cryptocurrency.</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="crypto-calculator">
                    <div class="form-inline">
                        <div class="input-group-box">
                            <div class="select-option cyptocurrency">
                                <select class="select-option-field" id="selected-coin"
                                    onchange="bitconCalculateOnCryptoChange(this.value);">
                                    <option value="bitcoin">Bitcoin</option>
                                    <option value="ethereum">Ethereum</option>
                                    <option value="bitcoin-cash">Bitcoin Cash</option>
                                    <option value="litecoin">Litecoin</option>
                                    <option value="ripple">Ripple</option>
                                    <option value="monero">Monero</option>
                                </select>
                            </div>
                            <input type="text" class="form-control" id="amtBTC" value="1" />
                        </div>
                        <div class="input-group-box">
                            <input type="text" class="form-control decrement" id="amtUSD" value="0.00" />
                            <div class="select-option crypto-price">
                                <select id="selected-currency" onchange="bitconCalculateOnCurrencyChange(this.value);"
                                    class="select-option-field capitalize">
                                    <option value="GGP">GGP - Guernsey Pound</option>
                                    <option value="LKR">LKR - Sri Lankan-rupee</option>
                                    <option value="UYU">UYU - Uruguayan Peso</option>
                                    <option value="ARS">ARS - Argentine Peso</option>
                                    <option value="BBD">BBD - Barbadian Dollar</option>
                                    <option value="BIF">BIF - Burundian Franc</option>
                                    <option value="AED">AED - United Arab-emirates-dirham</option>
                                    <option value="IRR">IRR - Iranian Rial</option>
                                    <option value="RWF">RWF - Rwandan Franc</option>
                                    <option value="TMT">TMT - Turkmenistani Manat</option>
                                    <option value="ZMW">ZMW - Zambian Kwacha</option>
                                    <option value="BRL">BRL - Brazilian Real</option>
                                    <option value="UGX">UGX - Ugandan Shilling</option>
                                    <option value="HRK">HRK - Croatian Kuna</option>
                                    <option value="VEF">VEF - Venezuelan Bolívar-fuerte</option>
                                    <option value="GBP">GBP - British Pound-sterling</option>
                                    <option value="NOK">NOK - Norwegian Krone</option>
                                    <option value="DKK">DKK - Danish Krone</option>
                                    <option value="GEL">GEL - Georgian Lari</option>
                                    <option value="AFN">AFN - Afghan Afghani</option>
                                    <option value="CVE">CVE - Cape Verdean-escudo</option>
                                    <option value="TWD">TWD - New Taiwan-dollar</option>
                                    <option value="AZN">AZN - Azerbaijani Manat</option>
                                    <option value="ZAR">ZAR - South African-rand</option>
                                    <option value="PKR">PKR - Pakistani Rupee</option>
                                    <option value="VUV">VUV - Vanuatu Vatu</option>
                                    <option value="KHR">KHR - Cambodian Riel</option>
                                    <option value="MOP">MOP - Macanese Pataca</option>
                                    <option value="SGD">SGD - Singapore Dollar</option>
                                    <option value="JPY">JPY - Japanese Yen</option>
                                    <option value="MDL">MDL - Moldovan Leu</option>
                                    <option value="KMF">KMF - Comorian Franc</option>
                                    <option value="COP">COP - Colombian Peso</option>
                                    <option value="IQD">IQD - Iraqi Dinar</option>
                                    <option value="SRD">SRD - Surinamese Dollar</option>
                                    <option value="KES">KES - Kenyan Shilling</option>
                                    <option value="LSL">LSL - Lesotho Loti</option>
                                    <option value="ETB">ETB - Ethiopian Birr</option>
                                    <option value="KGS">KGS - Kyrgystani Som</option>
                                    <option value="LYD">LYD - Libyan Dinar</option>
                                    <option value="QAR">QAR - Qatari Rial</option>
                                    <option value="KRW">KRW - South Korean-won</option>
                                    <option value="NGN">NGN - Nigerian Naira</option>
                                    <option value="GMD">GMD - Gambian Dalasi</option>
                                    <option value="TJS">TJS - Tajikistani Somoni</option>
                                    <option value="KZT">KZT - Kazakhstani Tenge</option>
                                    <option value="SVC">SVC - Salvadoran Colón</option>
                                    <option value="CLF">CLF - Chilean Unit-of-account-(uf)</option>
                                    <option value="JOD">JOD - Jordanian Dinar</option>
                                    <option value="PLN">PLN - Polish Zloty</option>
                                    <option value="NPR">NPR - Nepalese Rupee</option>
                                    <option value="LBP">LBP - Lebanese Pound</option>
                                    <option value="XCD">XCD - East Caribbean-dollar</option>
                                    <option value="XOF">XOF - Cfa Franc-bceao</option>
                                    <option value="BAM">BAM - Bosnia Herzegovina-convertible-mark</option>
                                    <option value="XPT">XPT - Platinum Ounce</option>
                                    <option value="RUB">RUB - Russian Ruble</option>
                                    <option value="BYN">BYN - Belarusian Ruble</option>
                                    <option value="SBD">SBD - Solomon Islands-dollar</option>
                                    <option value="AOA">AOA - Angolan Kwanza</option>
                                    <option value="HUF">HUF - Hungarian Forint</option>
                                    <option value="SHP">SHP - Saint Helena-pound</option>
                                    <option value="MNT">MNT - Mongolian Tugrik</option>
                                    <option value="IDR">IDR - Indonesian Rupiah</option>
                                    <option value="PGK">PGK - Papua New-guinean-kina</option>
                                    <option value="SZL">SZL - Swazi Lilangeni</option>
                                    <option value="BND">BND - Brunei Dollar</option>
                                    <option value="SOS">SOS - Somali Shilling</option>
                                    <option value="GYD">GYD - Guyanaese Dollar</option>
                                    <option value="GIP">GIP - Gibraltar Pound</option>
                                    <option value="IMP">IMP - Manx Pound</option>
                                    <option value="EUR">EUR - Euro</option>
                                    <option value="SAR">SAR - Saudi Riyal</option>
                                    <option value="BDT">BDT - Bangladeshi Taka</option>
                                    <option value="LAK">LAK - Laotian Kip</option>
                                    <option value="UZS">UZS - Uzbekistan Som</option>
                                    <option selected value="USD">USD - United States-dollar</option>
                                    <option value="HKD">HKD - Hong Kong-dollar</option>
                                    <option value="KYD">KYD - Cayman Islands-dollar</option>
                                    <option value="FJD">FJD - Fijian Dollar</option>
                                    <option value="MVR">MVR - Maldivian Rufiyaa</option>
                                    <option value="MYR">MYR - Malaysian Ringgit</option>
                                    <option value="SYP">SYP - Syrian Pound</option>
                                    <option value="NAD">NAD - Namibian Dollar</option>
                                    <option value="HTG">HTG - Haitian Gourde</option>
                                    <option value="CUP">CUP - Cuban Peso</option>
                                    <option value="XPD">XPD - Palladium Ounce</option>
                                    <option value="TND">TND - Tunisian Dinar</option>
                                    <option value="LRD">LRD - Liberian Dollar</option>
                                    <option value="XAG">XAG - Silver Ounce</option>
                                    <option value="HNL">HNL - Honduran Lempira</option>
                                    <option value="VND">VND - Vietnamese Dong</option>
                                    <option value="ERN">ERN - Eritrean Nakfa</option>
                                    <option value="VES">VES - Venezuelan Bolívar-soberano</option>
                                    <option value="RSD">RSD - Serbian Dinar</option>
                                    <option value="XPF">XPF - Cfp Franc</option>
                                    <option value="JMD">JMD - Jamaican Dollar</option>
                                    <option value="MRU">MRU - Mauritanian Ouguiya</option>
                                    <option value="BOB">BOB - Bolivian Boliviano</option>
                                    <option value="BWP">BWP - Botswanan Pula</option>
                                    <option value="DZD">DZD - Algerian Dinar</option>
                                    <option value="CDF">CDF - Congolese Franc</option>
                                    <option value="CRC">CRC - Costa Rican-colón</option>
                                    <option value="TRY">TRY - Turkish Lira</option>
                                    <option value="FKP">FKP - Falkland Islands-pound</option>
                                    <option value="ANG">ANG - Netherlands Antillean-guilder</option>
                                    <option value="BHD">BHD - Bahraini Dinar</option>
                                    <option value="WST">WST - Samoan Tala</option>
                                    <option value="BTN">BTN - Bhutanese Ngultrum</option>
                                    <option value="CNY">CNY - Chinese Yuan-renminbi</option>
                                    <option value="MAD">MAD - Moroccan Dirham</option>
                                    <option value="MUR">MUR - Mauritian Rupee</option>
                                    <option value="TTD">TTD - Trinidad And-tobago-dollar</option>
                                    <option value="BZD">BZD - Belize Dollar</option>
                                    <option value="PAB">PAB - Panamanian Balboa</option>
                                    <option value="YER">YER - Yemeni Rial</option>
                                    <option value="XAF">XAF - Cfa Franc-beac</option>
                                    <option value="CZK">CZK - Czech Republic-koruna</option>
                                    <option value="OMR">OMR - Omani Rial</option>
                                    <option value="PHP">PHP - Philippine Peso</option>
                                    <option value="CAD">CAD - Canadian Dollar</option>
                                    <option value="ZWL">ZWL - Zimbabwean Dollar</option>
                                    <option value="MGA">MGA - Malagasy Ariary</option>
                                    <option value="GHS">GHS - Ghanaian Cedi</option>
                                    <option value="STD">STD - São Tomé-and-príncipe-dobra-(pre-2018)</option>
                                    <option value="RON">RON - Romanian Leu</option>
                                    <option value="MWK">MWK - Malawian Kwacha</option>
                                    <option value="CHF">CHF - Swiss Franc</option>
                                    <option value="DJF">DJF - Djiboutian Franc</option>
                                    <option value="GTQ">GTQ - Guatemalan Quetzal</option>
                                    <option value="BMD">BMD - Bermudan Dollar</option>
                                    <option value="KWD">KWD - Kuwaiti Dinar</option>
                                    <option value="SEK">SEK - Swedish Krona</option>
                                    <option value="XDR">XDR - Special Drawing-rights</option>
                                    <option value="SLL">SLL - Sierra Leonean-leone</option>
                                    <option value="BGN">BGN - Bulgarian Lev</option>
                                    <option value="AUD">AUD - Australian Dollar</option>
                                    <option value="NZD">NZD - New Zealand-dollar</option>
                                    <option value="MRO">MRO - Mauritanian Ouguiya-(pre-2018)</option>
                                    <option value="ILS">ILS - Israeli New-sheqel</option>
                                    <option value="AMD">AMD - Armenian Dram</option>
                                    <option value="CNH">CNH - Chinese Yuan-(offshore)</option>
                                    <option value="MZN">MZN - Mozambican Metical</option>
                                    <option value="AWG">AWG - Aruban Florin</option>
                                    <option value="DOP">DOP - Dominican Peso</option>
                                    <option value="UAH">UAH - Ukrainian Hryvnia</option>
                                    <option value="JEP">JEP - Jersey Pound</option>
                                    <option value="SCR">SCR - Seychellois Rupee</option>
                                    <option value="TZS">TZS - Tanzanian Shilling</option>
                                    <option value="PYG">PYG - Paraguayan Guarani</option>
                                    <option value="SDG">SDG - Sudanese Pound</option>
                                    <option value="MKD">MKD - Macedonian Denar</option>
                                    <option value="EGP">EGP - Egyptian Pound</option>
                                    <option value="MXN">MXN - Mexican Peso</option>
                                    <option value="PEN">PEN - Peruvian Nuevo-sol</option>
                                    <option value="INR">INR - Indian Rupee</option>
                                    <option value="CUC">CUC - Cuban Convertible-peso</option>
                                    <option value="STN">STN - São Tomé-and-príncipe-dobra</option>
                                    <option value="CLP">CLP - Chilean Peso</option>
                                    <option value="XAU">XAU - Gold Ounce</option>
                                    <option value="SSP">SSP - South Sudanese-pound</option>
                                    <option value="GNF">GNF - Guinean Franc</option>
                                    <option value="THB">THB - Thai Baht</option>
                                    <option value="KPW">KPW - North Korean-won</option>
                                    <option value="MMK">MMK - Myanma Kyat</option>
                                    <option value="ISK">ISK - Icelandic Króna</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta-area">
    <div class="circle-icons">
        <div class="circle-one"></div>
        <div class="circle-two"></div>
        <div class="circle-three"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="sec-heading">
                    <div class="heading-circle"></div>
                    <h2 class="sec__title">Are You Ready to Join With Us.</h2>
                    <p class="sec__desc">
                        Transaction notifications and instant reloads.
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="cta-btn-box">
                    <div class="circle-icons2">
                        <div class="circle-one"></div>
                        <div class="circle-two"></div>
                        <div class="circle-three"></div>
                    </div>
                    <a href="#" class="theme-btn">get started</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="package-area text-center" id="pricing">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="sec-heading">
                    <div class="heading-circle m-x-auto"></div>
                    <p class="sec__meta">affordable packages</p>
                    <h2 class="sec__title">A Prepaid Mastercard® for the crypto community</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="package-tab-content">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade show active" id="tab4">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="package-content">
                                        <h4 class="package__title">
                                            get gold card
                                        </h4>
                                        </br>
                                        <img src="{{ asset('assets/images/bc-3.png') }}" />
                                        <div class="price__box">
                                            <span class="currency"><i class="fa fa-dollar-sign"></i></span>
                                            <span class="price__price">50</span>
                                        </div>
                                        <a href="#" class="order__btn">get now</a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="package-content">
                                        <h4 class="package__title">
                                            get premium card
                                        </h4>
                                        </br>
                                        <img src="{{ asset('assets/images/bc-2.png') }}" />
                                        <div class="price__box">
                                            <span class="currency"><i class="fa fa-dollar-sign"></i></span>
                                            <span class="price__price">300</span>
                                        </div>
                                        <a href="#" class="order__btn">get now</a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="package-content package-content3">
                                        <h4 class="package__title">
                                            get ultimate card
                                        </h4>
                                        </br>
                                        <img src="{{ asset('assets/images/bc-1.png') }}" />
                                        <div class="price__box">
                                            <span class="currency"><i class="fa fa-dollar-sign"></i></span>
                                            <span class="price__price">700</span>
                                        </div>
                                        <a href="#" class="order__btn">get now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="divider">
                    <span class="divider__circle"></span>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="marketprice-area" id="plans">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="sec-heading text-center">
                    <div class="heading-circle m-x-auto"></div>
                    <p class="sec__meta">check out market depth</p>
                    <h2 class="sec__title">Prepaid Cards Limits.</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="coinprice-table table-responsive">
                    <table class="table table-bordered text-left">
                        <thead>
                            <tr>
                                <th>Plan</th>
                                <th>ATM Withdrawal</th>
                                <th>Load Limits</th>
                                <th>Spending Limits</th>
                                <th>Maximum Balance</th>
                                <th>Card Issue</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <table class="inner-table">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <img src="{{ asset('assets/images/bc-3.png') }}"
                                                        class="img-responsive" alt="table-img" />
                                                </td>
                                                <td>
                                                    <p class="currency__title">Gold</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                                <td>
                                    <p>$500 per withdrawal, 2 withdrawals per day</p>
                                </td>
                                <td>
                                    <p>$3,000 per day</p>
                                </td>
                                <td>
                                    <p>$1,000 per day</p>
                                </td>
                                <td>
                                    <p>$10,000 including cash loads</p>
                                </td>
                                <td>
                                    <p>$50.00</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table class="inner-table">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <img src="{{ asset('assets/images/bc-2.png') }}"
                                                        class="img-responsive" alt="table-img" />
                                                </td>
                                                <td>
                                                    <p class="currency__title">PREMIUM</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                                <td>
                                    <p>$1500 per withdrawal, 3 withdrawals per day</p>
                                </td>
                                <td>
                                    <p>$10,000 per day</p>
                                </td>
                                <td>
                                    <p>$4,500 per day</p>
                                </td>
                                <td>
                                    <p>$75,000 including cash loads</p>
                                </td>
                                <td>
                                    <p>$300.00</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table class="inner-table">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <img src="{{ asset('assets/images/bc-1.png') }}"
                                                        class="img-responsive" alt="table-img" />
                                                </td>
                                                <td>
                                                    <p class="currency__title">ULTIMATE</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                                <td>
                                    <p>$3000 per withdrawal, 5 withdrawals per day</p>
                                </td>
                                <td>
                                    <p>$50,000 per day</p>
                                </td>
                                <td>
                                    <p>$15,000 per day</p>
                                </td>
                                <td>
                                    <p>$250,000 including cash loads</p>
                                </td>
                                <td>
                                    <p>$700.00</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="newsleller-area">
    <div class="container">
        <div class="subscriber-box">
            <div class="row">
                <div class="col-lg-7">
                    <div class="sec-heading">
                        <div class="heading-circle"></div>
                        <p class="sec__meta">Get in touch</p>
                        <h2 class="sec__title">Subscribe to Our Newsletter</h2>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="subscriber-wrap">
                        <form action="#">
                            <div class="subscriber-form">
                                <input type="text" class="form-control" placeholder="Enter your email" />
                                <i class="fa fa-envelope"></i>
                                <button class="theme-btn">subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
