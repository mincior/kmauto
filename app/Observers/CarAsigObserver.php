<?php

namespace App\Observers;

use App\Models\CarAsig;

class CarAsigObserver
{
    /**
     * Handle the CarAsig "created" event.
     */
    public function created(CarAsig $carAsig): void
    {
        //
    }

    /**
     * Handle the CarAsig "updated" event.
     */
    public function updated(CarAsig $carAsig): void
    {
        //
    }

    /**
     * Handle the CarAsig "deleted" event.
     */
    public function deleted(CarAsig $carAsig): void
    {
        //
    }

    /**
     * Handle the CarAsig "restored" event.
     */
    public function restored(CarAsig $carAsig): void
    {
        //
    }

    /**
     * Handle the CarAsig "force deleted" event.
     */
    public function forceDeleted(CarAsig $carAsig): void
    {
        //
    }
}
