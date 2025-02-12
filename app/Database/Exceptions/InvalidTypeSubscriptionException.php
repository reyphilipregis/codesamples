<?php
declare(strict_types=1);

namespace App\Database\Exceptions;

use EoneoPay\Externals\ORM\Exceptions\EntityValidationFailedException as BaseEntityValidationFailedException;

final class InvalidTypeSubscriptionException extends BaseEntityValidationFailedException
{
    /**
     * Get Error code.
     *
     * @return int
     */
    public function getErrorCode(): int
    {
        return self::DEFAULT_ERROR_CODE_RUNTIME;
    }

    /**
     * Get Error sub-code.
     *
     * @return int
     */
    public function getErrorSubCode(): int
    {
        return self::DEFAULT_ERROR_SUB_CODE;
    }
}
