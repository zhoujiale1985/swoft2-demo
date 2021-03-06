<?php declare(strict_types=1);

namespace Swoft\WebSocket\Server\Exception;

use Throwable;

/**
 * Class WsModuleRouteException
 *
 * @since 2.0
 */
class WsModuleRouteException extends WsServerException
{
    /**
     * Class constructor.
     *
     * @param string         $message
     * @param int            $code
     * @param Throwable|null $previous
     */
    public function __construct($message = '', $code = 404, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
