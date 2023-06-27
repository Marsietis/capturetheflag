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

                    <p>Open a file (GNOME):</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>eog filename</code></pre>
                    </div>

                    <p>Convert hexadecimal to ASCII:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>echo -n 0x39 | xxd -r -p</code></pre>
                    </div>

                    <p>Write a secret message to a file:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>echo 'Secret message.' > secret.txt</code></pre>
                    </div>

                    <p>List files in a website using a wordlist:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>dirb &lt;target-website&gt; /path/to/wordlist.txt</code></pre>
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

                    <p>Use binwalk to analyze the file's contents and identify embedded files, hidden data, or appended
                        archives. Run the following command to extract any embedded files:</p>
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
                        <pre data-prefix="$"><code>cd -</code></pre>
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
                        <pre data-prefix="$"><code>--help</code></pre>
                    </div>

                    <p>Create a directory:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>mkdir</code></pre>
                    </div>

                    <p>Create a file:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>touch</code></pre>
                    </div>

                    <p>Get details about a file:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>stat filename</code></pre>
                    </div>

                    <p>View command history with specified word:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>history | grep mkdir</code></pre>
                    </div>

                    <h3>File Removal (rm)</h3>

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

                    <h3>File Copying (cp)</h3>

                    <p>Copy a file:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>cp file.txt file_backup.txt</code></pre>
                    </div>

                    <p>Copy a file to a directory:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>cp file.txt /tmp</code></pre>
                    </div>

                    <p>Copy a directory:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>cp -R Pictures /opt/backup</code></pre>
                    </div>

                    <h3>File Movement (mv)</h3>

                    <p>Move a file to a directory:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>mv file.txt /tmp</code></pre>
                    </div>

                    <p>Rename a file:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>mv file.txt file1.txt</code></pre>
                    </div>

                    <p>Move multiple files to a directory:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>mv file.txt file1.txt /tmp</code></pre>
                    </div>

                    <h2>Linux File Permissions</h2>

                    <p>In Linux, each file is associated with an owner, a group, and permission access rights for three
                        different classes of users: owner (user), group members (group), and everybody else (others).
                        The following permission types apply to each class:</p>

                    <p>Read permission: 'r'<br>
                        Write permission: 'w'<br>
                        Execute permission: 'x'</p>

                    <p>The permissions number of a specific user class is represented by the sum of the values of the
                        permissions for that group:</p>

                    <p>'r' (read) = 4<br>
                        'w' (write) = 2<br>
                        'x' (execute) = 1<br>
                        No permissions = 0</p>

                    <p>To set permissions, combine the values for each class and order them as follows:</p>

                    <p>&lt;owner permissions&gt;&lt;group permissions&gt;&lt;others permissions&gt;</p>

                    <p>For example, to set read, write, and execute permissions for the owner, read and write
                        permissions for the group, and read permissions for everybody else, use the value '764'.</p>

                    <h3>Changing Permissions (chmod)</h3>

                    <p>Change permissions of a file:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>chmod 600 new_file.txt</code></pre>
                    </div>

                    <h3>Changing Ownership (chown)</h3>

                    <p>Change ownership of a file:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>chown username filename.txt</code></pre>
                    </div>

                    <h2>Finding Files (find)</h2>

                    <p>Find files with a partial name:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>find /etc -name '*.conf'</code></pre>
                    </div>

                    <p>Find files with an exact filename:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>find /etc -name 'client.conf'</code></pre>
                    </div>

                    <p>The asterisk '*' character can be used in the following ways:</p>

                    <p>'file*': Search for all files and folders that begin with 'file'<br>
                        '*file': Search for all files and folders that end with 'file'<br>
                        '*file*': Search for all files and folders that have 'file' in any position</p>

                    <h2>Text Searching (grep)</h2>

                    <p>Search for a word in a file:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>grep 'Directory' /etc/rsyslog.conf</code></pre>
                    </div>

                    <p>Case-insensitive search:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>grep -i 'Directory' /etc/*.conf</code></pre>
                    </div>

                    <p>Search recursively in a directory:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>grep -i -R 'Directory' /etc/</code></pre>
                    </div>

                    <h2>Downloading Files (wget)</h2>

                    <p>Download a specified file and change its save file name:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>wget https://filesamples.com/samples/document/txt/sample1.txt -O new_name.txt</code></pre>
                    </div>

                    <h2>Base64 Encoding and Decoding</h2>

                    <p>Encode text to Base64:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>echo -n 'Text that will be base64 encoded' | base64</code></pre>
                    </div>

                    <p>Multiple rounds of Base64 encoding:</p>
                    <div class="mockup-code">
                        <pre
                            data-prefix="$"><code>echo -n 'Text that will be base64 encoded' | base64 | base64</code></pre>
                    </div>

                    <p>Decode Base64 to text:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>echo -n 'VGV4dCB0aGF0IHdpbGwgYmUgYmFzZTY0IGVuY29kZWQ=' | base64 --decode</code></pre>
                    </div>

                    <p>Multiple rounds of Base64 decoding:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>echo -n 'VkdWNGRDQjBhR0YwSUhkcGJHd2dZbVVnWW1GelpUWTFOUzFpWm1acGNqVTlNREJ6' | base64 --decode | base64 --decode</code></pre>
                    </div>

                    <h2>Hashing</h2>

                    <p>Calculate the MD5 hash of a file:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>md5sum filename</code></pre>
                    </div>

                    <p>Calculate the SHA-1 hash of a file:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>sha1sum filename</code></pre>
                    </div>

                    <p>Calculate the SHA-256 hash of a file:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>sha256sum filename</code></pre>
                    </div>

                    <p>Calculate the SHA-512 hash of a file:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>sha512sum filename</code></pre>
                    </div>

                    <h2>Process Management</h2>

                    <p>List running processes:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>ps aux</code></pre>
                    </div>

                    <p>Kill a process by process ID:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>kill PID</code></pre>
                    </div>

                    <p>Kill a process by name:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>killall process_name</code></pre>
                    </div>

                    <h2>Networking</h2>

                    <p>Check IP configuration:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>ifconfig</code></pre>
                    </div>

                    <p>Check network connectivity:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>ping target_ip</code></pre>
                    </div>

                    <p>Scan open ports on a target:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>nmap target_ip</code></pre>
                    </div>

                    <p>Check DNS information:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>nslookup domain</code></pre>
                    </div>

                    <p>Check DNS zone transfer:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>dig axfr domain</code></pre>
                    </div>

                    <p>Retrieve web page content:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>wget -qO- http://example.com</code></pre>
                    </div>

                    <p>Send an HTTP GET request:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>curl http://example.com</code></pre>
                    </div>

                    <p>Send an HTTP POST request with data:</p>
                    <div class="mockup-code">
                        <pre
                            data-prefix="$"><code>curl -d 'param1=value1&amp;param2=value2' -X POST http://example.com</code></pre>
                    </div>

                    <h2>System Information</h2>

                    <p>Display system information:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>uname -a</code></pre>
                    </div>

                    <p>Display CPU information:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>lscpu</code></pre>
                    </div>

                    <p>Display memory information:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>free -m</code></pre>
                    </div>

                    <p>Display disk space usage:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>df -h</code></pre>
                    </div>

                    <p>Display network interfaces:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>ip link</code></pre>
                    </div>

                    <p>Display running services:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>systemctl list-units --type=service</code></pre>
                    </div>

                    <p>Display logged-in users:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>who</code></pre>
                    </div>

                    <p>Display system uptime:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>uptime</code></pre>
                    </div>

                    <p>Display current date and time:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>date</code></pre>
                    </div>

                    <p>Display calendar:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>cal</code></pre>
                    </div>

                    <p>Display current user:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>whoami</code></pre>
                    </div>

                    <p>Display user information:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>id username</code></pre>
                    </div>

                    <p>Display environment variables:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>env</code></pre>
                    </div>

                    <p>Display system log:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>journalctl</code></pre>
                    </div>

                    <p>Reboot the system:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>reboot</code></pre>
                    </div>

                    <p>Shutdown the system:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>shutdown</code></pre>
                    </div>

                    <p>Exit the current session:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>exit</code></pre>
                    </div>

                    <p>For more detailed information and additional commands, you can refer to the Linux manual pages by
                        using the 'man' command followed by the command you want to learn about. For example:</p>
                    <div class="mockup-code">
                        <pre data-prefix="$"><code>man ls</code></pre>
                    </div>

                    <p>This will display the manual page for the 'ls' command, providing comprehensive documentation and
                        usage instructions.</p>

                    <p>Remember to exercise caution when using administrative commands, as they can modify or delete
                        critical files and configurations. Always double-check your commands before executing them,
                        especially when using commands like 'rm' or 'mv'.</p>

                    <p>Have fun exploring and learning more about the Linux command line!</p>

                </div>

            </div>
    </article>
    </div>

</x-app-layout>
