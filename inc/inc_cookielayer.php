<?php
 if(!isset($_GET['noc'])){ if(($_COOKIE['freasy1-cookie'] != 1) ){ 
 ?>
<div id="cookie_layer">
    <div class="block">
        <div class="headline"><?= t('cookie_headline') ?></div>
        <p style="margin: 0 0 10px; text-align: center;">
        <?= t('cookie_intro') ?>
        <br /><?= t('cookie_intro_link') ?>
        </p>
        <div class="gray">
            <div class="spalte1">
                <b><?= t('cookie_necessary') ?></b><br>
                <a href="#" class="necessary" onclick="return false;"><?= t('cookie_necessary_enabled') ?></a>
            </div>
            
            <div class="spalte2">
               <b><?= t('cookie_statistics') ?></b><br> 
               <a href="#" class="cookietyp" id="co-track"><?= t('cookie_statistics_disabled') ?></a>            </div>
            <!-- <div class="spalte3">
               <b>Social Media </b><br> 
               <a href="#" class="cookietyp" id="co-track1">deaktiviert</a>            </div>-->
            
            <div class="clearfix"></div>
        </div>
        <div style="margin-top: 7px;">
            <div class="left"><a href="/impressum?noc=1"><?= t('cookie_impressum_link') ?></a> / <a href="/datenschutz?noc=1"><?= t('cookie_datenschutz_link') ?></a></div>
            <div class="right"><a href="" id="klapp" class="open"><?= t('cookie_show_details') ?></a></div>
             <div class="clearfix"></div>
        </div>
        <div id="toopen" style="display:none">
            <p>
              <b><?= t('cookie_necessary') ?></b>  <br>
             <?= t('cookie_necessary_detail') ?>
            </p>
            <p>
              <b><?= t('cookie_statistics') ?></b>  <br>
              <?= t('cookie_statistics_detail') ?>
            </p>
           <!-- <p>
              <b>Social Media </b>  <br>
              ... </p> -->
        </div>
        <div class="schalterblock">
            <a class="btn btn-primary white lucid" href="#" id="co-confirm"><?= t('cookie_confirm') ?></a>
            <a class="btn btn-primary" href="#" id="co-all"><?= t('cookie_accept_all') ?></a>
        </div>
    </div>
</div>

<div id="cookieback"> </div>

<?php  } }    ?>