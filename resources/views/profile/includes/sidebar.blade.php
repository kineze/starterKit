
<div class="flex flex-shrink-0 transition-all">
    <div x-show="isSidebarOpen" @click="isSidebarOpen = false" class="fixed inset-0 z-10 bg-white bg-opacity-50 lg:hidden"></div>
    <div x-show="isSidebarOpen" class="fixed inset-y-24 z-50 lg:z-10 w-16 bg-white"></div>

      <nav aria-label="Options" class="z-50 lg:z-20 flex-col items-center flex-shrink-0 hidden w-16 py-4 bg-[#0F172A] border-r-2 border-indigo-100 shadow-md sm:flex">
        <div class="flex-col items-center pt-16 p-2 space-y-4">

            <button @click="(isSidebarOpen && currentSidebarTab == 'linksTab') ? isSidebarOpen = false : isSidebarOpen = true; currentSidebarTab = 'linksTab'" class="p-2 transition-colors rounded-lg shadow-md " :class="(isSidebarOpen && currentSidebarTab == 'linksTab') ? 'text-white border border-white hover:text-white' : 'text-white'">
              <span class="sr-only">Toggle sidebar</span>
              <svg aria-hidden="true" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
              </svg>
            </button>

            {{-- <button @click="(isSidebarOpen && currentSidebarTab == 'messagesTab') ? isSidebarOpen = false : isSidebarOpen = true; currentSidebarTab = 'messagesTab'" class="p-2 transition-colors rounded-lg shadow-md" :class="(isSidebarOpen && currentSidebarTab == 'messagesTab') ? 'text-white border border-white hover:text-white' : 'text-white'">
              <span class="sr-only">Toggle message panel</span>
              <svg aria-hidden="true" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
              </svg>
            </button>

          <button @click="(isSidebarOpen && currentSidebarTab == 'notificationsTab') ? isSidebarOpen = false : isSidebarOpen = true; currentSidebarTab = 'notificationsTab'" class="p-2 transition-colors rounded-lg shadow-md" :class="(isSidebarOpen && currentSidebarTab == 'notificationsTab') ? 'text-white border border-white hover:text-white' : 'text-white'">
            <span class="sr-only">Toggle notifications panel</span>
            <svg aria-hidden="true" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
            </svg>
          </button> --}}

        </div>

      </nav>


      {{-- tabs --}}
      <div x-transition:enter="transform transition-transform duration-300" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transform transition-transform duration-300" x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full" x-show="isSidebarOpen" class="fixed inset-y-0 left-0 z-50 lg:z-10 flex-shrink-0 w-64 bg-white border-r-2 border-indigo-100 shadow-lg sm:left-16 sm:w-72 lg:static lg:w-64">
          <nav x-show="currentSidebarTab == 'linksTab'" aria-label="Main" class="flex flex-col h-full">
            <!-- Logo -->
              <div class="flex items-center justify-center flex-shrink-0 py-9">
                <a href="#">
                  {{-- <img class="w-24 h-auto" src="https://raw.githubusercontent.com/kamona-ui/dashboard-alpine/main/public/assets/images/logo.png" alt="K-UI"/> --}}
                </a>
              </div>

            <div class="px-4 lg:mt-2 space-y-2 overflow-hidden hover:overflow-auto">
              
                {{-- <div>
                  <details class="group">
                      <summary class="flex items-center hover:bg-gray-300 rounded-lg p-2 justify-between font-medium marker:content-none hover:cursor-pointer">
                        <span class="flex gap-2 items-bottom">
                          <span aria-hidden="true" class="rounded-lg">
                            <svg class="w-6 h-6" fill="#000000" height="200px" width="200px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 105.104 105.104" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <g> <path d="M64.785,15.134c-0.22,0-0.41-0.127-0.422-0.283s-0.003-0.462,0.02-0.68c0,0,0.219-2.058,1.305-3.361 c0.978-1.151,1.521-1.999,1.521-2.977c0-1.108-0.695-1.848-2.063-1.869c-0.782,0-1.651,0.261-2.195,0.674l-0.378-0.995 c-0.078-0.206,0.022-0.447,0.223-0.536c0,0,1.59-0.707,2.741-0.707c2.499,0,3.629,1.543,3.629,3.193 c0,1.478-0.825,2.543-1.868,3.781c-0.956,1.13-1.304,2.086-1.238,3.194l0.006,0.166c0.008,0.22-0.165,0.4-0.385,0.4H64.785z"></path> </g> <g> <path d="M65.679,15.534h-0.894c-0.432,0-0.792-0.286-0.821-0.651c-0.014-0.183-0.004-0.514,0.021-0.754 c0.01-0.089,0.246-2.194,1.396-3.574c0.905-1.066,1.428-1.852,1.428-2.721c0-1.192-0.908-1.457-1.669-1.469 c-0.695,0-1.48,0.238-1.948,0.593l-0.426,0.323l-0.568-1.495c-0.152-0.401,0.043-0.87,0.435-1.044C62.701,4.71,64.314,4,65.537,4 c2.783,0,4.028,1.805,4.028,3.593c0,1.583-0.85,2.719-1.962,4.039c-0.863,1.02-1.205,1.89-1.145,2.913l0.007,0.174 c0.007,0.217-0.07,0.421-0.22,0.576C66.096,15.449,65.895,15.534,65.679,15.534z M64.758,14.719l0.907,0.015l-0.006-0.15 c-0.072-1.238,0.326-2.278,1.333-3.468c1.038-1.233,1.773-2.208,1.773-3.523c0-1.351-0.848-2.793-3.229-2.793 c-1.051,0-2.564,0.666-2.579,0.672l0.203,0.566c0.575-0.295,1.305-0.474,1.986-0.474c1.521,0.024,2.463,0.893,2.463,2.269 c0,1.115-0.592,2.03-1.616,3.235c-0.994,1.193-1.21,3.125-1.212,3.145C64.765,14.368,64.755,14.572,64.758,14.719z"></path> </g> </g> <g> <g> <path d="M63.907,18.175c0-0.804,0.543-1.368,1.304-1.368c0.76,0,1.282,0.564,1.282,1.368c0,0.761-0.5,1.348-1.305,1.348 C64.428,19.522,63.907,18.936,63.907,18.175z"></path> </g> <g> <path d="M65.188,19.922c-0.958,0-1.681-0.751-1.681-1.748c0-1.024,0.717-1.768,1.704-1.768c0.975,0,1.682,0.744,1.682,1.768 C66.894,19.188,66.177,19.922,65.188,19.922z M65.211,17.207c-0.541,0-0.904,0.389-0.904,0.968c0,0.558,0.362,0.948,0.881,0.948 c0.55,0,0.905-0.372,0.905-0.948C66.094,17.587,65.748,17.207,65.211,17.207z"></path> </g> </g> </g> <g> <path d="M32.204,49.958l14.582-3.76c1.423-0.367,2.794-1.71,3.188-3.125l3.663-13.113c0.223-0.798,0.094-1.615-0.356-2.243 c-0.449-0.629-1.182-1.016-2.011-1.063l-1.565-0.083c-1.512,0-2.981,1.079-3.418,2.509l-2.394,7.829 c-0.219,0.715-1.08,1.526-1.808,1.703l-10.83,2.099c-1.507,0.366-2.721,1.866-2.764,3.414c0,0-0.137,4.736,0.329,5.216 C29.266,49.799,29.884,50.292,32.204,49.958z"></path> <path d="M41.908,34.769c0.443,0,0.878-0.035,1.308-0.087l1.829-5.982c0.597-1.955,2.601-3.429,4.661-3.429l1.634,0.084 c0.444,0.025,0.86,0.139,1.256,0.292c0.09-0.56,0.149-1.13,0.149-1.715c0-5.975-4.861-10.836-10.836-10.836 s-10.836,4.861-10.836,10.836S35.933,34.769,41.908,34.769z"></path> <path d="M65.797,0c-5.973,0-10.833,5.366-10.833,11.961c0,2.964,0.987,5.675,2.611,7.767c-0.084,0.067-0.166,0.14-0.227,0.236 l-2.228,3.499c-0.296,0.466-0.159,1.084,0.307,1.381C55.593,24.95,55.779,25,55.963,25c0.331,0,0.654-0.164,0.845-0.463 l2.122-3.334c1.871,1.697,4.263,2.718,6.867,2.718c5.974,0,10.834-5.366,10.834-11.961S71.771,0,65.797,0z M65.797,21.922 c-4.871,0-8.833-4.468-8.833-9.961S60.926,2,65.797,2c4.871,0,8.834,4.468,8.834,9.961S70.668,21.922,65.797,21.922z"></path> <path d="M55.615,39.353c-0.603-0.84-1.662-1.502-2.743-1.82l-1.646,5.891c-0.518,1.855-2.248,3.552-4.115,4.034l-14.583,3.76 c-0.693,0.107-1.193,0.15-1.671,0.15c-0.13,0-0.246-0.009-0.366-0.016v19.084v0.503v29.166c0,2.757,2.243,5,5,5h0.353 c2.757,0,5-2.243,5-5V73.938h2.126v26.166c0,2.757,2.243,5,5,5h0.352c2.757,0,5-2.243,5-5V70.938v-0.503v-0.12h0.314 c1.449,0,3.141-0.989,3.853-2.252l6.942-12.324c0.727-1.289,0.62-3.24-0.243-4.441L55.615,39.353z M56.669,55.539l-3.346,5.451 V48.58l3.281,4.708C57.006,53.866,57.038,54.939,56.669,55.539z"></path> </g> </g></svg>
                          </span>
                          <span>
                            Interest areas
                          </span>
                        </span>
                        <i class="fa-solid fa-chevron-down text-gray-500 transition group-open:rotate-180 duration-500"></i>
                      </summary>
                          <div class="px-4 pb-4 transition duration-500">
                            <div class="flex flex-col gap-4 pl-2 mt-3">
                              <a href="#" class="flex gap-4 items-center w-full space-x-2 font-semibold text-black hover:bg-gray-300 rounded-lg">
                                <span aria-hidden="true" class="p-2 rounded-lg">
                                <i class="fa-solid fa-circle text-xs text-gray-700"></i>
                                  All Interest
                                </span>
                              </a>
                            </div>
                          </div>
                  </details>
                </div> --}}
                
                {{-- <div>
                  <details class="group">
                      <summary class="flex items-center hover:bg-gray-300 rounded-lg p-2 justify-between font-medium marker:content-none hover:cursor-pointer">
                          <span class="flex gap-2 items-center">
                            <span aria-hidden="true" class="rounded-lg">
                              <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M14 16L16.1 18.5L20 13.5" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M10 14H3" stroke="#000000" stroke-width="1.5" stroke-linecap="round"></path> <path d="M10 18H3" stroke="#000000" stroke-width="1.5" stroke-linecap="round"></path> <path d="M3 6L13.5 6M20 6L17.75 6" stroke="#000000" stroke-width="1.5" stroke-linecap="round"></path> <path d="M20 10L9.5 10M3 10H5.25" stroke="#000000" stroke-width="1.5" stroke-linecap="round"></path> </g></svg>                              </span>
                            <span>
                              Manage Packages
                            </span>
                          </span>
                          <i class="fa-solid fa-chevron-down text-gray-500 transition group-open:rotate-180 duration-500"></i>
                      </summary>
                          <div class="px-4 pb-4 transition duration-500">
                            <div class="flex flex-col gap-4 pl-2 mt-3">
                              <a href="{{route('newPackage')}}" class="flex gap-4 items-center w-full space-x-2 font-semibold text-black hover:bg-gray-300 rounded-lg">
                                <span aria-hidden="true" class="p-2 rounded-lg">
                                <i class="fa-solid fa-circle text-xs text-gray-700"></i>
                                Create New Package
                                </span>
                              </a>

                              <a href="{{route('allPackages')}}" class="flex gap-4 items-center w-full space-x-2 font-semibold text-black hover:bg-gray-300 rounded-lg">
                                <span aria-hidden="true" class="p-2 rounded-lg">
                                <i class="fa-solid fa-circle text-xs text-gray-700"></i>
                                All Packages
                                </span>
                              </a>

                            </div>
                          </div>
                  </details>
                </div>
                 --}}
                @can('Manage Users')
                <div>
                  <details class="group">
                      <summary class="flex items-center hover:bg-gray-300 rounded-lg p-2 justify-between font-medium marker:content-none hover:cursor-pointer">
                          <span class="flex gap-2 items-center">
                            <span aria-hidden="true" class="rounded-lg">
                              <svg viewBox="0 0 24 24" class="w-6 h-6" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="6" r="4" stroke="#000000" stroke-width="1.5"></circle> <path d="M19.9975 18C20 17.8358 20 17.669 20 17.5C20 15.0147 16.4183 13 12 13C7.58172 13 4 15.0147 4 17.5C4 19.9853 4 22 12 22C14.231 22 15.8398 21.8433 17 21.5634" stroke="#000000" stroke-width="1.5" stroke-linecap="round"></path> </g></svg>
                            </span>
                            <span>
                              Manage Users
                            </span>
                          </span>
                          <i class="fa-solid fa-chevron-down text-gray-500 transition group-open:rotate-180 duration-500"></i>
                      </summary>
          
                      <div class="px-4 pb-4 transition duration-500">
                          <div class="flex flex-col gap-4 pl-2 mt-4">
                            
                            {{-- <a href="{{url('/all-users')}}" class="flex gap-4 items-center w-full space-x-2 font-semibold text-black hover:bg-gray-300 rounded-lg">

                              <span aria-hidden="true" class="p-2 flex rounded-lg items-center gap-4">
                                <svg fill="#000000" class="w-5 h-5" viewBox="0 0 56 56" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M 13.7851 49.5742 L 42.2382 49.5742 C 47.1366 49.5742 49.5743 47.1367 49.5743 42.3086 L 49.5743 13.6914 C 49.5743 8.8633 47.1366 6.4258 42.2382 6.4258 L 13.7851 6.4258 C 8.9101 6.4258 6.4257 8.8398 6.4257 13.6914 L 6.4257 42.3086 C 6.4257 47.1602 8.9101 49.5742 13.7851 49.5742 Z M 13.8554 45.8008 C 11.5117 45.8008 10.1992 44.5586 10.1992 42.1211 L 10.1992 13.8789 C 10.1992 11.4414 11.5117 10.1992 13.8554 10.1992 L 42.1679 10.1992 C 44.4882 10.1992 45.8007 11.4414 45.8007 13.8789 L 45.8007 42.1211 C 45.8007 44.5586 44.4882 45.8008 42.1679 45.8008 Z M 28.0351 35.4883 C 32.1835 35.4883 35.5820 32.1367 35.5820 27.9414 C 35.5820 23.7930 32.1835 20.4180 28.0351 20.4180 C 23.8632 20.4180 20.4648 23.7930 20.4648 27.9414 C 20.4648 32.1367 23.8632 35.4883 28.0351 35.4883 Z"></path></g></svg>
                                All Users
                              </span>
                            </a> --}}
                            
                            <a href="{{url('role-management')}}" class="flex gap-4 items-center w-full space-x-2 font-semibold text-black hover:bg-gray-300 rounded-lg">
                              <span aria-hidden="true" class="p-2 flex rounded-lg items-center gap-2">
                                <svg fill="#000000" class="w-5 h-5" viewBox="0 0 56 56" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M 13.7851 49.5742 L 42.2382 49.5742 C 47.1366 49.5742 49.5743 47.1367 49.5743 42.3086 L 49.5743 13.6914 C 49.5743 8.8633 47.1366 6.4258 42.2382 6.4258 L 13.7851 6.4258 C 8.9101 6.4258 6.4257 8.8398 6.4257 13.6914 L 6.4257 42.3086 C 6.4257 47.1602 8.9101 49.5742 13.7851 49.5742 Z M 13.8554 45.8008 C 11.5117 45.8008 10.1992 44.5586 10.1992 42.1211 L 10.1992 13.8789 C 10.1992 11.4414 11.5117 10.1992 13.8554 10.1992 L 42.1679 10.1992 C 44.4882 10.1992 45.8007 11.4414 45.8007 13.8789 L 45.8007 42.1211 C 45.8007 44.5586 44.4882 45.8008 42.1679 45.8008 Z M 28.0351 35.4883 C 32.1835 35.4883 35.5820 32.1367 35.5820 27.9414 C 35.5820 23.7930 32.1835 20.4180 28.0351 20.4180 C 23.8632 20.4180 20.4648 23.7930 20.4648 27.9414 C 20.4648 32.1367 23.8632 35.4883 28.0351 35.4883 Z"></path></g></svg>
                                Role Management
                              </span>
                            </a>
          
          
                              <a href="{{url('new-user')}}" class="flex gap-4 items-center w-full space-x-2 font-semibold text-black hover:bg-gray-300 rounded-lg">
                                <span aria-hidden="true" class="p-2 flex rounded-lg items-center gap-4">
                                  <svg fill="#000000" class="w-5 h-5" viewBox="0 0 56 56" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M 13.7851 49.5742 L 42.2382 49.5742 C 47.1366 49.5742 49.5743 47.1367 49.5743 42.3086 L 49.5743 13.6914 C 49.5743 8.8633 47.1366 6.4258 42.2382 6.4258 L 13.7851 6.4258 C 8.9101 6.4258 6.4257 8.8398 6.4257 13.6914 L 6.4257 42.3086 C 6.4257 47.1602 8.9101 49.5742 13.7851 49.5742 Z M 13.8554 45.8008 C 11.5117 45.8008 10.1992 44.5586 10.1992 42.1211 L 10.1992 13.8789 C 10.1992 11.4414 11.5117 10.1992 13.8554 10.1992 L 42.1679 10.1992 C 44.4882 10.1992 45.8007 11.4414 45.8007 13.8789 L 45.8007 42.1211 C 45.8007 44.5586 44.4882 45.8008 42.1679 45.8008 Z M 28.0351 35.4883 C 32.1835 35.4883 35.5820 32.1367 35.5820 27.9414 C 35.5820 23.7930 32.1835 20.4180 28.0351 20.4180 C 23.8632 20.4180 20.4648 23.7930 20.4648 27.9414 C 20.4648 32.1367 23.8632 35.4883 28.0351 35.4883 Z"></path></g></svg>
                                  New User
                                </span>
                              </a>
          
                                  <a href="{{url('system-users')}}" class="flex gap-4 items-center w-full space-x-2 font-semibold text-black hover:bg-gray-300 rounded-lg">
                                    <span aria-hidden="true" class="p-2 flex rounded-lg items-center gap-4">
                                      <svg fill="#000000" class="w-5 h-5" viewBox="0 0 56 56" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M 13.7851 49.5742 L 42.2382 49.5742 C 47.1366 49.5742 49.5743 47.1367 49.5743 42.3086 L 49.5743 13.6914 C 49.5743 8.8633 47.1366 6.4258 42.2382 6.4258 L 13.7851 6.4258 C 8.9101 6.4258 6.4257 8.8398 6.4257 13.6914 L 6.4257 42.3086 C 6.4257 47.1602 8.9101 49.5742 13.7851 49.5742 Z M 13.8554 45.8008 C 11.5117 45.8008 10.1992 44.5586 10.1992 42.1211 L 10.1992 13.8789 C 10.1992 11.4414 11.5117 10.1992 13.8554 10.1992 L 42.1679 10.1992 C 44.4882 10.1992 45.8007 11.4414 45.8007 13.8789 L 45.8007 42.1211 C 45.8007 44.5586 44.4882 45.8008 42.1679 45.8008 Z M 28.0351 35.4883 C 32.1835 35.4883 35.5820 32.1367 35.5820 27.9414 C 35.5820 23.7930 32.1835 20.4180 28.0351 20.4180 C 23.8632 20.4180 20.4648 23.7930 20.4648 27.9414 C 20.4648 32.1367 23.8632 35.4883 28.0351 35.4883 Z"></path></g></svg>
                                      System User
                                    </span>
                                  </a>
                            </div>
          
                          </div>
          
                  </details>
                </div>
                @endcan
                
            </div>

          </nav>

        {{-- <section x-show="currentSidebarTab == 'messagesTab'" class="px-4 py-6">
          <div class="mt-12 pt-2 space-y-2 overflow-hidden hover:overflow-auto">
            <a href="#" class="flex items-center w-full space-x-2 font-semibold text-black hover:bg-gray-300 rounded-lg">
              <span aria-hidden="true" class="p-2 rounded-lg">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                </svg>
              </span>
              <span>Home</span>
            </a>
            <a href="#" class="flex items-center w-full space-x-2 font-semibold text-black rounded-lg">
              <span aria-hidden="true" class="p-2 rounded-lg">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                </svg>
              </span>
              <span>Page</span>
            </a>
        </div>
        </section> --}}

        {{-- <section x-show="currentSidebarTab == 'notificationsTab'" class="px-4 py-6">
          <!-- Set a max-height and enable vertical scrolling -->
          <div class="mt-12 pt-2 space-y-2 overflow-y-auto" style="max-height: calc(100vh - 100px);">
            <div class="block py-2 text-base font-medium text-center text-gray-700 shadow-sm">
              Notifications
            </div>
            <a href="#" class="flex py-3 px-4 border-b hover:bg-gray-100 dark:hover:bg-gray-600 dark:border-gray-600">
              <div class="relative flex-shrink-0">
                <img class="w-11 h-11 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png" alt="Bonnie Green avatar">
                <div class="flex absolute justify-center items-center ml-6 -mt-5 w-5 h-5 rounded-full border border-white bg-primary-700 dark:border-gray-700">
                  <svg class="w-2 h-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                    <path d="M15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783ZM6 2h6a1 1 0 1 1 0 2H6a1 1 0 0 1 0-2Zm7 5H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Z"/>
                    <path d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z"/>
                  </svg>
                </div>
              </div>
              <div class="pl-3 w-full">
                <div class="text-gray-500 font-normal text-sm mb-1.5 dark:text-gray-400">
                  New message from <span class="font-semibold text-gray-900 dark:text-white">Bonnie Green</span>: "Hey, what's up? All set for the presentation?"
                </div>
                <div class="text-xs font-medium text-primary-700 dark:text-primary-400">a few moments ago</div>
              </div>
            </a>
            <!-- Repeat similar notification items -->
            <a href="#" class="flex py-3 px-4 border-b hover:bg-gray-100 dark:hover:bg-gray-600 dark:border-gray-600">
              <div class="relative flex-shrink-0">
                <img class="w-11 h-11 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="Jese Leos avatar">
                <div class="flex absolute justify-center items-center ml-6 -mt-5 w-5 h-5 bg-gray-900 rounded-full border border-white dark:border-gray-700">
                  <svg class="w-2 h-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                    <path d="M6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Zm11-3h-2V5a1 1 0 0 0-2 0v2h-2a1 1 0 1 0 0 2h2v2a1 1 0 0 0 2 0V9h2a1 1 0 1 0 0-2Z"/>
                  </svg>
                </div>
              </div>
              <div class="pl-3 w-full">
                <div class="text-gray-500 font-normal text-sm mb-1.5 dark:text-gray-400">
                  <span class="font-semibold text-gray-900 dark:text-white">Jese Leos</span> and <span class="font-medium text-gray-900 dark:text-white">5 others</span> started following you.
                </div>
                <div class="text-xs font-medium text-primary-700 dark:text-primary-400">10 minutes ago</div>
              </div>
            </a>
            <!-- Additional notification items... -->
            <a href="#" class="flex py-3 px-4 border-b hover:bg-gray-100 dark:hover:bg-gray-600 dark:border-gray-600">
              <div class="relative flex-shrink-0">
                <img class="w-11 h-11 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/joseph-mcfall.png" alt="Joseph McFall avatar">
                <div class="flex absolute justify-center items-center ml-6 -mt-5 w-5 h-5 bg-red-600 rounded-full border border-white dark:border-gray-700">
                  <svg class="w-2 h-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                    <path d="M17.947 2.053a5.209 5.209 0 0 0-3.793-1.53A6.414 6.414 0 0 0 10 2.311 6.482 6.482 0 0 0 5.824.5a5.2 5.2 0 0 0-3.8 1.521c-1.915 1.916-2.315 5.392.625 8.333l7 7a.5.5 0 0 0 .708 0l7-7a6.6 6.6 0 0 0 2.123-4.508 5.179 5.179 0 0 0-1.533-3.793Z"/>
                  </svg>
                </div>
              </div>
              <div class="pl-3 w-full">
                <div class="text-gray-500 font-normal text-sm mb-1.5 dark:text-gray-400">
                  <span class="font-semibold text-gray-900 dark:text-white">Joseph Mcfall</span> and <span class="font-medium text-gray-900 dark:text-white">141 others</span> love your story. See it and view more stories.
                </div>
                <div class="text-xs font-medium text-primary-700 dark:text-primary-400">44 minutes ago</div>
              </div>
            </a>
            <a href="#" class="flex py-3 px-4 border-b hover:bg-gray-100 dark:hover:bg-gray-600 dark:border-gray-600">
              <div class="relative flex-shrink-0">
                <img class="w-11 h-11 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/roberta-casas.png" alt="Roberta Casas image">
                <div class="flex absolute justify-center items-center ml-6 -mt-5 w-5 h-5 bg-green-400 rounded-full border border-white dark:border-gray-700">
                  <svg class="w-2 h-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                    <path d="M18 0H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h2v4a1 1 0 0 0 1.707.707L10.414 13H18a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5 4h2a1 1 0 1 1 0 2h-2a1 1 0 1 1 0-2ZM5 4h5a1 1 0 1 1 0 2H5a1 1 0 0 1 0-2Zm2 5H5a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Zm9 0h-6a1 1 0 0 1 0-2h6a1 1 0 1 1 0 2Z"/>
                  </svg>
                </div>
              </div>
              <div class="pl-3 w-full">
                <div class="text-gray-500 font-normal text-sm mb-1.5 dark:text-gray-400">
                  <span class="font-semibold text-gray-900 dark:text-white">Leslie Livingston</span> mentioned you in a comment: <span class="font-medium text-primary-700 dark:text-primary-500">@bonnie.green</span> what do you say?
                </div>
                <div class="text-xs font-medium text-primary-700 dark:text-primary-400">1 hour ago</div>
              </div>
            </a>
            <a href="#" class="flex py-3 px-4 hover:bg-gray-100 dark:hover:bg-gray-600">
              <div class="relative flex-shrink-0">
                <img class="w-11 h-11 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/robert-brown.png" alt="Robert image">
                <div class="flex absolute justify-center items-center ml-6 -mt-5 w-5 h-5 bg-purple-500 rounded-full border border-white dark:border-gray-700">
                  <svg class="w-2 h-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                    <path d="M11 0H2a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h9a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm8.585 1.189a.994.994 0 0 0-.9-.138l-2.965.983a1 1 0 0 0-.685.949v8a1 1 0 0 0 .675.946l2.965 1.02a1.013 1.013 0 0 0 1.032-.242A1 1 0 0 0 20 12V2a1 1 0 0 0-.415-.811Z"/>
                  </svg>
                </div>
              </div>
              <div class="pl-3 w-full">
                <div class="text-gray-500 font-normal text-sm mb-1.5 dark:text-gray-400">
                  <span class="font-semibold text-gray-900 dark:text-white">Robert Brown</span> posted a new video: Glassmorphism - learn how to implement the new design trend.
                </div>
                <div class="text-xs font-medium text-primary-700 dark:text-primary-400">3 hours ago</div>
              </div>
            </a>
          </div>
        </section> --}}
        
      </div>

  </div>
  

<!-- Backdrop -->
<div x-show="isSettingsPanelOpen" class="fixed inset-0 bg-black bg-opacity-50" @click="isSettingsPanelOpen = false" aria-hidden="true"></div>
<!-- Panel -->
<section x-transition:enter="transform transition-transform duration-300" x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transform transition-transform duration-300" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full" x-show="isSettingsPanelOpen" class="fixed inset-y-0 right-0 w-64 bg-white border-l border-indigo-100 rounded-l-3xl">
  <div class="px-4 py-8">
    <div class="lg:mt-10 mt-10 space-y-2 overflow-hidden hover:overflow-auto">
      <a href="#" class="flex items-center w-full space-x-2 font-semibold text-black hover:bg-gray-300 rounded-lg">
        <span aria-hidden="true" class="p-2 rounded-lg">
          <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
          </svg>
        </span>
        <span>Home</span>
      </a>
      <a href="#" class="flex items-center w-full space-x-2 font-semibold text-black rounded-lg">
        <span aria-hidden="true" class="p-2 rounded-lg">
          <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
          </svg>
        </span>
        <span>Page</span>
      </a>
  </div>
  </div>
</section>
