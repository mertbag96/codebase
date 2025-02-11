<x-layout-auth>
    <div class="relative flex flex-col justify-center items-center">
        <div class="absolute inset-0 grid grid-cols-2 -space-x-52 opacity-20 z-10">
            <div class="blur-[106px] h-56 bg-gradient-to-br from-primary to-purple-400 dark:from-blue-700"></div>
            <div class="blur-[106px] h-32 bg-gradient-to-r from-cyan-400 to-sky-300 dark:to-indigo-600"></div>
        </div>

        <div class="w-[40%] bg-slate-700/10 py-12 px-8 border border-sky-400 rounded-lg flex flex-col justify-center items-center z-20">
            <div>
                <a href="/" class="flex items-center gap-0 font-bold text-4xl">
                    <span class="text-white">Code</span>
                    <span class="text-sky-400">Base</span>
                </a>
            </div>

            <div class="mt-16">
                <h1 class="font-bold text-2xl text-white">
                    Sign up
                </h1>
            </div>

            <div class="mt-12">
                <form method="POST" action="#" autocomplete="off" class="w-full flex flex-wrap justify-between space-x-4">
                    @csrf

                    <div class="w-[44%]">
                        <label for="first-name" class="font-medium text-white">
                            First name
                        </label>
                        <input type="text" name="first_name" id="first-name" class="w-full mt-2 outline-none border border-slate-600 rounded-lg py-2 px-4 bg-slate-800 text-slate-50 focus:border-sky-500">
                    </div>

                    <div class="w-[44%]">
                        <label for="last-name" class="font-medium text-white">
                            Last name
                        </label>
                        <input type="text" name="last_name" id="last-name" class="w-full mt-2 outline-none border border-slate-600 rounded-lg py-2 px-4 bg-slate-800 text-slate-50 focus:border-sky-500">
                    </div>

                    <div class="w-full mt-6">
                        <label for="email" class="font-medium text-white">
                            Email Adress
                        </label>
                        <input type="email" name="email" id="email" class="w-full mt-2 outline-none border border-slate-600 rounded-lg py-2 px-4 bg-slate-800 text-slate-50 focus:border-sky-500">
                    </div>

                    <div class="w-full mt-6">
                        <label for="password" class="font-medium text-white">
                            Password
                        </label>
                        <input type="password" name="password" id="password" class="w-full mt-2 outline-none border border-slate-600 rounded-lg py-2 px-4 bg-slate-800 text-slate-50 focus:border-sky-500">
                    </div>

                    <div class="w-full mt-6 flex items-center">
                        <input type="checkbox" name="accept" id="accept" class="mt-2 outline-none border border-slate-600 rounded-lg py-2 px-4 bg-slate-800 text-slate-50 focus:border-sky-500 accent-sky-500">
                        <label for="accept" class="font-medium text-white mt-1.5 ml-2">
                            I have read and accept the terms and conditions.
                        </label>
                    </div>

                    <div class="w-full mt-6">
                        <button type="submit" class="w-full mt-2 outline-none border border-sky-500 rounded-lg py-2 px-4 bg-sky-500 text-slate-50 focus:border-sky-500 font-bold transition-colors duration-300 hover:bg-sky-400">
                            Sign up
                        </button>
                    </div>

                    <div class="w-full mt-12 text-white text-center">
                        Do you already have an account? 
                        <a href="/login" class="text-sky-500 font-bold hover:underline">
                            Sign in
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout-auth>