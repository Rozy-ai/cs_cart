<?php
/***************************************************************************
 *                                                                          *
 *   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
 *                                                                          *
 * This  is  commercial  software,  only  users  who have purchased a valid *
 * license  and  accept  to the terms of the  License Agreement can install *
 * and use this program.                                                    *
 *                                                                          *
 ****************************************************************************
 * PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
 * "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
 ****************************************************************************/


namespace Tygh\Addons\CommerceML\Tests\Unit;

use Tygh\Addons\CommerceML\Xml\SimpleXmlElement;
use Tygh\Tests\Unit\ATestCase;

abstract class BaseXmlTestCase extends ATestCase
{
    /**
     * @inheritDoc
     */
    protected function setUp(): void
    {
        if (!function_exists('simplexml_load_string')) {
            $this->markTestSkipped('XML extension required');
        }

        SimpleXmlElement::$aliases = $this->getFieldAliases();

        parent::setUp();
    }

    public function getFieldAliases()
    {
        return [
            'commerceml'           => 'КоммерческаяИнформация',
            'name'                 => 'Наименование',
            'classifier'           => 'Классификатор',
            'groups'               => 'Группы',
            'group'                => 'Группа',
            'catalog'              => 'Каталог',
            'products'             => 'Товары',
            'product'              => 'Товар',
            'id'                   => 'Ид',
            'value_fields'         => 'ЗначенияРеквизитов',
            'value_field'          => 'ЗначениеРеквизита',
            'full_name'            => 'Полное наименование',
            'code'                 => 'Код',
            'html_description'     => 'ОписаниеВФорматеHTML',
            'article'              => 'Артикул',
            'description'          => 'Описание',
            'properties_values'    => 'ЗначенияСвойств',
            'property_values'      => 'ЗначенияСвойства',
            'property'             => 'Свойство',
            'properties'           => 'Свойства',
            'taxes_rates'          => 'СтавкиНалогов',
            'tax_rate'             => 'СтавкаНалога',
            'rate_t'               => 'Ставка',
            'value'                => 'Значение',
            'manufacturer'         => 'Изготовитель',
            'official_name'        => 'ОфициальноеНаименование',
            'variants_values'      => 'ВариантыЗначений',
            'id_value'             => 'ИдЗначения',
            'directory'            => 'Справочник',
            'file_description'     => 'ОписаниеФайла',
            'packages'             => 'ПакетПредложений',
            'offers'               => 'Предложения',
            'offer'                => 'Предложение',
            'amount'               => 'Количество',
            'product_features'     => 'ХарактеристикиТовара',
            'product_feature'      => 'ХарактеристикаТовара',
            'prices_types'         => 'ТипыЦен',
            'price_type'           => 'ТипЦены',
            'prices'               => 'Цены',
            'price'                => 'Цена',
            'price_per_item'       => 'ЦенаЗаЕдиницу',
            'price_id'             => 'ИдТипаЦены',
            'warehouses'           => 'Склады',
            'warehouse'            => 'Склад',
            'warehouse_id'         => 'ИдСклада',
            'warehouse_in_stock'   => 'КоличествоНаСкладе',
            'image'                => 'Картинка',
            'bar'                  => 'Штрихкод',
            'type_field'           => 'ТипЗначений',
            'brand'                => 'Бренд',
            'status'               => 'Статус',
            'delete'               => 'Удален',
            'commerce_information' => 'КоммерческаяИнформация',
            'version_sheme'        => 'ВерсияСхемы',
            'creation_date'        => 'ДатаФормирования',
            'document'             => 'Документ',
            'number'               => 'Номер',
            'date'                 => 'Дата',
            'operation'            => 'ХозОперация',
            'order'                => 'Заказ товара',
            'role'                 => 'Роль',
            'seller'               => 'Продавец',
            'buyer'                => 'Покупатель',
            'currency'             => 'Валюта',
            'rate'                 => 'Курс',
            'multiply'             => 'Коэффициент',
            'total'                => 'Сумма',
            'contractors'          => 'Контрагенты',
            'lastname'             => 'Фамилия',
            'firstname'            => 'Имя',
            'contractor'           => 'Контрагент',
            'address'              => 'Адрес',
            'presentation'         => 'Представление',
            'address_field'        => 'АдресноеПоле',
            'locality'             => 'Населенный пункт',
            'type'                 => 'Тип',
            'post_code'            => 'Почтовый индекс',
            'country'              => 'Страна',
            'city'                 => 'Город',
            'street'               => 'Улица',
            'contacts'             => 'Контакты',
            'contact'              => 'Контакт',
            'mail'                 => 'Почта',
            'work_phone'           => 'ТелефонРабочий',
            'representatives'      => 'Представители',
            'representative'       => 'Представитель',
            'ratio'                => 'Отношение',
            'administrator'        => 'Администратор',
            'unregistered'         => 'Незарегистрированный',
            'yes'                  => 'Да',
            'no'                   => 'Нет',
            'true'                 => 'Правда',
            'full_name_contractor' => 'ПолноеНаименование',
            'time'                 => 'Время',
            'notes'                => 'Комментарий',
            'delivery_order'       => 'Доставка заказа',
            'payment_surcharge'    => 'Дополнительный сбор',
            'service'              => 'Услуга',
            'spec_nomenclature'    => 'ВидНоменклатуры',
            'type_nomenclature'    => 'ТипНоменклатуры',
            'base_unit'            => 'БазоваяЕдиница',
            'full_name_unit'       => 'НаименованиеПолное',
            'item'                 => 'шт',
            'discounts'            => 'Скидки',
            'discount'             => 'Скидка',
            'product_discount'     => 'Скидка на товар',
            'orders_discount'      => 'Скидка на заказ',
            'rate_discounts'       => 'Процент',
            'in_total'             => 'УчтеноВСумме',
            'payment'              => 'Метод оплаты',
            'status_order'         => 'Статус заказа',
            'shipping'             => 'Способ доставки',
            'taxes'                => 'Налоги',
            'tax'                  => 'Налог',
            'multiple'             => 'Множественное',
            'string'               => 'Строка',
            'date_time'            => 'ДатаВремя',
            'recount'              => 'Пересчет',
            'unit'                 => 'Единица',
            'has_only_changes'     => 'СодержитТолькоИзменения',
            'product_options'      => 'Опции товаров',
        ];
    }
}