<x-app-layout>
    <div>
        <a href="/" class="flex items-center font-semibold hover:underline">
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
            </svg>
            <span class="ml-2">All ideas</span>
        </a>
    </div>

    <div class="idea-container hover:shadow-card  bg-white rounded-xl flex mt-4">
        <div class="flex flex-1 p-6">
            <a href="#" class="flex-none">
                <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar"
                     class="w-14 h-14 rounded-xl">
            </a>
            <div class="w-full mx-4">
                <h4 class="text-xl font-semibold">
                    <a href="#" class="hover:underline">A random title can go here</a>
                </h4>
                <div class="text-gray-600 mt-3">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. at autem culpa, deserunt dolore eius eos est eum fugit molestiae obcaecati placeat, quasi quo sint tempora vel velit?
                </div>

                <div class="flex items-center justify-between mt-6">
                    <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                        <div class="font-bold text-gray-900">Eslam 3basset</div>
                        <div>&bull;</div>
                        <div>10 hours ago</div>
                        <div>&bull;</div>
                        <div>Category</div>
                        <div>&bull;</div>
                        <div class="font-bold text-gray-900">3 Comments</div>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="bg-gray-200 text-xxs font-bold uppercase loading-none
                            rounded-full text-center w-28 h-7 py-2 px-4">Open</div>
                        <button class=" relative bg-gray-100 hover:bg-gray-200 border rounded-full h-7
                            transition duration-150 ease-in py-2 px-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16"> <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" style="color: rgba(163,163,163, .5)"/> </svg>
                            <ul class="hidden absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-6">
                                <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Mark as spam</a></li>
                                <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Delete Post</a></li>
                            </ul>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="buttons-container flex items-center justify-between mt-6">
       <div class="flex items-center space-x-4 ml-6">
           <button type="submit"
                   class="flex items-center justify-center text-white w-50 h-11 text-xs bg-blue
                   font-semibold rounded-xl border border-blue hover:bg-blue-hover transition
                   duration-150 ease-in px-6 py-3 mr-5">
               <span class="ml-1"> Reply</span>
           </button>
           <button type="button"
                   class="flex items-center justify-center w-30 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3"
           >
               <span> Set Status</span>
               <svg class="w-4 h-4 ml-2" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                   <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
               </svg>
           </button>
       </div>
        <div class="flex items-center space-x-3">
            <div class="bg-white font-semibold text-center rounded-xl px-3 py-2">
                <div class="text-xl loading-snug">12</div>
                <div class="text-gray-400 text-xs loading-none">Votes</div>
            </div>
            <button type="button"
                    class="w-32 h-11 uppercase text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3"
            >
                <span> Vote</span>
            </button>
        </div>
    </div>

    <div class="comments-container relative space-y-6 ml-22 my-8 mt-1 pt-4">
        <div class="comment-container relative hover:shadow-card  bg-white rounded-xl flex mt-4">
            <div class="flex flex-1 p-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=2" alt="avatar"
                         class="w-14 h-14 rounded-xl">
                </a>
                <div class="w-full mx-4">
{{--                    <h4 class="text-xl font-semibold">--}}
{{--                        <a href="#" class="hover:underline">A random title can go here</a>--}}
{{--                    </h4>--}}
                    <div class="text-gray-600 mt-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. at autem culpa, deserunt dolore vel velit?
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div class="font-bold text-gray-900">Eslam 3basset</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>

                        </div>
                        <div class="flex items-center space-x-2">
                            <button class=" relative bg-gray-100 hover:bg-gray-200 border rounded-full h-7
                            transition duration-150 ease-in py-2 px-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16"> <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" style="color: rgba(163,163,163, .5)"/> </svg>
                                <ul class="hidden absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-6">
                                    <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Mark as spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Delete Post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="is-admin comment-container relative hover:shadow-card  bg-white rounded-xl flex mt-4">
            <div class="flex flex-1 p-6">
               <div class="flex-none">
                   <a href="#" class="flex-none">
                       <img src="https://source.unsplash.com/200x200/?face&crop=face&v=3" alt="avatar"
                            class="w-14 h-14 rounded-xl">
                   </a>
                   <div class="text-center uppercase text-blue text-xxs font-bold mt-1">Admin</div>
               </div>
                <div class="w-full mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">Status Changed to "Under Construction"</a>
                    </h4>
                    <div class="text-gray-600 mt-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. at autem culpa, deserunt dolore vel velit?
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div class="font-bold text-blue">Islam 3basset</div>
                            <div>&bull;</div>
                            <div>12 hours ago</div>

                        </div>
                        <div class="flex items-center space-x-2">
                            <button class=" relative bg-gray-100 hover:bg-gray-200 border rounded-full h-7
                            transition duration-150 ease-in py-2 px-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16"> <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" style="color: rgba(163,163,163, .5)"/> </svg>
                                <ul class="hidden absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-6">
                                    <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Mark as spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Delete Post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="comment-container relative hover:shadow-card  bg-white rounded-xl flex mt-4">
            <div class="flex flex-1 p-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=4" alt="avatar"
                         class="w-14 h-14 rounded-xl">
                </a>
                <div class="w-full mx-4">
                    {{--                    <h4 class="text-xl font-semibold">--}}
                    {{--                        <a href="#" class="hover:underline">A random title can go here</a>--}}
                    {{--                    </h4>--}}
                    <div class="text-gray-600 mt-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. at autem culpa, deserunt dolore vel velit?
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div class="font-bold text-gray-900">Eslam 3basset</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>

                        </div>
                        <div class="flex items-center space-x-2">
                            <button class=" relative bg-gray-100 hover:bg-gray-200 border rounded-full h-7
                            transition duration-150 ease-in py-2 px-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16"> <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" style="color: rgba(163,163,163, .5)"/> </svg>
                                <ul class="hidden absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-6">
                                    <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Mark as spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Delete Post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>

