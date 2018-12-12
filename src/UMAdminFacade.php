<?php
namespace Untrefmedia\UMAdmin;
use Illuminate\Support\Facades\Facade;
/**
 * @see \Spatie\Skeleton\SkeletonClass
 */
class UMAdminFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'umadmin';
    }
}
