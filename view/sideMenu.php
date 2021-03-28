<div class="mobile-menu-backdrop" v-if="menoActive" @click="menoActiver(0)">
    <div data-aos="fade-left" data-aos-delay="100" data-aos-duration="2000">
        <a @click="menoActiver(0)">
            <img id="x" src="<?php Assetes::img('x.png') ?>" alt="x" class="icon">
        </a>
    </div>
</div>
<div id="meno" data-aos="fade-left" v-if="menoActive" style="right: 0;" @click="menoActiver(1)">
    <div id="logo">
        <img id="e-logo" src="./asetes/img/e.png" alt="e">
    </div>
    <?php if(!isset($_SESSION['logIn'])): ?>
    <div id="meno-user" data-aos="zoom-in" data-aos-delay="100">
        <a href="./vorod" class="linkWithOutUnderLine" id="meno-user-1">
            <img src="asetes/img/paneluser.ico" alt="x" class="icon2"> ورود كاربران
        </a>
        <a href="#" class="linkWithOutUnderLine" id="meno-user-2">
            <img src="asetes/img/emp.png" alt="x" class="icon2"> ورود آگهي دهندگان
        </a>
    </div>
    <?php else: ?>
    <div id="meno-user" data-aos="zoom-in" data-aos-delay="100" style="color: aliceblue;margin-top: -50px;">
        <hr></hr>
        <?= $_SESSION['Name']?> :
            <small style="font-size: 9px;"> <?= $_SESSION['logIn']?> </small>
    </div>
    <?php endif; ?>
    <div id="meno-back">
        <div class="purpleListBack"></div>
        <?php if(isset($_SESSION['logIn'])): ?>
        <div class="listmeno" data-aos="fade-right" data-aos-delay="100">
            <a href="./Home" class="listfontcoler">
                <div style="margin-top:-17px">
                    <img src="./asetes/img/dashblack.png" alt="x" class="icon2"> پيشخوان
                </div>
            </a>
        </div>
        <?php endif; ?>
        <div class="listmeno" data-aos="fade-right" data-aos-delay="150">
            <a href="./Home" class="listfontcoler">
                <div style="margin-top:-17px">
                    <img src="./asetes/img/homeB.png" alt="x" class="icon2"> خانه
                </div>
            </a>
        </div>
        <?php if(isset($_SESSION['logIn'])): ?>
        <div class="listmeno" data-aos="fade-right" data-aos-delay="200">
            <a href="./Home" class="listfontcoler">
                <div style="margin-top:-17px">
                    <img src="./asetes/img/editeListBlack.png" alt="x" class="icon2"> ويرايش آگهي هاي درج شده
                </div>
            </a>
        </div>
        <?php endif; ?>
        <div class="listmeno" data-aos="fade-right" data-aos-delay="300">
            <a href="./taghvim" class="listfontcoler">
                <div style="margin-top:-17px">
                    <img src="./asetes/img/calendar.png" alt="x" class="icon2"> تقويم استخدام
                </div>
            </a>
        </div>
        <div class="listmeno" data-aos="fade-right" data-aos-delay="450">
            <a href="./dargeAgahi" class="listfontcoler">
                <div style="margin-top:-17px">
                    <img src="./asetes/img/commercial.png" alt="x" class="icon2"> درج آگهي استخدام
                </div>
            </a>
        </div>
        <div class="listmeno" data-aos="fade-right" data-aos-delay="650">
            <a href="./adver" class="listfontcoler">
                <div style="margin-top:-17px">
                    <img src="./asetes/img/search.png" alt="x" class="icon2"> جستجوي آگهي
                </div>
            </a>
        </div>
        <div class="listmeno " data-aos="fade-right" data-aos-delay="800">
            <a href="./dargEr" class="listfontcoler">
                <div style="margin-top:-17px">
                    <img src="./asetes/img/bug.png" alt="x" class="icon2"> گزارش اشكال
                </div>
            </a>
        </div>
        <div class="listmeno" data-aos="fade-right" data-aos-delay="950">
            <a href="./contact" class="listfontcoler">
                <div style="margin-top:-17px">
                    <img src="./asetes/img/tel.png" alt="x" class="icon2"> تماس با ما
                </div>
            </a>
        </div>
        <?php if(isset($_SESSION['logIn'])): ?>
        <div class="listmeno" data-aos="fade-right" data-aos-delay="1050">
            <a href="./Out" class="listfontcoler">
                <div style="margin-top:-17px">
                    <img src="./asetes/img/exitBlack.png" alt="x" class="icon2"> خروج از حساب كاربري
                </div>
            </a>
        </div>
        <?php endif; ?>
    </div>
</div>