<?php
namespace Common
{
    /**
     * Интерфейс маппера, поддерживаюшего обратное преобразование.
     *
     * @package Common
     */
    interface IMapperReverse
    {
        /**
         * Принимая на вход элемент, полученный от IMapper, возвращает соответствующий ему
         * элемент исходного типа.
         *
         * @param  mixed $item Элемент из IMapper.
         * @return mixed       Элемент исходного типа.
         */
        public function mapReverse($item);
    }
}