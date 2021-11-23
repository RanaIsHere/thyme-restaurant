<?php

namespace App\Observers;

use App\Models\ActionLogs;
use App\Models\Orders;
use Illuminate\Support\Facades\Auth;

class LogFromOrder
{
    /**
     * Handle the Orders "created" event.
     *
     * @param  \App\Models\Orders  $orders
     * @return void
     */
    public function created(Orders $orders)
    {
        $actionlogs = new ActionLogs;

        $actionlogs->user_id = Auth::user()->id;
        $actionlogs->action = 'INSERT';
        $actionlogs->created_at = now();

        $actionlogs->saveOrFail();
    }

    /**
     * Handle the Orders "updated" event.
     *
     * @param  \App\Models\Orders  $orders
     * @return void
     */
    public function updated(Orders $orders)
    {
        //
    }

    /**
     * Handle the Orders "deleted" event.
     *
     * @param  \App\Models\Orders  $orders
     * @return void
     */
    public function deleted(Orders $orders)
    {
        //
    }

    /**
     * Handle the Orders "restored" event.
     *
     * @param  \App\Models\Orders  $orders
     * @return void
     */
    public function restored(Orders $orders)
    {
        //
    }

    /**
     * Handle the Orders "force deleted" event.
     *
     * @param  \App\Models\Orders  $orders
     * @return void
     */
    public function forceDeleted(Orders $orders)
    {
        //
    }
}
