<x-layout>
    <x-header></x-header>
    @include('components.success-message')

    <div id="contact_us" class="flex flex-col lg:flex-row justify-around  h-full bg-white px-4 lg:px-10 py-5 mb-20 mt-6 lg:mt-16">
        <div class="px-2 sm:px-8 lg:px-5 ">
            <h1 class="uppercase tracking-wide text-center lg:text-start">Connect with us</h1>
            <div class="w-16 m-auto lg:m-1 lg:w-1/6 h-[1px] bg-neutral "></div>
            <h1 class="text-4xl md:text-6xl font-bold text-gray-900 tracking-wide mt-10">Fill out a form</h1>

            <form action="{{route('contact.store')}}" method="post" class="pl-1">
                @csrf
                <div class="flex flex-col lg:flex-row space-y-4 lg:space-y-0 lg:space-x-4 mt-10">
                    <div class="flex flex-col w-full lg:w-1/2">
                        <label for="name" class="text-sm text-gray-900 font-bold mb-1">Name</label>
                        <input type="text" name="name" id="name" class="border border-gray-300 outline-0 bg-white p-3 rounded-md"
                               placeholder="name" required>
                    </div>
                    <div class="flex flex-col w-full lg:w-1/2">
                        <label for="email" class="text-sm text-gray-900 font-bold mb-1">Email</label>
                        <input type="email" name="email" id="email" class="border border-gray-300 outline-0 bg-white p-3 rounded-md"
                               placeholder="email" required>
                    </div>
                </div>
                <div class="flex flex-col lg:flex-row space-y-4 lg:space-y-0 lg:space-x-4 mt-10">
                    <div class="flex flex-col w-full lg:w-1/2">
                        <label for="company" class="text-sm text-gray-900 font-bold mb-1">Company</label>
                        <input type="text" name="company" id="company" class="border border-gray-300 outline-0 bg-white p-3 rounded-md"
                               placeholder="company" required>
                    </div>
                    <div class="flex flex-col w-full lg:w-1/2">
                        <label for="text" class="text-sm text-gray-900 font-bold mb-1">Subject</label>
                        <input type="text" name="text" id="text" class="border border-gray-300 outline-0 bg-white p-3 rounded-md"
                                   placeholder="subject" required>
                    </div>

                </div>

                <button
                    type="submit"
                    class="group flex items-center space-x-2 rounded-full px-5 py-2 border border-gray-900 text-gray-900 hover:bg-neutral hover:text-white mt-10">
                    <span>send</span>
                </button>

            </form>

        </div>

        <div class="px-6 relative ">
            <h1 class="uppercase tracking-wide mt-10 text-center lg:text-start lg:mt-0">Contact Us</h1>
            <div class="w-16 m-auto lg:m-1 lg:w-1/3 h-[1px] bg-neutral "></div>
            <div class="mt-10 sm:flex sm:flex-row items-center sm:justify-around lg:flex-col lg:items-start ">
                <h1 class=" text-4xl md:text-6xl"><span class="font-bold text-gray-900 ">Email us</span></h1>
                <div class="mt-6 space-y-4 pl-1">
                    <span>For collaboration</span>
                    <div>
                        <a href="mailto:hr@autotechno.ge" class="font-bold text-gray-900 text-lg">hr@autotechno.ge </a>
                    </div>

                    <div>For career</div>
                    <div>
                        <a href="mailto:hr1@autotechno.ge" class="font-bold text-gray-900 text-lg">hr1@autotechno.ge </a>
                    </div>

                    <div class="flex space-x-4 mt-10">
                        <a href="https://www.facebook.com/AutotechnoLLC" target="_blank">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                class="fill-current">
                                <path
                                    d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path>
                            </svg>
                        </a>

{{--                        <a href="https://twitter.com/GazelleFinance">--}}
{{--                            <img src="{{asset('icons/twitterIcon.svg')}}" alt=""--}}
{{--                                 width="40" class="rounded-full"></a>--}}

                        <a href="https://www.linkedin.com/company/autotechno/" target="_blank">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                class="fill-current">
                                <path d="M22.23 0H1.77C.79 0 0 .77 0 1.73v20.54C0 23.23.79 24 1.77 24h20.46c.98 0 1.77-.77 1.77-1.73V1.73C24 .77 23.21 0 22.23 0zM7.06 20.16H3.56V9h3.5v11.16zm-1.75-12.9c-1.12 0-2.03-.91-2.03-2.03S4.19 3.2 5.31 3.2c1.12 0 2.03.91 2.03 2.03S6.43 7.26 5.31 7.26zM20.16 20.16h-3.5v-5.39c0-1.29-.03-2.94-1.79-2.94-1.79 0-2.07 1.4-2.07 2.85v5.48h-3.5V9h3.36v1.52h.05c.47-.89 1.61-1.83 3.31-1.83 3.54 0 4.19 2.33 4.19 5.36v6.11z"/>
                            </svg>

                        </a>
                    </div>

                </div>

            </div>
        </div>
    </div>
</x-layout>

