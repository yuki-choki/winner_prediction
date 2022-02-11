<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class GroupColor extends Enum
{
    const RIZIN = 1;
    const K_1 =   2;
    const DEEP = 3;
    const ONE = 4;
    const UFC = 5;

    public static function getDescription($value): string
    {
        switch ($value) {
            case self::RIZIN:
                return 'success';
                break;
            case self::K_1:
                return 'dark';
                break;
            case self::DEEP:
                return 'warning';
                break;
            case self::ONE:
                return 'secondary';
                break;
            case self::UFC:
                return 'danger';
                break;
        }

        return parent::getDescription($value);
    }
}
