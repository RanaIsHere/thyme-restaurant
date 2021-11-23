@extends('preload.default')

@section('container')
    @include('partials.header')

    <div class="flex flex-col lg:flex-row w-full min-h-screen">
        <div class="grid flex-grow card rounded-none bg-neutral-focus">
            <form action="{{ route('login') }}" method="post" id="mealForm" class="p-4">
                @csrf
                <div class="chosenMeals">
                    {{-- <input type="hidden" name="orders[]" value=""> --}}
                </div>

                <div class="form-control my-2">
                    <label class="label">
                        <span class="label-text">Total Price</span>
                    </label>
                    <input type="number" name="total_price" id="totalInput" class="input" readonly>
                </div>

                <div class="form-control my-2">
                    <label class="label">
                        <span class="label-text">Quantity</span>
                    </label>
                    <input type="number" name="quantity" id="quantityInput" class="input" readonly>
                </div>

                <div class="text-center mt-8">
                    <button type="submit" class="btn btn-primary w-5/12 rounded-none">Order</button>
                </div>
            </form>
        </div>

        <div class="grid flex-grow card rounded-none bg-neutral-focus py-4">
            <div class="overflow-x-auto">
                <table class="table w-full table-zebra">
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
                        <tr>
                            <td>
                                <label>
                                    <input type="checkbox" class="checkbox" id="checkboxInput">
                                </label>
                            </td>
                            <td>1</td>
                            <td>Potato</td>
                            <td>205000</td>
                            <td>AVAILABLE</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection