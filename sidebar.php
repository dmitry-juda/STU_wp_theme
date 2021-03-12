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
                            <div class="right_block_news-item">
                                <div class="news-item_date">13.01.2102</div>
                                <a href="news.html">текст вашей новости, текст вашей новости, текст вашей новости</a>
                            </div>
                            <div class="right_block_news-item">
                                <div class="news-item_date">13.01.2102</div>
                                <a href="news.html">текст вашей новости, текст вашей новости, текст вашей новости</a>
                            </div>
                            <div class="right_block_news-item">
                                <div class="news-item_date">13.01.2102</div>
                                <a href="news.html">текст вашей новости, текст вашей новости, текст вашей новости</a>
                            </div>
                            <div class="right_block_news-item">
                                <div class="news-item_date">13.01.2102</div>
                                <a href="news.html">текст вашей новости, текст вашей новости, текст вашей новости</a>
                            </div>
                            <div class="right_block_news-item">
                                <div class="news-item_date">13.01.2102</div>
                                <a href="news.html">текст вашей новости, текст вашей новости, текст вашей новости</a>
                            </div>
                        </div>
                        <div class="content_right_block">
                            <h3>Контакты</h3>
                            <p>241035 г. Нижний Новгород, ул. Протасова, 1, 2-й этаж, офис 9 </p>
                            <p>+7 (383) 325-39-32</p>
                            <a href="mailto:mail@1c-bryansk.ru">mail@1c-bryansk.ru</a>
                            <br/><br/>
                            <h5>Как нас найти:</h5>
                            <iframe width="240" height="240" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=ru&amp;geocode=&amp;q=%D1%83%D0%BB%D0%B8%D1%86%D0%B0+%D0%9F%D1%80%D0%BE%D1%82%D0%B0%D1%81%D0%BE%D0%B2%D0%B0,+1,+%D0%91%D1%80%D1%8F%D0%BD%D1%81%D0%BA,+%D0%91%D1%80%D1%8F%D0%BD%D1%81%D0%BA%D0%B0%D1%8F+%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C,+%D0%A0%D0%BE%D1%81%D1%81%D0%B8%D1%8F&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=60.806372,135.263672&amp;t=m&amp;ie=UTF8&amp;hq=&amp;hnear=%D1%83%D0%BB.+%D0%9F%D1%80%D0%BE%D1%82%D0%B0%D1%81%D0%BE%D0%B2%D0%B0,+1,+%D0%91%D1%80%D1%8F%D0%BD%D1%81%D0%BA,+%D0%B3%D0%BE%D1%80%D0%BE%D0%B4+%D0%91%D1%80%D1%8F%D0%BD%D1%81%D0%BA,+%D0%91%D1%80%D1%8F%D0%BD%D1%81%D0%BA%D0%B0%D1%8F+%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C,+%D0%A0%D0%BE%D1%81%D1%81%D0%B8%D1%8F&amp;ll=53.298613,34.313532&amp;spn=0.00285,0.008256&amp;z=14&amp;output=embed"></iframe><!--<br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=ru&amp;geocode=&amp;q=%D1%83%D0%BB%D0%B8%D1%86%D0%B0+%D0%9F%D1%80%D0%BE%D1%82%D0%B0%D1%81%D0%BE%D0%B2%D0%B0,+1,+%D0%91%D1%80%D1%8F%D0%BD%D1%81%D0%BA,+%D0%91%D1%80%D1%8F%D0%BD%D1%81%D0%BA%D0%B0%D1%8F+%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C,+%D0%A0%D0%BE%D1%81%D1%81%D0%B8%D1%8F&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=60.806372,135.263672&amp;t=m&amp;ie=UTF8&amp;hq=&amp;hnear=%D1%83%D0%BB.+%D0%9F%D1%80%D0%BE%D1%82%D0%B0%D1%81%D0%BE%D0%B2%D0%B0,+1,+%D0%91%D1%80%D1%8F%D0%BD%D1%81%D0%BA,+%D0%B3%D0%BE%D1%80%D0%BE%D0%B4+%D0%91%D1%80%D1%8F%D0%BD%D1%81%D0%BA,+%D0%91%D1%80%D1%8F%D0%BD%D1%81%D0%BA%D0%B0%D1%8F+%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C,+%D0%A0%D0%BE%D1%81%D1%81%D0%B8%D1%8F&amp;ll=53.298613,34.313532&amp;spn=0.00285,0.008256&amp;z=14" style="color:#0000FF;text-align:left">Просмотреть увеличенную карту</a></small>-->
                        </div>
                    </td>