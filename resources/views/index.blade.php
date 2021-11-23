@extends('preload.default')

@section('container')
    @include('partials.header')

    <div class="flex flex-col lg:flex-row w-full">
        <div class="grid flex-grow card h-full place-items-center border border-primary">
            <div class="bg-primary w-full px-3 py-3">
                <h1 class="text-3xl"> Null User </h1>
                <p class="text-lg">Cashier</p>
            </div>

            <div class="bg-neutral-focus py-6 w-full">
                <form action="" method="post" id="loginForm" class="p-4">
                    <div class="form-control my-2">
                        <label class="label">
                            <span class="label-text">Username</span>
                        </label>
                        <input type="text" name="name" id="nameInput" class="input">
                    </div>

                    <div class="form-control my-2">
                        <label class="label">
                            <span class="label-text">Password</span>
                        </label>
                        <input type="password" name="password" id="passwordInput" class="input">
                    </div>

                    <div class="text-center mt-8">
                        <button type="submit" class="btn btn-primary w-5/12 rounded-none">Login</button>
                    </div>
                </form>
            </div>  
        </div>

        <div class="divider lg:divider-vertical"></div>

        <div class="grid flex-grow card place-items-center h-full">
            <div class="bg-primary w-full px-3 py-3">
                <h1 class="text-3xl">Action Logs</h1>
                <p class="text-lg">Count: 0</p>
            </div>

            <div class="bg-neutral-focus py-6 px-4 w-full">
                <table class="table w-full overflow-x-auto">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Actions</th>
                            <th>By</th>
                            <th>On</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr class="">
                            <td>1</td>
                            <td>INSERT</td>
                            <td>NULL</td>
                            <td>Today</td>
                        </tr>
                    </tbody>
                </table>
            </div>  
        </div>
    </div>
@endsection