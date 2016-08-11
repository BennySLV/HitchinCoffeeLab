<h2>Synopsis</h2>

<p>This project is a prototype website for Hitchin Coffee Lab - a new coffee shop in the Hertfordshire town of Hitchin. The website is designed using HTML/HTML5, CSS/LESS and Bootstrap and developed using JavaScript/jQuery as well as PHP and MySQL.</p>

<h2>Motivation</h2>

<p>The main purpose of this project is to enhance my personal project portfolio as well as simulate a standard web development lifecycle project.</p>

<h2>Installation</h2>

For example if you are using the LAMP Stack on Ubuntu, please do the following using the terminal:

<ol>
<li>Access the following file and edit using your preferred text editor (e.g. nano or vim):</li>
  - <code>/etc/apache2/sites-enabled/000-default.conf</code><br />

<li>Inside your <code>000-default.conf</code> file, add the following code at the bottom of the file:</li><br />

<code>&lt;VirtualHost *:80&gt;</code><br />
        <code>ServerName hitchincoffeelab.dev</code><br />
        <code>DocumentRoot /var/www/HitchinCoffeeLab/public</code><br />
        <code>SetEnv APPLICATION_ENV "development"</code><br />
        <code>&lt;Directory /var/www/HitchinCoffeeLab/public&gt;</code><br />
                  <code>Options FollowSymLinks</code><br />
                  <code>DirectoryIndex index.php</code><br />
                  <code>AllowOverride All</code><br />
                  <code>Order allow,deny</code><br />
                  <code>Allow from all</code><br />
        <code>&lt;/Directory&gt;</code><br />
<code>&lt;/VirtualHost&gt;</code>

<li>Then access your hosts file (<code>/etc/hosts</code>) and add a new line underneath your existing hosts with the following code:</li>

<code>127.0.0.1       hitchincoffeelab.dev localhost</code>
</ol>
<p>Please note that these above details will be different if you choose to use your own personal web server as opposed to localhost or if you plan to use another web-server stack such as MAMP, XAMPP, WAMP, etc.</p>