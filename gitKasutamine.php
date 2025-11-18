<?php
echo "<h2> GIT käsud </h2>>";
echo "<li> Repo loomine";
echo "<ol>";
echo "<pre>git init</pre>";
echo "</dt>";
?>

<li> Konfigureerimine

<pre>
    git config --global user.name "Anastasiia Radasheva"
    git config --global user.email "eha20082@gmail.com"
    git config --global --list
</pre>
</li>
<li>
<pre>
    ssh-keygen -o -t rsa -C "eha20082@gmail.com"
</pre>
    id_rsa.pub võti kopeeritakse githubi nagu deploy key
</li>
<li>
    Jälgimise liisamine ja commit'i tegemine
    <pre>
        git status
        git add .
        git commit -a -m "commiti tekst"
    </pre>
</li>
<?php
echo "<li>GITHUB projektiga sidumine";