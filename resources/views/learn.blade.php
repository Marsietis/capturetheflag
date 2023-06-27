<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Learn') }}
        </h2>
    </x-slot>
    <div class="text-white flex justify-center">
        <article class="prose">
            <div class="container mt-20 mx-auto px-4 sm:px-6 lg:px-8 ">
                <div class="mx-auto bg-zinc-900 p-8 sm:p-16 overflow-hidden shadow-xl sm:rounded-lg">
                    <h1>Here is a list of must know things to be effective at CTF games</h1>
                    <h2>Linux Basics</h2>
                    <h3>File Operations</h3>
                    <p>Remove a file:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>rm filename</code></pre>
                    </div>
                    <p>Remove an empty directory:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>rm -d directory</code></pre>
                    </div>
                    <p>Remove a non-empty directory:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>rm -rf</code></pre>
                    </div>
                    <p>:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code></code></pre>
                    </div>
                    <p>:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code></code></pre>
                    </div>
                    <p>:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code></code></pre>
                    </div>
                    <p>:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code></code></pre>
                    </div>
                    <p>:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code></code></pre>
                    </div>
                    <p>:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code></code></pre>
                    </div>
                    <p>View EXIF data of a file:</p>
                        <div class="mockup-code">
                            <pre data-prefix="$"><code>exiftool filename</code></pre>
                        </div>
                    <p>Open a file:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>xdg-open filename</code></pre>
                    </div>
                    <p>Open the current folder in a file explorer:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>xdg-open .</code></pre>
                    </div>
                    <p>Convert hexadecimal to ASCII:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>echo -n 0x39 | xxd -r -p</code></pre>
                    </div>
                    <p>Write a something to a file:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>echo 'Secret message.' > secret.txt</code></pre>
                    </div>
                    <p>List files in a website using a wordlist:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>dirb target-website /path/to/wordlist.txt</code></pre>
                    </div>
                    <h3>Steganography</h3>
                    <p>Hide a message in an image:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>steghide embed -ef secret.txt -cf DSCN0042.jpg</code></pre>
                    </div>
                    <p>Extract a message from an image:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>steghide extract -sf DSCN0042.jpg -xf secret_extract.txt</code></pre>
                    </div>
                    <h3>Forensics</h3>
                    <p>binwalk: Use binwalk to analyze the file's contents and identify embedded files, hidden data, or appended archives. Run the following command to extract any embedded files:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>binwalk -e filename</code></pre>
                    </div>
                    <p>Extract files with binwalk:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>binwalk --dd='.*' file.pptm</code></pre>
                    </div>
                    <p>View EXIF data of a file:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>exiftool filename</code></pre>
                    </div>

                    <h3>Directory and File Operations</h3>

                    <p>Move to the previous directory:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>cd ..</code></pre>
                    </div>
                    <p>List files and directories with detailed information:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>ls -la</code></pre>
                    </div>
                    <p>Display file content:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>cat filename</code></pre>
                    </div>
                    <p>Display readable text from a file:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>strings filename</code></pre>
                    </div>
                    <p>Display usage information:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>man tool</code></pre>
                    </div>
                    <p>Create a file:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>touch filename</code></pre>
                    </div>
                    <p>Get details about a file:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>stat filename</code></pre>
                    </div>
                    <p>View command history:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>history</code></pre>
                    </div>
                    <p>View command history with specified word:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>history | grep command</code></pre>
                    </div>

                    <p>:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code></code></pre>
                    </div>
                </div>
            </div>
    </article>
    </div>

</x-app-layout>
