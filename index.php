<?php
	include 'header.php';
?>
        
        <nav>
            <ul>
                <li><a href="#">WEB制作</a></li>
                <li><a href="#">受講生の作品</a></li>
                <li><a href="#">卒業生の声</a></li>
                <li><a href="#">カリキュラム</a></li>
                <li><a href="#">会社概要</a></li>
                <li><span>お問い合わせ</span></li>
            </ul>
        </nav> 

        <article>
            <div id="pankuzu">
                <ul>
                    <li><a href="#">HOME　▶︎　</a></li>
                    <li><span>お問い合わせ</span></li>
                </ul>
            </div>

            <main>
                <h2 class="subpage">お問い合わせ</h2>
                <ul class="menu">
                    <li><a href="#" data-id="tour" class="active menu_item">施設見学会</a></li>
                    <li><a href="#" data-id="document" class="menu_item">資料請求</a></li>
                    <li><a href="#" data-id="contact" class="menu_item">採用情報</a></li>
                </ul>

                <div class="content active" id="tour">
                    <form name="form" method="post" action="tour_form.php">
                        <p class="center"><img src="images/banner.png" alt="施設見学会" width="600" class="center"></p>
                        <h2>施設見学ご予約フォーム</h2>
                        <div class="name">
                            <h3>お名前<span class="small"> (ニックネーム可)</span><span class="need">必須</span></h3>
                            <p><input type="text" name="name" placeholder="&#xf007; yossypon" required id="name"></p>
                        </div>
                        <div class="email">
                            <h3>メールアドレス<span class="need">必須</span></h3>
                            <p class="small red">こちらのメールアドレス宛に説明会詳細が自動返信されます。<br>メールが届かない方はお手数ですが再度お問い合わせください。</p>
                            <p><input type="email" name="email" placeholder="&#xf0e0; example@yossypon.com" required id="email"></p>
                        </div>
                        <div class="date">
                            <h3>日時の選択<span class="inlene"><span class="need">必須</span></h3>
                            <p><span><input type="radio" name="datehour" value="12月6日（木）13:30" id="date1"><label for="date1" required>12月6日（木）13:30</label></span></p>
                            <p><span><input type="radio" name="datehour" value="12月10日（月）13:30" id="date2"><label for="date2" required>12月10日（月）13:30</label></span></p>
                            <p><input type="radio" name="datehour" value="12月13日（木）13:30" id="date3"><label for="date3" required>12月13日（木）13:30</label></p>
                            <p><input type="radio" name="datehour" value="12月17日（月）13:30" id="date4"><label for="date4" required>12月17日（月）13:30</label></p>
                        </div>
                        <div class="freetext">
                            <h3>質問事項がありましたらご記入ください</h3>
                            <textarea id="freetext" name="freetext"></textarea>
                        </div>
                        <div class="submit">
                            <p class="center"><input type="submit" value="送信"></p>
                        </div>
                    </form>
                </div><!-- tour -->

                <div class="content" id="document">
                    <form name="form" method="post" action="document_form.php">
                        <p class="center"><img src="images/document.jpg" alt="資料請求" width="600" class="center"></p>
                        <h2>資料請求</h2>
                        <div class="name">
                            <h3 class="inlene">お名前<span class="need">必須</span></h3>
                            <p><input type="text" name="name" placeholder="&#xf007; 東京　太郎" required id="name"></p>
                        </div>
                        <div class="email">
                            <h3>メールアドレス<span class="need">必須</span></h3>
                            <p class="small red">こちらのメールアドレス宛に説明会詳細が自動返信されます。<br>メールが届かない方はお手数ですが再度お問い合わせください。</p>
                            <p><input type="email" name="email" placeholder="&#xf0e0; example@yossypon.com" required id="email"></p>
                        </div>
                        <div class="tel">
                            <h3>電話番号<span class="need">必須</span></h3>
                            <p><input type="tel" name="tel" placeholder="&phone; 09012345678" required id="tel"></p>
                        </div>
                        <div class="address">
                            <h3>送付先<span class="need">必須</span></h3>
                            <div>
                                <label>郵便番号&nbsp;&nbsp;&nbsp;</label>
                                <input type="text" class="address-input yubin" name="zip01" maxlength="8" onKeyUp="AjaxZip3.zip2addr(this,'','pref01','addr01');" placeholder="&#12306;">
                            <br>
                                <label>都道府県&nbsp;&nbsp;&nbsp;</label>
                                <input type="text" class="address-input address_space" name="pref01">
                            <br>
                                <label>以降の住所</label>
                                <input type="text" class="address-input2 address_space" name="addr01">
                            </div>
                        </div>
                        <div class="freetext">
                            <h3>質問事項がありましたらご記入ください</h3>
                            <textarea id="freetext" name="freetext"></textarea>
                        </div>
                        <div class="submit">
                            <p class="center"><input type="submit" value="送信"></p>
                        </div>
                    </form>
                </div><!-- document -->

                <div class="content" id="contact">
                    <form name="form" method="post" action="recruit_form.php">
                        <p class="center"><img src="images/contact.jpg" alt="採用" width="600" class="center"></p>
                        <h2>選考エントリー</h2>
                        <div class="name">
                            <h3 class="inlene">お名前<span class="need">必須</span></h3>
                            <p><input type="text" name="name" placeholder="&#xf007; 東京　太郎" required id="name"></p>
                        </div>
                        <div class="gender">
                            <h3>性別</h3>
                            <input type="radio" name="gender" id="men03" value="男" checked>
                            <label for="men">男</label>
                            <input type="radio" name="gender" id="women03" value="女">
                            <label for="women">女</label>
                        </div>
                        <div class="age">
                            <h3>年齢</h3>
                            <select name="age" id="age">
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                                <option value="32">32</option>
                                <option value="33">33</option>
                                <option value="34">34</option>
                                <option value="35">35</option>
                                <option value="36">36</option>
                                <option value="37">37</option>
                                <option value="38">38</option>
                                <option value="39">39</option>
                                <option value="40">40</option>
                                <option value="41">41</option>
                                <option value="42">42</option>
                                <option value="43">43</option>
                                <option value="44">44</option>
                                <option value="45">45</option>
                                <option value="46">46</option>
                                <option value="47">47</option>
                                <option value="48">48</option>
                                <option value="49">49</option>
                                <option value="50">50</option>
                                <option value="51">51</option>
                                <option value="52">52</option>
                                <option value="53">53</option>
                                <option value="54">54</option>
                                <option value="55">55</option>
                                <option value="56">56</option>
                                <option value="57">57</option>
                                <option value="58">58</option>
                                <option value="59">59</option>
                            </select>
                        </div>
                        <div class="email">
                            <h3>メールアドレス<span class="need">必須</span></h3>
                            <p class="small red">こちらのメールアドレス宛に説明会詳細が自動返信されます。<br>メールが届かない方はお手数ですが再度お問い合わせください。</p>
                            <p><input type="email" name="email" placeholder="&#xf0e0; example@yossypon.com" required id="email"></p>
                        </div>
                        <div class="tel">
                            <h3>電話番号<span class="need">必須</span></h3>
                            <p><input type="tel" name="tel" placeholder="&phone; 09012345678" required id="tel"></p>
                        </div>
                        <div class="freetext">
                            <h3>自己PRをご記入ください。形式は問いません。</h3>
                            <textarea name="freetext" id="freetext"></textarea>
                        </div>
                        <div class="submit">
                            <p class="center"><input type="submit" value="送信"></p>
                        </div>
                    </form>
                </div><!-- contact -->
            </main>
        </article>

        <footer>
            <p class="center">copyright&copy; Yossypon College Tokyo</p>
        </footer>
    </div>

    <script>
        (function() {
            'use strict';
        
            var menuItems = document.getElementsByClassName('menu_item');
            var contents = document.getElementsByClassName('content');
        
            var i;
        
            for (i = 0; i < menuItems.length; i++) {
                menuItems[i].addEventListener('click', function(e) {
                e.preventDefault();
        
                var i;
        
                for (i = 0; i < menuItems.length; i++) {
                menuItems[i].className = 'menu_item';
                }
        
                this.className = 'menu_item active';
        
                for (i = 0; i < contents.length; i++) {
                contents[i].className = 'content';
                }
        
                document.getElementById(this.dataset.id).className = 'content active';
        
                });
            }
        
        })();
    </script>
</body>
</html>