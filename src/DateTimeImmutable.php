<?php

if (! class_exists('DateTimeImmutable')) {
    class DateTimeImmutable implements DateTimeInterface
    {
        /**
         * @var DateTime
         */
        protected $datetime;

        /**
         * @param string $time
         * @param DateTimeZone $timezone
         */
        public function __construct(
            $time = "now",
            DateTimeZone $timezone = NULL
        ) {
            $this->datetime = new DateTime($time, $timezone);
        }

        /**
         * @param array $array
         *
         * @return DateTimeImmutable
         */
        public static function __set_state(array $array)
        {
            $datetime = clone $this->datetime;
            $datetime->__set_state($array);
            return static::createFromMutable($datetime);
        }

        public function __wakeup()
        {
            $this->datetime->__wakeup();
        }

        /**
         * @param DateInterval $interval
         *
         * @return DateTimeImmutable
         */
        public function add(DateInterval $interval)
        {
            $datetime = clone $this->datetime;
            $datetime->add($interval);
            return static::createFromMutable($datetime);
        }

        /**
         * @param string $format
         * @param string $time
         * @param DateTimeZone $timezone
         *
         * @return DateTimeImmutable
         */
        public static function createFromFormat(
            $format,
            $time,
            DateTimeZone $timezone
        ) {
            $datetime = DateTime::createFromFormat($format, $time, $timezone);
            return static::createFromMutable($datetime);
        }

        /**
         * @param DateTime $datetime
         *
         * @return DateTimeImmutable
         */
        public static function createFromMutable(DateTime $datetime)
        {
            return new static(
                $datetime->format('Y-m-d H:i:s.u'),
                $datetime->getTimezone()
            );
        }

        /**
         * @param DateTimeInterface $datetime2
         * @param bool $absolute
         *
         * @return DateInterval
         */
        public function diff(DateTimeInterface $datetime2, $absolute = false)
        {
            return $this->datetime->diff($datetime2, $absolute);
        }

        /**
         * @param string $format
         *
         * @return string
         */
        public function format($format)
        {
            return $this->datetime->format($format);
        }

        /**
         * @return array
         */
        public static function getLastErrors()
        {
            return $this->datetime->getLastErrors();
        }

        /**
         * @return int
         */
        public function getOffset()
        {
            return $this->datetime->getOffset();
        }

        /**
         * @return int
         */
        public function getTimestamp()
        {
            return $this->datetime->getTimestamp();
        }

        /**
         * @return DateTimeZone
         */
        public function getTimezone()
        {
            return $this->datetime->getTimezone();
        }

        /**
         * @param string $modify
         *
         * @return DateTimeImmutable
         */
        public function modify($modify)
        {
            $datetime = clone $this->datetime;
            $datetime->modify($modify);
            return static::createFromMutable($datetime);
        }

        /**
         * @param int $year
         * @param int $month
         * @param int $day
         *
         * @return DateTimeImmutable
         */
        public function setDate($year, $month, $day)
        {
            $datetime = clone $this->datetime;
            $datetime->setDate($year, $month, $day);
            return static::createFromMutable($datetime);
        }

        /**
         * @param int $year
         * @param int $week
         * @param int $day
         *
         * @return DateTimeImmutable
         */
        public function setISODate($year, $week, $day = 1)
        {
            $datetime = clone $this->datetime;
            $datetime->setISODate($year, $week, $day);
            return static::createFromMutable($datetime);
        }

        /**
         * @param int $hour
         * @param int $minute
         * @param int $second
         *
         * @return DateTimeImmutable
         */
        public function setTime($hour, $minute, $second = 0)
        {
            $datetime = clone $this->datetime;
            $datetime->setTime($hour, $minute, $second);
            return static::createFromMutable($datetime);
        }

        /**
         * @param int $unixtimestamp
         *
         * @return DateTimeImmutable
         */
        public function setTimestamp($unixtimestamp)
        {
            $datetime = clone $this->datetime;
            $datetime->setTimestamp($unixtimestamp);
            return static::createFromMutable($datetime);
        }

        /**
         * @param DateTimeZone $timezone
         *
         * @return DateTimeImmutable
         */
        public function setTimezone(DateTimeZone $timezone)
        {
            $datetime = clone $this->datetime;
            $datetime->setTimezone($timezone);
            return static::createFromMutable($datetime);
        }

        /**
         * @param DateInterval $interval
         *
         * @return DateTimeImmutable
         */
        public function sub(DateInterval $interval)
        {
            $datetime = clone $this->datetime;
            $datetime->sub($interval);
            return static::createFromMutable($datetime);
        }
    }
}
