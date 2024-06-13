@extends('layout')
@section('content')
<form>
    <div class="space-y-12">
        <div class="border border-gray-900  p-12 ">
            <div class="heading flex justify-center text-5xl font-weight:900">
                <h1>Api Form</h1>
            </div>
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-3">
                    <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                    <div class="mt-2">
                        <input type="text" name="name" id="name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
                    <div class="mt-2">
                        <input type="text" name="email" id="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Phone</label>
                    <div class="mt-2">
                        <input type="number" name="number" id="number" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="sm:col-span-3 ">
                    <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                    <div class="mt-2">
                        <input type="password" name="password" id="password" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" autocomplete="new-password">
                    </div>
                </div>

                <div class="sm:col-span-3 ">
                    <label for="last-name" class="block text-sm font-medium leading-6 text-gray-900">Status</label>

                    <div class="flex items-center ">
                        <input id="country-option-1" type="radio" name="countries" value="USA" class="w-4 h-4 border-gray-300  dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600" checked>
                        <label for="country-option-1" class="block ms-2  text-sm font-medium text-gray-900 dark:text-gray-300">
                            Active
                        </label>
                    </div>
                    <div class="flex items-center">
                        <input id="country-option-1" type="radio" name="countries" value="USA" class="w-4 h-4 border-gray-300  dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600" checked>
                        <label for="country-option-1" class="block ms-2  text-sm font-medium text-gray-900 dark:text-gray-300">
                            Inactive
                        </label>
                    </div>
                </div>

                <div class="sm:col-span-3 ">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="multiple_files">Upload Image</label>
                    <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-sm cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="multiple_files" type="file" multiple>
                </div>
                <div class="sm:col-span-6 ">
                    <input type="text" id="editor">
                </div>
                <div class="sm:col-span-6">

                    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>

                    <button type="button" class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Cancel</button>


                </div>
            </div>
        </div>
    </div>


</form>
@endsection