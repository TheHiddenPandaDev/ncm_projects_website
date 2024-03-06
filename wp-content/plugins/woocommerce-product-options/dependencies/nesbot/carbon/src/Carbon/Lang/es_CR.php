<?php

namespace Barn2\Plugin\WC_Product_Options\Dependencies;

/**
 * This file is part of the Carbon package.
 *
 * (c) Brian Nesbitt <brian@nesbot.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
/*
 * Authors:
 * - Free Software Foundation, Inc.    bug-glibc-locales@gnu.org
 */
return \array_replace_recursive(require __DIR__ . '/es.php', ['first_day_of_week' => 1, 'day_of_first_week_of_year' => 1]);
