<?php
namespace Common
{
    /**
     * Интерфейс одностороннего маппера.
     *
     * @package Common
     */
    interface IMapper
    {
        /**
         * Принимая на вход один элемент, возвращает соответствующий ему элемент другого типа.
         *
         * @param  mixed $item Элемент.
         * @return mixed       Элемент другого типа, соответствующий данному.
         */
        public function map($item);
    }
}