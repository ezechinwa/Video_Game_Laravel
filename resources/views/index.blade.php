@extends('layouts.app')
    @section('content')
        <div class="container mx-auto px-4">
            <div class="h2 text-blue-500 uppercase tracking-wide font-semibold">Popular games</div>
            
            <div class="popular-games text-sm grid grid-cols-6 gap-12 border-b border-gray-800 pb-16"> 
               
                <div class="game mt-8">
                    <div class="relative inline-block">
                        <a href="#">
                            <img src="/images/ff7.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right:-20px; bottom:-20px;">
                            <div class="font-semibold  flex text-xs justify-center items-center h-full">
                                80%
                            </div>
                        </div>
                    </div>
                     <a href="#" class="block text-base  font-semibold leading-tight hover:text-gray-400 mt-8">
                      Final Fantasy 7 Remake
                     </a>
                     <div class="text-grey-400 mt-1"> Playstation 4</div>
                </div>
               


                <div class="game mt-8">
                    <div class="relative inline-block">
                        <a href="#">
                            <img src="/images/animalcrossing.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right:-20px; bottom:-20px;">
                            <div class="font-semibold  flex text-xs justify-center items-center h-full">
                                80%
                            </div>
                        </div>
                    </div>
                     <a href="#" class="block text-base  font-semibold leading-tight hover:text-gray-400 mt-8">
                      Animal Crossing: NewHorizons
                     </a>
                     <div class="text-grey-400 mt-1"> Nintendo Switch</div>
                </div>



                <div class="game mt-8">
                    <div class="relative inline-block">
                        <a href="#">
                            <img src="/images/doom.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right:-20px; bottom:-20px;">
                            <div class="font-semibold  flex text-xs justify-center items-center h-full">
                                80%
                            </div>
                        </div>
                    </div>
                     <a href="#" class="block text-base  font-semibold leading-tight hover:text-gray-400 mt-8">
                      Doom Eternal
                     </a>
                     <div class="text-grey-400 mt-1"> Playstation 4, PC</div>
                </div>


                <div class="game mt-8">
                    <div class="relative inline-block">
                        <a href="#">
                            <img src="/images/alyx.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right:-20px; bottom:-20px;">
                            <div class="font-semibold  flex text-xs justify-center items-center h-full">
                                80%
                            </div>
                        </div>
                    </div>
                     <a href="#" class="block text-base  font-semibold leading-tight hover:text-gray-400 mt-8">
                      Half life: Alyx
                     </a>
                     <div class="text-grey-400 mt-1"> PC</div>
                </div>


                <div class="game mt-8">
                    <div class="relative inline-block">
                        <a href="#">
                            <img src="/images/luigi.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right:-20px; bottom:-20px;">
                            <div class="font-semibold  flex text-xs justify-center items-center h-full">
                                80%
                            </div>
                        </div>
                    </div>
                     <a href="#" class="block text-base  font-semibold leading-tight hover:text-gray-400 mt-8">
                      Luigi's Mansion: 3
                     </a>
                     <div class="text-grey-400 mt-1">Nintendo Switch</div>
                </div>


                <div class="game mt-8">
                    <div class="relative inline-block">
                        <a href="#">
                            <img src="/images/resident.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right:-20px; bottom:-20px;">
                            <div class="font-semibold  flex text-xs justify-center items-center h-full">
                                80%
                            </div>
                        </div>
                    </div>
                     <a href="#" class="block text-base  font-semibold leading-tight hover:text-gray-400 mt-8">
                      Resident Evil:3
                     </a>
                     <div class="text-grey-400 mt-1"> PC, Playstation 4, Xbox One X</div>
                </div>


                <div class="game mt-8">
                    <div class="relative inline-block">
                        <a href="#">
                            <img src="/images/resident.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right:-20px; bottom:-20px;">
                            <div class="font-semibold  flex text-xs justify-center items-center h-full">
                                80%
                            </div>
                        </div>
                    </div>
                     <a href="#" class="block text-base  font-semibold leading-tight hover:text-gray-400 mt-8">
                      Resident Evil:3
                     </a>
                     <div class="text-grey-400 mt-1"> PC, Playstation 4, Xbox One X</div>
                </div>


                <div class="game mt-8">
                    <div class="relative inline-block">
                        <a href="#">
                            <img src="/images/luigi.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right:-20px; bottom:-20px;">
                            <div class="font-semibold  flex text-xs justify-center items-center h-full">
                                80%
                            </div>
                        </div>
                    </div>
                     <a href="#" class="block text-base  font-semibold leading-tight hover:text-gray-400 mt-8">
                      Luigi's Mansion: 3
                     </a>
                     <div class="text-grey-400 mt-1">Nintendo Switch</div>
                </div>


                <div class="game mt-8">
                    <div class="relative inline-block">
                        <a href="#">
                            <img src="/images/alyx.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right:-20px; bottom:-20px;">
                            <div class="font-semibold  flex text-xs justify-center items-center h-full">
                                80%
                            </div>
                        </div>
                    </div>
                     <a href="#" class="block text-base  font-semibold leading-tight hover:text-gray-400 mt-8">
                      Half life: Alyx
                     </a>
                     <div class="text-grey-400 mt-1"> PC</div>
                </div>

                <div class="game mt-8">
                    <div class="relative inline-block">
                        <a href="#">
                            <img src="/images/doom.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right:-20px; bottom:-20px;">
                            <div class="font-semibold  flex text-xs justify-center items-center h-full">
                                80%
                            </div>
                        </div>
                    </div>
                     <a href="#" class="block text-base  font-semibold leading-tight hover:text-gray-400 mt-8">
                      Doom Eternal
                     </a>
                     <div class="text-grey-400 mt-1"> Playstation 4, PC</div>
                </div>


                <div class="game mt-8">
                    <div class="relative inline-block">
                        <a href="#">
                            <img src="/images/animalcrossing.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right:-20px; bottom:-20px;">
                            <div class="font-semibold  flex text-xs justify-center items-center h-full">
                                80%
                            </div>
                        </div>
                    </div>
                     <a href="#" class="block text-base  font-semibold leading-tight hover:text-gray-400 mt-8">
                      Animal Crossing: NewHorizons
                     </a>
                     <div class="text-grey-400 mt-1"> Nintendo Switch</div>
                </div>

                <div class="game mt-8">
                    <div class="relative inline-block">
                        <a href="#">
                            <img src="/images/ff7.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right:-20px; bottom:-20px;">
                            <div class="font-semibold  flex text-xs justify-center items-center h-full">
                                80%
                            </div>
                        </div>
                    </div>
                     <a href="#" class="block text-base  font-semibold leading-tight hover:text-gray-400 mt-8">
                      Final Fantasy 7 Remake
                     </a>
                     <div class="text-grey-400 mt-1"> Playstation 4</div>
                </div>

            </div>  {{-- end popular-games --}}


            <div class=" flex my-10">
                <div class="recently-reviewed w-3/4 mr-32">
                  <h2 class="text-blue-500 uppercase tracking-wide font-semibold"> Recently Reviewed</h2>
                  <div class="recently-reviewed-container space-y-12 mt-8">
                    <div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6"> 
                        
                            <div class="relative flex-none">
                                <a href="#">
                                    <img src="/images/ff7.jpg" alt="game cover" class="w-48 hover:opacity-75 transition ease-in-out duration-150">
                                </a>
                                <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full" style="right:-20px; bottom:-20px;">
                                    <div class="font-semibold  flex text-xs justify-center items-center h-full">
                                        80%
                                    </div>
                                </div>
                            </div>

                            <div class="ml-12">
                                <a href="#" class="block text-lg  font-semibold leading-tight hover:text-gray-400 mt-4">
                                    Final Fantasy 7 Remake
                                   </a>
                                   <div class="text-gray-400 mt-1">Playstation 4</div>
                                   <p class="mt-6 text-gray-400">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim odit fuga impedit officiis repellat repellendus, sed ex reiciendis quibusdam eos provident voluptatem error velit similique expedita? Cumque et dolorem qui!<p>
                            </div>
                     



                    </div> {{-- end game --}}


                    <div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6"> 
                        
                        <div class="relative flex-none">
                            <a href="#">
                                <img src="/images/animalcrossing.jpg" alt="game cover" class="w-48 hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                            <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full" style="right:-20px; bottom:-20px;">
                                <div class="font-semibold  flex text-xs justify-center items-center h-full">
                                    80%
                                </div>
                            </div>
                        </div>

                        <div class="ml-12">
                            <a href="#" class="block text-lg  font-semibold leading-tight hover:text-gray-400 mt-4">
                                Animal Crossing: NewHorizons
                               </a>
                               <div class="text-gray-400 mt-1">Playstation 4</div>
                               <p class="mt-6 text-gray-400">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim odit fuga impedit officiis repellat repellendus, sed ex reiciendis quibusdam eos provident voluptatem error velit similique expedita? Cumque et dolorem qui!<p>
                        </div>
                 



                </div> {{-- end game --}}


                <div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6"> 
                        
                    <div class="relative flex-none">
                        <a href="#">
                            <img src="/images/alyx.jpg" alt="game cover" class="w-48 hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full" style="right:-20px; bottom:-20px;">
                            <div class="font-semibold  flex text-xs justify-center items-center h-full">
                                80%
                            </div>
                        </div>
                    </div>

                    <div class="ml-12">
                        <a href="#" class="block text-lg  font-semibold leading-tight hover:text-gray-400 mt-4">
                            Half life: Alyx
                           </a>
                           <div class="text-gray-400 mt-1">Playstation 4</div>
                           <p class="mt-6 text-gray-400">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim odit fuga impedit officiis repellat repellendus, sed ex reiciendis quibusdam eos provident voluptatem error velit similique expedita? Cumque et dolorem qui!<p>
                    </div>
             



            </div> {{-- end game --}}
                  </div>
               
                </div> {{-- end recently-reviewed --}}
    
                <div class="most-anticipated  w-1/4"> 
               
               
                </div> {{-- end most-anticipated  --}}
            </div>


        </div>




      
    @endsection