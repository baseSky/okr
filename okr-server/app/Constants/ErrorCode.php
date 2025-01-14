<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace App\Constants;

use Hyperf\Constants\AbstractConstants;
use Hyperf\Constants\Annotation\Constants;

/**
 * @Constants
 */
class ErrorCode extends AbstractConstants
{
    /**
     * @Message("Server Error")
     */
    const SERVER_ERROR = 500;

    /**
     * @Message("TOKEN非法，请重新登录")
     */
    const TOKEN_INVALID = 700;

    /**
     * @Message("用户不存在")
     */
    const USER_NOT_EXIST = 1000;
}
