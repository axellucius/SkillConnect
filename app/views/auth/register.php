<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkillConnect</title>
    <link rel="stylesheet" href="/css/output.css">
</head>

<body class="bg-cover bg-center min-h-screen flex items-center justify-center" style="background-image: url('/assets/images/auth-background.jpg')">
    <div class="flex items-center gap-8 bg-white/30 backdrop-blur-md  py-4 px-12 rounded-2xl shadow-lg">
        <!-- IMAGE START -->
        <div class="w-[400px]">
            <img src="/assets/images/register.png" class="w-full h-full object-cover" alt="register-image">
        </div>
        <!-- IMAGE END -->

        <!-- MAIN START -->
        <main class="flex flex-col gap-6">
            <div>
                <p class="text-xl">START YOUR SKILL JOURNEY</p>
                <h1 class="font-bold text-4xl pb-2">Create your account!</h1>
            </div>

            <form action="" class="flex flex-col gap-4">
                <div class="relative">
                    <input type="text" placeholder="Username" class="w-full bg-black text-white p-4 pr-13 rounded-lg">
                    <svg class="w-7 h-7 text-white absolute right-2.5 top-1/2 -translate-y-1/2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A9 9 0 0112 15c2.5 0 4.847 1.02 6.879 2.804M15 11a3 3 0 11-6 0 3 3 0 016 0" />
                    </svg>
                </div>

                <div class="relative">
                    <input type="email" placeholder="Email" class="w-full bg-black text-white p-4 pr-13 rounded-lg">
                    <svg class="w-6 h-6 text-white absolute right-3 top-1/2 -translate-y-1/2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                    </svg>
                </div>

                <div class="relative">
                    <input type="password" placeholder="Password" class="w-full bg-black text-white p-4 pr-13 rounded-lg">
                    <svg class="w-6 h-6 text-white absolute right-3 top-1/2 -translate-y-1/2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                </div>

                <div class="relative">
                    <input type="password" placeholder="Confirm password" class="w-full bg-black text-white p-4 pr-13 rounded-lg">
                    <svg class="w-6 h-6 text-white absolute right-3 top-1/2 -translate-y-1/2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                </div>

                <button type="submit" class="w-full border rounded-full py-3 mt-4 font-semibold text-[16px] hover:bg-black hover:text-white transition">Create account</button>

                <p>Already have an account? <a href="/login" class="font-bold hover:underline">Login</a></p>
            </form>
        </main>
        <!-- MAIN END -->
    </div>
</body>

</html>