<x-template1-layout>
    <x-slot name="header">
        Usulan Proposal
    </x-slot>

    <div class="p-6 lg:p-8 bg-white border-b border-gray-200 container">
        <a class="inline-block rounded bg-indigo-600 text-white hover:bg-indigo-700 px-4 py-2 text-xs font-medium ml-auto"
            href="{{ route('create-seminar-proposal') }}">
            Daftar
        </a>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
                <thead class="ltr:text-left rtl:text-right text-left">
                    <tr>
                        <th class="px-4 py-2">
                            <label for="SelectAll" class="sr-only">Select All</label>

                            <input type="checkbox" id="SelectAll" class="h-5 w-5 rounded border-gray-300" />
                        </th>
                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                            Name
                        </th>
                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                            Email
                        </th>
                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                            Roles
                        </th>
                        <th class="px-4 py-2"></th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-200">
                    {{-- @foreach ($users as $user)
                    <tr>
                        <td class="px-4 py-2">
                            <label class="sr-only" for="Row1">Row 1</label>

                            <input class="h-5 w-5 rounded border-gray-300" type="checkbox" id="Row1" />
                        </td>
                        <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                            {{ $user->name }}
                        </td>
                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $user->email }}</td>
                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                            <ul class="max-w-md space-y-1 text-gray-500 list-inside dark:text-gray-400">
                                @foreach ($user->getRoleNames() as $role)
                                <li class="flex items-center">
                                    <svg class="w-3.5 h-3.5 mr-2 text-green-500 dark:text-green-400 flex-shrink-0"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                    </svg>
                                    {{ $role }}
                                </li>
                                @endforeach
                            </ul>

                        </td>
                        <td class="whitespace-nowrap px-4 py-2">
                            <a href="#"
                                class="inline-block rounded bg-indigo-600 px-4 py-2 text-xs font-medium text-white hover:bg-indigo-700">
                                View
                            </a>
                            <a href="#"
                                class="inline-block rounded bg-yellow-400 px-4 py-2 text-xs font-medium text-white hover:bg-yellow-500">
                                Update
                            </a>
                            <a href="#"
                                class="inline-block rounded bg-red-600 px-4 py-2 text-xs font-medium text-white hover:bg-red-700">
                                Delete
                            </a>
                        </td>
                    </tr>
                    @endforeach --}}
                </tbody>
            </table>
        </div>

        <div class="rounded-b-lg border-t border-gray-200 px-4 py-2">
            <ol class="flex justify-end gap-1 text-xs font-medium">
                <li>
                    <a href="#"
                        class="inline-flex h-8 w-8 items-center justify-center rounded border border-gray-100 bg-white text-gray-900 rtl:rotate-180">
                        <span class="sr-only">Prev Page</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </li>

                <li>
                    <a href="#"
                        class="block h-8 w-8 rounded border border-gray-100 bg-white text-center leading-8 text-gray-900">
                        1
                    </a>
                </li>

                <li class="block h-8 w-8 rounded border-blue-600 bg-blue-600 text-center leading-8 text-white">
                    2
                </li>

                <li>
                    <a href="#"
                        class="block h-8 w-8 rounded border border-gray-100 bg-white text-center leading-8 text-gray-900">
                        3
                    </a>
                </li>

                <li>
                    <a href="#"
                        class="block h-8 w-8 rounded border border-gray-100 bg-white text-center leading-8 text-gray-900">
                        4
                    </a>
                </li>

                <li>
                    <a href="#"
                        class="inline-flex h-8 w-8 items-center justify-center rounded border border-gray-100 bg-white text-gray-900 rtl:rotate-180">
                        <span class="sr-only">Next Page</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </li>
            </ol>
        </div>

        {{-- {{ $users->links() }} --}}

    </div>
</x-template1-layout>