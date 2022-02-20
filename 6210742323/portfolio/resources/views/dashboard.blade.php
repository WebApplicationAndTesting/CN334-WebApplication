<x-app-layout>
<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <link rel="stylesheet" href="/css/styles.css">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('PORTFOLIO') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg py-8 px-5 ">
                <!-- <img src="{asset('/6210742323/portfolio/public/images/parn.jpg')}" alt="" width="250" height="250"> -->
                <img class=".items-center"src="{{ URL('images/parn.jpg') }}" alt="Profile" width="250" height="250" style="margin-left:3rem ;">
                <div>
                    <li class="text-center">
                        <a href="https://github.com/Paphassorn2323">GitHub</a>
                    </li>
                </div>
            </div>
            <br>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg py-8 px-5 text-center">
                 <p class ="py-7">
                    “My name is Parn, 21 years old 3rd years Bachelor’s degree Software engineering student at Thammasat University, <br>
                    Well-versed in the software development lifecycle, Web application and Mobile application design and <br>
                    development, Project Management Collect software requirements, planning project scope. My purpose for <br>
                    the internship is to enhance my professional skills, work in the real business world, and learn about the company’s <br>
                    business process. I am quite a creative thinking, be positive, enthusiastic, open-minded person. <br>
                    Be loving to keep learnings, and never give up in challenging situations.”<br>
                    
                </p>   
                
            </div>
        </div>
    </div>
    </html>
</x-app-layout>
