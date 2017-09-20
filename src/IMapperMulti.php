<?php
namespace Common
{
    /**
     * Интерфейс маппера, который генерирует несколько элементов из одного.
     *
     * @package Common
     */
    interface IMapperMulti
    {
        /**
         * Принимая на вход элемент, возвращает перечисление элементов другого типа,
         * соответствующих исходному.
         *
         * @param  mixed    $item Входной элемент.
         * @return Iterator       Перечисление элементов.
         */
        public function map($item);
    }
}