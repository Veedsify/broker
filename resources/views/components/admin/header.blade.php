<nav class="fixed top-0 left-0 right-0 z-10 flex items-center bg-white   print:hidden  ltr:pr-6 rtl:pl-6">

    <div class="flex justify-between w-full">
        <div class="flex items-center topbar-brand">
            <div
                class="hidden lg:flex navbar-brand items-center justify-between shrink px-6 h-[70px]  ltr:border-r rtl:border-l bg-[#fbfaff] border-gray-50   shadow-none">
                <a href="#"
                    class="flex items-center text-lg flex-shrink-0 font-bold dark:text-white leading-[69px]">
                    <img src="/admins/images/logo3.png" alt=""
                        class="inline-block w-6 h-6 align-middle ltr:xl:mr-2 rtl:xl:ml-2">
                    <span class="hidden font-bold text-gray-700 align-middle xl:block leading-[69px]">Minia</span>
                </a>
            </div>
            <button type="button"
                class="group-data-[sidebar-size=sm]:border-b border-b border-[#e9e9ef]  dark:lg:border-transparent lg:border-transparent  group-data-[sidebar-size=sm]:border-[#e9e9ef] group-data-[sidebar-size=sm]: text-gray-800 dark:text-white h-[70px] px-4 ltr:-ml-[52px] rtl:-mr-14 py-1 vertical-menu-btn text-16"
                id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>

        </div>
        <div class="flex justify-between w-full items-center border-b border-[#e9e9ef]  ltr:pl-6 rtl:pr-6">
            <div>
                <form class="hidden app-search xl:block">
                    <div class="relative inline-block">
                        <input type="text"
                            class="pl-4 pr-[40px] border-0 rounded bg-[#f8f9fa] dark:bg-[#363a38] focus:ring-0 text-13 placeholder:text-13 dark:placeholder:text-gray-200  max-w-[223px]"
                            placeholder="Search...">
                        <button
                            class="py-1.5 px-2.5 w-9 h-[34px] text-white bg-violet-500 inline-block absolute ltr:right-1 top-1 rounded shadow shadow-violet-100 dark:shadow-gray-900 rtl:left-1 rtl:right-auto"
                            type="button"><i class="align-middle bx bx-search-alt"></i></button>
                    </div>
                </form>
            </div>
            <div class="flex">
                <div>
                    <div class="relative block dropdown sm:hidden">
                        <button type="button" class="text-xl px-4 h-[70px] text-gray-600 dropdown-toggle"
                            data-dropdown-toggle="navNotifications">
                            <i data-feather="search" class="w-5 h-5"></i>
                        </button>

                        <div class="absolute top-0 z-50 hidden px-4 mx-4 list-none bg-white border rounded shadow  dropdown-menu -left-36 w-72 border-gray-50   dark:text-gray-300"
                            id="navNotifications">
                            <form class="py-3 dropdown-item" aria-labelledby="navNotifications">
                                <div class="m-0 form-group">
                                    <div class="flex w-full">
                                        <input type="text" class="border-gray-100   w-fit" placeholder="Search ..."
                                            aria-label="Search Result">
                                        <button
                                            class="text-white border-l-0 border-transparent rounded-l-none btn btn-primary bg-violet-500"
                                            type="submit"><i class="mdi mdi-magnify"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="relative hidden dropdown language sm:block">
                    <button class="btn border-0 py-0 dropdown-toggle px-3 h-[70px]" type="button" aria-expanded="false"
                        data-dropdown-toggle="navNotifications">
                        <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAQEBAQEBAQEBAQGBgUGBggHBwcHCAwJCQkJCQwTDA4MDA4MExEUEA8QFBEeFxUVFx4iHRsdIiolJSo0MjRERFz/2wBDAQQEBAQEBAQEBAQGBgUGBggHBwcHCAwJCQkJCQwTDA4MDA4MExEUEA8QFBEeFxUVFx4iHRsdIiolJSo0MjRERFz/wAARCAAqAEADASIAAhEBAxEB/8QAGwAAAgIDAQAAAAAAAAAAAAAAAAcDBgEEBQj/xAA1EAABAgIHBwIFAwUAAAAAAAABAgQAAwUGBxESFlYTFBVRk6HTMVciI5GS0hdBYiElRVKC/8QAGgEAAgMBAQAAAAAAAAAAAAAAAAYBBQcDBP/EADERAAAEAwMKBQUAAAAAAAAAAAABAgMEBRESIZETFBUWUVRWkpPSBjIzZoExQVNk0f/aAAwDAQACEQMRAD8AoRouTPo5m9mKnNJ0yS7nrcOydi8VLWAJbYpQSV88X7x0zV9nxZcnc6RwCcuVwr/KACRtNqRgw4L+0RtEhtQzadMG6hwwfoTOegOJLoiYkYGyMB2MwemOO0W39wNF7k62ofTF8Mxp4okbpftN6wXGX++CNHU4ojWRKOlFl8VFeK23oNotqsrcmbj3A7/JxFoz3kkLQ6vReFD+MWWqNDUPx+r8mlHDpk0cSX22fkjd5+xKwhTclIOH+lxjUbqQuXIfCdLmIbIohK3siQENGhxH4XkjB89Q/wBo6lW10QxrDVt/TlFOXFGzUUkpSpaxu7n4lpC20v5eySk+qY8UzWapfHktRWci5W15fTreLCUm4U0lxtG7lM5as5EiNytovJauqHXlazfWk76p/CDK1m+tJ31T+EGYbK9KPPtHlgzDZXpR59o8sZRRjZCYrG1VnXuTkhAZWs31pO+qfwjKas2cJIUmuk4KBvBBSCCP+IxmGyvSjz7R5YMw2V6UefaPLBRj9TFYKzo7j1k5IQI9FS6/MWqGrGpdJSXCpLhs8nYDOTPlzFAgJSQQjliTG2aqVzLhUn9P6T4Nty4Sw+PGJhlbPFt8OP8AlHpHglrOp2HbwwcEtZ1Ow7eGHHWmIP6y06/P9GZaswnEkr6jnYPNMuq9ooSifOqdSUykWwaJYuRKwiQlqSQlSAnDNv5qixVQoGu9DViomnBUN4HTdDsuVzQrZz1uMVygj0Rdf6CHpwS1nU7Dt4YOCWs6nYdvDHJ/xJEPsvM6PUjKINFpJXlUqbR2h/DsEw+y8ufyp1KFpUaFuu2VU+x0QIs0V90IjprgzRX3QiOmuJeCWs6nYdvDBwS1nU7Dt4YW6vbYrlQGazKPbvXihFmivuhEdNcGaK+6ER01xLwS1nU7Dt4YOCWs6nYdvDBV7bFcqAWZR7d68UK1lep3uIrrIgyvU73EV1kQqXqEIeukIQAkTZgAAuAuMa1w5RW5w3uyMVB/TI5goiPWOLvL8THYG/lep3uIrrIgyvU73EV1kQoLhyguHKDOW92RioToGYcRxfSY7A38r1O9xFdZEGV6ne4iusiFBcOUFw5QZy3uyMVA0DMOI4vpMdgb+V6ne4iusiDK9TvcRXWRCguHKNlkhC3rVC0ApM2WCCLwbzBnDe7IxUIVI5glJnrHF3FX0mOwf//Z"
                            alt="" class="h-4" id="header-lang-img">
                    </button>
                    <div class="absolute z-50 hidden w-40 list-none bg-white rounded shadow dropdown-menu -left-24 "
                        id="navNotifications">
                        <ul class="border border-gray-50 dark:border-gray-700" aria-labelledby="navNotifications">
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50/50 dark:text-gray-200 dark:hover:bg-zinc-600/50 "><img
                                        src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAQEBAQEBAQEBAQGBgUGBggHBwcHCAwJCQkJCQwTDA4MDA4MExEUEA8QFBEeFxUVFx4iHRsdIiolJSo0MjRERFz/2wBDAQQEBAQEBAQEBAQGBgUGBggHBwcHCAwJCQkJCQwTDA4MDA4MExEUEA8QFBEeFxUVFx4iHRsdIiolJSo0MjRERFz/wAARCAAqAEADASIAAhEBAxEB/8QAGwAAAgIDAQAAAAAAAAAAAAAAAAcDBgEEBQj/xAA1EAABAgIHBwIFAwUAAAAAAAABAgQAAwUGBxESFlYTFBVRk6HTMVciI5GS0hdBYiElRVKC/8QAGgEAAgMBAQAAAAAAAAAAAAAAAAYBBQcDBP/EADERAAAEAwMKBQUAAAAAAAAAAAABAgMEBRESIZETFBUWUVRWkpPSBjIzZoExQVNk0f/aAAwDAQACEQMRAD8AoRouTPo5m9mKnNJ0yS7nrcOydi8VLWAJbYpQSV88X7x0zV9nxZcnc6RwCcuVwr/KACRtNqRgw4L+0RtEhtQzadMG6hwwfoTOegOJLoiYkYGyMB2MwemOO0W39wNF7k62ofTF8Mxp4okbpftN6wXGX++CNHU4ojWRKOlFl8VFeK23oNotqsrcmbj3A7/JxFoz3kkLQ6vReFD+MWWqNDUPx+r8mlHDpk0cSX22fkjd5+xKwhTclIOH+lxjUbqQuXIfCdLmIbIohK3siQENGhxH4XkjB89Q/wBo6lW10QxrDVt/TlFOXFGzUUkpSpaxu7n4lpC20v5eySk+qY8UzWapfHktRWci5W15fTreLCUm4U0lxtG7lM5as5EiNytovJauqHXlazfWk76p/CDK1m+tJ31T+EGYbK9KPPtHlgzDZXpR59o8sZRRjZCYrG1VnXuTkhAZWs31pO+qfwjKas2cJIUmuk4KBvBBSCCP+IxmGyvSjz7R5YMw2V6UefaPLBRj9TFYKzo7j1k5IQI9FS6/MWqGrGpdJSXCpLhs8nYDOTPlzFAgJSQQjliTG2aqVzLhUn9P6T4Nty4Sw+PGJhlbPFt8OP8AlHpHglrOp2HbwwcEtZ1Ow7eGHHWmIP6y06/P9GZaswnEkr6jnYPNMuq9ooSifOqdSUykWwaJYuRKwiQlqSQlSAnDNv5qixVQoGu9DViomnBUN4HTdDsuVzQrZz1uMVygj0Rdf6CHpwS1nU7Dt4YOCWs6nYdvDHJ/xJEPsvM6PUjKINFpJXlUqbR2h/DsEw+y8ufyp1KFpUaFuu2VU+x0QIs0V90IjprgzRX3QiOmuJeCWs6nYdvDBwS1nU7Dt4YW6vbYrlQGazKPbvXihFmivuhEdNcGaK+6ER01xLwS1nU7Dt4YOCWs6nYdvDBV7bFcqAWZR7d68UK1lep3uIrrIgyvU73EV1kQqXqEIeukIQAkTZgAAuAuMa1w5RW5w3uyMVB/TI5goiPWOLvL8THYG/lep3uIrrIgyvU73EV1kQoLhyguHKDOW92RioToGYcRxfSY7A38r1O9xFdZEGV6ne4iusiFBcOUFw5QZy3uyMVA0DMOI4vpMdgb+V6ne4iusiDK9TvcRXWRCguHKNlkhC3rVC0ApM2WCCLwbzBnDe7IxUIVI5glJnrHF3FX0mOwf//Z"
                                        alt="user-image" class="inline-block h-3 mr-1"> <span
                                        class="align-middle">English</span></a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50/50 dark:text-gray-200 dark:hover:bg-zinc-600/50 "><img
                                        src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAQEBAQEBAQEBAQGBgUGBggHBwcHCAwJCQkJCQwTDA4MDA4MExEUEA8QFBEeFxUVFx4iHRsdIiolJSo0MjRERFz/2wBDAQQEBAQEBAQEBAQGBgUGBggHBwcHCAwJCQkJCQwTDA4MDA4MExEUEA8QFBEeFxUVFx4iHRsdIiolJSo0MjRERFz/wAARCAAqAEADASIAAhEBAxEB/8QAGgAAAwEBAQEAAAAAAAAAAAAAAAUIBgQBAv/EACkQAAIBAgQFBAMBAAAAAAAAAAECAwAEBQYREhUWVZTRExRRUiIxQXH/xAAaAQACAwEBAAAAAAAAAAAAAAAABgEDBwQC/8QAKREAAgEDAgUDBQEAAAAAAAAAAQIDAAQRIVQFEhMUkhWRkwYWNFNxgf/aAAwDAQACEQMRAD8AyzSSSMWZ2ZmbVmJJJJ/przc32aq04BgXRrDtk8V8PguW4Y5JrrDcNggiR3eR7eMKqqNST+NZfH9WxSukcdhKzuQqgMNSa2b1+ID8Z/epO3N9mo3N9mqlbC7yLiF/Lh8WHwRS+pshe5w4QpK2u3buK/idw0Aan/AMC6NYdsniui6+omsigueHSLzZ5SJFIOP5Xo8dVTyvZyqcA4bTQ/0VJe5vs1G5vs1VpwDAujWHbJ4o4BgXRrDtk8VyfeFvspPIVHr8W3f3qS9zfZq9WSSNgyuysraqwJBBH9FVnwDAujWHbJ4o4BgXRrDtk8UfeFvspPIUevRbZ/enFYLMM/D0ZbLD8QtPd3UbX07e3kUxsCm5VjaRwGAGm5K3tZWe1fFbO4w9cCTCgzBzcL6Tes4kDEuI2JJPyaW+ENbIl7JcdPRY+UO4U5LjUAnXFLkcqxTwBwSjNhsAkf7iluRsTytMbuC6ksPd2uIMDLd7bZxbFQFKkiMFtQdRWlshavcXN9Dhl5BLcNtmmlkt2icwnaoURO5BA+wFZmfIqJbotpiVuXnhMd0TAwOpZ9HTQjcdH0/KtLbPuugnLiWuxHT32sReZQw2hthLf5rTJxm74XcWkkNrFbo8VmoEglQu7FkY5xy5Oh0ql2w5m7h5WmkcEBHVUQEkDBNOKKKKQKsooooooqT+aMx9cv8AuH80c0Zj65f9w/mubEY40v75ERVVbiVVAGgAB/Qrl2r8Cto7S120PxrT6IoSAehH4LTPmjMfXL/uH80c0Zj65f8AcP5pZtX4FG1fgUdpa7aH41qejD+mPwWmfNGY+uX/AHD+aOaMx9cv+4fzSzavwKNq/Ao7S120PxrR0Yf0x+C0z5ozH1y/7h/NHNGY+uX/AHD+aWbV+BXVh0cb39ijorK1xErAjUEE/o0dna7aH41qDFCBnoR+C1//2Q=="
                                        alt="user-image" class="inline-block h-3 mr-1"> <span
                                        class="align-middle">Spanish</span></a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50/50 dark:text-gray-200 dark:hover:bg-zinc-600/50 "><img
                                        src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAQEBAQEBAQEBAQGBgUGBggHBwcHCAwJCQkJCQwTDA4MDA4MExEUEA8QFBEeFxUVFx4iHRsdIiolJSo0MjRERFz/2wBDAQQEBAQEBAQEBAQGBgUGBggHBwcHCAwJCQkJCQwTDA4MDA4MExEUEA8QFBEeFxUVFx4iHRsdIiolJSo0MjRERFz/wAARCAAqAEADASIAAhEBAxEB/8QAGAABAQEBAQAAAAAAAAAAAAAAAAcCBQH/xAAlEAABAgILAQEAAAAAAAAAAAABAAIDUQUREhYXVFWjpNLiITL/xAAYAQEBAQEBAAAAAAAAAAAAAAAABwEDBf/EACURAAACCQUBAQAAAAAAAAAAAAABAgMEBREVVKPRFBZVkpTSUf/aAAwDAQACEQMRAD8AiL4sWI98SJFe57nEucSSST9JJK8tOmV3bs03kdyH2S7NN5Hch9l31bLVKe5D1JA/eEb/ADLMDhWnTKWnTK7t2abyO5D7Jdmm8juQ+yaxlqlPcgkD94Rv8yzA4Vp0ylp0yu7dmm8juQ+yXZpvI7kPsmsZapT3IJA/eEb/ADLMDhWnTK9ZFiw3siQ4r2va4FrgSCCPoIIXcuzTeR3IfZLs03kdyH2TVstUp7kEgfvCN/mWYFWRVjC8a5xfaYXjXOL7UunzqqraeBft0uKutLPkSdFWMLxrnF9pheNc4vtJ86qq2ngN0uKutLPkSdFWMLxrnF9pheNc4vtJ86qq2ngN0uKutLPkSdFWMLxrnF9pheNc4vtJ86qq2ngN0uKutLPkVpFt/wC3iRSoSU5SRgZlER+Iwi3UJJUJLIBEYRbqEkqEkgERhFuoSRn7YJlaSMTIv0wiP//Z"
                                        alt="user-image" class="inline-block h-3 mr-1"> <span
                                        class="align-middle">German</span></a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50/50 dark:text-gray-200 dark:hover:bg-zinc-600/50 "><img
                                        src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAQEBAQEBAQEBAQGBgUGBggHBwcHCAwJCQkJCQwTDA4MDA4MExEUEA8QFBEeFxUVFx4iHRsdIiolJSo0MjRERFz/2wBDAQQEBAQEBAQEBAQGBgUGBggHBwcHCAwJCQkJCQwTDA4MDA4MExEUEA8QFBEeFxUVFx4iHRsdIiolJSo0MjRERFz/wAARCAAqAEADASIAAhEBAxEB/8QAGwAAAgIDAQAAAAAAAAAAAAAAAAgCBwEDBAX/xAAjEAACAQMEAgMBAAAAAAAAAAABAgADBzYEEXSxUbISIUQW/8QAFwEBAQEBAAAAAAAAAAAAAAAABwYFCP/EACcRAAIAAgkEAwAAAAAAAAAAAAABAgMEBQYHETM0dII1NrHBEiEx/9oADAMBAAIRAxEAPwD1mdmYu7sWLbkk7kkyO58yMJzKT5ZtqSf6at9/gre6xi4ulqcmrcCr7rGLjRYXoS3Ez0atDyeTCLPdnKl+/wAVLtozEWa7OVrwqPbShrPTc4RGu77he1m+UVlufMyrupDK5UqdwQdiCJiEnh2aT+mjuhCEFzi4s21OTVuBV91jFxdLU5NW4FX3WMXGiwnQluJno1aFk8mEWa7OVrwqPbRmYs12crXhUe2lDWem5wiNd33C9rN8orKEISeHc7oT0NaiJrdWiIFUVXAAGwABmj4r4EGYocG1icWliWpyatwKvusYuLvazJq3Cq+yxiozWF6EtxM9GrQsnkyMWa7OVrwqPbRm4tF18qXhUu2lDWem5wiNd33A9rN8oq6E27DxOnRIj63So6AqatMEEbg7mTw6RR/GFvD8WJ//2Q=="
                                        alt="user-image" class="inline-block h-3 mr-1"> <span
                                        class="align-middle">Italian</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div>
                    <div class="relative dropdown text-gray-600">
                        <div class="relative">
                            <button type="button" class="btn border-0 h-[70px] dropdown-toggle px-4  ltr:mr-2 rtl:ml-2"
                                aria-expanded="false" data-dropdown-toggle="notification">
                                <i data-feather="bell" class="w-5 h-5"></i>
                            </button>
                            <span
                                class="absolute text-xs px-1 bg-red-500 text-white font-medium rounded-full left-6 top-2.5">5</span>
                        </div>
                        <div class="absolute z-50 hidden list-none bg-white rounded shadow dropdown-menu w-80  "
                            id="notification">
                            <div class="border rounded border-gray-50 dark:border-gray-700"
                                aria-labelledby="notification">
                                <div class="grid grid-cols-12 p-4">
                                    <div class="col-span-6">
                                        <h6 class="m-0 text-gray-700 "> Notifications </h6>
                                    </div>
                                    <div class="col-span-6 justify-self-end">
                                        <a href="#!" class="text-xs underline dark:text-gray-400"> Unread (3)</a>
                                    </div>
                                </div>
                                <div class="max-h-56" data-simplebar="">
                                    <div>
                                        <a href="#!" class="text-reset notification-item">
                                            <div class="flex px-4 py-2 hover:bg-gray-50/50 dark:hover:bg-zinc-700/50">
                                                <div class=" ltr:mr-3 rtl:ml-3">
                                                    <img src="/admins/images/avatar-3.jpg"
                                                        class="w-8 h-8 rounded-full" alt="user-pic">
                                                </div>
                                                <div class="flex-grow">
                                                    <h6 class="mb-1 text-gray-700 ">James Lemire
                                                    </h6>
                                                    <div class="text-gray-600 text-13">
                                                        <p class="mb-1 dark:text-gray-400">It will seem like
                                                            simplified English.</p>
                                                        <p class="mb-0"><i
                                                                class="mdi mdi-clock-outline dark:text-gray-400"></i>
                                                            <span>1 hour ago</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#!" class="text-reset notification-item">
                                            <div class="flex px-4 py-2 hover:bg-gray-50/50 dark:hover:bg-zinc-700/50">
                                                <div class=" ltr:mr-3 rtl:ml-3">
                                                    <div class="w-8 h-8 text-center rounded-full bg-violet-500">
                                                        <i class="text-xl leading-relaxed text-white bx bx-cart"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow">
                                                    <h6 class="mb-1 text-gray-700 ">Your order is
                                                        placed</h6>
                                                    <div class="text-gray-600 text-13">
                                                        <p class="mb-1 dark:text-gray-400">If several languages
                                                            coalesce the grammar</p>
                                                        <p class="mb-0"><i
                                                                class="mdi mdi-clock-outline dark:text-gray-400"></i>
                                                            <span>3 min ago</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#!" class="text-reset notification-item">
                                            <div class="flex px-4 py-2 hover:bg-gray-50/50 dark:hover:bg-zinc-700/50">
                                                <div class=" ltr:mr-3 rtl:ml-3">
                                                    <div class="w-8 h-8 text-center bg-green-500 rounded-full">
                                                        <i
                                                            class="text-xl leading-relaxed text-white bx bx-badge-check"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow">
                                                    <h6 class="mb-1 text-gray-700 ">Your item is
                                                        shipped</h6>
                                                    <div class="text-gray-600 text-13">
                                                        <p class="mb-1 dark:text-gray-400">If several languages
                                                            coalesce the grammar</p>
                                                        <p class="mb-0"><i
                                                                class="mdi mdi-clock-outline dark:text-gray-400"></i>
                                                            <span>3 min ago</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#!" class="text-reset notification-item">
                                            <div class="flex px-4 py-2 hover:bg-gray-50/50 dark:hover:bg-zinc-700/50">
                                                <div class=" ltr:mr-3 rtl:ml-3">
                                                    <img src="/admins/images/avatar-6.jpg"
                                                        class="w-8 h-8 rounded-full" alt="user-pic">
                                                </div>
                                                <div class="flex-grow">
                                                    <h6 class="mb-1 text-gray-700 ">Salena
                                                        Layfield</h6>
                                                    <div class="text-gray-600 text-13">
                                                        <p class="mb-1 dark:text-gray-400">As a skeptical Cambridge
                                                            friend of mine occidental.</p>
                                                        <p class="mb-0"><i
                                                                class="mdi mdi-clock-outline dark:text-gray-400"></i>
                                                            <span>1 hour ago</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="grid p-1 border-t border-gray-50  justify-items-center">
                                    <a class="border-0 btn text-violet-500" href="javascript:void(0)">
                                        <i class="mr-1 mdi mdi-arrow-right-circle"></i> <span>View More..</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="relative dropdown">
                        <button type="button"
                            class="flex items-center px-3 py-2 h-[70px] border-x border-gray-50 bg-gray-50/30  dropdown-toggle   "
                            id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="true">
                            <img class="border-[3px] border-gray-700 dark:border-zinc-400 rounded-full w-9 h-9 ltr:xl:mr-2 rtl:xl:ml-2"
                                src="/admins/images/avatar-1.jpg" alt="Header Avatar">
                            <span class="hidden font-medium xl:block">Shawn L.</span>
                            <i class="hidden align-bottom mdi mdi-chevron-down xl:block"></i>
                        </button>
                        <div class="absolute top-0 z-50 hidden w-40 list-none bg-white dropdown-menu dropdown-animation rounded shadow  "
                            id="profile/log">
                            <div class="border border-gray-50 " aria-labelledby="navNotifications">
                                <div class="dropdown-item ">
                                    <a class="block px-3 py-2 hover:bg-gray-50/50 dark:hover:bg-zinc-700/50"
                                        href="{{ route('admin.profile') }}">
                                        <i class="mr-1 align-middle mdi mdi-face-man text-16"></i> Profile
                                    </a>
                                </div>
                                <div class="dropdown-item ">
                                    <a class="block px-3 py-2 hover:bg-gray-50/50 dark:hover:bg-zinc-700/50"
                                        href="lock-screen.html">
                                        <i class="mr-1 align-middle mdi mdi-lock text-16"></i> Lock Screen
                                    </a>
                                </div>
                                <hr class="border-gray-50 dark:border-gray-700">
                                <div class="dropdown-item ">
                                    <a class="block p-3 hover:bg-gray-50/50 dark:hover:bg-zinc-700/50"
                                        href="logout.html">
                                        <i class="mr-1 align-middle mdi mdi-logout text-16"></i> Logout
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
