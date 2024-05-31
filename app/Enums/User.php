<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class User extends Enum
{
    const LOVE = 0;
    const NO_LOVE = 1;
    const TRAP = 2;
}
