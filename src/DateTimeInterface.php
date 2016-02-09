<?php

if (! interface_exists('DateTimeInterface')) {
    interface DateTimeInterface
    {
        public function __wakeup();

        /**
         * @param DateTimeInterface $datetime2
         * @param bool $absolute
         *
         * @return DateInterval
         */
        public function diff(DateTimeInterface $datetime2, $absolute = false);

        /**
         * @param string $format
         *
         * @return string
         */
        public function format($format);

        /**
         * @return int
         */
        public function getOffset();

        /**
         * @return int
         */
        public function getTimestamp();

        /**
         * @return DateTimeZone
         */
        public function getTimezone();
    }
}
