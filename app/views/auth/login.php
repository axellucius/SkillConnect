<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkillConnect</title>
    <link rel="stylesheet" href="/css/output.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

</head>
    <body class="min-h-screen bg-gradient-to-br from-gray-950 via-gray-900 to-black flex items-center justify-center p-4 md:p-6 lg:p-8 text-gray-100 antialiased">
        <div
            class="w-full max-w-6xl grid md:grid-cols-2 rounded-2xl overflow-hidden shadow-2xl border border-gray-800/40 bg-gray-900/20 backdrop-blur-sm">
            <div class="hidden md:block relative">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent z-10"></div>
                <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&q=80&w=1974"
                    alt="Developer coding" class="h-full w-full object-cover brightness-[0.9] contrast-[1.08]" />

                <div class="absolute bottom-10 left-10 z-20">
                    <p class="text-xl font-semibold tracking-wide text-white">
                        Keep growing your skills
                    </p>
                </div>
            </div>

            <!-- Right: Form -->
            <div class="p-8 md:p-12 lg:p-16 flex items-center bg-gray-900/70 backdrop-blur-md">

                <div class="w-full max-w-md mx-auto space-y-8">

                    <div class="text-center md:text-left">
                        <h1 class="text-4xl font-bold tracking-tight text-white">Welcome back!</h1>
                        <p class="mt-3 text-lg text-gray-400">
                            Sign in to continue your learning journey
                        </p>
                    </div>

                    <form id="loginForm" class="space-y-6">

                        <!-- Email -->
                        <div class="space-y-2">
                            <label for="email" class="block text-sm font-medium text-gray-300">
                                Email
                            </label>
                            <div class="relative">
                                <input type="email" id="email"
                                    class="w-full bg-gray-800/60 border border-gray-700 rounded-xl py-3.5 px-4 text-white placeholder-gray-500 focus:outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/30 transition-all duration-200"
                                    placeholder="you@example.com" required />
                                <div class="absolute inset-y-0 right-4 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <!-- Password -->
                        <div class="space-y-2">
                            <label for="password" class="block text-sm font-medium text-gray-300">
                                Password
                            </label>
                            <div class="relative">
                                <input type="password" id="password"
                                    class="w-full bg-gray-800/60 border border-gray-700 rounded-xl py-3.5 px-4 text-white placeholder-gray-500 focus:outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/30 transition-all duration-200"
                                    placeholder="••••••••" required />
                                <button type="button" id="togglePassword"
                                    class="absolute inset-y-0 right-4 flex items-center text-gray-400 hover:text-gray-200 transition-colors">
                                    <svg id="eyeIcon" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <!-- Submit -->
                        <button type="submit"
                            class="w-full bg-indigo-600 hover:bg-indigo-500 focus:bg-indigo-700 text-white font-semibold py-3.5 px-6 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-900 transition-all duration-200 shadow-lg shadow-indigo-500/20">
                            Sign in
                        </button>

                        <p class="text-center text-sm text-gray-500 mt-6">
                            Don't have an account?
                            <a href="#" class="text-indigo-400 hover:text-indigo-300 font-medium transition-colors">
                                Sign up
                            </a>
                        </p>    
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>