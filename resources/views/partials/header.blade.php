<div class="navbar mb-2 shadow-lg bg-neutral text-neutral-content rounded-box border-b border-primary">
    <div class="px-2 mx-2 flex-none">
      <span class="text-lg font-bold">Thyme Restaurant</span>
    </div> 
    <div class="px-2 mx-2 flex-1">
      <div class="items-stretch hidden lg:flex">
        <a href="{{ route('launchIndex') }}" class="btn btn-ghost btn-sm rounded-btn">Home</a>
        @auth 
          <a class="btn btn-ghost btn-sm rounded-btn">Meals</a> 
          <a class="btn btn-ghost btn-sm rounded-btn">Orders</a> 
        @endauth
      </div>
    </div> 
    <div class="px-2 mx-2 flex-none">
      @auth
        <a href="{{ route('logout') }}" class="btn btn-ghost">Logout</a> 
      @endauth

      <button class="btn btn-square btn-ghost">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-6 h-6 stroke-current">              
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>            
        </svg>
      </button>
    </div> 
</div>