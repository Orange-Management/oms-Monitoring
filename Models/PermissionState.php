<?php
/**
 * Orange Management
 *
 * PHP Version 8.0
 *
 * @package   Modules\Monitoring\Models
 * @copyright Dennis Eichhorn
 * @license   OMS License 1.0
 * @version   1.0.0
 * @link      https://orange-management.org
 */
declare(strict_types=1);

namespace Modules\Monitoring\Models;

use phpOMS\Stdlib\Base\Enum;

/**
 * Permision state enum.
 *
 * @package Modules\Monitoring\Models
 * @license OMS License 1.0
 * @link    https://orange-management.org
 * @since   1.0.0
 */
abstract class PermissionState extends Enum
{
    public const DASHBOARD = 1;

    public const LOG = 2;

    public const SECURITY = 3;
}
