<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkillConnect</title>
    <link rel="stylesheet" href="/css/output.css">
</head>

<body class="bg-cover bg-center min-h-screen flex items-center justify-between mr-5 ml-18" style="background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.5)), url('/assets/images/auth-bg.jpg')">
    <!-- LEFT START -->
    <div class="flex flex-col gap-96">
        <h1 class="text-white text-3xl font-bold">SkillConnect</h1>
        <div class="text-white flex flex-col gap-4 ">
            <h1 class="text-[40px] leading-11 font-semibold">Learn Together. Build Faster. <br> Connect Anywhere.</h1>
            <p class="text-lg font-light">Break the barriers of your classroom. Connect with <br> talented students from every department to turn your ideas into reality.</p>
        </div>
    </div>
    <!-- LEFT END -->

    <!-- MAIN START -->
    <main class="flex flex-col justify-center gap-7 px-20 w-136 h-160 rounded-2xl bg-white">
        <div class="flex flex-col">
            <h1 class="font-bold text-4xl pb-2">Create Your Account!</h1>
            <p class="text-md text-gray-500">START YOUR SKILL JOURNEY</p> 
        </div>

        <form action="" class="flex flex-col gap-4">
            <div class="relative">
                <input type="text" placeholder="Username" class="w-full text-sm border p-3 pr-13 rounded-lg">
                <svg class="w-7 h-7 absolute right-2.5 top-1/2 -translate-y-1/2"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5.121 17.804A9 9 0 0112 15c2.5 0 4.847 1.02 6.879 2.804M15 11a3 3 0 11-6 0 3 3 0 016 0" class="text-grey-100"/>
                </svg>
            </div>

            <div class="relative">
                <input type="email" placeholder="Email" class="w-full text-sm border p-3 pr-13 rounded-lg">
                <svg class="w-6 h-6 absolute right-3 top-1/2 -translate-y-1/2"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                </svg>
            </div>

            <div class="relative">
                <input type="password" placeholder="Password" class="w-full text-sm border p-3 pr-13 rounded-lg">
                <svg class="w-6 h-6 absolute right-3 top-1/2 -translate-y-1/2"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>
            </div>

            <div class="relative">
                <input type="password" placeholder="Confirm password" class="w-full text-sm border p-3 pr-13 rounded-lg">
                <svg class="w-6 h-6 absolute right-3 top-1/2 -translate-y-1/2"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>
            </div>

            <button type="submit"
                class="w-full border rounded-full py-3 mt-5 font-semibold text-[16px] bg-black text-white transition-transform duration-300 hover:-translate-y-1">Create
                account</button>

            <p class=" flex justify-center">Already have an account? <span class="text-white">.</span><a href="/login" class="font-bold hover:underline">Login</a></p>
        </form>
    </main>
    <!-- MAIN END -->
</body>

</html>