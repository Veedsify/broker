@extends('../layouts/admin/adminlayout')
@section('content')
    <!-- ========== Left Sidebar Start ========== -->
    <x-admin.sidebar />
    <!-- Left Sidebar End -->

    {{-- Header start --}}
    <x-admin.header />
    {{-- Header end --}}

    <div class="main-content group-data-[sidebar-size=sm]:ml-[70px]">
        <div class="page-content ">
            <div class="container-fluid px-[0.625rem]">
                <div class="grid grid-cols-1 pb-6">
                    <div class="md:flex items-center justify-between px-[2px]">
                        <h4 class="text-[18px] font-medium text-white mb-sm-0 grow mb-2 md:mb-0">
                            Send Mail</h4>
                        <nav class="flex" aria-label="Breadcrumb">
                            <ol class="inline-flex items-center space-x-1 ltr:md:space-x-3 rtl:md:space-x-0">
                                <li class="inline-flex items-center">
                                    <a href="#"
                                        class="inline-flex items-center text-sm text-white hover:text-gray-900  ">
                                        Mail
                                    </a>
                                </li>
                                <li>
                                    <div class="flex items-center rtl:mr-2">
                                        <i
                                            class="font-semibold text-white align-middle far fa-angle-right text-13 rtl:rotate-180 "></i>
                                        <a href="#"
                                            class="text-sm font-medium text-gray-50 ltr:ml-2 rtl:mr-2 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 ">Send
                                            Email</a>
                                    </div>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="">
                    <div class="col-span-2">
                        @if (session('success'))
                            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative"
                                role="alert">
                                <strong class="font-bold">Success!</strong>
                                <span class="block sm:inline">{{ session('success') }}</span>
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative"
                                role="alert">
                                <strong class="font-bold">Error!</strong>
                                <span class="block sm:inline">{{ session('error') }}</span>
                            </div>
                        @endif
                    </div>

                    <div class="bg-bgprimary shadow-md rounded-lg p-6">
                        <form action="{{ route('admin.mail.send') }}" method="POST">
                            @csrf
                            <div class="mb-4">
                                <label for="to" class="block text-white text-sm font-bold mb-2">To:</label>
                                @if ($errors->has('to'))
                                    <span class="text-red-500">{{ $errors->first('to') }}</span>
                                @endif
                                <input type="email" name="to" id="to"
                                    class="w-full text-white bg-transparent border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                    required>
                            </div>
                            <div class="mb-4">
                                <label for="subject" class="block text-white text-sm font-bold mb-2">Subject:</label>
                                @if ($errors->has('subject'))
                                    <span class="text-red-500">{{ $errors->first('subject') }}</span>
                                @endif
                                <input type="text" name="subject" id="subject"
                                    class="w-full border bg-transparent text-white border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                    required>
                            </div>
                            <div class="mb-4">
                                <label for="message" class="block text-white text-sm font-bold mb-2">Message:</label>
                                <textarea name="message" id="editor" rows="5" class="text-left bg-transparent text-white"></textarea>
                                <script src="https://cdn.ckeditor.com/ckeditor5/29.2.0/classic/ckeditor.js"></script>
                                <script>
                                    document.addEventListener("DOMContentLoaded", function() {
                                        ClassicEditor
                                            .create(document.querySelector('#editor'), {
                                                toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList',
                                                    'blockQuote'
                                                ],
                                                language: 'en',
                                                licenseKey: '',
                                                ckfinder: {
                                                    uploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json'
                                                }
                                            })
                                            .then(editor => {
                                                // Set Background color 
                                                editor.ui.view.editable.setStyle('background-color', '#1f2937');
                                            })
                                            .catch(error => {
                                                console.error(error);
                                            });
                                    });
                                </script>
                            </div>
                            <div class="flex justify-end">
                                <button type="submit"
                                    class="bg-green-500 hover:bg-green-700 text-white font-bold py-5 px-10 text-base rounded">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
@endsection
