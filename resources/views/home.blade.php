<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('HOME') }}
        </h2>
    </x-slot>
	<div id="calendar"></div>
	<div>
	    <form method="post" action="/calendar/create" id="calendarCreate">
	        @csrf
	    	<input type='date' class="hidden" id='date' name='date'/>
	    </form>
	    
	    <form method="post" action="/calendar/display" id="calendarDisplay">
	        @csrf
	    	<input type="text" class="hidden" id="id" name="id" value="" />
	    	<input type="text" class="hidden" id="title" name="title" value="" />
	    </form>
	</div>
</x-app-layout>

