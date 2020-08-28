@extends('layouts.app')
  @section('content')
  <div class="container mx-auto flex items-center justify-between px-4 py-0">
     <div class="game-details border-b border-gray-800 pb-12 flex">
        <div class="flex-none">
            
            <img src="/images/ff7.jpg" >
             
        </div>
       
        <div class="ml-12" >
        {{-- mt-4 flex flex-col space"> --}}
            <h2 class="text-4xl font-semibold">Final Fantasy VII Remake</h2>
                <div class="text-gray-400">
                    <span>Adventure, RPG</span>
                    &middot;
                    <span>Square Enlx</span>
                    &middot;
                    <span>Playstation 4</span>
                   
                </div>
            {{-- <p class="text-sm font-thin ">Role playing (RPG), Adventure Square Enlx. PS4</p> --}}
            
         
            
        </div>
     </div>
  </div>
 
  @endsection