<?php

/**
 * Settings Lexicon Entries
 * Sorted by key, alphabetically
 *
 * @package minishop2
 * @subpackage lexicon
 */

$_lang['area_ms2_cart'] = 'Panier';
$_lang['area_ms2_category'] = 'Catégorie d\'article';
$_lang['area_ms2_frontend'] = 'Frontal web';
$_lang['area_ms2_gallery'] = 'Gallerie';
$_lang['area_ms2_main'] = 'Основные настройки';
$_lang['area_ms2_order'] = 'Commande';
$_lang['area_ms2_payment'] = 'Payments';
$_lang['area_ms2_product'] = 'Article';
$_lang['area_ms2_statuses'] = 'États';
$_lang['ms2_source_imageNameType_desc'] = 'Этот параметр указывает, как нужно переименовать файл при загрузке. Hash - это генерация уникального имени, в зависимости от содержимого файла. Friendly - генерация имени по алгоритму дружественных url страниц сайта (они управляются системными настройками).';
$_lang['ms2_source_maxUploadHeight_desc'] = 'Максимальная высота изображения для загрузки. Всё, что больше, будет ужато до этого значения.';
$_lang['ms2_source_maxUploadSize_desc'] = 'Максимальный размер загружаемых изображений (в байтах).';
$_lang['ms2_source_maxUploadWidth_desc'] = 'Максимальная ширина изображения для загрузки. Всё, что больше, будет ужато до этого значения.';
$_lang['ms2_source_thumbnails_desc'] = 'JSON encoded array of options for generating thumbnails.';
$_lang['setting_mgr_tree_icon_mscategory'] = 'Иконка категории';
$_lang['setting_mgr_tree_icon_mscategory_desc'] = 'Иконка категории товаров miniShop2 в дереве ресурсов';
$_lang['setting_mgr_tree_icon_msproduct'] = 'Иконка товара';
$_lang['setting_mgr_tree_icon_msproduct_desc'] = 'Иконка товара miniShop2 в дереве ресурсов';
$_lang['setting_ms2_cart_context'] = 'Utiliser un même panier pour tous les contextes?';
$_lang['setting_ms2_cart_context_desc'] = 'S\'il est activé, un panier commun est utilisé pour tous les contextes. Si elle est désactivée, chaque contexte utilise son propre panier.';
$_lang['setting_ms2_cart_handler_class'] = 'Classe du gestionnaire de panier';
$_lang['setting_ms2_cart_handler_class_desc'] = 'The name of the class that implements the logic of a cart.';
$_lang['setting_ms2_cart_js_class_name'] = 'Название JS класса управления корзиной';
$_lang['setting_ms2_cart_js_class_name_desc'] = 'класс должен быть экспортирован по умолчанию';
$_lang['setting_ms2_cart_js_class_path'] = 'Путь к JS управления корзиной';
$_lang['setting_ms2_cart_js_class_path_desc'] = 'Путь указывается относительно папки assets/components/minishop2/js/web/modules';
$_lang['setting_ms2_cart_max_count'] = 'Максимальное количество товаров в корзине';
$_lang['setting_ms2_cart_max_count_desc'] = 'По умолчанию 1000. При превышении этого значения будет выведено уведомление.';
$_lang['setting_ms2_cart_product_key_fields'] = 'Список полей для ключа товара в корзине';
$_lang['setting_ms2_cart_product_key_fields_desc'] = 'Список полей товара через запятую, на основании которых формируется ключ товара в корзине';
$_lang['setting_ms2_category_content_default'] = 'Содержимое категории по умолчанию';
$_lang['setting_ms2_category_content_default_desc'] = 'Здесь вы можете указать контент вновь создаваемой категории. По умолчанию установлен вывод дочерних товаров.';
$_lang['setting_ms2_category_grid_fields'] = 'Champs de la tableau d\'articles';
$_lang['setting_ms2_category_grid_fields_desc'] = 'Liste, séparée par des virgules, des champs visibles du tableau des articles dans la catégorie.';
$_lang['setting_ms2_category_id_as_alias'] = 'ID категории как псевдоним';
$_lang['setting_ms2_category_id_as_alias_desc'] = 'Если включено, псевдонимы для дружественных имён категорий не будут генерироваться. Вместо этого будут подставляться их ID.';
$_lang['setting_ms2_category_remember_grid'] = 'Запоминание таблицы категории';
$_lang['setting_ms2_category_remember_grid_desc'] = 'Если включено, состояние таблицы категории будет запоминаться и восстанавливаться при загрузке страницы, включая номер страницы и строку поиска.';
$_lang['setting_ms2_category_remember_tabs'] = 'Запоминание вкладки категории';
$_lang['setting_ms2_category_remember_tabs_desc'] = 'Если включено, активная вкладка панели категории будет запоминаться и восстанавливаться при загрузке страницы.';
$_lang['setting_ms2_category_show_comments'] = 'Afficher les commentaires de la catégorie';
$_lang['setting_ms2_category_show_comments_desc'] = 'Afficher les commentaires de tous les articles de la catégories si le composant "Tickets" est installé.';
$_lang['setting_ms2_category_show_nested_products'] = 'Montrez le article inclus dans la catégorie';
$_lang['setting_ms2_category_show_nested_products_desc'] = 'Si vrai, vous verrez tous les article inclus dans la catégorie. Ils auront une autre couleur et le nom de leur catégorie apparaitra sous "pagetitle".';
$_lang['setting_ms2_category_show_options'] = 'Показывать опции товаров категории';
$_lang['setting_ms2_category_show_options_desc'] = 'Показывать опции к товарам категории.';
$_lang['setting_ms2_chunks_categories'] = 'Категории для списка чанков';
$_lang['setting_ms2_chunks_categories_desc'] = 'Список ID категорий через запятую для списка чанков.';
$_lang['setting_ms2_date_format'] = 'Format des dates';
$_lang['setting_ms2_date_format_desc'] = 'You can specify how to format miniShop2 dates using php strftime() syntax. By default format is "%d.%m.%y %H:%M".';
$_lang['setting_ms2_email_manager'] = 'Managers mailboxes';
$_lang['setting_ms2_email_manager_desc'] = 'Comma-separated list of mailboxes of managers, for sending notifications about changes of the status of the order';
$_lang['setting_ms2_frontend_css'] = 'Styles du frontal web';
$_lang['setting_ms2_frontend_css_desc'] = 'Path to file with styles of the shop. If you want to use your own styles - specify them here, or clean this parameter and load them in site template.';
$_lang['setting_ms2_frontend_js'] = 'Scripts du frontal web';
$_lang['setting_ms2_frontend_js_desc'] = 'Path to file with scripts of the shop. If you want to use your own sscripts - specify them here, or clean this parameter and load them in site template.';
$_lang['setting_ms2_frontend_message_css'] = 'Стили библиотеки уведомлений';
$_lang['setting_ms2_frontend_message_css_desc'] = 'Путь к CSS файлу вашей библиотеки уведомлений. По умолчанию к jgrowl. <br>Если вы хотите использовать собственную библиотеку - укажите путь к ее css каталогу здесь, или очистите параметр и загрузите их вручную через шаблон сайта.';
$_lang['setting_ms2_frontend_message_js'] = 'Скрипты библиотеки уведомлений';
$_lang['setting_ms2_frontend_message_js_desc'] = 'Путь к JS файлу вашей библиотеки уведомлений. По умолчанию к jgrowl. <br>Если вы хотите использовать собственную библиотеку - укажите путь к ее JS каталогу здесь, или очистите параметр и загрузите их вручную через шаблон сайта.';
$_lang['setting_ms2_frontend_message_js_settings'] = 'Настройки библиотеки уведомлений';
$_lang['setting_ms2_frontend_message_js_settings_desc'] = 'Путь к файлу с реализацией шаблона уведомлений на основе вашей библиотеки. <br>По умолчанию к настройкам jgrowl. <br>Если вы хотите использовать собственную библиотеку - укажите путь к ее настройкам здесь, или очистите параметр и загрузите их вручную через шаблон сайта.';
$_lang['setting_ms2_frontend_notify_js_settings'] = 'Настройки уведомлений для новой версии скриптов';
$_lang['setting_ms2_frontend_notify_js_settings_desc'] = 'Путь к файлу с настройками. Обратите внимание, файл должен быть в формате JSON';
$_lang['setting_ms2_notify_js_class_name'] = 'Название JS класса для показа уведомлений';
$_lang['setting_ms2_notify_js_class_name_desc'] = 'Класс должен быть экспортирован по умолчанию';
$_lang['setting_ms2_notify_js_class_path'] = 'Путь к JS классу для показа уведомлений';
$_lang['setting_ms2_notify_js_class_path_desc'] = 'Путь указывается относительно папки assets/components/minishop2/js/web/modules';
$_lang['setting_ms2_order_address_fields'] = 'Поля адреса доставки';
$_lang['setting_ms2_order_address_fields_desc'] = 'Список полей доставки, которые будут показаны на третьей вкладке карточки заказа. Доступны: "receiver,phone,email,index,country,region,city,metro,street,building,entrance,floor,room,comment,text_address". Если параметр пуст, вкладка будет скрыта.';
$_lang['setting_ms2_order_format_num'] = 'Формат нумерации заказа';
$_lang['setting_ms2_order_format_num_desc'] = 'Формат нумерации заказа. Доступные значения в формате PHP strftime()';
$_lang['setting_ms2_order_format_num_separator'] = 'Разделитель для нумерации заказа';
$_lang['setting_ms2_order_format_num_separator_desc'] = 'Разделитель для нумерации заказа. Доступные значения: "/", "," и "-"';
$_lang['setting_ms2_order_format_phone'] = 'Формат валидации телефона';
$_lang['setting_ms2_order_format_phone_desc'] = 'Формат валидации телефона. Используется в функции preg_replace. Пример /[^-+()0-9]/u';
$_lang['setting_ms2_order_grid_fields'] = 'Поля таблицы заказов';
$_lang['setting_ms2_order_grid_fields_desc'] = 'Список полей, которые будут показаны в таблице заказов. Доступны: "id,num,customer,status,cost,weight,delivery,payment,createdon,updatedon,comment".';
$_lang['setting_ms2_order_handler_class'] = 'Order handler class';
$_lang['setting_ms2_order_handler_class_desc'] = 'The name of the class that implements the logic of an ordering.';
$_lang['setting_ms2_order_js_class_name'] = 'Название JS класса для оформления заказа';
$_lang['setting_ms2_order_js_class_name_desc'] = 'Класс должен быть экспортирован по умолчанию';
$_lang['setting_ms2_order_js_class_path'] = 'Путь к JS классу для оформления заказа';
$_lang['setting_ms2_order_js_class_path_desc'] = 'Путь указывается относительно папки assets/components/minishop2/js/web/modules';
$_lang['setting_ms2_order_product_fields'] = 'Поля таблицы покупок';
$_lang['setting_ms2_order_product_fields_desc'] = 'Список полей таблицы заказанных товаров. Доступны: "product_pagetitle,vendor_name,product_article,weight,price,count,cost". Поля товара указываются с префиксом "product_", например "product_pagetitle,product_article". Дополнительно можно указывать значения из поля options с префиксом "option_", например: "option_color,option_size".';
$_lang['setting_ms2_order_product_options'] = 'Поля опций продукта в заказе';
$_lang['setting_ms2_order_product_options_desc'] = 'Перечень редактируемых опций товара в окне заказа. По умолчанию: "color,size".';
$_lang['setting_ms2_order_tv_list'] = 'Список TV через запятую, которые попадут в письмо';
$_lang['setting_ms2_order_tv_list_desc'] = 'Введите список TV товара через запятую, для использования их в чанке писем';
$_lang['setting_ms2_order_user_groups'] = 'Groups for registering customers';
$_lang['setting_ms2_order_user_groups_desc'] = 'Comma-separated list of user groups for adding new users when they orders.';
$_lang['setting_ms2_plugins'] = 'Плагины магазина';
$_lang['setting_ms2_plugins_desc'] = 'Массив с зарегистрированными плагинами расширения объектов модели магазина: товаров, профилей покупателя и т.д.';
$_lang['setting_ms2_price_format'] = 'Format des prix';
$_lang['setting_ms2_price_format_desc'] = 'You can specify, how to format prices of product by function number_format(). For this used JSON string with array of 3 values: number of decimals, decimals separator and thousands separator. By default format is [2,"."," "], that transforms "15336.6" into "15 336.60"';
$_lang['setting_ms2_price_format_no_zeros'] = 'Remove extra zeros in the prices';
$_lang['setting_ms2_price_format_no_zeros_desc'] = 'By default, weight of goods shown with 2 decimals: "15.20". If enabled this option, extra zeroes at the end will removed and price transforms to "15.2"';
$_lang['setting_ms2_price_snippet'] = 'Modificateur de prix';
$_lang['setting_ms2_price_snippet_desc'] = 'Здесь вы можете указать имя сниппета для модификации цены при выводе на сайте и добавлении в корзину. Он должен принимать объект "$product" и возвращать число.';
$_lang['setting_ms2_product_extra_fields'] = 'Champs complémentaires de la page des articles';
$_lang['setting_ms2_product_extra_fields_desc'] = 'Une liste de champs séparée par des virgules de la page d\'un article., qui sont nécessaire a votre boutique. Par exemple : "price,old_price,weight".';
$_lang['setting_ms2_product_id_as_alias'] = 'ID товара как псевдоним';
$_lang['setting_ms2_product_id_as_alias_desc'] = 'Если включено, псевдонимы для дружественных имён товаров не будут генерироваться. Вместо этого будут подставляться их ID.';
$_lang['setting_ms2_product_main_fields'] = 'Champs principaux du panneau de l\'article';
$_lang['setting_ms2_product_main_fields_desc'] = 'Une liste de champs séparée par des virgules de la page d\'un article. Par exemple: "pagetitle,longtitle,content".';
$_lang['setting_ms2_product_remember_tabs'] = 'Запоминание вкладки товара';
$_lang['setting_ms2_product_remember_tabs_desc'] = 'Если включено, активная вкладка панели товара будет запоминаться и восстанавливаться при загрузке страницы.';
$_lang['setting_ms2_product_show_comments'] = 'Afficher les commentaires sur l\'article';
$_lang['setting_ms2_product_show_comments_desc'] = 'Montrez les commentaires de l\'article si le composant "Tickets" est installé.';
$_lang['setting_ms2_product_show_in_tree_default'] = 'Montrez dans l\'arbre par défaut';
$_lang['setting_ms2_product_show_in_tree_default_desc'] = 'Si vous activez cette option, tous les articles seront montrés dans l\'arbre des ressources.';
$_lang['setting_ms2_product_source_default'] = 'Source des médias par défaut';
$_lang['setting_ms2_product_source_default_desc'] = 'Source des médias par défaut pour la gallerie des articles.';
$_lang['setting_ms2_product_tab_categories'] = 'Вкладка категорий товара';
$_lang['setting_ms2_product_tab_categories_desc'] = 'Показывать вкладку категорий товара?';
$_lang['setting_ms2_product_tab_extra'] = 'Вкладка свойств товара';
$_lang['setting_ms2_product_tab_extra_desc'] = 'Показывать вкладку свойств товара?';
$_lang['setting_ms2_product_tab_gallery'] = 'Вкладка галереи товара';
$_lang['setting_ms2_product_tab_gallery_desc'] = 'Показывать вкладку галереи товара?';
$_lang['setting_ms2_product_tab_links'] = 'Вкладка связей товара';
$_lang['setting_ms2_product_tab_links_desc'] = 'Показывать вкладку связей товара?';
$_lang['setting_ms2_product_tab_options'] = 'Вкладка опций товара';
$_lang['setting_ms2_product_tab_options_desc'] = 'Показывать вкладку опций товара?';
$_lang['setting_ms2_product_vertical_tabs'] = 'Onglet verticaux de la page des articles';
$_lang['setting_ms2_product_vertical_tabs_desc'] = 'Comment afficher la page des articles dans le gestionnaire ? Désactiver cette option vous permet d\'ajuster la page de l\'article sur ​​l\'écran avec une petite taille horizontale. Non recommandé.';
$_lang['setting_ms2_register_frontend'] = 'Добавлять js и css из комплекта ms2 файлы в DOM дерево';
$_lang['setting_ms2_register_frontend_desc'] = 'Разрешить добавление в DOM дерево ссылок на js и css файлы из комплекта ms2';
$_lang['setting_ms2_services'] = 'Службы магазина';
$_lang['setting_ms2_services_desc'] = 'Массив с зарегистрированными классами для корзины, заказа, доставки и оплаты. Используется сторонними дополнениями для загрузки своего функционала.';
$_lang['setting_ms2_status_canceled'] = 'ID статуса отмены заказа';
$_lang['setting_ms2_status_canceled_desc'] = 'Какой статус нужно устанавливать при отмене заказа';
$_lang['setting_ms2_status_draft'] = 'ID статуса заказа Черновик';
$_lang['setting_ms2_status_draft_desc'] = 'Какой статус нужно устанавливать для заказа-черновика';
$_lang['setting_ms2_status_for_stat'] = 'ID статусов для статистики';
$_lang['setting_ms2_status_for_stat_desc'] = 'Статусы через запятую, для построения статистики ВЫПОЛНЕННЫХ заказов';
$_lang['setting_ms2_status_new'] = 'ID первоначального статуса заказа';
$_lang['setting_ms2_status_new_desc'] = 'Какой статус нужно устанавливать для нового совершенного заказа';
$_lang['setting_ms2_status_paid'] = 'ID статуса оплаченного заказа';
$_lang['setting_ms2_status_paid_desc'] = 'Какой статус нужно устанавливать после оплаты заказа';
$_lang['setting_ms2_template_category_default'] = 'Шаблон по умолчанию для новых категорий';
$_lang['setting_ms2_template_category_default_desc'] = 'Выберите шаблон, который будет установлен по умолчанию при создании категории.';
$_lang['setting_ms2_template_product_default'] = 'Modèle par défaut pour un nouvel article';
$_lang['setting_ms2_template_product_default_desc'] = 'Sélectionnez le modèle affecté par défaut lors de la création d\'un nouvel article.';
$_lang['setting_ms2_tmp_storage'] = 'Хранилище корзины и временных полей заказа';
$_lang['setting_ms2_tmp_storage_desc'] = 'Для хранения корзины и временных полей заказа в сессии укажите <strong>session</strong>. <br>Для хранения в базе данных укажите <strong>db</strong>';
$_lang['setting_ms2_toggle_js_type'] = 'Включить новый JavaScript?';
$_lang['setting_ms2_toggle_js_type_desc'] = 'если выбрано ДА будут подключены скрипты без зависимости от jQuery, написанные с использованием возможностей стандарта ES6';
$_lang['setting_ms2_use_scheduler'] = 'Использовать менеджер очередей';
$_lang['setting_ms2_use_scheduler_desc'] = 'Перед использованием убедитесь, что у вас установлен компонент Scheduler';
$_lang['setting_ms2_vanila_js'] = 'Новые скрипты фронтенда';
$_lang['setting_ms2_vanila_js_desc'] = 'Путь к файлу инициализации новых скриптов магазина. Если хотите указать свои параметры инициализации - укажите путь к ним здесь, или очистите параметр и загрузите их вручную через шаблон сайта.';
$_lang['setting_ms2_weight_format'] = 'Format of weight';
$_lang['setting_ms2_weight_format_desc'] = 'You can specify, how to format weight of product by function number_format(). For this used JSON string with array of 3 values: number of decimals, decimals separator and thousands separator. By default format is [3,"."," "], that transforms "141.3" into "141.300"';
$_lang['setting_ms2_weight_format_no_zeros'] = 'Remove extra zeros in the weight';
$_lang['setting_ms2_weight_format_no_zeros_desc'] = 'By default, weight of goods shown with 3 decimals: "15.250". If enabled this option, extra zeroes at the end will removed and weight transforms to "15.25".';
$_lang['setting_ms2_weight_snippet'] = 'Модификатор веса';
$_lang['setting_ms2_weight_snippet_desc'] = 'Здесь вы можете указать имя сниппета для модификации веса товара при выводе на сайте и добавлении в корзину. Он должен принимать объект "$product" и возвращать число.';
