<?php
/*
Template Name: mail-contact
*/


get_header(); ?>




<form class="form" method="POST" action="/mail-contact-check">
    <input id="checkbox-1-1" class="regular-checkbox" type="checkbox">
    <label for="checkbox-1-1"></label>第一類医薬品
    <input id="checkbox-2-2" class="regular-checkbox" type="checkbox">
    <label for="checkbox-2-2"></label>第一類医薬品
    <dl>
        <dt class="module-triangle-right">種別</dt>
        <dd>
            <select class="sec-c">
                <option value="">選択してください</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
        </dd>
    </dl>
    ----------------
    <dl>
        <dt class="module-triangle-right">ふりがな<span>必須</span></dt>
        <dd>
            <input class="mb4 zenkakuei-ng required-ng2 zenkakukana-ng validate hankakukata-ng" type="text">

            <input class="validate zenkakuei-ng required-ng2 zenkakukana-ng hankakukata-ng" type="text">
        </dd>
    </dl>
    ----------------
    <dl>
        <dt class="module-triangle-right">生年月日</dt>
        <dd>
            <select name="data[User][birthday][year]">
                <option value="">年1980</option>
                <option value="">1</option>
                <option value="">2</option>
            </select>
            <select name="data[User][birthday][year]">
                <option value="">月10</option>
                <option value="">1</option>
                <option value="">2</option>
            </select>
            <select name="data[User][birthday][year]">
                <option value="">日10</option>
                <option value="">1</option>
                <option value="">2</option>
            </select>
        </dd>
    </dl>
    ----------------
    <dl class="cf">
        <dt>性別</dt>
        <dd>
            <input type="radio" value="1" name="">男
            <input type="radio" value="2" name="">女
        </dd>
    </dl>
    ----------------
    <dl class="cf">
        <dt>住所（都道府県）<span>必須</span></dt>
        <dd>
            <select class="validate sec-c2" name="">
                <option value="">1</option>
                <option value="">2</option>
            </select>
        </dd>
    </dl>
    ----------------
    <dl class="cf">
        <dt>住所（市区町村）</dt>
        <dd>
            <select class="validate" name="">
                <option value="">1</option>
                <option value="">2</option>
            </select>
        </dd>
    </dl>
    ----------------
    <dl class="cf">
        <dt>住所（マンション名）</dt>
        <dd>
            <select class="validate" name="">
                <option value="">1</option>
                <option value="">2</option>
            </select>
        </dd>
    </dl>
    ----------------
    <dl class="cf">
        <dt>お電話番号</dt>
        <dd>
             <input type="text" class="tel-ba validate hankakukata-ng" name="">
        </dd>
    </dl>
    ----------------
    <dl class="cf">
        <dt>メールアドレス<span>必須</span></dt>
        <dd>
            <input class="w250p required validate mail mail-c" type="text" name="">
        </dd>
    </dl>
    ----------------
    <dl class="cf">
        <dt>メールアドレス確認<span>必須</span></dt>
        <dd>
            <input class="w250p validate mail_check" type="text" name="">
        </dd>
    </dl>
    ----------------
    <dl class="cf">
        <dt>パスワード<span>必須</span></dt>
        <dd>
            <input class="w250p required pass validate hankakukata-ng" type="text" name="">
        </dd>
    </dl>
    ----------------
    <dl class="cf">
        <dt>パスワード確認<span>必須</span></dt>
        <dd>
            <input class="w250p required pass_check validate hankakukata-ng" type="password" name="">
        </dd>
    </dl>
    ----------------
    <dl class="cf">
        <dt>お名前<span>必須</span></dt>
        <dd>
            <input class="mb4 required-ng2 validate hankakukata-ng" type="text" placeholder="姓">
            <input class="validate required-ng2 hankakukata-ng" type="text" placeholder="名">
        </dd>
    </dl>
    ----------------
    <dl>
        <dt>半角カタカナはNG</dt>
        <dd><input class="validate hankakukata-ng" type="text" name="" placeholder="文言"></dd>
    </dl>
    ----------------
    <dl>
        <dt>全角ひらがなのみOK</dt>
        <dd><input class="validate zenkakuhira-ok" type="text" name="" placeholder="文言"></dd>
    </dl>
    ----------------
    <dl>
        <dt>半角英数字のみOK</dt>
        <dd><input class="validate haneisuji-ok" type="text" name="" placeholder="文言"></dd>
    </dl>
    ----------------
    <dl>
        <dt>全角英数字はNG</dt>
        <dd><input class="validate zenkakuei-ng" type="text" name="" placeholder="文言"></dd>
    </dl>
    ----------------
    <dl>
        <dt>全角カタカナのみOK</dt>
        <dd><input class="validate zenkakukana-ok" type="text" name="" placeholder="文言"></dd>
    </dl>
    ----------------
    <dl>
        <dt>全角カタカナはNG</dt>
        <dd><input class="validate zenkakukana-ng" type="text" name="" placeholder="文言"></dd>
    </dl>
    ----------------
    <dl>
        <dt>お名前1つ</dt>
        <dd><input class="validate hankakukata-ng" type="text" name="na" placeholder="入力してください" placeholder="文言"></dd>
    </dl>
    ----------------
    <dl>
        <dt>お名前2つ</dt>
        <dd><input class="validate required-ng2" type="text" name="na1" placeholder="入力してください"><input class="validate required-ng2" type="text" name="na2" placeholder="入力してください"></dd>
    </dl>
    ----------------
    <dl>
        <dt>郵便番号</dt>
        <dd><input class="validate yuubin" type="text" name="yubin" placeholder="入力してください"></dd>
    </dl>
    ----------------
    <dl>
        <dt>電話番号</dt>
        <dd><input class="validate tel-ba required" type="text" name="denwa" placeholder="入力してください"></dd>
    </dl>

    ----------------
    <dl>
        <dt>URL</dt>
        <dd><input type="text" class="validate required url_check" placeholder="文言"></dd>
    </dl>
    ----------------
    <dl>
        <dt>5文字以上12文字以内の文字数制限</dt>
        <dd><input type="text" class="validate text-cuncheck5in12in" placeholder="文言"></dd>
    </dl>
    ----------------
    <dl>
        <dt>性別</dt>
        <dd>
            <input type="radio" name="sex" id="l1" class="validate required"><label for="l1">男</label>
            <input type="radio" name="sex" id="l2"><label for="l2">女</label>
        </dd>
    </dl>
    ----------------
    <dl>
        <dt>どれか選んでください</dt>
        <dd class="checkboxRequired">
          <ul>
            <li><input type="checkbox" name="a" id="c1"><label for="c1">check1</label></li>
            <li><input type="checkbox" name="b" id="c2"><label for="c2">check2</label></li>
            <li><input type="checkbox" name="c" id="c3"><label for="c3">check3</label></li>
          </ul>
        </dd>
    </dl>
    ----------------
    <dl>
        <dt>内容</dt>
        <dd><textarea class="validate hankakukata-ng" name="" placeholder="内容を入力してください"></textarea></dd>
    </dl>


    ------------------<br>
    <!--
    <input type="email" required placeholder="メールアドレスを入力してください">
    <input type="tel" required placeholder="電話番号を入力してください">
    <input type="url" placeholder="URLを入力してください"><br>
    上記3つモダンブラウザIEは10以降、必須もバリテーションも効く
    -->
    ------------------

    ----------------
    <ul class="privacy-te-bottom">
        <li><input name="q1" id="la1" type="radio" class="validate-doi required"><label for="la1">同意する</label></li>
        <li><input name="q1" id="la2" type="radio"><label for="la2">同意しない</label></li>
    </ul>
    ----------------<br>
    <button class="b-normal" type="submit">決定</button>

</form>

<?php get_footer(); ?>