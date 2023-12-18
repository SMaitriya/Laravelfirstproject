<footer>
        
        <p class="text-gray-600">&copy; Copyright {{date('Y')}} 
            
        @if(! Route::is('about'))
        &middot; <a href="{{route('about')}}" class="text-indigo-500 hover:text-rose-600 underline">About us</a>
        @endif
    
        @if(!Route::is('help'))
        <a href="{{route('help')}}" class="text-indigo-800 hover:text-rose-600 underline"> Help</a>
        @endif
    
    
        </p>
        
    </footer>