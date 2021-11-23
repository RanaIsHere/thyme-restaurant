<?php

namespace App\Http\Controllers;

use App\Models\Meals;
use App\Models\Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MealController extends Controller
{
    public function launchMeal()
    {
        $mealData = Meals::all();

        return view('meal', ['page' => 'Meals', 'mealData' => $mealData]);
    }

    public function orderMeal(Request $request)
    {
        $validatedData = $request->validate([
            'orders' => ['required'],
            'total_price' => ['required']
        ]);

        // dd($validatedData);
        $order_id = array_map('intval', $validatedData['orders']);

        $orders = new Orders;

        $orders->user_id = Auth::user()->id;
        $orders->ordered_meals = json_encode($order_id);
        $orders->total_price = $validatedData['total_price'];

        if ($orders->saveOrFail()) {
            foreach ($order_id as $i) {
                $meals = Meals::find($i);
                $meals->meal_status = 'ORDERED';

                $meals->updateOrFail();
            }

            return redirect()->back()->with('success', 'Meal is being ordered!');
        } else {
            return redirect()->back()->with('failure', 'Failed to send an order!');
        }
    }
}
