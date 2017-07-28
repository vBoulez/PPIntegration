<?php
namespace Payport\PPIntegration\Api;
 
interface AllStatusInterface
{
    /**
     * Returns all the statuses of this store
     *
     * @api
     * @return string Array of available statuses, with label.
     */
    public function get();
}