<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Task') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
            
                <form method="POST" action="/task/{{ $task->id }}">

                    <div class="form-group">
                        ACTION
                        <textarea name="description" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white">{{$task->description }}</textarea>	
                        @if ($errors->has('description'))
                            <span class="text-danger">{{ $errors->first('description') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        DATE
                        <textarea name="date" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white">{{$task->date }}</textarea>	
                        @if ($errors->has('date'))
                            <span class="text-danger">{{ $errors->first('date') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        TIME
                        <textarea name="time" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white">{{$task->time }}</textarea>	
                        @if ($errors->has('time'))
                            <span class="text-danger">{{ $errors->first('time') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        DEADLINE
                        <textarea name="deadline" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white">{{$task->deadline }}</textarea>	
                        @if ($errors->has('deadline'))
                            <span class="text-danger">{{ $errors->first('deadline') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <button type="submit" name="update" class="btn-dome1 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">ยืนยันการแก้ไข</button>
                    </div>
                {{ csrf_field() }}
                </form>

            </div>
        </div>
    </div>


</x-app-layout>