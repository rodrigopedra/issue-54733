<?php

namespace App\Observers;

use App\Models\Demand;

class DemandObserver
{
    /**
     * Handle the Demand "created" event.
     */
    public function created(Demand $demand): void
    {
        //
    }

    /**
     * Handle the Demand "updated" event.
     */
    public function updated(Demand $demand): void
    {
        //
    }

    /**
     * Handle the Demand "deleted" event.
     */
    public function deleted(Demand $demand): void
    {
        //
    }

    /**
     * Handle the Demand "restored" event.
     */
    public function restored(Demand $demand): void
    {
        //
    }

    /**
     * Handle the Demand "force deleted" event.
     */
    public function forceDeleted(Demand $demand): void
    {
        //
    }
}
