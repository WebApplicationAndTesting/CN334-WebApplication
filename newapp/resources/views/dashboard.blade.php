<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight ">
            {{ __('Task') }}
            
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                <div class="flex">
                    <div class="flex-auto text-2xl mb-4">MY TASK LIST</div>
                    
                    <div class="flex-auto text-right mt-2">
                        <a href="/task" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">ADD NEW TASK</a>
                    </div>
                </div>
                <table class="w-full text-md rounded mb-4">
                    <thead>
                    <tr class="border-b fontsize-dome30">
                        <th class="text-left p-3 px-5">Action</th>
                        <th class="text-left p-3 px-5">Date</th>
                        <th class="text-left p-3 px-5">Time</th>
                        <th class="text-left p-3 px-5">Deadline</th>

                        <!-- <th class="text-left p-3 px-5"></th> -->
                        
                    </tr>
                    </thead>
                    <tbody>
                    @foreach(auth()->user()->tasks as $task)
                        <tr class="border-b hover:bg-orange-100 font-dome1">
                            <td class="p-3 px-5">
                                {{$task->description}}
                            </td>
                            <td>
                                {{$task->date}}
                            </td>
                            <td>
                                {{$task->time}}
                            </td>
                            <td>
                                {{$task->deadline}}
                            </td>
                            <td class="p-3 px-5 font-dome1">
                                <form action="/task/{{$task->id}}" class="inline-block">
                                    <button type="submit" name="delete" formmethod="POST" class="text-sm btn-dome1 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">เรียบร้อย</button>
                                    {{ csrf_field() }}
                                </form>
                                <a href="/task/{{$task->id}}" name="edit" class="mr-3 text-sm btn-dome2 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">แก้ไข</a>
                            </td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
</x-app-layout>
