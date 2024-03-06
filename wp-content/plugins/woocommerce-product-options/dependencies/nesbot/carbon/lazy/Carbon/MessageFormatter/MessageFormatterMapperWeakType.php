<?php

/**
 * This file is part of the Carbon package.
 *
 * (c) Brian Nesbitt <brian@nesbot.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Barn2\Plugin\WC_Product_Options\Dependencies\Carbon\MessageFormatter;

use Barn2\Plugin\WC_Product_Options\Dependencies\Symfony\Component\Translation\Formatter\ChoiceMessageFormatterInterface;
use Barn2\Plugin\WC_Product_Options\Dependencies\Symfony\Component\Translation\Formatter\MessageFormatterInterface;
if (!\class_exists(LazyMessageFormatter::class, \false)) {
    /** @internal */
    abstract class LazyMessageFormatter implements MessageFormatterInterface, ChoiceMessageFormatterInterface
    {
        protected abstract function transformLocale(?string $locale) : ?string;
        public function format($message, $locale, array $parameters = [])
        {
            return $this->formatter->format($message, $this->transformLocale($locale), $parameters);
        }
        public function choiceFormat($message, $number, $locale, array $parameters = [])
        {
            return $this->formatter->choiceFormat($message, $number, $locale, $parameters);
        }
    }
}
