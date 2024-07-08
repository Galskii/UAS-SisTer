<x-home-layout>
    <div class="py-12">
       <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
             <div class="p-6 bg-white border-b border-gray-200">
                <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                   <div class="flex items-baseline justify-between border-b border-gray-200 pt-2 pb-6">
                      <h1 class="text-4xl font-bold tracking-tight text-gray-900" style="font-family: Arial, sans-serif;">Villa Dewata</h1>
                      <div class="flex items-center">
                         <div date-rangepicker class="flex items-center">
                            <div class="relative">
                               <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                  <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                     <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-
                                        rule="evenodd"></path>
                                  </svg>
                               </div>
                               <input name="start" type="text" class="bg-gray-50 border border- gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w- full pl-10 p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text- white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date start">
                            </div>
                            <span class="mx-4 text-gray-500">to</span>
                            <div class="relative">
                               <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                  <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                     <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                  </svg>
                               </div>
                               <input name="end" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w- full pl-10 p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:text- white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date end">
                            </div>
                         </div>
                         <button type="button" class="inline-block mx-4 px-6 py-2 border-2 border-blue-600 text-blue-600 font-medium text-xs leading-tight uppercase rounded-r-md hover:bg-indigo-100 hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-
                            150 ease-in-out">Check</button>
                      </div>
                   </div>
                   <section>
                     @foreach ($packages as $key=>$item)
                      <div class="md:flex font-sans pt-8">
                         <div class="md:shrink-0">
                            <img src="{{$item->img_package}}" alt="" class=" w-full md:h-full md:w-56 inset-0 w- full h-full object-cover rounded-lg p-6 bg-indigo-100" loading="lazy" />
                         </div>
                         <form class="p-6">
                            <div class="flex flex-wrap">
                               <h1 class="flex-auto font-bold text-slate-900"> {{$item->nama_package}}</h1>
                               <div class="w-full flex-none mt-2 order-1 text-3xl font-bold text-green-600">
                                  Rp. 500.000
                               </div>
                               <div class="text-sm font-medium text-slate-400"> Available</div>
                            </div>
                            <div class="text-justify flex items-baseline mt-4 mb-6 pb-6 border-b border-slate-200" style="font-family:Arial, Helvetica, sans-serif">
                              {{$item->desk_package}}
                               </div>
                               <div class="flex space-x-4 mb-5 text-sm font-medium">
                               <div class="flex-auto flex space-x-4">
                                  <button class="h-10 px-6 font-semibold rounded-full bg-violet-600 text-white" type="submit">
                                  <a href="bookingpage">Book Now</a>
                                  </button>
                                  <button class="h-10 px-6 font-semibold rounded-full bg-yellow-500 text-white">
                                    <a href="detailpage">Detail</a>
                                  </button>
                               </div>
                               <button class="flex-none flex items-center justify-center w-9 h-9 rounded-full text-violet-600 bg-violet-50" type="button" aria-label="Like">
                                  <svg width="20" height="20" fill="currentColor" aria-hidden="true">
                                     <path fill-rule="evenodd" clip-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" />
                                  </svg>
                               </button>
                            </div>
                         </form>
                      </div>

                     @endforeach

                      <div class=" font-sans pt-8 text-center">
                         <a href="#" class="inline-flex items-center py-2 px-4 text-sm font- medium text-gray-500 bg-white rounded-lg border   hover:text- gray-700 border-green-400 dark:text-gray-400 hover:bg-green-400 dark:hover:text-white">
                         Previous
                         </a>
                         <!-- Next Button -->
                         <a href="#" class="inline-flex items-center py-2 px-4 ml-3 text-sm font- medium text-gray-500 bg-white rounded-lg border border-green-400  hover:text- gray-700 dark:text-gray-400 hover:bg-green-400 dark:hover:text-white">
                         Next
                         </a>
                      </div>
                   </section>
                </main>
             </div>
          </div>
       </div>
       {{-- modal form untuk cek availibility --}}
       <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="exampleModalLg" tabindex="-1" aria- labelledby="exampleModalLgLabel" aria-modal="true" role="dialog">
          <div class="modal-dialog modal-lg relative w-auto pointer-events-none">
             <div class="modal-content border-none shadow-lg relative flex flex-col w- full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current"></div>
             
          </div>
       </div>
    </div>
 </x-home-layout>
