@extends('preload.default')

@section('container')
@include('partials.header')

<div class="flex flex-col lg:flex-row w-full min-h-screen">
    <div class="grid flex-grow card rounded-none bg-neutral-focus">
        <form action="{{ route('orderMeal') }}" method="post" id="mealForm" class="p-4">
            @csrf
            <div id="chosenMeals">
                {{-- <input type="hidden" name="orders[]" value=""> --}}
            </div>

            <div class="form-control my-2">
                <label class="label">
                    <span class="label-text">Total Price</span>
                </label>
                <input type="number" name="total_price" id="totalInput" class="input" value="0" readonly>
            </div>

            <div class="form-control my-2">
                <label class="label">
                    <span class="label-text">Quantity</span>
                </label>
                <input type="number" name="quantity" id="quantityInput" class="input" value="0" readonly>
            </div>

            <div class="text-center mt-8">
                <button type="submit" class="btn btn-primary w-5/12 rounded-none">Order</button>
            </div>
        </form>
    </div>

    <div class="grid flex-grow card rounded-none  py-4">
        <div class="overflow-x-auto">
            <table class="table w-full table-zebra" id="mealTable">
                <thead>
                    <tr>
                        <th>Choose</th>
                        <th>Id</th>
                        <th>Meal Name</th>
                        <th>Meal Price</th>
                        <th>Meal Status</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($mealData as $md)
                    <tr>
                        <td>
                            <label>
                                <input type="checkbox" class="checkbox" class="checkboxInput" onclick="checkInput(this)" {{ $md->meal_status == 'ORDERED' ? 'disabled' : '' }}>
                            </label>
                        </td>
                        <td>{{ $md->id }}</td>
                        <td>{{ $md->meal_name }}</td>
                        <td>{{ $md->meal_price }}</td>
                        <td>{{ $md->meal_status }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection