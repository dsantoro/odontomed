<?php
    get_header();
?>

<section class="submenu">

    <div class="row">

        <div class="small-12 columns">

            <div class="row">

                <div class="small-12 medium-11 medium-centered large-10 large-centered column">

                    <div class="row">

                        <div class="small-12 medium-12 large-8 columns">

                            <ul class="submenu-items flex">

                                <li><a href="" data-title="aparelhos dentários"></a></li>
                                <li><a href="" data-title="implantes"></a></li>
                                <li><a href="" data-title="restaurações"></a></li>
                                <li><a href="" data-title="clareamento à laser"></a></li>
                                <li><a href="" data-title="tratamento canal"></a></li>
                                <li><a href="" data-title="periodontia"></a></li>
                                <li><a href="" data-title="extrações"></a></li>
                            </ul>
                        </div>

                        <div class="show-for-large large-4 columns">

                            <div class="agendar-consulta">

                                <div class="ac-title">
                                    <h3 alt="Agende uma">Consulta!</h3>
                                </div>

                                <form action="" class="ac-form">

                                    <input type="text" name="nome" placeholder="NOME">
                                    <input type="text" name="telefone" placeholder="TELEFONE">
                                    <select name="ac-tratamento">
                                        <option value="">TRATAMENTO</option>
                                        <option value="Aparelhos Dentários">Aparelhos Dentários</option>
                                        <option value="Implantes">Implantes</option>
                                        <option value="Restaurações">Restaurações</option>
                                        <option value="Clareamento à Laser">Clareamento à Laser</option>
                                        <option value="Tratamento Canal">Tratamento Canal</option>
                                        <option value="Periodontia">Periodontia</option>
                                        <option value="Extrações">Extrações</option>
                                    </select>

                                    <p>Como você deseja ser contatado:</p>

                                    <label class="custom-check">

                                        <input value="telefone" name="forma" type="radio"><span class="text-label">Telefone</span>
                                    </label>

                                    <label class="custom-check">

                                        <input value="email" name="forma" type="radio"><span class="text-label">E-mail</span>
                                    </label>

                                    <label class="custom-check">

                                        <input value="whatsapp" name="forma" type="radio"><span class="text-label">Whatsapp</span>
                                    </label>

                                    <button type="submit">Enviar</button>
                                </form>

                                <p class="text-center">Ou agende pelo telefone: <br />(51) 3216-3000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="home-main content">

    <div class="row">

        <div class="small-12 medium-9 medium-centered columns">

            <h2 class="title large-title text-center">Estrutura Moderna</h2>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut iaculis nibh, quis aliquet arcu. Nulla eu mauris et nisl varius placerat. Fusce a ipsum orci. Pellentesque vitae diam malesuada, sollicitudin metus sed, iaculis sem. Etiam quis maximus lectus, id iaculis turpis. Cras elementum bibendum velit, eu interdum sem porta nec.</p>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut iaculis nibh, quis aliquet arcu. Nulla eu mauris et nisl varius placerat. Fusce a ipsum orci. Pellentesque vitae diam malesuada, sollicitudin metus sed, iaculis sem. Etiam quis maximus lectus, id iaculis turpis. Cras elementum bibendum velit, eu interdum sem porta nec. <a href="">Saiba mais</a></p>
        </div>
    </div>
</section>

<section class="home-clinic content">

    <div class="row">

        <div class="small-12 columns">

            <div class="row">

                <div class="small-12 medium-11 medium-centered columns">

                    <div class="row flex">

                        <div class="small-12 medium-9 columns">

                            <h3 class="title medium-title text-right">Tenha a sua Odontomed</h3>
                            <p class="text-right">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut iaculis nibh, quis aliquet arcu. Nulla eu mauris et nisl varius placerat. Fusce a ipsum orci. Pellentesque vitae diam malesuada, sollicitudin metus sed, iaculis sem.</p>
                            <a href="" class="float-right">Saiba Mais</a>
                        </div>
                        <div class="show-for-large medium-3 columns" style="position: relative;">

                            <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/girl-clinic.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="home-treatments">

    <div class="row">

        <div class="small-12 medium-10 medium-centered columns">

            <div class="flex treatments">

                <div href="" class="each-treatment treatment-description">
                    <div class="curtain"></div>
                    <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/480x480.png" alt="">
                </div>
                <?php for($i = 1; $i <= 7; $i++) : ?>
                    <a href="" class="each-treatment">
                        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/480x480.png" alt="">
                        <div class="treatment-title flex">
                            <span class="treatment-icon"></span>
                            <h4>Tratamento<br />de Canal</h4>
                        </div>
                    </a>
                <?php endfor ?>
            </div>
        </div>
    </div>
</section>

<section class="home-blog">

    <div class="row">

        <div class="small-12 medium-10 medium-centered columns">

            <h4 class="title medium-title text-center">Confira nosso Blog</h4>

            <div class="row">

                <div class="small-12 medium-6 columns">

                    <a href="" class="each-home-post">

                        <h6 class="post-title">Novo Kit de lentes de aumento revoluciona cirurgias dentárias</h6>
                        <p>Donec eget massa ligula. Aenean ultricies ex ut lacus tincidunt elementum. Nullam sapien arcu, imperdiet eget turpis commodo, auctor bibendum nisi. Maecenas vitae... <span class="saiba-mais">Saiba mais</span></p>

                        <figure class="image is-16by9 crop-alike">
                            <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/640x360.png" alt="">
                        </figure>
                        <span class="post-date">14h42 - 21 de abril de 2018</span>
                    </a>
                </div>

                <div class="small-12 medium-6 columns">

                    <a href="" class="each-home-post">

                        <h6 class="post-title">Novo Kit de lentes de aumento revoluciona cirurgias dentárias</h6>
                        <p>Donec eget massa ligula. Aenean ultricies ex ut lacus tincidunt elementum. Nullam sapien arcu, imperdiet eget turpis commodo, auctor bibendum nisi. Maecenas vitae... <span class="saiba-mais">Saiba mais</span></p>

                        <figure class="image is-16by9 crop-alike">
                            <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/640x360.png" alt="">
                        </figure>
                        <span class="post-date">14h42 - 21 de abril de 2018</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
    get_footer();
?>