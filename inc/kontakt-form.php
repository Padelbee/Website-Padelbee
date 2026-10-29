<div class="container">
    <div class="row pt-4 pb-4">
        <div class="col-12 pb-5">
            <h3><?= t('form_heading_online') ?></h3>
            <div class="form">
                <div class="bg-weiss ">
                    <div id="form1">
                        <h3><?= t('form_heading_planned') ?></h3>

                        <div class="form-row">
                            <div class="col-12 mb-5">
                                <div class="custom-control custom-checkbox bg-color1">
                                    <input type="checkbox" class="custom-control-input as" id="customCheck1"
                                        value="<?= htmlspecialchars(t('form_label_erstscreening')) ?>"
                                        <?php if($formaktiv == 1 ) echo ' checked="checked"'; ?>>
                                    <label class="custom-control-label" for="customCheck1"><?= t('form_label_erstscreening') ?></label>
                                </div>
                                <div class="custom-control custom-checkbox bg-color2">
                                    <input type="checkbox" class="custom-control-input as" id="customCheck2"
                                        value="<?= htmlspecialchars(t('form_label_platzbau')) ?>"
                                        <?php if($formaktiv == 2 ) echo ' checked="checked"'; ?>>
                                    <label class="custom-control-label" for="customCheck2"> <?= t('form_label_platzbau') ?></label>
                                </div>
                                <div class="custom-control custom-checkbox bg-color3">
                                    <input type="checkbox" class="custom-control-input as" id="customCheck3"
                                        value="<?= htmlspecialchars(t('form_label_betreiberkonzept')) ?>"
                                        <?php if($formaktiv == 3 ) echo ' checked="checked"'; ?>>
                                    <label class="custom-control-label" for="customCheck3"><?= t('form_label_betreiberkonzept') ?></label>
                                </div>
                                <div class="custom-control custom-checkbox bg-color4">
                                    <input type="checkbox" class="custom-control-input as" id="customCheck4"
                                        value="Padelbee Powerplay"
                                        <?php if($formaktiv == 4 ) echo ' checked="checked"'; ?>>
                                    <label class="custom-control-label" for="customCheck4"><?= t('form_label_powerplay') ?></label>
                                </div>

                                <div class="custom-control custom-checkbox bg-color5">
                                    <input type="checkbox" class="custom-control-input as" id="customCheck5"
                                        value="<?= htmlspecialchars(t('form_label_angebotsvergleich')) ?>"
                                        <?php if($formaktiv == 5 ) echo ' checked="checked"'; ?>>
                                    <label class="custom-control-label" for="customCheck5"><?= t('form_label_angebotsvergleich') ?></label>
                                </div>
                                <div class="custom-control custom-checkbox bg-color5">
                                    <input type="checkbox" class="custom-control-input as" id="customCheck6"
                                        value="<?= htmlspecialchars(t('form_label_automatenloesungen')) ?>"
                                        <?php if($formaktiv == 6 ) echo ' checked="checked"'; ?>>
                                    <label class="custom-control-label" for="customCheck6"><?= t('form_label_automatenloesungen') ?></label>
                                </div>

                                <p class="mt-4 mb-2 small fw-bold"><?= t('form_label_more') ?></p>
                                <div class="custom-control custom-checkbox bg-color5">
                                    <input type="checkbox" class="custom-control-input as" id="customCheck7"
                                        value="Padelcourt"
                                        <?php if($formaktiv == 7 ) echo ' checked="checked"'; ?>>
                                    <label class="custom-control-label" for="customCheck7"><?= t('form_label_padelcourt') ?></label>
                                </div>
                                <div class="custom-control custom-checkbox bg-color5">
                                    <input type="checkbox" class="custom-control-input as" id="customCheck8"
                                        value="Pickleball"
                                        <?php if($formaktiv == 8 ) echo ' checked="checked"'; ?>>
                                    <label class="custom-control-label" for="customCheck8"><?= t('form_label_pickleball') ?></label>
                                </div>
                                <div class="custom-control custom-checkbox bg-color5">
                                    <input type="checkbox" class="custom-control-input as" id="customCheck9"
                                        value="<?= htmlspecialchars(t('form_label_tennisplatzbau')) ?>"
                                        <?php if($formaktiv == 9 ) echo ' checked="checked"'; ?>>
                                    <label class="custom-control-label" for="customCheck9"><?= t('form_label_tennisplatzbau') ?></label>
                                </div>
                                <div class="custom-control custom-checkbox bg-color5">
                                    <input type="checkbox" class="custom-control-input as" id="customCheck10"
                                        value="<?= htmlspecialchars(t('form_label_hallenloesungen')) ?>"
                                        <?php if($formaktiv == 10 ) echo ' checked="checked"'; ?>>
                                    <label class="custom-control-label" for="customCheck10"><?= t('form_label_hallenloesungen') ?></label>
                                </div>
                            </div>
                        </div>
                        <?php if($formaktiv == false) { ?>
                        <div class="text-center"><a href="" class="btn" id="weiter1-ohne"><?= t('form_weiter_ohne') ?></a>
                        </div>
                        <?php } else { ?>
                        <div class="text-center"><a href="" class="btn" id="weiter1-ohne"><?= t('form_weiter_mit') ?></a>
                        </div>
                        <?php }  ?>
                    </div>

                    <form action="/m-senden.php" method="POST" id="kontakt-formular">
                        <div id="form2">
                            <h3><?= t('form_anfrage_heading') ?></h3>
                            <p><?= t('form_anfrage_intro') ?>
                            </p>
                            <div class="col-12 text-center mt-3 mb-3 text-small">
                                <?= t('form_datenschutz_hinweis') ?>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label class="form-label"><strong><?= t('form_label_interessen') ?></strong></label>
                                    <textarea class="form-control" name="interesse" id="interesse" rows="2" readonly style="background-color: #f8f9fa; cursor: not-allowed;"></textarea>
                                </div>
                                
                                <!-- Honeypot-Spam-Schutz (unsichtbar für Menschen) -->
                                <input type="text" name="website" style="display:none !important; position:absolute; left:-9999px;" tabindex="-1" aria-hidden="true">

                                <div class="col-md-6">
                                    <select class="form-select form-control" id="organisation"
                                        name="unternehmen_organisation" aria-label="<?= htmlspecialchars(t('form_placeholder_organisation')) ?>">
                                        <option value="" disabled selected><?= t('form_placeholder_organisation') ?></option>
                                        <option value="Verein/Club"><?= t('form_opt_verein') ?></option>
                                        <option value="Gewerbliche Anlage"><?= t('form_opt_gewerblich') ?></option>
                                        <option value="Gemeinde"><?= t('form_opt_gemeinde') ?></option>
                                        <option value="Hotel/Tourismus"><?= t('form_opt_hotel') ?></option>
                                        <option value="Freizeitpark"><?= t('form_opt_freizeitpark') ?></option>
                                        <option value="Sonstiges"><?= t('form_opt_sonstiges') ?></option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="standort" name="city"
                                        placeholder="<?= htmlspecialchars(t('form_placeholder_standort')) ?>">
                                </div>

                                <div class="col-md-12">
                                    <input class="form-control" type="text" id="name" name="name"
                                        placeholder="<?= htmlspecialchars(t('form_placeholder_name')) ?>" required>
                                </div>
                                <div class="col-md-12">
                                    <input class="form-control" type="email" id="email" name="email"
                                        placeholder="<?= htmlspecialchars(t('form_placeholder_email')) ?>" required>
                                </div>
                                <div class="col-md-12">
                                    <input class="form-control" type="tel" id="tel" name="tel"
                                        placeholder="<?= htmlspecialchars(t('form_placeholder_tel')) ?>"
                                        pattern="^[\+]?[(]?[0-9]{1,4}[)]?[-\s\./0-9]*$" minlength="7"
                                        title="<?= htmlspecialchars(t('form_placeholder_tel')) ?>"
                                        required>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <textarea class="form-control" rows="2" id="nachricht" name="text"
                                        placeholder="<?= htmlspecialchars(t('form_placeholder_nachricht')) ?>"></textarea>
                                </div>
                                <div class="col-md-12  mt-2">
                                    <div class="custom-control custom-checkbox bg-color10" id="ds-text">
                                        <div class="check"><input type="checkbox" class="custom-control-input"
                                                id="datenschutz" value="1" required></div>
                                        <label class="custom-control-label" for="datenschutz"><?= t('form_datenschutz_checkbox') ?></label>
                                    </div>
                                </div>
                                <!-- Cloudflare Turnstile (Bot-Schutz), wird per JS explizit gerendert, sobald Schritt 2 sichtbar ist -->
                                <div class="col-md-12 mt-3">
                                    <div id="turnstile-widget" data-sitekey="0x4AAAAAAE_wbhBGQmqWFZoe" data-action="contact" data-language="<?= htmlspecialchars($lang ?? 'auto') ?>"></div>
                                    <p id="turnstile-hint" class="small text-danger text-center mt-2" style="display:none"><?= t('form_turnstile_wait') ?></p>
                                </div>
                                <div class="text-center mt-3">
                                    <button type="submit" id="send2" class="btn"><?= t('form_submit') ?></button>
                                </div>
                            </div>
                        </div>
                    </form>

                    <div id="form3">
                        <h3><?= t('form_success_heading') ?></h3>
                        <p><?= t('form_success_text') ?>
                            <br /><br />
                            <?= t('form_success_team') ?>

                        <div class="text-center mt-2"><img src="images/mail-icon.png" alt="E-Mail Icon"></div>
                    </div>
                    <div id="loading"><img src="/images/loading-circle.gif" alt="Laden"></div>
                </div>

                <div class="text-center foot">
                    <a href="#" id="back"> </a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>