 <div>
     <div id="confirmModal"
         class="fixed bg-indigo-950 bg-opacity-50 z-30 inset-0 w-full h-full flex duration-300  items-center justify-center">
         <div class="bg-white p-7 rounded-md m-4 w-[300px]" id="inner_content">
             <div class="">
                 <div class="block">
                     <h2 class="text-2xl text-gray-600 mb-10 ">
                         Confirm Payment</h2>
                     <div class="grid grid-cols-12 gap-4">
                         <form class="col-span-12" action="{{ route('account.deposit.confirm') }}" method="post"
                             enctype="multipart/form-data">
                             @csrf
                             <input type="hidden" id="paidamount" name="paidamount" value="">
                             <input type="hidden" id="currency" name="currency" value="btc">
                             <input type="hidden" id="tier" name="tier" value="{{ $id }}">
                             <div class="grid grid-cols-12 gap-4">
                                 <div class="col-span-12">
                                     <label for="proof_of_payment"
                                         class="text-gray-500 cursor-pointer select-none inline-block mb-3 font-bold">Upload
                                         Proof Of Payment
                                         <input type="file" id="proof_of_payment" name="proof"
                                             class="hidden border-gray-100 px-3 w-full mb-4 rounded-md">
                                         <div class="border rounded-md mt-3">
                                             <img class="aspect-square object-cover" id="payment_preview"
                                                 src="{{ asset('custom/images/placeholder.png') }}" alt="">
                                         </div>
                                     </label>
                                 </div>
                                 <div class="col-span-12">
                                     <input type="submit" value="Confirm Payment"
                                         class="bg-green-500 cursor-pointer text-white py-3 font-bold px-3 block w-full mb-4 rounded-md">
                                 </div>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
