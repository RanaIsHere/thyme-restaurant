@extends('preload.default')

@section('container')
    @include('partials.header')

    <div class="flex flex-col lg:flex-row w-full">
        <div class="grid flex-grow card h-full place-items-center border border-primary">
            <div class="bg-primary w-full px-3 py-3">
                @auth
                    <h1 class="text-3xl"> {{ Auth::user()->name }} </h1>
                    <p class="text-lg">Cashier</p>
                @endauth
                
                @guest
                    <h1 class="text-3xl"> Login to Cashier Account </h1>
                    <p class="text-base"> An account is given by a manager! </p>
                @endguest
            </div>

            <div class="bg-neutral-focus py-6 w-full">
                <form action="{{ route('login') }}" method="post" id="loginForm" class="p-4">
                    @csrf
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

        <div class="grid flex-grow card place-items-center h-full border-primary border">
            <div class="bg-primary w-full px-3 py-3">
                <h1 class="text-3xl">Action Logs</h1>
                <p class="text-lg">Count: {{ $actionlogs->count() }}</p>
            </div>

            <div class="bg-neutral-focus py-6 px-4 w-full">
                @auth
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
                            @foreach ($actionlogs as $act)                                
                                <tr class="">
                                    <td>{{ $act->id }}</td>
                                    <td>{{ $act->action }}</td>
                                    <td>{{ $act->user->name }}</td>
                                    <td>{{ $act->created_at }}Today</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endauth

                @guest
                    <div class="flex justify-center align-middle py-32">
                        <h1 class="text-4xl">LOCKED</h1>
                    </div>
                    <p class="text-gray-200 text-sm">You are required to be a cashier to view the action logs</p>
                @endguest
            </div>  
        </div>
    </div>
@endsection