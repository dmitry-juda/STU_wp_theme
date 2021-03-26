<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package STU
 */

//if ( ! is_active_sidebar( 'sidebar-1' ) ) {
//	return;
//}
?>

<!--
<aside id="secondary" class="widget-area">
	<?php //dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->

<td class="content_right">
                        <div class="content_right_block">
                            <h3>Новости</h3>
                            <?
                            include_once('classes/simple_html_dom.php');

                            $htmlDL = file_get_contents('https://1cbo.ru/o_kompanii/novosti_i_aktsii/');
                            $html = str_get_html($htmlDL);
                            $i = 0;
                            // Находите информацию по селектору CSS 
                            foreach($html->find('div.feedback-item-content') as $article) {
                                // парсите результат и закидываете в массив
                                if($i==5) {
                                    break;
                                } 
                                else {
                                    $i = $i + 1;
                                    $item['title']     = $article->find('a', 0)->plaintext;
                                    $item['link']     = $article->find('a', 0)->attr['href'];
                                    $item['articleDate']      = $article->find('div.feedback-item-date', 0)->plaintext;                                    
                                    ?>
                                    <div class="right_block_news-item">
                                        <div class="news-item_date"><? echo $item['articleDate']; ?></div>
                                        <a href="https://1cbo.ru<? echo $item['link']; ?>" target="_blank"><? echo $item['title']; ?></a>
                                    </div>
                                    <?
                                }
                            }

                            //print_r($articles);
                            ?>
                            <!--
                            <div class="right_block_news-item">
                                <div class="news-item_date">13.01.2102</div>
                                <a href="news.html">текст вашей новости, текст вашей новости, текст вашей новости</a>
                            </div>
                            -->
                        </div>
                        <div class="content_right_block">
                            <h3>Контакты</h3>
                            <p>	
                                <?php //echo "adress"; ?>
                                Город Краснодар, улица Калинина 327, офис 403
                            </p>
                            <p>
                                <?php //echo "phone number"; ?>

                                8 (861) 279 00-72
                            </p>
                            <a href="mailto:sva@mtmb.ru">
                                <?php //"email here"; ?>
                                E-mail?
                            </a>
                            <br/><br/>
                            <h5>Как нас найти:</h5>
                            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A9b9184c46cdd8d8ed89e91d16cdd2463056751e3057788ac8dcbe229a849b19d&amp;source=constructor" width="320" height="240" frameborder="0"></iframe></div> 
                    </td>