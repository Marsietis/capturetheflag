<div class="mb-8 flex items-center">
    <form method="GET" action="{{ route('dashboard') }}" class="flex flex-col md:flex-row">
        <div class="flex flex-col mb-2 md:mb-0 md:mr-2">
            <label for="search" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1 mx-2">Search by Task
                Title:</label>
            <input type="text" id="search" name="search" class="mx-2 p-2 input w-96 bg-zinc-900 text-white focus:border-red-500 focus:ring-red-500 shadow-xl"
                   placeholder="Enter task title..." value="{{ request()->get('search') }}">
        </div>

        <div class="flex flex-col mb-2 md:mb-0 md:mr-2">
            <label for="category" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1 mx-2">Filter by
                Category:</label>
            <select id="category" name="category" class="mx-2 p-2 select text-white bg-zinc-900 w-96 focus:border-red-500 focus:ring-red-500 shadow-xl">
                <option value="" {{ request()->get('category') == '' ? 'selected' : '' }}>All Categories
                </option>
                <option value="General" {{ request()->get('category') == 'General' ? 'selected' : '' }}>
                    General
                </option>
                <option value="Web" {{ request()->get('category') == 'Web' ? 'selected' : '' }}>Web</option>
                <option value="Forensics" {{ request()->get('category') == 'Forensics' ? 'selected' : '' }}>
                    Forensics
                </option>
                <option
                    value="Reverse engineering" {{ request()->get('category') == 'Reverse engineering' ? 'selected' : '' }}>
                    Reverse engineering
                </option>
                <option
                    value="Steganography" {{ request()->get('category') == 'Steganography' ? 'selected' : '' }}>
                    Steganography
                </option>
                <option
                    value="Cryptography" {{ request()->get('category') == 'Cryptography' ? 'selected' : '' }}>
                    Cryptography
                </option>
                <option
                    value="OSINT" {{ request()->get('category') == 'OSINT' ? 'selected' : '' }}>
                    OSINT
                </option>
            </select>
        </div>

        <div class="flex flex-col mb-2 md:mb-0 mx-2 items-center">
            <div class="flex items-center mt-8">
                <label for="hideCompleted"></label>
                <input type="checkbox" id="hideCompleted" name="hideCompleted"
                       class="mr-2 checkbox bg-zinc-900 checkbox-error focus:border-red-500 focus:ring-red-500 shadow-xl" {{ $hideCompleted ? 'checked' : '' }}>
                <span class="text-white">Hide Completed</span>
            </div>
        </div>
        <div class="mb-2 md:mb-0 mt-5">
            <a href="{{ route('dashboard') }}" class="mx-2 mt-2 md:mt-0 btn btn-outline shadow-xl">
                Clear Filters
            </a>
            <button type="submit" class="mx-2 btn btn-outline btn-error shadow-xl">
                Search
            </button>
        </div>
    </form>
</div>
