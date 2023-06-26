<h1>CTF Preparation Notes</h1>

<h2 id="linux-basics">Linux Basics</h2>

<h3 id="file-operations">File Operations</h3>

<ul>
    <li>View EXIF data of a file: <code>exiftool filename</code></li>
    <li>Open a file: <code>xdg-open filename</code></li>
    <li>Open the current folder in a file explorer: <code>xdg-open .</code></li>
    <li>Open a file (GNOME): <code>eog filename</code></li>
    <li>Convert hexadecimal to ASCII: <code>echo -n 0x39 | xxd -r -p</code></li>
    <li>Write a secret message to a file: <code>echo 'Secret message.' > secret.txt</code></li>
    <li>List files in a website using a wordlist: <code>dirb &lt;target-website&gt; /path/to/wordlist.txt</code></li>
</ul>

<h3 id="steganography">Steganography</h3>

<ul>
    <li>Hide a message in an image: <code>steghide embed -ef secret.txt -cf DSCN0042.jpg</code></li>
    <li>Extract a message from an image: <code>steghide extract -sf DSCN0042.jpg -xf secret_extract.txt</code></li>
</ul>

<h3 id="forensics">Forensics</h3>

<ul>
    <li>binwalk: Use binwalk to analyze the file's contents and identify embedded files, hidden data, or appended archives. Run the following command to extract any embedded files <code>binwalk -e filename</code></li>
    <li>Extract files with binwalk: <code>binwalk --dd='.*' file.pptm</code></li>
    <li>View EXIF data of a file: <code>exiftool filename</code></li>
</ul>

<h3 id="directory-and-file-operations">Directory and File Operations</h3>

<ul>
    <li>Move to the previous directory: <code>cd -</code></li>
    <li>List files and directories with detailed information: <code>ls -la</code></li>
    <li>Display file content: <code>cat filename</code></li>
    <li>Display readable text from a file: <code>strings filename</code></li>
    <li>Display usage information: <code>--help</code></li>
    <li>Create a directory: <code>mkdir</code></li>
    <li>Create a file: <code>touch</code></li>
    <li>Get details about a file: <code>stat filename</code></li>
    <li>View command history with specified word: <code>history | grep mkdir</code></li>
</ul>

<h3 id="file-removal-rm">File Removal (rm)</h3>

<ul>
    <li>Remove a file: <code>rm filename</code></li>
    <li>Remove an empty directory: <code>rm -d directory</code></li>
    <li>Remove a non-empty directory: <code>rm -rf directory</code></li>
</ul>

<h3 id="file-copying-cp">File Copying (cp)</h3>

<ul>
    <li>Copy a file: <code>cp file.txt file_backup.txt</code></li>
    <li>Copy a file to a directory: <code>cp file.txt /tmp</code></li>
    <li>Copy a directory: <code>cp -R Pictures /opt/backup</code></li>
</ul>

<h3 id="file-movement-mv">File Movement (mv)</h3>

<ul>
    <li>Move a file to a directory: <code>mv file.txt /tmp</code></li>
    <li>Rename a file: <code>mv file.txt file1.txt</code></li>
    <li>Move multiple files to a directory: <code>mv file.txt file1.txt /tmp</code></li>
</ul>

<h2 id="linux-file-permissions">Linux File Permissions</h2>

<p>In Linux, each file is associated with an owner, a group, and permission access rights for three different classes of users: owner (user), group members (group), and everybody else (others). The following permission types apply to each class:</p>

<ul>
    <li>Read permission: 'r'</li>
    <li>Write permission: 'w'</li>
    <li>Execute permission: 'x'</li>
</ul>

<p>The permissions number of a specific user class is represented by the sum of the values of the permissions for that group:</p>

<ul>
    <li>'r' (read) = 4</li>
    <li>'w' (write) = 2</li>
    <li>'x' (execute) = 1</li>
    <li>No permissions = 0</li>
</ul>

<p>To set permissions, combine the values for each class and order them as follows:</p>

<pre><code>&lt;owner permissions&gt;&lt;group permissions&gt;&lt;others permissions&gt;</code></pre>

<p>For example, to set read, write, and execute permissions for the owner, read and write permissions for the group, and read permissions for everybody else, use the value <code>764</code>.</p>

<h3 id="changing-permissions-chmod">Changing Permissions (chmod)</h3>

<ul>
    <li>Change permissions of a file: <code>chmod 600 new_file.txt</code></li>
</ul>

<h3 id="changing-ownership-chown">Changing Ownership (chown)</h3>

<ul>
    <li>Change ownership of a file: <code>chown username filename.txt</code></li>
</ul>

<h2 id="finding-files-find">Finding Files (find)</h2>

<ul>
    <li>Find files with a partial name: <code>find /etc -name '*.conf'</code></li>
    <li>Find files with an exact filename: <code>find /etc -name 'client.conf'</code></li>
</ul>

<p>The asterisk '*' character can be used in the following ways:</p>

<ul>
    <li><code>file*</code>: Search for all files and folders that begin with 'file'</li>
    <li><code>*file</code>: Search for all files and folders that end with 'file'</li>
    <li><code>*file*</code>: Search for all files and folders that have 'file' in any position</li>
</ul>

<h2 id="text-searching-grep">Text Searching (grep)</h2>

<ul>
    <li>Search for a word in a file: <code>grep 'Directory' /etc/rsyslog.conf</code></li>
    <li>Case-insensitive search: <code>grep -i 'Directory' /etc/*.conf</code></li>
    <li>Search recursively in a directory: <code>grep -i -R 'Directory' /etc/</code></li>
</ul>

<h2 id="downloading-files-wget">Downloading Files (wget)</h2>

<ul>
    <li>Download a specified file and change its save file name: <code>wget https://filesamples.com/samples/document/txt/sample1.txt -O new_name.txt</code></li>
</ul>

<h2 id="base64-encoding-and-decoding">Base64 Encoding and Decoding</h2>

<ul>
    <li>Encode text to Base64: <code>echo -n 'Text that will be base64 encoded' | base64</code></li>
    <li>Multiple rounds of Base64 encoding: <code>echo -n 'Text that will be base64 encoded' | base64 | base64</code></li>
    <li>Decode Base64 to text: <code>echo -n 'VGV4dCB0aGF0IHdpbGwgYmUgYmFzZTY0IGVuY29kZWQ=' | base64 --decode</code></li>
    <li>Multiple rounds of Base64 decoding: <code>echo -n 'VkdWNGRDQjBhR0YwSUhkcGJHd2dZbVVnWW1GelpUWTBJR1Z1WTI5a1pXUT0K' | base64 -d | base64 -d</code> (can be shortened to <code>-d</code>)</li>
    <li>Decode Base64 to text with multiple rounds: <code>echo -n 'VkdWNGRDQjBhR0YwSUhkcGJHd2dZbVVnWW1GelpUWTBJR1Z1WTI5a1pXUT0K' | base64 --decode | base64 --decode</code></li>
</ul>
