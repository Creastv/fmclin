<?php
$bar = get_field( 'score_bar');

?>
<div class="b-vote-bar">
    <div class="prove-bar">

        <div class="score-bar">
            <div class="scroe-bar__wraper">
                <div class="score-bar__item">
                    <div class="top">
                        <span class="num"><?php echo $bar['numer'];?></span>
                        <span class="desc"><?php echo $bar['opis'];?></span>
                    </div>
                    <div class="bottom">
                        <span class="opi"><?php echo $bar['glosy'];?></span>
                        <span class="stars <?php echo $bar['gwiazdki'];?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="104.751" height="13.615" viewBox="0 0 104.751 13.615">
                                <path id="Shape_12_copy_5" data-name="Shape 12 copy 5" d="M1833.842,1548.1a1.255,1.255,0,0,1-.407.578c-.9.819-1.79,1.645-2.688,2.465a.222.222,0,0,0-.078.246c.28,1.273.554,2.547.831,3.822a.764.764,0,0,1-.26.827.678.678,0,0,1-.841.022c-1.066-.669-2.133-1.336-3.2-2.01a.214.214,0,0,0-.27.005q-1.59,1-3.185,2a.7.7,0,0,1-.984-.154.794.794,0,0,1-.13-.668q.415-1.912.832-3.821a.253.253,0,0,0-.085-.281q-1.407-1.283-2.806-2.577a.754.754,0,0,1-.241-.821.693.693,0,0,1,.632-.527q1.118-.11,2.237-.215c.518-.049,1.036-.1,1.554-.145a.164.164,0,0,0,.152-.123c.488-1.207.982-2.411,1.47-3.618a.74.74,0,0,1,.64-.522.719.719,0,0,1,.737.513c.45,1.1.913,2.2,1.34,3.315a.609.609,0,0,0,.606.472c1.112.079,2.22.208,3.332.3a.815.815,0,0,1,.808.639Z" transform="translate(-1820.297 -1542.581)" fill="#EFAC56" />
                                <path id="Shape_12_copy_5-2" data-name="Shape 12 copy 5" d="M1856.418,1548.1a1.259,1.259,0,0,1-.407.578c-.9.819-1.79,1.645-2.688,2.465a.222.222,0,0,0-.078.246c.28,1.273.554,2.547.831,3.822a.763.763,0,0,1-.26.827.679.679,0,0,1-.841.022c-1.066-.669-2.132-1.336-3.195-2.01a.214.214,0,0,0-.27.005q-1.59,1-3.185,2a.7.7,0,0,1-.984-.154.8.8,0,0,1-.129-.668c.276-1.274.551-2.548.832-3.821a.252.252,0,0,0-.085-.281q-1.407-1.283-2.806-2.577a.754.754,0,0,1-.241-.821.694.694,0,0,1,.632-.527q1.118-.11,2.238-.215c.518-.049,1.036-.1,1.553-.145a.163.163,0,0,0,.152-.123c.489-1.207.983-2.411,1.471-3.618a.741.741,0,0,1,.64-.522.72.72,0,0,1,.738.513c.45,1.1.913,2.2,1.34,3.315a.609.609,0,0,0,.606.472c1.112.079,2.22.208,3.331.3a.816.816,0,0,1,.808.639Z" transform="translate(-1820.297 -1542.581)" fill="#EFAC56" />
                                <path id="Shape_12_copy_5-3" data-name="Shape 12 copy 5" d="M1878.994,1548.1a1.256,1.256,0,0,1-.408.578c-.9.819-1.79,1.645-2.688,2.465a.222.222,0,0,0-.078.246c.28,1.273.554,2.547.831,3.822a.764.764,0,0,1-.26.827.678.678,0,0,1-.841.022c-1.066-.669-2.132-1.336-3.2-2.01a.214.214,0,0,0-.271.005q-1.59,1-3.185,2a.7.7,0,0,1-.984-.154.794.794,0,0,1-.13-.668q.414-1.912.832-3.821a.253.253,0,0,0-.085-.281q-1.407-1.283-2.806-2.577a.755.755,0,0,1-.241-.821.693.693,0,0,1,.632-.527q1.119-.11,2.237-.215c.518-.049,1.036-.1,1.554-.145a.164.164,0,0,0,.152-.123c.488-1.207.982-2.411,1.47-3.618a.74.74,0,0,1,.64-.522.719.719,0,0,1,.737.513c.45,1.1.913,2.2,1.34,3.315a.609.609,0,0,0,.606.472c1.112.079,2.22.208,3.332.3a.816.816,0,0,1,.808.639Z" transform="translate(-1820.297 -1542.581)" fill="#EFAC56" />
                                <path id="Shape_12_copy_5-4" data-name="Shape 12 copy 5" d="M1901.569,1548.1a1.261,1.261,0,0,1-.407.578c-.9.819-1.79,1.645-2.688,2.465a.222.222,0,0,0-.078.246c.28,1.273.554,2.547.831,3.822a.763.763,0,0,1-.26.827.679.679,0,0,1-.841.022c-1.066-.669-2.133-1.336-3.2-2.01a.214.214,0,0,0-.27.005q-1.59,1-3.185,2a.7.7,0,0,1-.984-.154.794.794,0,0,1-.129-.668q.415-1.912.832-3.821a.253.253,0,0,0-.085-.281q-1.407-1.283-2.806-2.577a.754.754,0,0,1-.241-.821.694.694,0,0,1,.632-.527q1.118-.11,2.238-.215c.518-.049,1.036-.1,1.553-.145a.164.164,0,0,0,.152-.123c.489-1.207.983-2.411,1.471-3.618a.741.741,0,0,1,.64-.522.719.719,0,0,1,.737.513c.45,1.1.913,2.2,1.34,3.315a.608.608,0,0,0,.606.472c1.112.079,2.22.208,3.332.3a.816.816,0,0,1,.808.639Z" transform="translate(-1820.297 -1542.581)" fill="#EFAC56" />
                                <path id="Shape_12_copy_6" data-name="Shape 12 copy 6" d="M1925.048,1548.1a1.26,1.26,0,0,1-.408.578c-.9.819-1.79,1.645-2.687,2.465a.222.222,0,0,0-.078.246c.28,1.273.554,2.547.831,3.822a.763.763,0,0,1-.26.827.678.678,0,0,1-.841.022c-1.066-.669-2.132-1.336-3.195-2.01a.214.214,0,0,0-.27.005q-1.59,1-3.185,2a.7.7,0,0,1-.984-.154.794.794,0,0,1-.13-.668q.415-1.912.832-3.821a.253.253,0,0,0-.085-.281q-1.407-1.283-2.806-2.577a.754.754,0,0,1-.241-.821.693.693,0,0,1,.632-.527q1.118-.11,2.237-.215c.518-.049,1.035-.1,1.553-.145a.164.164,0,0,0,.152-.123c.488-1.207.983-2.411,1.471-3.618a.74.74,0,0,1,.64-.522.719.719,0,0,1,.737.513c.45,1.1.913,2.2,1.34,3.315a.609.609,0,0,0,.606.472c1.112.079,2.221.208,3.332.3a.816.816,0,0,1,.808.639Z" transform="translate(-1820.297 -1542.581)" fill="#EFAC56" />
                            </svg>
                        </span>
                    </div>
                </div>
                <div class="score-bar__item">
                    <div class="top">
                        <span class="num"><?php echo $bar['numer_two'];?></span>
                        <span class="desc"><?php echo $bar['opis_two'];?></span>
                    </div>
                    <div class="bottom">
                        <span class="line">
                            <span style="width:<?php echo $bar['procent'];?>;"></span>
                        </span>
                    </div>
                </div>
                <?php if($bar['numer_three']) : ?>
                 <div class="score-bar__item">
                    <div class="top">
                        <span class="num"><?php echo $bar['numer_three'];?></span>
                        <span class="desc"><?php echo $bar['opis_three'];?></span>
                    </div>
                    <div class="bottom">
                        <span class="opi"><?php echo $bar['glosy_three'];?></span>
                        <span class="stars <?php echo $bar['gwiazdki_three'];?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="104.751" height="13.615" viewBox="0 0 104.751 13.615">
                                <path data-name="Shape 12 copy 5" d="M1833.842,1548.1a1.255,1.255,0,0,1-.407.578c-.9.819-1.79,1.645-2.688,2.465a.222.222,0,0,0-.078.246c.28,1.273.554,2.547.831,3.822a.764.764,0,0,1-.26.827.678.678,0,0,1-.841.022c-1.066-.669-2.133-1.336-3.2-2.01a.214.214,0,0,0-.27.005q-1.59,1-3.185,2a.7.7,0,0,1-.984-.154.794.794,0,0,1-.13-.668q.415-1.912.832-3.821a.253.253,0,0,0-.085-.281q-1.407-1.283-2.806-2.577a.754.754,0,0,1-.241-.821.693.693,0,0,1,.632-.527q1.118-.11,2.237-.215c.518-.049,1.036-.1,1.554-.145a.164.164,0,0,0,.152-.123c.488-1.207.982-2.411,1.47-3.618a.74.74,0,0,1,.64-.522.719.719,0,0,1,.737.513c.45,1.1.913,2.2,1.34,3.315a.609.609,0,0,0,.606.472c1.112.079,2.22.208,3.332.3a.815.815,0,0,1,.808.639Z" transform="translate(-1820.297 -1542.581)" fill="#EFAC56" />
                                <path data-name="Shape 12 copy 5" d="M1856.418,1548.1a1.259,1.259,0,0,1-.407.578c-.9.819-1.79,1.645-2.688,2.465a.222.222,0,0,0-.078.246c.28,1.273.554,2.547.831,3.822a.763.763,0,0,1-.26.827.679.679,0,0,1-.841.022c-1.066-.669-2.132-1.336-3.195-2.01a.214.214,0,0,0-.27.005q-1.59,1-3.185,2a.7.7,0,0,1-.984-.154.8.8,0,0,1-.129-.668c.276-1.274.551-2.548.832-3.821a.252.252,0,0,0-.085-.281q-1.407-1.283-2.806-2.577a.754.754,0,0,1-.241-.821.694.694,0,0,1,.632-.527q1.118-.11,2.238-.215c.518-.049,1.036-.1,1.553-.145a.163.163,0,0,0,.152-.123c.489-1.207.983-2.411,1.471-3.618a.741.741,0,0,1,.64-.522.72.72,0,0,1,.738.513c.45,1.1.913,2.2,1.34,3.315a.609.609,0,0,0,.606.472c1.112.079,2.22.208,3.331.3a.816.816,0,0,1,.808.639Z" transform="translate(-1820.297 -1542.581)" fill="#EFAC56" />
                                <path data-name="Shape 12 copy 5" d="M1878.994,1548.1a1.256,1.256,0,0,1-.408.578c-.9.819-1.79,1.645-2.688,2.465a.222.222,0,0,0-.078.246c.28,1.273.554,2.547.831,3.822a.764.764,0,0,1-.26.827.678.678,0,0,1-.841.022c-1.066-.669-2.132-1.336-3.2-2.01a.214.214,0,0,0-.271.005q-1.59,1-3.185,2a.7.7,0,0,1-.984-.154.794.794,0,0,1-.13-.668q.414-1.912.832-3.821a.253.253,0,0,0-.085-.281q-1.407-1.283-2.806-2.577a.755.755,0,0,1-.241-.821.693.693,0,0,1,.632-.527q1.119-.11,2.237-.215c.518-.049,1.036-.1,1.554-.145a.164.164,0,0,0,.152-.123c.488-1.207.982-2.411,1.47-3.618a.74.74,0,0,1,.64-.522.719.719,0,0,1,.737.513c.45,1.1.913,2.2,1.34,3.315a.609.609,0,0,0,.606.472c1.112.079,2.22.208,3.332.3a.816.816,0,0,1,.808.639Z" transform="translate(-1820.297 -1542.581)" fill="#EFAC56" />
                                <path data-name="Shape 12 copy 5" d="M1901.569,1548.1a1.261,1.261,0,0,1-.407.578c-.9.819-1.79,1.645-2.688,2.465a.222.222,0,0,0-.078.246c.28,1.273.554,2.547.831,3.822a.763.763,0,0,1-.26.827.679.679,0,0,1-.841.022c-1.066-.669-2.133-1.336-3.2-2.01a.214.214,0,0,0-.27.005q-1.59,1-3.185,2a.7.7,0,0,1-.984-.154.794.794,0,0,1-.129-.668q.415-1.912.832-3.821a.253.253,0,0,0-.085-.281q-1.407-1.283-2.806-2.577a.754.754,0,0,1-.241-.821.694.694,0,0,1,.632-.527q1.118-.11,2.238-.215c.518-.049,1.036-.1,1.553-.145a.164.164,0,0,0,.152-.123c.489-1.207.983-2.411,1.471-3.618a.741.741,0,0,1,.64-.522.719.719,0,0,1,.737.513c.45,1.1.913,2.2,1.34,3.315a.608.608,0,0,0,.606.472c1.112.079,2.22.208,3.332.3a.816.816,0,0,1,.808.639Z" transform="translate(-1820.297 -1542.581)" fill="#EFAC56" />
                                <path data-name="Shape 12 copy 6" d="M1925.048,1548.1a1.26,1.26,0,0,1-.408.578c-.9.819-1.79,1.645-2.687,2.465a.222.222,0,0,0-.078.246c.28,1.273.554,2.547.831,3.822a.763.763,0,0,1-.26.827.678.678,0,0,1-.841.022c-1.066-.669-2.132-1.336-3.195-2.01a.214.214,0,0,0-.27.005q-1.59,1-3.185,2a.7.7,0,0,1-.984-.154.794.794,0,0,1-.13-.668q.415-1.912.832-3.821a.253.253,0,0,0-.085-.281q-1.407-1.283-2.806-2.577a.754.754,0,0,1-.241-.821.693.693,0,0,1,.632-.527q1.118-.11,2.237-.215c.518-.049,1.035-.1,1.553-.145a.164.164,0,0,0,.152-.123c.488-1.207.983-2.411,1.471-3.618a.74.74,0,0,1,.64-.522.719.719,0,0,1,.737.513c.45,1.1.913,2.2,1.34,3.315a.609.609,0,0,0,.606.472c1.112.079,2.221.208,3.332.3a.816.816,0,0,1,.808.639Z" transform="translate(-1820.297 -1542.581)" fill="#EFAC56" />
                            </svg>
                        </span>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
