@extends('../layouts/admin/adminlayout')
@section('content')
    <!-- ========== Left Sidebar Start ========== -->
    <x-admin.sidebar />


    {{-- Header start --}}
    <x-admin.header />
    {{-- Header end --}}


    <div class="main-content group-data-[sidebar-size=sm]:ml-[70px]">
        <div class="page-content ">
            <div class="container-fluid px-[0.625rem]">

                <div class="grid grid-cols-1 pb-6">
                    <div class="md:flex items-center justify-between px-[2px]">
                        <h4 class="text-[18px] font-medium text-white mb-sm-0 grow mb-2 md:mb-0">
                            Profile</h4>
                        <nav class="flex" aria-label="Breadcrumb">
                            <ol class="inline-flex items-center space-x-1 ltr:md:space-x-3 rtl:md:space-x-0">
                                <li class="inline-flex items-center">
                                    <a href="#"
                                        class="inline-flex items-center text-sm text-white hover:text-gray-900  ">
                                        Accounts
                                    </a>
                                </li>
                                <li>
                                    <div class="flex items-center rtl:mr-2">
                                        <i
                                            class="font-semibold text-white align-middle far fa-angle-right text-13 rtl:rotate-180 "></i>
                                        <a href="#"
                                            class="text-sm font-medium text-gray-50 ltr:ml-2 rtl:mr-2 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 ">Profile</a>
                                    </div>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="grid grid-cols-12 gap-6">
                    <div class="col-span-12 ">
                        <div class="card  ">
                            <div class="card-body ">
                                <div class="grid grid-cols-12 ">
                                    <div class="col-span-12  justify-between">
                                        <div class="md:flex  items-center gap-3">
                                            <div class="w-20 h-20 ltr:mr-1 rtl:ml-1">
                                                <img src="{{ auth()->user()->avatar }}" alt=""
                                                    class="rounded-full object-cover aspect-square">
                                            </div>
                                            <div>
                                                <div class="block">

                                                    <h6>{{ auth()->user()->name }}</h6>
                                                    <small class="text-gray-50">{{ auth()->user()->role }}</small>
                                                </div>
                                                <div class=" flex  mt-3   gap-4">

                                                    <button class="  flex items-start   gap-2  rounded ">
                                                        Edit <i data-feather="edit" fill="#545a6d33" class="w-3"></i>
                                                    </button>
                                                    <button class="flex   gap-2  rounded ">
                                                        Remove <i data-feather="trash" fill="#545a6d33" class="w-3"></i>
                                                    </button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="nav-tabs border-b-tabs">

                                    <ul class="flex flex-wrap w-full text-sm font-medium text-center text-green-500 nav  border-t border-gray-50 pt-5  mt-6 "
                                        id="pills-tab" role="tablist">
                                        <li>
                                            <a href="javascript:void(0);" data-tw-toggle="tab"
                                                data-tw-target="tab-full-u-home"
                                                class="px-3 pt-5 pb-[1.4rem] font-medium active">Profile</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card  ">
                            <div class="border-b card-body border-gray-50 ">
                                <h5 class="text-white text-15 ">Personal Information</h5>
                            </div>
                            <div class="card-body">
                                <div>
                                    <div class="py-3">
                                        <form action="">
                                            <div class="grid  gap-4 mb-5">
                                                <div class="mb-4">
                                                    <label for="firstname" class="font-bold mb-2 inline-block">
                                                        Firstname
                                                    </label>
                                                    <input type="text"
                                                        class="block border-gray-100 w-full px-4 py-3 rounded-md ">
                                                </div>
                                                <div class="mb-4">
                                                    <label for="firstname" class="font-bold mb-2 inline-block">
                                                        Lastname
                                                    </label>
                                                    <input type="text"
                                                        class="block border-gray-100 w-full px-4 py-3 rounded-md ">
                                                </div>
                                            </div>
                                            <div class="grid gap-4 mb-5">
                                                <div class="mb-4">
                                                    <label for="firstname" class="font-bold mb-2  block">
                                                        Country/Phone number:
                                                    </label>
                                                    <div
                                                        class="grid grid-cols-8 outline-1 lg:w-3/5  outline outline-gray-100 rounded-md">
                                                        <select name="" class="col-span-1 bg-gray-100 border-none"
                                                            id="">
                                                            <option value="+1">+1</option>
                                                            <option value="+44">+44</option>
                                                            <option value="+91">+91</option>
                                                            <option value="+81">+81</option>
                                                            <option value="+234">+234</option>
                                                            <option value="+61">+61</option>
                                                            <option value="+86">+86</option>
                                                            <option value="+33">+33</option>
                                                            <option value="+49">+49</option>
                                                            <option value="+52">+52</option>
                                                            <option value="+7">+7</option>
                                                            <option value="+27">+27</option>
                                                            <option value="+82">+82</option>
                                                            <option value="+46">+46</option>
                                                            <option value="+41">+41</option>
                                                            <option value="+971">+971</option>
                                                            <option value="+598">+598</option>
                                                            <option value="+58">+58</option>
                                                            <option value="+355">+355</option>
                                                            <option value="+213">+213</option>
                                                            <option value="+376">+376</option>
                                                            <option value="+244">+244</option>
                                                            <option value="+54">+54</option>
                                                            <option value="+61">+61</option>
                                                            <option value="+43">+43</option>
                                                            <option value="+994">+994</option>
                                                            <option value="+973">+973</option>
                                                            <option value="+880">+880</option>
                                                            <option value="+375">+375</option>
                                                            <option value="+32">+32</option>
                                                            <option value="+501">+501</option>
                                                            <option value="+229">+229</option>
                                                            <option value="+975">+975</option>
                                                            <option value="+591">+591</option>
                                                            <option value="+387">+387</option>
                                                            <option value="+267">+267</option>
                                                            <option value="+55">+55</option>
                                                            <option value="+673">+673</option>
                                                            <option value="+359">+359</option>
                                                            <option value="+226">+226</option>
                                                            <option value="+257">+257</option>
                                                            <option value="+855">+855</option>
                                                            <option value="+237">+237</option>
                                                            <option value="+1">+1</option>
                                                            <option value="+238">+238</option>
                                                            <option value="+236">+236</option>
                                                            <option value="+235">+235</option>
                                                            <option value="+56">+56</option>
                                                            <option value="+57">+57</option>
                                                            <option value="+269">+269</option>
                                                            <option value="+242">+242</option>
                                                            <option value="+243">+243</option>
                                                            <option value="+506">+506</option>
                                                            <option value="+385">+385</option>
                                                            <option value="+53">+53</option>
                                                            <option value="+357">+357</option>
                                                            <option value="+420">+420</option>
                                                            <option value="+45">+45</option>
                                                            <option value="+253">+253</option>
                                                            <option value="+1">+1</option>
                                                            <option value="+593">+593</option>
                                                            <option value="+20">+20</option>
                                                            <option value="+503">+503</option>
                                                            <option value="+240">+240</option>
                                                            <option value="+372">+372</option>
                                                            <option value="+251">+251</option>
                                                            <option value="+500">+500</option>
                                                            <option value="+298">+298</option>
                                                            <option value="+679">+679</option>
                                                            <option value="+358">+358</option>
                                                            <option value="+594">+594</option>
                                                            <option value="+689">+689</option>
                                                            <option value="+241">+241</option>
                                                            <option value="+220">+220</option>
                                                            <option value="+995">+995</option>
                                                            <option value="+233">+233</option>
                                                            <option value="+350">+350</option>
                                                            <option value="+30">+30</option>
                                                            <option value="+299">+299</option>
                                                            <option value="+502">+502</option>
                                                            <option value="+224">+224</option>
                                                            <option value="+245">+245</option>
                                                            <option value="+592">+592</option>
                                                            <option value="+509">+509</option>
                                                            <option value="+504">+504</option>
                                                            <option value="+36">+36</option>
                                                            <option value="+354">+354</option>
                                                            <option value="+62">+62</option>
                                                            <option value="+98">+98</option>
                                                            <option value="+964">+964</option>
                                                            <option value="+353">+353</option>
                                                            <option value="+972">+972</option>
                                                            <option value="+39">+39</option>
                                                            <option value="+225">+225</option>
                                                            <option value="+81">+81</option>
                                                            <option value="+962">+962</option>
                                                            <option value="+7">+7</option>
                                                            <option value="+254">+254</option>
                                                            <option value="+686">+686</option>
                                                            <option value="+965">+965</option>
                                                            <option value="+996">+996</option>
                                                        </select>
                                                        <input type="text"
                                                            class="block w-full border-none col-span-5 px-4 py-3">
                                                    </div>
                                                </div>
                                                <div class="mb-4">
                                                    <label for="firstname" class="font-bold mb-2 inline-block">
                                                        Zip Code:
                                                    </label>
                                                    <input type="text"
                                                        class="block border-gray-100 w-full px-4 py-3 rounded-md ">
                                                </div>
                                                <div class="mb-4">
                                                    <label for="firstname" class="font-bold mb-2 inline-block">
                                                        Email:
                                                    </label>
                                                    <input type="text"
                                                        class="block border-gray-100 w-full px-4 py-3 rounded-md ">
                                                </div>

                                                <div class="mb-4 ">
                                                    <label for="firstname" class="font-bold mb-2 inline-block">
                                                        Gender:
                                                    </label>
                                                    <select name="" id=""
                                                        class="block border-gray-100 w-full px-4 py-3 rounded-md ">
                                                        <option value="" selected disabled>(-- SELECT GENDER --)
                                                        </option>
                                                        <option value="">Male</option>
                                                        <option value="">Female</option>
                                                        <option value="">BiSexual</option>
                                                    </select>
                                                </div>
                                                {{-- <div class="mb-4 col-span-2">
                                                    <label for="firstname" class="font-bold mb-2 inline-block">
                                                        Eth Address:
                                                    </label>
                                                    <input type="text"
                                                        class="block border-gray-100 w-full px-4 py-3 rounded-md ">
                                                </div>
                                                <div class="mb-4 col-span-3">
                                                    <label for="firstname" class="font-bold mb-2 inline-block">
                                                        External Wallet Addres:
                                                    </label>
                                                    <input type="text"
                                                        class="block border-gray-100 w-full px-4 py-3 rounded-md ">
                                                </div> --}}
                                                <div class="mb-4">
                                                    <button type="submit" value="Save"
                                                        class="block text-white font-semibold border bg-green-500 w-full px-4 py-3 rounded-md ">
                                                        Save
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-span-12 lg:col-span-3">
                        <div class="card  ">
                            <div class="card-body">
                                <h5 class="mb-3 text-white text-15 ">Skills</h5>
                                <div class="flex flex-wrap gap-2">
                                    <a href="#"
                                        class="text-xs px-2 py-0.5 rounded text-violet-500 bg-violet-50 font-semibold hover:bg-violet-50 duration-300 dark:bg-violet-500">Photoshop</a>
                                    <a href="#"
                                        class="text-xs px-2 py-0.5 rounded text-violet-500 bg-violet-50 font-semibold hover:bg-violet-50 duration-300 dark:bg-violet-500">illustrator</a>
                                    <a href="#"
                                        class="text-xs px-2 py-0.5 rounded text-violet-500 bg-violet-50 font-semibold hover:bg-violet-50 duration-300 dark:bg-violet-500">HTML</a>
                                    <a href="#"
                                        class="text-xs px-2 py-0.5 rounded text-violet-500 bg-violet-50 font-semibold hover:bg-violet-50 duration-300 dark:bg-violet-500">Javascript</a>
                                    <a href="#"
                                        class="text-xs px-2 py-0.5 rounded text-violet-500 bg-violet-50 font-semibold hover:bg-violet-50 duration-300 dark:bg-violet-500">Php</a>
                                    <a href="#"
                                        class="text-xs px-2 py-0.5 rounded text-violet-500 bg-violet-50 font-semibold hover:bg-violet-50 duration-300 dark:bg-violet-500">Python</a>
                                </div>
                            </div>
                        </div>
                        <div class="card  ">
                            <div class="card-body">
                                <h5 class="mb-4 text-white text-15 ">Portfolio</h5>
                                <ul class="mb-0 list-unstyled">
                                    <li class="py-2">
                                        <a href="#" class="text-gray-50 d-block  "><i
                                                class="mdi mdi-web text-violet-500 ltr:mr-1 rtl:ml-1"></i> Website</a>
                                    </li>
                                    <li class="py-2">
                                        <a href="#" class="text-gray-50 d-block "><i
                                                class="mdi mdi-note-text-outline text-violet-500 ltr:mr-1 rtl:ml-1"></i>
                                            Blog</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card  ">
                            <div class="card-body">
                                <h5 class="mb-4 text-white text-15 ">Similar Profiles</h5>
                                <div class="list-group">
                                    <a href="#">
                                        <div
                                            class="flex items-center px-5 py-3 border-b border-gray-50  hover:bg-gray-50/50/30">
                                            <div class=" avatar-sm ltr:mr-3 rtl:ml-3">
                                                <img src="/admins/images/avatar-1.jpg" alt=""
                                                    class="w-8 h-8 p-1 border border-gray-100 rounded-full ">
                                            </div>
                                            <div class="flex-grow">
                                                <div>
                                                    <h5
                                                        class="mb-1 text-sm text-white leading-[16.5px]">
                                                        James Nix</h5>
                                                    <p
                                                        class="mb-0 text-gray-50 text-13  leading-[19.5px]">
                                                        Full Stack Developer</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div
                                            class="flex items-center px-5 py-3 border-b border-gray-50  hover:bg-gray-50/50/30">
                                            <div class=" avatar-sm ltr:mr-3 rtl:ml-3">
                                                <img src="/admins/images/avatar-3.jpg" alt=""
                                                    class="w-8 h-8 p-1 border border-gray-100 rounded-full ">
                                            </div>
                                            <div class="flex-grow">
                                                <div>
                                                    <h5
                                                        class="mb-1 text-sm text-white leading-[16.5px]">
                                                        Darlene Smith</h5>
                                                    <p
                                                        class="mb-0 text-gray-50 text-13  leading-[19.5px]">
                                                        UI/UX Designer</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="flex items-center px-5 py-3 hover:bg-gray-50/50/30">
                                            <div class="avatar-sm ltr:mr-3 rtl:ml-3">
                                                <div
                                                    class="flex items-center justify-center w-8 h-8 text-center text-gray-100 rounded-full bg-gray-50/50 text-22">
                                                    <i class="bx bxs-user-circle"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow">
                                                <div>
                                                    <h5
                                                        class="mb-1 text-sm text-white leading-[16.5px]">
                                                        William Swift</h5>
                                                    <p
                                                        class="mb-0 text-gray-50 text-13  leading-[19.5px]">
                                                        Backend Developer</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
