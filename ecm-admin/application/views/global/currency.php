<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('components/_head') ?>
    <?php $this->load->view('components/_common_css') ?>
    <?php $this->load->view('components/_datatables_css') ?>

    <title><?= $page['title'] . " • " . APP_NAME ?></title>
</head>

<body>
    <header>
        <?php $this->load->view('components/dashboard/_nav') ?>
    </header>
    <main>
        <section class="my-4">
            <div class="container">
                <?php
                $data = [
                    'property' => [
                        'class' => 'sticky'
                    ],
                ];
                $this->load->view('components/dashboard/_page_title', $data)
                ?>
                <table class="table table-nowrap align-middle" id="currency_table">
                    <thead class="table-light">
                        <tr>
                            <th class="sort" data-sort="currencyName" scope="col">Currency Name</th>
                            <th class="sort" data-sort="exchangeRate" scope="col">Exchange Rate (INR)</th>
                            <th scope="col">Inverse Rate</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Argentine Peso</td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=INR&amp;to=ARS">3.454869</a></td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=ARS&amp;to=INR">0.289447</a></td>
                        </tr>
                        <tr>
                            <td>Australian Dollar</td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=INR&amp;to=AUD">0.018499</a></td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=AUD&amp;to=INR">54.056675</a></td>
                        </tr>
                        <tr>
                            <td>Bahraini Dinar</td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=INR&amp;to=BHD">0.004539</a></td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=BHD&amp;to=INR">220.301572</a></td>
                        </tr>
                        <tr>
                            <td>Botswana Pula</td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=INR&amp;to=BWP">0.162824</a></td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=BWP&amp;to=INR">6.141611</a></td>
                        </tr>
                        <tr>
                            <td>Brazilian Real</td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=INR&amp;to=BRL">0.059065</a></td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=BRL&amp;to=INR">16.930366</a></td>
                        </tr>
                        <tr>
                            <td>British Pound</td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=INR&amp;to=GBP">0.009497</a></td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=GBP&amp;to=INR">105.292805</a></td>
                        </tr>
                        <tr>
                            <td>Bruneian Dollar</td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=INR&amp;to=BND">0.016296</a></td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=BND&amp;to=INR">61.365547</a></td>
                        </tr>
                        <tr>
                            <td>Bulgarian Lev</td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=INR&amp;to=BGN">0.021479</a></td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=BGN&amp;to=INR">46.556469</a></td>
                        </tr>
                        <tr>
                            <td>Canadian Dollar</td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=INR&amp;to=CAD">0.016232</a></td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=CAD&amp;to=INR">61.608548</a></td>
                        </tr>
                        <tr>
                            <td>Chilean Peso</td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=INR&amp;to=CLP">10.219120</a></td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=CLP&amp;to=INR">0.097856</a></td>
                        </tr>
                        <tr>
                            <td>Chinese Yuan Renminbi</td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=INR&amp;to=CNY">0.087204</a></td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=CNY&amp;to=INR">11.467307</a></td>
                        </tr>
                        <tr>
                            <td>Colombian Peso</td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=INR&amp;to=COP">47.732287</a></td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=COP&amp;to=INR">0.020950</a></td>
                        </tr>
                        <tr>
                            <td>Czech Koruna</td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=INR&amp;to=CZK">0.265051</a></td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=CZK&amp;to=INR">3.772860</a></td>
                        </tr>
                        <tr>
                            <td>Danish Krone</td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=INR&amp;to=DKK">0.081828</a></td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=DKK&amp;to=INR">12.220712</a></td>
                        </tr>
                        <tr>
                            <td>Emirati Dirham</td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=INR&amp;to=AED">0.044336</a></td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=AED&amp;to=INR">22.555042</a></td>
                        </tr>
                        <tr>
                            <td>Euro</td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=INR&amp;to=EUR">0.010982</a></td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=EUR&amp;to=INR">91.056539</a></td>
                        </tr>
                        <tr>
                            <td>Hong Kong Dollar</td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=INR&amp;to=HKD">0.094360</a></td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=HKD&amp;to=INR">10.597759</a></td>
                        </tr>
                        <tr>
                            <td>Hungarian Forint</td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=INR&amp;to=HUF">4.215031</a></td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=HUF&amp;to=INR">0.237246</a></td>
                        </tr>
                        <tr>
                            <td>Icelandic Krona</td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=INR&amp;to=ISK">1.589162</a></td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=ISK&amp;to=INR">0.629262</a></td>
                        </tr>
                        <tr>
                            <td>Indonesian Rupiah</td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=INR&amp;to=IDR">184.016112</a></td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=IDR&amp;to=INR">0.005434</a></td>
                        </tr>
                        <tr>
                            <td>Iranian Rial</td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=INR&amp;to=IRR">508.202557</a></td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=IRR&amp;to=INR">0.001968</a></td>
                        </tr>
                        <tr>
                            <td>Israeli Shekel</td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=INR&amp;to=ILS">0.044955</a></td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=ILS&amp;to=INR">22.244331</a></td>
                        </tr>
                        <tr>
                            <td>Japanese Yen</td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=INR&amp;to=JPY">1.745626</a></td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=JPY&amp;to=INR">0.572860</a></td>
                        </tr>
                        <tr>
                            <td>Kazakhstani Tenge</td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=INR&amp;to=KZT">5.392161</a></td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=KZT&amp;to=INR">0.185454</a></td>
                        </tr>
                        <tr>
                            <td>Kuwaiti Dinar</td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=INR&amp;to=KWD">0.003713</a></td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=KWD&amp;to=INR">269.343917</a></td>
                        </tr>
                        <tr>
                            <td>Libyan Dinar</td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=INR&amp;to=LYD">0.057992</a></td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=LYD&amp;to=INR">17.243693</a></td>
                        </tr>
                        <tr>
                            <td>Malaysian Ringgit</td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=INR&amp;to=MYR">0.055371</a></td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=MYR&amp;to=INR">18.059981</a></td>
                        </tr>
                        <tr>
                            <td>Mauritian Rupee</td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=INR&amp;to=MUR">0.544553</a></td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=MUR&amp;to=INR">1.836368</a></td>
                        </tr>
                        <tr>
                            <td>Mexican Peso</td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=INR&amp;to=MXN">0.205742</a></td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=MXN&amp;to=INR">4.860457</a></td>
                        </tr>
                        <tr>
                            <td>Nepalese Rupee</td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=INR&amp;to=NPR">1.600750</a></td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=NPR&amp;to=INR">0.624707</a></td>
                        </tr>
                        <tr>
                            <td>New Zealand Dollar</td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=INR&amp;to=NZD">0.020097</a></td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=NZD&amp;to=INR">49.757698</a></td>
                        </tr>
                        <tr>
                            <td>Norwegian Krone</td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=INR&amp;to=NOK">0.125441</a></td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=NOK&amp;to=INR">7.971861</a></td>
                        </tr>
                        <tr>
                            <td>Omani Rial</td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=INR&amp;to=OMR">0.004648</a></td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=OMR&amp;to=INR">215.155820</a></td>
                        </tr>
                        <tr>
                            <td>Pakistani Rupee</td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=INR&amp;to=PKR">3.481643</a></td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=PKR&amp;to=INR">0.287221</a></td>
                        </tr>
                        <tr>
                            <td>Philippine Peso</td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=INR&amp;to=PHP">0.681784</a></td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=PHP&amp;to=INR">1.466741</a></td>
                        </tr>
                        <tr>
                            <td>Polish Zloty</td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=INR&amp;to=PLN">0.048887</a></td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=PLN&amp;to=INR">20.455275</a></td>
                        </tr>
                        <tr>
                            <td>Qatari Riyal</td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=INR&amp;to=QAR">0.043944</a></td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=QAR&amp;to=INR">22.756426</a></td>
                        </tr>
                        <tr>
                            <td>Romanian New Leu</td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=INR&amp;to=RON">0.054267</a></td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=RON&amp;to=INR">18.427368</a></td>
                        </tr>
                        <tr>
                            <td>Russian Ruble</td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=INR&amp;to=RUB">1.187372</a></td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=RUB&amp;to=INR">0.842196</a></td>
                        </tr>
                        <tr>
                            <td>Saudi Arabian Riyal</td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=INR&amp;to=SAR">0.045272</a></td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=SAR&amp;to=INR">22.088904</a></td>
                        </tr>
                        <tr>
                            <td>Singapore Dollar</td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=INR&amp;to=SGD">0.016296</a></td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=SGD&amp;to=INR">61.365547</a></td>
                        </tr>
                        <tr>
                            <td>South African Rand</td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=INR&amp;to=ZAR">0.227558</a></td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=ZAR&amp;to=INR">4.394479</a></td>
                        </tr>
                        <tr>
                            <td>South Korean Won</td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=INR&amp;to=KRW">16.014758</a></td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=KRW&amp;to=INR">0.062442</a></td>
                        </tr>
                        <tr>
                            <td>Sri Lankan Rupee</td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=INR&amp;to=LKR">3.866068</a></td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=LKR&amp;to=INR">0.258661</a></td>
                        </tr>
                        <tr>
                            <td>Swedish Krona</td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=INR&amp;to=SEK">0.129567</a></td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=SEK&amp;to=INR">7.718001</a></td>
                        </tr>
                        <tr>
                            <td>Swiss Franc</td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=INR&amp;to=CHF">0.010573</a></td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=CHF&amp;to=INR">94.577497</a></td>
                        </tr>
                        <tr>
                            <td>Taiwan New Dollar</td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=INR&amp;to=TWD">0.384280</a></td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=TWD&amp;to=INR">2.602269</a></td>
                        </tr>
                        <tr>
                            <td>Thai Baht</td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=INR&amp;to=THB">0.423368</a></td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=THB&amp;to=INR">2.362012</a></td>
                        </tr>
                        <tr>
                            <td>Trinidadian Dollar</td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=INR&amp;to=TTD">0.082006</a></td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=TTD&amp;to=INR">12.194196</a></td>
                        </tr>
                        <tr>
                            <td>Turkish Lira</td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=INR&amp;to=TRY">0.326543</a></td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=TRY&amp;to=INR">3.062382</a></td>
                        </tr>
                        <tr>
                            <td>US Dollar</td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=INR&amp;to=USD">0.012072</a></td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=USD&amp;to=INR">82.833391</a></td>
                        </tr>
                        <tr>
                            <td>Venezuelan Bolivar</td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=INR&amp;to=VEF">37806.296003</a></td>
                            <td class="rtRates"><a href="https://www.x-rates.com/graph/?from=VEF&amp;to=INR">0.000026</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </main>
    <footer>
        <?php $this->load->view('components/dashboard/_footer') ?>
    </footer>
    <?php $this->load->view('components/_common_js') ?>

    <?php $this->load->view('components/_datatables_js') ?>
    <script>
        $(document).ready(function() {
            $('#currency_table').DataTable();
        });
    </script>
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <script>
        Dropzone.options.fileDrop = { // camelized version of the `id`
            paramName: "file", // The name that will be used to transfer the file
            maxFilesize: 2, // MB
            accept: function(file, done) {
                if (file.name == "justinbieber.jpg") {
                    done("Naha, you don't.");
                } else {
                    done();
                }
            }
        };
    </script>
</body>

</html>