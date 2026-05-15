<section class="ml-1">
    <!-- HEADER START -->
    <article class="bg-white shadow-md px-12 py-2 text-[#333333]">
        <h1 class="text-xl font-bold">Create New Project</h1>
        <p class="text-sm ">Start a new project and collaborate with others</p>
    </article>
    <!-- HEADER END -->

    <!-- CREATE PROJECT START -->
    <form class="flex flex-col gap-4 mx-12 my-4">
        <div class="flex items-center gap-2">
            <img src="/assets/images/default-project.jpg" alt="Default Project Image" class="h-40 w-40 rounded-full">
            <button class="ml-4 font-semibold bg-[#2A2F5A] text-white py-3 px-5 rounded-lg hover:-translate-y-0.5 hover:bg-[#454b85] hover:shadow-md transition-all">Add Image</button>
            <button class="font-semibold bg-[#E8EFF7] text-[#333333] py-3 px-5 rounded-lg hover:-translate-y-0.5 hover:bg-[#cde1f7] hover:shadow-md transition-all">Delete Image</button>
        </div>

        <div class="w-full">
            <p class="text-sm font-semibold">Project Name</p>
            <input class="w-full mt-1 p-3 border border-[#8f8f8f] rounded-md text-[#333333] outline-none focus:border-[#2A2F5A] focus:ring-1 focus:ring-[#2A2F5A]" type="text" placeholder="Enter your project name...">
        </div>

        <div class="w-full">
            <p class="text-sm font-semibold">Categories</p>
            <input class="w-full mt-1 p-3 border border-[#8f8f8f] rounded-md text-[#333333] outline-none focus:border-[#2A2F5A] focus:ring-1 focus:ring-[#2A2F5A]" type="select" placeholder="Select your project categories">
        </div>

        <div class="w-full">
            <p class="text-sm font-semibold">Description</p>
            <input class="w-full mt-1 p-3 border border-[#8f8f8f] rounded-md text-[#333333] outline-none focus:border-[#2A2F5A] focus:ring-1 focus:ring-[#2A2F5A]" type="text" placeholder="What is this project about?">
        </div>

        <div class="w-full">
            <p class="text-sm font-semibold">Team Name</p>
            <input class="w-full mt-1 p-3 border border-[#8f8f8f] rounded-md text-[#333333] outline-none focus:border-[#2A2F5A] focus:ring-1 focus:ring-[#2A2F5A]" type="text" placeholder="Enter your team or group name...">
        </div>

        <div class="w-full">
            <p class="text-sm font-semibold">Members</p>
            <input class="w-full mt-1 p-3 border border-[#8f8f8f] rounded-md text-[#333333] outline-none focus:border-[#2A2F5A] focus:ring-1 focus:ring-[#2A2F5A]" type="text" placeholder="Enter your project name...">
        </div>

        <div class="flex justify-end mt-2 gap-2">
            <a href="/projects" class="font-semibold bg-[#E8EFF7] text-[#333333] py-3 px-5 rounded-lg hover:-translate-y-0.5 hover:bg-[#cde1f7] hover:shadow-md transition-all">Cancel</a>
            <button class="font-semibold bg-[#2A2F5A] text-white py-3 px-5 rounded-lg hover:-translate-y-0.5 hover:bg-[#454b85] hover:shadow-md transition-all">Create Project</button>
        </div>
    </form>
    <!-- CREATE PROJECT END -->
</section>