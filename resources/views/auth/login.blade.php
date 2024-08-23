<x-guest-layout>
    <section>
        <!-- Form -->
        <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700 hover:border-yellow-400 hover:border hover:border-1">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white text-center">
                    Sign in to your account
                </h1>

                <form method="POST" action="{{ route('login') }}" class="space-y-4 md:space-y-6">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <label for="email" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                        <input id="email" name="email" type="email" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required autofocus autocomplete="username">
                        <x-input-error :messages="$errors->get('email')" class="mt-1" />
                    </div>

                    <!-- Password -->
                    <div class="mt-3">
                        <label for="password" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <div class="relative">
                            <input id="password" name="password" type="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required autocomplete="current-password">
                            <button type="button" onclick="togglePassword()" class="absolute inset-y-0 right-3 flex items-center">
                                <svg id="eye-icon" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                </svg>
                            </button>
                        </div>
                        <x-input-error :messages="$errors->get('password')" class="mt-1" />
                    </div>

                    <!-- Remember Me -->
                    <div class="flex items-center justify-between">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="remember_me" name="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800">
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="remember_me" class="text-gray-500 dark:text-gray-300">Remember me</label>
                            </div>
                        </div>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-sm font-medium text-primary-600 hover:underline dark:text-white">Forgot password?</a>
                        @endif
                    </div>

                    <!-- Submit Button -->
                    <x-primary-button class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 flex items-center justify-center mb-2">
                        {{ __('Log in') }}
                    </x-primary-button>

                    <!-- Additional Link -->
                    <p class="text-center text-sm font-light text-gray-500 dark:text-white mt-1">
                        Don’t have an account yet? <a href="{{ __('register') }}" class="font-medium text-primary-600 hover:underline dark:text-primary-500 hover:text-yellow-400">Sign up</a>
                    </p>
                </form>
            </div>
        </div>
    </section>
</x-guest-layout>

<script>
    function togglePassword() {
        const passwordInput = document.getElementById('password');
        const eyeIcon = document.getElementById('eye-icon');
        const isPassword = passwordInput.type === 'password';

        passwordInput.type = isPassword ? 'text' : 'password';

        eyeIcon.innerHTML = isPassword ?
        `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.477 0-8.268-2.943-9.542-7a10.014 10.014 0 012.982-4.972M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.924 17.924A10.05 10.05 0 0112 19c-4.477 0-8.268-2.943-9.542-7a10.014 10.014 0 012.982-4.972M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>` :
        `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>`;
    }
</script>
