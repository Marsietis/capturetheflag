<x-app-layout>
    <x-slot name="header">
        <h2 class="text-4xl font-bold text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Learn') }}
        </h2>
    </x-slot>
    <div class="container mt-20 mx-auto px-4 sm:px-6 lg:px-8 text-white">

        <div class="text-4xl mb-2">Linux Basics</div>
        <div class="text-2xl">File Operations</div>
        <ul>
            <li>View EXIF data of a file: `exiftool filename`</li>
            <li>Open a file: `xdg-open filename`</li>
            <li>Open the current folder in a file explorer: `xdg-open .`</li>
            <li>Open a file (GNOME): `eog filename`</li>
            <li>Convert hexadecimal to ASCII: `echo -n 0x39 | xxd -r -p`</li>
            <li>Write a secret message to a file: `echo 'Secret message.' > secret.txt`</li>
            <li>List files in a website using a wordlist: `dirb target-website /path/to/wordlist.txt`</li>
        </ul>
        <div class="text-2xl">Steganography</div>
        <ul>
            <li>Hide a message in an image: `steghide embed -ef secret.txt -cf DSCN0042.jpg`</li>
            <li>Extract a message from an image: `steghide extract -sf DSCN0042.jpg -xf secret_extract.txt`</li>
        </ul>
        <div class="text-2xl">Forensics</div>
        <ul>
            <li>binwalk: Use binwalk to analyze the file's contents and identify embedded files, hidden data, or appended archives. Run the following command to extract any embedded files `binwalk -e filename`</li>
            <li>Extract files with binwalk: `binwalk --dd='.*' file.pptm`</li>
            <li>View EXIF data of a file: `exiftool filename`</li>
        </ul>

    </div>
</x-app-layout>
