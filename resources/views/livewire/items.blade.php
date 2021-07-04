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
          <button wire:click="create()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">Create New item</button>
          @if($isOpen)
              @include('livewire.create')
          @endif
          <table class="table-fixed w-full">
              <thead>
                  <tr class="bg-gray-100">
                      <th class="px-4 py-2 w-14">Id</th>
                      <th class="px-4 py-2">SKU</th>
                      <th class="px-4 py-2">Category</th>
                      <th class="px-4 py-2">Name</th>
                      <th class="px-4 py-2">Brand Name</th>
                      <th class="px-4 py-2">Price</th>
                      <th class="px-4 py-2">Quantity</th>
                      <th class="px-4 py-2">Actions</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach($items as $item)
                  <tr>
                      <td class="border px-4 py-2">{{ $item->id }}</td>  
                      <td class="border px-4 py-2">{{ $item->sku }}</td>
                      <td class="border px-4 py-2">{{ $item->category }}</td>
                      <td class="border px-4 py-2">{{ $item->name }}</td>
                      <td class="border px-4 py-2">{{ $item->brandname }}</td>
                      <td class="border px-4 py-2">{{ $item->price }}</td>
                      <td class="border px-4 py-2">{{ $item->qty }}</td>
                      <td class="border px-4 py-2">
                      <button wire:click="edit({{ $item->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>

                      @if(Auth::user()->role == "admin") 
                      <button wire:click="delete({{ $item->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
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