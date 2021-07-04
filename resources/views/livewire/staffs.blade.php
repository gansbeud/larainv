<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            @if (session()->has('message'))
                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
                  <div class="flex">
                    <div>
                      <p class="text-sm">{{ session('message') }}</p>
                    </div>
                  </div>
                </div>
            @endif
            <button wire:click="create()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">Create New staff</button>
            @if($isOpen)
                @include('livewire.create-user')
            @endif
            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2">Role</th>
                        <th class="px-4 py-2">Name</th>
                        <th class="px-4 py-2">E-mail</th>
                        <th class="px-4 py-2">Password</th>
      
                    </tr>
                </thead>
                <tbody>
                    @foreach($staffs as $staff)
                    <tr>
                        <td class="border px-4 py-2">{{ $staff->role }}</td>  
                        <td class="border px-4 py-2">{{ $staff->name }}</td>
                        <td class="border px-4 py-2">{{ $staff->email }}</td>
                        <td class="border px-4 py-2">{{ $staff->password }}</td>
     
                        <td class="border px-4 py-2">
                        <button wire:click="edit({{ $staff->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
  
                        @if(Auth::user()->role == "admin") 
                        <button wire:click="delete({{ $staff->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                        @else
                        
                        @endif
                        
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
  </div>