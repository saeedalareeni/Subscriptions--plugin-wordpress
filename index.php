<?php
/*
* Plugin Name: Subscriptoin wordpress plugin
* Description: This plugin allow you to create custom subscription product in your wordpress application
* Requires at least: 5.2
* Requires PHP: 7.2
* Author: Saeed al-areeni
* Author URI: https://github.com/saeedalareeni
* License: GPL v2 or later
* Update URI: https://example.com/my-plugin/
* Text Domain: subscriptoin-wordpress-plugin
*/

class SubscriptoinWordpress
{
    public function __construct()
    {
        add_shortcode("SubscriptoinPlugin", array($this, 'SubscriptoinPluginFun'));
        add_action('wp_enqueue_scripts', array($this, 'my_custom_script'));
    }


    public function SubscriptoinPluginFun()
    {
        ob_start();
?>
        <section class="start" id="start">
            <div class="container">
                <h2 class="section_title t_center">
                    <?php _e('اكتشف حلاً شاملاً لوردبريس معنا') ?>
                </h2>
                <p class="start_subtitle t_center">
                    <span class="better_than_hosting"><?php _e('ابدأ اليوم، ألغِ في أي وقت، بدون مخاطر') ?></span>
                </p>
                <div class="start_payment">
                    <div class="start_payment_input">
                        <input id="payment_input" type="checkbox" />
                        <label for="payment_input"></label>
                    </div>
                </div>
                <div class="start_sale"><?php _e('ضمان استعادة الأموال لمدة 14 يومًا') ?></div>
                <div class="start_wr_hero">
                    <div class="start_wr aos-init aos-animate" data-aos="zoom-in" data-aos-once="true" data-aos-duration="700">

                        <div class="start_wr_item start_wr_item_cost_starter">
                            <div class="start_wr_item_name plan_name"><?php _e('باقة إصلاحات سريعة وبسيطة') ?></div>
                            <div class="start_wr_item_cost">
                                <span class="many"><?php _e('$') ?></span>
                                <span class="plan_cost"><?php _e('207') ?></span> <br />
                                <span class="plan_data"><?php _e('شهري') ?></span>

                                <div class="limit-price save-month" style="">
                                    <?php _e('3 أشهر كحد أدنى') ?>
                                </div>
                                <div class="limit-price save-year" style="display: none">
                                    <?php _e(' وفر $') ?><span class="save-cost"><?php _e('0') ?></span>
                                </div>
                                <div class="plan_info">
                                    <?php _e(' مثالي لمواقع الويب التي تتطلب WordPress الاستباقي
                                    الصيانة والإصلاحات الصغيرة لموقع الويب، بدون تحديثات عاجلة.') ?>
                                </div>
                            </div>
                            <ul class="start_wr_item_ul">
                                <li class="start_wr_item_ul_hrs">
                                    <span><?php _e('7') ?></span> <?php _e('ساعات من وقت المطور.') ?>
                                    <span class="price_tooltip" data-tooltip="وقت الدعم المتاح خلال الفصل (3 أشهر) لأي نوع من المهام"><img src="https://test.sfa.com.sa/wp-content/uploads/2023/08/info.png" alt="" /></span>
                                </li>
                                <li>
                                    <?php _e('30 دولارًا للساعة الإضافية') ?>
                                    <span class="price_tooltip" data-tooltip="الساعات الإضافية فوق النطاق المدرج هي 30 دولارًا في الساعة وهي متاحة في غضون عام واحد"><img src="https://test.sfa.com.sa/wp-content/uploads/2023/08/info.png" alt="" /></span>
                                </li>
                                <li>
                                    <?php _e('تقدير المهام مجانا') ?>
                                    <span class="price_tooltip" data-tooltip="سنقوم بإجراء تقييم تفصيلي لجميع الأعمال اللازمة على موقعك ونزودك بقائمة من المعلومات."><img src="https://test.sfa.com.sa/wp-content/uploads/2023/08/info.png" alt="" /></span>
                                </li>
                                <li>
                                    <?php _e('3 منشورات مدونة صديقة لمحركات البحث') ?>
                                    <span class="price_tooltip" data-tooltip="سنقوم بإنشاء منشورات فريدة صديقة لمحركات البحث (SEO) وسننشرها على موقع الويب الخاص بك بمعدل 1 في الشهر."><img src="https://test.sfa.com.sa/wp-content/uploads/2023/08/info.png" alt="" /></span>
                                </li>
                                <li class="disable">
                                    <?php _e('تحديثات ووردبريس الأساسية') ?>
                                    <span class="price_tooltip" data-tooltip="يمكنك أن تطلب من فريقنا تحديث القالب أو المكون الإضافي الخاص بك بسهولة وأمان. سوف نهتم بهذا ونصلح أي أعطال محتملة من خلال ساعات العمل المتاحة للمطورين."><img src="https://test.sfa.com.sa/wp-content/uploads/2023/08/info.png" alt="" /></span>
                                </li>
                                <li class="disable">
                                    <?php _e(' تحديث سمة WordPress والمكونات الإضافية') ?>
                                    <span class="price_tooltip" data-tooltip="من المهم الحفاظ على تحديث المكونات الإضافية والموضوع الخاص بـ WordPress. سنهتم بالتحديثات نيابةً عنك ونختبر كل شيء حتى يعمل كل شيء على أكمل وجه."><img src="https://test.sfa.com.sa/wp-content/uploads/2023/08/info.png" alt="" /></span>
                                </li>
                                <li class="disable">
                                    <?php _e('دعم مواقع التجارة الإلكترونية أو التعلم الإلكتروني أو القوائم') ?>
                                    <span class="price_tooltip" data-tooltip="احصل على دعم متميز لأصحاب مواقع التجارة الإلكترونية أو LMS أو القوائم"><img src="https://test.sfa.com.sa/wp-content/uploads/2023/08/info.png" alt="" /></span>
                                </li>
                                <li>
                                    <?php _e('تحسين سرعة الموقع') ?>
                                    <span class="price_tooltip" data-tooltip="سنقوم بتحسين سرعة موقع الويب الخاص بك لتحقيق أقصى استفادة من خدمة الاستضافة وموقع الويب الخاص بك."><img src="https://test.sfa.com.sa/wp-content/uploads/2023/08/info.png" alt="" /></span>
                                </li>
                                <li>
                                    <?php _e('مراقبة الأمن في الوقت الحقيقي & amp؛ جدار الحماية') ?>
                                    <span class="price_tooltip" data-tooltip="مراقبة أمنية على مدار الساعة لحماية موقع الويب الخاص بك من البرامج الضارة وتهديدات الفيروسات"><img src="https://test.sfa.com.sa/wp-content/uploads/2023/08/info.png" alt="" /></span>
                                </li>
                                <li>
                                    <?php _e('المسح اليومي للبرامج الضارة') ?>
                                    <span class="price_tooltip" data-tooltip="سوف نقوم بفحص نظامك بشكل منتظم بحثًا عن البرامج الضارة وبرامج التجسس، ونخطرك على الفور."><img src="https://test.sfa.com.sa/wp-content/uploads/2023/08/info.png" alt="" /></span>
                                </li>
                                <li>
                                    <?php _e('تحسين الصور غير المحدودة') ?>
                                    <span class="price_tooltip" data-tooltip="تحسين الصور وضغطها وتغيير حجمها بشكل غير محدود."><img src="https://test.sfa.com.sa/wp-content/uploads/2023/08/info.png" alt="" /></span>
                                </li>
                                <li class="disable">
                                    <?php _e('تحويل غير محدود من PNG/JPG إلى WebP') ?>
                                    <span class="price_tooltip" data-tooltip="يعد WebP معيارًا جديدًا للصور نسبيًا من Google. يعمل تنسيق الصورة هذا على تسريع الموقع بأكمله وتحسينه بشكل كبير. لا يتعين عليك تحويلها يدويًا في كل مرة، فسنقوم بذلك نيابةً عنك."><img src="https://test.sfa.com.sa/wp-content/uploads/2023/08/info.png" alt="" /></span>
                                </li>
                                <li class="disable">
                                    <?php _e('التدقيق اليومي على الصفحة SEO') ?>
                                    <span class="price_tooltip" data-tooltip="سنقوم بمراجعة موقعك وتثبيت المكونات الإضافية التي ستساعد موقعك على التصنيف بشكل أفضل لدى محركات البحث."><img src="https://test.sfa.com.sa/wp-content/uploads/2023/08/info.png" alt="" /></span>
                                </li>
                                <li>
                                    <?php _e('النسخ الاحتياطية السحابية الأسبوعية') ?>
                                    <span class="price_tooltip" data-tooltip="نحن نقدم نسخة احتياطية أسبوعية من ملفاتك وقاعدة بياناتك على خادمنا البعيد الآمن لمزيد من راحة البال."><img src="https://test.sfa.com.sa/wp-content/uploads/2023/08/info.png" alt="" /></span>
                                </li>
                                <li>
                                    <?php _e('أرشيف النسخ الاحتياطي لمدة 30 يومًا') ?>
                                    <span class="price_tooltip" data-tooltip="سنقوم بتخزين النسخة الاحتياطية الخاصة بك لفترة زمنية معينة على خادمنا البعيد الآمن وبعد ذلك، سنقوم بتحديثها بنسخة احتياطية أكثر حداثة."><img src="https://test.sfa.com.sa/wp-content/uploads/2023/08/info.png" alt="" /></span>
                                </li>
                                <li>
                                    <?php _e('مراقبة وقت التشغيل على مدار 24 ساعة طوال أيام الأسبوع') ?>
                                    <span class="price_tooltip" data-tooltip="التوقف هو العدو. سنقوم بمراقبة موقعك وإعلامك في حالة تعطله حتى تتمكن من الاتصال بشركة الاستضافة الخاصة بك على الفور."><img src="https://test.sfa.com.sa/wp-content/uploads/2023/08/info.png" alt="" /></span>
                                </li>
                                <li class="disable">
                                    <?php _e('رفع مجاني للموقع') ?>
                                    <span class="price_tooltip" data-tooltip="يمكننا أن ننقل مرة واحدة في الشهر عملية نقل كاملة لموقع الويب الخاص بك من الاستضافة القديمة إلى الاستضافة الجديدة."><img src="https://test.sfa.com.sa/wp-content/uploads/2023/08/info.png" alt="" /></span>
                                </li>
                                <li class="disable">
                                    <?php _e('مدير حساب مخصص') ?>
                                    <span class="price_tooltip" data-tooltip="احصل على مدير حساب مخصص لمراقبة جميع طلباتنا والتعامل معها"><img src="https://test.sfa.com.sa/wp-content/uploads/2023/08/info.png" alt="" /></span>
                                </li>
                                <li class="disable">
                                    <?php _e('Zoom لمدة ساعة واحدة أو Google Meet أو مكالمة WhatsApp') ?>
                                    <span class="price_tooltip" data-tooltip="ستتمكن من الاتصال بنا والحصول على استشارة مؤهلة في الوقت الفعلي وحيث يمكنك الحصول على مساعدة سريعة في غضون ساعة."><img src="https://test.sfa.com.sa/wp-content/uploads/2023/08/info.png" alt="" /></span>
                                </li>
                                <li>
                                    <?php _e('دعم البريد الإلكتروني') ?>
                                    <span class="price_tooltip" data-tooltip="سنقوم بتخزين النسخة الاحتياطية الخاصة بك لفترة زمنية معينة على خادمنا البعيد الآمن وبعد ذلك سنقوم بتحديثها بنسخة احتياطية أكثر حداثة"><img src="https://test.sfa.com.sa/wp-content/uploads/2023/08/info.png" alt="" /></span>
                                </li>
                                <li>
                                    <?php _e('تحليلات الموقع') ?>
                                    <span class="price_tooltip" data-tooltip="ستتاح لك الفرصة للحصول على معلومات كاملة حول بيانات التتبع والمراجعة والإبلاغ لقياس نشاط الويب."><img src="https://test.sfa.com.sa/wp-content/uploads/2023/08/info.png" alt="" /></span>
                                </li>
                                <li>
                                    <?php _e('التقارير الاسبوعية') ?>
                                    <span class="price_tooltip" data-tooltip="سوف يحصل الأعضاء على مذكرة مفصلة حول الصيانة المستمرة التي نقوم بها على الموقع"><img src="https://test.sfa.com.sa/wp-content/uploads/2023/08/info.png" alt="" /></span>
                                </li>
                            </ul>


                            <div class="plan-optional-label"><?php _e('اختياري') ?></div>

                            <input type="hidden" class="plan-slug" value="start" />

                            <label class="plan-toggler-label">
                                <input type="checkbox" class="plan-toggler" value="1" />
                                <?php _e('استضافة WP المميزة') ?>
                                <span class="price_tooltip hosting_tooltip">
                                    <img src="https://test.sfa.com.sa/wp-content/uploads/2023/08/info.png" alt="" />
                                    <span class="tool-tip">
                                        <?php _e('1 وحدة المعالجة المركزية الافتراضية') ?><br />
                                        <?php _e('25 تخزين جيجابايت SSD') ?><br />
                                        <?php _e('1 غيغابايت من ذاكرة الوصول العشوائي المخصصة') ?><br />
                                        <?php _e(' 1 TB Bandwidth') ?><br />
                                        <?php _e('20k الزيارات الشهرية المقدرة') ?><br />
                                        <?php _e('10 مراكز البيانات الدولية') ?>
                                    </span>
                                </span>
                            </label>
                            <a href="/cart/?add-to-cart=2220" data-product-id="2220" class="start_wr_item_btn" data-wpel-link="internal">
                                <img src="https://test.sfa.com.sa/wp-content/uploads/2023/08/bascket.png" alt="Bascket" />
                                <?php _e('إشتراك') ?>
                            </a>
                        </div>

                        <div class="start_wr_item start_wr_item_cost_basic">
                            <div class="start_wr_item_name plan_name"><?php _e('Little fix') ?></div>
                            <div class="start_wr_item_cost">
                                <span class="many"><?php _e('$') ?></span>
                                <span class="plan_cost"><?php _e('207') ?></span> <br />
                                <span class="plan_data"><?php _e('quarterly') ?></span>

                                <div class="limit-price save-month" style="">
                                    <?php _e('3 months minimum') ?>
                                </div>
                                <div class="limit-price save-year" style="display: none">
                                    <?php _e(' Save $') ?><span class="save-cost"><?php _e('0') ?></span>
                                </div>
                                <div class="plan_info">
                                    <?php _e(' Perfect for websites that require proactive WordPress
                                    maintenance and small website repairs, with no urgent updates.') ?>
                                </div>
                            </div>
                            <ul class="start_wr_item_ul">
                                <li class="start_wr_item_ul_hrs">
                                    <span><?php _e('7') ?></span> <?php _e('developer hours included') ?>
                                    <span class="price_tooltip" data-tooltip="Available support time in quarter (3 months) for any kind of tasks"><img src="https://test.sfa.com.sa/wp-content/uploads/2023/08/info.png" alt="" /></span>
                                </li>
                                <li>
                                    <?php _e('30$ for Additional Hour') ?>
                                    <span class="price_tooltip" data-tooltip="Additional hrs over included range are $30/hr which are available within 1 year"><img src="https://test.sfa.com.sa/wp-content/uploads/2023/08/info.png" alt="" /></span>
                                </li>
                                <li>
                                    <?php _e('Free Tasks Estimation') ?>
                                    <span class="price_tooltip" data-tooltip="We will conduct a detailed evaluation of all the necessary work on your site and provide you with a list of information."><img src="https://test.sfa.com.sa/wp-content/uploads/2023/08/info.png" alt="" /></span>
                                </li>
                                <li>
                                    <?php _e('3 SEO-friendly blog posts') ?>
                                    <span class="price_tooltip" data-tooltip="We will create unique SEO-friendly posts and will publish them on your website by 1 in a month."><img src="https://test.sfa.com.sa/wp-content/uploads/2023/08/info.png" alt="" /></span>
                                </li>
                                <li class="disable">
                                    <?php _e('WordPress Core Updates') ?>
                                    <span class="price_tooltip" data-tooltip="You can ask our team to update your theme or plugin easily and safely. We will take care of this and fix any possible malfunctions with the available developer hours."><img src="https://test.sfa.com.sa/wp-content/uploads/2023/08/info.png" alt="" /></span>
                                </li>
                                <li class="disable">
                                    <?php _e(' WordPress Theme and Plugins Update') ?>
                                    <span class="price_tooltip" data-tooltip="It is important to keep your WordPress plugins and theme up to date. We will take care of the updates for you and test everything so that everything works perfectly."><img src="https://test.sfa.com.sa/wp-content/uploads/2023/08/info.png" alt="" /></span>
                                </li>
                                <li class="disable">
                                    <?php _e('Support for eCommerce, E-learning or Listings websites') ?>
                                    <span class="price_tooltip" data-tooltip="Get premium support for E-commerce, LMS or Listings website owners"><img src="https://test.sfa.com.sa/wp-content/uploads/2023/08/info.png" alt="" /></span>
                                </li>
                                <li>
                                    <?php _e('Website Speed Optimization') ?>
                                    <span class="price_tooltip" data-tooltip="We will optimize your website speed in order to get the most out of your hosting service and your website."><img src="https://test.sfa.com.sa/wp-content/uploads/2023/08/info.png" alt="" /></span>
                                </li>
                                <li>
                                    <?php _e('Real-Time Security Monitoring &amp; Firewall') ?>
                                    <span class="price_tooltip" data-tooltip="Round-the-clock security surveillance to protect your website from malware and virus threats"><img src="https://test.sfa.com.sa/wp-content/uploads/2023/08/info.png" alt="" /></span>
                                </li>
                                <li>
                                    <?php _e('Daily Malware Scanning') ?>
                                    <span class="price_tooltip" data-tooltip="We will regularly check your system for malware and spyware, and notify you in immediately."><img src="https://test.sfa.com.sa/wp-content/uploads/2023/08/info.png" alt="" /></span>
                                </li>
                                <li>
                                    <?php _e('Unlimited Images Optimization') ?>
                                    <span class="price_tooltip" data-tooltip="Bulk optimize, compress, and resize unlimited images."><img src="https://test.sfa.com.sa/wp-content/uploads/2023/08/info.png" alt="" /></span>
                                </li>
                                <li class="disable">
                                    <?php _e('Unlimited PNG/JPG to WebP conversion') ?>
                                    <span class="price_tooltip" data-tooltip="WebP is a relatively new image standard from Google. This image format greatly speeds up and optimizes the entire site. You don't have to manually convert them every time, we will do it for you."><img src="https://test.sfa.com.sa/wp-content/uploads/2023/08/info.png" alt="" /></span>
                                </li>
                                <li class="disable">
                                    <?php _e('Daily On Page SEO Audit') ?>
                                    <span class="price_tooltip" data-tooltip="We will review your site and install plugins that will help your site rank better with search engines."><img src="https://test.sfa.com.sa/wp-content/uploads/2023/08/info.png" alt="" /></span>
                                </li>
                                <li>
                                    <?php _e('Weekly Cloud Backups') ?>
                                    <span class="price_tooltip" data-tooltip="We provide a weekly backup of your files and database on our secure remote server for extra peace of mind."><img src="https://test.sfa.com.sa/wp-content/uploads/2023/08/info.png" alt="" /></span>
                                </li>
                                <li>
                                    <?php _e('30-days Backup Archive') ?>
                                    <span class="price_tooltip" data-tooltip="We will store your backup for a certain period of time on our secure remote server and after this, we will update it with a more fresh backup."><img src="https://test.sfa.com.sa/wp-content/uploads/2023/08/info.png" alt="" /></span>
                                </li>
                                <li>
                                    <?php _e('24/7 Uptime Monitoring') ?>
                                    <span class="price_tooltip" data-tooltip="Downtime is the enemy. We will monitor your site and notify you if it is down so that you can immediately contact your hosting company."><img src="https://test.sfa.com.sa/wp-content/uploads/2023/08/info.png" alt="" /></span>
                                </li>
                                <li class="disable">
                                    <?php _e('Free Website Migration') ?>
                                    <span class="price_tooltip" data-tooltip="We can move once a month a complete transfer of your website from the old hosting to the new one."><img src="https://test.sfa.com.sa/wp-content/uploads/2023/08/info.png" alt="" /></span>
                                </li>
                                <li class="disable">
                                    <?php _e('Dedicated Account Manager') ?>
                                    <span class="price_tooltip" data-tooltip="Get a dedicated account manager to monitor and handle all our requests"><img src="https://test.sfa.com.sa/wp-content/uploads/2023/08/info.png" alt="" /></span>
                                </li>
                                <li class="disable">
                                    <?php _e('1 hour Zoom, Google Meet, or WhatsApp Call') ?>
                                    <span class="price_tooltip" data-tooltip="You will be able to contact us and get a qualified consultation in real-time and where you can get quick help within an hour."><img src="https://test.sfa.com.sa/wp-content/uploads/2023/08/info.png" alt="" /></span>
                                </li>
                                <li>
                                    <?php _e('Email Support') ?>
                                    <span class="price_tooltip" data-tooltip="We will store your backup for a certain period of time our secure remote server and after this we will update it with a more fresh backup"><img src="https://test.sfa.com.sa/wp-content/uploads/2023/08/info.png" alt="" /></span>
                                </li>
                                <li>
                                    <?php _e('Website Analytics') ?>
                                    <span class="price_tooltip" data-tooltip="You will have the opportunity to get full information about tracking, reviewing and reporting data to measure web activity."><img src="https://test.sfa.com.sa/wp-content/uploads/2023/08/info.png" alt="" /></span>
                                </li>
                                <li>
                                    <?php _e('Weekly Reports') ?>
                                    <span class="price_tooltip" data-tooltip="Members will get detailed note on ongoing maintenance we perform on the website"><img src="https://test.sfa.com.sa/wp-content/uploads/2023/08/info.png" alt="" /></span>
                                </li>
                            </ul>


                            <div class="plan-optional-label"><?php _e('Optional') ?></div>

                            <input type="hidden" class="plan-slug" value="start" />

                            <label class="plan-toggler-label">
                                <input type="checkbox" class="plan-toggler" value="1" />
                                <?php _e('WP Premium Hosting') ?>
                                <span class="price_tooltip hosting_tooltip">
                                    <img src="https://test.sfa.com.sa/wp-content/uploads/2023/08/info.png" alt="" />
                                    <span class="tool-tip">
                                        <?php _e('1 vCPU') ?><br />
                                        <?php _e('25 GB SSD Storage') ?><br />
                                        <?php _e('1 GB Dedicated RAM') ?><br />
                                        <?php _e(' 1 TB Bandwidth') ?><br />
                                        <?php _e('20k Estimated Monthly Visits') ?><br />
                                        <?php _e('10 International Data Centers') ?>
                                    </span>
                                </span>
                            </label>
                            <a href="/cart/?add-to-cart=2220" data-product-id="2220" class="start_wr_item_btn" data-wpel-link="internal">
                                <img src="https://test.sfa.com.sa/wp-content/uploads/2023/08/bascket.png" alt="Bascket" />
                                <?php _e('Subscribe') ?>
                            </a>
                        </div>

                        <div class="start_wr_item start_wr_item_cost_professional">
                            <div class="start_wr_item_name plan_name"><?php _e('Little fix') ?></div>
                            <div class="start_wr_item_cost">
                                <span class="many"><?php _e('$') ?></span>
                                <span class="plan_cost"><?php _e('207') ?></span> <br />
                                <span class="plan_data"><?php _e('quarterly') ?></span>

                                <div class="limit-price save-month" style="">
                                    <?php _e('3 months minimum') ?>
                                </div>
                                <div class="limit-price save-year" style="display: none">
                                    <?php _e(' Save $') ?><span class="save-cost"><?php _e('0') ?></span>
                                </div>
                                <div class="plan_info">
                                    <?php _e(' Perfect for websites that require proactive WordPress
                                    maintenance and small website repairs, with no urgent updates.') ?>
                                </div>
                            </div>
                            <ul class="start_wr_item_ul">
                                <li class="start_wr_item_ul_hrs">
                                    <span><?php _e('7') ?></span> <?php _e('developer hours included') ?>
                                    <span class="price_tooltip" data-tooltip="Available support time in quarter (3 months) for any kind of tasks"><img src="https://test.sfa.com.sa/wp-content/uploads/2023/08/info.png" alt="" /></span>
                                </li>
                                <li>
                                    <?php _e('30$ for Additional Hour') ?>
                                    <span class="price_tooltip" data-tooltip="Additional hrs over included range are $30/hr which are available within 1 year"><img src="https://test.sfa.com.sa/wp-content/uploads/2023/08/info.png" alt="" /></span>
                                </li>
                                <li>
                                    <?php _e('Free Tasks Estimation') ?>
                                    <span class="price_tooltip" data-tooltip="We will conduct a detailed evaluation of all the necessary work on your site and provide you with a list of information."><img src="https://test.sfa.com.sa/wp-content/uploads/2023/08/info.png" alt="" /></span>
                                </li>
                                <li>
                                    <?php _e('3 SEO-friendly blog posts') ?>
                                    <span class="price_tooltip" data-tooltip="We will create unique SEO-friendly posts and will publish them on your website by 1 in a month."><img src="https://test.sfa.com.sa/wp-content/uploads/2023/08/info.png" alt="" /></span>
                                </li>
                                <li class="disable">
                                    <?php _e('WordPress Core Updates') ?>
                                    <span class="price_tooltip" data-tooltip="You can ask our team to update your theme or plugin easily and safely. We will take care of this and fix any possible malfunctions with the available developer hours."><img src="https://test.sfa.com.sa/wp-content/uploads/2023/08/info.png" alt="" /></span>
                                </li>
                                <li class="disable">
                                    <?php _e(' WordPress Theme and Plugins Update') ?>
                                    <span class="price_tooltip" data-tooltip="It is important to keep your WordPress plugins and theme up to date. We will take care of the updates for you and test everything so that everything works perfectly."><img src="https://test.sfa.com.sa/wp-content/uploads/2023/08/info.png" alt="" /></span>
                                </li>
                                <li class="disable">
                                    <?php _e('Support for eCommerce, E-learning or Listings websites') ?>
                                    <span class="price_tooltip" data-tooltip="Get premium support for E-commerce, LMS or Listings website owners"><img src="https://test.sfa.com.sa/wp-content/uploads/2023/08/info.png" alt="" /></span>
                                </li>
                                <li>
                                    <?php _e('Website Speed Optimization') ?>
                                    <span class="price_tooltip" data-tooltip="We will optimize your website speed in order to get the most out of your hosting service and your website."><img src="https://test.sfa.com.sa/wp-content/uploads/2023/08/info.png" alt="" /></span>
                                </li>
                                <li>
                                    <?php _e('Real-Time Security Monitoring &amp; Firewall') ?>
                                    <span class="price_tooltip" data-tooltip="Round-the-clock security surveillance to protect your website from malware and virus threats"><img src="https://test.sfa.com.sa/wp-content/uploads/2023/08/info.png" alt="" /></span>
                                </li>
                                <li>
                                    <?php _e('Daily Malware Scanning') ?>
                                    <span class="price_tooltip" data-tooltip="We will regularly check your system for malware and spyware, and notify you in immediately."><img src="https://test.sfa.com.sa/wp-content/uploads/2023/08/info.png" alt="" /></span>
                                </li>
                                <li>
                                    <?php _e('Unlimited Images Optimization') ?>
                                    <span class="price_tooltip" data-tooltip="Bulk optimize, compress, and resize unlimited images."><img src="https://test.sfa.com.sa/wp-content/uploads/2023/08/info.png" alt="" /></span>
                                </li>
                                <li class="disable">
                                    <?php _e('Unlimited PNG/JPG to WebP conversion') ?>
                                    <span class="price_tooltip" data-tooltip="WebP is a relatively new image standard from Google. This image format greatly speeds up and optimizes the entire site. You don't have to manually convert them every time, we will do it for you."><img src="https://test.sfa.com.sa/wp-content/uploads/2023/08/info.png" alt="" /></span>
                                </li>
                                <li class="disable">
                                    <?php _e('Daily On Page SEO Audit') ?>
                                    <span class="price_tooltip" data-tooltip="We will review your site and install plugins that will help your site rank better with search engines."><img src="https://test.sfa.com.sa/wp-content/uploads/2023/08/info.png" alt="" /></span>
                                </li>
                                <li>
                                    <?php _e('Weekly Cloud Backups') ?>
                                    <span class="price_tooltip" data-tooltip="We provide a weekly backup of your files and database on our secure remote server for extra peace of mind."><img src="https://test.sfa.com.sa/wp-content/uploads/2023/08/info.png" alt="" /></span>
                                </li>
                                <li>
                                    <?php _e('30-days Backup Archive') ?>
                                    <span class="price_tooltip" data-tooltip="We will store your backup for a certain period of time on our secure remote server and after this, we will update it with a more fresh backup."><img src="https://test.sfa.com.sa/wp-content/uploads/2023/08/info.png" alt="" /></span>
                                </li>
                                <li>
                                    <?php _e('24/7 Uptime Monitoring') ?>
                                    <span class="price_tooltip" data-tooltip="Downtime is the enemy. We will monitor your site and notify you if it is down so that you can immediately contact your hosting company."><img src="https://test.sfa.com.sa/wp-content/uploads/2023/08/info.png" alt="" /></span>
                                </li>
                                <li class="disable">
                                    <?php _e('Free Website Migration') ?>
                                    <span class="price_tooltip" data-tooltip="We can move once a month a complete transfer of your website from the old hosting to the new one."><img src="https://test.sfa.com.sa/wp-content/uploads/2023/08/info.png" alt="" /></span>
                                </li>
                                <li class="disable">
                                    <?php _e('Dedicated Account Manager') ?>
                                    <span class="price_tooltip" data-tooltip="Get a dedicated account manager to monitor and handle all our requests"><img src="https://test.sfa.com.sa/wp-content/uploads/2023/08/info.png" alt="" /></span>
                                </li>
                                <li class="disable">
                                    <?php _e('1 hour Zoom, Google Meet, or WhatsApp Call') ?>
                                    <span class="price_tooltip" data-tooltip="You will be able to contact us and get a qualified consultation in real-time and where you can get quick help within an hour."><img src="https://test.sfa.com.sa/wp-content/uploads/2023/08/info.png" alt="" /></span>
                                </li>
                                <li>
                                    <?php _e('Email Support') ?>
                                    <span class="price_tooltip" data-tooltip="We will store your backup for a certain period of time our secure remote server and after this we will update it with a more fresh backup"><img src="https://test.sfa.com.sa/wp-content/uploads/2023/08/info.png" alt="" /></span>
                                </li>
                                <li>
                                    <?php _e('Website Analytics') ?>
                                    <span class="price_tooltip" data-tooltip="You will have the opportunity to get full information about tracking, reviewing and reporting data to measure web activity."><img src="https://test.sfa.com.sa/wp-content/uploads/2023/08/info.png" alt="" /></span>
                                </li>
                                <li>
                                    <?php _e('Weekly Reports') ?>
                                    <span class="price_tooltip" data-tooltip="Members will get detailed note on ongoing maintenance we perform on the website"><img src="https://test.sfa.com.sa/wp-content/uploads/2023/08/info.png" alt="" /></span>
                                </li>
                            </ul>


                            <div class="plan-optional-label"><?php _e('Optional') ?></div>

                            <input type="hidden" class="plan-slug" value="start" />

                            <label class="plan-toggler-label">
                                <input type="checkbox" class="plan-toggler" value="1" />
                                <?php _e('WP Premium Hosting') ?>
                                <span class="price_tooltip hosting_tooltip">
                                    <img src="https://test.sfa.com.sa/wp-content/uploads/2023/08/info.png" alt="" />
                                    <span class="tool-tip">
                                        <?php _e('1 vCPU') ?><br />
                                        <?php _e('25 GB SSD Storage') ?><br />
                                        <?php _e('1 GB Dedicated RAM') ?><br />
                                        <?php _e(' 1 TB Bandwidth') ?><br />
                                        <?php _e('20k Estimated Monthly Visits') ?><br />
                                        <?php _e('10 International Data Centers') ?>
                                    </span>
                                </span>
                            </label>
                            <a href="/cart/?add-to-cart=2220" data-product-id="2220" class="start_wr_item_btn" data-wpel-link="internal">
                                <img src="https://test.sfa.com.sa/wp-content/uploads/2023/08/bascket.png" alt="Bascket" />
                                <?php _e('Subscribe') ?>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="one-time__offer">
                    <?php _e('Not ready to sign up to a quarterly package? We get it.<br />
                    Order a one-off job starting from $35') ?>
                    <a href="#" data-wpel-link="internal"><?php _e('here') ?></a>
                    <?php _e(' and discover what we can do for you.') ?>
                </div>
            </div>
        </section>

<?php
        return ob_get_clean();
    }

    public function my_custom_script()
    {
        wp_enqueue_script('saeed-subscriptoin-js', plugins_url('/asset/main.js', __FILE__), array('jquery'), '1.0', true);

        // The plugin url in for get the plugin url
        wp_enqueue_style('saeed-subscriptoin-css', plugins_url('/asset/style.css', __FILE__));
    }
}

new SubscriptoinWordpress;
