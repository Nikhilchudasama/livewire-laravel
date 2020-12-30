<div class="container mx-auto">
    <div class="flex w-full pb-10">
        <div class="w-3/6 mx-1">
            <input wire:model.debounce.300ms="search" type="text"
                   class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none form-input"
                   placeholder="Search users...">
        </div>

        <div class="w-1/6 relative mx-1">
            <select wire:model="orderBy"
                    class="block appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none form-input"
                    id="grid-state">
                <option value="id">ID</option>
                <option value="name">Name</option>
                <option value="email">Email</option>
                <option value="created_at">Sign Up Date</option>
            </select>
        </div>
        <div class="w-1/6 relative mx-1">
            <select wire:model="orderAsc"
                    class="block appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none form-input"
                    id="grid-state">
                <option value="1">Ascending</option>
                <option value="0">Descending</option>
            </select>
        </div>
        <div class="w-1/6 relative mx-1">
            <select wire:model="perPage"
                    class="block appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none form-input"
                    id="grid-state">
                <option>10</option>
                <option>25</option>
                <option>50</option>
                <option>100</option>
            </select>
        </div>
        <div class="w-1/6 relative mx-1">
            <button wire:click="deleteUsers"
                    class="block appearance-none w-full bg-red-500 border border-gray-200 text-white py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-red-500 focus:border-gray-200">
                Delete
            </button>
        </div>
    </div>
    <div>
        <table class="min-w-full">
            <thead>
                <tr>
                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                    </th>
                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                        Name
                    </th>
                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                        Title
                    </th>
                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                        Status
                    </th>
                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                        Role
                    </th>
                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                </tr>
            </thead>

            <tbody class="bg-white">
            @foreach($users as $user)
                <tr>
                    <td class="px-6 py-3">
                        <input wire:model="selectedIds"
                               value="{{ $user->id }}"
                               type="checkbox"
                               value="{{ $user->id }}"
                               >
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 h-10 w-10">
                                <img class="h-10 w-10 rounded-full"
                                     src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                     alt=""/>
                            </div>

                            <div class="ml-4">
                                <div class="text-sm leading-5 font-medium text-gray-900">{{ $user->name }}</div>
                                <div class="text-sm leading-5 text-gray-500">{{ $user->email }}</div>
                            </div>
                        </div>
                    </td>

                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                        <div class="text-sm leading-5 text-gray-900">Software Engineer</div>
                        <div class="text-sm leading-5 text-gray-500">Web dev</div>
                    </td>

                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                        <span
                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                    </td>

                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
                        Owner
                    </td>

                    <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                        {{--                <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>--}}
                        <div class="flex">
                            <x-backend.datatable.action.edit class="text-indigo-600 hover:text-indigo-900"
                                                             route="{{ route('admin.auth.user.edit',['user' => $user]) }}"></x-backend.datatable.action.edit>
                            <x-backend.datatable.action.delete
                                class="text-red-600 hover:text-red-900"
                                wire:click="delete({{$user->id}})">
                            </x-backend.datatable.action.delete>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="mt-3">
        {!! $users->links() !!}
    </div>

</div>

@push('after-scripts')

@endpush
