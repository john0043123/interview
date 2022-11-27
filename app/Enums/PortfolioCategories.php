<?php
namespace App\Enums;

enum PortfolioCategories {
    case BRAND;
    case FLAT_DESIGN;
    case WEB_DESIGN;

    public static function toArray()
    {
        $r = [];
        foreach (self::cases() as $unit) {
            /** @var \UnitEnum $unit */
            $r[$unit->name] = __('portfolio.' . $unit->name);
        }

        return $r;
    }
}
