   <div class="grid grid-cols-12 overflow-hidden text-white text-15 border border-bgborder rounded-md mt-2">
       <input class="col-span-10 w-[300px] truncate flex items-center px-2 border-none bg-transparent" readonly
           id="btc_address" value="1NidEPo6hjncKFCqHfFGoB8eXyx6n6grGc">
       <div id="copybtcaddress"
           class="col-span-2 cursor-pointer flex items-center justify-center border-l bg-bgprimary py-2 rounded-tr-md rounded-br-md">
           <button>
               <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-copy" width="28"
                   height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff" fill="none"
                   stroke-linecap="round" stroke-linejoin="round">
                   <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                   <path
                       d="M7 7m0 2.667a2.667 2.667 0 0 1 2.667 -2.667h8.666a2.667 2.667 0 0 1 2.667 2.667v8.666a2.667 2.667 0 0 1 -2.667 2.667h-8.666a2.667 2.667 0 0 1 -2.667 -2.667z" />
                   <path
                       d="M4.012 16.737a2.005 2.005 0 0 1 -1.012 -1.737v-10c0 -1.1 .9 -2 2 -2h10c.75 0 1.158 .385 1.5 1" />
               </svg>
           </button>
       </div>
   </div>
   <div class="pt-2 mt-3 text-center">
       <button id="openconfirmModal"
           class="order-2 w-full btn border-cyan-500 bg-cyan-500  text-white focus:bg-cyan-500 focus:text-white focus:ring focus:ring-green-200">
           Confirm Payment Sent</button>
   </div>
